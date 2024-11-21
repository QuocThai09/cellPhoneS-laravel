<?php use Carbon\Carbon;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>CellPhoneS</title>
    @include('layout.links')
</head>
<body>
  @include('layout.header')

  <main>
    <div class="main-ads">
      <div class="main-ads-custom">
        <div class="main-ads-left">
          <div class="main-ads-left-row">
            <div class="main-ads-left-item-hover">
              <div class="main-ads-left-item-phone-hover">
                <div class="title-hover">
                  <div class="main-ads-left-item">
                    <div class="icon">
                      <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.2 0H18c1.326 0 2.4 1.131 2.4 2.526v18.948C20.4 22.869 19.327 24 18 24H7.2c-1.325 0-2.4-1.131-2.4-2.526V2.526C4.8 1.131 5.876 0 7.2 0Zm1.2 2.4a1.2 1.2 0 0 0-1.2 1.2v16.8a1.2 1.2 0 0 0 1.2 1.2h8.4a1.2 1.2 0 0 0 1.2-1.2V3.6a1.2 1.2 0 0 0-1.2-1.2h-1.2v1.8a.6.6 0 0 1-.6.6h-4.8a.6.6 0 0 1-.6-.6V2.4H8.4Z" clip-rule="evenodd"></path>
                      </svg>
                    </div>
                    <div class="main-ads-left-item-text">
                      <p>Điện thoại,</p>
                      <p> Table</p>
                    </div>
                    <div>
                      <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                      </svg>
                    </div>
                  </div>
                </div>

                <div class="phone-item-hover">
                  <div class="item-hover-grid">
                    <div>
                      <h6>Hãng điện thoại</h6>
                      @foreach ($mobile_branch_db as $item)
                        <a href="">{{$item->branch_name}}</a>
                      @endforeach
                      <a href="">Điện thoại phổ thông</a>
                    </div>
                    <div>
                      <h6>Mức giá điện thoại</h6>
                      <a href="">Dưới 2 triệu</a>
                      <a href="">Từ 2 - 4 triệu</a>
                      <a href="">Từ 4 - 7 triệu</a>
                      <a href="">Từ 7 - 13 triệu</a>
                      <a href="">Từ 13 -20 triệu</a>
                      <a href="">Trên 20 triệu</a>
                    </div>
                    <div>
                      <h6>Điện thoại HOT
                        <svg width="18" height="18" fill="none" stroke="#e6b400" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path d="m13.5 9.75 6-8.25L6 9.75l4.5 4.5-6 8.25L18 14.25l-4.5-4.5Z"></path>
                          </svg>
                      </h6>
                      @foreach ($product_phone_hot_db as $item)
                        @if ($item->new == 1)
                        <a href="">{{$item->product_name}} 
                          <div class="tab-new">
                            <p>MỚI</p>
                          </div>
                        </a>
                        @else
                        <a href="">{{$item->product_name}}</a>
                        @endif
                        
                      @endforeach
                    </div>
                    <div>
                      <h6>Hãng máy tính bảng</h6>
                      @foreach ($mobile_branch_db as $item)
                        <a href="">{{$item->branch_name}}</a>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="main-ads-left-item-laptop-hover">
              <div class="title-hover">
                <div class="main-ads-left-item">
                  <div class="icon">
                    <svg width="25" height="25" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M22 17H2v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1v-2Z"></path>
                      <path d="M19 5H5a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1Z"></path>
                    </svg>
                  </div>
                  <div class="main-ads-left-item-text"><p>Laptop</p></div>
                  <div>
                    <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                </div>
              </div>

              <div class="laptop-item-hover">
                <div class="item-hover-grid">
                  <div>
                    <h6>Thương hiệu</h6>
                    @foreach ($laptop_branch_db as $item)
                      <a href="">{{$item->branch_name}}</a>
                    @endforeach
                  </div>
                  <div>
                    <h6>Phân khúc giá</h6>
                    <a href="">Dưới 10 triệu</a>
                    <a href="">Từ 10 - 15 triệu</a>
                    <a href="">Từ 15 - 20 triệu</a>
                    <a href="">Từ 20 - 25 triệu</a>
                    <a href="">Từ 25 -30 triệu</a>
                    <a href="">Trên 30 triệu</a>
                  </div>
                  <div>
                    <h6>Nhu cầu sử dụng</h6>
                    <a href="">Văn phòng</a>
                    <a href="">Gaming</a>
                    <a href="">Mỏng nhẹ</a>
                    <a href="">Đồ họa - kỹ thuật</a>
                    <a href="">Sinh viên</a>
                    <a href="">Cảm ứng</a>
                    <a href="">Laptop AI
                      <div class="tab-new">MỚI</div>
                    </a>
                  </div>
                  <div>
                    <h6>Dòng chip</h6>
                    <a href="">Laptop Core i3</a>
                    <a href="">Laptop Core i5</a>
                    <a href="">Laptop Core i7</a>
                    <a href="">Laptop Core i9</a>
                    <a href="">Apple M1 Series</a>
                    <a href="">Apple M2 Series</a>
                    <a href="">Apple M3 Series</a>
                    <a href="">AMD Ryzen</a>
                    <a href="">Intel Core Ultra
                      <div class="tab-new">HOT</div>
                    </a>
                  </div>
                  <div>
                    <h6>Kích thước màn hình</h6>
                    <a href="">Laptop 12 inch</a>
                    <a href="">Laptop 13 inch</a>
                    <a href="">Laptop 14 inch</a>
                    <a href="">Laptop 15.6 inch</a>
                    <a href="">Laptop 16 inch</a>
                  </div>
                </div>
              </div>

            </div>

            <div class="main-ads-left-item-hover">
              <div class="main-ads-left-item">
                <div class="icon">
                  <svg width="25" height="25" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 13h4v6a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1v-5a1 1 0 0 1 1-1Z"></path>
                    <path d="M7 13H3v6a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1Z"></path>
                    <path d="M3 13a9 9 0 0 1 18 0"></path>
                    </svg>
                </div>
                <div class="main-ads-left-item-text"><p>Âm thanh</p></div>
                <div>
                  <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
            </div>

            <div class="main-ads-left-item-hover">
              <div class="main-ads-left-item">
                <div class="icon">
                  <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12 8.5a1 1 0 0 1 1 1v2.086l1.207 1.207a1 1 0 0 1-1.414 1.414l-1.5-1.5A1 1 0 0 1 11 12V9.5a1 1 0 0 1 1-1Z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm-7 5a7 7 0 1 1 14 0 7 7 0 0 1-14 0Z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M8.376 16.008a1 1 0 0 1 1.116.868l.281 2.248a1 1 0 0 0 .993.876h2.469a1 1 0 0 0 .992-.876l.28-2.248a1 1 0 0 1 1.985.248l-.28 2.248A3 3 0 0 1 13.234 22h-2.47a3 3 0 0 1-2.976-2.628l-.281-2.248a1 1 0 0 1 .868-1.116Z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M15.624 7.992a1 1 0 0 1-1.116-.868l-.281-2.248A1 1 0 0 0 13.234 4h-2.469a1 1 0 0 0-.992.876l-.28 2.248a1 1 0 1 1-1.985-.248l.28-2.248A3 3 0 0 1 10.766 2h2.47a3 3 0 0 1 2.976 2.628l.281 2.248a1 1 0 0 1-.868 1.116Z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="main-ads-left-item-text">
                  <p>Đồng hồ,</p>
                  <p>Camera</p>
                </div>
                <div>
                  <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
            </div>

            <div class="main-ads-left-item-hover">
              <div class="main-ads-left-item">
                <div class="icon">
                  <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.181 13.2c-1.003 0-1.475-1.365-.725-2.098l9.818-9.6a1.018 1.018 0 0 1 1.45 0l9.818 9.6c.75.733.278 2.097-.725 2.097h-1.09v8.4c0 .663-.489 1.2-1.091 1.2H4.363c-.603 0-1.091-.537-1.091-1.2v-8.4H2.18Zm6.545 7.2v-6c0-.664.489-1.2 1.091-1.2h4.364c.603 0 1.09.537 1.09 1.2v6h3.274V12c0-.451.225-.843.559-1.049l-7.105-6.946-7.104 6.946c.333.206.559.598.559 1.048v8.4h3.272Zm2.182 0v-4.8h2.182v4.8h-2.182Z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="main-ads-left-item-text"><p>Đồ gia dụng</p></div>
                <div>
                  <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
            </div>

            <div class="main-ads-left-item-hover">
              <div class="main-ads-left-item">
                <div class="icon">
                  <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 4.5h1v2h-1v-2Z"></path>
                    <path d="M14 4.5h-1v2h1v-2Z"></path>
                    <path fill-rule="evenodd" d="M7 8.5v-7h10v7h2v11a3 3 0 0 1-3 3H8a3 3 0 0 1-3-3v-11h2Zm2-5h6v5H9v-5Zm8 7H7v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-9Z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="main-ads-left-item-text"><p>Phụ kiện</p></div>
                <div>
                  <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
            </div>

            <div class="main-ads-left-item-hover">
              <div class="main-ads-left-item">
                <div class="icon">
                  <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.85 2.4A2.35 2.35 0 0 1 15.2.05h6.4a2.35 2.35 0 0 1 2.35 2.35v19.2a2.35 2.35 0 0 1-2.35 2.35H6.4v-1.5h3.25v-3.3H2.4A2.35 2.35 0 0 1 .05 16.8V7.2A2.35 2.35 0 0 1 2.4 4.85h10.45V2.4Zm1.5 5.65h8.1V2.4a.85.85 0 0 0-.85-.85h-6.4a.85.85 0 0 0-.85.85v5.65Zm8.1 1.5h-8.1V21.6c0 .47.38.85.85.85h6.4c.47 0 .85-.38.85-.85V9.55Zm-9.442 12.9a2.344 2.344 0 0 1-.158-.85v-2.45h-1.7v3.3h1.858Zm-.158-4.8V6.35H2.4a.85.85 0 0 0-.85.85v9.6c0 .47.38.85.85.85h10.45Zm7.95 1.5H16v-1.5h4.8v1.5Z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="main-ads-left-item-text">
                  <p>PC,</p>
                  <p>Màn hình,</p>
                  <p>Máy in</p>
                </div>
                <div>
                  <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
            </div>

            <div class="main-ads-left-item-hover">
              <div class="main-ads-left-item">
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="25" height="25"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 64l0 288 512 0 0-288L64 64zM0 64C0 28.7 28.7 0 64 0L576 0c35.3 0 64 28.7 64 64l0 288c0 35.3-28.7 64-64 64L64 416c-35.3 0-64-28.7-64-64L0 64zM128 448l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-384 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg>
                </div>
                <div class="main-ads-left-item-text"><p>Tivi</p></div>
                <div>
                  <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
            </div>

            <div class="main-ads-left-item-hover">
              <div class="main-ads-left-item">
                <div class="icon">
                  <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.2 0H18c1.326 0 2.4 1.131 2.4 2.526v18.948C20.4 22.869 19.327 24 18 24H7.2c-1.325 0-2.4-1.131-2.4-2.526V2.526C4.8 1.131 5.876 0 7.2 0Zm1.2 2.4a1.2 1.2 0 0 0-1.2 1.2v16.8a1.2 1.2 0 0 0 1.2 1.2h8.4a1.2 1.2 0 0 0 1.2-1.2V3.6a1.2 1.2 0 0 0-1.2-1.2h-1.2v1.8a.6.6 0 0 1-.6.6h-4.8a.6.6 0 0 1-.6-.6V2.4H8.4Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div class="main-ads-left-item-text"><p>Thu cũ đổi mới</p></div>
                <div>
                  <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
            </div>

            <div class="main-ads-left-item-hover">
              <div class="main-ads-left-item">
                <div class="icon">
                  <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.2 0H18c1.326 0 2.4 1.131 2.4 2.526v18.948C20.4 22.869 19.327 24 18 24H7.2c-1.325 0-2.4-1.131-2.4-2.526V2.526C4.8 1.131 5.876 0 7.2 0Zm1.2 2.4a1.2 1.2 0 0 0-1.2 1.2v16.8a1.2 1.2 0 0 0 1.2 1.2h8.4a1.2 1.2 0 0 0 1.2-1.2V3.6a1.2 1.2 0 0 0-1.2-1.2h-1.2v1.8a.6.6 0 0 1-.6.6h-4.8a.6.6 0 0 1-.6-.6V2.4H8.4Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div class="main-ads-left-item-text"><p>Hàng cũ</p></div>
                <div>
                  <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
            </div>

            <div class="main-ads-left-item-hover">
              <div class="main-ads-left-item">
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="25" height="25" ><path d="M480 32c0-12.9-7.8-24.6-19.8-29.6s-25.7-2.2-34.9 6.9L381.7 53c-48 48-113.1 75-181 75l-8.7 0-32 0-96 0c-35.3 0-64 28.7-64 64l0 96c0 35.3 28.7 64 64 64l0 128c0 17.7 14.3 32 32 32l64 0c17.7 0 32-14.3 32-32l0-128 8.7 0c67.9 0 133 27 181 75l43.6 43.6c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6l0-147.6c18.6-8.8 32-32.5 32-60.4s-13.4-51.6-32-60.4L480 32zm-64 76.7L416 240l0 131.3C357.2 317.8 280.5 288 200.7 288l-8.7 0 0-96 8.7 0c79.8 0 156.5-29.8 215.3-83.3z"/></svg>
                </div>
                <div class="main-ads-left-item-text"><p>Khuyến mãi</p></div>
                <div>
                  <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
            </div>

            <div class="main-ads-left-item-hover">
              <div class="main-ads-left-item">
                <div class="icon">
                  <svg width="25" height="25" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.25 19.493V3.375a1.128 1.128 0 0 0-1.125-1.125H3.375A1.128 1.128 0 0 0 2.25 3.375v16.5a1.88 1.88 0 0 0 1.875 1.875H19.5"></path>
                    <path d="M19.5 21.75a2.25 2.25 0 0 1-2.25-2.25V6h3.375a1.125 1.125 0 0 1 1.125 1.125V19.5a2.25 2.25 0 0 1-2.25 2.25Z"></path>
                    <path d="M11.25 6h3"></path>
                    <path d="M11.25 9h3"></path>
                    <path d="M5.25 12h9"></path>
                    <path d="M5.25 15h9"></path>
                    <path d="M5.25 18h9"></path>
                    <path fill="#000000" stroke="none" d="M8.25 9.75h-3A.75.75 0 0 1 4.5 9V6a.75.75 0 0 1 .75-.75h3A.75.75 0 0 1 9 6v3a.75.75 0 0 1-.75.75Z"></path>
                    </svg>
                </div>
                <div class="main-ads-left-item-text"><p>Tin công nghệ</p></div>
                <div>
                  <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="main-ads-center">
          <div class="img-slider">
            <div class="slider-item">
                <img src="/images/main/sliding-home-iphone-16-pro-km-moi.webp" alt="">
            </div>
            <div class="slider-item">
                <img src="/images/main/dien-thoai-samsung-galaxy-s24-fe-home-27-9-2024.webp" alt="">
            </div>
            <div class="slider-item">
                <img src="/images/main/xiaomi-14T-series-home-mo-ban.webp" alt="">
            </div>
            <div class="slider-item">
                <img src="/images/main/watch-gt-5-series-03-10-home-new-new.webp" alt="">
            </div>
            <div class="slider-item">
                <img src="/images/main/Mo-ban-Galaxy-Tab-S10-Series-home.webp" alt="">
            </div>
            <div class="slider-item">
                <img src="/images/main/tecno-spark-go-1-home.webp" alt="">
            </div>
          </div>
          <div class="slider-nav">
            <button>
              iPHONE 16 SERIES Mua ngay 
              <div class="btn-hover"></div>
            </button>
            <button>
              GALAXY S24 FE Mở bán quà khủng
              <div class="btn-hover"></div>
            </button>
            <button>
              XIAOMI 14T SERIES Giá tốt chốt ngay
              <div class="btn-hover"></div>
            </button>
            <button>
              HUAWEI WATCH GT5 Giá chỉ từ 4.99 triệu
              <div class="btn-hover"></div>
            </button>
            <button>
              GALAXY TAB S10 Giá tốt chốt ngay
              <div class="btn-hover"></div>
            </button>
            <button>
              TECNO SPARK GO1 Giá chỉ từ 2.29 triệu
              <div class="btn-hover"></div>
            </button>
          </div>
        </div>

        <div class="main-ads-right">
          <div class="main-ads-right-item">
            <img src="/images/main/saler1.webp" height="110px" width="100%" style="border-radius: 10px" alt="">
          </div>
          <div class="main-ads-right-item">
            <img src="/images/main/saler2.webp" height="110px" width="100%" style="border-radius: 10px" alt="">
          </div>
          <div class="main-ads-right-item">
            <img src="/images/main/saler3.webp" height="110px" width="100%" style="border-radius: 10px" alt="">
          </div>
        </div>
      </div>
    </div>

    
    
    <img src="/images/main/full_ads.gif" class="full-ads-img" alt="">

    <div class="hot-sale">
      <div class="hot-sale-header">
        <div>
          <img src="/images/main/hot-sale-cuoi-tuan-20-03-2024.gif" width="55%" alt="">
        </div>
        <div class="hot-sale-btn">
          <button >Điện thoại</button>
          <button >Phụ kiện, TV</button>
        </div>
      </div>
      <div id="clockdiv" class="clockdiv">
       @if (Carbon::now()->dayOfWeek() >= 5)
        <div style="font-size: 20px;margin-right: 10px">
          Kết thúc sau:
        </div>
       @elseif(Carbon::now()->dayOfWeek() == 3)
        <div style="font-size: 20px;margin-riht: 10px">
          Bắt đầu sau:
        </div>
       @endif
        <div class="clockdiv-items" style="">
          <span class="days"></span>
        </div>
        <div style="font-size: 20px;margin-right: 5px">:</div>
        <div class="clockdiv-items" >
          <span class="hours"></span>
        </div>
        <div style="font-size: 20px;margin-right: 5px">:</div>
        <div class="clockdiv-items" >
          <span class="minutes"></span>
        </div>
        <div style="font-size: 20px;margin-right: 5px">:</div>
        <div class="clockdiv-items" >
          <span class="seconds"></span>
        </div>
      </div>
      
      <div class="hot-sale-slider">
        <div class="hot-sale-slider-item">
          @for ($i = 0; $i < 19; $i++)
            <div style="margin-left: 10px">
              <div class="discount-tab1" ></div>
              <div class="discount-tab2" ></div>
              <a class="link-slider-item" href="#">
                <div class="card">
                  <div class="discount">
                    Giảm 10%
                  </div>
                  <div class="installment" style="margin-left: -10px">
                    Trả góp 0%
                  </div>
                  <img src="/images/main/mobile/dien-thoai-samsung-galaxy-m55.webp" width="75%" style="margin: auto"  alt="">
                  <h6 style="margin: 10px">Samsung Galaxy M55 (12GB 256GB)</h6>
                  <div class="price">
                    <p class="price-discount">10.990.000đ</p>
                    <p class="price-decoration">12.690.000đ</p>
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
          @endfor
        </div>
      </div>
    </div>

    <div class="main-mobile">
      <div class="main-mobile-content">
        <h3>ĐIỆN THOẠI NỔI BẬT</h3>
       <div style="position: absolute;right: 0;">
          @foreach ($mobile_branch_db as $item)
            <button class="btn-content">{{$item->branch_name}}</button>
          @endforeach
          <button class="btn-content">Xem tất cả</button>
       </div>
      </div>
      <div class="main-mobile-items">
        <div class="slider-mobile">
          @foreach ($product_mobile_db as $item)
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
                    <div class="footer-items" style="margin-top: 20px">
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
                    <p style="font-size: 11px;margin-left: 10px;margin-top: -20px">Giá S-Student cho bạn<a style="font-weight: bold;color: red; font-size: 15px;">10.390.000đ</a></p>
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
      
    </div>
    
    <div class="main-laptop">
      <div class="main-laptop-content">
        <h3>LAPTOP</h3>
       <div style="position: absolute;right: 0;">
          @foreach ($laptop_branch_db as $item)
            <button class="btn-content">{{$item->branch_name}}</button>
          @endforeach
          <button class="btn-content">Xem tất cả</button>
       </div>
      </div>
      <div class="main-laptop-items">
        <div class="slider-laptop">
          @foreach ($product_laptop_db as $item)
            @php
              $formattedPrice = number_format($item->price, 0, ',', '.');
            @endphp
            @if ($item->discount == null)
              <div style="margin: 10px">
                <div class="discount-tab1" style="visibility: hidden"></div>
                <div class="discount-tab2" style="visibility: hidden"></div>
                <a class="link-slider-item" href="{{$item->id}}">
                  <div class="card">
                    <div class="discount" style="visibility: hidden">

                    </div>
                    <div class="installment">
                      Trả góp 0%
                    </div>
                    <img src="/images/main/laptop/{{$item->img}}" width="75%" loading="lazy" style="margin: auto"  alt="">
                    <h6 class="name-tab">{{$item->product_name}}</h6>
                    <div class="price">
                      <p class="price-discount">{{$formattedPrice}}đ</p>
                      <p class="price-decoration" style="visibility: hidden">{{$formattedPrice}}đ</p>
                    </div>
                    <div class="ship-cmt">
                      Không phí chuyển đổi khi trả góp 0% qua thẻ tín dụng kỳ hạn 3-6...
                    </div>
                    <div class="footer-items" style="margin-top: 20px">
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
                  $formattedDiscount = number_format($discount,0,',','.')
              @endphp
              <div style="margin: 10px">
                <div class="discount-tab1" ></div>
                <div class="discount-tab2" ></div>
                <a class="link-slider-item" href="{{$item->id}}">
                  <div class="card">
                    <div class="discount">
                      Giảm {{$item->discount}}%
                    </div>
                    <div class="installment">
                      Trả góp 0%
                    </div>
                    <img src="/images/main/laptop/{{$item->img}}" width="75%" style="margin: auto"  alt="">
                    <h6 class="name-tab">{{$item->product_name}}</h6>
                    <div class="price">
                      <p class="price-discount">{{$formattedDiscount}}đ</p>
                      <p class="price-decoration">{{$formattedPrice}}đ</p>
                    </div>
                    <p style="font-size: 11px;margin-left: 10px;margin-top: -20px">Giá S-Student cho bạn<a style="font-weight: bold;color: red; font-size: 15px;">10.390.000đ</a></p>
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
    </div>

    <div class="main-PC">
      <div class="main-PC-content">
        <h3>MÀN HÌNH, MÁY TÍNH ĐỂ BÀN</h3>
       <div style="position: absolute;right: 0;">
          @foreach ($laptop_branch_db as $item)
            <button class="btn-content">{{$item->branch_name}}</button>
          @endforeach
          <button class="btn-content">Xem tất cả</button>
       </div>
      </div>
      <div class="main-PC-items">
        <div class="slider-PC">
          @foreach ($product_PC_db as $item)
            @php
              $formattedPrice = number_format($item->price, 0, ',', '.');
            @endphp
            @if ($item->discount == null)
              <div style="margin: 10px">
                <div class="discount-tab1" style="visibility: hidden"></div>
                <div class="discount-tab2" style="visibility: hidden"></div>
                <a class="link-slider-item" href="{{$item->id}}">
                  <div class="card-slider-PC">
                    <div class="discount" style="visibility: hidden">

                    </div>
                    <div class="installment">
                      Trả góp 0%
                    </div>
                    <img src="/images/main/manhinh/{{$item->img}}" width="75%" loading="lazy" style="margin: auto"  alt="">
                    <h6 class="name-tab">{{$item->product_name}}</h6>
                    <div class="price">
                      <p class="price-discount">{{$formattedPrice}}đ</p>
                      <p class="price-decoration" style="visibility: hidden">{{$formattedPrice}}đ</p>
                    </div>
                    <div class="ship-cmt">
                      Không phí chuyển đổi khi trả góp 0% qua thẻ tín dụng kỳ hạn 3-6...
                    </div>
                    <div class="footer-items" style="margin-top: 20px">
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
                  $formattedDiscount = number_format($discount,0,',','.')
              @endphp
              <div style="margin: 10px">
                <div class="discount-tab1" ></div>
                <div class="discount-tab2" ></div>
                <a class="link-slider-item" href="{{$item->id}}">
                  <div class="card-slider-PC">
                    <div class="discount">
                      Giảm {{$item->discount}}%
                    </div>
                    <div class="installment">
                      Trả góp 0%
                    </div>
                    <img src="/images/main/manhinh/{{$item->img}}" width="75%" style="margin: auto"  alt="">
                    <h6 class="name-tab">{{$item->product_name}}</h6>
                    <div class="price">
                      <p class="price-discount">{{$formattedDiscount}}đ</p>
                      <p class="price-decoration">{{$formattedPrice}}đ</p>
                    </div>
                    <p style="font-size: 11px;margin-left: 10px;margin-top: -20px">Giá S-Student cho bạn<a style="font-weight: bold;color: red; font-size: 15px;">10.390.000đ</a></p>
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
    </div>

    {{-- main-amthanh copy source từ main-PC --}}
    <div class="main-PC">
      <div class="main-PC-content">
        <h3>TAI NGHE</h3>
       <div style="position: absolute;right: 0;">
          @foreach ($sound_branch_db as $item)
            <button class="btn-content">{{$item->branch_name}}</button>
          @endforeach
          <button class="btn-content">Xem tất cả</button>
       </div>
      </div>
      <div class="main-PC-items">
        <div class="slider-PC">
          @foreach ($product_sound_db as $item)
            @php
              $formattedPrice = number_format($item->price, 0, ',', '.');
            @endphp
            @if ($item->discount == null)
              <div style="margin: 10px">
                <div class="discount-tab1" style="visibility: hidden"></div>
                <div class="discount-tab2" style="visibility: hidden"></div>
                <a class="link-slider-item" href="{{$item->id}}">
                  <div class="card-slider-PC">
                    <div class="discount" style="visibility: hidden">

                    </div>
                    <div class="installment">
                      Trả góp 0%
                    </div>
                    <img src="/images/main/amthanh/{{$item->img}}" width="75%" loading="lazy" style="margin: auto"  alt="">
                    <h6 class="name-tab">{{$item->product_name}}</h6>
                    <div class="price">
                      <p class="price-discount">{{$formattedPrice}}đ</p>
                      <p class="price-decoration" style="visibility: hidden">{{$formattedPrice}}đ</p>
                    </div>
                    <div class="ship-cmt">
                      Không phí chuyển đổi khi trả góp 0% qua thẻ tín dụng kỳ hạn 3-6...
                    </div>
                    <div class="footer-items" style="margin-top: 20px">
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
                  $formattedDiscount = number_format($discount,0,',','.')
              @endphp
              <div style="margin: 10px">
                <div class="discount-tab1" ></div>
                <div class="discount-tab2" ></div>
                <a class="link-slider-item" href="{{$item->id}}">
                  <div class="card-slider-PC">
                    <div class="discount">
                      Giảm {{$item->discount}}%
                    </div>
                    <div class="installment">
                      Trả góp 0%
                    </div>
                    <img src="/images/main/amthanh/{{$item->img}}" width="75%" style="margin: auto"  alt="">
                    <h6 class="name-tab">{{$item->product_name}}</h6>
                    <div class="price">
                      <p class="price-discount">{{$formattedDiscount}}đ</p>
                      <p class="price-decoration">{{$formattedPrice}}đ</p>
                    </div>
                    <p style="font-size: 11px;margin-left: 10px;margin-top: -20px">Giá S-Student cho bạn<a style="font-weight: bold;color: red; font-size: 15px;">10.390.000đ</a></p>
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
    </div>

    {{-- main-dongho copy source từ main-PC --}}
    <div class="main-PC">
      <div class="main-PC-content">
        <h3>ĐỒNG HỒ THÔNG MINH</h3>
       <div style="position: absolute;right: 0;">
          @foreach ($watch_branch_db as $item)
            <button class="btn-content">{{$item->branch_name}}</button>
          @endforeach
          <button class="btn-content">Xem tất cả</button>
       </div>
      </div>
      <div class="main-PC-items">
        <div class="slider-PC">
          @foreach ($product_watch_db as $item)
            @php
              $formattedPrice = number_format($item->price, 0, ',', '.');
            @endphp
            @if ($item->discount == null)
              <div style="margin: 10px">
                <div class="discount-tab1" style="visibility: hidden"></div>
                <div class="discount-tab2" style="visibility: hidden"></div>
                <a class="link-slider-item" href="{{$item->id}}">
                  <div class="card-slider-PC">
                    <div class="discount" style="visibility: hidden">

                    </div>
                    <div class="installment">
                      Trả góp 0%
                    </div>
                    <img src="/images/main/donghothongminh/{{$item->img}}" width="75%" loading="lazy" style="margin: auto"  alt="">
                    <h6 class="name-tab">{{$item->product_name}}</h6>
                    <div class="price">
                      @if ($item->price == 0)
                        <p class="price-discount">Giá liên hệ</p>
                      @else
                        <p class="price-discount">{{$formattedPrice}}đ</p>
                        <p class="price-decoration" style="visibility: hidden">{{$formattedPrice}}đ</p>
                      @endif
                    </div>
                    <div class="ship-cmt">
                      Không phí chuyển đổi khi trả góp 0% qua thẻ tín dụng kỳ hạn 3-6...
                    </div>
                    <div class="footer-items" style="margin-top: 20px">
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
                  $formattedDiscount = number_format($discount,0,',','.')
              @endphp
              <div style="margin: 10px">
                <div class="discount-tab1" ></div>
                <div class="discount-tab2" ></div>
                <a class="link-slider-item" href="{{$item->id}}">
                  <div class="card-slider-PC">
                    <div class="discount">
                      Giảm {{$item->discount}}%
                    </div>
                    <div class="installment">
                      Trả góp 0%
                    </div>
                    <img src="/images/main/donghothongminh/{{$item->img}}" width="75%" style="margin: auto"  alt="">
                    <h6 class="name-tab">{{$item->product_name}}</h6>
                    <div class="price">
                      <p class="price-discount">{{$formattedDiscount}}đ</p>
                      <p class="price-decoration">{{$formattedPrice}}đ</p>
                    </div>
                    <p style="font-size: 11px;margin-left: 10px;margin-top: -20px">Giá S-Student cho bạn<a style="font-weight: bold;color: red; font-size: 15px;">10.390.000đ</a></p>
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
    </div>

    
    <div class="phu-kien">
      <div class="phu-kien-content">
        <h3>PHỤ KIỆN</h3>
        <a href="#">Xem tất cả</a>
      </div>
      <div class="phu-kien-items">
        @foreach ($accessory_db as $item)
          <a href="">
            <div class="item">
              <p>{{$item->name}}</p>
              <img src="/images/main/phukien/{{$item->img}}" height="50%" style="" alt="">
            </div>
          </a>
        @endforeach
      </div>
    </div>

    {{--linh kien may tinh copy source từ phu kien --}}
    <div class="phu-kien">
      <div class="phu-kien-content">
        <h3>LINH KIỆN MÁY TÍNH</h3>
        <a href="#">Xem tất cả</a>
      </div>
      <div class="phu-kien-items">
        @foreach ($component_pc_db as $item)
          <a href="">
            <div class="item" style="background-color: #93C5FD">
              <p>{{$item->name}}</p>
              <img src="/images/main/component_pc/{{$item->img}}" height="50%" alt="">
            </div>
          </a>
        @endforeach
      </div>
    </div>

    {{--hang cu copy source từ phu kien --}}
    <div class="phu-kien">
      <div class="phu-kien-content">
        <h3>HÀNG CŨ</h3>
        <a href="#">Xem tất cả</a>
      </div>
      <div class="phu-kien-items">
        @foreach ($used_goods_db as $item)
          <a href="">
            <div class="item" style="background-color: #D64044">
              <p>{{$item->name}}</p>
              <img src="/images/main/used_goods/{{$item->img}}" height="50%" alt="">
            </div>
          </a>
        @endforeach
      </div>
    </div>

    {{-- ưu đãi sinh viên --}}
    <div class="silder-sale">
      <h3>ƯU ĐÃI SINH VIÊN</h3>
      <div class="silder-sale-items">
        @foreach ($slider_sale_db as $item)
          <a href="">
            <img src="/images/main/slider_sale/study/{{$item->img}}" width="98%" alt="">
          </a>
        @endforeach
      </div>
    </div>

    {{-- ưu đãi thanh toan --}}
    <div class="silder-sale">
      <h3>ƯU ĐÃI THANH TOÁN</h3>
      <div style="display: flex;gap: 5px">
        <img src="/images/main/slider_sale/pay/techcom-iphone-16-update-uu-dai-1-6.webp" height="120px" width="279px" alt="">
        <img src="/images/main/slider_sale/pay/uu-dai-thanh-toan-slide-ip16-mb-1-5-update.webp" height="120px" width="279px" alt="">
        <img src="/images/main/slider_sale/pay/acb-iphone.webp" height="120px" width="279px" alt="">
        <img src="/images/main/slider_sale/pay/hsbc-iphone.webp" height="120px" width="279px" alt="">
      </div>
    </div>

    {{-- chuyên trang thương hiệu --}}
    <div class="silder-sale">
      <h3>CHUYÊN TRANG THƯƠNG HIỆU</h3>
      <div style="display: flex;gap: 5px">
        <img src="/images/main/slider_sale/pay/apple-chinh-hang-home.webp" height="120px" width="279px" alt="">
        <img src="/images/main/slider_sale/pay/SIS asus.webp" height="120px" width="279px" alt="">
        <img src="/images/main/slider_sale/pay/gian-hang-samsung-home.webp" height="120px" width="279px" alt="">
        <img src="/images/main/slider_sale/pay/xiaomi.webp" height="120px" width="279px" alt="">
      </div>
    </div>

    {{-- tin công nghệ --}}
    <div class="new_tech">
      <h3>TIN CÔNG NGHỆ</h3>
      <div style="display: flex;gap: 5px">
        @foreach ($new_tech_db as $item)
          <div class="card-hover">
            <div class="card-item">
              <img src="/images/main/new_tech/{{$item->img}}" width="260px">
              <h5>{{$item->title}}</h5>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </main>

  <footer>
    @include('layout.footer')
  </footer>
  
