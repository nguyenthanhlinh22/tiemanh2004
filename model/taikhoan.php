<?php
    function loadall_taikhoan(){
        $sql="select * from taikhoan order by id desc";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }
    function loadone_taikhoan($id){
        $sql= "select * from taikhoan where id=".$id;
        $tk=pdo_query_one($sql);
        return $tk;
    }
    function insert_taikhoan($name,$email,$address,$tel,$user,$pass,$img){
        $sql="insert into taikhoan(name,email,address,tel,user,pass,img) values('$name','$email','$address','$tel','$user','$pass','$img')";
        pdo_execute($sql);
    }
    function checkuser($user,$pass){
        $sql= "select * from taikhoan where user='".$user."' AND pass='".$pass."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function checkemail($email){
        $sql= "select * from taikhoan where email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_taikhoan($id,$email,$user,$pass,$address,$tel){
        $sql="update taikhoan set email='".$email."', user='".$user."', pass='".$pass."', address='".$address."', tel='".$tel."' where id=".$id;
        pdo_execute($sql);
    }
    
?>