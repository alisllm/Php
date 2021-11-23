<!DOCTYPE html>
<html >
    <meta charset="UTF-8">
    <title>Султан</title>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- jQuery 1.8 or later, 33 KB -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Fotorama from CDNJS, 19 KB -->
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>


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
                <div class="rd-navbar-aside-right rd-navbar-collapse toggle-original-elements">
                    <ul class="rd-navbar-corporate-contacts">
                        <li>
                            <div class="unit unit-spacing-xs">
                                <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                                <div class="unit-body">
                                    <p>09:00<span>am</span> — 05:00<span>pm</span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="unit unit-spacing-xs">
                                <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                                <div class="unit-body"><a class="link-phone" href="tel:#">+7 (928)-936-61-33</a></div>
                            </div>
                        </li>
                </div>
            </div>
        </div>
        <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap toggle-original-elements">
                    <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                        <li><a class="icon fa fa-instagram" href="https://www.instagram.com/sultan.kislovodsk" style="font-size: 30px"></a></li>
                        <li><a class="icon fab fa-whatsapp" href="https://www.instagram.com/sultan.kislovodsk" style="font-size: 30px"></a></li>
                    </ul>
                    <!-- RD Navbar Nav-->

                    <ul class="rd-navbar-nav" class = "scroll">
                        <li class="rd-nav-item active"><a class="rd-nav-link">Главная</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#element1">О нас</a>
                        </li>
                        <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu"><a class="rd-nav-link" href="#element2">Номера</a><span class="rd-navbar-submenu-toggle"></span>
                        </li>


                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <?php

       /*$zaezd = $_POST['data1'];
          $viezd = $_POST["data2"];*/

          ?>

    <section  class="section swiper-container swiper-container-horizontal swiper-container-fade" >

    <div style="width: auto; height: 608px;">
        <img src="images/kislovodsk.jpg">
    </div>
        <!-- Swiper Pagination-->

    </section>

    <section>
        <div style="margin-left: 25%;"id="divSwitch">


        <div style="float: left; font-size: 20px" >
            Заезд:
            <div>
                <input type="date" name="Data1"  style="font-size: 22px;height: 31px;border: solid 1px rgba(228, 178, 72, 0.6);color: #151515;background: #f2f2f2; padding-left: 10px; " placeholder="">
            </div>
        </div>
        <div style="float: left; margin-left: 10px">
            <div style="text-align: left; margin-left: 2%;font-size: 20px">
                Выезд:
                <div>
                    <input type="date" name="Data2"  style="height: 31px;font-size: 22px;
    border: solid 1px rgba(228, 178, 72, 0.6);
    color: #151515;
    background: #f2f2f2;
    padding-left: 10px; " placeholder="" >
                </div>
            </div>
        </div>
    <div style="float: left; margin-left: 10px; margin-top: 20px">
            <button id="btn" onclick="switchText()" class="buto" name="wuf">Количество гостей</button>
    </div>



            <div style="float: left; margin-left: 10px">

                <div id="tablica" style="display:none;font-size: 18px">

                    <script>
                        (function(){
                            
                            function switchText()
                            {
                                var btn = document.getElementById('btn'),
                                    text = document.getElementById('tablica'),
                                    divSwitch = document.getElementById('divSwitch');
                                if (btn.innerHTML === 'Количество гостей') {
                                    text.style.display = 'block';
                                    btn.innerHTML = 'Добавить';
                                    divSwitch.style.marginLeft = '18%';
                                } else {
                                    text.style.display = 'none';
                                    btn.innerHTML = 'Добавить гостей';
                                    divSwitch.style.marginLeft = '25%';
                                }
                            }
                            document.getElementById('btn').addEventListener('click', switchText, false);
                        })()
                    </script>
                    <script>
                        function bronyOne(){
                            var btn2 = document.getElementById('btn2'),
                                infoAbout = document.getElementById('infoAbout');
                            text2 = document.getElementById('tablica2');
                            text2.style.display = 'none';
                            infoAbout.style.display = 'block';
                            btn2.innerHTML = 'Выбрать';
                        }
                    </script>
                    <form onsubmit="return false" oninput="level.value = klv.valueAsNumber" >
                        <label for="klv" style="font-size: 20px">Количество взрослых</label>
                        <input id="klv" type="range" min="0" max="12" value="0" name="vzrosli">
                        <output for="klv" name="level" style="margin-left: 7px;font-size: 18px;margin-right: 10px;color: gray">0</output>
                    </form>

                    <form onsubmit="return false" oninput="levelL.value = klvD.valueAsNumber">
                        <label for="klvD"style="font-size: 20px">Количество детей</label>
                        <input id="klvD" type="range" min="0" max="5" value="0" name="child">
                        <output for="klvD" name="levelL"style="margin-left: 7px;font-size: 18px;margin-right: 10px;color: gray">0</output>
                    </form>
                </div>

        </div></div>
    </section>

