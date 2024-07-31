<?php
require_once 'pdo.php';

function get_tintuchot($limi){
    $sql = "SELECT * FROM tintuc WHERE hot=1 ORDER BY id DESC limit ".$limi;
    return pdo_query($sql);
}
// function get_tintucnew($limi){
//     $sql = "SELECT * FROM tintuc WHERE new=1 ORDER BY id DESC limit ".$limi;
//     return pdo_query($sql);
// }
function show_hottt($new){
    $html_spmoi='';
    foreach ($new as $sp) {
            if($new==1){
                $new_home='<div class=new></div>';
            }else{
                $new_home='';
            }
            $linkdetail = "index.php?pg=tintucchitiet&id=" . $sp['id'];
            $html_spmoi.='
<a href="'.$linkdetail.'">
            <div class="sp_tt">
            <div class="hinh_anh_tt">
                <img src="./img/'.$sp['image'].'" width="100%" height="100%" alt="">
            </div>
            <div class="ten_tt">
                <p>'.$sp['tieuDe'].' </p>
            </div>
        </div>
        </a>
            ';
        }
        return $html_spmoi;
}
function get_all_tintuc(){
    $sql = "SELECT * FROM tintuc ORDER BY id DESC";
    return pdo_query($sql);
}
function show_all_tt($new){
    $html_spmoi='';
    foreach ($new as $sp) {
            if($new==1){
                $new_home='<div class=new></div>';
            }else{
                $new_home='';
            }
            $linkdetail = "index.php?pg=tintucchitiet&id=" . $sp['id'];
            $html_spmoi.='

            <a href="'. $linkdetail.'">
            <div class="news-item left">
                <img src="img/'.$sp['image'].'" alt="Hình ảnh game 1">
                <div class="news-content">
                    <h2>'.$sp['tieuDe'].'</h2>
                    <p>'.$sp['moTa'].' </p>
                </div>
            </div>
        </a>
            ';
        }
        return $html_spmoi;
}
function get_ct_tt($id){
    $sql = "SELECT * FROM tintuc WHERE id=?";
    return pdo_query_one($sql,$id);
}
// function get_dmtt(){
//     $sql = "SELECT * FROM dmtt ORDER BY id ";
//     return pdo_query($sql);
// }
// function show_dmtt($new){
//     $html_spmoi='';
   
//     foreach ($new as $sp) {
//             if($new==1){
//                 $new_home='<div class=new></div>';
//             }else{
//                 $new_home='';
//             }
//             extract($sp);
//             $link='index.php?pg=tintuc&idtt='.$id;
//             $html_spmoi.='

//             <div class="tieude-dmtt">
//             <a href="'.$link.'">'.$loaitintuc.'</a>
           
//         </div>
//             ';
//         }
//         return $html_spmoi;
// }
// function get_tituc_byid($idtt) {
//     $sql = "SELECT * FROM tintuc WHERE 1";

//     if ($idtt > 0) {
//         $sql .= " AND idtt=" . $idtt;
//     }

//     $sql .= " ORDER BY id ASC ";
   
//     return pdo_query($sql); 
// }
// function get_name_tt($id){
//     $sql = "SELECT loaitintuc FROM dmtt WHERE id=?";
//     return pdo_query_one($sql,$id);
// }