</body>
{{-- js slider img --}}
<script
      type="text/javascript"
      src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
</script>
<script>
  $(document).ready(function(){
  $('.img-slider').slick({
    autoplaySpeed: 7000,
    autoplay: true,
    arrows: true,
    infinite: true,
    asNavFor: '.slider-nav',
    fade: true,
    
    prevArrow: 
    `<button style='button' class='slick-prev pull-left'><svg width="40" height="40" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-left:25px">
    <path fill-rule="evenodd" d="M14.03 7.47a.75.75 0 0 1 0 1.06L10.56 12l3.47 3.47a.75.75 0 1 1-1.06 1.06l-4-4a.75.75 0 0 1 0-1.06l4-4a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"></path>
    </svg></button>`,
    nextArrow:
    `<button style='button' class='slick-next pull-right'><svg width="40" height="40" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-left:-35px">
    <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
    </svg></button>`,
  });
});
$(document).ready(function(){
  $('.slider-nav').slick({
    autoplaySpeed: 7000,
    autoplay: true,
    slidesToShow: 5,
    arrows: false,
    asNavFor: '.img-slider',
    infinite: false,
    focusOnSelect: true,
  })
});
$('.img-slider').mouseover(function() {
  $(this).find('.slick-prev').css('transform', 'translateX(30px)').css('transition-duration',' 1s');
});
$('.img-slider').mouseout(function() {
  $(this).find('.slick-prev').css('transform', 'translateX(-30px)').css('transition-duration',' 1s');
});
$('.img-slider').mouseover(function() {
  $(this).find('.slick-next').css('transform', 'translateX(-30px)').css('transition-duration',' 1s');
});
$('.img-slider').mouseout(function() {
  $(this).find('.slick-next').css('transform', 'translateX(30px)').css('transition-duration',' 1s');
});
</script>
<script>
  $(document).ready(function(){
    $('.slider-mobile').slick({
      rows: 2,
      slidesToScroll: 1,
      slidesToShow: 5,
      arrows: true,
      infinite: false,
      prevArrow: 
      `<button style='button' id="swiper-button-prev" class='slick-prev pull-left'><svg width="40" height="40" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M14.03 7.47a.75.75 0 0 1 0 1.06L10.56 12l3.47 3.47a.75.75 0 1 1-1.06 1.06l-4-4a.75.75 0 0 1 0-1.06l4-4a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"></path>
      </svg></button>`,
      nextArrow:
      `<button style='button' id="swiper-button-next" class='slick-next pull-right'><svg width="40" height="40" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-left:-10px">
      <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
      </svg></button>`,
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

<script>
  $(document).ready(function(){
    $('.hot-sale-slider-item').slick({
      autoplaySpeed: 6500,
      autoplay: true,
      slidesToScroll: 1,
      slidesToShow: 5,
      arrows: true,
      infinite: false,
      prevArrow: 
      `<button style='button' id="swiper-button-prev" class='slick-prev pull-left'><svg width="40" height="40" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-left:25px">
      <path fill-rule="evenodd" d="M14.03 7.47a.75.75 0 0 1 0 1.06L10.56 12l3.47 3.47a.75.75 0 1 1-1.06 1.06l-4-4a.75.75 0 0 1 0-1.06l4-4a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"></path>
      </svg></button>`,
      nextArrow:
      `<button style='button' id="swiper-button-next" class='slick-next pull-right'><svg width="40" height="40" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-left:-25px">
      <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
      </svg></button>`,
    }).on('afterChange', function(event, slick, currentSlide){
       
      });
  });
</script>

<script>

  function getThursdayTimestamp() {
    // Lấy ngày hiện tại
    const today = new Date();

    // Tính toán ngày trong tuần (0: Chủ nhật, 1: Thứ Hai, ...)
    const dayOfWeek = today.getDay();

    // Tính số ngày cần cộng thêm để đến thứ Năm
    const daysToAdd = dayOfWeek >= 4 ? 4 - dayOfWeek : 7 - dayOfWeek + 4;

    // Tạo đối tượng Date cho thứ Năm
    const thursday = new Date(today);
    thursday.setDate(today.getDate() + daysToAdd);
    thursday.setHours(00, 00, 00, 000);
    // Trả về timestamp của thứ Năm
    return thursday.getTime();
  }

  function getSundayOfWeek() {
    const today = new Date();
    const dayOfWeek = today.getDay();
    const daysToAdd = dayOfWeek === 0 ? 0 : 7 - dayOfWeek;

    const sunday = new Date(today);
    sunday.setDate(today.getDate() + daysToAdd);
    sunday.setHours(21, 59, 59, 999);
    return sunday.getTime();
  }

  const sundayOfWeek = getSundayOfWeek();

  function getTimeRemaining(endtime) {
    var t = endtime -  Date.parse(new Date());;
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
      'total': t,
      'days': days,
      'hours': hours,
      'minutes': minutes,
      'seconds': seconds
    };
  }

  function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');

    function updateClock() {
      var t = getTimeRemaining(endtime);

      daysSpan.innerHTML = ('0' + t.days).slice(-2);
      hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
      minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
      secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

      if (t.total <= 0) {
        clearInterval(timeinterval);
      }
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
  }

  initializeClock('clockdiv', sundayOfWeek);
</script>

<script>
  document.getElementById('search').addEventListener('click', () => {
                var _token = $('input[name="_token"]').val();
                var nameKH = document.getElementById('nameKH').value;
                if(nameKH == ''){
                    alert('Vui lòng nhập tên khách hàng');
                }
                $.ajax({
                        url: "{{ url('admin/dsCheckIn') }}",
                        method: "POST",
                        data: { nameKH: nameKH,_token:_token },
                        success: function (data) {
                            $("#danhsachcheckin").html(data);
                        }
                    });
            })
</script>

<script>
  $(document).ready(function(){
    $('.slider-laptop').slick({
      rows: 2,
      slidesToScroll: 1,
      slidesToShow: 5,
      arrows: true,
      infinite: false,
      prevArrow: 
      `<button style='button' id="swiper-button-prev" class='slick-prev pull-left'><svg width="40" height="40" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M14.03 7.47a.75.75 0 0 1 0 1.06L10.56 12l3.47 3.47a.75.75 0 1 1-1.06 1.06l-4-4a.75.75 0 0 1 0-1.06l4-4a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"></path>
      </svg></button>`,
      nextArrow:
      `<button style='button' id="swiper-button-next" class='slick-next pull-right'><svg width="40" height="40" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-left:-10px">
      <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
      </svg></button>`,
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

<script>
  $(document).ready(function(){
    $('.slider-PC').slick({
      rows: 1,
      slidesToScroll: 1,
      slidesToShow: 5,
      arrows: true,
      infinite: false,
      prevArrow: 
      `<button style='button' id="swiper-button-prev" class='slick-prev pull-left'><svg width="40" height="40" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M14.03 7.47a.75.75 0 0 1 0 1.06L10.56 12l3.47 3.47a.75.75 0 1 1-1.06 1.06l-4-4a.75.75 0 0 1 0-1.06l4-4a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"></path>
      </svg></button>`,
      nextArrow:
      `<button style='button' id="swiper-button-next" class='slick-next pull-right'><svg width="40" height="40" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-left:-10px">
      <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
      </svg></button>`,
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

<script>
  $(document).ready(function(){
    $('.silder-sale-items').slick({
      rows: 1,
      slidesToScroll: 1,
      slidesToShow: 4,
      arrows: true,
      infinite: false,
      prevArrow: 
      `<button style='button' id="swiper-button-prev" class='slick-prev pull-left'>
        <svg width="40" height="40" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M14.03 7.47a.75.75 0 0 1 0 1.06L10.56 12l3.47 3.47a.75.75 0 1 1-1.06 1.06l-4-4a.75.75 0 0 1 0-1.06l4-4a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"></path>
        </svg>
      </button>`,
      nextArrow:
      `<button style='button' id="swiper-button-next" class='slick-next pull-right'> 
        <svg width="40" height="40" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-left:-10px">
          <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
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

<script>
  $(document).ready(function(){
    $(".main-ads-left-item-phone-hover").hover(
        function(){
            $(".phone-item-hover").show(); // Hiển thị div con khi hover
        },
        function(){
            $(".phone-item-hover").hide(); // Ẩn div con khi chuột rời đi
        }
    );

    $(".main-ads-left-item-laptop-hover").hover(
        function(){
            $(".laptop-item-hover").show(); // Hiển thị div con khi hover
        },
        function(){
            $(".laptop-item-hover").hide(); // Ẩn div con khi chuột rời đi
        }
    );

});
</script>
</html>