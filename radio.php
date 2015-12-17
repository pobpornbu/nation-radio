<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Nation Radio</title>
  <?php include('partial/head.php'); ?>
</head>
<body id="nation-radio-theme" class="nav-on-left">
  <div id="nation-nav-theme">

    <?php include('partial/header.php'); ?>

    <main class="cd-main-content main__container live">
      <!-- your content here -->
      <div class="layout__container">
        <?php include('partial/breakingnews.php'); ?>

          <div class="row">
            <div class="col-sm-8 col-sm-push-4 radioplayer__container text-center">
              <div><img src="images/onair.png" alt="Now On air logo" class="radio__logo"></div>
              <div><img src="images/equalizer-web.gif" alt="radio equalizer" class="radio__img"></div>
              <main class="radioplayer__wrap clearfix">
                <div>
                  <p class="radio__text"><time datetime="2015-06-10 8:00-9:30">08:00 - 09:30</time> เก็บตกจากเนชั่น</p>
                  <button class="button --icon --play --expand center-block js-btn-radio">FM 90.5 <span class="hidden-sm">MHz</span></button>
                  <!-- <button class="button --icon --play --expand fa-play-circle js-play" onclick="play()">FM 90.5 <span class="hidden-sm">MHz</span></button> -->
                </div>
                <div>
                  <p class="radio__text">------------------------</p>
                  <button class="button --icon --play --expand center-block js-btn-radio">FM 102 <span class="hidden-sm">MHz</span></button>
                </div>
                <div id="audio"></div>
              </main>
            </div>

            <section class="col-sm-4 col-sm-pull-8 radio__container">
              <header class="radio__header clearfix">
                <hgroup class="radio__head"><h1 class="radio__h1">Nation Digital</h1><h2 class="radio__h2">live broadcast</h2></hgroup>
              </header>
                <section class="prevclip__container">
                  <h2 class="prevclip__head">ฟังรายการย้อนหลัง</h2>
                  <ul id="previous-clip" class="prevclip__wrap">
                    <li class="prevclip__item prevclip__item--1 active">
                      <i class="prevclip__icon fa fa-play-circle"></i><a href="archive.php" class="prevclip__text">Ipsum</a></li>
                    <li class="prevclip__item prevclip__item--2">
                      <i class="prevclip__icon fa fa-play-circle"></i><a href="archive.php" class="prevclip__text">Loremsum</a></li>
                    <li class="prevclip__item prevclip__item--3">
                      <i class="prevclip__icon fa fa-play-circle"></i><a href="archive.php" class="prevclip__text">dolor sit amet</a></li>
                    <li class="prevclip__item prevclip__item--4">
                      <i class="prevclip__icon fa fa-play-circle"></i><a href="archive.php" class="prevclip__text">consectetur</a></li>
                    <li class="prevclip__item prevclip__item--5">
                      <i class="prevclip__icon fa fa-play-circle"></i><a href="archive.php" class="prevclip__text">adipisicing elit</a></li>
                    <li class="prevclip__item prevclip__item--6">
                      <i class="prevclip__icon fa fa-play-circle"></i><a href="archive.php" class="prevclip__text">Culpa aspernatur</a></li>
                    <li class="prevclip__item prevclip__item--7">
                      <i class="prevclip__icon fa fa-play-circle"></i><a href="archive.php" class="prevclip__text">aut harum</a></li>
                    <li class="prevclip__item prevclip__item--8">
                      <i class="prevclip__icon fa fa-play-circle"></i><a href="archive.php" class="prevclip__text">id porro natus ea</a></li>
                    <li class="prevclip__item active">
                      <i class="prevclip__icon fa fa-play-circle"></i><a href="archive.php" class="prevclip__text">Ipsum</a></li>
                    <li class="prevclip__item">
                      <i class="prevclip__icon fa fa-play-circle"></i><a href="archive.php" class="prevclip__text">Loremsum</a></li>
                    <li class="prevclip__item">
                      <i class="prevclip__icon fa fa-play-circle"></i><a href="archive.php" class="prevclip__text">dolor sit amet</a></li>
                  </ul>
                </section>
            </section>

          </div>

        <?php include("partial/social.php"); ?>

      </div>
      <?php include("partial/footer.php"); ?>
    </main>

    <div class="cd-overlay"></div>

    <?php include("partial/menu.php"); ?>

  </div>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <?php include("partial/script.php"); ?>

</body>
</html>