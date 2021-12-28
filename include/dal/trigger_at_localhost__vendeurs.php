<?php
$dalTablevendeurs = array();
$dalTablevendeurs["vd_id"] = array("type"=>3,"varname"=>"vd_id");
$dalTablevendeurs["vd_name"] = array("type"=>201,"varname"=>"vd_name");
$dalTablevendeurs["salaire"] = array("type"=>3,"varname"=>"salaire");
$dalTablevendeurs["password"] = array("type"=>200,"varname"=>"password");
	$dalTablevendeurs["vd_id"]["key"]=true;

$dal_info["trigger_at_localhost__vendeurs"] = &$dalTablevendeurs;
?>