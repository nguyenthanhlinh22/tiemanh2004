<div class="lienhe">
    <div class="title_lienhe">
        <h2>Liên hệ với chúng tôi</h2>
    </div>
    <div class="form_lienhe">
        <form action="#" method="POST">
            <input type="text" name="name" placeholder="Họ và tên *"><br>
            <input type="email" name="email" placeholder="Email *"><br>
            <textarea name="noidung" id="" cols="30" rows="10" placeholder="Nội dung"></textarea><br>
            <div class="thongbao_lienhe">
                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
            </div>
            <input type="submit" class="button_lienhe" name="themmoi" value="Gửi liên hệ">  
        </form>
       
    </div>
</div