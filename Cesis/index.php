<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="libs/normalize/normalize.css">
    <link rel="stylesheet" href="libs/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="libs/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="libs/flexboxgrid/flexboxgrid.min.css">
    <link rel="stylesheet" href="libs/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="libs/animatecss/animate.min.css">
    <link rel="stylesheet" href="libs/slick/slick.css">
    <link rel="stylesheet" href="libs/slick/slick-theme.css">

    <link rel="stylesheet" href="assets/global/css/global.min.css">
    <link rel="stylesheet" href="assets/features/navbar/css/navbar.min.css">
    <link rel="stylesheet" href="assets/features/menu/css/menu.min.css">
    <link rel="stylesheet" href="assets/features/header/css/header.min.css">
    <link rel="stylesheet" href="assets/features/preview/css/preview.min.css">
    <link rel="stylesheet" href="assets/features/gallery/css/gallery.min.css">
    <link rel="stylesheet" href="assets/features/plans/css/plans.min.css">
    <link rel="stylesheet" href="assets/features/transition/css/transition.min.css">
    <link rel="stylesheet" href="assets/features/slider/css/slider.min.css">
    <link rel="stylesheet" href="assets/features/select/css/select.min.css">
    <link rel="stylesheet" href="assets/features/testimonials/css/testimonials.min.css">
    <link rel="stylesheet" href="assets/features/brands/css/brands.min.css">
    <link rel="stylesheet" href="assets/features/tiles/css/tiles.min.css">
    <link rel="stylesheet" href="assets/features/slogan/css/slogan.min.css">
    <link rel="stylesheet" href="assets/features/footer/css/footer.min.css">
    <title>Document</title>
