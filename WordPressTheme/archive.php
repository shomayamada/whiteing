<?php get_header('page'); ?>

<section class="information-mv information-sub mv-underlayer">
    <div class="mv-underlayer__inner">
        <h1 class="mv-underlayer__title">記事一覧</h1>
    </div>
</section>


<section class="archive-list">
    <div class="archive-list__inner">
        <div class="archive-list__container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <a href="<?php the_permalink() ?>">
                        <div class="news__content">
                            <div class="news__day"><?php the_time(); ?></div>
                            <div class="news__category"><?php $cat = get_the_category();
                                                        $cat = $cat[0]; {
                                                            echo $cat->cat_name;
                                                        } ?></div>
                            <h1 class="news__heading"><?php the_title(); ?></h1>
                        </div>
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="pagination__warp">
            <?php wp_pagenavi(); ?>
        </div>

    </div>
</section>

<?php get_footer('page'); ?>