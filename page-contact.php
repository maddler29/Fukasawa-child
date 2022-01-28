<!DOCTYPE html>
<html lang="ja">

<?php get_header(); ?>

<body class="is-ready is-load pace-done" id="m-top">
  <div class="l-container">
    <div class="l-container__inner">
      <div class="l-main">
        <div class="p-hero__inner">
          <?php get_sidebar(); ?>
        </div>
      </div>
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

      <?php get_footer(); ?>
      <?php wp_footer(); ?>
</body>

</html>