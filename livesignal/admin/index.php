<?php //$_SERVER;
//ini_get('magic_quotes_gpc');
//error_reporting(E_ALL);
session_start();
//print_r($_SESSION['username']);
ini_set("display_errors", false);
include_once("confiq.php") ;
include_once("db.php") ;
include_once("pagination.php") ;

$baseurl="http://".$_SERVER['HTTP_HOST'].'/admin';
$basepath=$_SERVER['HTTP_HOST'].'/bikanerjob/admin';
$imagepath="public/uploadimages/";
$filepath="public/uploadfiles/";


?>
<html>
	<head>
		<title>
					Commoty Services & Solutions
		</title>
		<link href="public/css/basic.css" rel="stylesheet" >	
				<script src="editor/ckeditor.js" type="text/javascript"></script>
	
		<link href="public/css/master.css" rel="stylesheet" >				
		
		<script src="public/js/jquery.js" ></script>	
		<script src="public/js/jquery.MultiFileDes.js"></script>	
		<script>
		$(document).ready (function() {
       
    $( ":input[type=text]" ).css( {"border": "1px solid #7F9DB9", "width": "200px", "height": "22px"} );
	$( ":input[type=password]" ).css( {"border": "1px solid #7F9DB9", "width": "200px", "height": "22px"} );
	$('.listtbl tbody tr:even').css('background-color','#f6f6f6');
	$('.listtbl tbody tr:odd').css('background-color','#ffffff');
	$(".listtbl tbody tr:last").css('background-color','#ffffff');
	$(".listtbl tbody tr:first").css('background-color','#ffffff');
	//alert($(":input[type=button]").val().length);
	if($(":input[type=button]").val().length  > 10)
	$( ":input[type=button]" ).addClass("bigbutton");
	else
	$( ":input[type=button]" ).addClass("button");
	
	if($(":input[type=submit]").val().length  > 10)
		$(":input[type=submit]" ).addClass("bigbutton");
	else
		$(":input[type=submit]" ).addClass("button");
		
	$(":input[type=reset]" ).addClass("button"); 

/*	$( ":input[type=button]" ).css( {"background": 'no-repeat url("'+baseurl+'/public/images/blue_btn1.gif")', "color": "#ffffff",  "width":"80px","height":"25px", "font-weight": "bold","font-family":"Verdana, Arial, Helvetica, sans-serif"} );
	$( ":input[type=submit]" ).css( {"background": 'no-repeat url("'+baseurl+'/public/images/blue_btn1.gif")', "color": "#ffffff","width":"80px","height":"25px", "font-weight": "bold","font-family":"Verdana, Arial, Helvetica, sans-serif","font-size":"12px","background":"none","border":"0"} );
	$( ":input[type=reset]" ).css( {"background": 'no-repeat url("'+baseurl+'/public/images/blue_btn1.gif")', "color": "#ffffff","width":"80px", "font-weight": "bold"} );*/
	
    });

		</script>
	</head>
	<body>
	
		<table width="100%" align="center" class="maintbl" cellpadding="0" cellspacing="0" height="100%">
			<tr>
				<td height="100px">
					<?php include("header.php");?>
				</td>
			</tr>
			<tr>
				<td valign="middle">
			
					<?php 
					$module="login";
					$do="login";
						if(isset($_GET['mod']))
						{
							$module=$_GET['mod'];
							$do=$_GET['do'];
						}
					/*if(isset($_GET['steps']))
						include("module/jobseeker/steps.php");
					*/include("module/$module/$do.php");
					/*if(isset($_GET['steps']))
						include("module/jobseeker/endsteps.php");
	*/
					?>
				</td>	
			</tr>
			
			<tr>
				<td height="75px">
					<?php include("footer.php");?>
				</td>
			</tr>
		</table>
	</body>
</html>				