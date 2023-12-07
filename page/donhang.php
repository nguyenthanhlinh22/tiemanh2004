<head>
    <style>
        .iddonhang{
            margin-left: 50px;
            margin-top: 30px;
        }
    </style>
</head>
<div class="giohang">
    <div class="tittle_giohang">
        <h3>ĐẶT LỊCH THÀNH CÔNG</h3>
    </div>
    <div class="iddonhang">
        <h3>Mã đơn hàng: <?=$madh?></h3>
    </div>
    
    <div class="list_giohang">
        <table>
        <?php
            $tong=0;
            $i=0;
            echo '<tr>
                <th>Mã DV</th>
                <th>Tên DV</th>
                <th>Hình</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>

            </tr>';
            foreach ($_SESSION['cart'] as $spcart) {
                $tongtien=$spcart[3]*$spcart[4];
                $tong+=$tongtien;
                echo'
                    <tr>
                        <td>TA-'.$spcart[0].'</td>
                        <td>'.$spcart[2].'</td>
                        <td><img src="'.$spcart[1].'" height="80" alt=""></td>
                        <td>'.currency_format($spcart[3]).'</td>
                        <td>'.$spcart[4].'</td>
                        <td>'.currency_format($tongtien).'</td>
                    </tr>
                    ';
                    $i+=1;   
            }
            echo'
                <tr>
                    <th></th>
                    <th></th>
                    <th>Tổng thành tiền:</th>
                    <th></th>
                    <th></th>
                    <th class="total_cart">'.currency_format($tong).' </th>
                </tr> 
            ';
        
        ?>
        </table>
    </div>
    

    <div class="thongtindatlich">
        <div class="tittle_thongtindatlich">
            <h4>Thông tin khách hàng</h4>
        </div>
        <div class="form-datlich">
            
            <div class="row-add-thongtin">
                Họ và tên: 
                <?=$name?>
            </div> 
            <div class="row-add-thongtin">
                Số điện thoại: 
                <?=$tel?>
            </div>
            <div class="row-add-thongtin">
                Email: 
                <?=$email?>
            </div>
            <div class="row-add-thongtin">
                Địa chỉ: 
                <?=$address?>
            </div>
            <div class="row-add-thongtin">
                Ngày: 
                <?=$date?>
            </div>
            <div class="row-add-thongtin">
                Tổng Tiền bạn thanh toán sau khi chụp là :
                <?=currency_format($tong)?>
            </div>
            <div class="row-pttt">
                Phương thức thanh toán: 
                <?php
                    if ($pttt=1) {
                        echo "Thanh toán qua ví momo";
                    } elseif($pttt=2) {
                        echo "Thanh toán qua ví trực tiếp";
                    } else {
                        echo "Thanh toán qua tài khoản ngân hàng";
                    }
                    
                ?>
            </div>

        </div>
       
    </div>

</div>