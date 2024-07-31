
     <main class="main">
        <h1 class="title">Đơn hàng</h1>
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
        <table class="order table"> 
          <thead class="table-head"> 
            <tr>
              <th>Tên người dùng</th>
              <th>Email</th>
              <th>Số điện thoại</th>
              <th>Tổng tiền</th>
              <th>Trạng thái</th>
              <th>Hàng động</th>
            </tr>
          </thead>
          <tbody class="table-body"> 
          <?php
    foreach ($bill as $sp) {
        echo '
            <tr>
                <td>
                    <div class="order-username"> 
                        <p>'.$sp["nguoinhan_ten"].'</p>
                    </div>
                </td>
                <td> 
                    <div class="order-fullname"> 
                        <p>'.$sp["nguoinhan_email"].'</p>
                    </div>
                </td>
                <td>'.$sp["nguoinhan_sdt"].'</td>
                <td>
                    <div class="order-Total"> 
                        <p>'.$sp["tong_tien"].'</p>
                    </div>
                </td>
                <td>
                    <div class="order-status"> 
                        <p>Đã thanh toán</p>
                    </div>
                </td>
                <td>
                    <div class="order-action"> 
                      </span><a href="index.php?page=deldonhang&id='.$sp["id"].'">
                        <ion-icon name="trash-outline"></ion-icon></a></div>
                    </div>
                </td>
            </tr>';
    }
?>
          </tbody>
        </table>
        <div class="order-form">
          <div class="order-form-container">
            <h2 class="sub-title order-form-title">Đơn hàng #123456789</h2><a class="order-form-close" href="#">
              <ion-icon name="close-circle-outline"></ion-icon></a>
            <div class="order-form-content"> 
              <label>Người đặt hàng: </label>
              <div class="order-form-image"> <img src="./images/guest.png" alt="product image"></div>
              <label>Tên người dùng: <span> *</span></label>
              <input class="order-form-input" type="text" value="Lang Tu" disabled>
              <label>Trạng thái: <span> *</span></label>
              <select class="order-form-select">
                <option value="1">Đang chờ xử lý</option>
                <option value="2">Đang giao hàng</option>
                <option value="3">Đã giao hàng</option>
                <option value="4">Đã hủy</option>
              </select>
              <div class="order-form-input-container">
                <div>
                  <label for="order-fullname">Họ và tên:<span>*</span></label>
                  <input class="order-form-input" type="text" value="Tiến Bịp" id="order-fullname">
                </div>
                <div>
                  <label for="receiver-fullname">Họ tên người nhận:<span>*</span></label>
                  <input class="order-form-input" type="text" value="Tiến Bịp" id="receiver-fullname">
                </div>
              </div>
              <div class="order-form-input-container">
                <div>
                  <label for="order-email">Email:<span>*</span></label>
                  <input class="order-form-input" type="email" value="meomeo@gmail.com" id="order-email">
                </div>
                <div>
                  <label for="receiver-email">Email người nhận:<span>*</span></label>
                  <input class="order-form-input" type="email" value="leuleu@gmail.com" id="receiver-email">
                </div>
              </div>
              <div class="order-form-input-container">
                <div>
                  <label for="order-phone">Số điện thoại:<span>*</span></label>
                  <input class="order-form-input" type="text" value="0123456789" id="order-phone">
                </div>
                <div>
                  <label for="receiver-phone">Số điện thoại người nhận:<span>*</span></label>
                  <input class="order-form-input" type="text" value="0123456789" id="receiver-phone">
                </div>
              </div>
              <div class="order-form-input-container">
                <div>
                  <label for="order-address">Địa chỉ:<span>*</span></label>
                  <input class="order-form-input" type="text" value="Hà Nội" id="order-address">
                </div>
                <div>
                  <label for="receiver-address">Địa chỉ người nhận:<span>*</span></label>
                  <input class="order-form-input" type="text" value="Hà Nội" id="receiver-address">
                </div>
              </div>
              <label>Ghi chú: </label>
              <textarea class="order-form-textarea"></textarea>
              <div class="order-detail-form">
                <table class="table">
                  <thead class="table-head">
                    <th>Tên sản phẩm</th>
                    <th>Giá tiền</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                  </thead>
                  <tbody class="table-body">
                    <tr>
                      <td> 
                        <p class="order-detail-form-name">Apple Airpod Max</p>
                      </td>
                      <td>
                        <p class="order-detail-form-price">$499</p>
                      </td>
                      <td>
                        <p class="order-detail-form-quantity">2</p>
                      </td>
                      <td> 
                        <p class="order-detail-form-subtotal">$998</p>
                      </td>
                    </tr>
                    <tr>
                      <td> 
                        <p class="order-detail-form-name">Apple Airpod Max</p>
                      </td>
                      <td>
                        <p class="order-detail-form-price">$499</p>
                      </td>
                      <td>
                        <p class="order-detail-form-quantity">2</p>
                      </td>
                      <td> 
                        <p class="order-detail-form-subtotal">$998</p>
                      </td>
                    </tr>
                    <tr>
                      <td> 
                        <p class="order-detail-form-name">Apple Airpod Max</p>
                      </td>
                      <td>
                        <p class="order-detail-form-price">$499</p>
                      </td>
                      <td>
                        <p class="order-detail-form-quantity">2</p>
                      </td>
                      <td> 
                        <p class="order-detail-form-subtotal">$998</p>
                      </td>
                    </tr>
                    <tr>
                      <td> 
                        <p class="order-detail-form-name">Apple Airpod Max</p>
                      </td>
                      <td>
                        <p class="order-detail-form-price">$499</p>
                      </td>
                      <td>
                        <p class="order-detail-form-quantity">2</p>
                      </td>
                      <td> 
                        <p class="order-detail-form-subtotal">$998</p>
                      </td>
                    </tr>
                    <tr>
                      <td> 
                        <p class="order-detail-form-name">Apple Airpod Max</p>
                      </td>
                      <td>
                        <p class="order-detail-form-price">$499</p>
                      </td>
                      <td>
                        <p class="order-detail-form-quantity">2</p>
                      </td>
                      <td> 
                        <p class="order-detail-form-subtotal">$998</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="order-detail-form-total">
                  <p class="order-detail-form-total-title">Tổng cộng:</p>
                  <p class="order-detail-form-total-price">$998</p>
                </div>
              </div>
              <button class="order-form-button button" type="submit">Lưu thay đổi</button>
            </div>
          </div>
        </div>
      </main>
    </div>