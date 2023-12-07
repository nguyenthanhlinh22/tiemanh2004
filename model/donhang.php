<?php
                        
    function taodonhang($madh,$tongdonhang,$name,$tel,$email,$address,$date,$pttt){
        $conn= pdo_get_connection();
        $sql="insert into donhang (madh,tongdonhang,name,tel,email,address,date,pttt) values ('$madh','$tongdonhang','$name','$tel','$email','$address','$date','$pttt')";
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        return $last_id;
        
    }
    function  addtocart($iddh,$idpro,$giadv,$tendv,$img){
        $sql="insert into cart (iddh,idpro,giadv,tendv,img) 
        values('$iddh','$idpro','$giadv','$tendv','$img')";
        pdo_execute($sql);
    }
    function loadall_donhang(){
        $sql="select * from donhang order by id desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function delete_donhang($id){
        $sql= "delete from donhang where id=".$id;
        pdo_execute($sql);
    }
?>