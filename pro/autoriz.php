<!DOCTYPE html>
<html >
<meta charset="UTF-8">
<title>Султан</title>


<script src="https://kit.fontawesome.com/e920697bdc.js"></script>
<!--    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500%7CTeko:300,400,500%7CMaven+Pro:500">-->
<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.css" media="screen" type="text/css">
<link rel="stylesheet" href="css/fonts.css" media="screen" type="text/css">
<nav class="rd-navbar rd-navbar-corporate rd-navbar-original rd-navbar-static" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1 toggle-original" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
    <div class="rd-navbar-aside-outer">
        <div class="rd-navbar-aside">
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href=""><img class="brand-logo-dark" src="images/logo.jpg" alt="" width="190" height="37"><img class="brand-logo-light" src="images/logo.jpg" alt="" width="193" height="57"></a>
                </div>

        </div>

    </div>
    <div>
<!--<script type="text/javascript">alert("Введите все поля пожалуйста!");</script>-->
        <div class="login-page">
            <p style="font-size: 19px;font-family: sans-serif;color: darkblue;font-variant-caps: petite-caps;"> Авторизация для администраторов
            </p>
            <div class="form">

                <form class="login-form" method="post" >
                    <input type="number" name="idAdmin" placeholder="Идентификатор"  />
                    <input type="password" name="password" placeholder="Пароль"/>
                    <button name="submit">Войти!</button>
                </form>
            </div>
        </div>
        <style>
            #okno {
                width: 300px;
                height: 50px;
                text-align: center;
                padding: 15px;
                border: 3px solid #0000cc;
                border-radius: 10px;
                color: #0000cc;
                display: none;
            }
            #okno:target {display: block;}
        </style>
    </div>
<?php

$connect_info = "mysql:host=localhost; dbname=sultan; charset=utf8";
session_start();
if (isset($_POST['submit'], $_POST['idAdmin'], $_POST['password']))
{
    try
    {
        $email = $_POST['idAdmin'];
        $pass = $_POST['password'];

        $conn = new PDO("$connect_info", 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM  admins WHERE `idAdmin` = :idAdmin AND `password` = :password ";

        $stmt = $conn->prepare($sql);
        $stmt->execute(array(':idAdmin' => $_POST['idAdmin'], ':password'=> $_POST['password']));
        $num=$stmt->rowCount();
        if($num > 0)
        {
            header("location:admin.php");
        }
        else
        {
           echo "<script>alert(\"Учетная запись не найдена!\");</script>";

        }

    }
    catch (Exception $e)
    {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}
session_destroy();
?>