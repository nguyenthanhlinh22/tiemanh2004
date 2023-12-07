<div class="giohang">
    <div class="tittle_giohang">
        <h3>Giỏ Hàng</h3>
    </div>
    <div class="list_giohang">
        <table>
            <?php
                $del=1;
                $tong=0;
                $i=0;
                if($del==1){
                    $xoasp_th='<th>Thao tác</th>';
                    $xoasp_td2='<td></td>';
                } else {
                    $xoasp_th='';
                    $xoasp_td='';
                }
                echo '<tr>
                    <th>Mã DV</th>
                    <th>Tên DV</th>
                    <th>Hình</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    '.$xoasp_th.'
                
                </tr>';
                foreach ($_SESSION['cart'] as $spcart) {
                    $tongtien=$spcart[3]*$spcart[4];
                    $tong+=$tongtien;
                    $linkdel="/index.php?action=delcart&idcart=".$i;
                    if($del==1){
                        $xoasp_td='<td><a href="'.$linkdel.'"><input type="button" class="button_delete_cart" value="Xóa"></a></td>';
                    } else {
                        $xoasp_td='';
                    }
                    echo'
                        <tr>
                            <td>TA-'.$spcart[0].'</td>
                            <td>'.$spcart[2].'</td>
                            <td><img src="'.$spcart[1].'" height="80" alt=""></td>
                            <td>'.currency_format($spcart[3]).'</td>
                            <td>'.$spcart[4].'</td>
                            <td>'.currency_format($tongtien).'</td>
                            '.$xoasp_td.'
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
                        <th class="total_cart">'.currency_format($tong).'</th>
                        <th></th>
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
            <form action="/index.php?action=thanhtoan"  method="post">
                <input type="hidden" name="tongdonhang" value="<?=$tong?>">  
                <div class="row-add-thongtin">
                        Họ và tên <br>
                        <input type="text" name="name">
                    </div> 
                    <div class="row-add-thongtin">
                        Số điện thoại <br>
                        <input type="text" name="tel">
                    </div>
                    <div class="row-add-thongtin">
                        Email <br>
                        <input type="email" name="email">
                    </div>
                    <div class="row-add-thongtin">
                        Địa chỉ <br>
                        <input type="text" name="address">
                    </div>
                    <div class="row-add-thongtin">
                        Ngày <br>
                        <input type="date" name="date"> 
                    </div>
                    <div class="row-pttt">
                        Phương thức thanh toán <br>
                        <input type="radio" name="pttt" value="1">  Thanh toán qua ví momo <br>
                        <input type="radio" name="pttt" value="2">  Thanh toán trực tiếp<br>
                        <input type="radio" name="pttt" value="3">  Thanh toán qua tài khoản ngân hàng<br>
                    </div>
                    <div class="button_giohang">
                        <input type="submit" name="thanhtoan" class="btn_ttmh" value="Đặt lịch">
                        <input style="background-color: #DC3545;" type="submit" value="Xóa tất cả">
                    </div>
            </form>

        </div>
       
    </div>

</div>