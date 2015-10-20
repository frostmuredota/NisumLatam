<?php
$jsonurl = "http://service.dice.com/api/rest/jobsearch/v1/simple.json?diceid=RTX153458";
$json = file_get_contents($jsonurl);
echo $json;

?>