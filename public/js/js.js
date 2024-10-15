

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



      type="text/javascript"
      src="https://code.jquery.com/jquery-1.11.0.min.js"
    
      type="text/javascript"
      src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    


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
