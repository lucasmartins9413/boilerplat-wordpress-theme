<?= get_header(); ?>

<?php
    get_template_part('templates/pages/breadcrumb');
?>

<main class="single_post-page">

    
    <div class="container">
        <div class="content_single">
            <div class="content_post">
                <?= the_content();?>
            </div>
        </div>
    </div>


    <section class="related_posts">
        <div class="container">
            <h3>Leia mais:</h3>
        </div>
        <div class="container content">
        <?php
          $categories = get_the_category();
          $bp_query = new WP_Query(array(
            'posts_per_page'=> 4,
            'post__not_in'=> array( $post->ID),
            'cat'=> $categories[0]->term_id
          ));
          if($bp_query->have_posts()){
            while($bp_query->have_posts()){
              $bp_query->the_post();
              get_template_part('templates/posts/related-posts');  
            }
          }
          wp_reset_postdata();
        ?>            
        </div>
    </section>
</main>



<?= get_footer();?>