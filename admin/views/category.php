
<?php
         
          $html_catagory= show_catagory($danhmuclist);
          
          ?>
    <main class="main">
       
       <h1 class="title">Danh mục</h1>
        <table class="category table"> 
          <thead class="table-head">
            <tr> 
              <th>Tên thể loại</th>
              
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody class="table-body">
          <?=$html_catagory?>
          </tbody>
        </table>
        <button class="table-button button category-add">
          <p>Thêm danh mục</p>
        </button>
        <form action="index.php?page=addcatagory" method="post" enctype="multipart/form-data">
        <div class="category-form">
          <div class="category-form-container">
            <h2 class="sub-title category-form-title">Thêm danh mục</h2><a class="category-form-close" href="#">
              <ion-icon name="close-circle-outline"></ion-icon></a>
            <div class="category-form-table">
              <form>
                <table class="category-form-group table">
                  <thead class="table-head">
                    <tr>
                      <th>Tên danh mục</th>
                      <th>Hàng động</th>
                    </tr>
                  </thead>
                  <tbody class="table-body category-form-body">
                    <tr>
                      <td> 
                        <input id="category-name" type="text" name="ten" placeholder="Nhập tên thể loại">
                      </td>
                      <td>
                        <button class="button" id="category-submit" name="addcatagory" type="submit">Thêm danh mục</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </form>
            </div>
          </div>
        </div>
 
       </form>
       
      </main>
    </div>