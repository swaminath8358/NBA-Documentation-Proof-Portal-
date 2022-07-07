<!DOCTYPE html>
<html>
<head>
<title>Docs | Success</title>
<link rel="stylesheet" href="../css/login.css">
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
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
<nav style = "text-align: center;">
        <img  src="https://i0.wp.com/blog.oureducation.in/wp-content/uploads/2018/08/Vishwakarma-Institute-Of-Technology-Neet-Coaching-Pune-R.png?ssl=1" alt="">
    </nav>
<div id="wrap">
<div id="header">
<div id="logo">
    <h1 style="text-align: center;">NBA Portal <span style="color:green">Message</span></h1>  
</div>
</div>

<div id="content">
    
    <h1 style="margin-left: 5em;"> Success</h1>
    <h2 style="color: green">You have successful change Password</h2>
    
</div>

<div class= "clear"></div>

<div id="footer">
</div>
</div>
</body>
</html>
<?php
    $loc = "./login.php";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 2000);
					
					</script>';
?>