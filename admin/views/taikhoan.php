<?php
$html_user=show_user($taikhoanlist);
?>
<main class="main">
        <h1 class="title">Tài khoản</h1>
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
        <table class="account table"> 
          <thead class="table-head"> 
            <tr>
              <th> 
                <ion-icon name="image-outline"></ion-icon>
              </th>

              <th>Tên người dùng</th>
              <th>Điện thoại</th>
              <th>Email </th>
              <th>Trạng thái</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody class="table-body"> 
           <?=$html_user?>
          </tbody>
        </table>
      
      </main>
    </div>