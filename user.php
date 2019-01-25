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
              <div class="col-md-9 position-relative">
                <div class="tab-content">

                  
                  <div class="tab-pane container fade" id="profile">
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

                  <!-- METER -->
                  <div class="tab-pane container fade" id="miter">
                    <div class="position-absolute meter-scnter">
                      <div class="text-center">
                        <h1>เช็คมิเตอร์</h1>
                      </div>
                      <div class="count">8</div> 
                      <div class="count">5</div> 
                      <div class="count">7</div> 
                      <div class="count">0</div>
                    </div>
                  </div>
                  <!-- END METER -->

                  <!-- CART HISTORY -->
                  <div class="tab-pane containe active" id="cart-history">
                    <div class="col-md-3 col-6 ml-auto pr-0">
                      <form class="mb-3">
                        <select class="form-control rounded-0"">
                          <option>Default select</option>
                          <option>2562</option>
                          <option>2561</option>
                          <option>2560</option>
                          <option>2559</option>
                          <option>2558</option>
                        </select>
                      </form>
                    </div>
                    <table>
                      <thead>
                        <tr>
                          <th>เดือน</th>
                          <th>เบอร์ห้อง</th>
                          <th>ค่าห้อง</th>
                          <th>ค่าไฟ</th>
                          <th>ค่าน้ำ</th>
                          <th>อื่นๆ</th>
                          <th>รวม</th>
                          <th>สถานะ</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-center">ม.ค</td>
                          <td class="text-center">207</td>
                          <td class="text-right">3,500</td>
                          <td class="text-right">500</td>
                          <td class="text-right">50</td>
                          <td class="text-right">350</td>
                          <td class="text-right">4,400</td>
                          <td class="text-center text-success">จ่ายแล้ว</td>
                        </tr>
                        <tr>
                          <td class="text-center">ก.พ</td>
                          <td class="text-center">207</td>
                          <td class="text-right">3,500</td>
                          <td class="text-right">500</td>
                          <td class="text-right">50</td>
                          <td class="text-right">350</td>
                          <td class="text-right">4,400</td>
                          <td class="text-center text-success">จ่ายแล้ว</td>
                        </tr>
                        <tr>
                          <td class="text-center">มี.ค</td>
                          <td class="text-center">207</td>
                          <td class="text-right">3,500</td>
                          <td class="text-right">500</td>
                          <td class="text-right">50</td>
                          <td class="text-right">350</td>
                          <td class="text-right">4,400</td>
                          <td class="text-center text-success">จ่ายแล้ว</td>
                        </tr>
                        <tr>
                          <td class="text-center">เม.ย</td>
                          <td class="text-center">207</td>
                          <td class="text-right">3,500</td>
                          <td class="text-right">500</td>
                          <td class="text-right">50</td>
                          <td class="text-right">350</td>
                          <td class="text-right">4,400</td>
                          <td class="text-center text-warning">รอชำระ</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- END CART HISTORY -->

                  <!-- PAYMENT -->
                  <div class="tab-pane container fade" id="payment">
                    <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                  <!-- END PAYMENT -->

                  <!-- PASSWORD -->
                  <div class="tab-pane container fade" id="reset-password">
                    <div class="col-lg-10 mx-auto my-5">
                      <div class="card rounded-0">
                        <div class="card-body">
                          <div class="py-3 text-center">
                            <h1>แก้ไขรหัสผ่าน</h1>
                          </div>
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
                  <!-- END PASSWORD -->
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

    <script>
      $(document).ready(function() {

        var counters = $(".count");
        var countersQuantity = counters.length;
        var counter = [];

        for (i = 0; i < countersQuantity; i++) {
          counter[i] = parseInt(counters[i].innerHTML);
        }

        var count = function(start, value, id) {
          var localStart = start;
          setInterval(function() {
            if (localStart < value) {
              localStart++;
              counters[id].innerHTML = localStart;
            }
          }, 40);
        }

        for (j = 0; j < countersQuantity; j++) {
          count(0, counter[j], j);
        }
      });
    </script>
  </body>
</html>


