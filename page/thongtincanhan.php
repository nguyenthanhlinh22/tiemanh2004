<style>
    body{
        background-color: #F5F5F5;
    }
</style>
<?php
 $img_path="upload/";
 $hinh=$img_path.$img;


?>

<div class="profile">
  <div class="profile_title">
    <h1>Profile</h1>
  </div>
  <div class="profile_header">
        <div class="img">
          <img src="<?=" . $hinh. "?>">
           <div class="conntent">
               <p><?=$name?></p>

           </div>


        </div>

  </div>
  <div class="profile_Personal_information">
        <div class="profile_product">
            <div class="product_title">
                <p>
                    Full Name:
                </p>
            </div>
            <div class="product_input">
               <p> <?=$name?></p>
            </div>
        </div>

      <div class="profile_product">
          <div class="product_title">
              <p>
                  Telephone:
              </p>
          </div>
          <div class="product_input">
              <p> <?=$tel?></p>
          </div>
      </div>

      <div class="profile_product">
          <div class="product_title">
              <p>
                  Usser:
              </p>
          </div>
          <div class="product_input">
              <p><?=$user?></p>
          </div>
      </div>

      <div class="profile_product">
          <div class="product_title">
              <p>
                 PassWork:
              </p>
          </div>
          <div class="product_input">
              <p> <?=$pass?></p>
          </div>
      </div>

      <div class="profile_product">
          <div class="product_title">
              <p>
                 address:
              </p>
          </div>
          <div class="product_input">
              <p> <?=$address?></p>
          </div>
      </div>

      <div class="profile_product dress">
          <div class="product_title">
              <p>
                  Email :
              </p>
          </div>
          <div class="product_input">
              <p><?=$email?></p>
          </div>
      </div>

  </div>
    <div class="profile_button_out">
        <div class="profile_button">
            <a href='/index.php?action=thoat'>Log Out</a>
        </div>
            <?php
        if($role==1){
            ?>
        <a href="admin/index.php">Đăng nhập với tư cách admin</a>
        <?php } ?>
    </div>
    </div>
    