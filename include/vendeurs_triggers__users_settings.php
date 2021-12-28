<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavendeurs_triggers__users = array();
	$tdatavendeurs_triggers__users[".truncateText"] = true;
	$tdatavendeurs_triggers__users[".NumberOfChars"] = 80;
	$tdatavendeurs_triggers__users[".ShortName"] = "vendeurs_triggers__users";
	$tdatavendeurs_triggers__users[".OwnerID"] = "";
	$tdatavendeurs_triggers__users[".OriginalTable"] = "vendeurs(triggers)_users";

//	field labels
$fieldLabelsvendeurs_triggers__users = array();
$fieldToolTipsvendeurs_triggers__users = array();
$pageTitlesvendeurs_triggers__users = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsvendeurs_triggers__users["French"] = array();
	$fieldToolTipsvendeurs_triggers__users["French"] = array();
	$pageTitlesvendeurs_triggers__users["French"] = array();
	$fieldLabelsvendeurs_triggers__users["French"]["ID"] = "ID";
	$fieldToolTipsvendeurs_triggers__users["French"]["ID"] = "";
	$fieldLabelsvendeurs_triggers__users["French"]["username"] = "Username";
	$fieldToolTipsvendeurs_triggers__users["French"]["username"] = "";
	$fieldLabelsvendeurs_triggers__users["French"]["password"] = "Password";
	$fieldToolTipsvendeurs_triggers__users["French"]["password"] = "";
	$fieldLabelsvendeurs_triggers__users["French"]["email"] = "Email";
	$fieldToolTipsvendeurs_triggers__users["French"]["email"] = "";
	$fieldLabelsvendeurs_triggers__users["French"]["fullname"] = "Fullname";
	$fieldToolTipsvendeurs_triggers__users["French"]["fullname"] = "";
	$fieldLabelsvendeurs_triggers__users["French"]["groupid"] = "Groupid";
	$fieldToolTipsvendeurs_triggers__users["French"]["groupid"] = "";
	$fieldLabelsvendeurs_triggers__users["French"]["active"] = "Active";
	$fieldToolTipsvendeurs_triggers__users["French"]["active"] = "";
	if (count($fieldToolTipsvendeurs_triggers__users["French"]))
		$tdatavendeurs_triggers__users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvendeurs_triggers__users[""] = array();
	$fieldToolTipsvendeurs_triggers__users[""] = array();
	$pageTitlesvendeurs_triggers__users[""] = array();
	$fieldLabelsvendeurs_triggers__users[""]["ID"] = "ID";
	$fieldToolTipsvendeurs_triggers__users[""]["ID"] = "";
	$fieldLabelsvendeurs_triggers__users[""]["username"] = "Username";
	$fieldToolTipsvendeurs_triggers__users[""]["username"] = "";
	$fieldLabelsvendeurs_triggers__users[""]["password"] = "Password";
	$fieldToolTipsvendeurs_triggers__users[""]["password"] = "";
	$fieldLabelsvendeurs_triggers__users[""]["email"] = "Email";
	$fieldToolTipsvendeurs_triggers__users[""]["email"] = "";
	$fieldLabelsvendeurs_triggers__users[""]["fullname"] = "Fullname";
	$fieldToolTipsvendeurs_triggers__users[""]["fullname"] = "";
	$fieldLabelsvendeurs_triggers__users[""]["groupid"] = "Groupid";
	$fieldToolTipsvendeurs_triggers__users[""]["groupid"] = "";
	$fieldLabelsvendeurs_triggers__users[""]["active"] = "Active";
	$fieldToolTipsvendeurs_triggers__users[""]["active"] = "";
	if (count($fieldToolTipsvendeurs_triggers__users[""]))
		$tdatavendeurs_triggers__users[".isUseToolTips"] = true;
}


	$tdatavendeurs_triggers__users[".NCSearch"] = true;



$tdatavendeurs_triggers__users[".shortTableName"] = "vendeurs_triggers__users";
$tdatavendeurs_triggers__users[".nSecOptions"] = 0;
$tdatavendeurs_triggers__users[".recsPerRowPrint"] = 1;
$tdatavendeurs_triggers__users[".mainTableOwnerID"] = "";
$tdatavendeurs_triggers__users[".moveNext"] = 1;
$tdatavendeurs_triggers__users[".entityType"] = 0;

$tdatavendeurs_triggers__users[".strOriginalTableName"] = "vendeurs(triggers)_users";

	



$tdatavendeurs_triggers__users[".showAddInPopup"] = false;

$tdatavendeurs_triggers__users[".showEditInPopup"] = false;

$tdatavendeurs_triggers__users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavendeurs_triggers__users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavendeurs_triggers__users[".fieldsForRegister"] = array();

