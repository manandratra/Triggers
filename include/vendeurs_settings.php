<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavendeurs = array();
	$tdatavendeurs[".truncateText"] = true;
	$tdatavendeurs[".NumberOfChars"] = 80;
	$tdatavendeurs[".ShortName"] = "vendeurs";
	$tdatavendeurs[".OwnerID"] = "";
	$tdatavendeurs[".OriginalTable"] = "vendeurs";

//	field labels
$fieldLabelsvendeurs = array();
$fieldToolTipsvendeurs = array();
$pageTitlesvendeurs = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsvendeurs["French"] = array();
	$fieldToolTipsvendeurs["French"] = array();
	$pageTitlesvendeurs["French"] = array();
	$fieldLabelsvendeurs["French"]["vd_id"] = "id";
	$fieldToolTipsvendeurs["French"]["vd_id"] = "";
	$fieldLabelsvendeurs["French"]["vd_name"] = "Nom";
	$fieldToolTipsvendeurs["French"]["vd_name"] = "";
	$fieldLabelsvendeurs["French"]["salaire"] = "Salaire";
	$fieldToolTipsvendeurs["French"]["salaire"] = "";
	$fieldLabelsvendeurs["French"]["password"] = "Password";
	$fieldToolTipsvendeurs["French"]["password"] = "";
	if (count($fieldToolTipsvendeurs["French"]))
		$tdatavendeurs[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvendeurs[""] = array();
	$fieldToolTipsvendeurs[""] = array();
	$pageTitlesvendeurs[""] = array();
	if (count($fieldToolTipsvendeurs[""]))
		$tdatavendeurs[".isUseToolTips"] = true;
}


	$tdatavendeurs[".NCSearch"] = true;



$tdatavendeurs[".shortTableName"] = "vendeurs";
$tdatavendeurs[".nSecOptions"] = 0;
$tdatavendeurs[".recsPerRowPrint"] = 1;
$tdatavendeurs[".mainTableOwnerID"] = "";
$tdatavendeurs[".moveNext"] = 1;
$tdatavendeurs[".entityType"] = 0;

$tdatavendeurs[".strOriginalTableName"] = "vendeurs";

	



$tdatavendeurs[".showAddInPopup"] = false;

$tdatavendeurs[".showEditInPopup"] = false;

