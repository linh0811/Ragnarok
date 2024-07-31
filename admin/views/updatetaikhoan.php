<?php
if(is_array($tk)&&(count($tk)>0)){
  extract($tk);
  $idupdate=$id;
}
?>
<form class="product-uploadd" action="index.php?page=capnhataikhoan" method="post" enctype="multipart/form-data" >
<div class="product-up">
            <h2 class="sub-title account-form-title">Chỉnh sửa tài khoản </h2><a class="account-form-close" href="#">
              <ion-icon name="close-circle-outline"></ion-icon></a>
            <div class="account-form-content"> 
              <label>Tên người dùng: <span> *</span></label>
              <input class="account-form-input" type="text" name="name" value="<?=($name!="")?$name:"";?>">
              <label for="account-email">Email:<span>*</span></label>
              <input class="account-form-input" type="email" name="email" value="<?=($email!="")?$email:"";?>" id="account-email">
              <label for="account-phone">Số điện thoại:<span>*</span></label>
              <input class="account-form-input" type="text" name="sdt" value="<?=($sdt!="")?$sdt:"";?>" id="account-phone">
              <label for="account-phone">Tuổi:<span>*</span></label>
              <input class="account-form-input" type="text" name="tuoi" value="<?=($tuoi!="")?$tuoi:"";?>" id="account-phone">
              <div class="account-form-password">
                <p>Đổi mật khẩu</p>
                <hr>
                <label for="account-password">Mật khẩu mới (Bỏ trống nếu không muốn thay đổi):</label>
                <input class="account-form-input" type="password" name="password" value="<?=($password!="")?$password:"";?>" id="account-password">
                <label for="account-password-confirm">Xác nhận mật khẩu mới:</label>
                <input class="account-form-input" type="password" name="password" value="<?=($password!="")?$password:"";?>" id="account-password-confirm">
              </div>
              <input type="hidden" name="id" value="<?=$idupdate?>">
              <button class="account-form-button button" name="capnhataikhoan" type="submit">Lưu thay đổi</button>
            </div>
          </div>
</form>