<?php
// get the jason data
$url = "http://citibikenyc.com/stations/json";
$request = drupal_http_request($url);
$json_response = drupal_json_decode($request->data);
 var_dump($son_response);


//foreach ($json_response as $response_data) {

//$node = new StdClass();
//creating a bare node

//$node->type = 'post';
//giving it type

//$node->status = 1;
//give it a published staus

//$node->title = $json_response[title] ;
//gives title

//$node->body = $json_response[body];
//gives body

//node_save($node);
