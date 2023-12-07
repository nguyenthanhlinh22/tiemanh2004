<?php
    // Bắt đầu session, sử dụng các file header.php, pdo.php, và sanpham.php
    session_start();
    include "header.php";
    include "../dao/pdo.php";
    include "../model/sanpham.php";
    include "../model/trangphuc.php";
    include "../model/lienhe.php";
    include "../model/phukien.php";
    include "../model/donhang.php";


?>
<?php
// Nếu không có tham số 'action' trong URL, gán giá trị mặc định là 'home'
 if(!isset($_GET['action'])){
    $_GET["action"] = "home";
 }
?>

<?php switch ($_GET["action"]) {
    case 'home':
        // Nếu action là 'home', include file home.php
        include 'home.php';
        break;
    case 'addsp':
        //kiem tra người dùng click vào nút add hayk
        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            // Lấy các giá trị từ form
            $tendv=$_POST['tendv'];
            $giadv=$_POST['giadv'];
            $img=$_FILES['img']['name'];
            $mota=$_POST['mota'];
            $target_dir = "../upload/";
            $target_file = $target_dir . basename($_FILES["img"]["name"]);
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
            } else {
                // echo "Sorry, there was an error uploading your file.";
            }
            insert_sanpham($tendv,$giadv,$img,$mota);
            $thongbao="Thêm thành công";
        }
        include "sanpham/add.php";
        break;
    case 'list':
        $listsanpham = loadall_sanpham();
        include "sanpham/list.php";
        break;
    case 'xoasp':
        if(isset($_GET['id'])&&($_GET['id']>0)){
            delete_sanpham($_GET['id']);
        }
        $listsanpham=loadall_sanpham("",0);
        include "sanpham/list.php";
        break;
    case 'suasp':
        if(isset($_GET['id'])&&($_GET['id']>0)){
            $sanpham=loadone_sanpham($_GET['id']);
        }
        $listdanhmuc=loadall_sanpham();
        include "sanpham/edit.php";
        break;
    case 'updatesp':
        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
            $id=$_POST['id'];
            $tendv=$_POST['tendv'];
            $giadv=$_POST['giadv'];
            $img=$_FILES['hinh']['name'];
            $mota=$_POST['mota'];
            $target_dir = "../upload/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
            } else {
                // echo "Sorry, there was an error uploading your file.";
            }
            update_sanpham($id,$tendv,$giadv,$img,$mota);
            $thongbao="Cập nhật thành công";
        }
        $listsanpham=loadall_sanpham("",0);
        include "sanpham/list.php";
        break; 
    case 'edit':
        include "sanpham/edit.php";
        break;

    //Trang trang phục
    case 'addtp':
        //kiem tra người dùng click vào nút add hayk
        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            // Lấy các giá trị từ form
            $tendv=$_POST['tendv'];
            $giadv=$_POST['giadv'];
            $img=$_FILES['img']['name'];
            $mota=$_POST['mota'];
            $target_dir = "../upload/";
            $target_file = $target_dir . basename($_FILES["img"]["name"]);
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
            } else {
                // echo "Sorry, there was an error uploading your file.";
            }
            insert_trangphuc($tendv,$giadv,$img,$mota);
            $thongbao="Thêm thành công";
        }
        include "trangphuc/add.php";
        break;
    case 'listtp':
        $listsanpham = loadall_trangphuc();
        include "trangphuc/list.php";
        break;
    case 'xoatp':
        if(isset($_GET['id'])&&($_GET['id']>0)){
            delete_trangphuc($_GET['id']);
        }
        $listsanpham=loadall_trangphuc("",0);
        include "trangphuc/list.php";
        break;
    case 'suatp':
        if(isset($_GET['id'])&&($_GET['id']>0)){
            $sanpham=loadone_trangphuc($_GET['id']);
        }
        $listdanhmuc=loadall_trangphuc();
        include "trangphuc/edit.php";
        break;
    case 'updatetp':
        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
            $id=$_POST['id'];
            $tendv=$_POST['tendv'];
            $giadv=$_POST['giadv'];
            $img=$_FILES['hinh']['name'];
            $mota=$_POST['mota'];
            $target_dir = "../upload/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
            } else {
                // echo "Sorry, there was an error uploading your file.";
            }
            update_trangphuc($id,$tendv,$giadv,$img,$mota);
            $thongbao="Cập nhật thành công";
        }
        $listsanpham=loadall_trangphuc("",0);
        include "trangphuc/list.php";
        break; 
    case 'edit':
        include "trangphuc/edit.php";
        break;
    //PHỤ KIỆN
    case 'addpk':
        //kiem tra người dùng click vào nút add hayk
        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            // Lấy các giá trị từ form
            $tendv=$_POST['tendv'];
            $giadv=$_POST['giadv'];
            $img=$_FILES['img']['name'];
            $mota=$_POST['mota'];
            $target_dir = "../upload/";
            $target_file = $target_dir . basename($_FILES["img"]["name"]);
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
            } else {
                // echo "Sorry, there was an error uploading your file.";
            }
            insert_phukien($tendv,$giadv,$img,$mota);
            $thongbao="Thêm thành công";
        }
        include "phukien/add.php";
        break;
    case 'listpk':
        $listsanpham = loadall_phukien();
        include "phukien/list.php";
        break;
    case 'xoapk':
        if(isset($_GET['id'])&&($_GET['id']>0)){
            delete_phukien($_GET['id']);
        }
        $listsanpham=loadall_phukien("",0);
        include "phukien/list.php";
        break;
    case 'suapk':
        if(isset($_GET['id'])&&($_GET['id']>0)){
            $sanpham=loadone_phukien($_GET['id']);
        }
        $listdanhmuc=loadall_phukien();
        include "phukien/edit.php";
        break;
    case 'updatepk':
        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
            $id=$_POST['id'];
            $tendv=$_POST['tendv'];
            $giadv=$_POST['giadv'];
            $img=$_FILES['hinh']['name'];
            $mota=$_POST['mota'];
            $target_dir = "../upload/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
            } else {
                // echo "Sorry, there was an error uploading your file.";
            }
            update_phukien($id,$tendv,$giadv,$img,$mota);
            $thongbao="Cập nhật thành công";
        }
        $listsanpham=loadall_phukien("",0);
        include "phukien/list.php";
        break; 
    case 'edit':
        include "phukien/edit.php";
        break;
    //LIÊN HỆ
    case 'listlh':
        $listsanpham = loadall_lienhe();
        include "lienhe/list.php";
        break;
    case 'xoalh':
        if(isset($_GET['id'])&&($_GET['id']>0)){
            delete_lienhe($_GET['id']);
        }
        $listsanpham=loadall_lienhe("",0);
        include "lienhe/list.php";
        break;
         //ĐƠN HÀNG
    case 'listdh':
        $listsanpham = loadall_donhang();
        include "donhang/list.php";
        break;
    case 'xoadh':
        if(isset($_GET['id'])&&($_GET['id']>0)){
            delete_donhang($_GET['id']);
        }
        $listsanpham=loadall_donhang("",0);
        include "donhang/list.php";
        break;
    default:
    // Nếu action không nằm trong các trường hợp trên, mặc định là 'home'
        include 'home.php';
}



?>
