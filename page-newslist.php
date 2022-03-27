<!DOCTYPE html>
<html lang="ja">

<?php get_header(); ?>

<body class="is-ready is-load pace-done" id="m-top">
  <div class="l-container">
    <div class="l-container__inner">
      <div class="l-main">
        <div class="p-hero__inner">
          <?php get_sidebar(); ?>
          <div class="p-hero__count">
             <div class="p-hero__center">
                <figure class="p-hero__mainVisual">
                   <img class="is-pc" src="<?php echo get_template_directory_uri(); ?>-child/assets/img/jayeblue_pc.png">
                 </figure>
             </div>
            </div>
          </div>
        </div>
      </div> 
      <section class="contact l-in-section l-sp-inner">
        <div class="l-in-section__title">
          <h1><span>NEWSLIST</span></h1>
        </div>
          <?php
            global $post;
            $args = array( 'posts_per_page' => 8 );
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) {
              setup_postdata($post);
          ?>
          
            <div class="newslist">
            <div class="img">
                <?php the_post_thumbnail('index_thumbnail'); ?>
            </div>
            <div class="title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="time">
                <?php the_time('Y.m.d') ?>    
            </div>
            <!--<div class="category">
               <?php #the_category(',') ?>
            </div>-->
            </div>
         
          <?php
          }
          wp_reset_postdata();
          ?>
        <div>
        </section> 
      <?php get_footer(); ?>
      <?php wp_footer(); ?>
</body>

</html>