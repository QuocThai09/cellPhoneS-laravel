<?php use Carbon\Carbon;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- cdn của slider img --}}
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
      />
    <title>CellPhoneS</title>
    @include('layout.links')
</head>
<body>
  <header>
    <div class="swiper-backgroud">
      <button id="back-swiper" style="background-color:#E9EFFF;border: none ">
        <svg width="35" height="35" fill="#282424" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M14.03 7.47a.75.75 0 0 1 0 1.06L10.56 12l3.47 3.47a.75.75 0 1 1-1.06 1.06l-4-4a.75.75 0 0 1 0-1.06l4-4a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"></path>
        </svg>
      </button>
      <div style="width: 70%;">
        <swiper-container slides-per-view="3" speed="50" loop="true" css-mode="true">
          <swiper-slide><img src="/images/header/Top_banner_Thu_cu.svg" alt="" width="75%"></swiper-slide>
          <swiper-slide><img src="/images/header/Top_banner_Smember.svg" alt="" width="75%"></swiper-slide>
          <swiper-slide><img src="/images/header/Top_banner_Giao_hang.svg" alt="" width="75%"></swiper-slide>
          <swiper-slide><img src="/images/header/Top_banner_Chinh_hang.svg" alt="" width="75%"></swiper-slide>
        </swiper-container>
      </div>
      <button id="next-swiper" style="background-color:#E9EFFF;border: none ">
        <svg width="35" height="35" fill="#282424" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
  
    <div class="header">
      <div class="header-items">
        <img src="/images/logo.png" alt="" width="12%" style="margin-right: 10px">
        <div style="background-color: #ff7081;padding: 7px;border-radius: 7px;margin-right: 10px">
          <svg width="25" height="25" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.5 9.75a.75.75 0 0 0-.75-.75h-6a.75.75 0 0 0 0 1.5h6a.75.75 0 0 0 .75-.75Z"></path>
            <path d="M12.5 12.75a.75.75 0 0 0-.75-.75h-5a.75.75 0 1 0 0 1.5h5a.75.75 0 0 0 .75-.75Z"></path>
            <path d="M12.75 15a.75.75 0 1 1 0 1.5h-6a.75.75 0 0 1 0-1.5h6Z"></path>
            <path fill-rule="evenodd" d="M6 21.75h13A2.75 2.75 0 0 0 21.75 19v-5.5a.75.75 0 0 0-.75-.75h-3.25V4.943c0-1.423-1.609-2.251-2.767-1.424l-.175.125a2.26 2.26 0 0 1-2.622-.004 3.77 3.77 0 0 0-4.372 0 2.26 2.26 0 0 1-2.622.004l-.175-.125c-1.158-.827-2.767 0-2.767 1.424V18A3.75 3.75 0 0 0 6 21.75ZM8.686 4.86a2.27 2.27 0 0 1 2.628 0 3.76 3.76 0 0 0 4.366.005l.175-.125a.25.25 0 0 1 .395.203V19c0 .45.108.875.3 1.25H6A2.25 2.25 0 0 1 3.75 18V4.943a.25.25 0 0 1 .395-.203l.175.125a3.76 3.76 0 0 0 4.366-.005ZM17.75 19v-4.75h2.5V19a1.25 1.25 0 0 1-2.5 0Z" clip-rule="evenodd"></path>
            </svg>
          <label style="font-size: 15px">Danh mục</label>
        </div>
        <div style="background-color: #ff7081;padding: 7px;border-radius: 7px;display: grid; grid-template-columns: auto auto;height: 40px;margin-right: 10px">
          <div style="text-align: center;grid-row-start: 1; grid-row-end: 3;">
            <svg width="25" height="25" fill="#fafafa" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.75 10a3.25 3.25 0 1 1 6.5 0 3.25 3.25 0 0 1-6.5 0Z"></path>
              <path fill-rule="evenodd" d="M3.774 8.877a8.038 8.038 0 0 1 8.01-7.377h.432a8.038 8.038 0 0 1 8.01 7.377 8.693 8.693 0 0 1-1.933 6.217L13.5 20.956a1.937 1.937 0 0 1-3 0l-4.792-5.862a8.693 8.693 0 0 1-1.934-6.217ZM12 5.25a4.75 4.75 0 1 0 0 9.5 4.75 4.75 0 0 0 0-9.5Z" clip-rule="evenodd"></path>
            </svg>
          </div>
          <div>
            <label style="font-size: 10px;position: relative;left: 5px;top:-10px">Xem giá tại</label>
            <button style="background-color:#ff7081;border: none;">
              <svg width="25" height="25" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-top: -20px;">
                <path fill-rule="evenodd" d="M16.53 8.97a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0l-4-4a.75.75 0 1 1 1.06-1.06L12 12.44l3.47-3.47a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>
          <div>
            <label style="font-size: 15px;position: relative;top:-17px">Hồ Chí Minh</label>
          </div>
        </div>
        
        <input type="text" name="search" id="" placeholder="Bạn cần tìm gì?" style="width: 300px;border-radius: 5px;margin-right: 10px">

        <div class="header-last-item" id="call-by">
          <div style="text-align: center;grid-row-start: 1; grid-row-end: 3;">
            <svg width="30" height="30" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M5.84 9.856a17.216 17.216 0 0 0 8.922 8.663l.012.005.764.34a2.25 2.25 0 0 0 2.74-.737l1.274-1.763a.25.25 0 0 0-.046-.341l-2.224-1.795a.25.25 0 0 0-.358.046l-.866 1.168a.75.75 0 0 1-.912.237 13.387 13.387 0 0 1-6.67-6.67.75.75 0 0 1 .237-.912L9.88 7.23a.25.25 0 0 0 .046-.358L8.132 4.648a.25.25 0 0 0-.341-.046l-1.773 1.28a2.25 2.25 0 0 0-.732 2.756l.554 1.217v.001Zm8.33 10.041a18.716 18.716 0 0 1-9.694-9.416v-.002l-.555-1.22A3.75 3.75 0 0 1 5.14 4.666l1.773-1.28a1.75 1.75 0 0 1 2.386.32l1.795 2.225a1.75 1.75 0 0 1-.32 2.505l-.67.496a11.891 11.891 0 0 0 5.118 5.118l.497-.67a1.75 1.75 0 0 1 2.504-.32l2.225 1.795a1.75 1.75 0 0 1 .32 2.387l-1.275 1.764a3.75 3.75 0 0 1-4.565 1.229l-.758-.338Z" clip-rule="evenodd"></path>
            </svg>
          </div>
          <div>
            <label style="font-size: 12px;position: relative;top:-5px;text-align: left">Gọi mua hàng <br>1800.1234</label>
          </div>
        </div>

        <div class="header-last-item" id="call-by">
          <div style="text-align: center;grid-row-start: 1; grid-row-end: 3;">
            <svg width="30" height="30" fill="#fafafa" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.75 10a3.25 3.25 0 1 1 6.5 0 3.25 3.25 0 0 1-6.5 0Z"></path>
              <path fill-rule="evenodd" d="M3.774 8.877a8.038 8.038 0 0 1 8.01-7.377h.432a8.038 8.038 0 0 1 8.01 7.377 8.693 8.693 0 0 1-1.933 6.217L13.5 20.956a1.937 1.937 0 0 1-3 0l-4.792-5.862a8.693 8.693 0 0 1-1.934-6.217ZM12 5.25a4.75 4.75 0 1 0 0 9.5 4.75 4.75 0 0 0 0-9.5Z" clip-rule="evenodd"></path>
            </svg>
          </div>
          <div>
            <label style="font-size: 12px;position: relative;top:-5px;text-align: left">Cửa hàng<br>gần bạn</label>
          </div>
        </div>

        <div class="header-last-item" id="call-by">
          <div style="text-align: center;grid-row-start: 1; grid-row-end: 3;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="white" d="M18 8h-2V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v10h2a3 3 0 1 0 6 0h4a3 3 0 1 0 6 0h2v-5zM7 18.5a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 7 18.5M4 14V7h10v7zm13 4.5a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 17 18.5"/></svg>
          </div>
          <div>
            <label style="font-size: 12px;position: relative;top:-5px;text-align: left">Tra cứu<br>đơn hàng</label>
          </div>
        </div>

        <div class="header-last-item" id="call-by">
          <svg width="30" height="30" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7.25 7.13v.37H5.749a.901.901 0 0 0-.892.77L4.64 9.763a30.316 30.316 0 0 0 0 8.79 2.885 2.885 0 0 0 2.557 2.451l.629.066c2.776.288 5.574.288 8.35 0l.63-.066a2.885 2.885 0 0 0 2.556-2.451 30.318 30.318 0 0 0 0-8.79l-.218-1.493a.901.901 0 0 0-.892-.77H16.75v-.37a4.75 4.75 0 1 0-9.5 0Zm5.56-3.147A3.25 3.25 0 0 0 8.75 7.13v.37h6.5v-.37a3.25 3.25 0 0 0-2.44-3.147ZM8.75 9a.75.75 0 0 0-1.5 0v2a.75.75 0 0 0 1.5 0V9Zm8 0a.75.75 0 0 0-1.5 0v2a.75.75 0 0 0 1.5 0V9Z" clip-rule="evenodd"></path>
            </svg>
          <div>
            <label style="font-size: 12px;position: relative;top:-5px;text-align: left">Giỏ<br>hàng</label>
          </div>
        </div>

        <div class="header-last-item" id="call-by">
          <svg width="25" height="25" fill="#fcfcfc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M12 4a3 3 0 1 0 0 6 3 3 0 0 0 0-6ZM7 7a5 5 0 1 1 10 0A5 5 0 0 1 7 7Zm3 8a4 4 0 0 0-4 4v1a1 1 0 1 1-2 0v-1a6 6 0 0 1 6-6h4a6 6 0 0 1 6 6v1a1 1 0 1 1-2 0v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"></path>
          </svg>
        </div>
      </div>
    </div>
  </header>
  <main>
    <div class="main-ads">
      <div class="main-ads-custom">
        <div style="width: 80px;height: 80px;background-color: #ffffff;position: absolute;left: 333px;top:200px;z-index: 3;"></div>
        <div style="width: 120px;height: 80px;background-color: #ffffff;position: absolute;left: 1103px;top:200px;z-index: 3;"></div>
        <div class="main-ads-left">
          @for ($i = 0; $i < 12; $i++)
            <div class="main-ads-left-item">
              <div class="main-ads-left-item-text">
                <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="m18.75 10.5-.006.243.006.257-.006.243.006.257-.006.245.006.255-.162 7.103a3.359 3.359 0 0 1-2.996 3.263 33.364 33.364 0 0 1-7.184 0 3.359 3.359 0 0 1-2.996-3.263L5.25 12l.006-.257-.006-.243.006-.256L5.25 11l.006-.256-.006-.244.164-6.098c.002-.085.008-.169.018-.252l.003-.035.003-.029a2.663 2.663 0 0 1 1.355-2.068 2.871 2.871 0 0 1 1.235-.405 43.333 43.333 0 0 1 7.944 0 2.871 2.871 0 0 1 1.233.404 2.663 2.663 0 0 1 1.356 2.063l.008.074c.01.082.015.165.017.248l.164 6.098Zm-1.676-6.18.157 6.867-.127 4.73a2.1 2.1 0 0 1-1.907 2.036 34.875 34.875 0 0 1-6.394 0 2.1 2.1 0 0 1-1.907-2.035l-.127-4.73.157-6.867c0-.015 0-.03.002-.044.06-.403.292-.75.623-.96a1.16 1.16 0 0 1 .412-.125c2.683-.29 5.39-.29 8.074 0 .148.016.287.059.412.124.33.211.564.559.623.961l.002.044ZM12 21.7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z" clip-rule="evenodd"></path>
                </svg>
                Điện thoại
              </div>
              <div>
                <svg width="25" height="25" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-left: 40px">
                  <path fill-rule="evenodd" d="M9.97 7.47a.75.75 0 0 1 1.06 0l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06L13.44 12 9.97 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                </svg>
              </div>
            </div>
          @endfor
        </div>
        <div class="item-hover">
  
        </div>
        <div class="main-ads-center">
          <div class="img-slider">
            <div class="slider-item">
                <img src="/images/main/sale1.webp" alt="">
            </div>
            <div class="slider-item">
                <img src="/images/main/sale2.webp" alt="">
            </div>
            <div class="slider-item">
                <img src="/images/main/sale3.webp" alt="">
            </div>
            <div class="slider-item">
                <img src="/images/main/sale4.webp" alt="">
            </div>
            <div class="slider-item">
                <img src="/images/main/sale5.webp" alt="">
            </div>
            <div class="slider-item">
                <img src="/images/main/sale1.webp" alt="">
            </div>
            <div class="slider-item">
                <img src="/images/main/sale2.webp" alt="">
            </div>
          </div>
          <div class="slider-nav">
            <button>
              Điện thoại 01
              <div class="btn-hover"></div>
            </button>
            <button>
              Điện thoại 02
              <div class="btn-hover"></div>
            </button>
            <button>
              Điện thoại 03
              <div class="btn-hover"></div>
            </button>
            <button>
              Điện thoại 04
              <div class="btn-hover"></div>
            </button>
            <button>
              Điện thoại 05
              <div class="btn-hover"></div>
            </button>
            <button>
              Điện thoại 06
              <div class="btn-hover"></div>
            </button>
            <button>
              Điện thoại 07
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
        <h5>ĐIỆN THOẠI NỔI BẬT</h5>
       <div style="position: absolute;right: 0;">
          @for ($i = 0; $i < 11; $i++)
            <button class="btn-content">12</button>
          @endfor
          <button class="btn-content">Xem tất cả</button>
       </div>
      </div>
      <div class="main-mobile-items">
        <div class="slider-mobile">
          @for ($i = 0; $i < 19; $i++)
            <div style="margin: 10px">
              <div class="discount-tab1" ></div>
              <div class="discount-tab2" ></div>
              <a class="link-slider-item" href="#">
                <div class="card">
                  <div class="discount">
                    Giảm 10%
                  </div>
                  <div class="installment">
                    Trả góp 0%
                  </div>
                  <img src="/images/main/mobile/dien-thoai-samsung-galaxy-m55.webp" width="75%" style="margin: auto"  alt="">
                  <h6 style="margin: 10px">Samsung Galaxy M55 (12GB 256GB)</h6>
                  <div class="price">
                    <p class="price-discount">10.990.000đ</p>
                    <p class="price-decoration">12.690.000đ</p>
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
          @endfor
        </div>
      </div>
      <div style="width: 80px;height: 60px;background-color: #ffffff;position: absolute;left: -80px;top:448px;z-index: 3;"></div>
        <div id="slick-next-div" style="width: 30px;height: 60px;background-color: #ffffff;position: absolute;left: 1135px;top:448px;z-index: 3;"></div>
      
    </div>
    
  </main>
</body>
<script>

  const swiperEl = document.querySelector('swiper-container');

  const buttonNext = document.getElementById('next-swiper');
  const buttonBack = document.getElementById('back-swiper');

  const callBy = document.getElementById('call-by');

  buttonNext.addEventListener('click', () => {
    swiperEl.swiper.slideNext();
  });

  // buttonNext.addEventListener('click', () => {
  //   swiperEl.swiper.allowSlidePrev();
  // });

  setInterval(function(){
    setTimeout(function() {
      swiperEl.swiper.slideNext();
    }, 2000);
  },5000);

  callBy.addEventListener('click', () => {
    alert('call  - by');
  });

</script>
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
      `<button style='button' id="swiper-button-prev" class='slick-prev pull-left'><svg width="40" height="40" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-left:25px">
      <path fill-rule="evenodd" d="M14.03 7.47a.75.75 0 0 1 0 1.06L10.56 12l3.47 3.47a.75.75 0 1 1-1.06 1.06l-4-4a.75.75 0 0 1 0-1.06l4-4a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"></path>
      </svg></button>`,
      nextArrow:
      `<button style='button' id="swiper-button-next" class='slick-next pull-right'><svg width="40" height="40" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-left:-25px">
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
</html>