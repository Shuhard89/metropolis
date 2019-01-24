<?php $currentpage = $_SERVER['REQUEST_URI']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Metropolis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/rSlider.min.css">
    <link rel="stylesheet" href="css/selectize.css">
    <link rel="stylesheet" href="css/main.css?ver=1.05">
    <link rel="stylesheet" href="css/mediaq.css?ver=1.05">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
    <header class="main-header-container">
        <div class="header-sidebar">
            <div class="header-sidebar-top">
                <a class="logo" href="index.php">
                    <img src="static/img/ui/logo.svg" alt="Metropolis logotype">
                </a>
                <div class="menu-button" id="menu_btn">
                    <div class="burger">
                        
                    </div>
                </div>
            </div>
            <ul class="header-sidebar-socials-list">
                <li>
                    <a href="#" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
            </ul>
            <ul class="header-sidebar-lang-list">
                <li>
                    <a href="#">EN</a>
                </li>
                <li>
                    <a href="#">RU</a>
                </li>
                <li class="active">
                    <a href="#">UA</a>
                </li>
            </ul>
        </div>
        <div class="header-btns">
            <div class="cta-callback-btn" id="cta-callback-btn">
                <img src="static/img/ui/call_main.svg" alt="Phone icon">
            </div>
            <div class="camera-btn" id="cctv-btn">
                <img src="static/img/ui/CCTV_green.svg" alt="CCTV icon">
            </div>
        </div>
        <div class="header-menu-container" id="header_menu_container">
            <img class="menu-bg-logo" src="static/img/ui/m_logo_outline-01.svg" alt="Metropolis logo background">
            <div class="header-menu-content">
                <div class="header-menu-content-meta">
                    <div class="header-menu-content-meta-address">
                        <span>м. Київ, вул. Академіка Заболотного, 1</span>
                        <a href="#seemap" data-btn="open_map_modal">Дивитись на мапi</a>
                    </div>
                </div>
                <nav class="header-menu-content-columns-container">
                    <div class="header-menu-content-column">
                        <ul>
                            <li>
                                <a href="page_about_complex.php">Про комплекс</a>
                            </li>
                            <li>
                                <a href="filter_appartments.php">Планування</a>
                            </li>
                            <li>
                                <a href="page_progress.php">Хід будівництва</a>
                            </li>
                            <li>
                                <a href="page_gallery.php" class="gallery-button" data-images="['static/img/gallery/1.jpg','static/img/gallery/2.jpg','static/img/gallery/3.jpg','static/img/gallery/4.jpg','static/img/gallery/5.jpg','static/img/gallery/6.jpg','static/img/gallery/7.jpg','static/img/gallery/8.jpg','static/img/gallery/9.jpg','static/img/gallery/10.jpg']">Галерея</a>
                            </li>
                            <li>
                                <a href="single_article.php">Квартири з ремонтом</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-menu-content-column">
                        <ul>
                            <li>
                                <a href="category_news.php">Новини</a>
                            </li>
                            <li>
                                <a href="page_about_developer.php">Забудовник</a>
                            </li>
                            <li>
                                <a href="page_docs.php">Документація</a>
                            </li>
                            <li>
                                <a href="page_contacts.php">Контакти</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <a class="menu-cta-choose" href="filter_appartments.php">
                <span>Обрати квартиру</span>
                <img src="static/img/ui/plus_flat.svg" alt="Plus icon">
            </a>
            <div class="menu-cta-call-message">
                <a href="tel:+380442908660">+38 (044) 290 86 60</a>
                <span>Замовити дзвiнок</span>
            </div>
        </div>
    </header>
    <div class="mobile-header">
        <div class="mobile-phone-btn">
            <img src="static/img/ui/call_main.svg" alt="Phone icon">
        </div>
        <a class="mobile-header-logo" href="index.php">
            <img src="static/img/ui/logo_mini.png" alt="Metropolis logo">
        </a>
        <div class="menu-button" id="menu_btn_mobile">
            <div class="burger">
                
            </div>
        </div>
    </div>
    <div class="mobile-header-content" id="mobile_header_content">
        <div class="mobile-header-content-inner">
            <div class="mobile-header-content-top">
                <div class="header-menu-content-meta">
                    <div class="header-menu-content-meta-address">
                        <span>м. Київ, вул. Академіка Заболотного, 1</span>
                        <a href="#seemap" data-btn="open_map_modal">Дивитись на мапi</a>
                    </div>
                </div>
                <nav class="mobile-nav">
                    <ul>
                        <li>
                            <a href="page_about_complex.php">Про комплекс</a>
                        </li>
                        <li>
                            <a href="filter_appartments.php">Планування</a>
                        </li>
                        <li>
                            <a href="page_progress.php">Хід будівництва</a>
                        </li>
                        <li>
                            <a href="page_gallery.php" class="gallery-button" data-images="['static/img/gallery/1.jpg','static/img/gallery/2.jpg','static/img/gallery/3.jpg','static/img/gallery/4.jpg','static/img/gallery/5.jpg','static/img/gallery/6.jpg','static/img/gallery/7.jpg','static/img/gallery/8.jpg','static/img/gallery/9.jpg','static/img/gallery/10.jpg']">Галерея</a>
                        </li>
                        <li>
                            <a href="single_article.php">Квартири з ремонтом</a>
                        </li>
                    </ul>
                </nav>
                <div class="mobile-cctv-btn">
                    <img src="static/img/ui/CCTV_green.svg" alt="cctv icon">
                </div>
                <ul class="header-sidebar-lang-list">
                    <li>
                        <a href="#">EN</a>
                    </li>
                    <li>
                        <a href="#">RU</a>
                    </li>
                    <li class="active">
                        <a href="#">UA</a>
                    </li>
                </ul>
                <ul class="header-sidebar-socials-list">
                    <li>
                        <a href="#" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mobile-header-content-bottom">
                <nav class="mobile-nav">
                    <ul>
                        <li>
                            <a href="category_news.php">Новини</a>
                        </li>
                        <li>
                            <a href="page_about_developer.php">Забудовник</a>
                        </li>
                        <li>
                            <a href="page_docs.php">Документація</a>
                        </li>
                        <li>
                            <a href="page_contacts.php">Контакти</a>
                        </li>
                    </ul>
                </nav>
                <a class="menu-cta-choose" href="filter_appartments.php">
                    <span>Обрати квартиру</span>
                    <img src="static/img/ui/plus_flat.svg" alt="Plus icon">
                </a>
            </div>
        </div>
    </div>