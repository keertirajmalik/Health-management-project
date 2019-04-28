<?php

mysql_connect("localhost","root","password");
$mysql_select_db("project");

if(isset($_POST['login_submit']))
{
    $uname=$_POST['login_name'];
    $password=$_POST['login_pass'];

    $sql = mysql_query("select password from login where User='$uname'") 
         or die("unable to find  databse".mysql_error());

  
    if($row=mysql_fetch_array($sql)) {
        if($password==$row['password']) {
            echo " You have successfully loged in";
        }
        else{
            echo " You have entered incorrect password";
    }
    
}

else echo "invalid username";

}
?>
