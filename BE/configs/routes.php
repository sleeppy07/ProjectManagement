<?php
$routes['default_controller'] = 'home';
/*
 * Đường dẫn ảo => Đường dẫn thật
 *
* */
$routes['san-pham'] = 'product/list_product';
$routes['chi-tiet-san-pham'] = 'product/detail';
$routes['trang-chu'] = 'home';
$routes['tin-tuc/.+-(\d+).html'] = 'news/category/$1';
?>