<!DOCTYPE html>
<html lang="ja">

<?php get_header(); ?>

<body class="is-ready is-load pace-done" id="m-top">
  <div class="l-container">
    <div class="l-container__inner">
    <div class="l-main">
      <?php get_sidebar(); ?>

      <section class="contact l-in-section l-sp-inner">
        <div class="l-in-section__title">
          <h1><span>SURVEY</span></h1>
        </div>
        
        <?php echo do_shortcode('[contact-form-7 id="50" title="contactform_adv"]'); ?>
      </section>

      <?php get_footer(); ?>
      <?php wp_footer(); ?>
</body>

</html>