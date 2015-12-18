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

    <main class="cd-main-content main__container activity">
      <!-- your content here -->
      <div class="layout__container">
        <?php include('partial/breakingnews.php'); ?>

        <div class="row">
          <?php include('partial/radiopanel.php'); ?>

          <div class="col-sm-8 hilight__container --lastestnews">
            <article class="static-section i-contact hilight__section section-max-xs">
              <section class="gap-inner-bottom">
                        <h2 class="head --section border-section">ติดต่อเรา</h2>
                        <div class="gap-inner-bottom">
                          <h3 class="head --topic">วิทยุเนชั่น</h3>
                          <address class="head --static">1858/51-62 อาคารอินเตอร์ลิงก์ ชั้น 12 แขวงบางนา เขตบางนา กรุงเทพมหานคร 10260</address>
                      </div>
                        <div class="gap-md-bottom">
                          <h3 class="head --topic">หมายเลขโทรศัพท์ :</h3>
                          <p class="head --static gap-sm-bottom">ฝ่ายข่าว/รายการ 02-338-3613,02-338-3894</p>
                          <p class="head --static">ฝ่ายขายโฆษณา 02-338-3614,02-338-3617</p>
                      </div>
                        <div class="gap-inner-bottom">
                          <div>
                            <strong class="head --static gap-sm-bottom">e-mail:</strong>
                            <a href="mailto:radio@nationgroup.com" class="head --topic">radio@nationgroup.com</a>
                          </div>
                          <div>
                            <strong class="head --static gap-sm-bottom">twitter:</strong>
                            <a href="http://www.twitter.com/NTRadio_NBC" class="head --topic" target="_blank" rel="nofollow">www.twitter.com/NTRadio_NBC </a>
                          </div>
                          <div>
                            <strong class="head --static gap-sm-bottom">facebook:</strong>
                            <a href="http://www.facebook.com/radio.nbc" class="head --topic" target="_blank" rel="nofollow">www.facebook.com/radio.nbc</a>
                          </div>
                      </div>
                        <h3 class="head --topic">แบบสำรวจความคิดเห็น</h3>
                <form id="contactForm">
                  <fieldset class="form-group">
                    <div class="label-wrap">
                      <label for="name" class="head --static">ชื่อ</label>
                    </div>
                    <div class="input-wrap">
                    <div class="validate__container">
                        <input id="name" type="text" class="input input__text --primary" name="name" required/>
                    </div>
                  </div>
                  </fieldset>
                  <fieldset class="form-group">
                    <div class="label-wrap">
                      <label for="email" class="head --static">อีเมล์</label>
                    </div>
                    <div class="input-wrap">
                        <input id="email" type="email" class="input input__text --primary" name="email" required/>
                    </div>
                  </fieldset>
                  <fieldset class="form-group">
                    <div class="label-wrap">
                      <label for="channel" class="head --static">ชื่อรายการ</label>
                    </div>
                    <div class="input-wrap">
                      <div class="select --outline-primary">
                          <select id="subject">
                              <option value="hide">เลือกรายการ</option>
                              <option value="เก็บตกจากเนชั่น">เก็บตกจากเนชั่น</option>
                              <option value="globalasean">Global ASEAN</option>
                              <option value="จับชีพจรโลก">จับชีพจรโลก</option>
                              <option value="newworld">New World</option>
                              <option value="ก้าวทันเทคโน">ก้าวทันเทคโนฯ</option>
                              <option value="สุขกาย สบายใจ">สุขกาย สบายใจ</option>
                        </select>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset class="form-group">
                    <div class="label-wrap">
                      <label for="message" class="head --static">แสดงความคิดเห็น</label>
                    </div>
                    <div class="input-wrap">
                      <textarea name="message" id="message" class="input input__textarea --primary"></textarea>
                    </div>
                  </fieldset>
                  <fieldset class="form-group">
                    <div class="button-wrap">
                      <input type="submit" value="ส่ง" class="button --solid-primary send-button"></input>
                    </div>
                  </fieldset>
                          </form>

              </section>

            </article>
          </div>
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