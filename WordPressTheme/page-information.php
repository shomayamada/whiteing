<?php get_header(); ?>

<section class="information-mv information-sub mv-underlayer">
    <div class="mv-underlayer__inner">
        <h1 class="mv-underlayer__title">店舗情報</h1>
    </div>
</section>

<section class="staf">
    <div class="staf__inner">
        <div class="staf__title-logo title-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staf_logo.png" alt="料金表">
        </div>
        <h3 class="person__title ttl">スタッフ紹介</h3>
        <div class="staf__wrap">
            <div class="staf__container">
                <div class="staf__picture">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/staf01.jpg" alt="女性画像">
                </div>
                <div class="staf__text-box">
                    <p class="staf__position">オーナー</p>
                    <p class="staf__name">金丸 ひろ子<span>かなまる ひろこ</span></p>
                    <div class="staf__career-box">
                        <p class="staf__caree">経歴</p>
                        <ul class="staf__content">
                            <li>歯科衛生士　免許　取得</li>
                            <li>かなまる歯科クリニック　歯科衛生士</li>
                            <li>Whitening salon Belle オーナー</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="facility">
    <div class="facility__inner">
        <div class="facility__title-logo title-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility-logo.png" alt="ロゴ">
        </div>
        <h3 class="facility__title ttl">設備紹介</h3>
        <div class="facility__wrap cards">
            <div class="cards__item card">
                <div class="card__box">
                    <div class="card__picture">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility01.jpg" alt="設備">
                    </div>
                    <div class="card__text-box">
                        <h4 class="card__title">受付</h4>
                        <div class="card__text">明るい笑顔で皆様をお迎えし、親切・丁寧な対応を心がけています。</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="company">
    <div class="company__inner">
        <div class="company__title-logo title-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility-logo.png" alt="ロゴ">
        </div>
        <h3 class="company__title ttl">アクセス</h3>
        <div class="company__wrap">
            <table class="company__table">
                <tr class="company__tr">
                    <td class="company__td">店舗名</td>
                    <th class="company__th">ホワイトニングサロン ベル</th>
                </tr>
                <tr class="company__tr">
                    <td align="left" valign="top" class="company__td">所在地</td>
                    <th class="company__th">〒800-0229　福岡県北九州市小倉南区曽根北町6-13<br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3314.1548126201997!2d130.94013731520945!3d33.83411798066579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3543c01413250793%3A0x400d154ffb697f89!2z44CSODAwLTAyMjkg56aP5bKh55yM5YyX5Lmd5bee5biC5bCP5YCJ5Y2X5Yy65pu95qC55YyX55S677yW4oiS77yR77yT!5e0!3m2!1sja!2sjp!4v1644138291077!5m2!1sja!2sjp" width="90%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" class="company__map"></iframe>
                    </th>
                </tr>
                <tr class="company__tr">
                    <td class="company__td">電話番号</td>
                    <th class="company__th">093-967-3986</th>
                </tr>
                <tr class="company__tr">
                    <td class="company__td">駐車場</td>
                    <th class="company__th">7台駐車可能場所完備</th>
                </tr>
                <tr align="left" valign="top" class="company__tr">
                    <td class="company__td">営業時間</td>
                    <th class="company__th">月・火・木・金・・・10:00-16-00<br>
                        水　　　　　　・・・14:00-16:00<br>
                        土　　　　　　・・・10:00-13:00（隔週）<br>
                        日・祝　　　　・・・定休日（不定休）</th>
                </tr>
            </table>
        </div>
    </div>
</section>

<?php get_footer(); ?>