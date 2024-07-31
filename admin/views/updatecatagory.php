<?php
if(is_array($ct)&&(count($ct)>0)){
  extract($ct);
  $idupdate=$id;

 
}

?>
<form class="product-uploadd" action="index.php?page=capnhatcatagory" method="post" enctype="multipart/form-data" >
<div class="product-upp">
    <div class="product-upcatagory">
<h2 class="sub-title product-form-title">Chỉnh sửa danh mục</h2><br>
            <div class="product-form-content"> 
              <label>Tên danh mục:</label>
              <input class="product-form-input" type="text"  name="ten" value="<?=($ten!="")?$ten:"";?>"  placeholder="Nhập tên danh mục">
             <div>
             <input type="hidden" name="id" value="<?=$idupdate?>">
              <button class="product-form-button button" name="capnhatcatagory" type="submit">Cập nhật</button>
             </div>
            </div>
          
  
</div>
</div>
</form>