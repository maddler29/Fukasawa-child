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

  <title>アンケートサイト</title>

  <?php wp_head(); ?>
</head>

<body class="is-ready is-load pace-done" id="m-top">
  <div class="l-container">
    <div class="l-container__inner">
      <section class="contact l-in-section l-sp-inner">
        <div class="l-in-section__title">
          <h2><span>CONTACT</span></h2>
        </div>
        <div class="contents">
          <div class="p-contact__form">
            <form method="post" action="https://ssl.sme.co.jp/event/application/confirm" name="event_form" enctype="multipart/form-data">
              <input type="hidden" name="event_id" value="101884">
              <div class="p-contact__form-item">
                <p class="p-in-title">NAME</p>
                <div class="p-in-cont">
                  <input type="text" name="element_00029516" id="element01" value="" class="c-formItem elem_text" maxlength="255">
                </div>
              </div>
              <div class="p-contact__form-item">
                <p class="p-in-title">MAIL</p>
                <div class="p-in-cont">
                  <input type="email" name="element_00029515" id="element02" value="" class="elem_email">
                </div>
              </div>
              <div class="p-contact__form-item">
                <p class="p-in-title">TELL</p>
                <div class="p-in-cont">
                  <input type="text" name="element_00029517" id="element03" value="" class="c-formItem elem_text" maxlength="255">
                </div>
              </div>
              <div class="p-contact__form-item is-large">
                <p class="p-in-title">MESSAGE</p>
                <div class="p-in-cont">
                  <textarea name="element_00029518" id="element04" class="c-formItem c-formItem--textarea elem_area" rows="5"></textarea>
                </div>
              </div>
              <ul class="p-contact__form-btn">
                <li class="p-in-item"><input type="submit" value="送信する"></li>
                <li class="p-in-item"><input type="reset" value="クリア"></li>
              </ul>
            </form>
          </div>
        </div>
      </section>

      <!-- 共通footer -->
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


  <?php wp_footer(); ?>
</body>

</html>