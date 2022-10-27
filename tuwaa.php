

<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'con');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

session_start();

if(isset($_POST['login'])) 
{
    $name=$_POST['username'];
    $password=$_POST['password'];

    echo '<script> type="text/javascript">alert(" '.$name. "\n" .$password.' ")</script>';
  

    $sql = "SELECT * FROM tuwa WHERE username='".$name."' AND password='".$password."' limit 1";

    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) == 1)
    {    
        echo "<center>Login Successfully!</center>";
        exit();
    }
    else
    {  
        echo "<center>Incorrect Username or Password</center>";        
    }
}

 ?>

<html>
    
    <head>
    <title>Integrating PHP, Bootstrap & Database</title>
    <link rel="icon" type="image/png" href="images/logo2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.6/css/uikit.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.6/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.6/js/uikit-icons.min.js"></script>
    </head>
    
    <body style="background-color: white;">
       
    <div style="margin-top: 300px">
    <center>
       <form method="post";>
        <h1> Tuwa's Online Register</h1>
    <div class="uk-margin">
        <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input name="username" class="uk-input" type="text" placeholder="username">
        </div>
    </div>

    <div class="uk-margin">
        <div class="uk-inline">
            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock" ></span>
            <input name="password"class="uk-input" type="password"  placeholder="password">
        </div>
    </div>
        <button User="btn" name="login" class="uk-button uk-button-default uk-button-small">LOGIN</button>
    </form>
    </center>
    
    </body>
</html>


