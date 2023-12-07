<?php
//thêm một sản phẩm mới vào cơ sở dữ liệu
    function insert_lienhe($name,$email,$noidung){
        $sql="insert into lienhe(name,email,noidung) values('$name','$email','$noidung')";
        pdo_execute($sql);
    }
       // xóa một sản phẩm dựa trên ID
    function delete_lienhe($id){
        $sql= "delete from lienhe where id=".$id;
        pdo_execute($sql);
    }
    
    function loadall_lienhe(){
        $sql="select * from lienhe order by id desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
  // Hàm load thông tin của một sản phẩm dựa trên ID
    function loadone_lienhe($id){
        $sql= "select * from lienhe where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    // Hàm cập nhật thông tin của một sản phẩm dựa trên ID
    function update_lienhe($id,$name,$email,$noidung){
        if($mota!="")
            $sql="update lienhe set name='".$name."', email='".$email."', noidung='".$noidung."' where id=".$id;
        else
            $sql="update lienhe set name='".$name."', email='".$email."', noidung='".$noidung."' where id=".$id;

        pdo_execute($sql);
    }

?>