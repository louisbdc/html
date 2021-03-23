<?php

require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Louis\core\Render;
use Louis\core\Router;

$factory = (new Factory)->withServiceAccount(__DIR__ . '/serviceAccountKey.json');
$database = $factory->createDatabase();

/**
 * Page not found
 */
$pageNotFound = function () {
    $render = new Render();
    $render->style("./src/vue/not-found.min.css");
    $render->html("./src/vue/not-found.html");
};

/**
 * Route manager
 */
$router = new Router($pageNotFound);

/**
 * ** Routes part **
 */

/**
 * Default route
 */

$router->addRoute("GET", "/", function () {
    $render = new Render();
    $render->style("./src/vue/home.css");
    $render->html("./src/vue/home.html");
});

/**
 * Api route
 * Add drone data to database
 */
$router->addRoute("POST", "/drone/report", function () use ($database) {
    // Get user inputs
    $temperature = $_POST["temperature"] ?? null;
    $altitude = $_POST["altitude"] ?? null;
    $render = new Render();

    // Handle error
    if ($temperature == null || $altitude == null || !is_numeric($temperature) || !is_numeric($altitude)) {
        $render->json(["error" => "Missing parameters", "status" => ["altitude" => "string", "temperature" => "string"]]);
        return;
    }
    // Get reference to create a new item
    $newPost = $database->getReference("drone_data");
    // Create new item
    $item = ["altitude" => $_POST["altitude"], "temperature" => $_POST["temperature"]];
    // Send new item
    $newPost->push($item);
    // Respond to user
    $render->json(["status" => "success"]);
});

/**
 * Run router
 */
$router->manage();
