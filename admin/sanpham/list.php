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
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
</div>
<div class="content_admin_list">
    <div class="row_admin_list">
       
        <table>
            <tr>
                <th></th>
                <th>MÃ DỊCH VỤ</th>
                <th>TÊN DỊCH VỤ</th>
                <th>GIÁ</th>
                <th>HÌNH ẢNH</th>
                <th>MÔ TẢ</th>
                <th>THAO TÁC</th>
                
            </tr>
         <?php
            // Lặp qua mảng $listsanpham, mỗi phần tử là một sản phẩm
            foreach ($listsanpham as $sanpham) {
                // Extract các phần tử trong mảng $sanpham thành các biến tương ứng
                extract($sanpham);
                $suasp = "index.php?action=suasp&id=".$id;
                $xoasp = "index.php?action=xoasp&id=".$id;
                //đường dẫn đến hình ảnh sản phẩm trong thư mục upload
                $hinhpath = "../upload/" . $img;
                // Kiểm tra xem tệp hình ảnh
                if (is_file($hinhpath)) {
                    $img = "<img src='" . $hinhpath . "' height='80' >";
                } else {
                    $img = "no photo";
                }
                echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$tendv.'</td>
                    <td>'.$giadv.'</td>
                    <td>'.$img.'</td>
                    <td>'.$mota.'</td>
                    <td><a href="' . $suasp . '"><input type="button" class="button_sua_admin" value="Sửa"></a> <a href="' . $xoasp . '"><input type="button" class="button_list_admin" value="Xóa"></a></td>
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
