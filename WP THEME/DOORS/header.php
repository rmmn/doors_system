<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
                                        echo ' | ';
                                    } ?> <?php bloginfo('name'); ?></title>
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="assets/css/style.min.css" /> -->

    <?php wp_head(); ?>
</head>

<body>

    <header class="header">
        <div class="container header-container">
            <?php if (get_option('theme_logo')) : ?>
            <a href="<?= get_home_url(); ?>" class="logo"
                style="background-image: url('<?= get_option('theme_logo'); ?>');"></a>
            <?php else : ?>
            <a href="<?= get_home_url(); ?>" class="logo"></a>
            <?php endif; ?>

            <?php
            header_nav();
            ?>
            <!-- <nav class="nav left">
                <ul>
                    <li class="dropdown">
                        <a href="#" class="nav_link dropdown">Каталог товаров</a>
                        <nav class="dropdown_menu">
                            <ul>
                                <li class="child_dropdown">
                                    <a href="#" class="nav_link dropdown">Межкомнатные двери</a>
                                    <nav class="child_dropdown_menu">
                                        <ul>
                                            <li>
                                                <a href="#" class="nav_link">Межкомнатные двери</a>
                                            </li>
                                            <li><a href="#" class="nav_link">Входные двери</a></li>
                                            <li><a href="#" class="nav_link">Дверные системы</a></li>
                                            <li><a href="#" class="nav_link">Специальные двери</a></li>
                                            <li><a href="#" class="nav_link">фурнитура</a></li>
                                        </ul>
                                    </nav>
                                </li>
                                <li><a href="#" class="nav_link">Входные двери</a></li>
                                <li><a href="#" class="nav_link">Дверные системы</a></li>
                                <li><a href="#" class="nav_link">Специальные двери</a></li>
                                <li><a href="#" class="nav_link">фурнитура</a></li>
                            </ul>
                        </nav>
                    </li>
                    <li><a href="#" class="nav_link">Акции</a></li>
                    <li class="dropdown">
                        <a href="#" class="nav_link dropdown">Услуги</a>
                        <nav class="dropdown_menu">
                            <ul>
                                <li class="child_dropdown">
                                    <a href="#" class="nav_link dropdown">замер</a>
                                    <nav class="child_dropdown_menu">
                                        <ul>
                                            <li>
                                                <a href="#" class="nav_link">Межкомнатные двери</a>
                                            </li>
                                            <li><a href="#" class="nav_link">Входные двери</a></li>
                                            <li><a href="#" class="nav_link">Дверные системы</a></li>
                                            <li><a href="#" class="nav_link">Специальные двери</a></li>
                                            <li><a href="#" class="nav_link">фурнитура</a></li>
                                        </ul>
                                    </nav>
                                </li>
                                <li><a href="#" class="nav_link">установка</a></li>
                                <li><a href="#" class="nav_link">рассрочка</a></li>
                                <li><a href="#" class="nav_link">Оплата / доставка /
                                        обмен / возврат</a></li>
                            </ul>
                        </nav>
                    </li>
                    <li><a href="#" class="nav_link">О нас</a></li>
                    <li class="dropdown">
                        <a href="#" class="nav_link dropdown">Полезное</a>
                        <nav class="dropdown_menu">
                            <ul>
                                <li class="child_dropdown">
                                    <a href="#" class="nav_link dropdown">обзоры</a>
                                    <nav class="child_dropdown_menu">
                                        <ul>
                                            <li>
                                                <a href="#" class="nav_link">Межкомнатные двери</a>
                                            </li>
                                            <li><a href="#" class="nav_link">Входные двери</a></li>
                                            <li><a href="#" class="nav_link">Дверные системы</a></li>
                                            <li><a href="#" class="nav_link">Специальные двери</a></li>
                                            <li><a href="#" class="nav_link">фурнитура</a></li>
                                        </ul>
                                    </nav>
                                </li>
                                <li><a href="#" class="nav_link">инструкции</a></li>
                            </ul>
                        </nav>
                    </li>
                    <li><a href="#" class="nav_link">Контакты</a></li>
                </ul>
            </nav> -->
            <nav class="nav right">
                <ul>

                    <li><a href="#" class="nav_link search_link"></a></li>

                    <?php if (get_option('enable_account') == true) : ?>
                    <li><a href="#" class="nav_link account_link"></a></li>
                    <?php endif; ?>

                    <?php if (get_option('enable_cart') == true) : ?>
                    <li><a href="#" class="nav_link basket_link">1</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
            <div class="phone right">
                <a href="tel:<?php echo get_option('header_phone'); ?>"
                    class="phone_link"><?php echo get_option('header_phone'); ?></a>
            </div>
            <a href="#" class="menu">
                <span></span>
            </a>
        </div>
    </header>

    <section class="search">
        <div class="container search_container">
            <div class="content">
                <form class="search_form" action="" method="get">
                    <div class="form_content">
                        <div class="input_form">
                            <input type="search" name="s" id="s" placeholder="Поиск по товарам">
                            <button type="submit" class="button inverted">Найти</button>
                        </div>
                    </div>
                </form>
            </div>
            <a href="#" class="close_search"></a>
        </div>
    </section>