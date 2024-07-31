<?php
require_once 'pdo.php';

// /**
//  * Thêm loại mới
//  * @param String $ten_loai là tên loại
//  * @throws PDOException lỗi thêm mới
//  */
// function loai_insert($ten_loai){
//     $sql = "INSERT INTO loai(ten_loai) VALUES(?)";
//     pdo_execute($sql, $ten_loai);
// }
// /**
//  * Cập nhật tên loại
//  * @param int $ma_loai là mã loại cần cập nhật
//  * @param String $ten_loai là tên loại mới
//  * @throws PDOException lỗi cập nhật
//  */
// function loai_update($ma_loai, $ten_loai){
//     $sql = "UPDATE loai SET ten_loai=? WHERE ma_loai=?";
//     pdo_execute($sql, $ten_loai, $ma_loai);
// }
// /**
//  * Xóa một hoặc nhiều loại
//  * @param mix $ma_loai là mã loại hoặc mảng mã loại
//  * @throws PDOException lỗi xóa
//  */
// function loai_delete($ma_loai){
//     $sql = "DELETE FROM loai WHERE ma_loai=?";
//     if(is_array($ma_loai)){
//         foreach ($ma_loai as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_loai);
//     }
// }
// /**
//  * Truy vấn tất cả các loại
//  * @return array mảng loại truy vấn được
//  * @throws PDOException lỗi truy vấn
//  */
function get_bando(){
    $sql = "SELECT * FROM map ORDER BY id ";
    return pdo_query($sql);
}

function show_bando($new){
    $html_spmoi='';
    foreach ($new as $sp) {
            if($new==1){
                $new_home='<div class=new></div>';
            }else{
                $new_home='';
            }
            $linkdetail = "index.php?pg=bandochitiet&id=" . $sp['id'];
            $html_spmoi.='

            <div class="bd-sp">
            <div class="img-bd"><img src="./img/'.$sp['image'].'" alt="" width="100%" height="100%"></div>
            <div class="list-bd">
                <h3 class="ten-bd"><i>'.$sp['name'].'</i></h3>
                <a href="'.$linkdetail.'"><p class="xem-them">Xem thêm</p></a>
            </div>
                                </div>
            ';
        }
        return $html_spmoi;
}
function get_bd($id){
    $sql = "SELECT * FROM map WHERE id=?";
    return pdo_query_one($sql,$id);
}

//admin
// function show_danhmuclist($new,$iddm){
//     $html_spmoi='';
//     foreach ($new as $sp) {
//        extract($sp);
//     if($id===$iddm){
//         $s="selected";
//     }else{
//         $s="";
//         } 
//        $link='index.php?page=sanpham&iddm='.$id;
//             $html_spmoi.='
//             <option value="'.$id.'" '.$s.'>'.$ten.'</option>
//             ';
//         }
//         return $html_spmoi;
//     }
//     function show_catagory($new){
//         $html_spmoi='';
//         foreach ($new as $sp) {
//                 if($new==1){
//                     $new_home='<div class=new></div>';
//                 }else{
//                     $new_home='';
//                 }
//            extract($sp);
//                 $html_spmoi.='
//                 <tr> 
//                 <td> <span>'.$ten.'</span></td>
//                 <td> <a class="category-action category-update"  href="index.php?page=updatecatagory&id='.$id.'">
//                     <ion-icon name="create-outline"></ion-icon></a><span>|</span><a class="category-action category-remove" href="index.php?page=delcatagory&id='.$id.'">
//                     <ion-icon name="trash-outline"></ion-icon></a></td>
//               </tr>
//                 ';
//             }
        
//             return $html_spmoi;
//         }
//     function danhmuc_insert($ten){
//             $sql = "INSERT INTO danhmuc(ten) VALUES (?)";
//             pdo_execute($sql,$ten);
//         }
//     function catagory_delete($id){
//             $sql = "DELETE FROM danhmuc WHERE  id=?";
//                 pdo_execute($sql, $id);
            
//         }  
//     function get_ct_dm($id){
//         $sql = "SELECT * FROM danhmuc WHERE id=?";
//         return pdo_query_one($sql,$id);
//     } 
   
//     function catagory_update($ten,$id){
//         $sql = "UPDATE danhmuc SET ten=? WHERE id=?";
//         pdo_execute($sql, $ten,$id);
//     }
//     function get_name_dm($id){
//         $sql = "SELECT ten FROM danhmuc WHERE id=?";
//         return pdo_query_one($sql,$id);
//     }
// /**
//  * Truy vấn một loại theo mã
//  * @param int $ma_loai là mã loại cần truy vấn
//  * @return array mảng chứa thông tin của một loại
//  * @throws PDOException lỗi truy vấn
//  */
// function loai_select_by_id($ma_loai){
//     $sql = "SELECT * FROM loai WHERE ma_loai=?";
//     return pdo_query_one($sql, $ma_loai);
// }
// /**
//  * Kiểm tra sự tồn tại của một loại
//  * @param int $ma_loai là mã loại cần kiểm tra
//  * @return boolean có tồn tại hay không
//  * @throws PDOException lỗi truy vấn
//  */
// function loai_exist($ma_loai){
//     $sql = "SELECT count(*) FROM loai WHERE ma_loai=?";
//     return pdo_query_value($sql, $ma_loai) > 0;
// }