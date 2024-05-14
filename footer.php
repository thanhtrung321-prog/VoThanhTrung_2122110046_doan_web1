<footer class="footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">

                    <form id="mc-form" class="newsletter-form" data-toggle="validator">
                        <input aria-label="Địa chỉ Email" type="email" class="form-control" placeholder="Nhập email nhận tin khuyến mãi" name="EMAIL" required="" autocomplete="off">
                        <button class="btn btn-default" type="submit" aria-label="Đăng ký nhận tin" name="subscribe">ĐĂNG KÝ</button>
                    </form>
                    <div class="mailchimp-alerts ">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                    </div>
                    <script>
                        $('#mc-form').ajaxChimp({
                            language: 'en',
                            callback: mailChimpResponse,
                            url: 'https://facebook.us7.list-manage.com/subscribe/post?u=97ba6d3ba28239250923925a8&id=4ef3a755a8'
                        });

                        function mailChimpResponse(resp) {
                            if (resp.result === 'success') {
                                if (resp.msg == 'Thank you for subscribing!') {
                                    $('.mailchimp-success').html('Cảm ơn bạn đã đăng ký!').fadeIn(900);
                                } else {
                                    $('.mailchimp-success').html('' + resp.msg).fadeIn(900);
                                }
                                $('.mailchimp-error').fadeOut(100);
                            } else if (resp.result === 'error') {
                                if (resp.msg == '0 - Please enter a value') {
                                    $('.mailchimp-error').html('Vui lòng nhập các trường thông tin').fadeIn(900);
                                } else if (resp.msg == '0 - An email address must contain a single @.') {
                                    $('.mailchimp-error').html('Địa chỉ email phải chứa ký tự @').fadeIn(900);
                                } else if (resp.msg == 'This email cannot be added to this list. Please enter a different email address.') {
                                    $('.mailchimp-error').html('Email này không thể được thêm vào danh sách này. Vui lòng nhập một địa chỉ email khác.').fadeIn(900);
                                } else if (resp.msg.includes('0 - The domain portion of the email address is invalid')) {
                                    $('.mailchimp-error').html('Phần tên miền của địa chỉ email không hợp lệ').fadeIn(900);
                                } else if (resp.msg.includes('0 - The username portion of the email address is empty')) {
                                    $('.mailchimp-error').html('Phần tên người dùng của địa chỉ email trống').fadeIn(900);
                                } else if (resp.msg == 'Thank you for subscribing!') {
                                    $('.mailchimp-error').html('Cảm ơn bạn đã đăng ký!').fadeIn(900);
                                } else {
                                    $('.mailchimp-error').html('' + resp.msg).fadeIn(900);
                                }
                            }
                        }
                    </script>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="footer-social">
                        <span>Kết nối với chúng tôi:</span>
                        <ul class="social">
                            <li><a href="#" title="Zalo"><img width="32" height="32" title="Zalo" class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="theme/100/491/197/themes/917410/assets/zalo.png?1710378282026"></a></li>
                            <li><a href="#" title="Facebook"><img width="32" height="32" title="Facebook" class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="theme/100/491/197/themes/917410/assets/facebook.png?1710378282026"></a></li>
                            <li><a href="#" title="Youtube"><img width="32" height="32" title="Youtube" class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="theme/100/491/197/themes/917410/assets/youtube.png?1710378282026"></a></li>
                            <li><a href="#" title="Google"><img width="32" height="32" title="Google" class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="theme/100/491/197/themes/917410/assets/google.png?1710378282026"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mid-footer">
        <div class="container">
            <div class="row">



                <div class="col-12 col-md-12 col-lg-3 link-list col-footer ">

                    <a href="/" class="logo-ft" title="Logo">
                        <img width="220" height="27" src="theme/100/491/197/themes/917410/assets/w9GMFNVaC3t9.png" alt="Dola Pharmacy">
                    </a>
                    <div class="content-ft">
                        Cửa hàng thực phẩm chức năng Dola Pharmacy là địa chỉ tin cậy để bạn tìm kiếm những sản phẩm chất lượng nhất.
                    </div>
                    <div class="group-address">
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"></path>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                </svg>
                                <span>

                                    70 Lữ Gia, Phường 15, Quận 11, TP.HCM

                                </span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                                </svg>
                                <a title="1900 6750" href="tel:19006750">1900 6750</a>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"></path>
                                </svg>
                                <a title="support@sapo.vn" href="mailto:support@sapo.vn">support@sapo.vn</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-2 link-list col-footer footer-click">
                    <h4 class="title-menu title-menu2">
                        Chính sách
                        <i class="open_mnu down_icon"></i>
                    </h4>
                    <ul class="list-menu hidden-mobile">

                        <li><a href="/chinh-sach-thanh-vien" title="Chính sách thành viên">Chính sách thành viên</a></li>

                        <li><a href="/chinh-sach-thanh-toan" title="Chính sách thanh toán">Chính sách thanh toán</a></li>

                        <li><a href="/huong-dan-mua-hang" title="Hướng dẫn mua hàng">Hướng dẫn mua hàng</a></li>

                        <li><a href="/bao-mat-thong-tin-ca-nhan" title="Bảo mật thông tin cá nhân">Bảo mật thông tin cá nhân</a></li>

                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-2 link-list col-footer footer-click">
                    <h4 class="title-menu title-menu2">
                        Hướng dẫn
                        <i class="open_mnu down_icon"></i>
                    </h4>
                    <ul class="list-menu hidden-mobile">

                        <li><a href="/huong-dan-mua-hang" title="Hướng dẫn mua hàng">Hướng dẫn mua hàng</a></li>

                        <li><a href="/chinh-sach-thanh-toan" title="Hướng dẫn thanh toán">Hướng dẫn thanh toán</a></li>

                        <li><a href="/account/register" title="Đăng ký thành viên">Đăng ký thành viên</a></li>

                        <li><a href="/lien-he" title="Hỗ trợ khách hàng">Hỗ trợ khách hàng</a></li>

                        <li><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a></li>

                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-2 link-list col-footer footer-click">
                    <h4 class="title-menu title-menu2">
                        Danh mục
                        <i class="open_mnu down_icon"></i>
                    </h4>
                    <ul class="list-menu hidden-mobile">

                        <li><a href="/duoc-pham" title="Dược phẩm">Dược phẩm</a></li>

                        <li><a href="/cham-soc-suc-khoe" title="Chăm sóc sức khỏe">Chăm sóc sức khỏe</a></li>

                        <li><a href="/cham-soc-ca-nhan" title="Chăm sóc cá nhân">Chăm sóc cá nhân</a></li>

                        <li><a href="/san-pham-tien-loi" title="Sản phẩm tiện lợi">Sản phẩm tiện lợi</a></li>

                        <li><a href="/thuc-pham-chuc-nang" title="Thực phẩm chức năng">Thực phẩm chức năng</a></li>

                        <li><a href="/me-va-be" title="Mẹ và Bé">Mẹ và Bé</a></li>

                        <li><a href="/cham-soc-sac-dep" title="Chăm sóc sắc đẹp">Chăm sóc sắc đẹp</a></li>

                        <li><a href="/thiet-bi-y-te" title="Thiết bị y tế">Thiết bị y tế</a></li>

                        <li><a href="/khuyen-mai-hot" title="Khuyến mãi HOT">Khuyến mãi HOT</a></li>

                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <h4 class="title-menu">
                        Đăng ký nhận tin
                    </h4>
                    <ul class="call-footer">

                        <li>
                            <span class="title">MUA ONLINE (08:30 - 20:30)</span>
                            <a href="tel:19006750" title="19006750">19006750</a>
                            <span class="content">Tất cả các ngày trong tuần (Trừ tết Âm Lịch)</span>
                        </li>


                        <li>
                            <span class="title">GÓP Ý &amp; KHIẾU NẠI (08:30 - 20:30)</span>
                            <a href="tel:19006750" title="19006750">19006750</a>
                            <span class="content">Tất cả các ngày trong tuần (Trừ tết Âm Lịch)</span>
                        </li>

                    </ul>
                    <h4 class="title-menu">
                        Liên kết sàn
                    </h4>
                    <ul class="social">
                        <li><a href="#" title="Shopee"><img width="32" height="32" title="Shopee" class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="theme/100/491/197/themes/917410/assets/shopee.png?1710378282026"></a></li>
                        <li><a href="#" title="Lazada"><img width="32" height="32" title="Lazada" class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="theme/100/491/197/themes/917410/assets/lazada.png?1710378282026"></a></li>
                        <li><a href="#" title="Tiki"><img width="32" height="32" title="Tiki" class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="theme/100/491/197/themes/917410/assets/tiki.png?1710378282026"></a></li>
                        <li><a href="#" title="Sendo"><img width="32" height="32" title="Sendo" class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="theme/100/491/197/themes/917410/assets/sendo.png?1710378282026"></a></li>

                    </ul>


                </div>
            </div>
        </div>
    </div>
    <?php require_once "copyright.php" ?>
</footer>