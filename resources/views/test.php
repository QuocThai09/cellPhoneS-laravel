<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Vehicle Details</title>
        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
          />
          <link rel="stylesheet" href="css/test.css">
        <!-- Font Link -->
       
    </head>
    <body class="wrapper">

        <!-- User this HTML for Slider -->
       


         <section class="banner-section">
            <div class="container">
                <div class="vehicle-detail-banner banner-content clearfix">
                    <div class="banner-slider">
                        <div class="slider slider-for">
                            <div class="slider-banner-image">
                                <img src="https://images.unsplash.com/photo-1570942872213-1242607a35eb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Car-Image">
                            </div> 
                            <div class="slider-banner-image">
                                <img src="https://images.unsplash.com/photo-1570171278960-d6c2b316f3b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="Car-Image">
                            </div> 
                            <div class="slider-banner-image">
                                <img src="https://images.unsplash.com/photo-1564376130023-5360fbb7c91b?ixlib=rb-1.2.1&auto=format&fit=crop&w=724&q=80" alt="Car-Image">
                            </div> 
                             <div class="slider-banner-image">
                                <img src="https://images.unsplash.com/photo-1570942872213-1242607a35eb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Car-Image">
                            </div> 
                            <div class="slider-banner-image">
                                <img src="https://images.unsplash.com/photo-1570171278960-d6c2b316f3b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="Car-Image">
                            </div> 
                            <div class="slider-banner-image">
                                <img src="https://images.unsplash.com/photo-1564376130023-5360fbb7c91b?ixlib=rb-1.2.1&auto=format&fit=crop&w=724&q=80" alt="Car-Image">
                            </div> 
                             <div class="slider-banner-image">
                                <img src="https://images.unsplash.com/photo-1570942872213-1242607a35eb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Car-Image">
                            </div> 
                            <div class="slider-banner-image">
                                <img src="https://images.unsplash.com/photo-1570171278960-d6c2b316f3b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="Car-Image">
                            </div> 
                            <div class="slider-banner-image">
                                <img src="https://images.unsplash.com/photo-1564376130023-5360fbb7c91b?ixlib=rb-1.2.1&auto=format&fit=crop&w=724&q=80" alt="Car-Image">
                            </div> 
                        </div>
                        <div class="slider slider-nav thumb-image">
                            <div class="thumbnail-image">
                                <div class="thumbImg"> <span>White Pearl Crystal Shine1</span>
                                </div>
                               
                            </div>
                            <div class="thumbnail-image">
                                <div class="thumbImg"><span>White Pearl Crystal Shine2</span>
                                </div>
                                
                            </div>
                            <div class="thumbnail-image">
                                <div class="thumbImg"><span>White Pearl Crystal Shine3</span>
                                </div>
                                
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End User this HTML for Slider -->

        
    </body>
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
    <script>
      
$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav',
    autoplay: true,
    autoplaySpeed: 2000,
  
});
$('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    infinite: true,
    vertical:true,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    
});
    </script>
</html>
