<?php
session_start();
require_once 'bootstrap.php';
$app = new App();

//set múi giờ việt nam
date_default_timezone_set('Asia/Ho_Chi_Minh');