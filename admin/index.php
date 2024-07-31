<?php
session_start();
ob_start();
if(isset($_SESSION['s_user'])&&($_SESSION['s_user']['role']==1)){

include "../dao/global.php";
include "../dao/pdo.php";
include "../dao/donhang.php";
include "../dao/sanpham.php";
include "../dao/binhluan.php";
include "../dao/user.php";
include "../dao/danhmuc.php";
require_once('views/head.php');
require_once('views/nav.php');

if(isset($_GET['page'])){
    switch($_GET['page']){
        case 'home':
            require_once('views/home.php');
            break;
        case 'product':
            if(!isset($_GET['pg'])){
            $pg=1;
            }else{
            $pg=$_GET['pg'];
            }
            $soluongsp=8;
            $sanphamlist=get_product($pg,$soluongsp);
            $tong_so_sp=get_all_product();
            $hienthisotrang=hien_thi_trang($tong_so_sp,$soluongsp);
            $danhmuclist=get_dm();
            require_once('views/product.php');
                break;
        case 'addproduct':
            if(isset($_POST['addproduct'])){
                //lấy dữ liệu
                $ten=$_POST['ten'];
            $hinh=$_FILES['hinh']['name'];
            $gia=$_POST['gia'];
            $giam_gia=$_POST['giam_gia'];
            $giang_vien=$_POST['giang_vien'];
            $ngay_day=$_POST['ngay_day'];
            $ngay_ket_thuc=$_POST['ngay_ket_thuc'];
            $ca_hoc=$_POST['ca_hoc'];
            $iddm=$_POST['iddm'];
                //insert và into
            san_pham_insert($ten, $hinh, $gia, $giam_gia,$giang_vien, $ngay_day,$ngay_ket_thuc,$ca_hoc, $iddm);
            //uploads hình ảnh
            $target_file=IMG_PATH_ADMIN.$hinh;
            move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
            if(!isset($_GET['pg'])){
                $pg=1;
                }else{
                $pg=$_GET['pg'];
                }
            $soluongsp=8;
            $sanphamlist=get_product($pg,$soluongsp);
            $tong_so_sp=get_all_product();
            $hienthisotrang=hien_thi_trang($tong_so_sp,$soluongsp);
            $danhmuclist=get_dm();
                require_once('views/product.php');
            }
         
            break;

        case 'delproduct':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
              
                try {
                    sanpham_delete($id);
                } catch (\Throwable $th) {
                   echo "<h3 style='coler:red;text-align:center'>Sản phẩm đang có trong giỏ hàng!</h3>";
                }
               
            }
            if(!isset($_GET['pg'])){
                $pg=1;
                }else{
                $pg=$_GET['pg'];
                }
            $soluongsp=8;
            $sanphamlist=get_product($pg,$soluongsp);
            $tong_so_sp=get_all_product();
            $hienthisotrang=hien_thi_trang($tong_so_sp,$soluongsp);
            $danhmuclist=get_dm();
            require_once('views/product.php');
            break;
        case 'updateproduct':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
              $sp= get_ct_sp($id);
            }
            if(!isset($_GET['pg'])){
                $pg=1;
                }else{
                $pg=$_GET['pg'];
                }
            $soluongsp=8;
            $sanphamlist=get_product($pg,$soluongsp);
            $tong_so_sp=get_all_product();
            $hienthisotrang=hien_thi_trang($tong_so_sp,$soluongsp);
            $danhmuclist=get_dm();
            require_once('views/updateproduct.php');
            break;
        case 'capnhat':
            
//kiểm tra và lấy dữ liệu
if(isset($_POST['capnhat'])){
    $ten=$_POST['ten'];
    $hinh=$_FILES['hinh']['name'];
    $gia=$_POST['gia'];
    $giam_gia=$_POST['giam_gia'];
    $giang_vien=$_POST['giang_vien'];
    $ngay_day=$_POST['ngay_day'];
    $ngay_ket_thuc=$_POST['ngay_ket_thuc'];
    $ca_hoc=$_POST['ca_hoc'];
    $iddm=$_POST['iddm'];
    $id=$_POST['id'];
    if($hinh!=""){
       //uploads hình ảnh
       $target_file=IMG_PATH_ADMIN.$hinh;
       move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
          
    }else{
        $hinh="";  
    }
           //insert và into
    san_pham_update($ten, $hinh, $gia, $giam_gia,$giang_vien, $ngay_day,$ngay_ket_thuc,$ca_hoc, $iddm,$id);
}
//show sản phẩm
if(!isset($_GET['pg'])){
    $pg=1;
    }else{
    $pg=$_GET['pg'];
    }
$soluongsp=8;
$sanphamlist=get_product($pg,$soluongsp);
$tong_so_sp=get_all_product();
$hienthisotrang=hien_thi_trang($tong_so_sp,$soluongsp);
$danhmuclist=get_dm();
                require_once('views/product.php');
                break;
        case 'category':
            $danhmuclist=get_dm();
            require_once('views/category.php');
            break;
        case 'addcatagory':
                if(isset($_POST['addcatagory'])){
                    //lấy dữ liệu
                    $ten=$_POST['ten'];
                    //insert và into
                    danhmuc_insert($ten);
                //uploads hình ảnh
                $danhmuclist=get_dm();
                require_once('views/category.php');
                }
        case 'delcatagory':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
             catagory_delete($id);
            }
            $danhmuclist=get_dm();
            require_once('views/category.php');
            break;
        case'updatecatagory':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
              $ct= get_ct_dm($id);
            } 
            require_once('views/updatecatagory.php');
            break;

        case'capnhatcatagory':         
            //kiểm tra và lấy dữ liệu
            if(isset($_POST['capnhatcatagory'])){
                $ten=$_POST['ten'];
                $id=$_POST['id'];

                catagory_update($ten,$id);
            }
            $danhmuclist=get_dm();
                        require_once('views/category.php');
                        break;

        case 'comment':
            $commentlist=binh_luan_select_all();
            require_once('views/comment.php');
            break;
        case 'delcommnet':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                comment_delete($id);
                
            }

            $commentlist=binh_luan_select_all();
            require_once('views/comment.php');
            break;
        case 'donhang':
            $bill=load_all_bill(0);
            require_once('views/donhang.php');
            break;
        case 'deldonhang':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                donhang_delete($id);
            }
            $bill=load_all_bill(0);
            require_once('views/donhang.php');
            break;
        case 'taikhoan':
            $taikhoanlist=get_userlist();
            require_once('views/taikhoan.php');
            break;
        case 'deltaikhoan':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                taikhoan_delete($id);
            }
            $taikhoanlist=get_userlist();
            require_once('views/taikhoan.php');
            break;
         case 'updatetaikhoan':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                  $tk= get_user($id);
                }
            // $taikhoanlist=get_userlist();
            require_once('views/updatetaikhoan.php');
            break;
        case'capnhataikhoan':   
                        
            //kiểm tra và lấy dữ liệu
            if(isset($_POST['capnhataikhoan'])){
                $name=$_POST['name'];
                $password=$_POST['password'];
                $sdt=$_POST['sdt'];
                $email=$_POST['email'];
                $tuoi=$_POST['tuoi'];
                $id=$_POST['id'];
                user_updated($name, $password, $email, $sdt, $tuoi, $id);
            }
            $taikhoanlist=get_userlist();
            require_once('views/taikhoan.php');
            break;
        case 'logout':
            if(isset($_SESSION['s_user']['role'])) unset($_SESSION['s_user']['role']);
    
         
            header("location: login.php");
            break;             
    default:
        require_once('views/home.php');
    }
}else{
    require_once('views/home.php');
}
require_once('views/footer.php');
}else{
    header("location: login.php");
}
?>