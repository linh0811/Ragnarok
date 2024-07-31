<?php
require_once 'pdo.php';
function get_nhanvat(){
    $sql = "SELECT * FROM tuong ORDER BY id ";
    return pdo_query($sql);
}

function show_nhanvat($new){
    $html_spmoi='';
    foreach ($new as $sp) {
            if($new==1){
                $new_home='<div class=new></div>';
            }else{
                $new_home='';
            }
            $linkdetail = "index.php?pg=productdetail&id=" . $sp['id'];
            $html_spmoi.='

           <div class="sp">
        <div class="sp-left">
            <img src="./img/'.$sp['image'].'" alt="" width="100%" height="100%">
        </div>
        <div class="sp-right">
        <h2>'.$sp['name'].'</h2>
        <p class="hs">'.$sp['heToc'].'</p>
        <p class="thuoctinh">Sinh mệnh: '.$sp['STtay'].'<i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i></p>
        <p class="thuoctinh">Sát thương tay: '.$sp['doKho'].'<i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i></p>
        <p class="thuoctinh">Độ khó: '.$sp['sinhMenh'].'<i class="fa-solid fa-star fa-sm" style="color: #FFD43B;"></i></p>
        <a href="'.$linkdetail.'"><input type="submit" class="chitiet-sp" value="Chi tiết"></a>
        </div>
        </div>
            ';
        }
        return $html_spmoi;
}
function get_nv($id){
    $sql = "SELECT * FROM tuong WHERE id=?";
    return pdo_query_one($sql,$id);
}
// function san_pham_insert($ten, $hinh, $gia, $giam_gia,$giang_vien, $ngay_day,$ngay_ket_thuc,$ca_hoc, $iddm){
//     $sql = "INSERT INTO khoa_hoc(ten, hinh, gia, giam_gia,giang_vien, ngay_day,ngay_ket_thuc,ca_hoc, iddm) VALUES (?,?,?,?,?,?,?,?,?)";
//     pdo_execute($sql,$ten, $hinh, $gia, $giam_gia,$giang_vien, $ngay_day,$ngay_ket_thuc,$ca_hoc, $iddm);
// }
// function get_free($limi){
//     $sql = "SELECT * FROM khoa_hoc WHERE free=1 ORDER BY id DESC limit ".$limi;
//     return pdo_query($sql);
// }
// function get_docquyen($limi){
//     $sql = "SELECT * FROM khoa_hoc WHERE doc_quyen=1 ORDER BY id DESC limit ".$limi;
//     return pdo_query($sql);
// }
// function get_new($limi){
//     $sql = "SELECT * FROM khoa_hoc WHERE new=1 ORDER BY id DESC limit ".$limi;
//     return pdo_query($sql);
// }
// // function get_duoi1tr(){
// //     $sql = "SELECT * FROM khoa_hoc WHERE gia < 1000000 ORDER BY id DESC limit ".$limi;
// //     return pdo_query($sql);
// // }
// function get_product_byid($iddm,$page,$sosp) {
//     if ($page == "" || $page == 0) $page = 1;
//     $batdau = ($page - 1) * $sosp;
//     $sql = "SELECT * FROM khoa_hoc WHERE 1";
//     if ($iddm > 0) {
//         $sql .= " AND iddm=" . $iddm;
//     }
//     $sql .= " ORDER BY id ASC ";
//     $sql .= " LIMIT " . $batdau . "," . $sosp;
//     return pdo_query($sql); 
    
// }
// function hien_trang($tong_so_sp, $sosp){
//     $tong_sp = count($tong_so_sp);
//     $sotrang = ceil($tong_sp / $sosp);
//     $html_sotrang = "";
//     for ($i = 1; $i <= $sotrang; $i++){
//         $html_sotrang .= '<a style="width: 12px;
// border: 1px solid rgba(55, 54, 54, 0.612);
// height: 7px;width: 20px;
// padding-right:10px;
// text-decoration: none;



// " href="index.php?pg=product&page=' . $i . '">' . $i . '</a>  ';
//     }

