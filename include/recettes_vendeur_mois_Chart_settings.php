<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarecettes_vendeur_mois_Chart = array();
	$tdatarecettes_vendeur_mois_Chart[".truncateText"] = true;
	$tdatarecettes_vendeur_mois_Chart[".NumberOfChars"] = 80;
	$tdatarecettes_vendeur_mois_Chart[".ShortName"] = "recettes_vendeur_mois_Chart";
	$tdatarecettes_vendeur_mois_Chart[".OwnerID"] = "";
	$tdatarecettes_vendeur_mois_Chart[".OriginalTable"] = "recettes_vendeur_mois";

//	field labels
$fieldLabelsrecettes_vendeur_mois_Chart = array();
$fieldToolTipsrecettes_vendeur_mois_Chart = array();
$pageTitlesrecettes_vendeur_mois_Chart = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsrecettes_vendeur_mois_Chart["French"] = array();
	$fieldToolTipsrecettes_vendeur_mois_Chart["French"] = array();
	$pageTitlesrecettes_vendeur_mois_Chart["French"] = array();
	$fieldLabelsrecettes_vendeur_mois_Chart["French"]["rc_year"] = "Annee";
	$fieldToolTipsrecettes_vendeur_mois_Chart["French"]["rc_year"] = "";
	$fieldLabelsrecettes_vendeur_mois_Chart["French"]["rc_month"] = "Mois";
	$fieldToolTipsrecettes_vendeur_mois_Chart["French"]["rc_month"] = "";
	$fieldLabelsrecettes_vendeur_mois_Chart["French"]["vd_id"] = "Vendeur";
	$fieldToolTipsrecettes_vendeur_mois_Chart["French"]["vd_id"] = "";
	$fieldLabelsrecettes_vendeur_mois_Chart["French"]["rc_montant"] = "Montant";
	$fieldToolTipsrecettes_vendeur_mois_Chart["French"]["rc_montant"] = "";
	if (count($fieldToolTipsrecettes_vendeur_mois_Chart["French"]))
		$tdatarecettes_vendeur_mois_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrecettes_vendeur_mois_Chart[""] = array();
	$fieldToolTipsrecettes_vendeur_mois_Chart[""] = array();
	$pageTitlesrecettes_vendeur_mois_Chart[""] = array();
	if (count($fieldToolTipsrecettes_vendeur_mois_Chart[""]))
		$tdatarecettes_vendeur_mois_Chart[".isUseToolTips"] = true;
}


	$tdatarecettes_vendeur_mois_Chart[".NCSearch"] = true;

	$tdatarecettes_vendeur_mois_Chart[".ChartRefreshTime"] = 0;


$tdatarecettes_vendeur_mois_Chart[".shortTableName"] = "recettes_vendeur_mois_Chart";
$tdatarecettes_vendeur_mois_Chart[".nSecOptions"] = 0;
$tdatarecettes_vendeur_mois_Chart[".recsPerRowPrint"] = 1;
$tdatarecettes_vendeur_mois_Chart[".mainTableOwnerID"] = "";
$tdatarecettes_vendeur_mois_Chart[".moveNext"] = 1;
$tdatarecettes_vendeur_mois_Chart[".entityType"] = 3;

$tdatarecettes_vendeur_mois_Chart[".strOriginalTableName"] = "recettes_vendeur_mois";

	



$tdatarecettes_vendeur_mois_Chart[".showAddInPopup"] = false;

$tdatarecettes_vendeur_mois_Chart[".showEditInPopup"] = false;

$tdatarecettes_vendeur_mois_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarecettes_vendeur_mois_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarecettes_vendeur_mois_Chart[".fieldsForRegister"] = array();

$tdatarecettes_vendeur_mois_Chart[".listAjax"] = false;

	$tdatarecettes_vendeur_mois_Chart[".audit"] = false;

	$tdatarecettes_vendeur_mois_Chart[".locking"] = false;

