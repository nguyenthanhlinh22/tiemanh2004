<head>
    <style>
        .row_admin_list tr td{
            text-align: center;
        }
        .tittle_admin_add {
            text-align: center;
        }
    </style>
</head>
<div class="container_admin_add">
    <div class="tittle_admin_add">
        <h1>DANH SÁCH LIÊN HỆ</h1>
    </div>
</div>
<div class="content_admin_list">
    <div class="row_admin_list">
       
        <table>
            <tr>
                <th></th>
                <th>MÃ LIÊN HỆ</th>
                <th>HỌ VÀ TÊN</th>
                <th>EMAIL</th>
                <th>NỘI DUNG LIÊN HỆ</th>
                <th>THAO TÁC</th>
                
            </tr>
         <?php
            // Lặp qua mảng $listsanpham, mỗi phần tử là một sản phẩm
            foreach ($listsanpham as $sanpham) {
                // Extract các phần tử trong mảng $sanpham thành các biến tương ứng
                extract($sanpham);
                // $suapk = "index.php?action=suapk&id=".$id;
                $xoalh = "index.php?action=xoalh&id=".$id;
                echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$noidung.'</td>
                    <td> <a href="' . $xoalh . '"><input type="button" class="button_list_admin" value="Xóa"></a></td>
                </tr>';
            }
        ?> 
        </table>
    </div>
    <div class="row_admin_btn">
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xóa các mục đã chọn">
        <!-- <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a> -->
    </div>
</div>
</div>
