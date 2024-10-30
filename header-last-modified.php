<?php
/*
Plugin Name: Header Last Modified
Plugin URI: http://wordpress.org/extend/plugins/header-last-modified/
Description: Add post last modified to HTTP header to enable squid or cdn to cache your wordpress web page.
             Squid will not cache the page without http header field Last-Modified.
Version: 1.00
Author: yaofuyuan
Author URI: http://yifangyou.blog.chinaunix.net
*/
function header_last_modified() {
    global $post;
    if(isset($post) && isset($post->post_modified)){
        $post_mod_date=date("D, d M Y H:i:s",strtotime($post->post_modified));
        header('Last-Modified: '.$post_mod_date.' GMT');
     }
}
?>
