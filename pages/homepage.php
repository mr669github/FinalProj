<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FINAL WSD PROJECT! </title>
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>


<h1>
    <?php
    //this how to print some data;
    echo $data['site_name'];
    ?> </h1>

<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>
<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>

<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
    </div>


</form>
<h1><a href="index.php?page=accounts&action=register">Register</a></h1>


<script src="js/scripts.js"></script>
</body>
</html>