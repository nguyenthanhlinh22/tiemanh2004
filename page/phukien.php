<div class="tittle_dichvu">
    <h1>PHỤ KIỆN</h1>
</div>
<div class="container_dichvu">
    <div class="box_content">
        <?php
            $i=0;
            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $img_path="upload/";
                $linksp="/index.php?action=chitietpk&idsp=".$id;
                $hinh=$img_path.$img;
                if(($i==2)||($i==5)||($i==8)){
                    $mr="";
                }else {
                    $mr="mr";
                }
                echo '
                <div class="box_dichvu">
                    <div class="box_image">
                        <a href="'.$linksp.'"><img src="'.$hinh.'"  alt=""></a>
                    </div>
                    <div class="box_noidung">
                        <div class="ten_dichvu">
                            <h4>'.$tendv.'</h4>
                        </div>
                        <div class="gia_dichvu">
                            <span>'.number_format($giadv).' VND</span>
                        </div>
                        <div class="mota_dichvu">
                            <p>'.$mota.'</p>

                        </div>                       
                        <div class="button_datlich">
                            <a href="'.$linksp.'"><input type="button" value="XEM DỊCH VỤ"></a>
                        </div>
                    </div>
                </div>';
                $i+=1;
            }
        ?>
    </div>
</div>