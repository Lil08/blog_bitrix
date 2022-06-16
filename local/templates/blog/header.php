<?php ?>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <?php $APPLICATION->ShowHead() ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><? $APPLICATION->ShowTitle() ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <link rel="shortcut icon" href="favicon.ico">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700'
          rel='stylesheet' type='text/css'>
    <!-- Animate -->
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/animate.css">
    <!-- Icomoon -->
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/bootstrap.css">

    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/style.css">

    <!-- Modernizr JS -->
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel() ?></div>
<div id="fh5co-offcanvas">
    <a href="#" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i
                    class="icon-cross3"></i> <span>Close</span></span></a>
    <div class="fh5co-bio">
        <figure>
            <img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
        </figure>
        <h3 class="heading">About Me</h3>
        <h2>Emily Tran Le</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
            texts. </p>
        <ul class="fh5co-social">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-instagram"></i></a></li>
        </ul>
    </div>

    <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "cat_list", Array(
        "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
        "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
        "CACHE_GROUPS" => "N",	// Учитывать права доступа
        "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
        "CACHE_TYPE" => "A",	// Тип кеширования
        "COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
        "FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
        "IBLOCK_ID" => "5",	// Инфоблок
        "IBLOCK_TYPE" => "news",	// Тип инфоблока
        "SECTION_CODE" => "",	// Код раздела
        "SECTION_FIELDS" => array(	// Поля разделов
            0 => "",
            1 => "",
        ),
        "SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
        "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
        "SECTION_USER_FIELDS" => array(	// Свойства разделов
            0 => "",
            1 => "",
        ),
        "SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
        "TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
        "VIEW_MODE" => "LINE",	// Вид списка подразделов
    ),
        false
    );?><br>

</div>
<!-- END #fh5co-offcanvas -->
<header id="fh5co-header">

    <div class="container-fluid">

        <div class="row">
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
            <ul class="fh5co-social">
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-instagram"></i></a></li>
            </ul>
            <div class="col-lg-12 col-md-12 text-center">
                <h1 id="fh5co-logo"><a href="index.html">Magazine <sup>TM</sup></a></h1>
            </div>

        </div>

    </div>

</header>
<!-- END #fh5co-header -->

