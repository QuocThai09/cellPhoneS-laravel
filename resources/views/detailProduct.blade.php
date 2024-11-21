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
                  @foreach ($product_color as $val)
                    @if ($val->img_color_product == $item->detail_img)
                      @if ($val->id == $color_id)
                        <a href="" data-colorid ="{{$val->id}}" class="slider-item">
                          <img src="images/main/detail_product/{{$item->detail_img}}" height="400px" alt="">
                        </a>
                      @endif
                    @else
                      <a href="">
                        <img src="images/main/detail_product/{{$item->detail_img}}" height="400px" alt="">
                      </a>
                    @endif
                  @endforeach
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
                            <div class="price-buy-with" data-price="{{$item->price - $item->buy_with_price}}">
                              <b id="list-price" style="color: rgb(168, 163, 163)">Giá niêm yết: {{$listPrice}}đ</b><br>
                              <input type="hidden" name="save-price" id="save-price{{$countItemColor}}" value="{{$item->buy_with_price}}">
                              <b style="color: red">Giá mua kèm: {{$buy_with_price_total}}đ</b>
                              <input type="hidden" name="buy-with-price" id="buy-with-price{{$countItemColor}}" value="{{$item->price - $item->buy_with_price}}">
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
            <form action="{{ route('shopping-cart') }}" method="post">
              @csrf
              <input type="hidden" name="product_id" value="{{$product_db->product_id}}">
              <div class="similar-products">
                @if ($count_product_similar > 1)
                  @foreach ($product_similar as $item)
                    @if ($item->short_name == $product_db->short_name)
                      <a href="{{ route('detailProduct', ['slug'=>$item->slug]) }}" class="isSelect">
                        <div class="content-similar">
                          <b>{{$item->short_name}}</b>
                          <p>
                            {{number_format($item->price,0,',','.')}} đ
                          </p>
                        </div>
                        <div class="checkked">
                          <svg width="15" height="15" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="m6.286 13.143 3.428 3.428L18.89 7.43"></path>
                            </svg>
                        </div>
                      </a>
                    @else
                      <a href="{{ route('detailProduct', ['slug'=>$item->slug]) }}">
                        <div class="content-similar">
                          <b>{{$item->short_name}}</b>
                          <p>
                            {{number_format($item->price,0,',','.')}} đ
                          </p>
                        </div>
                        <div>
                        </div>
                      </a>
                    @endif
                  @endforeach
                @endif
              </div>
              <div class="color-store">
                <b>Chọn màu để xem giá và chi nhánh có hàng</b>
                <input type="hidden" name="color_id" value="{{$color_id}}">
                <div class="pick-color">
                  @foreach ($product_color as $item)
                    @php
                      $url = '/'.$item->slug.'.html?color_id='.$item->id;
                    @endphp
                    @if ($item->id == $color_id)
                      <a href="{{$url}}" class="isSelect">
                        <div class="content-color" data-colorid ="{{$item->id}}">
                          <img src="/images/main/detail_product/color_products/{{$item->img_color_product}}" alt="" width="40px">
                          <div class="content">
                            <b>{{$item->name_color}}</b><br>
                            <h>
                              {{number_format($item->price_color,0,',','.')}} đ
                            </h>
                          </div>
                          <div class="checkked">
                            <svg width="15" height="15" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path d="m6.286 13.143 3.428 3.428L18.89 7.43"></path>
                              </svg>
                          </div>
                        </div>
                      </a>
                    @else
                      <a href="{{$url}}">
                        <div class="content-color" data-colorid ="{{$item->id}}">
                          <img src="/images/main/detail_product/color_products/{{$item->img_color_product}}" alt="" width="40px">
                          <div class="content">
                            <b>{{$item->name_color}}</b><br>
                            <h>
                              {{number_format($item->price_color,0,',','.')}} đ
                            </h>
                          </div>
                          <div>
                          </div>
                        </div>
                      </a>
                    @endif
                  @endforeach
                </div>
              </div>
              <h6>Giá niêm yết: <b style="color: red">{{number_format($product_db->price,0,',','.')}}đ</b></h6>
              <div class="discount-student">
                <div class="group-discount">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30px" height="30px">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5C9 5 10 3.5 12 3.5C14 3.5 15 5 15 5C15 5 17 5 18 6C19 7 19 9 19 9C19 9 20.5 10 20.5 12C20.5 14 19 15 19 15C19 15 19 17 18 18C17 19 15 19 15 19C15 19 14 20.5 12 20.5C10 20.5 9 19 9 19C9 19 7 19 6 18C5 17 5 15 5 15C5 15 3.5 14 3.5 12C3.5 10 5 9 5 9C5 9 5 7 6 6C7 5 9 5 9 5ZM9 15L15 9M9 9L9 9M15 15L15 15" />
                  </svg>
                  <div class="content">
                    <h>Giá khuyến mãi</h><br>
                    <b>{{number_format($item->price-($item->price*($item->discount/100)),0,',','.');}}đ</b>
                  </div>
                </div>
                <div class="group-student active">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30px" height="30px">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5L3 9L12 13L21 9L12 5ZM7 11L6 18C6 18 9 19 12 19C15 19 18 18 18 18L17 11M21 9L21 14" />
                  </svg>
                  <div class="content">
                    <h>Đặt quyền {{$discount_product->discount_name}}</h><br>
                    <b>{{number_format($item->price-$discount_product->discount_price,0,',','.');}}đ</b>
                  </div>
                </div>
              </div>
              <div class="s-student">
                <div class="title">
                  <svg width="25" height="25" fill="none" stroke="#d70018" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 13h16v7a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7Z"></path>
                    <path d="M2 9h20v4H2V9Z"></path>
                    <path d="M12 5v17"></path>
                    <path d="M12 5.5A3.5 3.5 0 1 0 8.5 9"></path>
                    <path d="M15.5 9A3.5 3.5 0 1 0 12 5.5"></path>
                  </svg>
                  <b>Quà tặng đặc quyền SVip</b>
                </div>
                <div class="body-student">
                  <ul>
                    <li>Giảm thêm 5% (tối đa 500.000đ) khi thu cũ lên đời</li>
                    <li>Tham gia chương trình đặt trước sản phẩm không cần đặt cọc tiền</li>
                    <li>Tổng đài hỗ trợ và chăm sóc đặc biệt <a href="#">1800.2097</a></li>
                  </ul>
                </div>
              </div>
              <div class="swiper-price-discount">
                <a href="">
                  <img src="images/main/slider_sale/study/product-dien-thoai-xiaomi.webp" width="100%" alt="">
                </a>
                <a href="">
                  <img src="images/main/slider_sale/study/iPhone-product-banner-v1.webp" width="100%" alt="">
                </a>
              </div>
              <div class="infor-discount">
                <div class="title">
                  <svg width="25" height="25" fill="#d70018" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.75 19.5a3 3 0 0 0 3 3h4.313a.188.188 0 0 0 .187-.188v-8.625a.188.188 0 0 0-.188-.187H4.125a.375.375 0 0 0-.375.375V19.5Z"></path>
                    <path d="M11.25 11.814V6.75h1.5v5.063a.188.188 0 0 0 .188.187H19.5a2.247 2.247 0 0 0 1.836-.951c.269-.38.413-.834.414-1.299V9a2.25 2.25 0 0 0-2.25-2.25h-1.9a.094.094 0 0 1-.093-.094c0-.016.005-.032.013-.046A3.375 3.375 0 0 0 12 2.758a3.375 3.375 0 0 0-5.52 3.853.094.094 0 0 1-.08.14H4.5a2.25 2.25 0 0 0-2.25 2.25v.75a2.254 2.254 0 0 0 1.5 2.121c.24.086.494.13.75.13h6.563a.187.187 0 0 0 .187-.188Zm1.5-6.938a1.875 1.875 0 1 1 1.875 1.875H12.75V4.876Zm-3.51-1.87a1.875 1.875 0 0 1 2.01 1.87v1.875H9.375a1.875 1.875 0 0 1-.134-3.745Z"></path>
                    <path d="M12.938 22.5h4.312a3 3 0 0 0 3-3v-5.625a.375.375 0 0 0-.375-.375h-6.938a.188.188 0 0 0-.187.188v8.624a.188.188 0 0 0 .188.188Z"></path>
                  </svg>
                  Khuyến mãi
                </div>
                <div class="info">
                  <div class="info-item">
                    <b class="number">1</b>
                    <a href="">Đồng hồ XIAOMI REDMI WATCH 4 mua kèm điện thoại hoặc tablets Xiaomi chỉ còn 1.990.000  ( không kèm các khuyến mãi khác và chỉ áp dụng mua kèm trên cùng 1 hóa đơn)</a>
                  </div>
                  <div class="info-item">
                    <b class="number">2</b>
                    <a href="">Tặng bảo hành Premium</a>
                  </div>
                  <div class="info-item">
                    <b class="number">3</b>
                    <a href="">Giảm 200.000 khi mua kèm Đồng hồ Redmi Watch 5 Active/Lite với điện thoại hoặc máy tính bảng Xiaomi (không kèm các khuyến mãi khác và chỉ áp dụng mua kèm trên cùng 1 hóa đơn)</a>
                  </div>
                  <div class="info-item">
                    <b class="number">4</b>
                    <a href="">Nhận thêm 1 trong các khuyến mãi sau:</a><br>
                    <div class="extra">
                      <div class="tab">Khuyến mãi 1</div>
                      Tặng bộ sạc nhanh Xiaomi 120W (Không áp dụng cùng trợ giá thu cũ lên đời) <a href="#">(xem chi tiết)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="btn-buy-now">
                <button class="buy-now-pri" type="submit">
                  <strong>MUA NGAY</strong>
                  <span>(Giao nhanh từ 2 giờ hoặc nhận tại cửa hàng)</span>
                </button>
                <button class="add-shopping-pri">
                  <svg width="25" height="25" fill="none" stroke="#e00b0c" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 21a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
                    <path d="M17 21a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
                    <path d="M17 17H6V3H4"></path>
                    <path d="M19.143 12.002 19 13H6"></path>
                    <path d="m6 5 6.005.429"></path>
                    <path d="M18 3v6-6Zm-3 3h6-6Z"></path>
                    </svg>
                  <span>Thêm vào giỏ</span></button>
              </div>
              <div class="btn-installment">
                <button class="installment-cash btn-medium">
                  <strong>TRẢ GÓP 0%</strong>
                  <span>Trả trước chỉ từ 2.598.000₫</span>
                </button>
                <button class="installment-card btn-medium">
                  <strong >TRẢ GÓP 0% QUA THẺ</strong>
                  <span>(Không phí chuyển đổi 3 - 6 tháng)</span>
                </button>
              </div>
              <div class="btn-timhieuthem">
                <a href="#">
                  <strong>Thu cũ lên đời</strong>
                  <span>Chỉ từ 10.860.000đ</span>
                </a>
              </div>
              <div class="extra-offer">
                <div class="title">ƯU ĐÃI THÊM</div>
                <div class="content-offer">
                  <ul>
                    <li><a href="#">Xem chính sách ưu đãi dành cho thành viên Smember</a></li>
                    <li><img src="/images/main/detail_product/extra_offer/logo-techcom-update.webp" alt=""><a href="#">Giảm đến 500K khi thanh toán bằng thẻ ghi nợ Techcombank</a></li>
                    <li><img src="/images/main/detail_product/extra_offer/hsbc_icon.webp"><a href="#">Hoàn tiền đến 2 triệu khi mở thẻ tín dụng HSBC</a></li>
                    <li><img src="/images/main/detail_product/extra_offer/DUMT_ZV0.webp"><a href="#">Giảm đến 700.000đ khi thanh toán qua Krediv</a></li>
                    <li><a href="#">Liên hệ B2B để được tư vấn giá tốt nhất cho khách hàng doanh nghiệp khi mua số lượng nhiều</a></li>
                  </ul>
                </div>
              </div>
              <div class="box-warranty">
                <div class="box-head">
                  <div>
                    <svg width="30" height="30" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="m9 12 2 2 4-4"></path>
                      <path d="M20.618 5.984A11.955 11.955 0 0 1 12 2.944a11.955 11.955 0 0 1-8.618 3.04A12.02 12.02 0 0 0 3 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016Z"></path>
                    </svg>
                  </div>
                  <div>
                    <b>Bảo vệ sản phẩm toàn diện với dịch vụ bảo hành mở rộng <a href="">Xem chi tiết</a></b><br>
                    <p>(Khách hàng đăng ký thông tin để được hỗ trợ tư vấn và thanh toán tại cửa hàng nhanh nhất, số tiền phải thanh toán chưa bao gồm giá trị của gói bảo hành mở rộng)</p>
                  </div>
                </div>
                <div class="list-warranty">
                  @foreach ($warranty_product as $item)
                  <label class="radio-btn-choose-warranty lb{{$item->id}}">
                    <input type="radio" name="extendedWarranty" id="extendedWarranty{{$item->id}}" value="{{$item->id}}" class="btn-radio-choose">
                    {{$item->warranty_name}}
                    <span class="content-warranty">
                      <span class="price">{{number_format($item->warranty_price,0,',','.')}}đ</span>
                      <button data-id="{{$item->id}}" id="btn-detail-warranty" class="button-show-warranty"><em>Xem chi tiết</em></button>
                    </span>
                  </label>
                  @endforeach
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="line"></div>
        <div class="product-similar">
          <h6>SẢN PHẨM TƯƠNG TỰ</h6>
          <div class="swiper-similar">
            @foreach ($product_similar_swiper as $item)
            @php
              $formattedPrice = number_format($item->price, 0, ',', '.');
            @endphp
            @if ($item->discount == null)
              <div style="margin: 10px">
                <div class="discount-tab1" style="visibility: hidden"></div>
                <div class="discount-tab2" style="visibility: hidden"></div>
                <a class="link-slider-item" href="{{ route('detailProduct', ['slug'=>$item->slug]) }}">
                  <div class="card">
                    <div class="discount" style="visibility: hidden">
                    </div>
                    <div class="installment">
                      Trả góp 0%
                    </div>
                    <img src="/images/main/mobile/{{$item->img}}" width="75%" loading="lazy" style="margin: auto"  alt="">
                    <h6 class="name-tab">{{$item->product_name}}</h6>
                    <div class="price">
                      <p class="price-discount">{{$formattedPrice}}đ</p>
                      <p class="price-decoration" style="visibility: hidden">{{$formattedPrice}}đ</p>
                    </div>
                    <div class="ship-cmt">
                      Không phí chuyển đổi khi trả góp 0% qua thẻ tín dụng kỳ hạn 3-6...
                    </div>
                    <div class="footer-items">
                      <div class="star">
                        @for ($j = 0; $j < 4; $j++)
                          <svg width="20" height="20" fill="#fdd821" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin: -3px">
                            <path d="M12.865 2.996a1 1 0 0 0-1.73 0L8.421 7.674a1.25 1.25 0 0 1-.894.608L2.44 9.05c-.854.13-1.154 1.208-.488 1.76l3.789 3.138c.35.291.515.75.43 1.197L5.18 20.35a1 1 0 0 0 1.448 1.072l4.79-2.522a1.25 1.25 0 0 1 1.164 0l4.79 2.522a1 1 0 0 0 1.448-1.072l-.991-5.205a1.25 1.25 0 0 1 .43-1.197l3.79-3.139c.665-.55.365-1.63-.49-1.759l-5.085-.768a1.25 1.25 0 0 1-.895-.608l-2.714-4.678Z"></path>
                          </svg>
                        @endfor
                        <svg width="20" height="20" fill="#fdd821" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12.5 2.462c0-.26-.208-.488-.45-.395a.987.987 0 0 0-.504.431L8.832 7.175a1.25 1.25 0 0 1-.894.61l-5.086.767c-.855.13-1.154 1.208-.489 1.76l3.79 3.138c.35.29.515.75.43 1.197l-.992 5.205a1 1 0 0 0 1.449 1.072l4.79-2.522c.046-.025.094-.046.143-.065.271-.101.527-.322.527-.613V2.462Z"></path>
                          </svg>
                      </div>
                      <div class="like">
                        <p>Yêu thích</p>
                        <svg width="25" height="25" fill="#e83030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M3.25 10.03c0-2.7 2.37-4.78 5.15-4.78 1.433 0 2.695.672 3.6 1.542.905-.87 2.166-1.542 3.6-1.542 2.78 0 5.15 2.08 5.15 4.78 0 1.85-.789 3.476-1.882 4.852-1.09 1.372-2.518 2.537-3.884 3.484-.523.362-1.05.695-1.534.941-.454.231-.975.443-1.45.443s-.996-.212-1.45-.443a13.795 13.795 0 0 1-1.533-.941c-1.367-.947-2.794-2.112-3.885-3.484C4.039 13.506 3.25 11.88 3.25 10.03ZM8.4 6.75c-2.08 0-3.65 1.53-3.65 3.28 0 1.403.596 2.71 1.556 3.918.962 1.21 2.257 2.279 3.565 3.185.495.343.96.634 1.36.838.428.218.676.279.769.279.093 0 .341-.061.77-.28a12.35 12.35 0 0 0 1.36-.837c1.307-.906 2.602-1.974 3.564-3.185.96-1.208 1.556-2.515 1.556-3.918 0-1.75-1.57-3.28-3.65-3.28-1.194 0-2.31.713-3.005 1.619a.75.75 0 0 1-1.19 0C10.71 7.463 9.595 6.75 8.4 6.75Z" clip-rule="evenodd"></path>
                          </svg>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            @else
              @php
                  $discount = $item->price-($item->price*($item->discount/100));
                  $formattedDiscount = number_format($discount,0,',','.');
              @endphp
              <div style="margin: 10px">
                <div class="discount-tab1" ></div>
                <div class="discount-tab2" ></div>
                <a class="link-slider-item" href="{{ route('detailProduct', ['slug'=>$item->slug]) }}">
                  <div class="card">
                    <div class="discount">
                      Giảm {{$item->discount}}%
                    </div>
                    <div class="installment">
                      Trả góp 0%
                    </div>
                    <img src="/images/main/mobile/{{$item->img}}" width="75%" style="margin: auto"  alt="">
                    <h6 class="name-tab">{{$item->product_name}}</h6>
                    <div class="price">
                      <p class="price-discount">{{$formattedDiscount}}đ</p>
                      <p class="price-decoration">{{$formattedPrice}}đ</p>
                    </div>
                    <div class="ship-cmt">
                      Không phí chuyển đổi khi trả góp 0% qua thẻ tín dụng kỳ hạn 3-6...
                    </div>
                    <div class="footer-items">
                      <div class="star">
                        @for ($j = 0; $j < 4; $j++)
                          <svg width="20" height="20" fill="#fdd821" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin: -3px">
                            <path d="M12.865 2.996a1 1 0 0 0-1.73 0L8.421 7.674a1.25 1.25 0 0 1-.894.608L2.44 9.05c-.854.13-1.154 1.208-.488 1.76l3.789 3.138c.35.291.515.75.43 1.197L5.18 20.35a1 1 0 0 0 1.448 1.072l4.79-2.522a1.25 1.25 0 0 1 1.164 0l4.79 2.522a1 1 0 0 0 1.448-1.072l-.991-5.205a1.25 1.25 0 0 1 .43-1.197l3.79-3.139c.665-.55.365-1.63-.49-1.759l-5.085-.768a1.25 1.25 0 0 1-.895-.608l-2.714-4.678Z"></path>
                          </svg>
                        @endfor
                        <svg width="20" height="20" fill="#fdd821" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12.5 2.462c0-.26-.208-.488-.45-.395a.987.987 0 0 0-.504.431L8.832 7.175a1.25 1.25 0 0 1-.894.61l-5.086.767c-.855.13-1.154 1.208-.489 1.76l3.79 3.138c.35.29.515.75.43 1.197l-.992 5.205a1 1 0 0 0 1.449 1.072l4.79-2.522c.046-.025.094-.046.143-.065.271-.101.527-.322.527-.613V2.462Z"></path>
                          </svg>
                      </div>
                      <div class="like">
                        <p>Yêu thích</p>
                        <svg width="25" height="25" fill="#e83030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M3.25 10.03c0-2.7 2.37-4.78 5.15-4.78 1.433 0 2.695.672 3.6 1.542.905-.87 2.166-1.542 3.6-1.542 2.78 0 5.15 2.08 5.15 4.78 0 1.85-.789 3.476-1.882 4.852-1.09 1.372-2.518 2.537-3.884 3.484-.523.362-1.05.695-1.534.941-.454.231-.975.443-1.45.443s-.996-.212-1.45-.443a13.795 13.795 0 0 1-1.533-.941c-1.367-.947-2.794-2.112-3.885-3.484C4.039 13.506 3.25 11.88 3.25 10.03ZM8.4 6.75c-2.08 0-3.65 1.53-3.65 3.28 0 1.403.596 2.71 1.556 3.918.962 1.21 2.257 2.279 3.565 3.185.495.343.96.634 1.36.838.428.218.676.279.769.279.093 0 .341-.061.77-.28a12.35 12.35 0 0 0 1.36-.837c1.307-.906 2.602-1.974 3.564-3.185.96-1.208 1.556-2.515 1.556-3.918 0-1.75-1.57-3.28-3.65-3.28-1.194 0-2.31.713-3.005 1.619a.75.75 0 0 1-1.19 0C10.71 7.463 9.595 6.75 8.4 6.75Z" clip-rule="evenodd"></path>
                          </svg>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            @endif
          @endforeach
          </div>
        </div>
        <div class="line"></div>
        <div class="parameter">
          <div class="highligh-question">
            <div class="highligh">
              <div class="detail">
                <h2>Đặc điểm nổi bật của {{$product_db->product_name}}</h2>
                <ul>
                  @foreach ($characteristic_product as $item)
                    <li>{{$item->characteristic_name}}</li>
                  @endforeach
                </ul>
              </div>
              <strong class="intro">
                <a href="#">{{$product_db->short_name}}</a>
                <span>{{$product_db->product_intro}}</span>
              </strong>
              <div class="price-list">
                <div class="title">
                  <h2>
                    <strong>Bảng giá {{$product_db->series}} mới nhất T{{date('m')}}/{{date('Y')}}</strong>
                  </h2>
                  <p>Bảng giá {{$product_db->short_name}} chính hãng tại CellphoneS tháng T{{date('m')}}/{{date('Y')}}</p>
                </div>
                <table class="table-price-list">
                  <thead>
                    <tr>
                      <th>Sản phẩm</th>
                      <th>Giá bán</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($product_similar as $item)
                      <tr>
                        <td class="name">{{$item->product_name}}</td>
                        <td>{{number_format($item->price,0,',','.')}}đ</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="showmore">
                <div class="btn-show">
                  Xem thêm
                  <svg width="15" height="20" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="m6 9 6 6 6-6"></path>
                  </svg>
                </div>
              </div>
            </div>
            <div class="question">
              <h2>Câu hỏi thường gặp</h2>
              <div class="tablist">
                @foreach ($question_product as $item)
                  <div class="rol id{{$item->id}}">
                    <span>{{$item->question}}</span>
                    <svg width="20" height="20" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="m9 18 6-6-6-6"></path>
                    </svg>
                  </div>
                  <div id="ans-rol{{$item->id}}" class="ans-rol">
                    <span>{{$item->answer}}</span>
                  </div>
                  {{-- js show answer --}}
                  <script>
                    $(document).ready(function(){
                      let flat = false;
                      $('.rol.id'+{{$item->id}}).click(function(){
                        flat = !flat;
                        if(flat){
                          $('#ans-rol'+{{$item->id}}).show();
                        }else{
                          $('#ans-rol'+{{$item->id}}).hide();
                        }
                      })
                    })
                   </script>
                @endforeach
              </div>
            </div>
            <div class="feedback">
              <h2>Đánh giá & nhận xét Xiaomi 14T 12GB 512GB</h2>
              <div class="boxReview">
                <div class="boxReview-score">
                  <h4>5.0/5</h4>
                  @for ($i = 1; $i < 6; $i++)
                  <svg width="20" height="20" fill="#ffbf00" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                  </svg>
                  @endfor
                  <br>
                  <a href="#">2 đánh giá</a>
                </div>
                <div class="line-vertical"></div>
                <div class="boxReview-star">
                  <div class="range-level">
                    <div class="star-count">
                      <span>5</span>
                      <svg width="15" height="15" fill="#ffbf00" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                      </svg>
                    </div>
                    <progress class="progress-star" max="2" value="2"></progress>
                    <span>2 đánh giá</span>
                  </div>
                  <div class="range-level">
                    <div class="star-count">
                      <span>4</span>
                      <svg width="15" height="15" fill="#ffbf00" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                      </svg>
                    </div>
                    <progress class="progress-star" max="2" value="0"></progress>
                    <span>0 đánh giá</span>
                  </div>
                  <div class="range-level">
                    <div class="star-count">
                      <span>3</span>
                      <svg width="15" height="15" fill="#ffbf00" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                      </svg>
                    </div>
                    <progress class="progress-star" max="2" value="0"></progress>
                    <span>0 đánh giá</span>
                  </div>
                  <div class="range-level">
                    <div class="star-count">
                      <span>2</span>
                      <svg width="15" height="15" fill="#ffbf00" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                      </svg>
                    </div>
                    <progress class="progress-star" max="2" value="0"></progress>
                    <span>0 đánh giá</span>
                  </div>
                  <div class="range-level">
                    <div class="star-count">
                      <span>1</span>
                      <svg width="15" height="15" fill="#ffbf00" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                      </svg>
                    </div>
                    <progress class="progress-star" max="2" value="0"></progress>
                    <span>0 đánh giá</span>
                  </div>
                </div>
              </div>
              <div class="line"></div>
              <div class="box-experience-review">
                <h2>Đánh giá theo trải nghiệm</h2>
                <div class="experience-item">
                  <span>Hiệu năng</span>
                  <div class="experience-star">
                    <div>
                      @for ($i = 1; $i < 6; $i++)
                      <svg width="15" height="15" fill="#ffbf00" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                      </svg>
                      @endfor
                    </div>
                    <b>5/5</b>
                    <span>(2)</span>
                  </div>
                </div>
                <div class="experience-item">
                  <span>Thời lượng pin</span>
                  <div class="experience-star">
                    <div>
                      @for ($i = 1; $i < 6; $i++)
                      <svg width="15" height="15" fill="#ffbf00" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                      </svg>
                      @endfor
                    </div>
                    <b>5/5</b>
                    <span>(2)</span>
                  </div>
                </div>
                <div class="experience-item">
                  <span>Chất lượng camera</span>
                  <div class="experience-star">
                    <div>
                      @for ($i = 1; $i < 6; $i++)
                      <svg width="15" height="15" fill="#ffbf00" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                      </svg>
                      @endfor
                    </div>
                    <b>5/5</b>
                    <span>(2)</span>
                  </div>
                </div>
              </div>
              <div class="line"></div>
              <div class="rate-now">
                <span>Bạn đánh giá sao về sản phẩm này?</span><br>
                <button class="btn-rate-now">Đánh giá ngay</button>
              </div>
              <div class="line"></div>
            </div>
          </div>
          <div class="specification">
            <h2>Thông số kỹ thuật</h2>
            <ul>
              <li>
                <span>Kích thước màn hình</span>
                <div>{{$specifications_product->screen_size}}</div>
              </li>
              <li>
                <span>Công nghệ màn hình</span>
                <div>{{$specifications_product->screen_tech}}</div>
              </li>
              <li>
                <span>Camera sau</span>
                <div>
                  @foreach ($camera_rear_product as $item)
                  Máy ảnh chính: {{$item->camera_primary}}<br>
                  Máy ảnh góc siêu rộng: {{$item->camera_wide_angle}}<br>
                  Máy ảnh tele: {{$item->camera_tele}}
                  @endforeach
                </div>
              </li>
              <li>
                <span>Camera trước</span>
                <div>
                  @foreach ($camera_front_product as $item)
                  {{$item->name}}<br>
                  @endforeach
                </div>
              </li>
              <li>
                <span>Chipset</span>
                <div>{{$specifications_product->chipset}}</div>
              </li>
              <li>
                <span>Công nghệ NPC</span>
                <div>{{$specifications_product->nfc}}</div>
              </li>
              <li>
                <span>Dung lượng RAM</span>
                <div>{{$specifications_product->ram}}</div>
              </li>
              <li>
                <span>Bộ nhớ trong</span>
                <div>{{$specifications_product->memory}}</div>
              </li>
              <li>
                <span>Pin</span>
                <div>{{$specifications_product->pin}}</div>
              </li>
              <li>
                <span>Thẻ SIM</span>
                <div>{{$specifications_product->sim}}</div>
              </li>
              <li>
                <span>Độ phân giải màn hình</span>
                <div>{{$specifications_product->screen_resolution}}</div>
              </li>
              <li>
                <span>Tính năng màn hình</span>
                <div>
                  @foreach ($screen_features_product as $item)
                    {{$item->name}}<br>
                  @endforeach
                </div>
              </li>
              <li>
                <span>Loại CPU</span>
                <div>{{$specifications_product->cpu}}</div>
              </li>
            </ul>
            <div class="btn-detail-confi">
              Xem cấu hình chi tiết
              <svg width="15" height="20" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="m6 9 6 6 6-6"></path>
              </svg>
            </div>
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
    <!-- The Modal -->
    <div id="warrantyModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
      </div>

    </div>

    <!-- The Modal specification-->
    <div id="specificationModal" class="modal">
      <!-- Modal content -->
      <div class="specificationModal-content">
        <div class="specificationModal-header">
          <p>THÔNG SỐ KỸ THUẬT</p>
          <span class="specificationModal-close">
             <svg width="25" height="25" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
             </svg>
          </span>
        </div>
        <div class="specificationModal-body">
          <b>Màn hình</b>
          <ul>
            <li>
              <span> <a href="">Kích thước màn hình</a></span>
              <div>{{$specifications_product->screen_size}}</div>
            </li>
            <li>
              <span><a href="">Công nghệ màn hình</a></span>
              <div>{{$specifications_product->screen_tech}}</div>
            </li>
            <li>
              <span><a href="">Độ phân giải màn hình</a></span>
              <div>{{$specifications_product->screen_resolution}}</div>
            </li>
            <li>
              <span>Tính năng màn hình</span>
              <div>
                @foreach ($screen_features_product as $item)
                  {{$item->name}}<br>
                @endforeach
              </div>
            </li>
          </ul>
          <b>Camera sau</b>
          <ul>
            <li>
              <span>Camera sau</span>
              <div>
                @foreach ($camera_rear_product as $item)
                Máy ảnh chính: {{$item->camera_primary}}<br>
                Máy ảnh góc siêu rộng: {{$item->camera_wide_angle}}<br>
                Máy ảnh tele: {{$item->camera_tele}}
                @endforeach
              </div>
            </li>
            <li>
              <span>Tính năng camera</span>
              <div>
                @foreach ($camera_features_product as $item)
                {{$item->name}}<br>
                @endforeach
              </div>
            </li>
          </ul>
          <b>Camera trước</b>
          <ul>
            <li>
              <span>Camera trước</span>
              <div>
                @foreach ($camera_front_product as $item)
                {{$item->name}}<br>
                @endforeach
              </div>
            </li>
          </ul>
          <b>Vi xử lý & đồ họa</b>
          <ul>
            <li>
              <span>Chipset</span>
              <div>{{$specifications_product->chipset}}</div>
            </li>
            <li>
              <span>GPU</span>
              <div>{{$specifications_product->gpu}}</div>
            </li>
          </ul>
          <b>Giao tiếp & kết nối</b>
          <ul>
            <li>
              <span>Công nghệ NFC</span>
              <div>{{$specifications_product->nfc}}</div>
            </li>
            <li>
              <span>Thẻ SIM</span>
              <div>{{$specifications_product->sim}}</div>
            </li>
            <li>
              <span>Hỗ trợ mạng</span>
              <div>{{$specifications_product->internet}}</div>
            </li>
          </ul>
          <b>RAM & lưu trữ</b>
          <ul>
            <li>
              <span>Dung lượng RAM</span>
              <div>{{$specifications_product->ram}}</div>
            </li>
            <li>
              <span>Bộ nhớ trong</span>
              <div>{{$specifications_product->memory}}</div>
            </li>
          </ul>
          <b>Pin & công nghệ sạc</b>
          <ul>
            <li>
              <span>Pin</span>
              <div>{{$specifications_product->pin}}</div>
            </li>
            <li>
              <span>Công nghệ sạc</span>
              <div>
                @foreach ($charging_teches_product as $item)
                  {{$item->name}}<br>
                @endforeach
              </div>
            </li>
          </ul>
          <b>Bộ xử lý & Đồ họa</b>
          <ul>
            <li>
              <span>Loại CPU</span>
              <div>{{$specifications_product->cpu}}</div>
            </li>
          </ul>
          <b>Kích thước & Trọng lượng</b>
          <ul>
            <li>
              <span>Kích thước</span>
              <div>160,5mm x 75,1mm x 7,80mm (Kính)</div>
            </li>
            <li>
              <span>Trọng lượng</span>
              <div>{{$specifications_product->weight}}</div>
            </li>
          </ul>
          <b>Cổng kết nối</b>
          <ul>
            <li>
              <span>Bluetooth</span>
              <div>{{$specifications_product->bluetooth}}</div>
            </li>
            <li>
              <span>Wi-Fi</span>
              <div>{{$specifications_product->wifi}}</div>
            </li>
          </ul>
        </div>
      </div>

    </div>

    {{-- the modal rate-now --}}
    <div id="rateNowModal" class="modal">
      <div class="rateNowModal-content">
        <form action="{{ route('feedback') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="rateNowModal-header">
            <b>Đánh giá & nhận xét</b>
            <div class="rateNowModal-close">
              <svg width="25" height="25" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
              </svg>
            </div>
          </div>
          <div class="rateNowModal-body">
            <div class="title">
              <img src="/images/main/detail_product/rate/cps-ant.webp" alt="">
              <b>{{$product_db->product_name}}</b>
            </div>
            <div class="rate-common">
              <b>Đánh giá chung</b>
              <input type="hidden" name="rateCommon" value="5">
              <div class="star-common">
                <div data-rate="1" class="star-item rate1 is-active">
                  <svg width="20" height="20" fill="#e8e8e8" viewBox="0 0 578 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path>
                  </svg><br>
                  <span>Rất Tệ</span>
                </div>
                <div data-rate="2" class="star-item rate2 is-active">
                  <svg width="20" height="20" fill="#e8e8e8" viewBox="0 0 578 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path>
                  </svg><br>
                  <span>Tệ</span>
                </div>
                <div data-rate="3" class="star-item rate3 is-active">
                  <svg width="20" height="20" fill="#e8e8e8" viewBox="0 0 578 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path>
                  </svg><br>
                  <span>Bình thường</span>
                </div>
                <div data-rate="4" class="star-item rate4 is-active">
                  <svg width="20" height="20" fill="#e8e8e8" viewBox="0 0 578 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path>
                  </svg><br>
                  <span>Tốt</span>
                </div>
                <div data-rate="5" class="star-item rate5 is-active">
                  <svg width="20" height="20" fill="#e8e8e8" viewBox="0 0 578 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path>
                  </svg><br>
                  <span>Tuyệt vời</span>
                </div>
              </div>
            </div>
            <div class="line"></div>
            <div class="rate-experience">
              <b>Theo trải nghiệm</b>
              <div class="rate-experience-content">
                <div class="rate-experience-item">
                  <span>Hiệu năng</span>
                  <input type="hidden" name="ratePerforman" value="5">
                  <div class="rate-experience-star">
                    @for ($i = 1; $i <= 5; $i++)
                      <div data-rate="{{$i}}" class="icon-performan rate{{$i}} is-active">
                        <svg width="18" height="20" fill="#e8e8e8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                        </svg>
                      </div>
                    @endfor
                  </div>
                  <span class="text-performan">Siêu mạnh mẽ</span>
                </div>
                <div class="rate-experience-item">
                  <span>Thời lượng pin</span>
                  <input type="hidden" name="ratePin" value="5">
                  <div class="rate-experience-star">
                    @for ($i = 1; $i <= 5; $i++)
                      <div data-rate="{{$i}}" class="icon-pin rate{{$i}} is-active">
                        <svg width="18" height="20" fill="#e8e8e8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                        </svg>
                      </div>
                    @endfor
                  </div>
                  <span class="text-pin">Cực khủng</span>
                </div>
                <div class="rate-experience-item">
                  <span>Chất lượng camera</span>
                  <input type="hidden" name="rateCamera" value="5">
                  <div class="rate-experience-star">
                    @for ($i = 1; $i <= 5; $i++)
                      <div data-rate="{{$i}}" class="icon-camera rate{{$i}} is-active">
                        <svg width="18" height="20" fill="#e8e8e8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                        </svg>
                      </div>
                    @endfor
                  </div>
                  <span class="text-camera">Chụp đẹp, chuyên nghiệp</span>
                </div>
                <textarea name="text-feedback" id="" cols="30" rows="10" placeholder="Xin mời chia sẻ một số cảm nhận về sản phẩm(ít nhấn 15 ký tự)"></textarea>
                <div class="input-image">
                  <input type="file" name="imagefeedback" id="image" style="display: none">
                  <label for="image">
                    <svg width="25" height="25" fill="none" stroke="#637381" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                      <path d="M12 9a4 4 0 1 0 0 8 4 4 0 1 0 0-8z"></path>
                    </svg><br>
                    Thêm hình ảnh
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="rateNowModal-footer">
            <input class="submit-rate" type="submit" value="GỬI ĐÁNH GIÁ">
          </div>
        </form>
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

  $(document).ready(function(){
    $('.swiper-similar').slick({
      slidesToShow:5,
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
  })

  //click chọn màu slick slider
  const activeSliderId = {{ $color_id }};
  //console.log(activeSliderId);
  // Tìm slider có data-colorid trùng với activeSliderId
  const activeSlider = $('.slider-item[data-colorid="' + activeSliderId + '"]');
  $(document).ready(function() {
    $('.swiper-detail').slick('slickGoTo', activeSlider.index());
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

{{-- click giá km or đặt quyền S-student --}}
<script>
  $(document).ready(function(){
    $('.group-discount').on('click', function(){
      $('.group-student').removeClass('active');
      $('.group-discount').addClass('active');
      $('.s-student').addClass('noActive');
    })
    $('.group-student').on('click', function(){
      $('.group-discount').removeClass('active');
      $('.group-student').addClass('active');
      $('.s-student').removeClass('noActive');
    })
  })
</script>
{{-- swiper giá khuyến mãi --}}
<script>
  $(document).ready(function(){
      $('.swiper-price-discount').slick({
        rows: 1,
        slidesToScroll: 1,
        slidesToShow: 1,
        autoplaySpeed: 2000,
        autoplay: true,
        arrows: true,
        infinite: false,
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
      }).on('afterChange', function(event, slick, currentSlide){
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
    });
</script>
{{-- radio-btn-choose-warranty --}}
<script>
  $(document).ready(function(){
    $('.btn-radio-choose').change(function(){
      //console.log($(this).val());
      $('.radio-btn-choose-warranty').removeClass('active');
      $('.radio-btn-choose-warranty.lb'+$(this).val()).addClass('active');
    })
  })
</script>
 {{-- custom modal choose warranty --}}
 <script>
  $(document).ready(function(){
    
    $('.button-show-warranty').each(function(){
      $(this).click(function(){
        //console.log($(this).data('id'));
      let id = $(this).data('id');
      $('#warrantyModal').show();
      $('body').css('overflow','hidden');
      $.ajax({
        url: "{{route('extend-warranty')}}",
        method: "POST",
        data: { 
          id: id,
          _token: '{{ csrf_token() }}'
        },
        success: function(response) {
            // Xử lý phản hồi từ server
            $(".modal-content").html(response.output);
        }
      });
      })
    })

    $(window).click(function(){
      if ($(event.target).is('#warrantyModal')) {
        $('#warrantyModal').hide();
        $('body').css('overflow','show');
      }
    })
  })
 </script>
 {{-- click thay đổi height highlight  --}}
 <script>
  $(document).ready(function(){
    $('.btn-show').click(function(){
      $('.highligh').css('height','600px');
      $(this).hide();
    })
  })
 </script>
 {{-- xem them ve specificationModal - thong so ki thuat --}}
 <script>
  $(document).ready(function(){
    $('.btn-detail-confi').click(function(){
      $('#specificationModal').show();
      $('body').css('overflow','hidden');
    })

    $('.specificationModal-close').click(function(){
      $('#specificationModal').hide();
      $('body').css('overflow','show');
    })

    $(window).click(function(){
      if ($(event.target).is('#specificationModal')) {
        $('#specificationModal').hide();
        $('body').css('overflow','show');
      }
    })
  })
 </script>
 {{-- chon star cho danh gia chung --}}
 <script>
  $(document).ready(function(){
    $('.star-item').click(function(){
      //console.log($(this).data('rate'));
      if ($(this).hasClass('is-active')) {
        for (let index = 5; index > $(this).data('rate'); index--) {
          $('.star-item.rate'+index).removeClass('is-active');
          $('input[name="rateCommon"]').val($(this).data('rate'));
        }
      }else{
        for (let index = 1; index <= $(this).data('rate'); index++) {
          $('.star-item.rate'+index).addClass('is-active');
          $('input[name="rateCommon"]').val($(this).data('rate'));
        }
      }
    })

    $('.star-item').hover(
      function(){
        if ($(this).hasClass('is-active')) {
          for (let index = $(this).data('rate')+1; index <= 5; index++) {
            $('.star-item.rate'+index).addClass('not-hover');
          }
        }else{
          for (let index = 1; index <= $(this).data('rate'); index++) {
            $('.star-item.rate'+index).addClass('is-hover');
          }
        }
      },
      function(){
        $('.star-item').removeClass('not-hover');
        $('.star-item').removeClass('is-hover');
      }
    )

    // chon star cho danh gia theo trai nghiem hiệu năng
    $('.icon-performan').click(function(){
      //console.log($(this).data('rate'));
      if ($(this).hasClass('is-active')) {
        for (let index = 5; index > $(this).data('rate'); index--) {
          $('.icon-performan.rate'+index).removeClass('is-active');
          $('input[name="ratePerforman"]').val($(this).data('rate'));
          switch ($(this).data('rate')) {
            case 1:
              $('.text-performan').html('Giật lag')
              break;
            case 2:
              $('.text-performan').html('Không ổn định')
              break;
            case 3:
              $('.text-performan').html('Ổn định')
              break;
            case 4:
              $('.text-performan').html('Mạnh mẽ')
              break;
            case 5:
              $('.text-performan').html('Siêu mạnh mẽ')
              break;
          
            default:
              break;
          }
        }
      }else{
        for (let index = 1; index <= $(this).data('rate'); index++) {
          $('.icon-performan.rate'+index).addClass('is-active');
          $('input[name="ratePerforman"]').val($(this).data('rate'));
          switch ($(this).data('rate')) {
            case 1:
              $('.text-performan').html('Giật lag')
              break;
            case 2:
              $('.text-performan').html('Không ổn định')
              break;
            case 3:
              $('.text-performan').html('Ổn định')
              break;
            case 4:
              $('.text-performan').html('Mạnh mẽ')
              break;
            case 5:
              $('.text-performan').html('Siêu mạnh mẽ')
              break;
          
            default:
              break;
          }
        }
      }
    })

    $('.icon-performan').hover(
      function(){
        if ($(this).hasClass('is-active')) {
          for (let index = $(this).data('rate')+1; index <= 5; index++) {
            $('.icon-performan.rate'+index).addClass('not-hover');
          }
        }else{
          for (let index = 1; index <= $(this).data('rate'); index++) {
            $('.icon-performan.rate'+index).addClass('is-hover');
          }
        }
      },
      function(){
        $('.icon-performan').removeClass('not-hover');
        $('.icon-performan').removeClass('is-hover');
      }
    )

    // chon star cho danh gia theo trai nghiem pin
    $('.icon-pin').click(function(){
      //console.log($(this).data('rate'));
      if ($(this).hasClass('is-active')) {
        for (let index = 5; index > $(this).data('rate'); index--) {
          $('.icon-pin.rate'+index).removeClass('is-active');
          $('input[name="ratePin"]').val($(this).data('rate'));
          switch ($(this).data('rate')) {
            case 1:
              $('.text-pin').html('Rất yếu')
              break;
            case 2:
              $('.text-pin').html('Yếu')
              break;
            case 3:
              $('.text-pin').html('Đủ dùng')
              break;
            case 4:
              $('.text-pin').html('Khủng')
              break;
            case 5:
              $('.text-pin').html('Cực khủng')
              break;
          
            default:
              break;
          }
        }
      }else{
        for (let index = 1; index <= $(this).data('rate'); index++) {
          $('.icon-pin.rate'+index).addClass('is-active');
          $('input[name="ratePin"]').val($(this).data('rate'));
          switch ($(this).data('rate')) {
            case 1:
              $('.text-pin').html('Rất yếu')
              break;
            case 2:
              $('.text-pin').html('Yếu')
              break;
            case 3:
              $('.text-pin').html('Đủ dùng')
              break;
            case 4:
              $('.text-pin').html('Khủng')
              break;
            case 5:
              $('.text-pin').html('Cực khủng')
              break;
          
            default:
              break;
          }
        }
      }
    })

    $('.icon-pin').hover(
      function(){
        if ($(this).hasClass('is-active')) {
          for (let index = $(this).data('rate')+1; index <= 5; index++) {
            $('.icon-pin.rate'+index).addClass('not-hover');
          }
        }else{
          for (let index = 1; index <= $(this).data('rate'); index++) {
            $('.icon-pin.rate'+index).addClass('is-hover');
          }
        }
      },
      function(){
        $('.icon-pin').removeClass('not-hover');
        $('.icon-pin').removeClass('is-hover');
      }
    )

    // chon star cho danh gia theo chat luong camera
    $('.icon-camera').click(function(){
      //console.log($(this).data('rate'));
      if ($(this).hasClass('is-active')) {
        for (let index = 5; index > $(this).data('rate'); index--) {
          $('.icon-camera.rate'+index).removeClass('is-active');
          $('input[name="rateCamera"]').val($(this).data('rate'));
          switch ($(this).data('rate')) {
            case 1:
              $('.text-camera').html('Chụp không đẹp')
              break;
            case 2:
              $('.text-camera').html('Chụp không đẹp')
              break;
            case 3:
              $('.text-camera').html('Tạm ổn')
              break;
            case 4:
              $('.text-camera').html('Chụp đẹp')
              break;
            case 5:
              $('.text-camera').html('Chụp đẹp, chuyên nghiệp')
              break;
          
            default:
              break;
          }
        }
      }else{
        for (let index = 1; index <= $(this).data('rate'); index++) {
          $('.icon-camera.rate'+index).addClass('is-active');
          $('input[name="rateCamera"]').val($(this).data('rate'));
          switch ($(this).data('rate')) {
            case 1:
              $('.text-camera').html('Chụp không đẹp')
              break;
            case 2:
              $('.text-camera').html('Chụp không đẹp')
              break;
            case 3:
              $('.text-camera').html('Tạm ổn')
              break;
            case 4:
              $('.text-camera').html('Chụp đẹp')
              break;
            case 5:
              $('.text-camera').html('Chụp đẹp, chuyên nghiệp')
              break;
          
            default:
              break;
          }
        }
      }
    })

    $('.icon-camera').hover(
      function(){
        if ($(this).hasClass('is-active')) {
          for (let index = $(this).data('rate')+1; index <= 5; index++) {
            $('.icon-camera.rate'+index).addClass('not-hover');
          }
        }else{
          for (let index = 1; index <= $(this).data('rate'); index++) {
            $('.icon-camera.rate'+index).addClass('is-hover');
          }
        }
      },
      function(){
        $('.icon-camera').removeClass('not-hover');
        $('.icon-camera').removeClass('is-hover');
      }
    )

  })
 </script>
 {{-- custom modal danh gia  --}}
<script>
  $(document).ready(function(){
    $('.btn-rate-now').click(function(){
      $('#rateNowModal').show();
    })
    $('.rateNowModal-close').click(function(){
      $('#rateNowModal').hide();
    })
    $(window).click(function(){
      if ($(event.target).is('#rateNowModal')) {
        $('#rateNowModal').hide();
      }
    })
  })
</script>
</html>