</head>
<body>
    <header id="j-header" class="header">
        <div class="navbar j-navbar">
            <div class="navbar__upside">
                <div class="navbar__logo-wrapper">
                    <a href="#">
                        <img
                            src="assets/images/Cesis_Logo_w.png"
                            alt="Logo"
                            class="navbar__logo j-logo-white"
                        >
                        <img
                            src="assets/images/logonormal.png"
                            alt="Logo"
                            class="g-hidden navbar__logo j-logo-color"
                        >
                    </a>
                </div>
                <button class="hamburger hamburger--spring j-header-hamburger" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
        <div class="g-hidden menu j-header-menu">
            <div class="menu__inner">
                <button class="hamburger hamburger--spring menu__burger j-header-hamburger" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
                <a href="index.php" class="menu__item">Home</a>
                <a href="1" class="menu__item">About</a>
                <a href="2" class="menu__item">Services</a>
                <a href="3" class="menu__item">News</a>
                <a href="4" class="menu__item">Works</a>
                <a href="5" class="menu__item">Contact</a>
                <a href="6" class="menu__item">Demos</a>
            </div>
        </div>
        <div class="owl-carousel header__carousel">
            <div class="header__slide-container header__slide-container--first">
                <h1 class="header__slide-title">
                    I am Cesis
                </h1>
                <h2 class="header__subtitle">
                    Let's Make an Awesome Site
                </h2>
                <a href="#!" class="g-button header__button">
                    Get in touch
                </a>
            </div>
            <div class="header__slide-container header__slide-container--second">
                <h1 class="header__slide-title">
                    Make Art
                </h1>
                <h2 class="header__subtitle">
                    Using Our Awesome Theme
                </h2>
                <a href="#!" class="g-button header__button">
                    Get in touch
                </a>
            </div>
        </div>
    </header>
    <div class="preview">
        <div class="row preview__row">
            <div class="col-xs-4 preview__item-wrapper">
                <h2 class="g-title">
                    Let's make<br>
                    your design<br>
                    great again
                </h2>
                <h4 class="g-subtitle">
                    Cesis is creating a new era for WordPress themes,
                    you will never be able to get the same quality
                    with any other theme.
                </h4>
                <a href="#!" class="g-button g-button--black">Get in touch</a>
            </div>
            <div class="col-xs-8">
                <img
                    src="assets/images/phone-1x.jpg"
                    alt="Phone"
                    class="preview__image preview__image--right"
                >
            </div>
        </div>
        <div class="row preview__row">
            <div class="col-xs-8">
                <img
                    src="assets/images/home2.jpg"
                    alt="Phone"
                    class="preview__image preview__image--left"
                >
            </div>
            <div class="col-xs-4 preview__item-wrapper">
                <h2 class="g-title">
                    What is Cesis?
                </h2>
                <h4 class="g-subtitle">
                    All the coding have been done perfectly,
                    you will be able to generate all the element and modify
                    any options easily.
                </h4>
                <div class="preview__item-description-wrapper">
                    <p class="preview__item-description">
                        To make Cesis easy to use and user-friendly we made sure
                        that everything can be done directly live from the front-end,
                        you will be able to create and see the result directly
                        with infinite possibilities.
                    </p>
                    <p>
                        Our main goal with Cesis is to give the users absolute control over
                        their website, we want them to be able
                        to modify anything really easily without having
                        to spend hours to learn how to do it.
                    </p>
                </div>
                <a href="#!" class="g-button g-button--black">Get in touch</a>
            </div>
        </div>
    </div>

    <div class="g-container gallery">
        <div class="gallery__filter-buttons">
            <button
                type="button"
                class="gallery__button gallery__button--is-active j-gallery-button"
                data-category="all"
            >
                All
            </button>
            <button
                type="button"
                class="gallery__button j-gallery-button"
                data-category='["applications"]'
            >
                Applications
            </button>
            <button
                type="button"
                class="gallery__button j-gallery-button"
                data-category='["branding"]'
            >
                Branding
            </button>
            <button
                type="button"
                class="gallery__button j-gallery-button"
                data-category='["interaction"]'
            >
                Interaction
            </button>
            <button
                type="button"
                class="gallery__button j-gallery-button"
                data-category='["photography"]'
            >
                Photography
            </button>
            <button
                type="button"
                class="gallery__button j-gallery-button"
                data-category='["web-design"]'
            >
                Web Design
            </button>
        </div>
        <div class="j-gallery">
            <?php
                $galleryItems = [
                    [
                        'title' => 'Canon Microless Pack',
                        'subtitle' => 'Photography',
                        'category' => '["photography"]',
                        'size-class' => '',
                        'image-name' => 'port1-min.jpg',
                        'image-alt' => 'Camera',
                    ],
                    [
                        'title' => 'North Oxford Logo',
                        'subtitle' => 'Branding',
                        'category' => '["branding"]',
                        'size-class' => ' gallery__item-wrapper--rectangle-x',
                        'image-name' => 'port2-min-1200x600.jpg',
                        'image-alt' => 'Oxford logo',
                    ],
                    [
                        'title' => 'North Oxford Gym',
                        'subtitle' => 'Applications',
                        'category' => '["applications"]',
                        'size-class' => ' gallery__item-wrapper--rectangle-x',
                        'image-name' => 'port3-min-1200x600.jpg',
                        'image-alt' => 'Oxford gym',
                    ],
                    [
                        'title' => 'Summer Fashion',
                        'subtitle' => 'Web Design"',
                        'category' => '["web-design"]',
                        'size-class' => ' gallery__item-wrapper--rectangle-y',
                        'image-name' => 'port4-min-600x1200.jpg',
                        'image-alt' => 'Summer Fashion',
                    ],
                    [
                        'title' => 'Kinfolk Brochure',
                        'subtitle' => 'Branding',
                        'category' => '["branding"]',
                        'size-class' => '',
                        'image-name' => 'port5-min.jpg',
                        'image-alt' => 'Kinfolk Brochure',
                    ],
                    [
                        'title' => 'Creative Design',
                        'subtitle' => 'Photography',
                        'category' => '["photography"]',
                        'size-class' => ' gallery__item-wrapper--square',
                        'image-name' => 'port6-min.jpg',
                        'image-alt' => 'Creative Design',
                    ],
                    [
                        'title' => 'Cesis Fashion',
                        'subtitle' => 'Interaction',
                        'category' => '["interaction"]',
                        'size-class' => ' gallery__item-wrapper--square',
                        'image-name' => 'port7-min.jpg',
                        'image-alt' => 'Cesis Fashion',
                    ],
                    [
                        'title' => 'Crazy Fashion',
                        'subtitle' => 'Photography',
                        'category' => '["photography"]',
                        'size-class' => '',
                        'image-name' => 'port8-min.jpg',
                        'image-alt' => 'Crazy Fashion',
                    ],
                    [
                        'title' => 'Extended Project',
                        'subtitle' => 'Branding',
                        'category' => '["branding"]',
                        'size-class' => '',
                        'image-name' => 'port9-min.jpg',
                        'image-alt' => 'Extended Project',
                    ],
                ];
            ?>
            <?php foreach ($galleryItems as $item) { ?>
                <div
                    class="gallery__item-wrapper<?= $item['size-class'] ?> j-gallery-item"
                    data-groups='<?= $item['category'] ?>'
                >
                    <a
                        href="#!"
                        class="gallery__item"
                    >
                        <span class="gallery__item-inner fadeInUp animated wow">
                            <img
                                src="assets/images/gallery/<?= $item['image-name'] ?>"
                                alt="<?= $item['image-alt'] ?>"
                                class="gallery__item-image"
                            >
                        </span>
                        <span class="gallery__item-info">
                            <h4 class="gallery__item-title"><?= $item['title'] ?></h4>
                            <span class="gallery__item-subtitle"><?= $item['subtitle'] ?></span>
                        </span>
                    </a>
                </div>
            <?php } ?>
            <div class="gallery__item gallery__sizer j-gallery-sizer"></div>
        </div>
    </div>
    <div
        class="plans"
        data-parallax="scroll"
        data-image-src="/assets/images/pricetable-min.jpg"
    >
        <div class="plans__container">
            <h4 class="g-title g-title--white plans__title">
                Select your plans
            </h4>
            <span class="g-subtitle g-subtitle--white plans__subtitle">
                Who could imagine it would be this easy to create a website
            </span>
            <div class="row">
                <div class="col-sm-4">
                    <a href="#!" class="plans__item">
                        <div class="plans__image-wrapper">
                            <img src="assets/images/1.png" alt="first plan">
                        </div>
                        <span class="plans__item-title">
                            Personal Project
                        </span>
                        <span class="plans__item-list">
                            Logo Design<br>
                            Brochure Template<br>
                            Web Design<br>
                            WordPress Development<br>
                            Behance Presentation<br>
                            Dribbble Shots<br>
                            2 Revisions<br>
                            Support via Email
                        </span>
                        <span href="#!" class="g-button plans__button">
                            From 199$
                            <span class="plans__button-decor"></span>
                        </span>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#!" class="plans__item">
                        <div class="plans__image-wrapper">
                            <img src="assets/images/2.png" alt="first plan">
                        </div>
                        <span class="plans__item-title">
                            Personal Project
                        </span>
                        <span class="plans__item-list">
                            Logo Design<br>
                            Brochure Template<br>
                            Web Design<br>
                            WordPress Development<br>
                            Behance Presentation<br>
                            Dribbble Shots<br>
                            2 Revisions<br>
                            Support via Email
                        </span>
                        <span href="#!" class="g-button plans__button">
                            From 199$
                            <span class="plans__button-decor"></span>
                        </span>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#!" class="plans__item">
                        <div class="plans__image-wrapper">
                            <img src="assets/images/3.png" alt="first plan">
                        </div>
                        <span class="plans__item-title">
                            Personal Project
                        </span>
                        <span class="plans__item-list">
                            Logo Design<br>
                            Brochure Template<br>
                            Web Design<br>
                            WordPress Development<br>
                            Behance Presentation<br>
                            Dribbble Shots<br>
                            2 Revisions<br>
                            Support via Email
                        </span>
                        <span href="#!" class="g-button plans__button">
                            From 199$
                            <span class="plans__button-decor"></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="transition">
        <div class="row">
            <div class="col-sm-6 transition__logo-wrapper">
                <img src="assets/images/biglog-min.jpg" alt="logo">
            </div>
            <div class="col-sm-6">
                <h4 class="transition__title">
                    Let's make<br>
                    something great<br>
                    together
                </h4>
            </div>
        </div>
    </div>
    <div class="slider">
        <div class="owl-carousel">
            <div class="slider__container slider__container--first"></div>
            <div class="slider__container slider__container--second"></div>
            <div class="slider__container slider__container--third"></div>
        </div>
    </div>
    <div class="g-container select j-select">
        <div class="row select__wrapper">
            <div class="col-sm-9">
                <div
                    class="select__item select__item--one j-select-item"
                    data-item="1"
                >
                    <p>
                        To make Cesis easy to use and user-friendly we made
                        sure that everything can be done directly live from
                        the front-end, you will be able to create and see the
                        result directly with infinite possibilities.
                    </p>
                    <p>
                        Cesis comes with tons of options, all the theme panel
                        options can be changed page by page if needed, change
                        menus, color, layout super easily without having to
                        code or modify anything.
                    </p>
                </div>
                <div
                    class="g-hidden select__item select__item--two j-select-item"
                    data-item="2"
                >
                    <p>
                        Our main goal with Cesis is to give the users
                        absolute control over their website, we want
                        them to be able to modify anything really easily
                        without having to spend hours to learn how to do it.
                    </p>
                    <p>
                        This theme is the best one to buy if you don’t know
                        anything about coding but still want to be able
                        to create awesome website. Using the front-end
                        editor to build live and easily, anyone can do it.
                    </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="select__buttons">
                    <button
                        type="button"
                        class="select__button select__button--active j-select-button"
                        data-item="1"
                    >
                        Our Goals
                    </button>
                    <button
                        type="button"
                        class="select__button j-select-button"
                        data-item="2"
                    >
                        Our Mission
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonials">
        <div class="testimonials__wrapper">
            <h2 class="testimonials__title">
                Testimonials
            </h2>
            <h4 class="testimonials__subtitle">
                Why Cesis is the best WordPress Theme to buy
            </h4>
            <div class="testimonials__carousel j-testimonials">
                <div class="testimonials__item">
                    <div class="testimonials__image">
                        <img
                            src="assets/images/cesis-team-member-1.jpg"
                            alt="Cesis member first some girl"
                            class="testimonials__image"
                        >
                    </div>
                    <div class="testimonials__description">
                        Really nice theme, and its so good to work with.
                        Also the customer support is very good and has
                        fast reply and the theme often get updates.
                    </div>
                    <div class="testimonials__editors">
                        <div class="testimonials__author">
                            May Reese
                        </div>
                        <div class="testimonials__info">
                            Themeforest Customer
                        </div>
                    </div>
                </div>
                <div class="testimonials__item">
                    <div class="testimonials__image">
                        <img
                            src="assets/images/cesis-team-member-2.jpg"
                            alt="Cesis member first some girl"
                            class="testimonials__image"
                        >
                    </div>
                    <div class="testimonials__description">
                        Really nice theme, and its so good to work with.
                        Also the customer support is very good and has
                        fast reply and the theme often get updates.
                    </div>
                    <div class="testimonials__editors">
                        <div class="testimonials__author">
                            May Reese
                        </div>
                        <div class="testimonials__info">
                            Themeforest Customer
                        </div>
                    </div>
                </div>
                <div class="testimonials__item">
                    <div class="testimonials__image">
                        <img
                            src="assets/images/cesis-team-member-3.jpg"
                            alt="Cesis member first some girl"
                            class="testimonials__image"
                        >
                    </div>
                    <div class="testimonials__description">
                        Really nice theme, and its so good to work with.
                        Also the customer support is very good and has
                        fast reply and the theme often get updates.
                    </div>
                    <div class="testimonials__editors">
                        <div class="testimonials__author">
                            May Reese
                        </div>
                        <div class="testimonials__info">
                            Themeforest Customer
                        </div>
                    </div>
                </div>
                <div class="testimonials__item">
                    <div class="testimonials__image">
                        <img
                            src="assets/images/cesis-team-member-1.jpg"
                            alt="Cesis member first some girl"
                            class="testimonials__image"
                        >
                    </div>
                    <div class="testimonials__description">
                        Really nice theme, and its so good to work with.
                        Also the customer support is very good and has
                        fast reply and the theme often get updates.
                    </div>
                    <div class="testimonials__editors">
                        <div class="testimonials__author">
                            May Reese
                        </div>
                        <div class="testimonials__info">
                            Themeforest Customer
                        </div>
                    </div>
                </div>
                <div class="testimonials__item">
                    <div class="testimonials__image">
                        <img
                            src="assets/images/cesis-team-member-2.jpg"
                            alt="Cesis member first some girl"
                            class="testimonials__image"
                        >
                    </div>
                    <div class="testimonials__description">
                        Really nice theme, and its so good to work with.
                        Also the customer support is very good and has
                        fast reply and the theme often get updates.
                    </div>
                    <div class="testimonials__editors">
                        <div class="testimonials__author">
                            May Reese
                        </div>
                        <div class="testimonials__info">
                            Themeforest Customer
                        </div>
                    </div>
                </div>
                <div class="testimonials__item">
                    <div class="testimonials__image">
                        <img
                            src="assets/images/cesis-team-member-3.jpg"
                            alt="Cesis member first some girl"
                            class="testimonials__image"
                        >
                    </div>
                    <div class="testimonials__description">
                        Really nice theme, and its so good to work with.
                        Also the customer support is very good and has
                        fast reply and the theme often get updates.
                    </div>
                    <div class="testimonials__editors">
                        <div class="testimonials__author">
                            May Reese
                        </div>
                        <div class="testimonials__info">
                            Themeforest Customer
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="g-container brands">
        <div class="brands__wrapper fadeInUp animated wow">
            <?php
                $brands = [
                    [
                        'image-name' => 'l10.png',
                        'image-alt' => 'Scandinavian fresh branding',
                        'link' => '#!',
                    ],
                    [
                        'image-name' => 'l9.png',
                        'image-alt' => 'Copenhagen clothing',
                        'link' => '#!',
                    ],
                    [
                        'image-name' => 'l8.png',
                        'image-alt' => 'The Scandinavian furniture',
                        'link' => '#!',
                    ],
                    [
                        'image-name' => 'l7.png',
                        'image-alt' => 'Helsinki shoestore',
                        'link' => '#!',
                    ],
                    [
                        'image-name' => 'l6.png',
                        'image-alt' => 'Eriksson',
                        'link' => '#!',
                    ],
                    [
                        'image-name' => 'l5.png',
                        'image-alt' => 'Helsinki new arrivals',
                        'link' => '#!',
                    ],
                    [
                        'image-name' => 'l4.png',
                        'image-alt' => 'Helsinki original',
                        'link' => '#!',
                    ],
                    [
                        'image-name' => 'l3.png',
                        'image-alt' => 'Goldengrid',
                        'link' => '#!',
                    ],
                    [
                        'image-name' => 'l2.png',
                        'image-alt' => 'Greensboro',
                        'link' => '#!',
                    ],
                    [
                        'image-name' => 'l1.png',
                        'image-alt' => 'Brooklyn handcrafted',
                        'link' => '#!',
                    ],
                ];
            ?>
            <?php foreach ($brands as $brand) { ?>
                <a href="<?= $brand['link'] ?>" class="brands__item-wrapper">
                    <img
                        src="assets/images/<?= $brand['image-name'] ?>"
                        alt="<?= $brand['image-alt'] ?>"
                        class="brands__item-image"
                    >
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="tiles">
        <div class="row tiles__wrapper">
            <?php
                $tiles = [
                    [
                        'image-name' => 'cesis-wordpress-theme_1.jpg',
                        'image-alt' => 'Customize everything with Cesis',
                        'title' => 'Customize everything with Cesis',
                        'date' => 'June 1, 2018',
                        'link' => '#!',
                    ],
                    [
                        'image-name' => 'cesis-wordpress-theme_2.jpg',
                        'image-alt' => 'Cesis for your next Project',
                        'title' => 'Cesis for your next Project',
                        'date' => 'June 1, 2018',
                        'link' => '#!',
                    ],
                    [
                        'image-name' => 'cesis-wordpress-theme_3.jpg',
                        'image-alt' => 'How to do good Meetings',
                        'title' => 'How to do good Meetings',
                        'date' => 'June 1, 2018',
                        'link' => '#!',
                    ],
                ];
            ?>
            <?php foreach ($tiles as $tile) { ?>
                <div class="col-sm-4 tiles__item-wrapper">
                    <img
                        src="assets/images/<?= $tile['image-name'] ?>"
                        alt="<?= $tile['image-alt'] ?>"
                        class="tiles__item-image"
                    >
                    <div class="tiles__item-info-wrapper">
                        <a href="#!" class="tiles__item-title">
                            <?= $tile['title'] ?>
                        </a>
                        <span class="tiles__item-date">
                            <?= $tile['date'] ?>
                        </span>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div
        class="slogan"
        data-parallax="scroll"
        data-image-src="/assets/images/slogan.jpg"
    >
        <div class="slogan__content">
            <h4 class="slogan__title">
                Let's make your<br>
                website great again
            </h4>
            <span class="slogan__subtitle">
                Who could imagine it would be this easy to create a website
            </span>
            <a href="#!" class="g-button">
                Get in touch
            </a>
        </div>
    </div>
    <footer class="footer">
        <div class="row">
            <div class="col-sm-8">
                <div class="footer__item-wrapper">
                    <img
                        src="assets/images/cesis-creative-footer-logo.png"
                        alt="Cesis creative"
                        class="footer__logo"
                    >
                    <span class="footer__copyright">
                        © 2015 - 2018 Tranmautritam Team. Cesis Creative demo for Cesis WordPress Theme.
                    </span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="footer__item-wrapper">
                    <span class="footer__contact">
                        Connect With Us
                    </span>
                    <div class="footer__social-wrapper fadeIn animated wow">
                        <a href="#!" class="footer__social-item">
                            <img
                                src="assets/images/behance.svg"
                                alt="facebook"
                                class="footer__social-image"
                            >
                        </a>
                        <a href="#!" class="footer__social-item">
                            <img
                                src="assets/images/dribbble.svg"
                                alt="facebook"
                                class="footer__social-image"
                            >
                        </a>
                        <a href="#!" class="footer__social-item">
                            <img
                                src="assets/images/google-plus.svg"
                                alt="facebook"
                                class="footer__social-image"
                            >
                        </a>
                        <a href="#!" class="footer__social-item">
                            <img
                                src="assets/images/twitter.svg"
                                alt="facebook"
                                class="footer__social-image"
                            >
                        </a>
                        <a href="#!" class="footer__social-item">
                            <img
                                src="assets/images/facebook.svg"
                                alt="facebook"
                                class="footer__social-image"
                            >
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <span class="footer__line"></span>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="libs/owlcarousel/owl.carousel.min.js"></script>
    <script src="libs/shuffle/shuffle.min.js"></script>
    <script src="libs/wowjs/wow.min.js"></script>
    <script src="libs/parallax/parallax.min.js"></script>
    <script src="libs/slick/slick.min.js"></script>
    <script>new WOW().init();</script>

    <script src="assets/global/js/utils.min.js"></script>
    <script src="assets/features/navbar/js/navbar.min.js"></script>
    <script src="assets/features/header/js/header.min.js"></script>
    <script src="assets/features/gallery/js/gallery.min.js"></script>
    <script src="assets/features/select/js/select.min.js"></script>
    <script src="assets/features/testimonials/js/testimonials.min.js"></script>
</body>
</html>
