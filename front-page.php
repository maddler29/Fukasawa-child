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
                <img class="is-pc" src="<?php echo get_template_directory_uri(); ?>-child/assets/img/jayeblue_pc_top.png">
              </figure>
            </div>
          </div>
        </div>
      </div>
      <section class="l-section p-news js-scroll is-active">
        <h2 class="l-section__title p-news__title l-pc-inner l-sp-inner"><span>N</span><span>E</span><span>W</span><span>S</span></h2>
        <div class="l-section__inner p-news__inner l-pc-inner l-sp-inner">
          <div class="l-section__cont p-news__cont">
            <ul id="news_list" class="p-news__list">

              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                  <li class="p-news__list-item">
                    <div class="p-news__list-inner">
                      <p class="p-news__list-date"><?php the_date(); ?></p>
                      <p class="p-news__list-title"><?php the_title(); ?></p>
                      <p class="p-news__list-title"><?php the_content(); ?></p>
                    </div>
                  </li>
                <?php endwhile; ?>
              <?php endif; ?>

              <div class="p-news__more">
                <a class="p-news__more-link" href="<?php echo home_url('newslist'); ?>"><span>MORE</span></a>
              </div>
            </ul>
          </div>
        </div>
      </section>
      <section class="l-section p-movie js-scroll is-active">
        <h2 class="l-section__title p-movie__title l-pc-inner l-sp-inner"><span>M</span><span>O</span><span>V</span><span>I</span><span>E</span></h2>
        <div class="l-section__inner p-movie__inner l-pc-inner l-sp-inner">
          <div class="l-section__cont p-movie__cont">
            <div class="p-movie__slide">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div id="player1"></div>
                  </div>
                  <div class="swiper-slide">
                    <div id="player2"></div>
                  </div>
                  <div class="swiper-slide">
                    <div id="player3"></div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>

            </div>
          </div>
        </div>
      </section>
      <?php get_footer(); ?>

      <?php wp_footer(); ?>
</body>

</html>