<?php
require_once(getabspath("classes/cipherer.php"));




$tdataaudit_vendeurs = array();
	$tdataaudit_vendeurs[".truncateText"] = true;
	$tdataaudit_vendeurs[".NumberOfChars"] = 80;
	$tdataaudit_vendeurs[".ShortName"] = "audit_vendeurs";
	$tdataaudit_vendeurs[".OwnerID"] = "";
	$tdataaudit_vendeurs[".OriginalTable"] = "audit_vendeurs";

//	field labels
$fieldLabelsaudit_vendeurs = array();
$fieldToolTipsaudit_vendeurs = array();
$pageTitlesaudit_vendeurs = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsaudit_vendeurs["French"] = array();
	$fieldToolTipsaudit_vendeurs["French"] = array();
	$pageTitlesaudit_vendeurs["French"] = array();
	$fieldLabelsaudit_vendeurs["French"]["id"] = "Id";
	$fieldToolTipsaudit_vendeurs["French"]["id"] = "";
	$fieldLabelsaudit_vendeurs["French"]["quand"] = "Quand";
	$fieldToolTipsaudit_vendeurs["French"]["quand"] = "";
	$fieldLabelsaudit_vendeurs["French"]["qui"] = "Qui";
	$fieldToolTipsaudit_vendeurs["French"]["qui"] = "";
	$fieldLabelsaudit_vendeurs["French"]["quoi"] = "Quoi";
	$fieldToolTipsaudit_vendeurs["French"]["quoi"] = "";
	$fieldLabelsaudit_vendeurs["French"]["nouveau_salaire"] = "Nouveau Salaire";
	$fieldToolTipsaudit_vendeurs["French"]["nouveau_salaire"] = "";
	if (count($fieldToolTipsaudit_vendeurs["French"]))
		$tdataaudit_vendeurs[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsaudit_vendeurs[""] = array();
	$fieldToolTipsaudit_vendeurs[""] = array();
	$pageTitlesaudit_vendeurs[""] = array();
	if (count($fieldToolTipsaudit_vendeurs[""]))
		$tdataaudit_vendeurs[".isUseToolTips"] = true;
}


	$tdataaudit_vendeurs[".NCSearch"] = true;



$tdataaudit_vendeurs[".shortTableName"] = "audit_vendeurs";
$tdataaudit_vendeurs[".nSecOptions"] = 0;
$tdataaudit_vendeurs[".recsPerRowPrint"] = 1;
$tdataaudit_vendeurs[".mainTableOwnerID"] = "";
$tdataaudit_vendeurs[".moveNext"] = 1;
$tdataaudit_vendeurs[".entityType"] = 0;

$tdataaudit_vendeurs[".strOriginalTableName"] = "audit_vendeurs";

	



$tdataaudit_vendeurs[".showAddInPopup"] = false;

$tdataaudit_vendeurs[".showEditInPopup"] = false;

