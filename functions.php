<?php

/***
 * getParameters:
 * Returns an array with parameters passed in url
 * 
 */
function getParameters(){
    // Parse incoming query and variables
    return (isset($_SERVER['CONTENT_TYPE']) && strpos($_SERVER['CONTENT_TYPE'], 'application/json') !== false) 
            ? json_decode( file_get_contents('php://input'), true) 
            : $_REQUEST;

}

