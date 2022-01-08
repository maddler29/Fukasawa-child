<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>-child/default.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>-child/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>-child/common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>-child/top.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>-child/aip_responsive.css">

  <title>アンケートサイト</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <?php wp_head(); ?>
</head>

<body class="is-ready is-load pace-done" id="m-top">
  <div class="l-container">
    <div class="l-container__inner">
      <div class="l-main">
        <div class="p-hero__inner">
          <div class="p-hero__left is-pc">
            <div class="c-header is-pc">
              <header class="c-logo is-pc">
                <h1 class="c-logo is-pc">
                  <a class="c-logo__link" href="./">
                    <img src="<?php echo get_template_directory_uri(); ?>-child/assets/img/unnamed.jpg">
                  </a>
                </h1>
              </header>
              <nav class="c-pcNav is-pc">
                <ul class="c-pcNav__list">
                  <li class="c-pcNav__list-item">
                    <a class="c-pcNav__list-link" href="./news/"><span>お知らせ</span></a>
                  </li>
                  <li class="c-pcNav__list-item">
                    <a class="c-pcNav__list-link" href="./live/"><span>LIVE</span></a>
                  </li>
                  <li class="c-pcNav__list-item">
                    <a class="c-pcNav__list-link" href="./#profile"><span>PROFILE</span></a>
                  </li>
                  <li class="c-pcNav__list-item">
                    <a class="c-pcNav__list-link" href="./disco/"><span>DISCOGRAPHY</span></a>
                  </li>
                  <li class="c-pcNav__list-item">
                    <a class="c-pcNav__list-link" href="http://va.lnk.to/mX1S6N" target="_blank"><span>DOWNLOAD</span></a>
                  </li>
                  <li class="c-pcNav__list-item">
                    <a class="c-pcNav__list-link" href="http://va.lnk.to/mX1S6N" target="_blank"><span>STREAMING</span></a>
                  </li>
                  <li class="c-pcNav__list-item">
                    <a class="c-pcNav__list-link" href="./media/"><span>MEDIA</span></a>
                  </li>
                  <li class="c-pcNav__list-item">
                    <a class="c-pcNav__list-link" href="https://www.youtube.com/channel/UCBNVZPlWoR7oArfzJNrK9yw" target="_blank"><span>MOVIE</span></a>
                  </li>
                  <li class="c-pcNav__list-item">
                    <a class="c-pcNav__list-link" href="<?php echo get_template_directory_uri(); ?>-child/contact"><span>アンケート</span></a>
                  </li>
                  <li class="c-pcNav__list-item">
                    <a class="c-pcNav__list-link" href="#" target="_blank"><span>MEMBERS</span></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="p-hero__count">
            <div class="p-hero__center">
              <figure class="p-hero__mainVisual">
                <img class="is-pc" src="<?php echo get_template_directory_uri(); ?>-child/assets/img/jayeblue_pc_top.png">
              </figure>
            </div>
            <div class="p-hero__right is-pc">
              <ul class="c-pcSns is-pc">
                <li class="c-pcSns__item">
                  <a class="c-pcSns__link" href="https://www.instagram.com/p/CSazaV3MMqa/?utm_medium=copy_link" target="_blank"><span>
                      <img class="is-not-ie" src="<?php echo get_template_directory_uri(); ?>-child/assets/img/sns/icon_instagram_w.png" alt="Instagram">
                      <img class="is-ie" src="./assets/img/sns/icon_instagram.png" alt="Instagram">
                    </span></a>
                </li>
                <li class="c-pcSns__item">
                  <a class="c-pcSns__link" href="https://www.youtube.com/channel/UCUtG5J7RwFSw4DdTpE0p_6A/videos" target="_blank"><span>
                      <img class="is-not-ie" src="<?php echo get_template_directory_uri(); ?>-child/assets/img/sns/icon_youtube_w.png" alt="YouTube">
                      <img class="is-ie" src="./assets/img/sns/icon_youtube.png" alt="YouTube">
                    </span></a>
                </li>
                <li class="c-pcSns__item">
                  <a class="c-pcSns__link" href="https://twitter.com/yuuri_official" target="_blank"><span>
                      <img class="is-not-ie" src="<?php echo get_template_directory_uri(); ?>-child/assets/img/sns/icon_twitter_w.png" alt="Twitter">
                      <img class="is-ie" src="./assets/img/sns/icon_twitter.png" alt="Twitter">
                    </span></a>
                </li>
                <li class="c-pcSns__item">
                  <a class="c-pcSns__link" href="https://www.tiktok.com/@yuuri_music_official" target="_blank"><span>
                      <img class="is-not-ie" src="<?php echo get_template_directory_uri(); ?>-child/assets/img/sns/icon_tiktok_w.png" alt="TikTok">
                      <img class="is-ie" src="./assets/img/sns/icon_tiktok.png" alt="TikTok">
                    </span></a>
                </li>
              </ul>
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
                <a class="p-news__more-link" href="./news/"><span>MORE</span></a>
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
      <footer class="c-footer">
        <div class="c-footer__inner l-sp-inner">
          <div class="c-footer__wrap">
            <ul class="c-footer__sns">
              <li class="c-footer__sns-item u-hover-alpha">
                <a href="https://www.instagram.com/p/CSazaV3MMqa/?utm_medium=copy_link" target="_blank"><span><img src="<?php echo get_template_directory_uri(); ?>-child/assets/img/sns/icon_instagram_w.png" alt="Instagram"></span></a>
              </li>
              <li class="c-footer__sns-item u-hover-alpha">
                <a href="https://www.youtube.com/channel/UCUtG5J7RwFSw4DdTpE0p_6A/videos" target="_blank"><span><img src="<?php echo get_template_directory_uri(); ?>-child/assets/img/sns/icon_youtube_w.png" alt="YouTube"></span></a>
              </li>
              <li class="c-footer__sns-item u-hover-alpha">
                <a href="https://twitter.com/yuuri_official" target="_blank"><span><img src="<?php echo get_template_directory_uri(); ?>-child/assets/img/sns/icon_twitter_w.png" alt="Twitter"></span></a>
              </li>
              <li class="c-footer__sns-item u-hover-alpha">
                <a href="https://www.tiktok.com/@yuuri_music_official" target="_blank"><span><img src="<?php echo get_template_directory_uri(); ?>-child/assets/img/sns/icon_tiktok_w.png" alt="TikTok"></span></a>
              </li>
            </ul>
            <p class="c-footer__copy"><small>© Wordpress アンケート Inc.</small></p>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>-child/index.js"></script>

  <?php wp_footer(); ?>
</body>

</html>