let isloadIdex = 0;
$(window).on('scroll  mousemove touchstart',function(){
	try{
		if(!isloadIdex){
			isloadIdex = 1;

			(function($){
				"user strict";
				$.fn.Dqdt_CountDown = function( options ) {
					return this.each(function() {
						new  $.Dqdt_CountDown( this, options );
					});
				}
				$.Dqdt_CountDown = function( obj, options ){
					this.options = $.extend({
						autoStart			: true,
						LeadingZero:true,
						DisplayFormat:"<div><span>%%D%%</span> Days</div><div><span>%%H%%</span> Hours</div><div><span>%%M%%</span> Mins</div><div><span>%%S%%</span> Secs</div>",
						FinishMessage:"hết hạn",
						CountActive:true,
						TargetDate:null
					}, options || {} );
					if( this.options.TargetDate == null || this.options.TargetDate == '' ){
						return ;
					}
					this.timer  = null;
					this.element = obj;
					this.CountStepper = -1;
					this.CountStepper = Math.ceil(this.CountStepper);
					this.SetTimeOutPeriod = (Math.abs(this.CountStepper)-1)*1000 + 990;
					var dthen = new Date(this.options.TargetDate);
					var dnow = new Date();
					if( this.CountStepper > 0 ) {
						ddiff = new Date(dnow-dthen);
					}
					else {
						ddiff = new Date(dthen-dnow);
					}
					gsecs = Math.floor(ddiff.valueOf()/1000);
					this.CountBack(gsecs, this);
				};
				$.Dqdt_CountDown.fn =  $.Dqdt_CountDown.prototype;
				$.Dqdt_CountDown.fn.extend =  $.Dqdt_CountDown.extend = $.extend;
				$.Dqdt_CountDown.fn.extend({
					calculateDate:function( secs, num1, num2 ){
						var s = ((Math.floor(secs/num1))%num2).toString();
						if ( this.options.LeadingZero && s.length < 2) {
							s = "0" + s;
						}
						return "<b>" + s + "</b>";
					},
					CountBack:function( secs, self ){
						if (secs < 0) {
							self.element.innerHTML = '<div class="lof-labelexpired"> '+self.options.FinishMessage+"</div>";
							return;
						}
						clearInterval(self.timer);
						DisplayStr = self.options.DisplayFormat.replace(/%%D%%/g, self.calculateDate( secs,86400,365) );
						DisplayStr = DisplayStr.replace(/%%H%%/g, self.calculateDate(secs,3600,24));
						DisplayStr = DisplayStr.replace(/%%M%%/g, self.calculateDate(secs,60,60));
						DisplayStr = DisplayStr.replace(/%%S%%/g, self.calculateDate(secs,1,60));
						self.element.innerHTML = DisplayStr;
						if (self.options.CountActive) {
							self.timer = null;
							self.timer =  setTimeout( function(){
								self.CountBack((secs+self.CountStepper),self);
							},( self.SetTimeOutPeriod ) );
						}
					}
				});
				$(document).ready(function(){
					$('[data-countdown="countdown"]').each(function(index, el) {
						var $this = $(this);
						var $date = $this.data('date').split("-");
						$this.Dqdt_CountDown({
							TargetDate:$date[0]+"/"+$date[1]+"/"+$date[2]+" "+$date[3]+":"+$date[4]+":"+$date[5],
							DisplayFormat:"<div class=\"block-timer\"><p>%%D%%Ngày</p></div><span>:</span><div class=\"block-timer\"><p>%%H%%Giờ</p></div><span class=\"mobile\">:</span><div class=\"block-timer\"><p>%%M%%Phút</p></div><span>:</span><div class=\"block-timer\"><p>%%S%%Giây</p></div>",
							FinishMessage: "Chương trình đã kết thúc, hẹn gặp lại trong thời gian sớm nhất!"
						});
					});
				});
			})(jQuery);

			var swiperbanner = new Swiper('.banner-slider', {
				slidesPerView: 3,
				spaceBetween: 20,

				breakpoints: {
					300: {
						slidesPerView: 1,
					},
					500: {
						slidesPerView: 2,
					},
					640: {
						slidesPerView: 2,
					},
					768: {
						slidesPerView: 2,

					},
					991: {
						slidesPerView: 2,

					},
					1200: {
						slidesPerView: 2,

					}
				}

			});
			var swiperbannernoibat = new Swiper('.banner-slider-nb', {

				slidesPerView: 1,
				effect: 'fade',
				pagination: {
					el: '.banner-slider-nb .swiper-pagination',
					clickable: true,
				},
				autoplay: {
					delay: 3000,
				},
				breakpoints: {
					768: {
						slidesPerView: 2,
						effect: false,
						spaceBetween: 20,
					},
					991: {
						slidesPerView: 1,
						slidesPerColumn: 1,
						effect: 'fade',

					},
					1200: {
						slidesPerView: 1,
						slidesPerColumn: 1,
						effect: 'fade',

					}
				}
				

			});
			var swiperbanner = new Swiper('.banner-tab-slider', {
				slidesPerView: 3,
				spaceBetween: 20,
				slidesPerView: 1,
				slidesPerColumn: 2,
				slidesPerColumnFill: "row",
				
				breakpoints: {
					300: {
						slidesPerColumn: 1,
						effect: 'fade',
						autoplay: {
							delay: 3000,
						},
					},
					500: {
						slidesPerColumn: 1,
						effect: 'fade',
						autoplay: {
							delay: 3000,
						},
					},
					640: {
						slidesPerColumn: 1,
						effect: 'fade',
						autoplay: {
							delay: 3000,
						},
					},
					768: {
						slidesPerColumn: 1,
						slidesPerView: 2,
						effect: 'fade',
						autoplay: {
							delay: 3000,
						},

					},
					991: {
						slidesPerView: 1,
						slidesPerColumn: 2,
						slidesPerColumnFill: "row",
						spaceBetween: 20,

					},
					1200: {
						slidesPerView: 1,
						slidesPerColumn: 2,
						slidesPerColumnFill: "row",
						spaceBetween: 20,

					}
				}

			});
			



			var swiperproduct1 = new Swiper('.product-swiper1', {
				slidesPerView: 4,
				loop: false,
				grabCursor: true,
				roundLengths: true,
				slideToClickedSlide: false,
				spaceBetween: 20,
				autoplay: false,

				navigation: {
					nextEl: '.product-swiper1 .swiper-button-next',
					prevEl: '.product-swiper1 .swiper-button-prev',
				},
				breakpoints: {
					300: {
						slidesPerView: 2,
						spaceBetween: 6,
					},
					450: {
						slidesPerView: 2,
					},
					640: {
						slidesPerView: 2,
					},
					768: {
						slidesPerView: 3,

					},
					991: {
						slidesPerView: 4,

					},
					1200: {
						slidesPerView: 5,

					}
				}

			});

			var swiperflash = new Swiper('.product-flash-swiper', {
				slidesPerView: 3,
				loop: false,
				grabCursor: true,
				roundLengths: true,
				slideToClickedSlide: false,
				spaceBetween: 20,
				autoplay: false,
				navigation: {
					nextEl: '.product-flash-swiper .swiper-button-next',
					prevEl: '.product-flash-swiper .swiper-button-prev',
				},
				breakpoints: {
					300: {
						slidesPerView: 1.5,
						spaceBetween: 6,
					},
					450: {
						slidesPerView: 2,
					},
					640: {
						slidesPerView: 2,
						spaceBetween: 10
					},
					768: {
						slidesPerView: 3,
						spaceBetween: 20
					},
					991: {
						slidesPerView: 4,
						spaceBetween: 20
					},
					1200: {
						slidesPerView: 5,
						spaceBetween: 20
					}
				}
			});
			var swiperchinhsach = new Swiper('.chinhsach-swiper', {
				slidesPerView: 3,
				loop: false,
				grabCursor: true,
				spaceBetween: 30,
				roundLengths: true,
				slideToClickedSlide: false,
				navigation: {
					nextEl: '.chinhsach-swiper .swiper-button-next',
					prevEl: '.chinhsach-swiper .swiper-button-prev',
				},
				autoplay: false,
				breakpoints: {
					300: {
						slidesPerView: 1,
						spaceBetween: 10
					},
					500: {
						slidesPerView: 1,
						spaceBetween: 10
					},
					640: {
						slidesPerView: 2,
						spaceBetween: 10
					},
					768: {
						slidesPerView: 2,
						spaceBetween: 30
					},
					991: {
						slidesPerView: 3,
						spaceBetween: 30
					},
					1200: {
						slidesPerView: 4,
						spaceBetween: 30
					}
				}
			});
			var swiperdanhmuc2 = new Swiper('.danhmuc-slider2', {
				slidesPerView: 3,
				loop: false,
				grabCursor: true,
				roundLengths: true,
				slideToClickedSlide: false,
				spaceBetween: 10,
				autoplay: false,
				navigation: {
					nextEl: '.danhmuc-slider2 .swiper-button-next',
					prevEl: '.danhmuc-slider2 .swiper-button-prev',
				},
				breakpoints: {
					300: {
						slidesPerView: 2,
					},
					500: {
						slidesPerView: 2,
					},
					640: {
						slidesPerView: 2,
					},
					768: {
						slidesPerView: 4,

					},
					991: {
						slidesPerView: 4,

					},
					1200: {
						slidesPerView: 7,

					}
				}
			});
			var swiperdanhmuc2 = new Swiper('.video-swiper', {
		slidesPerView: 3,
		loop: false,
		grabCursor: true,
		roundLengths: true,
		slideToClickedSlide: false,
		spaceBetween: 10,
		autoplay: false,
		navigation: {
			nextEl: '.video-swiper .swiper-button-next',
			prevEl: '.video-swiper .swiper-button-prev',
		},
		breakpoints: {
			300: {
				slidesPerView: 2,
			},
			500: {
				slidesPerView: 2,
			},
			640: {
				slidesPerView: 2,
			},
			768: {
				slidesPerView: 4,

			},
			991: {
				slidesPerView: 4,

			},
			1200: {
				slidesPerView: 4,

			}
		}

	});
	$('.playVideo').on('click', function(e){
		var idVideo = $(this).attr('data-video');
		$('.popup-video').addClass('active');
		$('.popup-video .body-popup').html(`<iframe width="560" height="315" src="https://www.youtube.com/embed/` + idVideo + `" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`)
	});
	$('.close-popup-video').on('click', function(e){
		$('.popup-video').removeClass('active');
		$('.popup-video .body-popup').html(' ');
	});

			$(".not-dqtab").each( function(e){
				var $this1 = $(this);
				var datasection = $this1.closest('.not-dqtab').attr('data-section');
				$this1.find('.tabs-title li:first-child').addClass('current');
				var view = $this1.closest('.not-dqtab').attr('data-view');
				$this1.find('.tab-content').first().addClass('current');
				var droptab = $(this).find('.tab-desktop');
				$this1.find('.tabs-title.ajax li').click(function(){
					var $this2 = $(this),
						tab_id = $this2.attr('data-tab'),
						url = $this2.attr('data-url');
					var etabs = $this2.closest('.e-tabs');
					etabs.find('.tab-viewall').attr('href',url);
					etabs.find('.tabs-title li').removeClass('current');
					etabs.find('.tab-content').removeClass('current');
					$this2.addClass('current');
					etabs.find("."+tab_id).addClass('current');
					if(!$this2.hasClass('has-content')){
						$this2.addClass('has-content');		
						getContentTab(url,"."+ datasection+" ."+tab_id,view);
					}
				});
			});


			function getContentTab(url,selector){

				url = url+"?view=ajaxload4";

				var loading = '<div style="width: 100%; margin-top: 20px" class="text-center">Đang tải dữ liệu...</div>';
				var fill = $(selector);
				console.log(url)
				$.ajax({
					type: 'GET',
					url: url,
					beforeSend: function() {
						$(selector).html(loading);
					},
					success: function(data) {
						var content = $(data);
						setTimeout(function(){
							$(selector).html(content.html());

							awe_lazyloadImage();

							$(selector+' .add_to_cart').click(function(e){	
								e.preventDefault();		
								var $this = $(this);
								var form = $this.parents('form');	
								$.ajax({
									type: 'POST',
									url: '/cart/add.js',
									async: false,
									data: form.serialize(),
									dataType: 'json',
									beforeSend: function() { },
									success: function(line_item) {
										$('.cart-popup-name').html(line_item.title).attr('href', line_item.url, 'title', line_item.title);
										ajaxCart.load();

										$('.popup-cart-mobile, .backdrop__body-backdrop___1rvky').addClass('active');
										AddCartMobile(line_item);

									},
									cache: false
								});
							});
							$(document).ready(function () {
								var modal = $('.quickview-product');
								var btn = $('.quick-view');
								var span = $('.quickview-close');

								btn.click(function () {
									modal.show();
								});

								span.click(function () {
									modal.hide();
								});

								$(window).on('click', function (e) {
									if ($(e.target).is('.modal')) {
										modal.hide();
									}
								});
							});

						},300);

					},
					error: function(err){
						$(selector).html('<div style="margin-top: 20px" class="alert alert-warning alert-warning2 alert-dismissible margin-top-15 section" role="alert">		Sản phẩm đang được cập nhật.	</div>');
					},
					dataType: "html"
				});
			};
		}
	}catch(e){
		console.log(e);
	}
});