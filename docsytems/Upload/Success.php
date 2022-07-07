<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>NBA Portal | Success</title>
<link rel="stylesheet" href="../css/login.css">
</head>
<body>
<div id="wrap">
<div id="header">
<div id="logo">
    <h1 style="text-align: center;">NBA Portal | <span style="color:green">Message</span></h1>  
</div>
</div>

<div id="content">
    
    <h1 style="margin-left: 5em;"> Success</h1>
    <h2 style="color: green">You have successful Upload your file</h2>
    
</div>

<div class= "clear"></div>

<div id="footer">
&copy TY_CS_C_Group - 50
</div>
</div>
</body>
</html>
<?php
$path = ($_SESSION['type'] == 'Admin') ? "../" : "../Normal/";
    $loc = "../";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 2000);
					
					</script>';
?>