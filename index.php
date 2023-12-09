<?php

include('config.php');

?>

<!-- code for creating user form -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        this is a signin form
    </h1>
    <div >
        <form method="POST">
            <label for="un">Username:</label>
            <input type="text" id="u" name="uname">

            <br>
            <br>

            <label for="up">Password:</label>
            <input type="password" id="u" name="upass">

            <br><br>

            <button id="b" name="btn" margin-left="50px">submit</button>
            
        </form>

    </div>
</body>

</html>

<!-- code for form ended here -->
<?php
if (isset($_POST['btn'])) 
{
    $username1 = $_POST['uname'];
    $password1 = $_POST['upass'];

    $insert_var = mysqli_query($config, "INSERT INTO regester_user (username , password) VALUES ('$username1' ,'$password1')");

    if ($insert_var) {
        echo '<script> alert("data inserted sucessfully ....") </script>';

    } else {
        echo '<script> alert("Error! Failed to insert data") </script>';
    }
}
?>