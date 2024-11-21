<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smember</title>
    @include('layout.links')
</head>
<body>
    @include('layout.header')
    <div style="margin-top: 110px"></div>
    <div class="register-body">
        <svg class="register-back" width="25" height="25" fill="#d2cbcb" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.648 20.048a1.2 1.2 0 0 1-1.696 0l-7.2-7.2a1.2 1.2 0 0 1 0-1.696l7.2-7.2a1.2 1.2 0 0 1 1.696 1.696L6.497 10.8H20.4a1.2 1.2 0 1 1 0 2.4H6.497l5.151 5.152a1.2 1.2 0 0 1 0 1.696Z" clip-rule="evenodd"></path>
        </svg>
        <div class="register-header">
            <img src="/images/register/Shipper_CPS3.77d4065.png" alt="" height="100px">
            <h2>Đăng ký với</h2>
            <div class="login-service flex">
                <div class="login-gg flex pointer">
                    <img src="/images/register/image45.93ceca6.png" alt="" height="24px">
                    <p>Google</p>
                </div>
                <div class="login-zl flex pointer">
                    <img src="/images/register/Logo-Zalo-Arc.a36365b.png" alt="" height="24px">
                    <p>Zalo</p>
                </div>
            </div>
            <div class="register-line flex">
                <hr>OR<hr>
            </div>
        </div>
        <form action="#" method="post">
            <input type="text" name="userName" id="" maxlength="255" placeholder="Nhập họ và tên" class="user-name border-none"><br>
            <label id="lb-name" class="animate__animated animate__fadeInUp hidden">HỌ VÀ TÊN (*)</label>
            <span class="warning-text name">Vui lòng không bỏ trống</span>
            <hr class="input-line name">
            <div class="close-input-user">
                <svg width="20" height="20" fill="#d2cbcb" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12 21.6a9.6 9.6 0 1 0 0-19.2 9.6 9.6 0 0 0 0 19.2ZM10.448 8.752a1.2 1.2 0 0 0-1.696 1.696L10.303 12l-1.551 1.552a1.2 1.2 0 1 0 1.696 1.696L12 13.697l1.552 1.551a1.2 1.2 0 0 0 1.696-1.696L13.697 12l1.551-1.552a1.2 1.2 0 0 0-1.696-1.696L12 10.303l-1.552-1.551Z" clip-rule="evenodd"></path>
                </svg>
            </div>

            <input type="tel" name="phoneNumber" id="" maxlength="11" placeholder="Nhập số điện thoại" class="phone-number border-none"><br>
            <label id="lb-phone" class="animate__animated animate__fadeInUp hidden">SỐ ĐIỆN THOẠI (*)</label>
            <span class="warning-text sp-phone">Vui lòng không bỏ trống</span>
            <hr class="input-line phone">
            <div class="close-input-phone">
                <svg width="20" height="20" fill="#d2cbcb" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12 21.6a9.6 9.6 0 1 0 0-19.2 9.6 9.6 0 0 0 0 19.2ZM10.448 8.752a1.2 1.2 0 0 0-1.696 1.696L10.303 12l-1.551 1.552a1.2 1.2 0 1 0 1.696 1.696L12 13.697l1.552 1.551a1.2 1.2 0 0 0 1.696-1.696L13.697 12l1.551-1.552a1.2 1.2 0 0 0-1.696-1.696L12 10.303l-1.552-1.551Z" clip-rule="evenodd"></path>
                </svg>
            </div>

            <input type="text" name="email" id="" placeholder="Nhập Email (Không bắt buộc)" class="email border-none" autocomplete="off"><br>
            <label id="lb-email" class="animate__animated animate__fadeInUp hidden">EMAIL (*)</label>
            <hr class="input-line email">
            <span class="sp-email">Vui lòng kiểm tra lại email</span><br>
            <span class="txt-email">Hóa đơn VAT khi mua hàng sẽ được gửi qua email này</span>
            <div class="close-input-email">
                <svg width="20" height="20" fill="#d2cbcb" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12 21.6a9.6 9.6 0 1 0 0-19.2 9.6 9.6 0 0 0 0 19.2ZM10.448 8.752a1.2 1.2 0 0 0-1.696 1.696L10.303 12l-1.551 1.552a1.2 1.2 0 1 0 1.696 1.696L12 13.697l1.552 1.551a1.2 1.2 0 0 0 1.696-1.696L13.697 12l1.551-1.552a1.2 1.2 0 0 0-1.696-1.696L12 10.303l-1.552-1.551Z" clip-rule="evenodd"></path>
                </svg>
            </div>

            <input type="text" name="birthDay" placeholder="Ngày sinh" onfocus="(this.type='date')" max="2030-01-01" class="birth-day border-none"><br>
            <label id="lb-birthday" class="animate__animated animate__fadeInUp hidden">NGÀY SINH</label>
            <hr class="input-line birthDay">

            <input type="password" name="password" placeholder="Nhập mật khẩu" class="password border-none" autocomplete="off"><br>
            <label id="lb-pw" class="animate__animated animate__fadeInUp hidden">MẬT KHẨU (*)</label>
            <hr class="input-line pw">
            <span class="warning-text sp-pw">Vui lòng không bỏ trống</span>
            <span class="warning-text sp-pw-kt6">Mật khẩu tối thiểu 6 ký tự, có ít nhất 1 chữ và 1 số</span>
            <span class="txt-pw">(*) Mật khẩu tối thiểu 6 ký tự, có ít nhất 1 chữ và 1 số. (VD: 12345a)</span>
            <div class="show-pw">
                <svg width="20" height="20" fill="#ccc7c7" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                    <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                </svg>
            </div>

            <input type="password" name="re-password" placeholder="Nhập lại mật khẩu" class="re-password border-none" autocomplete="off"><br>
            <label id="lb-repw" class="animate__animated animate__fadeInUp hidden">XÁC NHẬN MẬT KHẨU (*)</label>
            <hr class="input-line re-pw">
            <span class="warning-text sp-repw">Vui lòng không bỏ trống</span>
            <span class="warning-text sp-repw-kt6">Mật khẩu tối thiểu 6 ký tự, có ít nhất 1 chữ và 1 số</span>
            <div class="show-repw">
                <svg width="20" height="20" fill="#ccc7c7" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                    <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                </svg>
            </div>
            <div class="terms-services">
                <div class="check-box">
                    <input type="checkbox" name="subscription" id="subscription" value="" >
                    <lable class="txt-subscription">Đăng ký nhận bản tin khuyến mãi từ CellphoneS</lable>
                </div>
                <div class="check-box">
                    <input type="checkbox" name="insurance" id="insurance" checked>
                    <lable class="txt-insurance">Tôi đồng ý với các điều khoản bảo mật cá nhân</lable>
                </div>
                <div class="check-box">
                    <input type="checkbox" name="studentInfo" id="studentInfo">
                    <lable class="txt-studentInfo">Tôi là Học sinh - sinh viên</lable>
                    <svg width="20" height="20" fill="#ccc7c7" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm0 18a8 8 0 1 1 0-16.001A8 8 0 0 1 12 20Z"></path>
                        <path d="M12 6a3.5 3.5 0 0 0-3.5 3.5 1 1 0 0 0 2 0A1.5 1.5 0 1 1 12 11a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-1.16A3.49 3.49 0 0 0 12 6Z"></path>
                        <path d="M12 18a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"></path>
                        </svg>
                </div>
                <p class="item-description">(nhận thêm ưu đãi tới 500k/ sản phẩm)</p>
            </div>
            <div class="box-studentInfo">
                <div class="header-studentInfo">
                    <p>TÔI LÀ</p>
                    <a href="">Xem thể lệ & lưu ý</a>
                </div>
                <div class="option-group">
                    <input type="radio" name="option-studentInfo" id="sv" value="student" checked>
                    <span id="txt-sv">Sinh viên</span>
                    <input type="radio" name="option-studentInfo" id="hs" value="pupil">
                    <span id="txt-hs">Học sinh</span>
                </div>
                <span class="note-student">(Lưu ý: không áp dụng hệ liên thông, văn bằng 2, vừa học vừa làm, đại học từ xa, cao học, du học, học nghề)</span>
                <div class="form-studentInfo">
                    <div class="select-option">
                        <input autocomplete="off" type="text" name="school" id="school" placeholder="Chọn trường" class="border-none">
                        <div class="icon-input">
                            <svg class="svg-icon" width="25" height="25" fill="none" stroke="#9d9d9d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </div>
                        <span class="save-school"></span>
                    </div>
                </div>
                <div class="list-data" id="list-school">
                    <ul>
                        @foreach ($school_db as $item)
                            <li data-schoolid = "{{$item->id}}">{{$item->school_name}}</li>
                        @endforeach
                        <li data-schoolid = "0">Khác</li>
                    </ul>
                </div>

                <input autocomplete="off" type="text" name="idsv" id="idsv" placeholder="Mã số sinh viên/học sinh" class="idsv border-none"><br>
                <label id="lb-idsv" class="animate__animated animate__fadeInUp hidden">MÃ SỐ SINH VIÊN/ HỌC SINH (*)</label>
                <hr class="input-line idsv">
                <span class="warning-text sp-idsv">Vui lòng không bỏ trống</span>
                <div class="close-input-idsv">
                    <svg width="20" height="20" fill="#d2cbcb" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12 21.6a9.6 9.6 0 1 0 0-19.2 9.6 9.6 0 0 0 0 19.2ZM10.448 8.752a1.2 1.2 0 0 0-1.696 1.696L10.303 12l-1.551 1.552a1.2 1.2 0 1 0 1.696 1.696L12 13.697l1.552 1.551a1.2 1.2 0 0 0 1.696-1.696L13.697 12l1.551-1.552a1.2 1.2 0 0 0-1.696-1.696L12 10.303l-1.552-1.551Z" clip-rule="evenodd"></path>
                    </svg>
                </div>

                <input autocomplete="off" type="text" name="nameCard" id="nameCard" placeholder="Họ và tên trên thẻ HSSV" class="nameCard border-none"><br>
                <label id="lb-nameCard" class="animate__animated animate__fadeInUp hidden">HỌ VÀ TÊN TRÊN THẺ HSSV (*)</label>
                <hr class="input-line nameCard">
                <span class="warning-text sp-nameCard">Vui lòng không bỏ trống</span>
                <div class="close-input-nameCard">
                    <svg width="20" height="20" fill="#d2cbcb" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12 21.6a9.6 9.6 0 1 0 0-19.2 9.6 9.6 0 0 0 0 19.2ZM10.448 8.752a1.2 1.2 0 0 0-1.696 1.696L10.303 12l-1.551 1.552a1.2 1.2 0 1 0 1.696 1.696L12 13.697l1.552 1.551a1.2 1.2 0 0 0 1.696-1.696L13.697 12l1.551-1.552a1.2 1.2 0 0 0-1.696-1.696L12 10.303l-1.552-1.551Z" clip-rule="evenodd"></path>
                    </svg>
                </div>

                <input type="text" name="emailSchool" id="" placeholder="Email trường (Không bắt buộc)" class="emailSchool border-none" autocomplete="off"><br>
                <label id="lb-emailSchool" class="animate__animated animate__fadeInUp hidden">EMAIL TRƯỜNG (*)</label>
                <hr class="input-line emailSchool">
                <span class="sp-email">Vui lòng kiểm tra lại email sinh viên/ học sinh</span><br>
                <div class="close-input-emailSchool">
                    <svg width="20" height="20" fill="#d2cbcb" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12 21.6a9.6 9.6 0 1 0 0-19.2 9.6 9.6 0 0 0 0 19.2ZM10.448 8.752a1.2 1.2 0 0 0-1.696 1.696L10.303 12l-1.551 1.552a1.2 1.2 0 1 0 1.696 1.696L12 13.697l1.552 1.551a1.2 1.2 0 0 0 1.696-1.696L13.697 12l1.551-1.552a1.2 1.2 0 0 0-1.696-1.696L12 10.303l-1.552-1.551Z" clip-rule="evenodd"></path>
                    </svg>
                </div>

                <input type="text" name="dateCard" placeholder="Ngày hết hạn thẻ HSSV" onfocus="(this.type='date')" max="2030-01-01" class="dateCard border-none"><br>
                <label id="lb-dateCard" class="animate__animated animate__fadeInUp hidden">NGÀY HẾT HẠN</label>
                <hr class="input-line dateCard">
                <span class="txt-dateCard">Hoặc ngày ra trường dự kiến</span>

                <div class="img-card">
                    <h>Tải lên ảnh thẻ học sinh - sinh viên</h><br>
                    <span>Nếu thẻ sinh viên không có niên khóa, vui lòng bổ sung thêm hình ảnh xác minh thời gian học</span>
                    <div class="up-load-img-card">
                        <div class="border-card">
                            <div class="card-hssv font">
                                <input type="file" name="imageCardFront" id="imageCardFront" style="display: none" accept="image/png,image/jpeg,image/webp">
                                <label class="lb-img" for="imageCardFront">
                                    <svg width="25" height="25" fill="none" stroke="#637381" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                                        <path d="M21 11v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h2a2 2 0 0 0 2-2 1 1 0 0 1 1-1h2"></path>
                                        <path d="M15 6h6"></path>
                                        <path d="M18 3v6"></path>
                                    </svg><br>
                                    Mặt trước
                                </label>
                            </div>
                        </div>
                        <div class="border-card">
                            <div class="card-hssv back">
                                <input type="file" name="imageCardback" id="imageCardback" style="display: none" accept="image/png,image/jpeg,image/webp">
                                <label class="lb-img" for="imageCardback">
                                    <svg width="25" height="25" fill="none" stroke="#637381" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                                        <path d="M21 11v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h2a2 2 0 0 0 2-2 1 1 0 0 1 1-1h2"></path>
                                        <path d="M15 6h6"></path>
                                        <path d="M18 3v6"></path>
                                    </svg><br>
                                    Mặt sau
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <button class="btn-register" type="submit">Đăng ký</button>
            <div class="link-login">
                <span>Bạn đã có tài khoản?</span>
                <a href="#">Đăng nhập ngay</a>
            </div>
        </form>
    </div>
