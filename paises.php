<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

$p = array();

$p[] = '{ "AE": {"text": {"content": "", "attrs": {"font-size": 12}},"tooltip": {"content": "<b>Pasi</b> <br /> "},"attrs": {"fill": "#500101"}, "attrsHover": {"fill": "#800101"}, "href": ""} ,
 "CO": {"text": {"content": "", "attrs": {"font-size": 12}},"tooltip": {"content": "<b></b> <br /> "},"attrs": {"fill": "#500101"}, "attrsHover": {"fill": "#800101"}, "href": ""} ,
"BR": {"text": {"content": "", "attrs": {"font-size": 12}},"tooltip": {"content": "<b></b> <br /> "},"attrs": {"fill": "#500101"}, "attrsHover": {"fill": "#800101"}, "href": ""} }';


header('Content-type: application/json');
echo json_encode($p);


?>