<section>
    <div style="width: auto;margin-left: 30px;">
            <div>
                <button id="btn2" onclick="switchText2()" class="buto" style="margin-left: 15px;
    margin-top: 20px;
    width: 250px;"> Найти</button>
            </div>
        </div >

        <div id="tablica2" style="display:none;margin-top: 20px">
            <div style="float: left;margin-right: 153px">
            <script>

                (function(){
                    function switchText2()
                    {
                        var btn2 = document.getElementById('btn2'),
                            infoAbout = document.getElementById('infoAbout'),
                            text2 = document.getElementById('tablica2');

                        if (btn2.innerHTML === ' Найти') {
                            text2.style.display = 'block';
                            btn2.innerHTML = 'Скрыть';
                        } else {
                            text2.style.display = 'none';
                            btn2.innerHTML = 'Выбрать';
                            infoAbout.style.display = 'block';
                        }
                    }
                    document.getElementById('btn2').addEventListener('click', switchText2, false);
                })()
            </script>

            <?php

        /*  $zaezd = $_POST['data1'];
          $viezd = $_POST["data2"];*/
           /* $People =$_POST["vzrosli"];
            $child = $_POST["child"];
            $Fio = $_POST["Fio"];
            $NomerT = $_POST["nomerT"];*/
            $connect_info = "mysql:host=localhost; dbname=sultan; charset=utf8";
            try
            {
                $conn = new PDO("$connect_info", 'root', '');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (Exception $e)
            {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
          /*  if (isset($_POST["bron"]))
            {


                $stmt= $conn->query('INSERT INTO `brony`( `fioKlienta`, `Vzrosl`, `child`, `dataZ`, `dataV`, `nomerT`) 
VALUES ($_POST["Fio"],$_POST["vzrosli"],$_POST["child"],$_POST["data1"],$_POST["data2"],$_POST["nomerT"])');

            }*/

            $stmt= $conn->query('SELECT image, image2,image3 FROM image where idNomer =77');
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            echo '<div class="fotorama" style="width: 442px;height: 396px; float: left; margin-left: 10px;margin-right: 20px"><tr>' .
                '<td >'.'<img src="data:image/png;base64,'.base64_encode($row['image']).'"style="width: 863px;height: 396px;"/>'.'</td>'.
                '<td >'.'<img src="data:image/png;base64,'.base64_encode($row['image2']).'"style="width: 863px;height: 396px;"/>'.'</td>'.
                '<td >'.'<img src="data:image/png;base64,'.base64_encode($row['image3']).'"style="width: 863px;height: 396px;"/>'.'</td>'.
                '</tr> </div>';
            echo '<div style="float: left;width:  865px;">
                <ul style="display: flex;align-items: center;padding: 0 .3rem;
    height: 1.5rem;background-image: linear-gradient(rgba(61,61,61,.04),rgba(61,61,61,.04));">
                    <a class="icon fa fa-wifi" style="font-size: 25px;color: rgba(61,61,61,.5);    margin-right: .45rem;">wifi</a>
                    <a class="icon linearicons-cloud-snow" style="font-size: 25px;color: rgba(61,61,61,.5);    margin-right: .45rem;">Кондиционер</a>
                    <a class="icon fa-bed" style="font-size: 25px;color: rgba(61,61,61,.5);    margin-right: .45rem;">Кровать King-size</a>
                    <a class="icon linearicons-haircut" style="font-size: 25px;color: rgba(61,61,61,.5);    margin-right: .45rem;">Фен</a>
                </ul><a style="font-size: 20px">В номере имеются:
Двухспальная кровать.
Два дивана
Две прикроватные тумбочки.
Шкаф для одежды.
Стол круглый 90/90
Стулья на 4 гостей
Холодильник 
Плоский Телевизор 
Чайник, посуда.
В санузле: 
Фен для волос 
Гель для душа/шампунь/мыло.
Так же в номере уже будут тапочки, халаты.
            </a>
           <input class="buto" type="submit" name="but1" style="width: 830px;" onclick="bronyOne()" value="Забронировать"></div></div>';

            $stmt= $conn->query('SELECT image, image2,image3 FROM image where idNomer =1');
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            echo '<div class="fotorama" style="width: 442px;height: 396px; float: left;margin-left: 10px; margin-right: 20px"><tr>' .
                '<td >'.'<img src="data:image/png;base64,'.base64_encode($row['image']).'"style="width: 863px;height: 396px;"/>'.'</td>'.
                '<td >'.'<img src="data:image/png;base64,'.base64_encode($row['image2']).'"style="width: 863px;height: 396px;"/>'.'</td>'.
                '<td >'.'<img src="data:image/png;base64,'.base64_encode($row['image3']).'"style="width: 863px;height: 396px;"/>'.'</td>'.
                '</tr> </div>';
            echo '<div style="float: left;width:  865px;">
                <li style="display: flex;align-items: center;padding: 0 .3rem;
    height: 1.5rem;background-image: linear-gradient(rgba(61,61,61,.04),rgba(61,61,61,.04));">
                    <a class="icon fa fa-wifi" style="font-size: 25px;color: rgba(61,61,61,.5);    margin-right: .45rem;">wifi</a>
                    <a class="icon linearicons-cloud-snow" style="font-size: 25px;color: rgba(61,61,61,.5);    margin-right: .45rem;">Кондиционер</a>
                    <a class="icon fa-bed" style="font-size: 25px;color: rgba(61,61,61,.5);    margin-right: .45rem;">Кровать King-size</a>
                    <a class="icon linearicons-haircut" style="font-size: 25px;color: rgba(61,61,61,.5);    margin-right: .45rem;">Фен</a>
                </li><a style="font-size: 20px">В номере имеются:
Двухспальная кровать.
Два дивана
Две прикроватные тумбочки.
Шкаф для одежды.
Стол круглый 90/90
Стулья на 4 гостей
Холодильник 
Плоский Телевизор 
Чайник, посуда.
В санузле: 
Фен для волос 
Гель для душа/шампунь/мыло.
Так же в номере уже будут тапочки, халаты.
            </a>
            <button  class="buto" style="width: 830px" id="butTwoBrony">Забронировать</button></div></div>';
            ?>

          <!--  <div style="float: left;margin-left: -387px;">
                <li style="display: flex;align-items: center;padding: 0 .3rem;
    height: 1.5rem;background-image: linear-gradient(rgba(61,61,61,.04),rgba(61,61,61,.04));">
                    <a class="icon fa fa-wifi" style="font-size: 25px;color: rgba(61,61,61,.5);    margin-right: .45rem;">wifi</a>
                    <a class="icon linearicons-cloud-snow" style="font-size: 25px;color: rgba(61,61,61,.5);    margin-right: .45rem;">Кондиционер</a>
                    <a class="icon fa-bed" style="font-size: 25px;color: rgba(61,61,61,.5);    margin-right: .45rem;">Кровать King-size</a>
                    <a class="icon linearicons-haircut" style="font-size: 25px;color: rgba(61,61,61,.5);    margin-right: .45rem;">Фен</a>
                </li>
            </div>-->
        </div>
    </div>
    <script>
            function switchText22()
            {
               alert("Бронирование успешно");
            }
            document.getElementById('butonAl').addEventListener('click', switchText2, false);
        }
    </script>
<section>
    <div style= "display: none; background: #f0f0f0" id="infoAbout">
        <div style="float: top; text-align: center">
            <label style="font-size: 22px;">Для продолжения бронирования, пожалуйста введите контактную информацию</label>
        </div>
        <form >
            <div style="margin-left: 20%">
                <input type="text" placeholder="ФИО" style="height: 40px; width: 500px" name="Fio">
                <input type="tel" placeholder="Номер телефона +7" style="height: 40px; width: 300px" name="nomerT">
                <input type="submit" name = "bron" class="buto" value="Забронировать" style="width: 200px;height: 40px;padding: 10px;" ID="butonAl" onclick="switchText22">
            </div>
        </form>

    </div>

</section>
</section>
    <section style="margin-left: 50px">

        <button class="buto" style="width: 830px;visibility: hidden" id="butOneBy" >Забронировать</button>
    <div class="container" >
        <div class="heading-panel">
            <div class="heading-panel-left">
                <h1 class="oh-desktop heading-panel-title"><span class="d-inline-block wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">Удобства</span></h1>
                <h4 class="oh-desktop heading-panel-subtitle"><span class="d-inline-block wow slideInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: slideInDown; font-size: 32px;">За что выберают отель "Султан"</span></h4>
            </div>
            <div class="heading-panel-decor wow fadeIn" style="visibility: visible; animation-name: fadeIn; font-size: 28px"></div>
        </div>
    </div>

    <div class="row row-30">
        <div class="col-sm-6" style="max-width: 281px">
            <article class="box-icon-classic box-icon-classic-3 wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown; width: 250px;height: 150px; ">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                    <div class="unit-left">
                        <div class="box-icon-classic-icon  fas fa-taxi"></div>
                    </div>
                    <div class="unit-body">
                        <h5 class="box-icon-classic-title"><a style=" text-decoration: none;" href="#"; font-size: 28px;>Трансфер</a></h5>
                        <p class="box-icon-classic-text" >Бесплатный трансфер</p>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-sm-6 " style="max-width: 281px">
            <article class="box-icon-classic box-icon-classic-3 wow fadeInDown" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                    <div class="unit-left">
                        <div class="box-icon-classic-icon linearicons-platter"></div>
                    </div>
                    <div class="unit-body">
                        <h5 class="box-icon-classic-title"><a style=" text-decoration: none;" href="#">Завтраки</a></h5>
                        <p class="box-icon-classic-text">Бесплатный завтрак.
                        </p>
                    </div>
                </div>
            </article>
        </div>

        <div class="col-sm-6 " style="max-width: 281px">
            <article class="box-icon-classic box-icon-classic-3 wow fadeInDown" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                    <div class="unit-left">
                        <div class="box-icon-classic-icon fas fa-parking "></div>
                    </div>
                    <div class="unit-body">
                        <h5 class="box-icon-classic-title"><a style=" text-decoration: none;" href="#"> Парковка </a></h5>
                        <p class="box-icon-classic-text"> Отель в парковой зоне.  </p>
                    </div>
                </div>
            </article>
        </div>


        <div class="col-sm-6 " style="max-width: 281px">
            <article class="box-icon-classic box-icon-classic-3 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                    <div class="unit-left">
                        <div class="box-icon-classic-icon fas fa-wifi"></div>
                    </div>
                    <div class="unit-body">
                        <h5 class="box-icon-classic-title"><a style=" text-decoration: none;" href="#">Wi-fi</a></h5>
                        <p class="box-icon-classic-text">Бесплатный высокоскоростной Wifi.</p>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-sm-6 " style="max-width: 281px">
            <article class="box-icon-classic box-icon-classic-3 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                    <div class="unit-left">
                        <div class="box-icon-classic-icon fas fa-star"></div>
                    </div>
                    <div class="unit-body">
                        <h5 class="box-icon-classic-title"><a style=" text-decoration: none;" href="#">Рейтинг</a></h5>
                        <p class="box-icon-classic-text">Высокий рейтинг на Booking.com </p>
                    </div>
                </div>
            </article>
        </div>


    </div>
    </section>





    <section class="section section-lg bg-default" id="element2">
        <div class="container">
            <div class="heading-panel">
                <div class="heading-panel-left">
                    <h1 class="oh-desktop heading-panel-title"><span class="d-inline-block wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">Галерея</span></h1>
                    <h4 class="oh-desktop heading-panel-subtitle"><span class="d-inline-block wow slideInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: slideInDown;">Наши номера</span></h4>
                </div>
                <div class="heading-panel-decor wow fadeIn" style="visibility: visible; animation-name: fadeIn;"></div>
            </div>
            <div class="row row-sm row-30" data-lightgallery="group" >
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Thumbnail Modern-->
                        <article class="thumbnail thumbnail-creative thumbnail-sm wow slideInRight" style="visibility: visible; animation-name: slideInRight;"><a class="thumbnail-creative-figure" href="images/slider-1-1920x679.jpg" data-lightgallery="item"><img src="images/nomer1.jpg" alt="" width="370" height="303"></a>
                            <div class="thumbnail-creative-caption">
                                <h5 class="thumbnail-creative-title"><a style="color: #b5a067">Стандарт</a></h5>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Thumbnail Modern-->
                        <article class="thumbnail thumbnail-creative thumbnail-sm wow slideInUp" style="visibility: visible; animation-name: slideInUp;"><a class="thumbnail-creative-figure" href="images/home-gallery-2-1200x800-original.jpg" data-lightgallery="item"><img src="images/nomer2.jpg" alt="" width="370" height="303"></a>
                            <div class="thumbnail-creative-caption">
                                <h5 class="thumbnail-creative-title"><a style="color: #b5a067">Семейный</a></h5>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Thumbnail Modern-->
                        <article class="thumbnail thumbnail-creative thumbnail-sm wow slideInDown" style="visibility: visible; animation-name: slideInDown;"><a class="thumbnail-creative-figure" href="images/home-gallery-3-1200x800-original.jpg" data-lightgallery="item"><img src="images/nomer3.jpg" alt="" width="370" height="303"></a>
                            <div class="thumbnail-creative-caption">
                                <h5 class="thumbnail-creative-title"><a style="color: #b5a067">Стандарт</a></h5>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Thumbnail Modern-->
                        <article class="thumbnail thumbnail-creative thumbnail-sm wow slideInUp" style="visibility: visible; animation-name: slideInUp;"><a class="thumbnail-creative-figure" href="images/fullwidth-masonry-gallery-5-1200x800-original.jpg" data-lightgallery="item"><img src="images/nomer4.jpg" alt="" width="370" height="303"></a>
                            <div class="thumbnail-creative-caption">
                                <h5 class="thumbnail-creative-title"><a style="color: #b5a067">Семейный</a></h5>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Thumbnail Modern-->
                        <article class="thumbnail thumbnail-creative thumbnail-sm wow slideInDown" style="visibility: visible; animation-name: slideInDown;"><a class="thumbnail-creative-figure" href="images/stol.jpg" data-lightgallery="item"><img src="images/stol.jpg" alt="" width="370" height="303"></a>
                            <div class="thumbnail-creative-caption">
                                <h5 class="thumbnail-creative-title"><a style="color: #b5a067">Столовая</a></h5>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                        <!-- Thumbnail Modern-->
                        <article class="thumbnail thumbnail-creative thumbnail-sm wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;"><a class="thumbnail-creative-figure" href="images/home-gallery-6-1200x800-original.jpg" data-lightgallery="item"><img src="images/stol2.jpg" alt="" width="370" height="303"></a>
                            <div class="thumbnail-creative-caption">
                                <h5 class="thumbnail-creative-title"><a style="color: #b5a067">Столовая</a></h5>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--
///////////////
////
ОТЗЫВЫ
///
//////////////
-->
    <section class="section section-xl bg-gray-4">
        <div class="container">
            <div class="heading-panel">
                <div class="heading-panel-left">
                    <h1 class="oh-desktop heading-panel-title"><span class="d-inline-block wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">Отзывы</span></h1>
                    <h4 class="oh-desktop heading-panel-subtitle"><span class="d-inline-block wow slideInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: slideInDown;">Что думают наши клиенты</span></h4>
                </div>


            </div>
            <article class="quote-modern quote-modern-2 quote-modern-custom">
                <div class="unit unit-spacing-md align-items-center">
                    <div class="unit-left"><a class="quote-modern-figure" href="#"><img class="img-circles" alt="" width="55" height="55" src="images/baseline_account_circle_black_18dp.png"></a></div>
                    <div class="unit-body">
                        <h5 class="quote-modern-cite"><a href="#">Valeriy</a></h5>
                        <p class="quote-modern-status">Великолепно</p>
                    </div>
                </div>
                <div class="quote-modern-text">
                    <p class="q">Отличный номер , отличная ванная комната . Халат , тапочки . Большой и вкусный завтрак. Нет проблем с паркингом . Отличный персонал</p>
                 <a href="https://www.booking.com/hotel/ru/sultan-in-kislovodsk.ru.html?aid=1161916;label=yandex-dsa-OhU7j%2AolVVEekh50aEN34g-4112413328;sid=99628fefd133c42a151fff6e6e894db0;dest_id=-2928684;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;hpos=1;no_rooms=1;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1609840581;srpvid=6dc945e234af023f;type=total;ucfs=1&#hotelTmpl"> Прочитать отзыв на Booking.com</a>
                </div>
            </article>
            <article class="quote-modern quote-modern-2 quote-modern-custom">
                <div class="unit unit-spacing-md align-items-center">
                    <div class="unit-left"><a class="quote-modern-figure" href="#"><img class="img-circles" alt="" width="55" height="55" src="images/baseline_account_circle_black_18dp.png"></a></div>
                    <div class="unit-body">
                        <h5 class="quote-modern-cite"><a href="#">Алексей</a></h5>
                        <p class="quote-modern-status">Не хотите ничем омрачать свою поездку в Кисловодск - останавливайтесь в "Султане"</p>

                    </div>
                </div>
                <div class="quote-modern-text">
                    <p class="q">Жили с семьей в номере на самом верху на мансардном этаже в двухкомнатном номере. Отель очень красивый, лестницы и двери в номера сделаны, как в каком-нибудь замке. Вид на город и горы прекрасный. Жили в конце октября - очень тепло. Расположение - тоже 5 баллов, в пешей доступности (10 минут) нарзанная галерея, а если вы на машине, то гостиница стоит прямо на дороге на Джилы-Су, которую без преувеличения можно назвать одной из самых красивых не только в европейской части России, но и стране в целом. Хозяйка очень радушная и готовит прекрасные домашние завтраки с утра. Не хотелось оттуда уезжать.</p>
                    <a href="https://www.booking.com/hotel/ru/sultan-in-kislovodsk.ru.html?aid=1161916;label=yandex-dsa-OhU7j%2AolVVEekh50aEN34g-4112413328;sid=99628fefd133c42a151fff6e6e894db0;dest_id=-2928684;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;hpos=1;no_rooms=1;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1609840581;srpvid=6dc945e234af023f;type=total;ucfs=1&#hotelTmpl"> Прочитать отзыв на Booking.com</a>
                </div>
            </article>
    </section>


    <!--

    ВЫВОД СТАТЕЙ


    -->
    <section style="margin-bottom: 40px">
        <?php
        $connect_info = "mysql:host=localhost; dbname=sultan; charset=utf8";
        try
        {

            $conn = new PDO("$connect_info", 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (Exception $e)
        {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
        $stmt= $conn->query('SELECT `name`, `post` FROM news');

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            echo '<div class="heading-panel" style=" padding-top: 70px">
            <div class="heading-panel-left"><tr><h1 class="oh-desktop heading-panel-title" >'
                .'<span class="d-inline-block wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">Новости</span></h1>'.
                '<h4 class="oh-desktop heading-panel-subtitle"><span class="d-inline-block wow slideInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: slideInDown; font-size: 32px;">'.$row['name'].'</span></h4>'.
                "</div></div><a style='font-size: 22px;font-family: cursive;color: gray;letter-spacing: .05em;margin-left: 10px'>".$row['post']."</a>".
                '</tr>';
        }
        ?>
    </section>




    <footer class="section footer-corporate footer-corporate-2 context-dark">
        <div class="footer-corporate-inset">
            <div class="container">
                <div class="row row-40 justify-content-lg-between">
                    <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
                        <div class="oh-desktop">
                            <div class="wow slideInRight" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInRight;">
                                <h5 class="text-spacing-100">Наши контакты</h5>
                                <ul class="footer-contacts d-inline-block d-sm-block">
                                    <li>
                                        <div class="unit">
                                            <div class="unit-left"><span class="icon fa fa-phone" aria-hidden="true"></span></div>
                                            <div class="unit-body"><a class="link-phone" href="tel:#">+7 (928)-936-61-33 </a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit">
                                            <div class="unit-left"><span class="icon fa fa-phone" aria-hidden="true"></span></div>
                                            <div class="unit-body"><a class="link-phone" href="tel:#">+7 (909)-750-44-55 </a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit">
                                            <div class="unit-left"><span class="icon fa fa-envelope" aria-hidden="true"></span></div>
                                            <div class="unit-body"><a class="link-aemail" href="mailto:#">sultan-hotel@mail.ru</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit">
                                            <div class="unit-left"><span class="icon fa fa-location-arrow" aria-hidden="true"></span></div>
                                            <div class="unit-body"><a class="link-location" href="#">улица Гагарина 52, Кисловодск</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit">
                                            <div class="unit-body"><a class="link-location" href="autoriz.php">Вход для администраторов</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
                        <div class="oh-desktop">
                            <div class="wow slideInLeft" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInLeft;">
                                <h5 class="text-spacing-100">Местоположение</h5>
                                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aefdb33e468fd3f78a08e1d030b2a8f0030099286e80c8c29c6bddee482e7320d&amp;width=500&amp;height=250&amp;lang=ru_RU&amp;scroll=true"></script>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-corporate-bottom-panel">
            <div class="container">
                <div class="row row-10 align-items-md-center">
                    <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                        <div>
                            <ul class="list-inline list-inline-sm footer-social-list-2">
                                <li><a class="icon fa fa-whatsapp" href="https://wa.me/message/LV7RE7MMA65FN1" aria-hidden="true"></a></li>
                                <li><a class="icon fa fa-instagram" href="https://www.instagram.com/sultan.kislovodsk" aria-hidden="true"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 order-sm-first">
                        <!-- Rights-->
                        <p class="rights"><span>©&nbsp;</span><span class="copyright-year">2021</span> . Отель открыт и работает с 2017 года.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>

    </body>
</html>
