<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarecettes_vendeur_mois = array();
	$tdatarecettes_vendeur_mois[".truncateText"] = true;
	$tdatarecettes_vendeur_mois[".NumberOfChars"] = 80;
	$tdatarecettes_vendeur_mois[".ShortName"] = "recettes_vendeur_mois";
	$tdatarecettes_vendeur_mois[".OwnerID"] = "";
	$tdatarecettes_vendeur_mois[".OriginalTable"] = "recettes_vendeur_mois";

//	field labels
$fieldLabelsrecettes_vendeur_mois = array();
$fieldToolTipsrecettes_vendeur_mois = array();
$pageTitlesrecettes_vendeur_mois = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsrecettes_vendeur_mois["French"] = array();
	$fieldToolTipsrecettes_vendeur_mois["French"] = array();
	$pageTitlesrecettes_vendeur_mois["French"] = array();
	$fieldLabelsrecettes_vendeur_mois["French"]["rc_year"] = "Annee";
	$fieldToolTipsrecettes_vendeur_mois["French"]["rc_year"] = "";
	$fieldLabelsrecettes_vendeur_mois["French"]["rc_month"] = "Mois";
	$fieldToolTipsrecettes_vendeur_mois["French"]["rc_month"] = "";
	$fieldLabelsrecettes_vendeur_mois["French"]["vd_id"] = "Vendeur";
	$fieldToolTipsrecettes_vendeur_mois["French"]["vd_id"] = "";
	$fieldLabelsrecettes_vendeur_mois["French"]["rc_montant"] = "Montant";
	$fieldToolTipsrecettes_vendeur_mois["French"]["rc_montant"] = "";
	if (count($fieldToolTipsrecettes_vendeur_mois["French"]))
		$tdatarecettes_vendeur_mois[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrecettes_vendeur_mois[""] = array();
	$fieldToolTipsrecettes_vendeur_mois[""] = array();
	$pageTitlesrecettes_vendeur_mois[""] = array();
	if (count($fieldToolTipsrecettes_vendeur_mois[""]))
		$tdatarecettes_vendeur_mois[".isUseToolTips"] = true;
}


	$tdatarecettes_vendeur_mois[".NCSearch"] = true;



$tdatarecettes_vendeur_mois[".shortTableName"] = "recettes_vendeur_mois";
$tdatarecettes_vendeur_mois[".nSecOptions"] = 0;
$tdatarecettes_vendeur_mois[".recsPerRowPrint"] = 1;
$tdatarecettes_vendeur_mois[".mainTableOwnerID"] = "";
$tdatarecettes_vendeur_mois[".moveNext"] = 1;
$tdatarecettes_vendeur_mois[".entityType"] = 0;

$tdatarecettes_vendeur_mois[".strOriginalTableName"] = "recettes_vendeur_mois";

	



$tdatarecettes_vendeur_mois[".showAddInPopup"] = false;

$tdatarecettes_vendeur_mois[".showEditInPopup"] = false;

