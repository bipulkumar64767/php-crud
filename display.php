<?php
include('config.php');


if(isset($_POST['v']))
{
    $use = $_POST['uid'];
    echo '<br>';
    $result = mysqli_query($config, "SELECT * FROM regester_user WHERE S_no='$use'");
    $ans = mysqli_fetch_assoc($result);    
    echo "Userid = "."$ans[S_no]".", Username = "."$ans[username]".", Password = "."$ans[password]";  
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
    <form method ="POST">
    <h2> Enter userid to read the data</h2>
        <label> User id:</label>
        <input type="text" name ="uid">
        <br><br>
        <button name="v" type="submit">View data</button>
    </form>

</body>
</html>