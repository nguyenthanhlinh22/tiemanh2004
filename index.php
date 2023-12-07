<?php
    session_start();
    include "dao/pdo.php";
    include "model/taikhoan.php";
    include "model/sanpham.php";
    include "model/trangphuc.php";
    include "model/phukien.php";
    include "model/lienhe.php";
    include "model/cart.php";
    include "model/donhang.php";

    if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];
?>

<?php include './layout/header.php';
 if(!isset($_GET['action'])){
    $_GET["action"] = "trangchu";
 }
?>


<?php switch ($_GET["action"]) {//xác định action và include trang tương ứng
    case 'trangchu':
        include './page/trangchu.php';
        break;
    case 'gioithieu':
        include './page/gioithieu.php';
        break;
    case 'dangnhap':
        if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $checkuser=checkuser($user,$pass);
            if(is_array($checkuser)){
                $_SESSION['user']=$checkuser;
                // $thongbao="Đăng nhập thành công";

                header('location: index.php');
                
            } else {
                $thongbao="Tài khoản không tồn tại vui lòng đăng ký tài khoản";
            }
        }
        include './page/dangnhap.php';
        break;
    case 'dangky':
        if(isset($_POST['dangky'])&&($_POST['dangky'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $tel=$_POST['tel'];
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $img=$_POST['img'];
            insert_taikhoan($name,$email,$address,$tel,$user,$pass,$img);
            $thongbao="Đăng ký tài khoản thành công";
        }
        include './page/taikhoan/dangky.php';
        break;
    case 'chitiet':
        if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
            $id=$_GET['idsp'];
            $onesp=loadone_sanpham($id);
            extract($onesp);
            include './page/chitiet.php';
        } else{
            include './page/dichvu.php';
        }
        break;
    case 'chitiettp':
        if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
            $id=$_GET['idsp'];
            $onesp=loadone_trangphuc($id);
            extract($onesp);
            include './page/chitiet.php';
        } else{
            include './page/trangphuc.php';
        }
        break;
    case 'chitietpk':
        if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
            $id=$_GET['idsp'];
            $onesp=loadone_phukien($id);
            extract($onesp);
            include './page/chitiet.php';
        } else{
            include './page/phukien.php';
        }
        break;
    case 'viewcart':
        include './page/cart/viewcart.php';
        break;
    case 'delcart':
        if(isset($_GET['idcart'])&&($_GET['idcart']>=0)){
            array_splice($_SESSION['cart'],$_GET['idcart'],1);
            header('Location: index?action=viewcart');
        }
        break;
            
    case 'addtocart':
        if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
            $id=$_POST['id'];
            $name=$_POST['name'];
            $price=$_POST['price'];
            $img=$_POST['img'];
            $soluong=1;
            $tongtien=$soluong * $price;
            //them moi sp vao giohang
            $spcart=array($id,$img,$name,$price,$soluong);
            // $_SESSION['cart']=$spcart;
            if(!isset($_SESSION['cart'])) $_SESSION['cart']=array();
            array_push($_SESSION['cart'],$spcart);
        }
        include './page/cart/viewcart.php';
        break;
    case 'addlh':
        //kiem tra người dùng click vào nút add hayk
        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            // Lấy các giá trị từ form
            $name=$_POST['name'];
            $email=$_POST['email'];
            $noidung=$_POST['noidung'];
            insert_lienhe($name,$email,$noidung);
            $thongbao="Gửi liên hệ thành công";
        }
        include './page/lienhe.php';
        break;
    case 'chitiet':
        include './page/chitiet.php';
        break;
    case 'thoat':
        session_destroy();
        header('location: index.php'); 
        break;
    // case 'lienhe':
    //     include './page/lienhe.php';
    //     break;
    case 'thongtincanhan':
        include './page/thongtincanhan.php';
        break;
    case 'thanhtoan':
        if((isset($_POST['thanhtoan']))&&($_POST['thanhtoan'])){
            //lấy dữ liệu
            $tongdonhang=$_POST['tongdonhang'];
            $name=$_POST['name'];
            $tel=$_POST['tel'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $date=$_POST['date'];
            $pttt=$_POST['pttt'];
            $madh="TA2004".rand(0,99999999);
            //tạo đơn hàng và trả về id đơn hàng
            $iddh=taodonhang($madh,$tongdonhang,$name,$tel,$email,$address,$date,$pttt); 
            if(isset($_SESSION['cart'])&&(count($_SESSION['cart'])>0)){
                foreach ($_SESSION['cart'] as $spcart) {
                    addtocart($iddh,$spcart[0],$spcart[3],$spcart[2],$spcart[4],$spcart[1]);
                }
            }
        }
        include './page/donhang.php';
        break;
    case'blog':
        include './page/blog/blog.php';
        break;
    case 'dichvu':
        $listsanpham = loadall_sanpham();
        include './page/dichvu.php';
        break;
    case 'trangphuc':
        $listsanpham = loadall_trangphuc();
        include './page/trangphuc.php';
        break;
    case 'phukien':
        $listsanpham = loadall_phukien();
        include './page/phukien.php';
        break;
    default:
        include './page/trangchu.php';
}

?>

<?php include './layout/footer.php' ?>