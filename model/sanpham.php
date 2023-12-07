<?php
//thêm một sản phẩm mới vào cơ sở dữ liệu
    function insert_sanpham($tendv,$giadv,$img,$mota){
        $sql="insert into sanpham(tendv,giadv,img,mota) values('$tendv','$giadv','$img','$mota')";
        pdo_execute($sql);
    }
       // xóa một sản phẩm dựa trên ID
    function delete_sanpham($id){
        $sql= "delete from sanpham where id=".$id;
        pdo_execute($sql);
    }
    
    function loadall_sanpham(){
        $sql="select * from sanpham order by id desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
  // Hàm load thông tin của một sản phẩm dựa trên ID
    function loadone_sanpham($id){
        $sql= "select * from sanpham where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    // Hàm cập nhật thông tin của một sản phẩm dựa trên ID
    function update_sanpham($id,$tendv,$giadv,$img,$mota){
        if($mota!="")
            $sql="update sanpham set tendv='".$tendv."', giadv='".$giadv."', img='".$img."', mota='".$mota."' where id=".$id;
        else
            $sql="update sanpham set tendv='".$tendv."', giadv='".$giadv."', img='".$img."' where id=".$id;

        pdo_execute($sql);
    }

?>