<?php get_header(); ?>

<section class="mv-top mv-top__sub">
    <div class="mv__inner">
        <div class="mv__title-box">
            <h1 class="mv__title">口元から綺麗に、健康に</h1>
            <h2 class="mv__sub-title">自信はいつも口元から</h2>
        </div>
    </div>
</section>

<section class="measures measures-sub">
    <div class="measures__inner">
        <div class="measures__wrap">
            <h3 class="measures__title">感染・拡散防止対策のもと営業しております</h3>
            <div class="measures__wrap-inner">
                <p class="measures__text">当店は、新型コロナウイルス感染拡大に伴い、お客様とスタッフの安全を最優先に、様々な感染対策を行っております。</p>
                <div class="measures__container">
                    <div class="measures__picture-box">
                        <div class="measures__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_icon01.png" alt="スタッフのマスク着用">
                        </div>
                        <p class="measures__picture-text">スタッフのマスク着用</p>
                    </div>

                    <div class="measures__picture-box">
                        <div class="measures__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_icon02.png" alt="手指消毒の徹底">
                        </div>
                        <p class="measures__picture-text">手指消毒の徹底</p>
                    </div>

                    <div class="measures__picture-box">
                        <div class="measures__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_icon03.png" alt="椅子/テーブルの消毒">
                        </div>
                        <p class="measures__picture-text">椅子/テーブルの消毒</p>
                    </div>

                    <div class="measures__picture-box">
                        <div class="measures__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_icon04.png" alt="室内の換気">
                        </div>
                        <p class="measures__picture-text">室内の換気</p>
                    </div>

                    <div class="measures__picture-box">
                        <div class="measures__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_icon05.png" alt="お客様の検温">
                        </div>
                        <p class="measures__picture-text">お客様の検温</p>
                    </div>

                    <div class="measures__picture-box">
                        <div class="measures__picture">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_icon06.png" alt="施術中の手袋着用">
                        </div>
                        <p class="measures__picture-text">施術中の手袋着用</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="greeting greeting-sub">
    <div class="greeting_inner">
        <div class="greeting__wrap">
            <h3 class="greeting__title ttl">ごあいさつ</h3>
            <p class="greeting__text">
                はじめまして。ホワイトニングサロンベルのオーナーの金丸ひろこです。<br>
                私はこれまで歯科衛生士として、歯科医院に勤めていました。今まで、「歯医者さんって痛い、怖いところ」<br>
                というイメージを持たれている患者様にたくさん出会いました。<br>
                でも、しっかり予防をすれば嫌な思いをせずに、お口は健康に、綺麗に保つことができます。<br>
                このサロンをオープンすることになったのは<br>
                「歯の予防の大切さを伝えたい、もっとたくさんの方に歯に関心を持ってもらいたい」という思いからです。<br>
                まずは「歯を白く綺麗にする」ホワイトニングから、お口への関心を高め、<br>
                予防の大切さを皆様に伝えられる場所にしたいと思っています。<br>
                お口のプロである歯科衛生士の知識を持った私が、毎日の歯のケアのコツや、<br>
                使用する歯ブラシや歯磨き粉の選び方などのアドバイスもします！<br>
                皆様、どうぞお気軽に、ホワイトニングサロン　ベルにお越し下さいませ。
            </p>
            <p class="greeting__name">オーナー　金丸 ひろこ</p>
        </div>
    </div>
</section>

