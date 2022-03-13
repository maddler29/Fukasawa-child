<!DOCTYPE html>
<html lang="ja">
    <?php require('./index.html'); ?>
    <link rel="stylesheet" href="style_2.css">
    <head>
        <script>
            //material contact form animation
            $('.contact-form').find('.form-control').each(function() {
            var targetItem = $(this).parent();
            if ($(this).val()) {
                $(targetItem).find('label').css({
                'top': '10px',
                'fontSize': '14px'
                });
            }
            })
            $('.contact-form').find('.form-control').focus(function() {
            $(this).parent('.input-block').addClass('focus');
            $(this).parent().find('label').animate({
                'top': '10px',
                'fontSize': '14px'
            }, 300);
            })
            $('.contact-form').find('.form-control').blur(function() {
            if ($(this).val().length == 0) {
                $(this).parent('.input-block').removeClass('focus');
                $(this).parent().find('label').animate({
                'top': '25px',
                'fontSize': '18px'
                }, 300);
            }
            })
        </script>
        <meta charset="UTF-8">
        <title>Jayeblue</title>

    </head>
    <body>
    <div class="container">
        <div class="row ">
        <div class="col-md-6">
            <div id="cl" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators " style="width: max-content;">
                <li data-target="#cl" data-slide-to="0" class="active"></li>
                <li data-target="#cl" data-slide-to="1"></li>
                <li data-target="#cl" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active"><img src="eliza.png" class="d-block w-100"></div>
                <div class="carousel-caption">
                    <h3>jayeblue</h3>
                </div>
                <div class="carousel-item"><img src="onelife.png" class="d-block w-100"></div>
                <div class="carousel-item"><img src="onelife02.png" class="d-block w-100"></div>
            </div>
            <a class="carousel-control-prev" href="#cl" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#cl" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
            </div>
        </div>
        <div class="col-md-6">
        <ul class="snsbtniti">
        <li><a href="TwitterのプロフィールURL" class="flowbtn10"><i class="fab fa-twitter"></i></a></li>
        <li><a href="インスタのプロフィールURL" class="flowbtn10"><i class="fab fa-instagram"></i></a></li>
        <li><a href="youtubeのプロフィールURL" class="flowbtn10"><i class="fab fa-youtube"></i></a>
        </ul>
        <main>
            <h2>signup</h2>
            <small>登録＆アンケート入力</small>
            <section class="contact-wrap">
                <form method="post" class="contact-form">
                    <div class="col-sm-8">
                      <div class="input-block">
                        <label for="">First Name</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-8">
                      <div class="input-block">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-block">
                            <label for="">Email</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                            <button class="square-button">Send</button>
                    </div>
                </form>
            </section>
                <!-- follow me template -->
            <div class="made-with-love">
            Made with 
            <i>♥</i>
        </main>
        </div>
        </div>
    </div>
    
    </body>
    
</html>