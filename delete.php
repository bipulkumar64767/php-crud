<?php
include('config.php');

if(isset($_POST['btn']))
{
    $id =$_POST['ui'];
    $result = mysqli_query($config,"DELETE  from regester_user WHERE S_no ='$id'");
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
    <h1>This is a form for deleting the data through id </h1>
    <form method ="POST">
        <label for = "">User id:</label>
        <input type="number" name="ui">

        <button type="submit" name=" btn">Delete</button>
    </form>
</body>

</html>