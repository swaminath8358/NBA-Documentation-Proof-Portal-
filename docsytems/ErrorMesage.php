<!DOCTYPE html>
<html>
<head>
<title>NBA Portal | Login</title>
<link rel="stylesheet" href="css/login.css">
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script>
            function getPage(url){
                $('#content').hide(1000,function(){
                $('#content').load(url);
                $('#content').show(1000,function(){});
                });
            }

        </script>
</head>
<body>
<div id="wrap">
<div id="header">
<div id="logo">
    <h1 style="text-align: center;">NBA Portal | <span style="color:green">Error Message</span></h1>  
</div>
</div>

<div id="content">
    
    <h1 style="margin-left: 5em;"> ERROR</h1>
    <h2 style="color: red">Wrong Username or Password</h2>
    
</div>

<div class= "clear"></div>

<div id="footer">
</div>
</div>
</body>
</html>
<?php
    $loc = ".//Login/login.php";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 2000);
					
					</script>';
?>