</body>
<script>
    function validatePassword(password) {
        // Biểu thức chính quy để kiểm tra ít nhất một chữ cái và một số, va it nha 6 ktu
        const regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/; 
        // Kiểm tra mật khẩu có khớp với biểu thức chính quy không 
        if (regex.test(password)) { return true; } 
        else { return false; }
    }

    $(document).ready(function(){
        //focus input user name đổi màu hr
        $('.user-name').focus(function(){
            $('.input-line.name').addClass('focused')
            $('#lb-name').show()
            //tô color red cho lần focus thứ 2 
            $('#lb-name').css('color','#d70b0b')
        })
        $('.user-name').blur(function(){
            $('.input-line.name').removeClass('focused')
            //kiểm tra user name có để trống hay k 
            if ($(this).val() =="") {
                $('.warning-text.name').show()
                $('#lb-name').hide()
            }else{
                $('.warning-text.name').hide()
                $('#lb-name').css('color','#C4CDD5')
            }
        })

        //nut xoa val cua input user
        $('.close-input-user').click(function(){
            $('.user-name').val('')
            $('.close-input-user').hide()
            $('.user-name').focus()
            $('#lb-name').css('color','red')
        })

        $('.close-input-user').hover(
            function(){
                $('.close-input-user').show()
            },
            function(){
                $('.close-input-user').hide()
            }
        )

        $('.user-name').hover(
            function(){
                if ($(this).val() !=="") {
                    $('.close-input-user').show()
                }
            },
            function(){
                if ($(this).val() !=="") {
                     $('.close-input-user').hide()
                }
            }
        );

        //focus input phone number 
        $('.phone-number').focus(function(){
            $('.input-line.phone').addClass('focused')
            $('#lb-phone').show()
            //tô color red cho lần focus thứ 2 
            $('#lb-phone').css('color','#d70b0b')
        })
        $('.phone-number').blur(function(){
            $('.input-line.phone').removeClass('focused')
            //kiểm tra user name có để trống hay k 
            if ($(this).val() =="") {
                $('.warning-text.sp-phone').show()
                $('#lb-phone').hide()
            }else{
                $('.warning-text.sp-phone').hide()
                $('#lb-phone').css('color','#C4CDD5')
            }
        })

        //nut xoa val cua input phone
        $('.close-input-phone').click(function(){
            $('.phone-number').val('')
            $('.close-input-phone').hide()
            $('.phone-number').focus()
        })

        $('.close-input-phone').hover(
            function(){
                $('.close-input-phone').show()
            },
            function(){
                $('.close-input-phone').hide()
            }
        )

        $('.phone-number').hover(
            function(){
                if ($(this).val() !=="") {
                    $('.close-input-phone').show()
                }
            },
            function(){
                if ($(this).val() !=="") {
                     $('.close-input-phone').hide()
                }
            }
        );

        //focus input email 
        $('.email').focus(function(){
            $('.input-line.email').addClass('focused')
            $('#lb-email').show()
            //tô color red cho lần focus thứ 2 
            $('#lb-email').css('color','#d70b0b')
        })
        $('.email').blur(function(){
            $('.input-line.email').removeClass('focused')
            var txtEmail = $(this).val()
            //kiểm tra email có để trống hay k 
            if (txtEmail !="" && !(txtEmail.endsWith('@gmail.com'))) {
                $('.sp-email').show()
                $('.txt-email').css('top','-50px')
                $('#lb-email').css('color','#C4CDD5')
            } if(txtEmail.endsWith('@gmail.com')){
                $('.sp-email').hide()
                $('.txt-email').css('top','-60px')
                $('#lb-email').css('color','#C4CDD5')
            } else{
                $('#lb-email').hide()
            }
        })

        //nut xoa val cua input phone
        $('.close-input-email').click(function(){
            $('.email').val('')
            $('.close-input-email').hide()
            $('.email').focus()
            $('.sp-email').hide()
            $('.txt-email').css('top','-60px')
        })

        $('.close-input-email').hover(
            function(){
                $('.close-input-email').show()
            },
            function(){
                $('.close-input-email').hide()
            }
        )

        $('.email').hover(
            function(){
                if ($(this).val() !=="") {
                    $('.close-input-email').show()
                }
            },
            function(){
                if ($(this).val() !=="") {
                     $('.close-input-email').hide()
                }
            }
        );

        //focus ngay sinh 
        $('.birth-day').focus(function(){
            $('.input-line.birthDay').addClass('focused')
            $('#lb-birthday').show()
            //tô color red cho lần focus thứ 2 
            $('#lb-birthday').css('color','#d70b0b')
        })
        $('.birth-day').blur(function(){
            $('.input-line.birthDay').removeClass('focused')
            //tô color red cho lần focus thứ 2 
            $('#lb-birthday').css('color','#C4CDD5')
        })

        //focus pw 
        $('.password').focus(function(){
            $('.input-line.pw').addClass('focused')
            $('#lb-pw').show()
            //tô color red cho lần focus thứ 2 
            $('#lb-pw').css('color','#d70b0b')
        })
        $('.password').blur(function(){
            $('.input-line.pw').removeClass('focused')
            //tô color red cho lần focus thứ 2 
            $('#lb-pw').css('color','#C4CDD5')
            //ktra để trống
            if ($(this).val() =="") {
                $('.warning-text.sp-pw').show()
                $('#lb-pw').hide()
                $('.txt-pw').css('top','-20px')
                $('.warning-text.sp-pw-kt6').hide()
            }
            else if(!validatePassword($(this).val())){
                $('.warning-text.sp-pw').hide()
                $('.warning-text.sp-pw-kt6').show()
                $('.txt-pw').css('top','-20px')
                // console.log($(this).val())
            } 
            else{
                $('.warning-text.sp-pw').hide()
                $('#lb-pw').css('color','#C4CDD5')
                $('.txt-pw').css('top','-35px')
                $('.warning-text.sp-pw-kt6').hide()
            }
        })
        $('.password').hover(
            function(){
                if($(this).val()!=""){
                    $('.show-pw').show()
                }
            },
            function(){
                $('.show-pw').hide()
            }
        )

        //show pw
        $('.show-pw').click(function(){
            const type = $('.password').attr('type') === 'password' ? 'text':'password';
            $('.password').attr('type',type);
            if (type == 'password') {
                $(this).html(`<svg width="20" height="20" fill="#ccc7c7" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                            <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                            </svg>`)
            }else{
                $(this).html(`<svg width="20" height="20" fill="#ccc7c7" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.031 3 3 4.031l16.969 16.97L21 19.968 4.031 3Z"></path>
                            <path d="m12.156 9.008 2.84 2.839a3.004 3.004 0 0 0-2.84-2.84Z"></path>
                            <path d="m11.843 14.995-2.84-2.839a3.003 3.003 0 0 0 2.84 2.84Z"></path>
                            <path d="M12 16.496a4.5 4.5 0 0 1-4.34-5.688L4.421 7.57C3.099 8.782 1.839 10.362.75 11.996c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1a10.935 10.935 0 0 0 3.714-.647l-2.513-2.512c-.388.106-.788.16-1.19.16Z"></path>
                            <path d="M12 7.5a4.5 4.5 0 0 1 4.34 5.688l3.312 3.312c1.367-1.23 2.629-2.886 3.598-4.5-1.237-2.036-2.949-4.151-4.743-5.382-2.05-1.405-4.243-2.118-6.519-2.118a10.45 10.45 0 0 0-3.666.67l2.49 2.49c.387-.107.786-.16 1.188-.16Z"></path>
                            </svg>`)
            }
        })
        $('.show-pw').hover(
            function(){
                $(this).show();
            },
            function(){
                $(this).hide();
            },
        )

        //focus re-pw 
        $('.re-password').focus(function(){
            $('.input-line.re-pw').addClass('focused')
            $('#lb-repw').show()
            //tô color red cho lần focus thứ 2 
            $('#lb-repw').css('color','#d70b0b')
        })
        $('.re-password').blur(function(){
            $('.input-line.re-pw').removeClass('focused')
            //tô color red cho lần focus thứ 2 
            $('#lb-repw').css('color','#C4CDD5')
            //ktra để trống
            if ($(this).val() =="") {
                $('.warning-text.sp-repw').show()
                $('#lb-repw').hide()
                $('.txt-repw').css('top','-20px')
                $('.warning-text.sp-repw-kt6').hide()
            }
            else if(!validatePassword($(this).val())){
                $('.warning-text.sp-repw').hide()
                $('.warning-text.sp-repw-kt6').show()
                $('.txt-repw').css('top','-20px')
                // console.log($(this).val())
            } 
            else{
                $('.warning-text.sp-repw').hide()
                $('#lb-repw').css('color','#C4CDD5')
                $('.txt-repw').css('top','-35px')
                $('.warning-text.sp-repw-kt6').hide()
            }
        })
        $('.re-password').hover(
            function(){
                if($(this).val()!=""){
                    $('.show-repw').show()
                }
            },
            function(){
                $('.show-repw').hide()
            }
        )
        //show pw
        $('.show-repw').click(function(){
            const type = $('.re-password').attr('type') === 'password' ? 'text':'password';
            $('.re-password').attr('type',type);
            if (type == 'password') {
                $(this).html(`<svg width="20" height="20" fill="#ccc7c7" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                            <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                            </svg>`)
            }else{  
                $(this).html(`<svg width="20" height="20" fill="#ccc7c7" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.031 3 3 4.031l16.969 16.97L21 19.968 4.031 3Z"></path>
                            <path d="m12.156 9.008 2.84 2.839a3.004 3.004 0 0 0-2.84-2.84Z"></path>
                            <path d="m11.843 14.995-2.84-2.839a3.003 3.003 0 0 0 2.84 2.84Z"></path>
                            <path d="M12 16.496a4.5 4.5 0 0 1-4.34-5.688L4.421 7.57C3.099 8.782 1.839 10.362.75 11.996c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1a10.935 10.935 0 0 0 3.714-.647l-2.513-2.512c-.388.106-.788.16-1.19.16Z"></path>
                            <path d="M12 7.5a4.5 4.5 0 0 1 4.34 5.688l3.312 3.312c1.367-1.23 2.629-2.886 3.598-4.5-1.237-2.036-2.949-4.151-4.743-5.382-2.05-1.405-4.243-2.118-6.519-2.118a10.45 10.45 0 0 0-3.666.67l2.49 2.49c.387-.107.786-.16 1.188-.16Z"></path>
                            </svg>`)
            }
        })
        $('.show-repw').hover(
            function(){
                $(this).show();
            },
            function(){
                $(this).hide();
            },
        )

        //check bõx
        $('.txt-subscription').click(function(){
            const checked = $('#subscription').attr('checked') === 'checked'? false : true;
            $('#subscription').attr('checked',checked)
        })
        $('.txt-insurance').click(function(){
            const checked = $('#insurance').attr('checked') === 'checked'? false : true;
            $('#insurance').attr('checked',checked)
        })
        $('.txt-studentInfo').click(function(){
            const checked = $('#studentInfo').attr('checked') === 'checked'? false : true;
            $('#studentInfo').attr('checked',checked)
            if (checked) {
                $('.box-studentInfo').show()
            }else{
                $('.box-studentInfo').hide()
            }
        })
        $('#studentInfo').click(function(){
            const checked = $('#studentInfo').is(':checked') ? true : false;
            if (checked) {
                $('.box-studentInfo').show()
            }else{
                $('.box-studentInfo').hide()
            }
        })


        function upJS(){
            var angle = 0;
            var flat = false;
            $('.icon-input').click(function(){
                flat = !flat;
                if (flat) {
                    angle += 180;
                    $('.svg-icon').css('transform','rotate('+angle+'deg)')
                    $('.list-data').fadeToggle(100)
                }else{
                    angle -= 180;
                    $('.svg-icon').css('transform','rotate('+angle+'deg)')
                    $('.list-data').fadeToggle(100)
                }
            })
            $('input[name="school"]').focus(function(){
                flat = !flat;
                if (flat) {
                    angle += 180;
                    $('.svg-icon').css('transform','rotate('+angle+'deg)')
                    $('.list-data').fadeToggle(100)
                }else{
                    angle -= 180;
                    $('.svg-icon').css('transform','rotate('+angle+'deg)')
                    $('.list-data').fadeToggle(100)
                }

                //ktra school co ton tai 
                let valInput = $(this).val();
                $.ajax({
                    url: "{{route('check-school-name')}}",
                    method: "POST",
                    data: { 
                    val: valInput,
                    _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.output) {
                            //console.log('trường có ton tai')
                            $('.save-school').text(valInput)
                            $('.save-school').show()
                            $('input[name="school"]').val('')
                        }
                    }
                });
                
            })
            $('input[name="school"]').blur(function(){
                flat = !flat;
                if (flat) {
                    angle += 180;
                    $('.svg-icon').css('transform','rotate('+angle+'deg)')
                    $('.list-data').fadeToggle(100)
                }else{
                    angle -= 180;
                    $('.svg-icon').css('transform','rotate('+angle+'deg)')
                    $('.list-data').fadeToggle(100)
                }
                let valInput = $(this).val();
                $('.list-data li').each(function(){
                    if (valInput != $(this).text()) {
                        $('#school').val('');
                    }
                })

                let saveSchool = $('.save-school').text();
                //console.log(saveSchool)
                if (saveSchool !="") {
                    $('input[name="school"]').val(saveSchool)
                    $('.save-school').hide();
                }
                
            })

            //chon data list gan gia tri vao input 
            $('.list-data li').each(function(){
                $(this).click(function(){
                    $('#school').val($(this).text())
                    //console.log($(this).text())
                    return false;
                })
            })

            //tim kiem lua chon tuong tu 
            $('#school').on('input',function(){
                let val = $(this).val();
                $.ajax({
                    url: "{{route('filter-school')}}",
                    method: "POST",
                    data: { 
                    val: val,
                    _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        // Xử lý phản hồi từ server
                        $(".list-data").html(response.output);
                    }
                });
            })

            //focus high school 
            $('.high-school').focus(function(){
                $('.input-line.high-school').addClass('focused')
                $('#lb-high-school').show()
                //tô color red cho lần focus thứ 2 
                $('#lb-high-school').css('color','#d70b0b')
            })
            $('.high-school').blur(function(){
                $('.input-line.high-school').removeClass('focused')
                //tô color red cho lần focus thứ 2 
                $('#lb-high-school').css('color','#d70b0b')
                //kiểm tra school có để trống hay k 
                if ($(this).val() =="") {
                    $('.warning-text.sp-high-school').show()
                    $('#lb-high-school').hide()
                }else{
                    $('.warning-text.sp-high-school').hide()
                    $('#lb-high-school').css('color','#C4CDD5')
                }
            })
            //nut xoa val cua input high-school
            $('.close-input-high-school').click(function(){
                $('.high-school').val('')
                $('.close-input-high-school').hide()
                $('.high-school').focus()
                $('.sp-high-school').hide()
            })

            $('.close-input-high-school').hover(
                function(){
                    $('.close-input-high-school').show()
                },
                function(){
                    $('.close-input-high-school').hide()
                }
            )

            $('.high-school').hover(
                function(){
                    if ($(this).val() !=="") {
                        $('.close-input-high-school').show()
                    }
                },
                function(){
                    if ($(this).val() !=="") {
                        $('.close-input-high-school').hide()
                    }
                }
            );
        }

        //option sinh vien or hoc sinh 
        $('#txt-sv').click(function(){
            //const checked = $('#sv').attr('checked') === 'checked'? false : true;
            $('#sv').attr('checked',true)
            $('#hs').attr('checked',false)
            $('.note-student').text('(Lưu ý: không áp dụng hệ liên thông, văn bằng 2, vừa học vừa làm, đại học từ xa, cao học, du học, học nghề)')
            if ($('#sv').is(':checked')) {
                $('.select-option').html(`
                    <input autocomplete="off" type="text" name="school" id="school" placeholder="Chọn trường" class="border-none">
                    <div class="icon-input">
                        <svg class="svg-icon" width="25" height="25" fill="none" stroke="#9d9d9d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                    </div>
                    <span class="save-school"></span>
                `)
            }
            upJS();
        })
        $('#txt-hs').click(function(){
            $('#hs').attr('checked',true)
            $('#sv').attr('checked',false)
            $('.note-student').text('(Lưu ý: chỉ áp dụng hệ trung học phổ thông, không áp dụng hệ Trung học cơ sở & Tiểu học...)')
            if ($('#hs').is(':checked')) {
                $('.select-option').html(`
                    <input autocomplete="off" type="text" name="high-school" id="high-school" placeholder="Nhập tên trường" class="high-school border-none"><br>
                    <label id="lb-high-school" class="animate__animated animate__fadeInUp">NHẬP TÊN TRƯỜNG (*)</label>
                    <hr class="input-line high-school">
                    <span class="warning-text sp-high-school">Vui lòng không bỏ trống</span>
                    <div class="close-input-high-school">
                        <svg width="20" height="20" fill="#d2cbcb" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12 21.6a9.6 9.6 0 1 0 0-19.2 9.6 9.6 0 0 0 0 19.2ZM10.448 8.752a1.2 1.2 0 0 0-1.696 1.696L10.303 12l-1.551 1.552a1.2 1.2 0 1 0 1.696 1.696L12 13.697l1.552 1.551a1.2 1.2 0 0 0 1.696-1.696L13.697 12l1.551-1.552a1.2 1.2 0 0 0-1.696-1.696L12 10.303l-1.552-1.551Z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                `)
            }
            upJS();
        })

        upJS();

        //focus input idsv
        $('.idsv').focus(function(){
            $('.input-line.idsv').addClass('focused')
            $('#lb-idsv').show()
            //tô color red cho lần focus thứ 2 
            $('#lb-idsv').css('color','#d70b0b')
        })
        $('.idsv').blur(function(){
            $('.input-line.idsv').removeClass('focused')
            //tô color red cho lần focus thứ 2 
            $('#lb-idsv').css('color','#d70b0b')
            //kiểm tra school có để trống hay k 
            if ($(this).val() =="") {
                $('.warning-text.sp-idsv').show()
                $('#lb-idsv').hide()
            }else{
                $('.warning-text.sp-idsv').hide()
                $('#lb-idsv').css('color','#C4CDD5')
            }
        })
        //nut xoa val cua input idsv
        $('.close-input-idsv').click(function(){
            $('.idsv').val('')
            $('.close-input-idsv').hide()
            $('.idsv').focus()
            $('.sp-idsv').hide()
        })

        $('.close-input-idsv').hover(
            function(){
                $('.close-input-idsv').show()
            },
            function(){
                $('.close-input-idsv').hide()
            }
        )
        $('.idsv').hover(
            function(){
                if ($(this).val() !=="") {
                    $('.close-input-idsv').show()
                }
            },
            function(){
                if ($(this).val() !=="") {
                    $('.close-input-idsv').hide()
                }
            }
        );

        //focus input nameCard
        $('.nameCard').focus(function(){
            $('.input-line.nameCard').addClass('focused')
            $('#lb-nameCard').show()
            //tô color red cho lần focus thứ 2 
            $('#lb-nameCard').css('color','#d70b0b')
        })
        $('.nameCard').blur(function(){
            $('.input-line.nameCard').removeClass('focused')
            //tô color red cho lần focus thứ 2 
            $('#lb-nameCard').css('color','#d70b0b')
            //kiểm tra school có để trống hay k 
            if ($(this).val() =="") {
                $('.warning-text.sp-nameCard').show()
                $('#lb-nameCard').hide()
            }else{
                $('.warning-text.sp-nameCard').hide()
                $('#lb-nameCard').css('color','#C4CDD5')
            }
        })
        //nut xoa val cua input nameCard
        $('.close-input-nameCard').click(function(){
            $('.nameCard').val('')
            $('.close-input-nameCard').hide()
            $('.nameCard').focus()
            $('.sp-nameCard').hide()
        })

        $('.close-input-nameCard').hover(
            function(){
                $('.close-input-nameCard').show()
            },
            function(){
                $('.close-input-nameCard').hide()
            }
        )
        $('.nameCard').hover(
            function(){
                if ($(this).val() !=="") {
                    $('.close-input-nameCard').show()
                }
            },
            function(){
                if ($(this).val() !=="") {
                    $('.close-input-nameCard').hide()
                }
            }
        );

        //focus input emailSchool
        $('.emailSchool').focus(function(){
            $('.input-line.emailSchool').addClass('focused')
            $('#lb-emailSchool').show()
            //tô color red cho lần focus thứ 2 
            $('#lb-emailSchool').css('color','#d70b0b')
        })
        $('.emailSchool').blur(function(){
            $('.input-line.emailSchool').removeClass('focused')
            var txtemailSchool = $(this).val()
            //kiểm tra emailSchool có để trống hay k 
            if (txtemailSchool !="" && !(txtemailSchool.endsWith('@gmail.com'))) {
                $('.sp-email').show()
                $('#lb-emailSchool').css('color','#C4CDD5')
            } if(txtemailSchool.endsWith('@gmail.com')){
                $('.sp-email').hide()
                $('#lb-emailSchool').css('color','#C4CDD5')
            } else{
                $('#lb-emailSchool').hide()
            }
        })

        //nut xoa val cua input phone
        $('.close-input-emailSchool').click(function(){
            $('.emailSchool').val('')
            $('.close-input-emailSchool').hide()
            $('.emailSchool').focus()
            $('.sp-email').hide()
        })

        $('.close-input-emailSchool').hover(
            function(){
                $('.close-input-emailSchool').show()
            },
            function(){
                $('.close-input-emailSchool').hide()
            }
        )

        $('.emailSchool').hover(
            function(){
                if ($(this).val() !=="") {
                    $('.close-input-emailSchool').show()
                }
            },
            function(){
                if ($(this).val() !=="") {
                     $('.close-input-emailSchool').hide()
                }
            }
        );

        //focus date card 
        $('.dateCard').focus(function(){
            $('.input-line.dateCard').addClass('focused')
            $('#lb-dateCard').show()
            //tô color red cho lần focus thứ 2 
            $('#lb-dateCard').css('color','#d70b0b')
        })
        $('.dateCard').blur(function(){
            $('.input-line.dateCard').removeClass('focused')
            //tô color red cho lần focus thứ 2 
            $('#lb-dateCard').css('color','#C4CDD5')
        })


        //btn xoa anh
        function btnCloseImg(){
            $('.close-img-font').click(function(){
                $('input[name="imageCardFront"]').val("");
                $('.card-hssv.font').html(`
                    <input type="file" name="imageCardFront" id="imageCardFront" style="display: none" accept="image/png,image/jpeg,image/webp">
                    <label class="lb-img" for="imageCardFront">
                        <svg width="25" height="25" fill="none" stroke="#637381" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                            <path d="M21 11v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h2a2 2 0 0 0 2-2 1 1 0 0 1 1-1h2"></path>
                            <path d="M15 6h6"></path>
                            <path d="M18 3v6"></path>
                        </svg><br>
                        Mặt trước
                    </label>
                `)
                // thuc hien chon lai anh khac
                reviewImg();
            })
            $('.close-img-back').click(function(){
                $('input[name="imageCardFront"]').val("");
                $('.card-hssv.back').html(`
                    <input type="file" name="imageCardback" id="imageCardback" style="display: none" accept="image/png,image/jpeg,image/webp">
                    <label class="lb-img" for="imageCardback">
                        <svg width="25" height="25" fill="none" stroke="#637381" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                            <path d="M21 11v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h2a2 2 0 0 0 2-2 1 1 0 0 1 1-1h2"></path>
                            <path d="M15 6h6"></path>
                            <path d="M18 3v6"></path>
                        </svg><br>
                        Mặt sau
                    </label>
                `)
                reviewImg();
            })
        }
        //review anh the hssv truoc khi up
        function reviewImg(){
            $('input[name="imageCardFront"]').change(function(){
                const file = event.target.files[0];
                const reader = new FileReader();

                if (file) {
                    reader.onload = function(){
                        $('.card-hssv.font').html(`<img src="`+reader.result+`" width="50px">
                            <div class="close-img-font">
                                <svg width="25" height="25" fill="none" stroke="#637381" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z"></path>
                                    <path d="m14 10-4 4m0-4 4 4-4-4Z"></path>
                                </svg>
                            </div>`)
                            btnCloseImg();
                    }
                    //chuyen anh sang url để show
                    reader.readAsDataURL(file);
                }
            })

            $('input[name="imageCardback"]').change(function(){
                const file = event.target.files[0];
                const reader = new FileReader();

                if (file) {
                    reader.onload = function(){
                        $('.card-hssv.back').html(`<img src="`+reader.result+`" width="50px">
                            <div class="close-img-back">
                                <svg width="25" height="25" fill="none" stroke="#637381" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z"></path>
                                    <path d="m14 10-4 4m0-4 4 4-4-4Z"></path>
                                </svg>
                            </div>`)
                            btnCloseImg();
                    }
                    reader.readAsDataURL(file);
                }
            })
        }


        reviewImg();

        
    })
</script>
</html>
