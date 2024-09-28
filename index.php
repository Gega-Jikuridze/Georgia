<?php
    include("components.php");
    include('data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Georgia</title>
    <link rel="stylesheet" href="./style.css?v=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<?php 

// header 
    headerGeo();


// log in 

$log = false;


if($_SERVER['REQUEST_METHOD']==="POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    
    foreach($users as $user){
        if($user['username'] === $username && $user['password'] === $password){
            $log = true;
            break;
        }else{
           echo "<p class='error'>" . 'Invalid username or password. Please try again.' . '</p>';
            break;
        }
    };
    
};

// travel cards 



!$log ? logForm($users) : travelCards($cities);




// search 







// footer 
    footerGeo();
?>



</body>
</html>