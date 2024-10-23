<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$product_db->product_name}}</title>
    @include('layout.links')
</head>
<body>
    @include('layout.header')
    <div class="header-tab">
        <div class="tab-item">
            <svg width="15" height="15" fill="none" stroke="#ff0000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <path d="M9 22V12h6v10"></path>
            </svg>
            <a href="">Trang chủ</a>
            <svg width="20" height="20" fill="none" stroke="#9c9696" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
            <a href="">Điện thoại</a>
            <svg width="20" height="20" fill="none" stroke="#9c9696" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
            <a href="">Apple</a>
            <svg width="20" height="20" fill="none" stroke="#9c9696" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
            <a href="">iPhone 15 Series</a>
            <svg width="20" height="20" fill="none" stroke="#9c9696" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
            <a>{{$product_db->product_name}}</a>
        </div>
    </div>
    <main class="main-detail-product">
        <div class="product-name">
            <div class="name">{{$product_db->product_name}}</div>
            <div class="star">
                <svg width="15" height="15" fill="#e6a83d" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                </svg>
                <svg width="15" height="15" fill="#e6a83d" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                </svg>
                <svg width="15" height="15" fill="#e6a83d" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                </svg>
                <svg width="15" height="15" fill="#e6a83d" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                </svg>
                <svg width="15" height="15" fill="#e6a83d" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                </svg>
            </div>
            <div>6 đánh giá</div>
            <button class="compare">+ So sánh</button>
        </div>
        <div class="line"></div>
        <div class="box-detail-product">
            <div class="box-detail-product-left">
                <div class="swiper-detail-product">
                  <div class="swiper-detail">
                    <div class="item-start">
                      <div class="item-img">
                        <img src="images/main/detail_product/xiaomi_14t_2_.webp" height="270px" alt="">
                      </div>
                      <div class="item-conten">
                        <h5>TÍNH NĂNG NỔI BẬT</h5>
                        <ul>
                          <li>Hiệu năng mạnh mẽ với chip MediaTek Dimensity 8300-Ultra - Mang lại hiệu năng tốt cho các tác vụ hàng ngày, từ lướt web, xem video đến chơi game với độ ổn định cao.</li>
                          <li>Thấu kính quang học Leica Summilux - Ghi lại những bức ảnh chi tiết, sắc nét phù hợp với nhu cầu nhiếp ảnh di động và quay phim chất lượng cao.</li>
                          <li>Màn hình 144Hz AMOLED cho màu sắc sống động, độ sáng cao và khả năng tái hiện hình ảnh chân thực, mang lại trải nghiệm xem phim, chơi game tuyệt vời.</li>
                          <li>Xiaomi 14T trang bị pin lớn 5.000mAh, kết hợp với công nghệ sạc nhanh 67W - Sạc đầy nhanh chóng và duy trì thời gian sử dụng suốt cả ngày.</li>
                        </ul>
                      </div>
                    </div>
                    @foreach ($detail_img_db as $item)
                      <a href="">
                        <img src="images/main/detail_product/{{$item->detail_img}}" height="400px" alt="">
                      </a>
                    @endforeach
                    
                  </div>
                  <div class="swiper-detail-nav">
                    <button>
                      <svg width="20" height="20" fill="none" stroke="#bdb2b2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="m12 2 3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <p>Tính năng nổi bật</p>
                    </button>
                    @foreach ($detail_img_db as $item)
                      <button>
                        <img src="images/main/detail_product/{{$item->detail_img}}" height="50px" alt="">
                      </button>
                    @endforeach
                  </div>
                </div>

                <div class="info-store">
                  <div class="info-product">
                    <h6>Thông tin sản phẩm</h6>
                    <div>
                      <svg width="25" height="25" fill="none" stroke="#2f2d2d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                        <path d="M12 18h.01"></path>
                      </svg>
                      <p>Mới, đầy đủ phụ kiện từ nhà sản xuất</p>
                    </div>
                    <div>
                      <svg width="25" height="25" fill="none" stroke="#2f2d2d" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5 6 9l6 4 6-4-6-4Z"></path>
                        <path d="m12 5 6 4 2.5-3.5L15 2l-3 3Z"></path>
                        <path d="M12 5 6 9 3.5 5.5 9 2l3 3Z"></path>
                        <path d="M21.5 11 18 9l-6 4 3.5 2.5 6-4.5Z"></path>
                        <path d="M2.5 11 6 9l6 4-3.5 2.5-6-4.5Z"></path>
                        <path d="M18 14v4.5L12 22l-6-3.5V14"></path>
                        </svg>
                       <p>Hộp, Sách hướng dẫn, Cây lấy sim, Ốp lưng, Cáp Type C, Củ sạc nhanh rời đầu Type A</p>
                    </div>
                    <div>
                      <svg width="25" height="25" fill="none" stroke="#2f2d2d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 3a1 1 0 0 1 1 1v6.165c0 7.381-6.274 10.187-7.71 10.732a.804.804 0 0 1-.58 0C10.274 20.352 4 17.547 4 10.165V4a1 1 0 0 1 1-1h14Z"></path>
                        <path d="m15 9-4 4-2-2"></path>
                        </svg>
                        <p>Bảo hành 24 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà sản xuất. <a href="#">(xem chi tiết)</a></p>
                        
                    </div>
                    <div>
                      <svg width="25" height="25" fill="#2f2d2d" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2 8a3 3 0 0 1 3-3h14a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V8Zm3-1a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H5Z" clip-rule="evenodd"></path>
                        <path fill-rule="evenodd" d="M2 10a1 1 0 0 1 1-1h17.5a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1Z" clip-rule="evenodd"></path>
                        <path fill-rule="evenodd" d="M6 15a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1Z" clip-rule="evenodd"></path>
                        </svg>
                        <p>Giá sản phẩm đã bao gồm VAT</p>
                    </div>
                  </div>

                  <div class="store-product">
                    <div class="area-store">
                      <div class="city">
                        {{$city_default->city_name}}
                      </div>
                      <div><select name="district" id="" class="district">
                        <option value="0">Quận/Huyện</option>
                          @foreach ($district_default as $item)
                            <option value="{{$item->id}}">{{$item->district_name}}</option>
                          @endforeach
                       </select>
                      </div>
                    </div>
                    <p>Có <b class="count-quantity">{{$count_store_product}}</b> cửa hàng có sản phẩm.</p>
                    <div class="phone-address" id="phone-address">
                      @php
                          $count =1;
                      @endphp
                      @foreach ($address_store_product as $item)
                        @if ($count % 2 == 0)
                          <div class="item">
                            <div class="phone">
                              <svg width="15" height="20" fill="#ff0000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.4 3.6a1.2 1.2 0 0 1 1.2-1.2h2.584a1.2 1.2 0 0 1 1.183 1.003l.888 5.322a1.2 1.2 0 0 1-.648 1.272l-1.858.928a13.244 13.244 0 0 0 7.326 7.326l.929-1.858a1.2 1.2 0 0 1 1.27-.648l5.323.888a1.2 1.2 0 0 1 1.003 1.183V20.4a1.2 1.2 0 0 1-1.2 1.2H18C9.384 21.6 2.4 14.616 2.4 6V3.6Z"></path>
                              </svg>
                              <a href="">{{$item->hot_line}}</a>
                            </div>
                            <hr>
                            <div class="address">
                              <svg width="20" height="20" fill="#0d5abf" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 10.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                                  <path d="M12 1.5c-4.135 0-7.5 3.218-7.5 7.172 0 1.883.858 4.387 2.55 7.443 1.36 2.453 2.933 4.672 3.75 5.776a1.49 1.49 0 0 0 2.402 0c.816-1.104 2.39-3.323 3.75-5.776 1.69-3.055 2.548-5.56 2.548-7.443C19.5 4.718 16.135 1.5 12 1.5ZM12 12a3 3 0 1 1 0-5.999A3 3 0 0 1 12 12Z"></path>
                                </svg> 
                                <a href="">{{$item->address}}</a>
                            </div>
                          </div>
                        @else 
                          <div style="background-color:#F2F2F2;">
                            <div class="item" >
                              <div class="phone">
                                <svg width="15" height="20" fill="#ff0000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M2.4 3.6a1.2 1.2 0 0 1 1.2-1.2h2.584a1.2 1.2 0 0 1 1.183 1.003l.888 5.322a1.2 1.2 0 0 1-.648 1.272l-1.858.928a13.244 13.244 0 0 0 7.326 7.326l.929-1.858a1.2 1.2 0 0 1 1.27-.648l5.323.888a1.2 1.2 0 0 1 1.003 1.183V20.4a1.2 1.2 0 0 1-1.2 1.2H18C9.384 21.6 2.4 14.616 2.4 6V3.6Z"></path>
                                </svg>
                                <a href="">{{$item->hot_line}}</a>
                              </div>
                              <hr>
                              <div class="address">
                                <svg width="20" height="20" fill="#0d5abf" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M12 10.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                                    <path d="M12 1.5c-4.135 0-7.5 3.218-7.5 7.172 0 1.883.858 4.387 2.55 7.443 1.36 2.453 2.933 4.672 3.75 5.776a1.49 1.49 0 0 0 2.402 0c.816-1.104 2.39-3.323 3.75-5.776 1.69-3.055 2.548-5.56 2.548-7.443C19.5 4.718 16.135 1.5 12 1.5ZM12 12a3 3 0 1 1 0-5.999A3 3 0 0 1 12 12Z"></path>
                                  </svg>
                                  <a href="">{{$item->address}}</a>
                              </div>
                            </div>
                          </div>
                        @endif
                        @php
                            $count++;
                        @endphp
                      @endforeach
                      <div class="force-overflow"></div>
                    </div>
                  </div>

                  
                </div>

                <div class="buy-with">
                  <button>Mua kèm giá sốc</button>
                  <div class="swiper-buy-with">
                    @php
                      $countItemColor = 0;
                      $buyWithId_tem = 0;
                    @endphp
                    @foreach ($buyWithProduct as $item)
                      @php
                          $buy_with_price_total = number_format($item->price - $item->buy_with_price,0,',','.');
                      @endphp
                      <div class="card">
                        <?php
                          if ($item->buy_with_id != $buyWithId_tem) {
                            $buyWithId_tem = $item->buy_with_id;
                            $countItemColor++;
                            $color = 0;
                            $listPrice = number_format($item->price,0,',','.');
                            ?>
                            <div class="isSelect-product product{{$countItemColor}}">
                              <svg width="25" height="25" fill="#536f49" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2.25c-5.376 0-9.75 4.374-9.75 9.75s4.374 9.75 9.75 9.75 9.75-4.374 9.75-9.75S17.376 2.25 12 2.25Zm5.074 6.482-6.3 7.5a.748.748 0 0 1-.562.268h-.013a.75.75 0 0 1-.557-.248l-2.7-3a.751.751 0 0 1 .88-1.186c.09.045.17.107.234.182l2.123 2.36 5.747-6.84a.75.75 0 0 1 1.148.964Z"></path>
                                </svg>
                            </div>
                            <img src="/images/main/detail_product/buy_with/{{$item->img}}" width="60px" style="margin: auto" alt="">
                            <p class="name-tab">{{$item->product_name}}</p>
                            <div class="price-buy-with">
                              <b id="list-price" style="color: rgb(168, 163, 163)">Giá niêm yết: {{$listPrice}}đ</b><br>
                              <input type="number" name="save-price" id="save-price{{$countItemColor}}" value="{{$item->buy_with_price}}" style="display: none">
                              <b style="color: red">Giá mua kèm: {{$buy_with_price_total}}đ</b>
                              <input type="number" name="buy-with-price" id="buy-with-price{{$countItemColor}}" value="{{$item->price - $item->buy_with_price}}" style="display: none">
                            </div>
                            <div class="color-product product{{$countItemColor}}">
                              @foreach ($colorBuyWithProduct as $value)
                                @if ($value->product_id == $item->buy_with_id)
                                  @php
                                    $color++;
                                  @endphp
                                    <div id="item-product" class="item-product product{{$countItemColor}} color{{$color}}">
                                      <img src="/images/main/detail_product/color_products/{{$value->img_color_product}}" width="25px" style="margin: auto" alt="">
                                      <div class="isSelect-product-color product{{$countItemColor}} color{{$color}}">
                                        <svg width="10" height="10" fill="#536f49" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M12 2.25c-5.376 0-9.75 4.374-9.75 9.75s4.374 9.75 9.75 9.75 9.75-4.374 9.75-9.75S17.376 2.25 12 2.25Zm5.074 6.482-6.3 7.5a.748.748 0 0 1-.562.268h-.013a.75.75 0 0 1-.557-.248l-2.7-3a.751.751 0 0 1 .88-1.186c.09.045.17.107.234.182l2.123 2.36 5.747-6.84a.75.75 0 0 1 1.148.964Z"></path>
                                        </svg>
                                      </div>
                                    </div>
                                @endif
                              @endforeach
                            </div>
                              <button class="select-product product{{$countItemColor}}">Chọn sản phẩm</button>
                            <?php
                          }
                        ?>
                      </div>
                    @endforeach
                  </div>
                </div>

                <div class="provisional">
                  <div class="text-provisional">
                    <b>Tạm tính: <a id="provisional-buy-with">0 đ</a></b><br>
                    <b class="save-price">(Tiết kiệm <a id="provisional-save-price">0 đ</a>)</b>
                  </div>
                  <div class="buy-now-add">
                    <button class="buy-now">MUA NGAY</button>
                    <button class="add-shopping">
                      <svg width="30" height="30" fill="none" stroke="#e8808c" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 21a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
                        <path d="M17 21a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
                        <path d="M17 17H6V3H4"></path>
                        <path d="M19.143 12.002 19 13H6"></path>
                        <path d="m6 5 6.005.429"></path>
                        <path d="M18 3v6-6Zm-3 3h6-6Z"></path>
                        </svg>
                      <p>Thêm vào giỏ</p>
                    </button>
                  </div>
                </div>
                
            </div>
            <div class="box-detail-product-right">
                
            </div>
        </div>
    </main>

    
    <div class="city-popup">
      <div class="city-form">
        <div class="form-header">
          <form action="#" method="post">
            <div class="search">
              <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="m21.407 19.753-4.41-4.41a8.148 8.148 0 0 0 1.633-4.903c0-4.516-3.674-8.19-8.19-8.19s-8.19 3.674-8.19 8.19 3.674 8.19 8.19 8.19a8.148 8.148 0 0 0 4.902-1.633l4.41 4.41a1.171 1.171 0 0 0 1.655-1.654ZM4.59 10.44a5.85 5.85 0 1 1 5.85 5.85 5.857 5.857 0 0 1-5.85-5.85Z"></path>
              </svg>
              <input type="search" name="name_city" id="" placeholder="Nhập tên tỉnh thành">
            </div>
          </form>
          <div class="close-form">
            Đóng
            <svg width="25" height="25" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 6 6 18"></path>
              <path d="m6 6 12 12"></path>
              </svg>
          </div>
        </div>
        <div class="form-body">
          <p>Vui lòng chọn tỉnh, thành phố để biết chính xác giá, khuyến mãi và tồn kho</p>
          <div class="data-city">
            @foreach ($city as $item)
            {{-- @if ($item->city_name == 'Hồ Chí Minh')
              <div class="item-city">
                {{$item->city_name}}

                <svg width="25" height="25" fill="#ff0000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 2.25c-5.376 0-9.75 4.374-9.75 9.75s4.374 9.75 9.75 9.75 9.75-4.374 9.75-9.75S17.376 2.25 12 2.25Zm-1.781 14.643L6.44 12.694l1.115-1.003 2.625 2.916 6.225-7.414 1.15.963-7.337 8.737Z"></path>
                </svg>
              </div>
            @else
              <div class="item-city">
                {{$item->city_name}}
              </div>
            @endif --}}
            <ul>
              <li class="item-city" data-city-id="{{$item->id}}">{{$item->city_name}}</li>
            </ul>
            @endforeach
          </div>
        </div>
      </div>  
    </div>
