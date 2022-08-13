<?php

//$BASE_URL = "http://localhost:8080/";
$BASE_URL = "http://".$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['REQUEST_URI']."?")."/";
