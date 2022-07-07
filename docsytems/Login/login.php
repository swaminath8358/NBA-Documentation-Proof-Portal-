<!DOCTYPE html>
<html>
<head>
<title>NBA Portal | Login</title>
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
    <h1 style="text-align: center;">NBA Portal | <span style="color:green">Login</span></h1>  
</div>
</div>

<div id="content">
    <form name="Myform" id="Myform" action="loginProcess.php" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:100px; margin-left:2em;">
        <thead></thead>
        <tbody>
            <tr>
                <td style="text-align: right;font-size: 20px">Username</td>
                <td style="font-size: 20px"><input type="text" name="uname" id="fname" onkeydown="HideError()" size="20px;"/></td>
            </tr>
            <tr>
                <td style="text-align: right;font-size: 20px">Password</td>
                <td style="font-size: 20px"><input type="password" name="password" id="password" onkeydown="HideError()" size="20px;"/></td>
            </tr>
            
            <tr>
                <td style="color:#F8F8FF;">dddddddddddddddd</td>
                <td><input type="submit" name="submit" value="Login" /></td>
            </tr>
            <tr>
                <td style="color:#F8F8FF;">dddddddddddddddd</td>
                <td style="color:green;"><a href="#" onclick="getPage('forgetPassword.php')"><i>forget your password..!</i></a></td>
            </tr>
        
        </tbody>
    </table>
</form>

</div>

<div class= "clear"></div>

<div id="footer">
    &copy TY_CS_C_Group - 50
</div>
</div>
</body>
</html>