</body>

<script>
    $(document).ready(function(){
      $('.swiper-detail').slick({
        rows: 1,
        slidesToScroll: 1,
        slidesToShow: 1,
        arrows: true,
        infinite: false,
        asNavFor: '.swiper-detail-nav',
        prevArrow: 
        `<button style='button' id="swiper-button-prev" class='slick-prev pull-left'>
          <svg width="40" height="40" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-left:-5px">
            <path fill-rule="evenodd" d="M14.03 7.47a.75.75 0 0 1 0 1.06L10.56 12l3.47 3.47a.75.75 0 1 1-1.06 1.06l-4-4a.75.75 0 0 1 0-1.06l4-4a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"></path>
          </svg>
        </button>`,
        nextArrow:
        `<button style='button' id="swiper-button-next" class='slick-next pull-right'> 
          <svg width="40" height="40" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-left:-15px">
            <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
          </svg>
        </button>`,
      })
    });

  $(document).ready(function(){
    $('.swiper-detail-nav').slick({
      slidesToScroll: 1,
      slidesToShow: 10,
      arrows: false,
      asNavFor: '.swiper-detail ',
      infinite: false,
      focusOnSelect: true,
    }).on('beforeChange', function(event, slick, currentSlide, nextSlide){
      if (nextSlide < currentSlide) {
          event.preventDefault();
        }
    })
  });

  $(document).ready(function(){
    $('.swiper-buy-with').slick({
      slidesToShow:4,
      slidesToScroll:2,
      arrows: true,
      infinite: false,
      centerMode: false,
      prevArrow: 
        `<button style='button' id="swiper-button-prev" class='slick-prev pull-left'>
          <svg width="25" height="25" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="m15 18-6-6 6-6"></path>
          </svg>
        </button>`,
      nextArrow:
        `<button style='button' id="swiper-button-next" class='slick-next pull-right'> 
          <svg width="25" height="25" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="m9 18 6-6-6-6"></path>
          </svg>
        </button>`,
    }).on('afterChange',function(event, slick, currentSlide){
        var $this = $(this);
        var $prevArrow = $this.find('.slick-prev');
        var $nextArrow = $this.find('.slick-next');
        if(currentSlide === 0){
          $prevArrow.hide();
        } else {
          $prevArrow.show();
        }
        
        if(currentSlide === (slick.slideCount / 2)){
          $nextArrow.hide();
        } else {
          $nextArrow.show();
        }
    });

    //Lấy số lượng item slider
    var totalItems = $('.swiper-buy-with').slick('getSlick').slideCount;
    let priceValue = 0;
    let savePriceValue = 0;
    for (let index = 1; index <= totalItems; index++) {
      //group btn chọn màu sp
      //const btnGroup = document.querySelector('.color-product');
      const buttons = document.querySelectorAll('.item-product.product'+index);
      buttons.forEach(btn =>{
        btn.addEventListener('click',function(){
          buttons.forEach(btn => btn.classList.remove('active'));
          btn.classList.add('active');
        })
      })

      const btnSelectProduct = document.querySelector('.select-product.product'+index);
      const checkIsSelectProduct = document.querySelector('.isSelect-product.product' + index);
      const checkIsSelectColorProduct = document.querySelector('.isSelect-product-color.product' + index);
      
      const ColorProduct = document.querySelector('.color-product.product'+ index);
      const countChildDivsColorProduct = ColorProduct.querySelectorAll('.item-product.product'+ index);

      //kiem tra da con sp mua kem ch
      const checkIsSelectProductBuyWith = document.querySelectorAll('.isSelect-product');
      //btn mua hang or add gio hang
      const btnBuyNow = document.querySelector('.buy-now');
      const btnAddShopping = document.querySelector('.add-shopping');

      //gán value provisionalBuyWith
      const provisionalBuyWith = document.querySelector('#provisional-buy-with');
      const provisionalSavePrice = document.querySelector('#provisional-save-price');
      

      //Kiem tra da chon sp mua kem ch
      function isSelectColorProduct(){
        if ($(".isSelect-product-color").hasClass("active")) {
          btnBuyNow.classList.add('active');
          btnAddShopping.classList.add('active');
        }else{
          btnBuyNow.classList.remove('active');
          btnAddShopping.classList.remove('active');
        }
      }

      btnSelectProduct.addEventListener('click',function(){
        // kiểm tra xem item có được chọn màu hay chưa 
        for (let i = 1; i <= countChildDivsColorProduct.length; i++) {
          const activeItemProduct = document.querySelector('.item-product.product' + index + '.color' + i);
          const checkIsSelectProductColor = document.querySelector('.isSelect-product-color.product' + index + '.color' + i);
          //Bỏ lựa chọn màu 
          if (btnSelectProduct.classList.contains("isSelect")) {
            if (activeItemProduct.classList.contains("active")) {
              btnSelectProduct.textContent = "Chọn sản phẩm";
              btnSelectProduct.classList.remove('isSelect');
              checkIsSelectProduct.classList.remove('active');
              checkIsSelectProductColor.classList.remove('active');

              isSelectColorProduct();
              // trừ giá mua kèm
              priceValue -= Number( $('#buy-with-price'+index).val());
              savePriceValue -= Number( $('#save-price'+index).val());
              provisionalBuyWith.textContent = priceValue.toLocaleString('de-DE') + " đ";
              provisionalSavePrice.textContent = savePriceValue.toLocaleString('de-DE') + " đ";
              continue;
            }
            
          }else{
            //Lựa chọn màu 
            if (activeItemProduct.classList.contains("active")) {
              btnSelectProduct.textContent = "Bỏ chọn sản phẩm";
              btnSelectProduct.classList.add('isSelect');
              checkIsSelectProduct.classList.add('active');
              checkIsSelectProductColor.classList.add('active');
              
              isSelectColorProduct();
              //Lấy giá mua kèm 
              priceValue += Number( $('#buy-with-price'+index).val());
              savePriceValue += Number( $('#save-price'+index).val());
              provisionalBuyWith.textContent = priceValue.toLocaleString('de-DE') + " đ";
              provisionalSavePrice.textContent = savePriceValue.toLocaleString('de-DE') + " đ";

              continue;
            }
          }
        }
      })

      

      //khi click chọn màu sẽ thay đổi btn chọn giữa các màu đã và chưa được chọn
      for (let i = 1; i <= countChildDivsColorProduct.length; i++) {
        $(document).ready(function(){
          $(".item-product.product" + index + ".color" + i).click(function(){
            if ($(".isSelect-product-color.product" + index + ".color" + i).hasClass("active")) {
              btnSelectProduct.textContent = "Bỏ chọn sản phẩm";
              btnSelectProduct.classList.add('isSelect');
              checkIsSelectProduct.classList.add('active');
            }else{
              btnSelectProduct.textContent = "Chọn sản phẩm";
              btnSelectProduct.classList.remove('isSelect');
              checkIsSelectProduct.classList.remove('active');
            }
          })
        })
      }
      
    }
  })
