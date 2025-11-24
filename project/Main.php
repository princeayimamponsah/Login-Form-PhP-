<?php

session_start();
if(!isset($_SESSION['email'])){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body >
    
        <nav>
            <h1 class="logo">LOGLOG</h1>
            
            <button onclick="window.location.href='logout.php'" class="logout-btn">Logout</button>
        </nav>
     <div class="dashboard">
        <div class="sidebar">
            <h2>Chats</h2>
           
        </div>

    <div class="box">
            <h1>Welcome,
                <span> <?= $_SESSION['name']; ?></span>
            </h1>
       
        
    </div>
</body>
</html>