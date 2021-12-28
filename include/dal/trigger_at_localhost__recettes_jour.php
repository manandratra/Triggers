<?php
$dalTablerecettes_jour = array();
$dalTablerecettes_jour["rc_date"] = array("type"=>7,"varname"=>"rc_date");
$dalTablerecettes_jour["rc_montant"] = array("type"=>14,"varname"=>"rc_montant");
$dalTablerecettes_jour["id"] = array("type"=>3,"varname"=>"id");
	$dalTablerecettes_jour["id"]["key"]=true;

$dal_info["trigger_at_localhost__recettes_jour"] = &$dalTablerecettes_jour;
?>