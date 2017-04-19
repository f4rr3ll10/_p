<?php

function _p($v,$e = 0){
	echo "<pre>";
	print_r($v);
	echo "</pre>";
	if($e) exit;
}