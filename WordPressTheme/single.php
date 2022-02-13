<?php get_header('page'); ?>

<section class="single">
    <div class="single__inner">
        <time class="single__day"><?php the_time(); ?></time>
        <h1 class="single__title"><?php the_title(); ?></h1>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <div class="single__wrap">
                    <div class="single__content"><?php the_content(); ?></div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer('page'); ?>