<?php
$dalTablerecettes_vendeur_mois = array();
$dalTablerecettes_vendeur_mois["rc_year"] = array("type"=>3,"varname"=>"rc_year");
$dalTablerecettes_vendeur_mois["rc_month"] = array("type"=>3,"varname"=>"rc_month");
$dalTablerecettes_vendeur_mois["vd_id"] = array("type"=>3,"varname"=>"vd_id");
$dalTablerecettes_vendeur_mois["rc_montant"] = array("type"=>14,"varname"=>"rc_montant");
	$dalTablerecettes_vendeur_mois["rc_year"]["key"]=true;
	$dalTablerecettes_vendeur_mois["rc_month"]["key"]=true;
	$dalTablerecettes_vendeur_mois["vd_id"]["key"]=true;

$dal_info["trigger_at_localhost__recettes_vendeur_mois"] = &$dalTablerecettes_vendeur_mois;
?>