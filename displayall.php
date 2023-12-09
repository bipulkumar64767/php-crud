<?php
 include('config.php');


 if (isset($_POST['btn3'])) 
 {
    
    $result = mysqli_query($config,"SELECT * FROM regester_user");
    $total = mysqli_num_rows($result);
    
    // <table>
    //     <tr>
    //         <th>s.no</th>
    //         <th>username</th>
    //         <th>password</th>
    //     </tr>
     echo '<br>';  
    while($ans = mysqli_fetch_assoc( $result ))
    { 
       echo "user id = "."$ans[S_no]"." ,username = "."$ans[username]".", password = "."$ans[password]";
       echo '<br>'; 
    }  
    //</table>     
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
        <h3> To view all datasets present in data base you need to press this button</h3>
        <button name ="btn3">view All</button>
    </form>
</body>
</html>