//     return $html_sotrang;
// }
// function show_sp($new){
//     $html_spmoi='';
//     foreach ($new as $sp) {
//             if($new==1){
//                 $new_home='<div class=new></div>';
//             }else{
//                 $new_home='';
//             }
//             $linkdetail = "index.php?pg=productdetail&id=" . $sp['id'];
//             $html_spmoi.='<div class="sp">'.$new_home.'
//             <a href="'.$linkdetail.'">
//             <div class="hinh_anh_sp">
//              <img src="img/'.$sp['hinh'].'" width="100%" height="100%" alt="">
//         </div>
//         </a>
//         <div class="ten_sp">
//             <p>'.$sp['ten'].'</p>
//         </div>
//     </div>
//             ';
//         }
//         return $html_spmoi;
// }
// function show_procduct($new){
//     $html_spmoi='';
//     foreach ($new as $sp) {
//             if($new==1){
//                 $new_home='<div class=new></div>';
//             }else{
//                 $new_home='';
//             }
//             $linkdetail = "index.php?pg=productdetail&id=" . $sp['id'];
//             $html_spmoi.='

//     <div class="sp_sp">'.$new_home.'
//     <div class="hinh_anh_sp">
//     <a href="'.$linkdetail.'">
//         <img src="img/'.$sp['hinh'].'" width="100%" height="100%" alt="">
//         </a>
//     </div>
//     <div class="ten_sp">
//         <p>'.$sp['ten'].'</p>
//     </div>
// </div>
//             ';
//         }
//         return $html_spmoi;
// }
// function hien_thi_trang($tong_so_sp, $soluongsp){
//     $tong_sp = count($tong_so_sp);
//     $sotrang = ceil($tong_sp / $soluongsp);
//     $html_sotrang = "";

//     for ($i = 1; $i <= $sotrang; $i++) {
  
//         $html_sotrang .= '<a style="width: 12px;
// border: 1px solid rgba(55, 54, 54, 0.612);
// height: 7px;width: 20px;
// padding-right:10px;


// " href="index.php?page=product&pg=' . $i . '">' . $i . '</a>  ';
//     }

//     return $html_sotrang;
// }
// function get_all_product(){
//     $sql = "SELECT * FROM khoa_hoc ORDER BY id DESC";
//     return pdo_query($sql);
// }
// function get_product($pg, $soluongsp){
//     // kiểm tra ở trang nào? Tạo limit
//     if ($pg == "" || $pg == 0) $pg = 1;
    
//     $batdau = ($pg - 1) * $soluongsp;

//     $sql = "SELECT * FROM khoa_hoc WHERE 1";
//     $sql .= " ORDER BY id DESC";
//     $sql .= " LIMIT " . $batdau . "," . $soluongsp;

//     return pdo_query($sql);
// }
// function get_dssp_lq($iddm,$id,$limi){
//     $sql = "SELECT * FROM khoa_hoc WHERE iddm=? AND id<>? ORDER BY id DESC limit 3";
//     return pdo_query($sql,$iddm,$id);
// }

// function get_iddm($id){
//     $sql = "SELECT iddm FROM khoa_hoc WHERE id=?";
//     return pdo_query_value($sql,$id);
// }
// function show_sp_ct($new){
//     $html_spmoi='';
//     foreach ($new as $sp) {
//             if($new==1){
//                 $new_home='<div class=new></div>';
//             }else{
//                 $new_home='';
//             }
//             $linkdetail = "index.php?pg=productdetail&id=" . $sp['id'];
//             $html_spmoi.='

//             <div class="sp-ct">'.$new_home.'
//             <div class="hinh_anh_ct">
//             <a href="'.$linkdetail.'">
//                 <img src="img/'.$sp['hinh'].'" width="100%" height="100%" alt="">
//                 </a>
//             </div>
//             <div class="ten_ct">
//             <p>'.$sp['ten'].'</p>
//             </div>
//             </div>

//             ';
//         }
//         return $html_spmoi;
// }

// function get_ct_sp($id){
//     $sql = "SELECT * FROM khoa_hoc WHERE id=?";
//     return pdo_query_one($sql,$id);
// }
// function get_tt_detail($limi){
//     $sql = "SELECT * FROM khoa_hoc WHERE free=1 ORDER BY id DESC limit ".$limi;
//     return pdo_query($sql);
// }
// function show_ct($new){
//     $html_spmoi='';
//     foreach ($new as $sp) {
//             if($new==1){
//                 $new_home='<div class=new></div>';
//             }else{
//                 $new_home='';
//             }
//             $linkdetail = "index.php?pg=productdetail&id=" . $sp['id'];
//             $html_spmoi.='

//             <div class="sp-ct">'.$new_home.'
//             <div class="hinh_anh_ct">
//             <a href="'.$linkdetail.'">
//                 <img src="img/'.$sp['hinh'].'" width="100%" height="100%" alt="">
//                 </a>
//             </div>
//             <div class="ten_ct">
//             <p>'.$sp['ten'].'</p>
//             </div>
//             </div>

