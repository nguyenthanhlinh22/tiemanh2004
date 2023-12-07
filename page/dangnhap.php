

<div class="container">
  <h1>ĐĂNG NHẬP</h1> <br>
  <form id="login-form" class="form" action="#" method="post">
    <div class="form-control">
      <input type="text" id="user" name="user" placeholder="Tên đăng nhập">
    </div>
    <div class="form-control">
      <input type="pass" id="pass" name="pass" placeholder="Mật khẩu">
    </div>
    <h4 class="thongbao">
      <?php
          if(isset($thongbao)&&($thongbao!="")){
              echo $thongbao;
          }
      ?>
    </h4> <br>
    <p>Bạn chưa có tài khoản? <a href="/index.php?action=dangky">Đăng ký ngay</a></p><br>
    <input type="submit" class="btn" value="Đăng nhập" name="dangnhap">
  </form>
</div>

