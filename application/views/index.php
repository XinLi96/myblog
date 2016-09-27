/**
 * Created by PhpStorm.
 * User: lixin
 * Date: 2016/9/27
 * Time: 22:00
 */
<!DOCTYPE html>
<html>
<head>
    <title>Mr.LiXin</title>
    <base href="<?php echo site_url();?>">
    <link href="./css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="./css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script src="./js/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="./js/move-top.js"></script>
    <script type="text/javascript" src="./js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>
</head>
<body>
<div class="header">
    <div class="header-banner">
        <div class="container">
            <div class="top-menu">
                <span class="menu"> </span>
                <ul>
                    <li><a href="#ABOUT" class="scroll">ABOUT</a></li>
                    <li><a href="#WORK" class="scroll">WORK</a></li>
                    <li><a href="#BLOG" class="scroll">BLOG</a></li>
                    <li><a href="#CONTACT" class="scroll">CONTACT</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <script>
                $("span.menu").click(function(){
                    $(".top-menu ul").slideToggle("slow" , function(){
                    });
                });
            </script>
            <div class="header-banner-info text-center">
                <a href="#"><!-- <img src="./images/logo.png" alt="" /> --></a>
                <h3>MAN</h3>
                <h1>You can do it <span>Mr.Li</span> </h1>
                <p></p>
                <span class="line"></span>
                <ul class="social-icons">
                    <li><a href="#"><i class="twitter"></i></a></li>
                    <li><a href="#"><i class="dribble"></i></a></li>
                    <li><a href="#"><i class="behance"></i></a></li>
                </ul>
                <label></label>
                <ul class="details">
                    <li>年龄     :     <a href="#">21</a></li>
                    <li>来自     :     <a href="#">黑龙江省佳木斯市</a></li>
                    <li>就读学校     :     <a href="#">黑龙江大学</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- header-section-ends -->
<!-- content-section-starts -->
<div class="content-section">
    <!-- about-section-starts -->
    <div class="about-section" id="ABOUT">
        <div class="container">
            <div class="about-section-head text-center">
                <img src="./images/my.png" alt="" />
                <h3>关于我</h3>
                <label></label>
                <p>永远都不会倒下。</p>
            </div>
            <div class="about-section-grids">
                <div class="col-md-4 about-section-grid-1">
                    <h4>个人简介</h4>
                    <p>栗鑫，中共预备党员，96年生人，出生在黑龙江省佳木斯市。</p>
                    <p>目前就读于黑龙江大学计算机科学技术学院物联网工程专业，现任14级物联网一班班长、院学生会生活部部长、黑大箐马工程二期学员、大学生创业创新实验室成员，在校期间曾获“校三等奖学金”、“优秀学生干部”、“优秀特困大学生”、“校ACM大赛一等奖”。</p>
                    <!-- <p>Cras vehicula libero eget turpis accumsan, non blandit felis tincidunt. Etiam non suscipit lectus. Cras et libero a libero lacinia semper et ac tortor. Nullam venenatis Dribbble nec imperdiet. Nulla tincidunt mauris Behance vestibulum, non hendrerit lacus condimentum. </p>
