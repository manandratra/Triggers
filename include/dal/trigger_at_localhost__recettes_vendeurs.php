<?php
$dalTablerecettes_vendeurs = array();
$dalTablerecettes_vendeurs["vd_id"] = array("type"=>3,"varname"=>"vd_id");
$dalTablerecettes_vendeurs["rc_date"] = array("type"=>7,"varname"=>"rc_date");
$dalTablerecettes_vendeurs["rc_montant"] = array("type"=>14,"varname"=>"rc_montant");
	$dalTablerecettes_vendeurs["vd_id"]["key"]=true;
	$dalTablerecettes_vendeurs["rc_date"]["key"]=true;

$dal_info["trigger_at_localhost__recettes_vendeurs"] = &$dalTablerecettes_vendeurs;
?>