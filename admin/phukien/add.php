<div class="container_admin_add">
    <div class="tittle_admin_add">
        <h1>THÊM MỚI PHỤ KIỆN</h1>
    </div>
    <div class="content_admin_add">
        <form action="" method="post" enctype="multipart/form-data">
            
            <div class="row_admin_add">
                Tên phụ kiện <br>
                <input type="text" name="tendv">
            </div>
            <div class="row_admin_add">
                Giá <br>
                <input type="text" name="giadv">
            </div>
            <div class="row_admin_add">
                Hình ảnh <br>
                <input type="file" style="border: none;" name="img" id="">
            </div>
            <div class="row_admin_add">
                Mô tả <br>
                <textarea name="mota" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="row_admin_btn">
                <input type="submit" name="themmoi" value="Thêm mới">
                <input type="reset" value="Nhập lại">
                <a href="index.php?action=listpk"><input type="button" value="Danh sách"></a>
            </div>
            <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
        </form>
    </div>

    </div>
</div>