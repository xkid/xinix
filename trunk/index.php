<?php

  // Use this PHP File As your Development

	// ****************  Default include  ****************
	
		// include XFW setting file
		include('configuration.php');
		// include template engine
		include_once('./includes/template/tbs_class.php');
		// include database engine
		include('./includes/adodb/adodb.inc.php');
		// require user access class
		require_once('./includes/user/access.class.php');
		
		// Declare User access class
		if (file_exists('configuration.php')){
		  $user = new flexibleAccess('', $settings);
		}
		
		// New template engine object
		$TBS =& new clsTinyButStrong;
		// Load Your HTML file
		$TBS->LoadTemplate('index.html');    // <----- Place this script HTML
	
	// ****************************************************
	
	
	// **************  Example Code Here  *****************
	
		 /*
		 
		 $saveLink = 'save.php';
		 $cssLink = 'style.css';
		 
		 // Create database connection
			 $db = NewADOConnection('mysql');
			 $db->Connect($XFW_Host, $XFW_User, $XFW_Pass, $XFW_DB);
		 // ... please refer ./adodb/docs/

		 class xxxx{
				function yyyy(){
					...
				}
				function zzzz(){
					...
				}
		 }

		 $AAAA = new xxxx;  // declare new object
		 $AAAA->yyyy();	  // calling yyyy function
		 
		 // Create database connection
		 $db = NewADOConnection('mysql');
		 $db->Connect($XFW_Host, $XFW_User, $XFW_Pass, $XFW_DB);
		 
		 // Form SQL Query
		 $sql="SELECT * FROM table where field01='$xxx' and field02='$yyy'";
		 
		 // Get Database result
		 $result=$db->Execute($sql);
		 if ($result === false) die("Query Failed->".$db->ErrorMsg()); 
		 
		 // Check Result record count
		 if (($result->RecordCount()) == 1)
		 {
				... Please refer to ./adodb/docs/
		 }
		 
		 */
	
	// ****************************************************
	
	// **************  Write Your Code Here  **************
	
	// checks for configuration file, if none found loads installation page
	if (!file_exists('configuration.php')){
		$self = rtrim( dirname( $_SERVER['PHP_SELF'] ), '/\\' ) . '/';
		header("Location: http://" . $_SERVER['HTTP_HOST'] . $self . "install/index.php" );
		exit();
	}

	// ****************************************************
	
	
	// Show result
	$TBS->Show() ;
	
?>