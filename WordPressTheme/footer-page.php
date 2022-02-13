<footer class="footer">
    <div class="footer__inner">
        <h3 class="footer__title ttl">WEB予約受付中</h3>
        <div class="footer__btn-box">
            <div class="b-btn footer__mail-btn">
                <a href="https://airrsv.net/white-belle/calendar">
                    <div class="footer__beauty-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Beauty.png" alt="ホットペッパービューティー">
                    </div>
                    <p class="b-btn__text footer__btn-text">24時間ネット予約</p>
                </a>
            </div>

            <div class="footer__tell-box">
                <p class="footer__tell-text">お急ぎの方、当日予約のお客様は直接お電話ください</p>
                <div class="b-btn footer__tell-btn">
                    <a href="tel:0939673986">
                        <div class="footer__tell-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tell-orage_icon.png" alt="メールアイコン">
                        </div>
                        <p class="b-btn__text footer__btn-text">093-967-3986</p>
                    </a>
                </div>
            </div>
        </div>
        <p class="footer__comment">当店は、隣接する<a href="https://www.kanamaru-dc.jp/">かなまる歯科クリニック</a>と連携をしています。</p>
        <div class="footer__box">
            <div class="footer__box-inner">
                <div class="footer__wrap">
                    <div class="footer_logo">
                        <p class="footer__logo-item"><a href="<?php echo esc_url(home_url('//')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/header_logo.jpg" alt="ロゴ"></a></p>
                    </div>
                    <ul class="footer__menu">
                        <li class="footer__menu-item"><a href="<?php echo esc_url(home_url('//')); ?>">ホーム</a></li>
                        <li class="footer__menu-item"><a href="<?php echo esc_url(home_url('/beginner/')); ?>">はじめての方へ</a></li>
                        <li class="footer__menu-item"><a href="<?php echo esc_url(home_url('/self/')); ?>">セルフホワイトニング</a></li>
                        <li class="footer__menu-item"><a href="<?php echo esc_url(home_url('/winback/')); ?>">肩凝り・顎関節症</a></li>
                        <li class="footer__menu-item"><a href="<?php echo esc_url(home_url('/question/')); ?>">よくある質問</a></li>
                        <li class="footer__menu-item"><a href="<?php echo esc_url(home_url('/information/')); ?>">店舗情報</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.js"></script>
<?php wp_footer(); ?>
</body>

</html>