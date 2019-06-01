<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    
    <title>"КИНЕЗИС" - Центры кинезитерапии в Перми</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="icon" type="image/png" href="/../images/logo/favicon.png">

    <link rel="stylesheet" href="/../../css/grid.css">
    <link rel="stylesheet" href="/../../css/main_style.css">
    <link rel="stylesheet" href="/../../css/decoration_rules.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="/../../css/fontawesome/css/all.css"> -->
    <link rel="stylesheet" href="/../../css/header.css">
    <link rel="stylesheet" href="/../../css/navigation.css">
    <link rel="stylesheet" href="/../../css/content_activities.css">
    <link rel="stylesheet" href="/../../css/content_person.css">
    <link rel="stylesheet" href="/../../css/content_article.css">
    <link rel="stylesheet" href="/../../css/content_contacts.css">
    <link rel="stylesheet" href="/../../css/content_prices.css">
    <link rel="stylesheet" href="/../../css/footer.css">
    <link rel="stylesheet" href="/../../css/overlay.css">
    <link rel="stylesheet" href="/../../css/scrollingElements.css">
    <link rel="stylesheet" href="/../../css/media_query.css">
    <link rel="stylesheet" href="/../../css/slider.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>Главная</title>
</head>
<body>

	<?php
		include(__DIR__ . '/../../html/header.html');
        // include(__DIR__ . '/../../html/navigation.html');
        // include(__DIR__ . '/main_navigation_lists.php' );
		include(__DIR__ . '/main_navigation.php');
		include(__DIR__ . '/../../html/main__content_start.html');

		include(__DIR__ . '/../views/' . $content_view);

        include(__DIR__ . '/../../html/main__content_stop.html');
        include(__DIR__ . '/../../html/footer.html');
        include(__DIR__ . '/../../html/overlay_callback.html');
        // include(__DIR__ . '/../../html/overlay_menu.html');
        // include(__DIR__ . '/main_navigation_lists.php' );
        include(__DIR__ . '/main_overlay_navigation.php');
        include(__DIR__ . '/../../html/overlay_slider.html');
        // include('./html/end.html');
	?>


	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="../../js/menu_desktop_and_mobile_slideup.js"></script>
    <script src="../../js/scroll_window.js"></script>
    <script src="../../js/scrollTo.js"></script>
    <script src="../../js/overlay_callback.js"></script>
    <script src="../../js/overlay_menu.js"></script>
    <script src="../../js/overlay_callback_submit.js"></script>
    
    <script src="../../js/overlaySliderPainting.js"></script>
    <script src="../../js/slider.js"></script>
    <script src="../../js/openSlider.js"></script>
    <script src="../../js/download_files.js"></script>

    </body>
</html>