$tdatavendeurs[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavendeurs[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavendeurs[".fieldsForRegister"] = array();

$tdatavendeurs[".listAjax"] = false;

	$tdatavendeurs[".audit"] = false;

	$tdatavendeurs[".locking"] = false;

$tdatavendeurs[".edit"] = true;
$tdatavendeurs[".afterEditAction"] = 1;
$tdatavendeurs[".closePopupAfterEdit"] = 1;
$tdatavendeurs[".afterEditActionDetTable"] = "";

$tdatavendeurs[".add"] = true;
$tdatavendeurs[".afterAddAction"] = 1;
$tdatavendeurs[".closePopupAfterAdd"] = 1;
$tdatavendeurs[".afterAddActionDetTable"] = "";

$tdatavendeurs[".list"] = true;

$tdatavendeurs[".inlineEdit"] = true;
$tdatavendeurs[".inlineAdd"] = true;
$tdatavendeurs[".view"] = true;




$tdatavendeurs[".delete"] = true;

$tdatavendeurs[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatavendeurs[".searchSaving"] = false;
//

$tdatavendeurs[".showSearchPanel"] = true;
		$tdatavendeurs[".flexibleSearch"] = true;

$tdatavendeurs[".isUseAjaxSuggest"] = true;

$tdatavendeurs[".rowHighlite"] = true;



$tdatavendeurs[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavendeurs[".isUseTimeForSearch"] = false;





$tdatavendeurs[".allSearchFields"] = array();
$tdatavendeurs[".filterFields"] = array();
$tdatavendeurs[".requiredSearchFields"] = array();

$tdatavendeurs[".allSearchFields"][] = "vd_id";
	$tdatavendeurs[".allSearchFields"][] = "vd_name";
	$tdatavendeurs[".allSearchFields"][] = "salaire";
	$tdatavendeurs[".allSearchFields"][] = "password";
	

$tdatavendeurs[".googleLikeFields"] = array();
$tdatavendeurs[".googleLikeFields"][] = "vd_id";
$tdatavendeurs[".googleLikeFields"][] = "vd_name";
$tdatavendeurs[".googleLikeFields"][] = "salaire";
$tdatavendeurs[".googleLikeFields"][] = "password";


$tdatavendeurs[".advSearchFields"] = array();
$tdatavendeurs[".advSearchFields"][] = "vd_id";
$tdatavendeurs[".advSearchFields"][] = "vd_name";
$tdatavendeurs[".advSearchFields"][] = "salaire";
$tdatavendeurs[".advSearchFields"][] = "password";

$tdatavendeurs[".tableType"] = "list";

$tdatavendeurs[".printerPageOrientation"] = 0;
$tdatavendeurs[".nPrinterPageScale"] = 100;

$tdatavendeurs[".nPrinterSplitRecords"] = 40;

$tdatavendeurs[".nPrinterPDFSplitRecords"] = 40;



$tdatavendeurs[".geocodingEnabled"] = false;





$tdatavendeurs[".listGridLayout"] = 3;

$tdatavendeurs[".isDisplayLoading"] = true;

$tdatavendeurs[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatavendeurs[".pageSize"] = 20;

$tdatavendeurs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavendeurs[".strOrderBy"] = $tstrOrderBy;

$tdatavendeurs[".orderindexes"] = array();

$tdatavendeurs[".sqlHead"] = "SELECT vd_id,  	vd_name,  	salaire,  	password";
$tdatavendeurs[".sqlFrom"] = "FROM vendeurs";
$tdatavendeurs[".sqlWhereExpr"] = "";
$tdatavendeurs[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavendeurs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavendeurs[".arrGroupsPerPage"] = $arrGPP;

$tdatavendeurs[".highlightSearchResults"] = true;

$tableKeysvendeurs = array();
$tableKeysvendeurs[] = "vd_id";
$tdatavendeurs[".Keys"] = $tableKeysvendeurs;

$tdatavendeurs[".listFields"] = array();
$tdatavendeurs[".listFields"][] = "password";
$tdatavendeurs[".listFields"][] = "vd_id";
$tdatavendeurs[".listFields"][] = "vd_name";
$tdatavendeurs[".listFields"][] = "salaire";

$tdatavendeurs[".hideMobileList"] = array();


$tdatavendeurs[".viewFields"] = array();
$tdatavendeurs[".viewFields"][] = "vd_id";
$tdatavendeurs[".viewFields"][] = "vd_name";
$tdatavendeurs[".viewFields"][] = "salaire";
$tdatavendeurs[".viewFields"][] = "password";

$tdatavendeurs[".addFields"] = array();
$tdatavendeurs[".addFields"][] = "vd_name";
$tdatavendeurs[".addFields"][] = "salaire";
$tdatavendeurs[".addFields"][] = "password";

$tdatavendeurs[".masterListFields"] = array();
$tdatavendeurs[".masterListFields"][] = "vd_id";
$tdatavendeurs[".masterListFields"][] = "vd_name";
$tdatavendeurs[".masterListFields"][] = "salaire";
$tdatavendeurs[".masterListFields"][] = "password";

$tdatavendeurs[".inlineAddFields"] = array();
$tdatavendeurs[".inlineAddFields"][] = "password";
$tdatavendeurs[".inlineAddFields"][] = "vd_name";
$tdatavendeurs[".inlineAddFields"][] = "salaire";

$tdatavendeurs[".editFields"] = array();
$tdatavendeurs[".editFields"][] = "vd_name";
$tdatavendeurs[".editFields"][] = "salaire";
$tdatavendeurs[".editFields"][] = "password";

$tdatavendeurs[".inlineEditFields"] = array();
$tdatavendeurs[".inlineEditFields"][] = "password";
$tdatavendeurs[".inlineEditFields"][] = "vd_name";
$tdatavendeurs[".inlineEditFields"][] = "salaire";

$tdatavendeurs[".exportFields"] = array();
$tdatavendeurs[".exportFields"][] = "password";

$tdatavendeurs[".importFields"] = array();
$tdatavendeurs[".importFields"][] = "password";

$tdatavendeurs[".printFields"] = array();
$tdatavendeurs[".printFields"][] = "password";

//	vd_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vd_id";
	$fdata["GoodName"] = "vd_id";
	$fdata["ownerTable"] = "vendeurs";
	$fdata["Label"] = GetFieldLabel("vendeurs","vd_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
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




	$tdatavendeurs["vd_id"] = $fdata;
//	vd_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "vd_name";
	$fdata["GoodName"] = "vd_name";
	$fdata["ownerTable"] = "vendeurs";
	$fdata["Label"] = GetFieldLabel("vendeurs","vd_name");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "vd_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vd_name";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavendeurs["vd_name"] = $fdata;
//	salaire
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "salaire";
	$fdata["GoodName"] = "salaire";
	$fdata["ownerTable"] = "vendeurs";
	$fdata["Label"] = GetFieldLabel("vendeurs","salaire");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "salaire";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "salaire";

	
	
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




	$tdatavendeurs["salaire"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "vendeurs";
	$fdata["Label"] = GetFieldLabel("vendeurs","password");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavendeurs["password"] = $fdata;


$tables_data["vendeurs"]=&$tdatavendeurs;
$field_labels["vendeurs"] = &$fieldLabelsvendeurs;
$fieldToolTips["vendeurs"] = &$fieldToolTipsvendeurs;
$page_titles["vendeurs"] = &$pageTitlesvendeurs;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vendeurs"] = array();
//	recettes_vendeurs
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="recettes_vendeurs";
		$detailsParam["dOriginalTable"] = "recettes_vendeurs";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "recettes_vendeurs";
	$detailsParam["dCaptionTable"] = GetTableCaption("recettes_vendeurs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["vendeurs"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vendeurs"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vendeurs"][$dIndex]["masterKeys"][]="vd_id";

				$detailsTablesData["vendeurs"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vendeurs"][$dIndex]["detailKeys"][]="vd_id";

// tables which are master tables for current table (detail)
$masterTablesData["vendeurs"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vendeurs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vd_id,  	vd_name,  	salaire,  	password";
$proto0["m_strFrom"] = "FROM vendeurs";
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
	"m_strName" => "vd_id",
	"m_strTable" => "vendeurs",
	"m_srcTableName" => "vendeurs"
));

$proto6["m_sql"] = "vd_id";
$proto6["m_srcTableName"] = "vendeurs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "vd_name",
	"m_strTable" => "vendeurs",
	"m_srcTableName" => "vendeurs"
));

$proto8["m_sql"] = "vd_name";
$proto8["m_srcTableName"] = "vendeurs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "salaire",
	"m_strTable" => "vendeurs",
	"m_srcTableName" => "vendeurs"
));

$proto10["m_sql"] = "salaire";
$proto10["m_srcTableName"] = "vendeurs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "vendeurs",
	"m_srcTableName" => "vendeurs"
));

$proto12["m_sql"] = "password";
$proto12["m_srcTableName"] = "vendeurs";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "vendeurs";
$proto15["m_srcTableName"] = "vendeurs";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "vd_id";
$proto15["m_columns"][] = "vd_name";
$proto15["m_columns"][] = "salaire";
$proto15["m_columns"][] = "password";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "vendeurs";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "vendeurs";
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
$proto0["m_srcTableName"]="vendeurs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vendeurs = createSqlQuery_vendeurs();


	
		;

				

$tdatavendeurs[".sqlquery"] = $queryData_vendeurs;

$tableEvents["vendeurs"] = new eventsBase;
$tdatavendeurs[".hasEvents"] = false;

?>