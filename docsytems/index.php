<?php
    include_once 'AdminSession.php';
    $uname = $_SESSION['email'];
    $password = $_SESSION['password'];
    $chekUser = mysqli_query($con,"Select * from user where email= '$uname' AND password = '$password'") or die(mysqli_error($con));
    $row = mysqli_fetch_array($chekUser);
    $fname = $row['fname'];
    $lname = $row['lname'];
    
    $username = $fname . " ".$lname;
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>NBA || Home Page</title>
        <link rel="stylesheet" href="css/index.css">
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/Registration.js"></script>
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
                    <h1 style="text-align: center;color: black;"><span><img src="image/Address Book.png" alt="logo"/></span>NBA | Documentation Proof Portal</h1>  
                </div>
                </div>
            <div id="menu">
                <ul>
                <li><a href="#" onclick="getPage('User/Registration.php')">Registration</a></li>
                <li><a href="#">File Management</a>
                <ul>
                <li><a href="#" onclick="getPage('Upload/Upload.php')">Add New file</a></li>
                <li><a href="#" onclick="getPage('View/View.php')">View All file</a></li>
                <!--<li><a href="#">Edit file</a></li>-->
                </ul>
                </li> 
                <li><a href="logout.php">Logout</a></li>
                
                <li style="margin-top: 5px;margin-left: 25em;">You login as : <?php echo $username?></li>
                
                </ul>
            </div>
            <div id="main">
            <div id="content">
            <h1>Welcome to NBA Portal </h1>
            <ul style="margin-left: 5em; margin-top: 2em;">
                <li>Upload files to the system</li>
                <li>Download your files wherever you are</li>
                <li>Edit your personal files</li>
                <li>Register new user</li>
                <li>Edit registered users</li>
            </ul>
            </div>
            <div id="side">
            <h3>Dashboard</h3>
            <table style="border: 1px black solid;background-color: #607B8B;">
                <tr>
                    <td><li><a href="#" onclick="getPage('Upload/Upload.php')">Add New file</a></li></td>
                </tr>
                <tr>
                    <td><li><a href="#" onclick="getPage('View/View.php')">View file</a></li></td>
                </tr>
                <tr>
                    <td><li><a href="#" onclick="getPage('User/Registration.php')">Add user</a></li></td>
                </tr>
                <tr>
                    <td><li><a href="#" onclick="getPage('User/ViewUser.php')">View Users</a></li></td>
                </tr>

            </table>
            </div>
            <!-- this clear class is for special purpose.
            this is for to clear the "float property" of 
            the previous element, it will prevent footer
            to float -->
            <div class= "clear"></div>
            </div>
            <div id="footer">
                &copy TY_CS_C_Group - 50
            </div>
        </div>
    </body>
</html>
