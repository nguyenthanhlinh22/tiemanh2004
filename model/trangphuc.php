<?php
//thêm một sản phẩm mới vào cơ sở dữ liệu
    function insert_trangphuc($tendv,$giadv,$img,$mota){
        $sql="insert into trangphuc(tendv,giadv,img,mota) values('$tendv','$giadv','$img','$mota')";
        pdo_execute($sql);
    }
       // xóa một sản phẩm dựa trên ID
    function delete_trangphuc($id){
        $sql= "delete from trangphuc where id=".$id;
        pdo_execute($sql);
    }
    
    function loadall_trangphuc(){
        $sql="select * from trangphuc order by id desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
  // Hàm load thông tin của một sản phẩm dựa trên ID
    function loadone_trangphuc($id){
        $sql= "select * from trangphuc where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    // Hàm cập nhật thông tin của một sản phẩm dựa trên ID
    function update_trangphuc($id,$tendv,$giadv,$img,$mota){
        if($mota!="")
            $sql="update trangphuc set tendv='".$tendv."', giadv='".$giadv."', img='".$img."', mota='".$mota."' where id=".$id;
        else
            $sql="update trangphuc set tendv='".$tendv."', giadv='".$giadv."', img='".$img."' where id=".$id;

        pdo_execute($sql);
    }

?>