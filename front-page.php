<?= get_header(); ?>

<main>

<?php
    $categories = get_the_category();
    $wb_query = new WP_Query(array(
        'posts_per_page'=> 4
    ));
?>

<section class="last_posts">
    <div class="container">
        <div class="posts">
        <?php while($wb_query->have_posts()): ?>
        <?php $wb_query->the_post(); ?>
            <article <?php post_class(); ?> >
            <?php if(has_post_thumbnail()): ?>
              <a href="<?= the_permalink(); ?>" aria-label="<?= get_the_title(); ?>">
                <?php 
                $title = get_the_title();
                the_post_thumbnail('large', array('class'=>'post_thumb', "alt" => $title, "aria-label" => $title));?>
              </a>
              <?php else: ?>
                <a href="<?= the_permalink(); ?>" aria-label="<?= get_the_title(); ?>">
                    <img width="100%" src="<?= get_template_directory_uri()?>/assets/images/placeholder.jpg" alt="<?= get_the_title(); ?>" class="post_thumb_placeholder" />
                </a>
            <?php endif ?>  
                <div class="last_posts-text">
                    <?= the_category();?>
                    <a href="<?php the_permalink(); ?>" class="title" aria-label="<?= get_the_title(); ?>"><?= get_the_title(); ?></a>
                    <p class="tbody14 time"><?= get_the_date(); ?></p>
                </div>
            </article>
        <?php endwhile; ?>
        </div>
    </div>
</section>



</main>


<?= get_footer();?>