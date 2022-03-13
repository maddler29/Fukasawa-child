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
      <section class="l-section p-news js-scroll is-active">
        <h2 class="l-section__title p-news__title l-pc-inner l-sp-inner"><span>P</span><span>R</span><span>O</span><span>F</span><span>I</span><span>L</span><span>E</span></h2>
      </section>
      <?php get_footer(); ?>
      <?php wp_footer(); ?>
</body>

</html>