$tdataaudit_vendeurs[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataaudit_vendeurs[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataaudit_vendeurs[".fieldsForRegister"] = array();

$tdataaudit_vendeurs[".listAjax"] = false;

	$tdataaudit_vendeurs[".audit"] = false;

	$tdataaudit_vendeurs[".locking"] = false;

$tdataaudit_vendeurs[".edit"] = true;
$tdataaudit_vendeurs[".afterEditAction"] = 1;
$tdataaudit_vendeurs[".closePopupAfterEdit"] = 1;
$tdataaudit_vendeurs[".afterEditActionDetTable"] = "";

$tdataaudit_vendeurs[".add"] = true;
$tdataaudit_vendeurs[".afterAddAction"] = 1;
$tdataaudit_vendeurs[".closePopupAfterAdd"] = 1;
$tdataaudit_vendeurs[".afterAddActionDetTable"] = "";

$tdataaudit_vendeurs[".list"] = true;

$tdataaudit_vendeurs[".inlineEdit"] = true;
$tdataaudit_vendeurs[".inlineAdd"] = true;




$tdataaudit_vendeurs[".delete"] = true;

$tdataaudit_vendeurs[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataaudit_vendeurs[".searchSaving"] = false;
//

$tdataaudit_vendeurs[".showSearchPanel"] = true;
		$tdataaudit_vendeurs[".flexibleSearch"] = true;

$tdataaudit_vendeurs[".isUseAjaxSuggest"] = true;

$tdataaudit_vendeurs[".rowHighlite"] = true;



$tdataaudit_vendeurs[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaudit_vendeurs[".isUseTimeForSearch"] = false;



$tdataaudit_vendeurs[".badgeColor"] = "E07878";


$tdataaudit_vendeurs[".allSearchFields"] = array();
$tdataaudit_vendeurs[".filterFields"] = array();
$tdataaudit_vendeurs[".requiredSearchFields"] = array();

$tdataaudit_vendeurs[".allSearchFields"][] = "id";
	$tdataaudit_vendeurs[".allSearchFields"][] = "quand";
	$tdataaudit_vendeurs[".allSearchFields"][] = "qui";
	$tdataaudit_vendeurs[".allSearchFields"][] = "quoi";
	$tdataaudit_vendeurs[".allSearchFields"][] = "nouveau_salaire";
	

$tdataaudit_vendeurs[".googleLikeFields"] = array();
$tdataaudit_vendeurs[".googleLikeFields"][] = "id";
$tdataaudit_vendeurs[".googleLikeFields"][] = "quand";
$tdataaudit_vendeurs[".googleLikeFields"][] = "qui";
$tdataaudit_vendeurs[".googleLikeFields"][] = "quoi";
$tdataaudit_vendeurs[".googleLikeFields"][] = "nouveau_salaire";


$tdataaudit_vendeurs[".advSearchFields"] = array();
$tdataaudit_vendeurs[".advSearchFields"][] = "id";
$tdataaudit_vendeurs[".advSearchFields"][] = "quand";
$tdataaudit_vendeurs[".advSearchFields"][] = "qui";
$tdataaudit_vendeurs[".advSearchFields"][] = "quoi";
$tdataaudit_vendeurs[".advSearchFields"][] = "nouveau_salaire";

$tdataaudit_vendeurs[".tableType"] = "list";

$tdataaudit_vendeurs[".printerPageOrientation"] = 0;
$tdataaudit_vendeurs[".nPrinterPageScale"] = 100;

$tdataaudit_vendeurs[".nPrinterSplitRecords"] = 40;

$tdataaudit_vendeurs[".nPrinterPDFSplitRecords"] = 40;



$tdataaudit_vendeurs[".geocodingEnabled"] = false;





$tdataaudit_vendeurs[".listGridLayout"] = 3;

$tdataaudit_vendeurs[".isDisplayLoading"] = true;

$tdataaudit_vendeurs[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataaudit_vendeurs[".pageSize"] = 20;

$tdataaudit_vendeurs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataaudit_vendeurs[".strOrderBy"] = $tstrOrderBy;

$tdataaudit_vendeurs[".orderindexes"] = array();

$tdataaudit_vendeurs[".sqlHead"] = "SELECT id,  	quand,  	qui,  	quoi,  	nouveau_salaire";
$tdataaudit_vendeurs[".sqlFrom"] = "FROM audit_vendeurs";
$tdataaudit_vendeurs[".sqlWhereExpr"] = "";
$tdataaudit_vendeurs[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaudit_vendeurs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaudit_vendeurs[".arrGroupsPerPage"] = $arrGPP;

$tdataaudit_vendeurs[".highlightSearchResults"] = true;

$tableKeysaudit_vendeurs = array();
$tableKeysaudit_vendeurs[] = "id";
$tdataaudit_vendeurs[".Keys"] = $tableKeysaudit_vendeurs;

$tdataaudit_vendeurs[".listFields"] = array();
$tdataaudit_vendeurs[".listFields"][] = "id";
$tdataaudit_vendeurs[".listFields"][] = "quand";
$tdataaudit_vendeurs[".listFields"][] = "qui";
$tdataaudit_vendeurs[".listFields"][] = "quoi";
$tdataaudit_vendeurs[".listFields"][] = "nouveau_salaire";

$tdataaudit_vendeurs[".hideMobileList"] = array();


$tdataaudit_vendeurs[".viewFields"] = array();

$tdataaudit_vendeurs[".addFields"] = array();
$tdataaudit_vendeurs[".addFields"][] = "quand";
$tdataaudit_vendeurs[".addFields"][] = "qui";
$tdataaudit_vendeurs[".addFields"][] = "quoi";
$tdataaudit_vendeurs[".addFields"][] = "nouveau_salaire";

$tdataaudit_vendeurs[".masterListFields"] = array();
$tdataaudit_vendeurs[".masterListFields"][] = "id";
$tdataaudit_vendeurs[".masterListFields"][] = "quand";
$tdataaudit_vendeurs[".masterListFields"][] = "qui";
$tdataaudit_vendeurs[".masterListFields"][] = "quoi";
$tdataaudit_vendeurs[".masterListFields"][] = "nouveau_salaire";

$tdataaudit_vendeurs[".inlineAddFields"] = array();
$tdataaudit_vendeurs[".inlineAddFields"][] = "quand";
$tdataaudit_vendeurs[".inlineAddFields"][] = "qui";
$tdataaudit_vendeurs[".inlineAddFields"][] = "quoi";
$tdataaudit_vendeurs[".inlineAddFields"][] = "nouveau_salaire";

$tdataaudit_vendeurs[".editFields"] = array();
$tdataaudit_vendeurs[".editFields"][] = "quand";
$tdataaudit_vendeurs[".editFields"][] = "qui";
$tdataaudit_vendeurs[".editFields"][] = "quoi";
$tdataaudit_vendeurs[".editFields"][] = "nouveau_salaire";

$tdataaudit_vendeurs[".inlineEditFields"] = array();
$tdataaudit_vendeurs[".inlineEditFields"][] = "quand";
$tdataaudit_vendeurs[".inlineEditFields"][] = "qui";
$tdataaudit_vendeurs[".inlineEditFields"][] = "quoi";
$tdataaudit_vendeurs[".inlineEditFields"][] = "nouveau_salaire";

$tdataaudit_vendeurs[".exportFields"] = array();

$tdataaudit_vendeurs[".importFields"] = array();

$tdataaudit_vendeurs[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "audit_vendeurs";
	$fdata["Label"] = GetFieldLabel("audit_vendeurs","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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




	$tdataaudit_vendeurs["id"] = $fdata;
//	quand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "quand";
	$fdata["GoodName"] = "quand";
	$fdata["ownerTable"] = "audit_vendeurs";
	$fdata["Label"] = GetFieldLabel("audit_vendeurs","quand");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "quand";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "quand";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataaudit_vendeurs["quand"] = $fdata;
//	qui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "qui";
	$fdata["GoodName"] = "qui";
	$fdata["ownerTable"] = "audit_vendeurs";
	$fdata["Label"] = GetFieldLabel("audit_vendeurs","qui");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "qui";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qui";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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




	$tdataaudit_vendeurs["qui"] = $fdata;
//	quoi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "quoi";
	$fdata["GoodName"] = "quoi";
	$fdata["ownerTable"] = "audit_vendeurs";
	$fdata["Label"] = GetFieldLabel("audit_vendeurs","quoi");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "quoi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "quoi";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdataaudit_vendeurs["quoi"] = $fdata;
//	nouveau_salaire
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nouveau_salaire";
	$fdata["GoodName"] = "nouveau_salaire";
	$fdata["ownerTable"] = "audit_vendeurs";
	$fdata["Label"] = GetFieldLabel("audit_vendeurs","nouveau_salaire");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "nouveau_salaire";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nouveau_salaire";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataaudit_vendeurs["nouveau_salaire"] = $fdata;


$tables_data["audit_vendeurs"]=&$tdataaudit_vendeurs;
$field_labels["audit_vendeurs"] = &$fieldLabelsaudit_vendeurs;
$fieldToolTips["audit_vendeurs"] = &$fieldToolTipsaudit_vendeurs;
$page_titles["audit_vendeurs"] = &$pageTitlesaudit_vendeurs;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["audit_vendeurs"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["audit_vendeurs"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_audit_vendeurs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	quand,  	qui,  	quoi,  	nouveau_salaire";
$proto0["m_strFrom"] = "FROM audit_vendeurs";
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
	"m_strName" => "id",
	"m_strTable" => "audit_vendeurs",
	"m_srcTableName" => "audit_vendeurs"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "audit_vendeurs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "quand",
	"m_strTable" => "audit_vendeurs",
	"m_srcTableName" => "audit_vendeurs"
));

$proto8["m_sql"] = "quand";
$proto8["m_srcTableName"] = "audit_vendeurs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "qui",
	"m_strTable" => "audit_vendeurs",
	"m_srcTableName" => "audit_vendeurs"
));

$proto10["m_sql"] = "qui";
$proto10["m_srcTableName"] = "audit_vendeurs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "quoi",
	"m_strTable" => "audit_vendeurs",
	"m_srcTableName" => "audit_vendeurs"
));

$proto12["m_sql"] = "quoi";
$proto12["m_srcTableName"] = "audit_vendeurs";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "nouveau_salaire",
	"m_strTable" => "audit_vendeurs",
	"m_srcTableName" => "audit_vendeurs"
));

$proto14["m_sql"] = "nouveau_salaire";
$proto14["m_srcTableName"] = "audit_vendeurs";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "audit_vendeurs";
$proto17["m_srcTableName"] = "audit_vendeurs";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "quand";
$proto17["m_columns"][] = "qui";
$proto17["m_columns"][] = "quoi";
$proto17["m_columns"][] = "nouveau_salaire";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "audit_vendeurs";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "audit_vendeurs";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="audit_vendeurs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_audit_vendeurs = createSqlQuery_audit_vendeurs();


	
		;

					

$tdataaudit_vendeurs[".sqlquery"] = $queryData_audit_vendeurs;

$tableEvents["audit_vendeurs"] = new eventsBase;
$tdataaudit_vendeurs[".hasEvents"] = false;

?>