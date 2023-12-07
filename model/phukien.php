<?php
//thêm một sản phẩm mới vào cơ sở dữ liệu
    function insert_phukien($tendv,$giadv,$img,$mota){
        $sql="insert into phukien(tendv,giadv,img,mota) values('$tendv','$giadv','$img','$mota')";
        pdo_execute($sql);
    }
       // xóa một sản phẩm dựa trên ID
    function delete_phukien($id){
        $sql= "delete from phukien where id=".$id;
        pdo_execute($sql);
    }
    
    function loadall_phukien(){
        $sql="select * from phukien order by id desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
  // Hàm load thông tin của một sản phẩm dựa trên ID
    function loadone_phukien($id){
        $sql= "select * from phukien where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    // Hàm cập nhật thông tin của một sản phẩm dựa trên ID
    function update_phukien($id,$tendv,$giadv,$img,$mota){
        if($mota!="")
            $sql="update phukien set tendv='".$tendv."', giadv='".$giadv."', img='".$img."', mota='".$mota."' where id=".$id;
        else
            $sql="update phukien set tendv='".$tendv."', giadv='".$giadv."', img='".$img."' where id=".$id;

        pdo_execute($sql);
    }

?>