<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- ファビコン -->
    <link rel="apple-touch-icon" href="favicon.png">
    <!-- Googleフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&family=Noto+Serif+JP:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@500&display=swap" rel="stylesheet">
    <!-- Adobeフォント -->
    <script>
        (function(d) {
            var config = {
                    kitId: 'vzl4lga',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <!-- CSS読み込み -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header header-sub">
        <div class="header__inner">
            <div class="header__nav">
                <div class="logo">
                    <div class="logo__item">
                        <a class="logo__link" href="<?php echo esc_url(home_url('//')); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header_logo.jpg" alt="" class="logo__img">
                        </a>
                    </div>
                </div>


                <div class="header__right">
                    <div class="btn btn__sub header__btn--leyout">
                        <a href="https://airrsv.net/white-belle/calendar">
                            <div class="btn__inner">
                                <div class="btn__box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail_white.png" alt="メールのロゴ">
                                    <p class="btn__text">ネット予約はこちら<span>＞</span></p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- ハンバーガーメニュー -->
                    <div class="header__menu">
                        <div class="js-cp-header03__hamburger-button header__hamburger-button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="js-cp-header03__hamburger-content header__hamburger-content">
                            <nav>
                                <ul class="header__hamburger-items">
                                    <li class="header__hamburger-item"><a href="<?php echo esc_url(home_url('//')); ?>">ホーム</a></li>
                                    <li class="header__hamburger-item"><a href="<?php echo esc_url(home_url('/beginner/')); ?>">はじめての方へ</a></li>
                                    <li class="header__hamburger-item"><a href="<?php echo esc_url(home_url('/self/')); ?>">セルフホワイトニング</a></li>
                                    <li class="header__hamburger-item"><a href="<?php echo esc_url(home_url('/winback/')); ?>">Winbackによるデンタルエステ</a></li>
                                    <li class="header__hamburger-item"><a href="<?php echo esc_url(home_url('/question/')); ?>">よくある質問</a></li>
                                    <li class="header__hamburger-item"><a href="<?php echo esc_url(home_url('/information/')); ?>">店舗情報</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- /ハンバーガーメニュー -->
                    </div>
                </div>
            </div>
        </div>
    </header>