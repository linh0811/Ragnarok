<?php
$html_comment=show_comment($commentlist);

?>
      <main class="main">
        <h1 class="title">Bình luận</h1>
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
        <table class="comment table"> 
          <thead class="table-head"> 
            <tr>
              <th> 
                <ion-icon name="image-outline"></ion-icon>
              </th>
              <th>Họ tên</th>
              <th>Nội dung</th>
              <th>Thời gian</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody class="table-body"> 
            <?=$html_comment?>
            
          </tbody>
        </table>
      </main>
    </div>