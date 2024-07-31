<?php
if(is_array($sp)&&(count($sp)>0)){
  extract($sp);
  $idupdate=$id;
  $imgpath=IMG_PATH_ADMIN.$hinh;
  if(is_file($imgpath)){
    $img='<div class="product-form-image"><img src="'.$imgpath.'" alt="product image" ></div>';
  }else{
    $img="";
  }
}
$html_danhmuclist=show_danhmuclist($danhmuclist,$iddm);
?>

<form class="product-uploadd" action="index.php?page=capnhat" method="post" enctype="multipart/form-data" >
<div class="product-up">
<h2 class="sub-title product-form-title">Chỉnh sửa sản phẩm</h2><br>
            <div class="product-form-content"> 
              <label>Chọn danh mục:</label>
              <select class="product-form-select">
                <option default>-- Danh mục --</option>
        
               <?=$html_danhmuclist?>
              </select>
              <label>Hình ảnh sản phẩm:</label>
              <input type="file" class="product-form-input" name="hinh" >
              <?=$img?>
              <label>Tên sản phẩm:</label>
              <input class="product-form-input" type="text"  name="ten" value="<?=($ten!="")?$ten:"";?>" placeholder="Nhập tên sản phẩm">
              <label>Giá bán ảo (Hiển thị khi lớn hơn giá bán thực tế):</label>
              <input class="product-form-input" type="text"  name="gia" value="<?=($gia>0)?$gia:"";?>" placeholder="Nhập giá sản phẩm">
              <label>Giá bán thực tế: </label>
              <input class="product-form-input" type="text"  name="giam_gia" value="<?=($giam_gia>0)?$giam_gia:"";?>" placeholder="Nhập giá sản phẩm">
              <div class="product-form-input-container"> 
                <div> 
                  <label for="entry-date">Ngày dạy</label>
                  <input type="date" name="ngay_day" value="<?=($ngay_day!="")?$ngay_day:"";?>" placeholder="Entry-date">
                </div>
                <div> 
                  <label for="entry-date">Ngày kết thúc</label>
                  <input type="date" name="ngay_ket_thuc" value="<?=($ngay_ket_thuc!="")?$ngay_ket_thuc:""?>" placeholder="Entry-date">
                </div>
                
              </div>
              <label>Ca học:</label>
              <input class="product-form-input"  name="ca_hoc" value="<?=($ca_hoc!="")?$ca_hoc:""?>" type="text" placeholder="Nhập ca học">
              <label>Giảng viên:</label>
              <input class="product-form-input"  name="giang_vien" value="<?=($giang_vien!="")?$giang_vien:""?>" type="text" placeholder="Nhập ca học">
              <label>Nội dung:</label><textarea id="editor" value="<?=($noi_dung!="")?$noi_dung:""?>" name="noi_dung"></textarea>
             <div>
             <input type="hidden" name="iddm" value="<?=$iddm?>">
             <input type="hidden" name="id" value="<?=$idupdate?>">
              <button class="product-form-button button" name="capnhat" type="submit">Cập nhật</button>
             </div>
            </div>
          
  
</div>

</form>