//             ';
//         }
//         return $html_spmoi;
// }
// //admin
// function show_admin($new){
//     $html_spmoi='';
//     foreach ($new as $sp) {
//             if($new==1){
//                 $new_home='<div class=new></div>';
//             }else{
//                 $new_home='';
//             }
//        extract($sp);
//             $html_spmoi.='
//             <tr>
//             <td> 
//               <div class="product-image"> <img src="'.IMG_PATH_ADMIN.$hinh.'" alt="product" width="100%" height="100%" ></div>
//             </td>
//             <td> 
//               <div class="product-name"> 
//                 <p>'.$ten.'</p>
//               </div>
//             </td>
//             <td>
//               <div class="product-entry-date"> 
//               <del>'.$gia.'</del>
//                 <p>'.$giam_gia.'</p>
//               </div>
//             </td>
//             <td>
//               <div class="product-quantity"> 
//                 <p>'.$giang_vien.'</p>
//               </div>
//             </td>
//             <td>
//               <div class="product-price"> 
//                 '.$ngay_day.'
//               </div>
//             </td>
//             <td>
//               <div class="product-category"> 
//               '.$ngay_ket_thuc.'
//               </div>
//             </td>
//             <td>
//                   <div class="product-action"> <a class="product-update" href="index.php?page=updateproduct&id='.$id.'">
//                       <ion-icon name="create-outline"></ion-icon></a><span>|</span><a href="index.php?page=delproduct&id='.$id.'">
//                       <ion-icon name="trash-outline"></ion-icon></a></div>
//             </td>
//           </tr>
//             ';
//         }
    
//         return $html_spmoi;
//     }
//     function sanpham_delete($id){
//         $sql = "DELETE FROM khoa_hoc WHERE  id=?";
//             pdo_execute($sql, $id);
        
//     }

//     function get_img($id){
//         $sql = "SELECT hinh FROM khoa_hoc WHERE id=?";
//     $get_img=pdo_query_one($sql,$id);
//     return $get_img['hinh'];
//     }
//     function san_pham_update($ten, $hinh, $gia, $giam_gia,$giang_vien, $ngay_day,$ngay_ket_thuc,$ca_hoc, $iddm,$id){
//         if( $hinh!=""){
//         $sql = "UPDATE khoa_hoc SET ten=?,hinh=?,gia=?,giam_gia=?,giang_vien=?,ngay_day=?,ngay_ket_thuc=?,ca_hoc=?,iddm=? WHERE id=?";
//         pdo_execute($sql, $ten, $hinh, $gia, $giam_gia,$giang_vien, $ngay_day,$ngay_ket_thuc,$ca_hoc, $iddm,$id);
//     }else{
//         $sql = "UPDATE khoa_hoc SET ten=?,gia=?,giam_gia=?,giang_vien=?,ngay_day=?,ngay_ket_thuc=?,ca_hoc=?,iddm=? WHERE id=?";
//         pdo_execute($sql, $ten, $gia, $giam_gia,$giang_vien, $ngay_day,$ngay_ket_thuc,$ca_hoc, $iddm,$id);
//     }
//     }
    
    
// function hang_hoa_select_by_id($ma_hh){
//     $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_one($sql, $ma_hh);
// }

// function hang_hoa_exist($ma_hh){
//     $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_value($sql, $ma_hh) > 0;
// }

// function hang_hoa_tang_so_luot_xem($ma_hh){
//     $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
//     pdo_execute($sql, $ma_hh);
// }

// function hang_hoa_select_top10(){
//     $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
//     return pdo_query($sql);
// }

// function hang_hoa_select_dac_biet(){
//     $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
//     return pdo_query($sql);
// }

// function hang_hoa_select_by_loai($ma_loai){
//     $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
//     return pdo_query($sql, $ma_loai);
// }

// function hang_hoa_select_keyword($keyword){
//     $sql = "SELECT * FROM hang_hoa hh "
//             . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
//             . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
//     return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
// }

// function hang_hoa_select_page(){
//     if(!isset($_SESSION['page_no'])){
//         $_SESSION['page_no'] = 0;
//     }
//     if(!isset($_SESSION['page_count'])){
//         $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
//         $_SESSION['page_count'] = ceil($row_count/10.0);
//     }
//     if(exist_param("page_no")){
//         $_SESSION['page_no'] = $_REQUEST['page_no'];
//     }
//     if($_SESSION['page_no'] < 0){
//         $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
//     }
//     if($_SESSION['page_no'] >= $_SESSION['page_count']){
//         $_SESSION['page_no'] = 0;
//     }
//     $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT ".$_SESSION['page_no'].", 10";
//     return pdo_query($sql);
// }