$tdatavendeurs_triggers__users[".listAjax"] = false;

	$tdatavendeurs_triggers__users[".audit"] = false;

	$tdatavendeurs_triggers__users[".locking"] = false;









$tdatavendeurs_triggers__users[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatavendeurs_triggers__users[".searchSaving"] = false;
//

$tdatavendeurs_triggers__users[".showSearchPanel"] = true;
		$tdatavendeurs_triggers__users[".flexibleSearch"] = true;

$tdatavendeurs_triggers__users[".isUseAjaxSuggest"] = true;

$tdatavendeurs_triggers__users[".rowHighlite"] = true;



$tdatavendeurs_triggers__users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavendeurs_triggers__users[".isUseTimeForSearch"] = false;





$tdatavendeurs_triggers__users[".allSearchFields"] = array();
$tdatavendeurs_triggers__users[".filterFields"] = array();
$tdatavendeurs_triggers__users[".requiredSearchFields"] = array();

$tdatavendeurs_triggers__users[".allSearchFields"][] = "ID";
	$tdatavendeurs_triggers__users[".allSearchFields"][] = "username";
	$tdatavendeurs_triggers__users[".allSearchFields"][] = "password";
	$tdatavendeurs_triggers__users[".allSearchFields"][] = "email";
	$tdatavendeurs_triggers__users[".allSearchFields"][] = "fullname";
	$tdatavendeurs_triggers__users[".allSearchFields"][] = "groupid";
	$tdatavendeurs_triggers__users[".allSearchFields"][] = "active";
	

$tdatavendeurs_triggers__users[".googleLikeFields"] = array();
$tdatavendeurs_triggers__users[".googleLikeFields"][] = "ID";
$tdatavendeurs_triggers__users[".googleLikeFields"][] = "username";
$tdatavendeurs_triggers__users[".googleLikeFields"][] = "password";
$tdatavendeurs_triggers__users[".googleLikeFields"][] = "email";
$tdatavendeurs_triggers__users[".googleLikeFields"][] = "fullname";
$tdatavendeurs_triggers__users[".googleLikeFields"][] = "groupid";
$tdatavendeurs_triggers__users[".googleLikeFields"][] = "active";


$tdatavendeurs_triggers__users[".advSearchFields"] = array();
$tdatavendeurs_triggers__users[".advSearchFields"][] = "ID";
$tdatavendeurs_triggers__users[".advSearchFields"][] = "username";
$tdatavendeurs_triggers__users[".advSearchFields"][] = "password";
$tdatavendeurs_triggers__users[".advSearchFields"][] = "email";
$tdatavendeurs_triggers__users[".advSearchFields"][] = "fullname";
$tdatavendeurs_triggers__users[".advSearchFields"][] = "groupid";
$tdatavendeurs_triggers__users[".advSearchFields"][] = "active";

$tdatavendeurs_triggers__users[".tableType"] = "list";

$tdatavendeurs_triggers__users[".printerPageOrientation"] = 0;
$tdatavendeurs_triggers__users[".nPrinterPageScale"] = 100;

$tdatavendeurs_triggers__users[".nPrinterSplitRecords"] = 40;

$tdatavendeurs_triggers__users[".nPrinterPDFSplitRecords"] = 40;



$tdatavendeurs_triggers__users[".geocodingEnabled"] = false;





$tdatavendeurs_triggers__users[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavendeurs_triggers__users[".pageSize"] = 20;

$tdatavendeurs_triggers__users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavendeurs_triggers__users[".strOrderBy"] = $tstrOrderBy;

$tdatavendeurs_triggers__users[".orderindexes"] = array();

$tdatavendeurs_triggers__users[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active";
$tdatavendeurs_triggers__users[".sqlFrom"] = "FROM `vendeurs(triggers)_users`";
$tdatavendeurs_triggers__users[".sqlWhereExpr"] = "";
$tdatavendeurs_triggers__users[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavendeurs_triggers__users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavendeurs_triggers__users[".arrGroupsPerPage"] = $arrGPP;

$tdatavendeurs_triggers__users[".highlightSearchResults"] = true;

$tableKeysvendeurs_triggers__users = array();
$tableKeysvendeurs_triggers__users[] = "ID";
$tdatavendeurs_triggers__users[".Keys"] = $tableKeysvendeurs_triggers__users;

$tdatavendeurs_triggers__users[".listFields"] = array();
$tdatavendeurs_triggers__users[".listFields"][] = "ID";
$tdatavendeurs_triggers__users[".listFields"][] = "username";
$tdatavendeurs_triggers__users[".listFields"][] = "password";
$tdatavendeurs_triggers__users[".listFields"][] = "email";
$tdatavendeurs_triggers__users[".listFields"][] = "fullname";
$tdatavendeurs_triggers__users[".listFields"][] = "groupid";
$tdatavendeurs_triggers__users[".listFields"][] = "active";

$tdatavendeurs_triggers__users[".hideMobileList"] = array();


$tdatavendeurs_triggers__users[".viewFields"] = array();
$tdatavendeurs_triggers__users[".viewFields"][] = "ID";
$tdatavendeurs_triggers__users[".viewFields"][] = "username";
$tdatavendeurs_triggers__users[".viewFields"][] = "password";
$tdatavendeurs_triggers__users[".viewFields"][] = "email";
$tdatavendeurs_triggers__users[".viewFields"][] = "fullname";
$tdatavendeurs_triggers__users[".viewFields"][] = "groupid";
$tdatavendeurs_triggers__users[".viewFields"][] = "active";

$tdatavendeurs_triggers__users[".addFields"] = array();
$tdatavendeurs_triggers__users[".addFields"][] = "username";
$tdatavendeurs_triggers__users[".addFields"][] = "password";
$tdatavendeurs_triggers__users[".addFields"][] = "email";
$tdatavendeurs_triggers__users[".addFields"][] = "fullname";
$tdatavendeurs_triggers__users[".addFields"][] = "groupid";
$tdatavendeurs_triggers__users[".addFields"][] = "active";

$tdatavendeurs_triggers__users[".masterListFields"] = array();
$tdatavendeurs_triggers__users[".masterListFields"][] = "ID";
$tdatavendeurs_triggers__users[".masterListFields"][] = "username";
$tdatavendeurs_triggers__users[".masterListFields"][] = "password";
$tdatavendeurs_triggers__users[".masterListFields"][] = "email";
$tdatavendeurs_triggers__users[".masterListFields"][] = "fullname";
$tdatavendeurs_triggers__users[".masterListFields"][] = "groupid";
$tdatavendeurs_triggers__users[".masterListFields"][] = "active";

$tdatavendeurs_triggers__users[".inlineAddFields"] = array();
$tdatavendeurs_triggers__users[".inlineAddFields"][] = "username";
$tdatavendeurs_triggers__users[".inlineAddFields"][] = "password";
$tdatavendeurs_triggers__users[".inlineAddFields"][] = "email";
$tdatavendeurs_triggers__users[".inlineAddFields"][] = "fullname";
$tdatavendeurs_triggers__users[".inlineAddFields"][] = "groupid";
$tdatavendeurs_triggers__users[".inlineAddFields"][] = "active";

$tdatavendeurs_triggers__users[".editFields"] = array();
$tdatavendeurs_triggers__users[".editFields"][] = "username";
$tdatavendeurs_triggers__users[".editFields"][] = "password";
$tdatavendeurs_triggers__users[".editFields"][] = "email";
$tdatavendeurs_triggers__users[".editFields"][] = "fullname";
$tdatavendeurs_triggers__users[".editFields"][] = "groupid";
$tdatavendeurs_triggers__users[".editFields"][] = "active";

$tdatavendeurs_triggers__users[".inlineEditFields"] = array();
$tdatavendeurs_triggers__users[".inlineEditFields"][] = "username";
$tdatavendeurs_triggers__users[".inlineEditFields"][] = "password";
$tdatavendeurs_triggers__users[".inlineEditFields"][] = "email";
$tdatavendeurs_triggers__users[".inlineEditFields"][] = "fullname";
$tdatavendeurs_triggers__users[".inlineEditFields"][] = "groupid";
$tdatavendeurs_triggers__users[".inlineEditFields"][] = "active";

$tdatavendeurs_triggers__users[".exportFields"] = array();
$tdatavendeurs_triggers__users[".exportFields"][] = "ID";
$tdatavendeurs_triggers__users[".exportFields"][] = "username";
$tdatavendeurs_triggers__users[".exportFields"][] = "password";
$tdatavendeurs_triggers__users[".exportFields"][] = "email";
$tdatavendeurs_triggers__users[".exportFields"][] = "fullname";
$tdatavendeurs_triggers__users[".exportFields"][] = "groupid";
$tdatavendeurs_triggers__users[".exportFields"][] = "active";

$tdatavendeurs_triggers__users[".importFields"] = array();
$tdatavendeurs_triggers__users[".importFields"][] = "ID";
$tdatavendeurs_triggers__users[".importFields"][] = "username";
$tdatavendeurs_triggers__users[".importFields"][] = "password";
$tdatavendeurs_triggers__users[".importFields"][] = "email";
$tdatavendeurs_triggers__users[".importFields"][] = "fullname";
$tdatavendeurs_triggers__users[".importFields"][] = "groupid";
$tdatavendeurs_triggers__users[".importFields"][] = "active";

$tdatavendeurs_triggers__users[".printFields"] = array();
$tdatavendeurs_triggers__users[".printFields"][] = "ID";
$tdatavendeurs_triggers__users[".printFields"][] = "username";
$tdatavendeurs_triggers__users[".printFields"][] = "password";
$tdatavendeurs_triggers__users[".printFields"][] = "email";
$tdatavendeurs_triggers__users[".printFields"][] = "fullname";
$tdatavendeurs_triggers__users[".printFields"][] = "groupid";
$tdatavendeurs_triggers__users[".printFields"][] = "active";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "vendeurs(triggers)_users";
	$fdata["Label"] = GetFieldLabel("vendeurs_triggers__users","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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




	$tdatavendeurs_triggers__users["ID"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "vendeurs(triggers)_users";
	$fdata["Label"] = GetFieldLabel("vendeurs_triggers__users","username");
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

		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdatavendeurs_triggers__users["username"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "vendeurs(triggers)_users";
	$fdata["Label"] = GetFieldLabel("vendeurs_triggers__users","password");
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

	$edata = array("EditFormat" => "Password");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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




	$tdatavendeurs_triggers__users["password"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "vendeurs(triggers)_users";
	$fdata["Label"] = GetFieldLabel("vendeurs_triggers__users","email");
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

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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




	$tdatavendeurs_triggers__users["email"] = $fdata;
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "vendeurs(triggers)_users";
	$fdata["Label"] = GetFieldLabel("vendeurs_triggers__users","fullname");
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

		$fdata["strField"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdatavendeurs_triggers__users["fullname"] = $fdata;
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "vendeurs(triggers)_users";
	$fdata["Label"] = GetFieldLabel("vendeurs_triggers__users","groupid");
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

		$fdata["strField"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdatavendeurs_triggers__users["groupid"] = $fdata;
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "vendeurs(triggers)_users";
	$fdata["Label"] = GetFieldLabel("vendeurs_triggers__users","active");
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

		$fdata["strField"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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




	$tdatavendeurs_triggers__users["active"] = $fdata;


$tables_data["vendeurs(triggers)_users"]=&$tdatavendeurs_triggers__users;
$field_labels["vendeurs_triggers__users"] = &$fieldLabelsvendeurs_triggers__users;
$fieldToolTips["vendeurs_triggers__users"] = &$fieldToolTipsvendeurs_triggers__users;
$page_titles["vendeurs_triggers__users"] = &$pageTitlesvendeurs_triggers__users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vendeurs(triggers)_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vendeurs(triggers)_users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vendeurs_triggers__users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active";
$proto0["m_strFrom"] = "FROM `vendeurs(triggers)_users`";
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
	"m_strName" => "ID",
	"m_strTable" => "vendeurs(triggers)_users",
	"m_srcTableName" => "vendeurs(triggers)_users"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "vendeurs(triggers)_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "vendeurs(triggers)_users",
	"m_srcTableName" => "vendeurs(triggers)_users"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "vendeurs(triggers)_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "vendeurs(triggers)_users",
	"m_srcTableName" => "vendeurs(triggers)_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "vendeurs(triggers)_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "vendeurs(triggers)_users",
	"m_srcTableName" => "vendeurs(triggers)_users"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "vendeurs(triggers)_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "vendeurs(triggers)_users",
	"m_srcTableName" => "vendeurs(triggers)_users"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "vendeurs(triggers)_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "vendeurs(triggers)_users",
	"m_srcTableName" => "vendeurs(triggers)_users"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "vendeurs(triggers)_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "vendeurs(triggers)_users",
	"m_srcTableName" => "vendeurs(triggers)_users"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "vendeurs(triggers)_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "vendeurs(triggers)_users";
$proto21["m_srcTableName"] = "vendeurs(triggers)_users";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "username";
$proto21["m_columns"][] = "password";
$proto21["m_columns"][] = "email";
$proto21["m_columns"][] = "fullname";
$proto21["m_columns"][] = "groupid";
$proto21["m_columns"][] = "active";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`vendeurs(triggers)_users`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "vendeurs(triggers)_users";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vendeurs(triggers)_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vendeurs_triggers__users = createSqlQuery_vendeurs_triggers__users();


	
		;

							

$tdatavendeurs_triggers__users[".sqlquery"] = $queryData_vendeurs_triggers__users;

$tableEvents["vendeurs(triggers)_users"] = new eventsBase;
$tdatavendeurs_triggers__users[".hasEvents"] = false;

?>