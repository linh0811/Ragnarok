<?php

$html_showall=show_nhanvat($dsnv);
$html_showallbando=show_bando($dsbd);
$html_showalltt=show_hottt($dstt);

?>
<main>
        <div class="row">
            <div class="top container">
                <div class="banner">
                    <div class="banner-backgroud">
                    <Button class="dowload" >Tải Ngay  <i class="fa-solid fa-download fa-lg" style="color: #f6f3f2;"></i></Button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="top container">
                <div class="container-sp">
                    <h2 class="nv">Nhân Vật <i class="fa-solid fa-chevron-right fa-sm" style="color: #FFFFFF;"></i></h2>
                <div class="data">
                    <?=$html_showall?>
        <!-- <div class="sp">
        <div class="sp-left">
            <img src="./img/sp1.png" alt="" width="100%" height="100%">
        </div>
        <div class="sp-right">
        <h2>Ryujin</h2>
        <p class="hs">Hiệp sĩ</p>
        <p class="thuoctinh">Sinh mệnh: 5<i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i></p>
        <p class="thuoctinh">Sát thương tay: 3<i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i></p>
        <p class="thuoctinh">Độ khó: 3<i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i></p>
        <a href="index.php?pg=productdetail"><input type="submit" class="chitiet-sp" value="Chi tiết"></a>
        </div>
        </div>
        
        <div class="sp">
            <div class="sp-left">
                <img src="./img/sp2.png" alt="" width="100%" height="100%">
            </div>
            <div class="sp-right">
            <h2>Paladin</h2>
            <p class="hs">Chiến binh long tộc</p>
            <p class="thuoctinh">Sinh mệnh: 4<i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i></p>
            <p class="thuoctinh">Sát thương tay: 4<i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i></p>
            <p class="thuoctinh">Độ khó: 5<i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i></p>
            <input type="submit" class="chitiet-sp" value="Chi tiết">
            </div>
            </div>
        
            <div class="sp">
                <div class="sp-left">
                    <img src="./img/sp3.png" alt="" width="100%" height="100%">
                </div>
                <div class="sp-right">
                <h2>Lucial</h2>
                <p class="hs">Công chúa nước Sunland</p>
                <p class="thuoctinh">Sinh mệnh: 3<i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i></p>
                <p class="thuoctinh">Sát thương tay: 5<i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i></p>
                <p class="thuoctinh">Độ khó: 4<i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i></p>
                <input type="submit" class="chitiet-sp" value="Chi tiết">
                </div>
                </div> -->
            
                </div>
                </div>
            </div>
        </div>
    
       <div class="row">
        <div class="top container">
            <div class="container-bd">
                <h2 class="bd">Bản đồ <i class="fa-solid fa-chevron-right fa-sm" style="color: #261A1A;"></i></h2>

                <div class="data">
                <?=$html_showallbando?>
                </div>
            </div>
        </div>
       </div> 
       <div class="row">
        <div class="top container sp_duoi">
        <div class="container-bd">

            <div class="tin_tuc">
                <a href="index.php?pg=tintuc"><h1>Tin tức</h1></a>
            </div>
            <hr>
            <div class="data_tt">
                <?=$html_showalltt?>
                <!-- <div class="sp_tt">
                    <div class="hinh_anh_tt">
                        <img src="../webAPI/public/images/xe1.png" width="100%" height="100%" alt="">
                    </div>
                    <div class="ten_tt">
                        <p>Tặng hơn 10.000 bản sách cho học viên </p>
                    </div>
                </div>
                <div class="sp_tt">
                    <div class="hinh_anh_tt">
                        <img src="../webAPI/public/images/xe2.png" width="100%" height="100%" alt="">
                    </div>
                    <div class="ten_tt">
                        <p>Khóa giao tiếp COMMUNICATION 1 </p>
                    </div>
                </div>
                <div class="sp_tt">
                    <div class="hinh_anh_tt">
                        <img src="../webAPI/public/images/xe3.png" width="100%" height="100%" alt="">
                    </div>
                    <div class="ten_tt">
                        <p>Test trình độ tiếng Anh miễn phí </p>
                    </div>
                </div>
                <div class="sp_tt">
                    <div class="hinh_anh_tt">
                        <img src="../webAPI/public/images/xe4.png" width="100%" height="100%" alt="">
                    </div>
                    <div class="ten_tt">
                        <p>Tặng 1000 thẻ test miễn phí </p>
                    </div>
                </div> -->
            </div>
            </div>
        </div>
    </div>
    </main>