$tdatarecettes_vendeur_mois_Chart[".edit"] = true;
$tdatarecettes_vendeur_mois_Chart[".afterEditAction"] = 1;
$tdatarecettes_vendeur_mois_Chart[".closePopupAfterEdit"] = 1;
$tdatarecettes_vendeur_mois_Chart[".afterEditActionDetTable"] = "";

$tdatarecettes_vendeur_mois_Chart[".add"] = true;
$tdatarecettes_vendeur_mois_Chart[".afterAddAction"] = 1;
$tdatarecettes_vendeur_mois_Chart[".closePopupAfterAdd"] = 1;
$tdatarecettes_vendeur_mois_Chart[".afterAddActionDetTable"] = "";

$tdatarecettes_vendeur_mois_Chart[".list"] = true;

$tdatarecettes_vendeur_mois_Chart[".view"] = true;




$tdatarecettes_vendeur_mois_Chart[".delete"] = true;

$tdatarecettes_vendeur_mois_Chart[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatarecettes_vendeur_mois_Chart[".searchSaving"] = false;
//

$tdatarecettes_vendeur_mois_Chart[".showSearchPanel"] = true;
		$tdatarecettes_vendeur_mois_Chart[".flexibleSearch"] = true;

$tdatarecettes_vendeur_mois_Chart[".isUseAjaxSuggest"] = true;




$tdatarecettes_vendeur_mois_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarecettes_vendeur_mois_Chart[".isUseTimeForSearch"] = false;





$tdatarecettes_vendeur_mois_Chart[".allSearchFields"] = array();
$tdatarecettes_vendeur_mois_Chart[".filterFields"] = array();
$tdatarecettes_vendeur_mois_Chart[".requiredSearchFields"] = array();

$tdatarecettes_vendeur_mois_Chart[".allSearchFields"][] = "rc_year";
	$tdatarecettes_vendeur_mois_Chart[".allSearchFields"][] = "rc_month";
	$tdatarecettes_vendeur_mois_Chart[".allSearchFields"][] = "vd_id";
	$tdatarecettes_vendeur_mois_Chart[".allSearchFields"][] = "rc_montant";
	

$tdatarecettes_vendeur_mois_Chart[".googleLikeFields"] = array();
$tdatarecettes_vendeur_mois_Chart[".googleLikeFields"][] = "rc_year";
$tdatarecettes_vendeur_mois_Chart[".googleLikeFields"][] = "rc_month";
$tdatarecettes_vendeur_mois_Chart[".googleLikeFields"][] = "vd_id";
$tdatarecettes_vendeur_mois_Chart[".googleLikeFields"][] = "rc_montant";


$tdatarecettes_vendeur_mois_Chart[".advSearchFields"] = array();
$tdatarecettes_vendeur_mois_Chart[".advSearchFields"][] = "rc_year";
$tdatarecettes_vendeur_mois_Chart[".advSearchFields"][] = "rc_month";
$tdatarecettes_vendeur_mois_Chart[".advSearchFields"][] = "vd_id";
$tdatarecettes_vendeur_mois_Chart[".advSearchFields"][] = "rc_montant";

$tdatarecettes_vendeur_mois_Chart[".tableType"] = "chart";

$tdatarecettes_vendeur_mois_Chart[".printerPageOrientation"] = 0;
$tdatarecettes_vendeur_mois_Chart[".nPrinterPageScale"] = 100;

$tdatarecettes_vendeur_mois_Chart[".nPrinterSplitRecords"] = 40;

$tdatarecettes_vendeur_mois_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdatarecettes_vendeur_mois_Chart[".geocodingEnabled"] = false;



// chart settings
$tdatarecettes_vendeur_mois_Chart[".chartType"] = "2DPie";
// end of chart settings


$tdatarecettes_vendeur_mois_Chart[".listGridLayout"] = 3;

$tdatarecettes_vendeur_mois_Chart[".isDisplayLoading"] = true;

$tdatarecettes_vendeur_mois_Chart[".isResizeColumns"] = true;



// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarecettes_vendeur_mois_Chart[".strOrderBy"] = $tstrOrderBy;

$tdatarecettes_vendeur_mois_Chart[".orderindexes"] = array();

$tdatarecettes_vendeur_mois_Chart[".sqlHead"] = "SELECT rc_year,  	rc_month,  	vd_id,  	rc_montant";
$tdatarecettes_vendeur_mois_Chart[".sqlFrom"] = "FROM recettes_vendeur_mois";
$tdatarecettes_vendeur_mois_Chart[".sqlWhereExpr"] = "";
$tdatarecettes_vendeur_mois_Chart[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarecettes_vendeur_mois_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarecettes_vendeur_mois_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdatarecettes_vendeur_mois_Chart[".highlightSearchResults"] = true;

$tableKeysrecettes_vendeur_mois_Chart = array();
$tableKeysrecettes_vendeur_mois_Chart[] = "rc_year";
$tableKeysrecettes_vendeur_mois_Chart[] = "rc_month";
$tableKeysrecettes_vendeur_mois_Chart[] = "vd_id";
$tdatarecettes_vendeur_mois_Chart[".Keys"] = $tableKeysrecettes_vendeur_mois_Chart;

$tdatarecettes_vendeur_mois_Chart[".listFields"] = array();
$tdatarecettes_vendeur_mois_Chart[".listFields"][] = "rc_year";
$tdatarecettes_vendeur_mois_Chart[".listFields"][] = "rc_month";
$tdatarecettes_vendeur_mois_Chart[".listFields"][] = "vd_id";
$tdatarecettes_vendeur_mois_Chart[".listFields"][] = "rc_montant";

$tdatarecettes_vendeur_mois_Chart[".hideMobileList"] = array();


$tdatarecettes_vendeur_mois_Chart[".viewFields"] = array();
$tdatarecettes_vendeur_mois_Chart[".viewFields"][] = "rc_year";
$tdatarecettes_vendeur_mois_Chart[".viewFields"][] = "rc_month";
$tdatarecettes_vendeur_mois_Chart[".viewFields"][] = "vd_id";
$tdatarecettes_vendeur_mois_Chart[".viewFields"][] = "rc_montant";

$tdatarecettes_vendeur_mois_Chart[".addFields"] = array();
$tdatarecettes_vendeur_mois_Chart[".addFields"][] = "rc_year";
$tdatarecettes_vendeur_mois_Chart[".addFields"][] = "rc_month";
$tdatarecettes_vendeur_mois_Chart[".addFields"][] = "vd_id";
$tdatarecettes_vendeur_mois_Chart[".addFields"][] = "rc_montant";

$tdatarecettes_vendeur_mois_Chart[".masterListFields"] = array();
$tdatarecettes_vendeur_mois_Chart[".masterListFields"][] = "rc_year";
$tdatarecettes_vendeur_mois_Chart[".masterListFields"][] = "rc_month";
$tdatarecettes_vendeur_mois_Chart[".masterListFields"][] = "vd_id";
$tdatarecettes_vendeur_mois_Chart[".masterListFields"][] = "rc_montant";

$tdatarecettes_vendeur_mois_Chart[".inlineAddFields"] = array();
$tdatarecettes_vendeur_mois_Chart[".inlineAddFields"][] = "rc_year";
$tdatarecettes_vendeur_mois_Chart[".inlineAddFields"][] = "rc_month";
$tdatarecettes_vendeur_mois_Chart[".inlineAddFields"][] = "vd_id";
$tdatarecettes_vendeur_mois_Chart[".inlineAddFields"][] = "rc_montant";

$tdatarecettes_vendeur_mois_Chart[".editFields"] = array();
$tdatarecettes_vendeur_mois_Chart[".editFields"][] = "rc_year";
$tdatarecettes_vendeur_mois_Chart[".editFields"][] = "rc_month";
$tdatarecettes_vendeur_mois_Chart[".editFields"][] = "vd_id";
$tdatarecettes_vendeur_mois_Chart[".editFields"][] = "rc_montant";

$tdatarecettes_vendeur_mois_Chart[".inlineEditFields"] = array();
$tdatarecettes_vendeur_mois_Chart[".inlineEditFields"][] = "rc_year";
$tdatarecettes_vendeur_mois_Chart[".inlineEditFields"][] = "rc_month";
$tdatarecettes_vendeur_mois_Chart[".inlineEditFields"][] = "vd_id";
$tdatarecettes_vendeur_mois_Chart[".inlineEditFields"][] = "rc_montant";

$tdatarecettes_vendeur_mois_Chart[".exportFields"] = array();
$tdatarecettes_vendeur_mois_Chart[".exportFields"][] = "rc_year";
$tdatarecettes_vendeur_mois_Chart[".exportFields"][] = "rc_month";
$tdatarecettes_vendeur_mois_Chart[".exportFields"][] = "vd_id";
$tdatarecettes_vendeur_mois_Chart[".exportFields"][] = "rc_montant";

$tdatarecettes_vendeur_mois_Chart[".importFields"] = array();
$tdatarecettes_vendeur_mois_Chart[".importFields"][] = "rc_year";
$tdatarecettes_vendeur_mois_Chart[".importFields"][] = "rc_month";
$tdatarecettes_vendeur_mois_Chart[".importFields"][] = "vd_id";
$tdatarecettes_vendeur_mois_Chart[".importFields"][] = "rc_montant";

$tdatarecettes_vendeur_mois_Chart[".printFields"] = array();
$tdatarecettes_vendeur_mois_Chart[".printFields"][] = "rc_year";
$tdatarecettes_vendeur_mois_Chart[".printFields"][] = "rc_month";
$tdatarecettes_vendeur_mois_Chart[".printFields"][] = "vd_id";
$tdatarecettes_vendeur_mois_Chart[".printFields"][] = "rc_montant";

//	rc_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rc_year";
	$fdata["GoodName"] = "rc_year";
	$fdata["ownerTable"] = "recettes_vendeur_mois";
	$fdata["Label"] = GetFieldLabel("recettes_vendeur_mois_Chart","rc_year");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rc_year";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rc_year";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarecettes_vendeur_mois_Chart["rc_year"] = $fdata;
//	rc_month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "rc_month";
	$fdata["GoodName"] = "rc_month";
	$fdata["ownerTable"] = "recettes_vendeur_mois";
	$fdata["Label"] = GetFieldLabel("recettes_vendeur_mois_Chart","rc_month");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rc_month";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rc_month";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarecettes_vendeur_mois_Chart["rc_month"] = $fdata;
//	vd_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vd_id";
	$fdata["GoodName"] = "vd_id";
	$fdata["ownerTable"] = "recettes_vendeur_mois";
	$fdata["Label"] = GetFieldLabel("recettes_vendeur_mois_Chart","vd_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "vd_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vd_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarecettes_vendeur_mois_Chart["vd_id"] = $fdata;
//	rc_montant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "rc_montant";
	$fdata["GoodName"] = "rc_montant";
	$fdata["ownerTable"] = "recettes_vendeur_mois";
	$fdata["Label"] = GetFieldLabel("recettes_vendeur_mois_Chart","rc_montant");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rc_montant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rc_montant";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarecettes_vendeur_mois_Chart["rc_montant"] = $fdata;

	$tdatarecettes_vendeur_mois_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">recettes_vendeur_mois Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>

		<attr value="parameters">';
	$tdatarecettes_vendeur_mois_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">rc_montant</attr>';
	$tdatarecettes_vendeur_mois_Chart[".chartXml"] .= '</attr>';
	$tdatarecettes_vendeur_mois_Chart[".chartXml"] .= '<attr value="1">
			<attr value="name">rc_year</attr>';
	$tdatarecettes_vendeur_mois_Chart[".chartXml"] .= '</attr>';
	$tdatarecettes_vendeur_mois_Chart[".chartXml"] .= '<attr value="2">
			<attr value="name">rc_month</attr>';
	$tdatarecettes_vendeur_mois_Chart[".chartXml"] .= '</attr>';
	$tdatarecettes_vendeur_mois_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">rc_year</attr>
	</attr>';
	$tdatarecettes_vendeur_mois_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatarecettes_vendeur_mois_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("recettes_vendeur_mois Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("rc_year").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">None</attr>
<attr value="cview">Column</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatarecettes_vendeur_mois_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatarecettes_vendeur_mois_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">rc_year</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("recettes_vendeur_mois_Chart","rc_year")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatarecettes_vendeur_mois_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">rc_month</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("recettes_vendeur_mois_Chart","rc_month")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatarecettes_vendeur_mois_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">vd_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("recettes_vendeur_mois_Chart","vd_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatarecettes_vendeur_mois_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">rc_montant</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("recettes_vendeur_mois_Chart","rc_montant")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatarecettes_vendeur_mois_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">recettes_vendeur_mois Chart</attr>
<attr value="short_table_name">recettes_vendeur_mois_Chart</attr>
</attr>

</chart>';

$tables_data["recettes_vendeur_mois Chart"]=&$tdatarecettes_vendeur_mois_Chart;
$field_labels["recettes_vendeur_mois_Chart"] = &$fieldLabelsrecettes_vendeur_mois_Chart;
$fieldToolTips["recettes_vendeur_mois_Chart"] = &$fieldToolTipsrecettes_vendeur_mois_Chart;
$page_titles["recettes_vendeur_mois_Chart"] = &$pageTitlesrecettes_vendeur_mois_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["recettes_vendeur_mois Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["recettes_vendeur_mois Chart"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_recettes_vendeur_mois_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rc_year,  	rc_month,  	vd_id,  	rc_montant";
$proto0["m_strFrom"] = "FROM recettes_vendeur_mois";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "rc_year",
	"m_strTable" => "recettes_vendeur_mois",
	"m_srcTableName" => "recettes_vendeur_mois Chart"
));

$proto6["m_sql"] = "rc_year";
$proto6["m_srcTableName"] = "recettes_vendeur_mois Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "rc_month",
	"m_strTable" => "recettes_vendeur_mois",
	"m_srcTableName" => "recettes_vendeur_mois Chart"
));

$proto8["m_sql"] = "rc_month";
$proto8["m_srcTableName"] = "recettes_vendeur_mois Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vd_id",
	"m_strTable" => "recettes_vendeur_mois",
	"m_srcTableName" => "recettes_vendeur_mois Chart"
));

$proto10["m_sql"] = "vd_id";
$proto10["m_srcTableName"] = "recettes_vendeur_mois Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "rc_montant",
	"m_strTable" => "recettes_vendeur_mois",
	"m_srcTableName" => "recettes_vendeur_mois Chart"
));

$proto12["m_sql"] = "rc_montant";
$proto12["m_srcTableName"] = "recettes_vendeur_mois Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "recettes_vendeur_mois";
$proto15["m_srcTableName"] = "recettes_vendeur_mois Chart";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "rc_year";
$proto15["m_columns"][] = "rc_month";
$proto15["m_columns"][] = "vd_id";
$proto15["m_columns"][] = "rc_montant";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "recettes_vendeur_mois";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "recettes_vendeur_mois Chart";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="recettes_vendeur_mois Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_recettes_vendeur_mois_Chart = createSqlQuery_recettes_vendeur_mois_Chart();


	
		;

				

$tdatarecettes_vendeur_mois_Chart[".sqlquery"] = $queryData_recettes_vendeur_mois_Chart;

$tableEvents["recettes_vendeur_mois Chart"] = new eventsBase;
$tdatarecettes_vendeur_mois_Chart[".hasEvents"] = false;

?>