$tdatarecettes_vendeur_mois[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarecettes_vendeur_mois[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarecettes_vendeur_mois[".fieldsForRegister"] = array();

$tdatarecettes_vendeur_mois[".listAjax"] = false;

	$tdatarecettes_vendeur_mois[".audit"] = false;

	$tdatarecettes_vendeur_mois[".locking"] = false;

$tdatarecettes_vendeur_mois[".edit"] = true;
$tdatarecettes_vendeur_mois[".afterEditAction"] = 1;
$tdatarecettes_vendeur_mois[".closePopupAfterEdit"] = 1;
$tdatarecettes_vendeur_mois[".afterEditActionDetTable"] = "";

$tdatarecettes_vendeur_mois[".add"] = true;
$tdatarecettes_vendeur_mois[".afterAddAction"] = 1;
$tdatarecettes_vendeur_mois[".closePopupAfterAdd"] = 1;
$tdatarecettes_vendeur_mois[".afterAddActionDetTable"] = "";

$tdatarecettes_vendeur_mois[".list"] = true;

$tdatarecettes_vendeur_mois[".inlineEdit"] = true;
$tdatarecettes_vendeur_mois[".inlineAdd"] = true;
$tdatarecettes_vendeur_mois[".view"] = true;




$tdatarecettes_vendeur_mois[".delete"] = true;

$tdatarecettes_vendeur_mois[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatarecettes_vendeur_mois[".searchSaving"] = false;
//

$tdatarecettes_vendeur_mois[".showSearchPanel"] = true;
		$tdatarecettes_vendeur_mois[".flexibleSearch"] = true;

$tdatarecettes_vendeur_mois[".isUseAjaxSuggest"] = true;

$tdatarecettes_vendeur_mois[".rowHighlite"] = true;



$tdatarecettes_vendeur_mois[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarecettes_vendeur_mois[".isUseTimeForSearch"] = false;





$tdatarecettes_vendeur_mois[".allSearchFields"] = array();
$tdatarecettes_vendeur_mois[".filterFields"] = array();
$tdatarecettes_vendeur_mois[".requiredSearchFields"] = array();

$tdatarecettes_vendeur_mois[".allSearchFields"][] = "rc_year";
	$tdatarecettes_vendeur_mois[".allSearchFields"][] = "rc_month";
	$tdatarecettes_vendeur_mois[".allSearchFields"][] = "vd_id";
	$tdatarecettes_vendeur_mois[".allSearchFields"][] = "rc_montant";
	

$tdatarecettes_vendeur_mois[".googleLikeFields"] = array();
$tdatarecettes_vendeur_mois[".googleLikeFields"][] = "rc_year";
$tdatarecettes_vendeur_mois[".googleLikeFields"][] = "rc_month";
$tdatarecettes_vendeur_mois[".googleLikeFields"][] = "vd_id";
$tdatarecettes_vendeur_mois[".googleLikeFields"][] = "rc_montant";


$tdatarecettes_vendeur_mois[".advSearchFields"] = array();
$tdatarecettes_vendeur_mois[".advSearchFields"][] = "rc_year";
$tdatarecettes_vendeur_mois[".advSearchFields"][] = "rc_month";
$tdatarecettes_vendeur_mois[".advSearchFields"][] = "vd_id";
$tdatarecettes_vendeur_mois[".advSearchFields"][] = "rc_montant";

$tdatarecettes_vendeur_mois[".tableType"] = "list";

$tdatarecettes_vendeur_mois[".printerPageOrientation"] = 0;
$tdatarecettes_vendeur_mois[".nPrinterPageScale"] = 100;

$tdatarecettes_vendeur_mois[".nPrinterSplitRecords"] = 40;

$tdatarecettes_vendeur_mois[".nPrinterPDFSplitRecords"] = 40;



$tdatarecettes_vendeur_mois[".geocodingEnabled"] = false;





$tdatarecettes_vendeur_mois[".listGridLayout"] = 3;

$tdatarecettes_vendeur_mois[".isDisplayLoading"] = true;

$tdatarecettes_vendeur_mois[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatarecettes_vendeur_mois[".pageSize"] = 20;

$tdatarecettes_vendeur_mois[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarecettes_vendeur_mois[".strOrderBy"] = $tstrOrderBy;

$tdatarecettes_vendeur_mois[".orderindexes"] = array();

$tdatarecettes_vendeur_mois[".sqlHead"] = "SELECT rc_year,  	rc_month,  	vd_id,  	rc_montant";
$tdatarecettes_vendeur_mois[".sqlFrom"] = "FROM recettes_vendeur_mois";
$tdatarecettes_vendeur_mois[".sqlWhereExpr"] = "";
$tdatarecettes_vendeur_mois[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarecettes_vendeur_mois[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarecettes_vendeur_mois[".arrGroupsPerPage"] = $arrGPP;

$tdatarecettes_vendeur_mois[".highlightSearchResults"] = true;

$tableKeysrecettes_vendeur_mois = array();
$tableKeysrecettes_vendeur_mois[] = "rc_year";
$tableKeysrecettes_vendeur_mois[] = "rc_month";
$tableKeysrecettes_vendeur_mois[] = "vd_id";
$tdatarecettes_vendeur_mois[".Keys"] = $tableKeysrecettes_vendeur_mois;

$tdatarecettes_vendeur_mois[".listFields"] = array();
$tdatarecettes_vendeur_mois[".listFields"][] = "rc_year";
$tdatarecettes_vendeur_mois[".listFields"][] = "rc_month";
$tdatarecettes_vendeur_mois[".listFields"][] = "vd_id";
$tdatarecettes_vendeur_mois[".listFields"][] = "rc_montant";

$tdatarecettes_vendeur_mois[".hideMobileList"] = array();


$tdatarecettes_vendeur_mois[".viewFields"] = array();
$tdatarecettes_vendeur_mois[".viewFields"][] = "rc_year";
$tdatarecettes_vendeur_mois[".viewFields"][] = "rc_month";
$tdatarecettes_vendeur_mois[".viewFields"][] = "vd_id";
$tdatarecettes_vendeur_mois[".viewFields"][] = "rc_montant";

$tdatarecettes_vendeur_mois[".addFields"] = array();
$tdatarecettes_vendeur_mois[".addFields"][] = "rc_year";
$tdatarecettes_vendeur_mois[".addFields"][] = "rc_month";
$tdatarecettes_vendeur_mois[".addFields"][] = "vd_id";
$tdatarecettes_vendeur_mois[".addFields"][] = "rc_montant";

$tdatarecettes_vendeur_mois[".masterListFields"] = array();
$tdatarecettes_vendeur_mois[".masterListFields"][] = "rc_year";
$tdatarecettes_vendeur_mois[".masterListFields"][] = "rc_month";
$tdatarecettes_vendeur_mois[".masterListFields"][] = "vd_id";
$tdatarecettes_vendeur_mois[".masterListFields"][] = "rc_montant";

$tdatarecettes_vendeur_mois[".inlineAddFields"] = array();
$tdatarecettes_vendeur_mois[".inlineAddFields"][] = "rc_year";
$tdatarecettes_vendeur_mois[".inlineAddFields"][] = "rc_month";
$tdatarecettes_vendeur_mois[".inlineAddFields"][] = "vd_id";
$tdatarecettes_vendeur_mois[".inlineAddFields"][] = "rc_montant";

$tdatarecettes_vendeur_mois[".editFields"] = array();
$tdatarecettes_vendeur_mois[".editFields"][] = "rc_year";
$tdatarecettes_vendeur_mois[".editFields"][] = "rc_month";
$tdatarecettes_vendeur_mois[".editFields"][] = "vd_id";
$tdatarecettes_vendeur_mois[".editFields"][] = "rc_montant";

$tdatarecettes_vendeur_mois[".inlineEditFields"] = array();
$tdatarecettes_vendeur_mois[".inlineEditFields"][] = "rc_year";
$tdatarecettes_vendeur_mois[".inlineEditFields"][] = "rc_month";
$tdatarecettes_vendeur_mois[".inlineEditFields"][] = "vd_id";
$tdatarecettes_vendeur_mois[".inlineEditFields"][] = "rc_montant";

$tdatarecettes_vendeur_mois[".exportFields"] = array();

$tdatarecettes_vendeur_mois[".importFields"] = array();

$tdatarecettes_vendeur_mois[".printFields"] = array();

//	rc_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rc_year";
	$fdata["GoodName"] = "rc_year";
	$fdata["ownerTable"] = "recettes_vendeur_mois";
	$fdata["Label"] = GetFieldLabel("recettes_vendeur_mois","rc_year");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "rc_year";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rc_year";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarecettes_vendeur_mois["rc_year"] = $fdata;
//	rc_month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "rc_month";
	$fdata["GoodName"] = "rc_month";
	$fdata["ownerTable"] = "recettes_vendeur_mois";
	$fdata["Label"] = GetFieldLabel("recettes_vendeur_mois","rc_month");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "rc_month";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rc_month";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarecettes_vendeur_mois["rc_month"] = $fdata;
//	vd_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vd_id";
	$fdata["GoodName"] = "vd_id";
	$fdata["ownerTable"] = "recettes_vendeur_mois";
	$fdata["Label"] = GetFieldLabel("recettes_vendeur_mois","vd_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "vd_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vd_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarecettes_vendeur_mois["vd_id"] = $fdata;
//	rc_montant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "rc_montant";
	$fdata["GoodName"] = "rc_montant";
	$fdata["ownerTable"] = "recettes_vendeur_mois";
	$fdata["Label"] = GetFieldLabel("recettes_vendeur_mois","rc_montant");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarecettes_vendeur_mois["rc_montant"] = $fdata;


$tables_data["recettes_vendeur_mois"]=&$tdatarecettes_vendeur_mois;
$field_labels["recettes_vendeur_mois"] = &$fieldLabelsrecettes_vendeur_mois;
$fieldToolTips["recettes_vendeur_mois"] = &$fieldToolTipsrecettes_vendeur_mois;
$page_titles["recettes_vendeur_mois"] = &$pageTitlesrecettes_vendeur_mois;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["recettes_vendeur_mois"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["recettes_vendeur_mois"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_recettes_vendeur_mois()
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
	"m_srcTableName" => "recettes_vendeur_mois"
));

$proto6["m_sql"] = "rc_year";
$proto6["m_srcTableName"] = "recettes_vendeur_mois";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "rc_month",
	"m_strTable" => "recettes_vendeur_mois",
	"m_srcTableName" => "recettes_vendeur_mois"
));

$proto8["m_sql"] = "rc_month";
$proto8["m_srcTableName"] = "recettes_vendeur_mois";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vd_id",
	"m_strTable" => "recettes_vendeur_mois",
	"m_srcTableName" => "recettes_vendeur_mois"
));

$proto10["m_sql"] = "vd_id";
$proto10["m_srcTableName"] = "recettes_vendeur_mois";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "rc_montant",
	"m_strTable" => "recettes_vendeur_mois",
	"m_srcTableName" => "recettes_vendeur_mois"
));

$proto12["m_sql"] = "rc_montant";
$proto12["m_srcTableName"] = "recettes_vendeur_mois";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "recettes_vendeur_mois";
$proto15["m_srcTableName"] = "recettes_vendeur_mois";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "rc_year";
$proto15["m_columns"][] = "rc_month";
$proto15["m_columns"][] = "vd_id";
$proto15["m_columns"][] = "rc_montant";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "recettes_vendeur_mois";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "recettes_vendeur_mois";
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
$proto0["m_srcTableName"]="recettes_vendeur_mois";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_recettes_vendeur_mois = createSqlQuery_recettes_vendeur_mois();


	
		;

				

$tdatarecettes_vendeur_mois[".sqlquery"] = $queryData_recettes_vendeur_mois;

$tableEvents["recettes_vendeur_mois"] = new eventsBase;
$tdatarecettes_vendeur_mois[".hasEvents"] = false;

?>