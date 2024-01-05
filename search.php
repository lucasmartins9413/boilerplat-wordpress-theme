<?= get_header(); ?>

<main class="category_single">
    <div class="title_post">
        <div class="container">
            <h1><?= single_cat_title(); ?></h1>
        </div>
    </div>   

    <div class="container">
        <div class="category_content">

            <div class="category_posts">

            <?php if(have_posts()): ?>
            <?php while(have_posts()): ?>
            <?php the_post(); ?>

                <div class="card_post-single">
                    <figure>
                    <?php if(has_post_thumbnail()): ?>
                        <a href="<?= the_permalink(); ?>">
                        <?= the_post_thumbnail('large', array('class'=>'post_thumb'));?>
                        </a>
                        <?php else: ?>
                    <a href="<?= the_permalink(); ?>" aria-label="<?= get_the_title(); ?>">
                        <img width="100%" src="<?= get_template_directory_uri()?>/assets/images/placeholder.jpg" alt="<?= get_the_title(); ?>" class="post_thumb_placeholder" />
                    </a>
                    <?php endif ?>  
                    </figure>
                    <div class="card_post-text">
                        <?= the_category();?>
                        <a href="<?php the_permalink(); ?>"><h4><?= wp_trim_words(get_the_title(), 8, '...'); ?></h4></a>
                        <p class="excerpt tbody16"><?= wp_trim_words(get_the_excerpt(), 20, '...');?></p>
                        <p class="time-read tbody12">10 min leitura</p>
                    </div>
                </div>


            <?php endwhile; ?>
            <?php endif; ?>


            </div>
        </div>

    </div>
</main>



<?= get_footer();?>