-->						<ul class="social-icons">
                        <li><a href="#"><i class="twitter"></i></a></li>
                        <li><a href="#"><i class="dribble"></i></a></li>
                        <li><a href="#"><i class="behance"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 about-section-grid-2 text-center">
                    <img src="./images/me7.jpg" class="img-responsive" alt="" />
                </div>
                <div class="col-md-4 about-section-grid-3">
                    <h4>掌握技术</h4>
                    <!-- <p>Coding Programs</p> -->
                    <div class="progress-grid">
                        <div class="meter red">
							   <span style="width:100%;">
							  	<div class="progress_desc">努力</div>
								<div class="percent">100%</div>
						        <div class="clearfix"> </div>
						       </span>
                        </div>
                        <div class="meter animate">
							   <span style="width:65%;"><div class="progress_desc">PHP/Node.JS</div>
								<div class="percent">70%</div>
						        <div class="clearfix"> </div>
							   </span>
                        </div>
                        <div class="meter">
								<span style="width:55%;"><div class="progress_desc">angularjs/reactjs</div>
								 <div class="percent">55%</div>
								 <div class="clearfix"> </div>
							    </span>
                        </div>
                    </div>
                    <!-- <p>Coding Programs</p> -->
                    <div class="progress-grid">
                        <div class="meter red">
							   <span style="width:80%;">
							  	<div class="progress_desc">HTML / HTML5</div>
								<div class="percent">80%</div>
						        <div class="clearfix"> </div>
						       </span>
                        </div>
                        <div class="meter animate">
							   <span style="width:72%;"><div class="progress_desc">CSS / CSS3</div>
								<div class="percent">75%</div>
						        <div class="clearfix"> </div>
							   </span>
                        </div>
                        <div class="meter">
								<span style="width:55%;"><div class="progress_desc">JavaScript / jquery</div>
								 <div class="percent">55%</div>
								 <div class="clearfix"> </div>
							    </span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- about-section-ends -->
    <!-- portfolio-section-starts -->
    <div class="portfolio-section" id="WORK">
        <div class="portfolio-section-top-row">
            <div class="container">
                <div class="portfolio-section-head text-center">
                    <h3>百变生活</h3>
                    <label></label>
                    <p>人活一生、不可虚度</p>
                </div>
                <div class="col-md-4 portfolio-section-top-row-left-grid">
                    <div class="project-name">
                        <span>project-name</span>
                        <h3>ios 7 Weather App Design</h3>
                    </div>
                    <div class="project-description">
                        <span>project description</span>
                        <ul>
                            <li><a href="#">Os 7 Design</a></li>
                            <li><a href="#">Weather App icons</a></li>
                            <li><a href="#">iPhone App Design</a></li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetu et. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="address">
                        <span>我的个人域名网址：</span>
                        <a href="">http://www.lixin96.pub/</a>
                    </div>
                    <div class="tags">
                        <span>tags</span>
                        <p>iPhone,iOs 7,Weather,App,Design,apple</p>
                    </div>
                </div>
                <div class="col-md-8 portfolio-section-top-row-right-grid">
                    <div class="wmuSlider example1 section" id="section-1">
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <img src="./images/m2.png" class="img-responsive" alt="">
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            `					<img src="./images/m3.png" class="img-responsive" alt="">
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <img src="./images/m1.png" class="img-responsive" alt="">
                        </article>
                        <ul class="wmuSliderPagination">
                            <li><a href="#" class="">0</a></li>
                            <li><a href="#" class="">1</a></li>
                            <li><a href="#" class="">2</a></li>
                        </ul>

                    </div>

                    <!-- script -->
                    <script src="./js/jquery.wmuSlider.js"></script>
                    <script>
                        $('.example1').wmuSlider();
                    </script>
                    <!-- script -->

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="portfolio-section-bottom-row" id="portfolio">
            <div class="container">
                <ul id="filters" class="clearfix">
                    <li><span class="filter active" data-filter="app card icon web logo1">All</span></li>
                    <li><span class="filter" data-filter="app">Web Design</span></li>
                    <li><span class="filter" data-filter="card">Coding</span></li>
                    <li><span class="filter" data-filter="icon">Photography</span></li>
                    <li><span class="filter" data-filter="logo1">Freebies</span></li>
                </ul>
                <div id="portfoliolist">
                    <div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a href="#small-dialog" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                                <img src="./images/pic-1.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">iOS 7 Weather App Design<img src="./images/icon-eye.png" alt=""/></h2>
                                </div></a>
                        </div>
                    </div>
                    <div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a href="#small-dialog1" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                                <img src="./images/pic-2.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">iOS 7 Weather App Design<img src="./images/icon-eye.png" alt=""/></h2>
                                </div></a>
                        </div>
                    </div>
                    <div class="portfolio web mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="web" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a href="#small-dialog2" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                                <img src="./images/pic-3.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">iOS 7 Weather App Design<img src="./images/icon-eye.png" alt=""/></h2>
                                </div></a>
                        </div>

                    </div>
                    <div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a href="#small-dialog3" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                                <img src="./images/pic-4.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">iOS 7 Weather App Design<img src="./images/icon-eye.png" alt=""/></h2>
                                </div></a>
                        </div>

                    </div>
                    <div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a href="#small-dialog4" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                                <img src="./images/pic-5.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">iOS 7 Weather App Design<img src="./images/icon-eye.png" alt=""/></h2>
                                </div></a>
                        </div>

                    </div>
                    <div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a href="#small-dialog5" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                                <img src="./images/pic-6.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">iOS 7 Weather App Design<img src="./images/icon-eye.png" alt=""/></h2>
                                </div></a>
                        </div>
                    </div>
                    <div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a href="#small-dialog6" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                                <img src="./images/pic-7.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">iOS 7 Weather App Design<img src="./images/icon-eye.png" alt=""/></h2>
                                </div></a>
                        </div>
                    </div>
                    <div class="portfolio logo1 mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="logo1" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a href="#small-dialog7" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                                <img src="./images/pic-8.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">iOS 7 Weather App Design<img src="./images/icon-eye.png" alt=""/></h2>
                                </div></a>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>

                <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
                        });
                    });
                </script>
                <!-- Script for gallery Here -->
                <script type="text/javascript" src="./js/jquery.mixitup.min.js"></script>
                <script type="text/javascript">
                    $(function () {

                        var filterList = {

                            init: function () {

                                // MixItUp plugin
                                // http://mixitup.io
                                $('#portfoliolist').mixitup({
                                    targetSelector: '.portfolio',
                                    filterSelector: '.filter',
                                    effects: ['fade'],
                                    easing: 'snap',
                                    // call the hover effect
                                    onMixEnd: filterList.hoverEffect()
                                });

                            },

                            hoverEffect: function () {

                                // Simple parallax effect
                                $('#portfoliolist .portfolio').hover(
                                    function () {
                                        $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                                        $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                                    },
                                    function () {
                                        $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                                        $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                                    }
                                );

                            }

                        };

                        // Run the show!
                        filterList.init();


                    });
                </script>
                <!-- Gallery Script Ends -->
                <!-- pop-up-box -->
                <script type="text/javascript" src="./js/modernizr.custom.min.js"></script>
                <link href="./css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
                <script src="./js/jquery.magnific-popup.js" type="text/javascript"></script>
                <!-- //pop-up-box -->
                <div id="small-dialog" class="mfp-hide">
                    <div class="image-top">
                        <img src="./images/pic1.jpg" class="img-responsive" alt="" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to book.There are many variations of passages of Lorem Ipsum available, by injected humour. </p>
                    </div>
                </div>
                <div id="small-dialog1" class="mfp-hide">
                    <div class="image-top">
                        <img src="./images/pic2.jpg" class="img-responsive" alt="" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to book.There are many variations of passages of Lorem Ipsum available, by injected humour.</p>
                    </div>
                </div>
                <div id="small-dialog2" class="mfp-hide">
                    <div class="image-top">
                        <img src="./images/pic3.jpg" class="img-responsive" alt="" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to book.There are many variations of passages of Lorem Ipsum available, by injected humour.</p>
                    </div>
                </div>
                <div id="small-dialog3" class="mfp-hide">
                    <div class="image-top">
                        <img src="./images/pic4.jpg" class="img-responsive" alt="" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to book.There are many variations of passages of Lorem Ipsum available, by injected humour.</p>
                    </div>
                </div>
                <div id="small-dialog4" class="mfp-hide">
                    <div class="image-top">
                        <img src="./images/pic5.jpg" class="img-responsive" alt="" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to book.There are many variations of passages of Lorem Ipsum available, by injected humour. </p>
                    </div>
                </div>
                <div id="small-dialog5" class="mfp-hide">
                    <div class="image-top">
                        <img src="./images/pic6.jpg" class="img-responsive" alt="" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to book.There are many variations of passages of Lorem Ipsum available, by injected humour. </p>
                    </div>
                </div>
                <div id="small-dialog6" class="mfp-hide">
                    <div class="image-top">
                        <img src="./images/pic7.jpg" class="img-responsive" alt="" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to book.There are many variations of passages of Lorem Ipsum available, by injected humour. </p>
                    </div>
                </div>
                <div id="small-dialog7" class="mfp-hide">
                    <div class="image-top">
                        <img src="./images/pic8.jpg" class="img-responsive" alt="" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to book.There are many variations of passages of Lorem Ipsum available, by injected humour.</p>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $('.popup-with-zoom-anim').magnificPopup({
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true,
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in'
                        });

                    });
                </script>
            </div>
        </div>
    </div>
    <!-- portfolio-section-ends -->
    <!-- blog-section-starts -->
    <div class="blog-section" id="BLOG">
        <div class="container">
            <div class="blog-section-head text-center">
                <h3>blog</h3>
                <label></label>
                <p>Recent blog writings</p>
            </div>
            <div class="blog-section-grids">
                <div class="col-md-9 blog-section-left-grid">
                    <div class="blog-section-banner">
                        <img src="./images/blog.jpg" class="img-responsive" alt="" />
                        <h3>Ut interdum tortor eu sapien mattis tempus</h3>
                        <span>24 OCT 2013 in<a href="#">FREE PSDS</a> - 2 Comments</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi felis nunc, vulputate vel mi quis, pulvinar porttitor sem. Vivamus posuere condimentum posuere. Sed vel lacus eros. Praesent euismod tortor libero, quis bibendum diam ultricies ac.</p>
                        <p>Suspendisse bibendum auctor mi. Nam suscipit dui ut ligula aliquet, sed posuere ligula fermentum. Duis vel metus velit. <label> Maecenas pellentesque, </label> lorem non condimentum egestas, lorem lorem elementum quam, a consequat purus neque et ipsum. Donec eu dignissim magna. Pellentesque a placerat urna, at semper nibh. Cras venenatis quam placerat eros ullamcorper, dignissim varius purus malesuada. </p>
                        <div class="blog-section-tags">
                            <p><span>TAGS </span> :  free, psd, megi, themes</p>
                        </div>
                    </div>
                    <div class="comments-section">
                        <h4>3 COMMENTS</h4>
                        <div class="comment-section-row">
                            <div class="icon">
                                <img src="./images/c1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="icon-text">
                                <h5><a href="#">Emrah Demirag</a></h5>
                                <span>October 1, 2014 at 9:05 pm - <a hrewf="#"> Reply</a></span>
                                <p>Pellentesque vitae lacus tempus, mollis erat in, dignissim felis. Duis ultrices, dolor non aliquam adipiscing, sapien erat molestie lacus.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="comment-section-row span-3">
                            <div class="icon">
                                <img src="./images/c1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="icon-text">
                                <h5><a href="#">Sirzat Aytac</a></h5>
                                <span>October 1, 2014 at 12:26 pm  - <a hrewf="#"> Reply</a></span>
                                <p>Vestibulum quis pharetra massa. Ut adipiscing elit et felis blandit, et egestas odio suscipit.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="comment-section-row">
                            <div class="icon">
                                <img src="./images/c1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="icon-text">
                                <h5><a href="#">Emrah Demirag</a></h5>
                                <span>October 1, 2014 at 21:05 pm - <a hrewf="#"> Reply</a></span>
                                <p>Pellentesque vitae lacus tempus, mollis erat in, dignissim felis. Duis ultrices, dolor non aliquam adipiscing, sapien erat molestie lacus.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="rply-section">
                        <h4>LEAVE A REPLY</h4>
                        <p>Your email address will not be published. Required fields are marked with *</p>
                        <form>
                            <input type="text" class="text" value="Your Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name';}">
                            <input type="text" class="text" value="Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}">
                            <textarea onfocus="if(this.value == 'Your Message') this.value='';" onblur="if(this.value == '') this.value='Your Message';" >Your Message</textarea>
                            <input type="button" value="POST COMMENT">
                        </form>
                    </div>

                </div>
                <div class="col-md-3 blog-section-right-grid">
                    <div class="search">
                        <h5>搜索</h5>
                        <div class="search-box">
                            <form>
                                <input type="text" class="text" value="搜索" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '搜索';}">
                                <input type="submit" value>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="categories">
                        <h5>CATEGORIES</h5>
                        <ul>
                            <li><a href="#">design</a></li>
                            <li><a href="#">icon</a></li>
                            <li><a href="#">psds</a></li>
                            <li><a href="#">photograph</a></li>
                        </ul>
                    </div>
                    <div class="archives">
                        <h5>archives</h5>
                        <ul>
                            <li><a href="#">july 2014</a></li>
                            <li><a href="#">june 2014</a></li>
                            <li><a href="#">may 2014</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="span_4_row">
                <div class="col-md-3 col">
                    <img src="./images/r1.jpg" class="img-responsive" alt="" />
                    <div class="image-text">
                        <h5>Vivamus Rutrum Adipiscing Eros</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Fusce mole.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-3 col">
                    <img src="./images/r2.jpg" class="img-responsive" alt="" />
                    <div class="image-text">
                        <h5>Vivamus Rutrum Adipiscing Eros</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Fusce mole.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-3 col">
                    <img src="./images/r3.jpg" class="img-responsive" alt="" />
                    <div class="image-text">
                        <h5>Vivamus Rutrum Adipiscing Eros</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Fusce mole.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-3 col">
                    <img src="./images/r4.jpg" class="img-responsive" alt="" />
                    <div class="image-text">
                        <h5>Vivamus Rutrum Adipiscing Eros</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Fusce mole.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- blog-section-ends -->
    <!-- 	<div class="twitter-section">
            <div class="course_demo">
                      <ul id="flexiselDemo3">
                        <li>
                            <a href="#"><i class="tw"></i></a>
                            <p>"Design is hard work. Striving for design excellence is even harder." ARCHIE BOSTON</p>
                            <a href="#">@emrahdemirag</a>
                        </li>
                        <li>
                            <a href="#"><i class="fb"></i></a>
                            <p>"Design is hard work. Striving for design excellence is even harder." ARCHIE BOSTON</p>
                            <a href="#">@emrahdemirag</a>
                        </li>
                        <li>
                            <a href="#"><i class="in"></i></a>
                            <p>"Design is hard work. Striving for design excellence is even harder." ARCHIE BOSTON</p>
                            <a href="#">@emrahdemirag</a>
                        </li>
                    </ul>

          </div> -->
    <!-- </div> -->

    <script type="text/javascript">
        $(window).load(function() {
            $("#flexiselDemo3").flexisel({
                visibleItems: 1,
                animationSpeed: 1000,
                autoPlay: false,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint:480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint:640,
                        visibleItems: 1
                    },
                    tablet: {
                        changePoint:768,
                        visibleItems: 1
                    }
                }
            });

        });
    </script>
    <script type="text/javascript" src="./js/jquery.flexisel.js"></script>

    <!-- content-section-starts -->
    <!-- <div class="contact-section text-center" id="CONTACT">
        <div class="container">
            <div class="contact-section-head">
                <h3>contact</h3>
                <label></label>
                <p>Recent blog writings</p>
            </div>
            <div class="contact-info">
                <ul>
                    <li><i class="message"></i></li>
                    <li><a href="#">info@emrahdemirag.com</a></li>
                    <li><i class="phone"></i></li>
                    <li>+888) 257 23 86</li>
                </ul>
                <form>
                    <input type="text" class="text" value="Your Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name';}">
                    <input type="text" class="text" value="Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}">
                    <textarea onfocus="if(this.value == 'Your Message') this.value='';" onblur="if(this.value == '') this.value='Your Message';" >Your Message</textarea>
                    <input type="button" value="SEND MESSAGE">
                </form>
            </div>
        </div>
    </div> -->

</div>
<!-- content-section-ends -->
<!-- footer-section-starts -->
<!-- <div class="footer">
    <div class="container">
        <div class="copy-rights text-center">
            <p>&copy; 2014 Template by <a href="http://w3layouts.com" target="target_blank">W3layouts</a></p>
        </div>
    </div>
</div> -->
<!-- footer-section-ends -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>