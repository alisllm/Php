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
    </div>
</nav>


<script>

        function switchTextNews()
        {
            if (document.getElementById('submitForNews').click())
            {

            var text2 = document.getElementById('divForNews'),
                button = document.getElementById('submitForNews');
                text2.style.display = 'block';
                button.innerHTML = 'Скрыть';

            if (button.innerHTML === 'Скрыть')
            {
                text2.style.display = 'none';
                button.innerHTML = 'Показать';
            }
        }
        document.getElementById('submitForNews').addEventListener('click', switchTextNews, false);
    }
</script>
            <div style="background: #e3e2e3; margin-bottom: 50px; font-size: 18px">
                <form method="post">
                <a>Показать всех администраторов</a>
                <input type="submit" name="submitForAdmins"  id="submitForAdmins" onclick="switchText2()" content="submitForAdmins" class="buto" style="width: 150px" value="Показать">
                    <a>Показать все статьи</a>
                    <input type="submit" name="submitForNews" id="submitForNews" onclick="switchTextNews()" class="buto" value="Показать" style="width: 150px">
                    <a>Показать все бронирования</a>
                    <input type="submit" name="submitForBrony" class="buto" value="Показать" style="width: 150px">
                </form>
            </div>
    <div id="divForNews" style="display: none">
        <input  type="text" placeholder="Наименование">
        <input type = "text" placeholder="Статья">
        <input type="submit" class="buto" style="width: 110px" value="Добавить">
    </div>

    <?php
    $connect_info = "mysql:host=localhost; dbname=sultan; charset=utf8";

    session_start();

    try
    {

    $conn = new PDO("$connect_info", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (Exception $e)
    {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

    if (isset($_POST['submitForNews']))
    {
        echo '<div> <input type="text" style="width: 500px;" placeholder="Наименование"> <textarea type="text" placeholder = "Статья/новость"  style="width: 300px;"></textarea><input  type="submit" class="buto" value="Добавить" style="
        width: 200px;
        vertical-align: text-bottom;
    "> ';
        echo ' <table border=\'1\' style="background: #e3e2e3;">
            <tr>
                <td>ID Администратора</td>
                <td>Наименование</td>
                <td>Статья/новость</td>
            </tr>';
        $stmt= $conn->query('SELECT `admin_code`, `name`, `post` FROM news');

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            echo '<tr>' .
                "<td>".$row['admin_code']."</td>".
                "<td>".$row['name']."</td>".
                "<td>".$row['post']."</td>".
                "<th><a href='?del_id={$row['admin_code']}'>Удалить</a></th>" .
                '</tr>';
        }
        if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
            //удаляем строку из таблицы
            $stmt2= $conn->query( "DELETE FROM `news` WHERE `admin_code` = {$_GET['del_id']}");
            if ($stmt2) {
                echo "<p>Товар удален.</p>";

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    echo '<tr>' .
                        "<td>".$row['admin_code']."</td>".
                        "<td>".$row['name']."</td>".
                        "<td>".$row['post']."</td>".
                        "<th><a href='?del_id={$row['admin_code']}'>Удалить</a></th>" .
                        '</tr>';
                }
            }
        }
    }

    if (isset($_POST['submitForAdmins']))
    {
        echo '<form method="post"> <input  type="text" placeholder="id Администратора" name="idAdmin"><input type = "text" placeholder="Пароль" name="pass"><input name = "_add" class="buto" style="width: 110px; margin-top: 20px; margin: bottom 20px;" value="Добавить" id=""></form>';

        echo ' <table border=\'1\' style="background: #e3e2e3;">
    <tr>
       <td>ID Администратора</td>
        <td>Пароль</td>
    </tr>';
        $stmt= $conn->query('SELECT  `idAdmin`, `password` FROM admins');

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            echo ' <tr>' .
                "<td>".$row['idAdmin']."</td>".
                "<td>".$row['password']."</td>".
                "<th><a href='?del_id={$row['idAdmin']}'>Удалить</a></th>" .
                '</tr>';
        }

        if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
            //удаляем строку из таблицы
            $stmt= $conn->query( "DELETE FROM `admins` WHERE `idAdmin` = {$_GET['del_id']}");
            if ($stmt) {
                echo '<script>
        alert("Запись успешна удaлена");
        </script>';
              
            }
            
        }
       

    }
    if (isset($_POST['submitForBrony']))
    {
        echo '<div><input type="text" placeholder="ID номера"> <input type="text" width="100px" placeholder="ФИО"> <input type="date"> <input type="date"> <input type="text" placeholder="Номер телефона"><input type="submit" class="buto" id="buttonF" value="Добавить" style="width: 200px"></div> <table border=\'1\'>
    <tr>
       <td>ID Номера</td>
        <td>Фио клиента</td>
        <td>Дата заезда</td>
         <td>Дата выезда</td>
          <td>Номер телефона</td>
    </tr>';
        $stmt= $conn->query('SELECT `idNomer`, `fioKlienta`, `dataZ`, `dataV`, `nomerT` FROM brony');

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))

            echo '<table  style="background: #e3e2e3;"><tr>' .
                "<td>".$row['idNomer']."</td>".
                "<td>".$row['fioKlienta']."</td>".
                "<td>".$row['dataZ']."</td>".
                "<td>".$row['dataV']."</td>".
                "<td>".$row['nomerT']."</td>".
                "<th><a href='?del_id={$row['fioKlienta']}'>Удалить</a></th>" .
                '</tr>';
        if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
            //удаляем строку из таблицы
            $stmt= $conn->query( "DELETE FROM `brony` WHERE `idNomer` = {$_GET['del_id']}");
            if ($stmt) {
                echo "<p>удален.</p>";
            }
        }
    }

    session_destroy();

    ?>
</table>

</html>
