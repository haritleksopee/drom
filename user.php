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
        <section class="py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-3 border-right">
                <div class="img-profile mb-3">
                  <img class="img-cover" src="assets/images/profile/person_1.jpg" />
                </div>
                <div class="mb-3 text-center">
                  <label class="fileContainer">
                      <a href="">แก้ไขรูปโปรไฟล์</a>
                      <input type="file"/>
                  </label>
                </div>
                <hr>
                <div class="mb-3">
                  <ul class="nav nav-pills d-block">
                    <li class="nav-item">
                      <a class="nav-link profile-tab active" data-toggle="pill" href="#profile">ประวัติส่วนตัว</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link profile-tab" data-toggle="pill" href="#miter">เช็คมิเตอร์</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link profile-tab" data-toggle="pill" href="#cart-history">ประวัติค่าใช้จ่ายในแต่ละเดือน</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link profile-tab" data-toggle="pill" href="#payment">ยืนยันการชำระเงิน</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link profile-tab" data-toggle="pill" href="#reset-password">แก้ไขรหัสผ่าน</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link profile-tab" data-toggle="pill" href="#contact">ติดต่อเจ้าของหอพัก</a>
                    </li>
                  </ul>
                </div>

              </div>
              <div class="col-md-9">
                <div class="tab-content">
                  <div class="tab-pane container active" id="profile">
                    <div class="mb-3">
                      <h4 class="block-header alt">
                        <span>ประวัติส่วนตัว</span> 
                      </h4>
                    </div>

                    <div class="row">
                      <div class="col-md-3 mb-3"><b>ชื่อ</b> <span>สุชาติ กลางมา</span></div> 
                      <div class="col-md-3 mb-3"><b>อายุ</b> <span>21 ปี</span></div> 
                      <div class="col-md-3 mb-3"><b>อาชีพ</b> <span>นักศึกษา</span></div> 
                      <div class="col-md-3 mb-3"><b>เบอร์ติดต่อ</b> <span>0632355666</span></div>
                      <div class="col-md-3 mb-3"><b>เลขห้อง</b> <span>4201</span></div>
                    </div>
                  </div>
                  <div class="tab-pane container fade" id="miter">2</div>
                  <div class="tab-pane container fade" id="cart-history">3</div>
                  <div class="tab-pane container fade" id="payment">4</div>
                  <div class="tab-pane container fade" id="reset-password">
                    <div class="col-lg-10 mx-auto my-5">
                      <div class="card rounded-0">
                        <div class="card-body">
                          <form action="/">
                            <div class="form-group mb-3">
                              <label for="password">รหัสผ่านเก่า :</label>
                              <input type="password" class="form-control"/>
                            </div>
                            <div class="form-group mb-3">
                              <label for="pwd">รหัสผ่านใหม่ :</label>
                              <input type="password" class="form-control" />
                            </div>
                            <div class="form-group mb-3">
                              <label for="pwd">ยืนยันรหัสผ่านใหม่ :</label>
                              <input type="password" class="form-control" />
                            </div>
                            <div class="text-center mb-3">
                              <button type="submit" class="btn btn-orange ">รีเช็ตรหัสผ่าน</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane container fade" id="contact">6</div>
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
