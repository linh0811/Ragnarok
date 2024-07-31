<?php
$html_sanphamlist=show_admin($sanphamlist);
?>
    <main class="main">
        <h1 class="title">Sản phẩm</h1>
        <div class="filter">
          <div class="filter-select"> 
            <select id="filter-select">
              <option value="all">Tất cả</option>
              <option value="new">Mới nhất</option>
              <option value="sale">Giảm giá</option>
            </select>
          </div>
          <div class="filter-search"> 
            <input id="filter-search" type="text" placeholder="Nhập từ khoá"/>
            <button class="button">
              <ion-icon name="search"></ion-icon>
            </button>
          </div>
        </div>
        <div>
        <div class="phantrang">
        <?php
              echo  $hienthisotrang
            ?>
          </div>
          <table class="product table"> 
            <thead class="table-head"> 
              <tr>
                <th> 
                  <ion-icon name="image-outline"></ion-icon>
                </th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Giảng viên</th>
                <th>Ngày dạy</th>
                <th>Ngày kết thúc</th>
                <th>Hàng động</th>
              </tr>
            </thead>
            <tbody class="table-body"> 
              <?=$html_sanphamlist?>
             
         
            </tbody>
          
          </table>
          <div class="phantrang" >
            <?php
              echo  $hienthisotrang
            ?>
       
          </div>
        </div>
        <br>
        <button class="table-button button product-add">
          <p>Thêm sản phẩm</p>
        </button>
        <form action="index.php?page=addproduct" method="post" enctype="multipart/form-data">
          <?php
          $iddm="";
          $html_danhmuclist=show_danhmuclist($danhmuclist,$iddm);
          ?>
        <div class="product-form">
          <div class="product-form-container">
            <h2 class="sub-title product-form-title">Thêm mới sản phẩm</h2><a class="product-form-close" href="#">
              <ion-icon name="close-circle-outline"></ion-icon></a>
            <div class="product-form-content"> 
              <label>Chọn danh mục:</label>
              <select class="product-form-select" name="iddm">
                <option default>-- Danh mục --</option>
                <?=$html_danhmuclist?>
              </select>
              <label>Hình ảnh sản phẩm:</label>
              <input type="file" class="product-form-input" name="hinh" >
              <label>Tên sản phẩm:</label>
              <input class="product-form-input" type="text"  name="ten" placeholder="Nhập tên sản phẩm">
              <label>Giá bán ảo (Hiển thị khi lớn hơn giá bán thực tế):</label>
              <input class="product-form-input" type="text"  name="gia" placeholder="Nhập giá sản phẩm">
              <label>Giá bán thực tế: </label>
              <input class="product-form-input" type="text"  name="giam_gia" placeholder="Nhập giá sản phẩm">
              <div class="product-form-input-container"> 
                <div> 
                  <label for="entry-date">Ngày dạy</label>
                  <input type="date" name="ngay_day" placeholder="Entry-date">
                </div>
                <div> 
                  <label for="entry-date">Ngày kết thúc</label>
                  <input type="date" name="ngay_ket_thuc" placeholder="Entry-date">
                </div>
                
              </div>
              <label>Ca học:</label>
              <input class="product-form-input"  name="ca_hoc" type="text" placeholder="Nhập ca học">
              <label>Giảng viên:</label>
              <input class="product-form-input"  name="giang_vien" type="text" placeholder="Nhập ca học">
              <label>Nội dung:</label><textarea id="editor" name="noi_dung"></textarea>
              <button class="product-form-button button" name="addproduct" type="submit">Thêm sản phẩm</button>
            </div>
          </div>
        </div>
        </form>
       
      </main>
    </div>