<section class="news">
    <div class="news__inner">
        <div class="news__wrap">
            <h3 class="news__title">最新情報</h3>
            <div class="news__container">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>
                        <a href="<?php the_permalink() ?>">
                            <ul class="news__content">
                                <li class="news__day"><?php the_time(); ?></li>
                                <li class="news__category"><?php $cat = get_the_category();
                                                            $cat = $cat[0]; {
                                                                echo $cat->cat_name;
                                                            } ?></li>
                                <li class="news__heading"><?php the_title(); ?></li>
                            </ul>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="news__btn-box">
                <a href="<?php echo esc_url(home_url('/news/')); ?>" class="b-btn news__btn news__btn--color">
                    <p class="b-btn__text news__text--color">記事一覧を見る<span>＞</span></p>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="opinion">
    <div class="opinion__inner">
        <div class="opinion__wrap">
            <div class="opinion__card">
                <div class="opinion__picture">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/girl.png" alt="女性">
                </div>
                <h4 class="opinion__title">歯科衛生士が運営する<br>ホワイトニングサロン</h4>
                <p class="opinion__text">現役の歯科衛生士がオーナーを勤めるサロンのため、歯科全般に関する専門的なアドバイスが可能です。</p>
            </div>

            <div class="opinion__card">
                <div class="opinion__picture">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/boys.png" alt="男性">
                </div>
                <h4 class="opinion__title">歯科クリニックとの連携<br>&nbsp;</h4>
                <p class="opinion__text">隣接する「かなまる歯科クリニック」との連携により、歯科に関するお悩み事に
                    お応えいたします。</p>
            </div>

            <div class="opinion__card">
                <div class="opinion__picture">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/child.png" alt="子供">
                </div>
                <h4 class="opinion__title">大人から子供まで<br>ご利用いただけます</h4>
                <p class="opinion__text">美容室に行く感覚で、気軽にご利用いただけます。お子様から大人まで、プロが
                    お口のアドバイスをいたします。<br>
                    ※12歳以上の方が施術の対応になります</p>
            </div>
        </div>
    </div>
</section>

<section class="flow flow-sub">
    <div class="flow__inner">
        <div class="flow__wrap">
            <h3 class="flow__title ttl">セルフホワイトニングから、デンタルエステまで</h3>
            <p class="flow__text">
                ホワイトニングサロンベルは最新マシンを利用したセルフホワイトニングをはじめ、<br class="flow__br">
                肩凝りや顎関節症といった歯の関係する症状の解消までお手伝いするサロンです。<br>
                現役の歯科衛生士がオーナーを勤めるホワイトニングサロンとして、<br class="flow__br">
                皆様のお口の健康をサポートいたします。
            </p>
            <div class="flow__btn-box">
                <a href="<?php echo esc_url(home_url('/information/')); ?>" class="b-btn flow__btn flow__btn--color">
                    <p class="b-btn__text flow__text--color">当サロンについて<span>＞</span></p>
                </a>
            </div>

            <div class="flow__move-box">
                <video src="<?php echo get_template_directory_uri(); ?>/assets/move/move.mp4" controls></video>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="content__inner">
        <div class="content__wrap">
            <div class="content__box">
                <h4 class="content__title">ホワイトニング</h4>
                <p class="content__text">当サロンのホワイトニングの特徴をご紹介します。<br>料金・施術の流れもご説明いたします。</p>
                <div class="content__btn-box">
                    <a href="<?php echo home_url('/self/'); ?>" class="b-btn content__btn content__btn--color">
                        <p class="b-btn__text content__text--color">料金・施術について<span>＞</span></p>
                    </a>
                </div>
            </div>

            <div class="content__box content_back02">
                <h4 class="content__title">デンタルエステについて</h4>
                <p class="content__text">
                    最新マシンの「Wimback」を使用し、お顔周りの表情筋や咬筋などをほぐし、ほうれい線やたるみの解消を行い、口腔周囲機能の改善を目指します。<br>
                    顎関節症や顎の痛みでお悩みの方にもおすすめです。
                </p>
                <div class="content__btn-box">
                    <a href="<?php echo home_url('/winback/'); ?>" class="b-btn content__btn content__btn--color">
                        <p class="b-btn__text content__text--color">Wimbackについて<span>＞</span></p>
                    </a>
                </div>
            </div>

            <div class="content__box content_back03">
                <h4 class="content__title">サロン紹介</h4>
                <p class="content__text">
                    当サロンのについて紹介をいたします。
                </p>
                <div class="content__btn-box">
                    <a href="<?php echo home_url('/information/'); ?>" class="b-btn content__btn content__btn--color">
                        <p class="b-btn__text content__text--color">ホワイトニングサロンベルについて<span>＞</span></p>
                    </a>
                </div>
            </div>

            <div class="content__box content_back04">
                <h4 class="content__title">よくある質問</h4>
                <p class="content__text">
                    お客様からよくいただく質問をご紹介いたします。
                </p>
                <div class="content__btn-box">
                    <a href="<?php echo home_url('/question/'); ?>" class="b-btn content__btn content__btn--color">
                        <p class="b-btn__text content__text--color">Q & Aを見る<span>＞</span></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>