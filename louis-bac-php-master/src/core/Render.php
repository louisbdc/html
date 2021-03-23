<?php


namespace Louis\core;


class Render
{

    /**
     * Use to send html file to client
     * @param string $filename
     */
    public function html($filename)
    {
        echo file_get_contents($filename);
    }

    /**
     * Use to send css file to client
     * @param string $filename
     */
    public function style($filename)
    {
        echo '<style>';
        echo file_get_contents($filename);
        echo '</style>';
    }

    /**
     * Use to send json data to client (When used in API context)
     * @param array $json
     */
    public function json($json) {
        header('Content-Type: application/json');
        echo json_encode($json);
    }
}