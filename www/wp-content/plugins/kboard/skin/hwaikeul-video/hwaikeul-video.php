<?php
/*
Plugin Name: KBoard 화이클 비디오 스킨
Plugin URI: https://www.cosmosfarm.com/wpstore/product/kboard-hwaikeul-video-skin
Description: KBoard 화이클 비디오 스킨입니다.
Version: 1.6
Author: 코스모스팜 - Cosmosfarm
Author URI: https://www.cosmosfarm.com
*/

if(!defined('ABSPATH')) exit;

add_filter('kboard_skin_list', 'kboard_skin_list_hwaikeul_video', 10, 1);
function kboard_skin_list_hwaikeul_video($list){
	
	$skin = new stdClass();
	$skin->dir = dirname(__FILE__);
	$skin->url = plugins_url('', __FILE__);
	$skin->name = basename($skin->dir);
	
	$list[$skin->name] = $skin;
	
	return $list;
}