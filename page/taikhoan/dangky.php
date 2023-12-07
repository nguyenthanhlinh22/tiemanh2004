
<div class="container">
  <h1>ĐĂNG KÝ</h1> <br>
  <form id="login-form" class="form" action="#" method="post">
    <div class="form-control">
      <input type="text" id="name" name="name" placeholder="Họ và tên">
    </div>
    <div class="form-control">
      <input type="email" id="email" name="email" placeholder="Email">
    </div>
    <div class="form-control">
      <input type="address" id="address" name="address" placeholder="Địa chỉ">
    </div>
    <div class="form-control">
      <input type="text" id="tel" name="tel" placeholder="Số điện thoại">
    </div>
    <div class="form-control">
      <input type="name" id="user" name="user" placeholder="Tên đăng nhập">
    </div>
    <div class="form-control">
      <input type="pass" id="pass" name="pass" placeholder="Mật khẩu">
    </div>
    <div class="form-control">
      <input type="file" id="img" name="img" placeholder="Thêm ảnh">
    </div>
    <h4 class="thongbao">
      <?php
          if(isset($thongbao)&&($thongbao!="")){
              echo $thongbao;
          }
      ?>
    </h4> <br>
    <p>Bạn đã có tài khoản? <a href="/index.php?action=dangnhap">Đăng nhập ngay</a></p><br>
    <input type="submit" class="btn" value="Đăng ký" name="dangky">
  </form>
  
</div>
