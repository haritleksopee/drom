<!doctype html>
<html lang="en">
  <head>
  	<!-- START HEADER -->
    <?php include_once('inc/header.php'); ?>
    <!-- END HEADER -->
  </head>

  <body>
	<!-- START NAVBAR -->
    <?php include_once('inc/navbar.php'); ?>
    <!-- END NAVBAR -->



    <!-- START CONTENT -->
      <div class="wrapper">
        <section>
          <div class="video-fix-height position-relative">
            <video class="video-auto-play" autoplay muted loop>
              <source src="assets/images/video/Pexels Videos 5144.mp4" type="video/mp4">
            </video>
            <div class="container index-set-login">
              <div class="col-8 mx-auto">
                <div class="login-card text-center py-5">
                  <h4>
                    เข้าสู่ระบบ
                  </h4>
                  <hr class="border-light border-width">
                  <div class="form-group text-left">
                  <label for="usr">Username:</label>
                    <input type="text" class="form-control border-0 rounded-0" id="usr">
                  </div>
                  <div class="form-group text-left">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control border-0 rounded-0" id="pwd">
                  </div>

                  <div class="mb-3">
                    <button type="button" class="btn btn-orange px-5"  onclick="location.href = 'user.php';">เข้าสู่ระบบ</button>
                  </div>

                  <div>
                    <a href="user.php">ลืมรหัสผ่าน</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    <!-- END CONTENT -->




    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->


  </body>
</html>

<script>


</script>
