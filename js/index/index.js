
$(function(){

        /*$('.brithday').click(function(){
            var timer = setInterval(function(){
                var dingshi = document.documentElement.scrollTop || 
                    document.body.scrollTop;

                if(dingshi >= 700){
                    clearInterval(timer);
                }
              dingshi+=700;
                if(dingshi >= 0){
                    clearInterval(timer);
                }
                window.scrollTo(0,dingshi);
                
                }, 50);
        })*/
        
        alert(" 希望我是第一个向你道“生日快乐”的朋友，愿这一年中快乐、成功！");
        var btn = document.getElementById("top");
        btn.onclick = function(){
        var timer = setInterval(function(){
                var dingshi = document.documentElement.scrollTop || 
                    document.body.scrollTop;

                dingshi -= 100;

                if(dingshi <= 0){
                    clearInterval(timer);
                }
                console.log(dingshi);
                window.scrollTo(0,dingshi);
        }, 50);
        }

        $("#footer").click(function(){
            var t = $(window).scrollTop();
            $('body,html').animate({'scrollTop':t+document.body.clientHeight},44000)

        })

    

        function adjust(){
            var x = $(window).width();
            if(x < 835){
                $("#navBar").next().hide();
                $("#navBar").css({"width":"70%"});
                $("#navBar ul li").css({"font-size":"14px",});
                $(".title").css({"font-size":"20px"});
                $("#navBar ul li a span").css({"padding":"0 0"});
            }else{
                $("#navBar").next().show();
                $("#navBar").css({"width":"60%"});
                $("#navBar ul li").css({"font-size":"16px",});
                $(".title").css({"font-size":"28px"});
                $("#navBar ul li a span").css({"padding":"0 8px"});
            }
        }


        $(window).resize(function(){
            var x = $(window).width();
            if(x < 835){
                $("#navBar").next().hide();
                $("#navBar").css({"width":"70%"});
                $("#navBar ul li").css({"font-size":"14px",});
                $(".title").css({"font-size":"20px"});
                $("#navBar ul li a span").css({"padding":"0 0"});
            }else{
                $("#navBar").next().show();
                $("#navBar").css({"width":"60%"});
                $("#navBar ul li").css({"font-size":"16px",});
                $(".title").css({"font-size":"28px"});
                $("#navBar ul li a span").css({"padding":"0 8px"});
            }
        });
        window.reload = adjust();
        window.onload = adjust();

        //½¥±ä
        function change(thing){
            var sp = 0.00005;
            var alpha = 0;
            var tim =null;
            tim = setInterval(function(){
                if(alpha > 1){
                    clearInterval(tim);
                }
                alpha += sp;
                thing.css({"filter":"alpha(opacity="+alpha+")"});
                thing.css({"opacity":alpha});
                sp = alpha/2;
            },30)
        }

        //µ¯³ö
        function pop(thing , des){
            var speed = 200;
            var timer = null;
            var distance = 0;
            timer = setInterval(function(){
                if(distance > des )
                {
                    clearInterval(timer);
                    return;
                }
                distance += speed;
                thing.css({"top":"-"+distance+"px"});
                speed = (des-distance)/2;
            },100)
        }

        function picture(){
            var ACM = $(".ACM").offset().top;
            var ARM = $(".ARM").offset().top;
            var NS = $(".NS").offset().top;
            var UI = $(".UI").offset().top;
            var VC = $(".VC").offset().top;
            var WEB  = $(".WEB").offset().top;
            var $active1 = $(".intro1-active");
            var $active2 = $(".intro2-active");
            var $active3 = $(".intro3-active");
            var $active4 = $(".intro4-active");
            var $active5 = $(".intro5-active");
            var $active6 = $(".intro6-active");
            var flag1 = 0;
            var flag2 = 0;
            var flag3 = 0;
            var flag4 = 0;
            var flag5 = 0;
            var flag6 = 0;
            $(window).scroll(function(){
                if((flag1 == 0) &&((ACM-window.innerHeight) < $(document).scrollTop())){
                    change($active1);
                    pop($active1,500);
                    flag1++;/*
                    var t = $(window).scrollTop();

                    $('body,html').animate({'scrollTop':t+300},1000);*/
                }
                if((flag2 == 0) &&((ARM-window.innerHeight) < $(document).scrollTop())){
                    change($active2);
                    pop($active2,500);
                    flag2++;/*
                    var t = $(window).scrollTop();

                    $('body,html').animate({'scrollTop':t+300},1000);*/
                }
                if((flag3 == 0) &&((NS-window.innerHeight) < $(document).scrollTop())){
                    change($active3);
                    pop($active3,500);
                    flag3++;/*
                    var t = $(window).scrollTop();

                    $('body,html').animate({'scrollTop':t+300},1000);*/
                }
                if((flag4 == 0) &&((UI-window.innerHeight) < $(document).scrollTop())){
                    change($active4);
                    pop($active4,500);
                    flag4++;/*
                    var t = $(window).scrollTop();

                    $('body,html').animate({'scrollTop':t+300},1000);*/
                }
                if((flag5 == 0) &&((VC-window.innerHeight) < $(document).scrollTop())){
                    change($active5);
                    pop($active5,500);
                    flag5++;/*
                    var t = $(window).scrollTop();

                    $('body,html').animate({'scrollTop':t+300},1000);*/
                }
                if((flag6 == 0) &&((WEB-window.innerHeight) < $(document).scrollTop())){
                    change($active6);
                    pop($active6,500);
                    flag6++;
                }
            })
        }
        $(window).onload = picture();
    
    /*$(window).scroll(function(){
        var longdu = $(window).scrollTop();
        var flag = 0;
        if((flag == 0 ) && (longdu == 1500)){
            alert(1);
            flag++;
        }
    })
*/
})