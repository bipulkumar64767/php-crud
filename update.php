<?php
include('config.php');

if(isset($_POST['btn'])) 
{
    $id =$_POST['uid'];
   
    $un =$_POST['uname'];
    
    $up =$_POST['upass'];
   
    $result = mysqli_query($config ,"UPDATE regester_user SET username = '$un' ,password ='$up' WHERE S_no = '$id' ");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>This is a update form</h2>
    <form method ="POST">
        <label>user_id</label>
        <input type="number" name ="uid" >
        <br>
        <label>username</label>
        <input type="text" name ="uname" >
        <br>
        <label>password</label>
        <input type="text" name ="upass" >
        <br>
        <button name="btn" type ="submit" >update</button>
    </form>
</body>
</html>