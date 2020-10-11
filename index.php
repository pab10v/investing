<?php
/*
 * Basic API to extract data from widgets of investing.com 
 * Author: Javier Valle - artesanous@gmail.com 
 * 
 * <Aug-2020></Aug-2020>
*/

include("base.php");

$action    = getParameters();
$end_point = $action["a"];

$fecha = date(DATE_W3C); 

/* if end_point is not defined or query was not indicated 
 */
if( !isset($action["a"]) || !array_key_exists($end_point, $url) ){ 
        header('HTTP/1.1 500 Service not available');           //trigger error
        die(json_encode(array('error' => "Service not available")));
}


$api = new scrapper( $url[$end_point] );

switch($end_point){
    case 'crypto': 
    
    break;
    
    case 'single':
    case 'rates':
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode( $api->get_records(), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK | JSON_PRESERVE_ZERO_FRACTION ) ;
    
    break;


    default:
        print_r($result);
        break;       
}