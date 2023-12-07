<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../upload/".$img;
        if (is_file($hinhpath)) {
            $hinh="<img src='".$hinhpath."' height='80'>";
        } else {
            $hinh="no photo";
        }

?>
<div class="container_admin_add">
    <div class="tittle_admin_add">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="content_admin_add">
    <form action="index.php?action=updatesp" method="post" enctype="multipart/form-data">
            <div class="row_admin_add">
                Tên dịch vụ <br>
                <input type="text" name="tendv" value="<?=$tendv?>">
            </div>
            <div class="row_admin_add">
                Giá <br>
                <input type="text" name="giadv" value="<?=$giadv?>">
            </div>
            <div class="row_admin_add">
                Hình ảnh <br>
                <input type="file" name="hinh" id="" value="<?=$img?>">
                
            </div>
            <div class="row_admin_add">
                Mô tả <br>
                <textarea name="mota" id="" cols="30" rows="10" ><?=$mota?></textarea>
            </div>
            <div class="row_admin_btn">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?action=list"><input type="button" name="danhsach" value="Danh sách"></a>
            </div>
            <!-- <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?> -->
        </form>
    </div>

</div>
</div>