</script>

<script>
  $(document).ready(function(){
    $(".swiper-detail .slick-prev").hide();
    $(".swiper-detail .slick-next").hide();
    $(".swiper-detail-product").hover(
        function(){
            $(".swiper-detail .slick-prev").fadeIn(100); // Hiển thị div con khi hover
        },
        function(){
            $(".swiper-detail .slick-prev").fadeOut(100); // Ẩn div con khi chuột rời đi
        }
    );

    $(".swiper-detail-product").hover(
        function(){
            $(".swiper-detail .slick-next").fadeIn(100); // Hiển thị div con khi hover
        },
        function(){
            $(".swiper-detail .slick-next").fadeOut(100); // Ẩn div con khi chuột rời đi
        }
    );
  });
</script>

<script>
  //dialog form city
  $(document).ready(function(){
    $(".city").click(function(){
      $(".city-popup").fadeIn(100);
    })

    $(".city-popup").click(function(){
      $(".city-popup").fadeOut(100);
    })

    $(".close-form").click(function(){
      $(".city-popup").fadeOut(100);
    })

    $(".city-form").click(function(event) {
      event.stopPropagation();
    })
  })
</script>

{{-- Lấy data-city-id của li city --}}
<script>
  document.querySelectorAll(".item-city").forEach(function(item){
    item.addEventListener('click',function(){
      var city_id = this.getAttribute('data-city-id');
      //console.log(city_id);
      $.ajax({
        url: "{{route('data-city')}}",
        method: "POST",
        data: { 
          id: city_id,
          _token: '{{ csrf_token() }}'
        },
        success: function(response) {
            // Xử lý phản hồi từ server
            $(".city").html(response.city_name);
            $(".district").html(response.district_db);
            $(".count-quantity").html(response.count_store_product);
            $(".phone-address").html(response.output_address);
        }
      });
      $(".city-popup").fadeOut(100);
    })
  })
</script>

{{-- Lấy số lượng và address của store có sp theo huyện  --}}
<script>
  $('.district').change(function() {
    var selectedValue = $(this).val();
    var city = document.querySelector('.city');
    var city_name = city.textContent;
    //console.log('Selected Value:', selectedValue);
    $.ajax({
        url: "{{route('district-select')}}",
        method: "POST",
        data: { 
          id: selectedValue,
          city_name: city_name,
          _token: '{{ csrf_token() }}'
        },
        success: function(response) {
            // Xử lý phản hồi từ server
            $(".count-quantity").html(response.count_store_product);
            $(".phone-address").html(response.output_address);
        }
      });
  });
</script>

{{-- thay đổi width theo value --}}
<script>
  // const input = document.querySelector('.price-buy-with');

  // input.addEventListener('input', function() {
  //     this.style.width = `${this.value.length + 1}ch`;
  // });

  // // Initial width adjustment
  // input.style.width = `${input.value.length + 1}ch`;

</script>
</html>