<?php
    function viewcart($del){
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
            <th>Mã SP</th>
            <th>Tên SP</th>
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
                    <td>'.$spcart[3].'</td>
                    <td>'.$spcart[4].'</td>
                    <td>'.$spcart[3].'</td>
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
                <th class="total_cart">'.number_format($tong).' đ</th>
                <th></th>
            </tr> 
        ';
    
    }
    function bill_chi_tiet($listbill){
        global $img_path; 
        $tong=0;
        $i=0;
        echo '<tr>
            <th>Hình</th>
            <th>Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>';
        foreach ($listbill as $cart) {
            $hinh=$img_path.$cart['img'];
            $tong+=$cart['thanhtien'];
            echo '
            
            <tr>
                <td><img src="'.$hinh.'" alt="" height="80px"></td>
                <td>'.$cart['name'].'</td>
                <td>'.$cart['price'].'</td>
                <td>'.$cart['soluong'].'</td>
                <td>'.$cart['thanhtien'].'</td>
            </tr>';
            $i+=1;
        }
        echo '
            <tr>
                <td colspan="4">Tổng đơn hàng</td>
                <td>'.$tong.'</td>
            </tr>
        ';
    }

    function tongdonhang(){
        $tong=0;
        foreach ($_SESSION['mycart'] as $cart) {
            $ttien=$cart[4]*$cart[5];
            $tong+=$ttien;
            
        }
        return $tong;
    }
    function insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang) {
        $sql="insert into bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
        return pdo_execute_return_lastInsertId($sql);
    }
    function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill) {
        $sql="insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
        return pdo_execute($sql);
    }
    function loadone_bill($id){
        $sql= "select * from bill where id=".$id;
        $bill=pdo_query_one($sql);
        return $bill;
    }
    function loadall_cart($idbill){
        $sql= "select * from cart where idbill=".$idbill;
        $bill=pdo_query($sql);
        return $bill;
    }
    function loadall_cart_count($idbill){
        $sql= "select * from cart where idbill=".$idbill;
        $bill=pdo_query($sql);
        return sizeof($bill);
    }
    function loadall_bill($iduser){
        $sql = "SELECT * FROM bill WHERE 1";
        if ($iduser > 0) $sql .= " AND iduser=" . $iduser;
        $sql .= " ORDER BY id DESC";
        $listbill = pdo_query($sql);
        return $listbill;
    }
    function delete_bill($iduser){
        $sql= "delete from bill where iduser=".$iduser;
        pdo_execute($sql);
    }
    
    function get_ttdh($n) {
        switch ($n) {
            case '0':
                $tt="Đơn hàng mới";
                break;
            case '1':
                $tt="Đang xử lý";
                break;
            case '2':
                $tt="Đang giao hàng";
                break;
            case '3':
                $tt="Đã giao hàng";
                break;
        
            default:
                $tt="Đơn hàng mới";
                break;
        }
        return $tt;
    }

?>