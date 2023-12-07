<div class="tittle_dichvu">
        <h1>CHI TIẾT DỊCH VỤ</h1>
      </div>
      <div class="container_chitiet">
        <?php
        extract($onesp);
    ?>

        <?php
        $img_path="upload/";
        $hinh=$img_path.$img;
        echo'
          <div class="product-img-chitiet">
            <img src="'.$hinh.'" height="500" width="400" alt="Product Image">
          </div>
          <div class="product-info-chitiet">
            <h1>'.$tendv.'</h1>
            <hr>
            <p class="tt"><a>tiemanh2004</a>-đồng hành cùng những tấm ảnh đẹp của bạn</p>
            <div class="price_ct">
              <p class="sc">Giá Chụp : <span class="price-chitiet">'.currency_format($giadv).'</span> <span class="price_st">/Shot</span><?p>
              
            </div>
            <ul  class="description-chitiet">
              <li class="sc"> Mô tả: </li>
              <li class="description-sc">'.$mota.'</li>
            </ul>
            <div class="lienhe_ctsp">
              <p class="tt_sp"> Mọi thắc mắc nhấn vào đây để đc hổ trợ nhanh nhất </p>
              <div class="ctsp_icon">
                <a href="https://www.facebook.com/2004cute22/"><i class="fa-brands fa-facebook" style="color: #0552d6;"></i></a>
                <a href="https://www.tiktok.com/@tiemanh2004"><i class="fa-brands fa-tiktok" style="color: #000000;"></i></a>
                <a href="https://www.instagram.com/tiemanh2004/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://github.com/nguyenthanhlinh22"><i class="fa-brands fa-github"></i></a>

              </div>

            </div>
            <div class="btn_addtocart">
              <form action="/index?action=addtocart" method="post">
                <input type="hidden" name="id" value="'.$id.'">
                <input type="hidden" name="name" value="'.$tendv.'">
                <input type="hidden" name="price" value="'.$giadv.'">
                <input type="hidden" name="img" value="'.$hinh.'">
                <input type="submit" name="addtocart" value="ĐẶT LỊCH">
              </form>
            </div>


          </div>
          </div>
      ';
      ?>