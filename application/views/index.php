<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>栗鑫</title>
    <base href="<?php echo site_url();?>">
    <link href="js/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color: #000;
            -webkit-perspective: 800px;
            -webkit-perspective-origin: 60% -20%;
            background-image: url(img/james.jpg);
            background-repeat: no-repeat;
        }
        #nav{
            color: white;
            margin-left: 50px;
        }
        #nav li{
            list-style: none;
            font-size: 30px;
            margin-right: 50px;
            float: left;
            cursor: pointer;
        }
        #nav li:hover{
            color: gray;
        }
        #container{
            width: 200px;
            height: 200px;
            margin: 200px auto;
            -webkit-transform-style: preserve-3d;
            -webkit-animation: rol 3s linear infinite;
        }
        @-webkit-keyframes rol{
            from{

            }
            to{
                -webkit-transform: rotateY(-360deg);
            }
        }
        .square{
            width: 200px;
            height: 200px;
            opacity: .6;
            border: 1px solid #fff;
            position: absolute;
            font-size: 60px;
            text-align: center;
            line-height: 200px;
            border-radius: 10px;
            color: white;
        }
        .one{
            -webkit-transform: rotateY(180deg) translateZ(100px);
            background-image: url(img/james1.png);
        }
        .two{
            -webkit-transform: rotateY(-90deg) translateZ(100px);
            background-image: url(img/james2.png);
        }
        .three{
            -webkit-transform: rotateY(90deg) translateZ(100px);
            background-image: url(img/james3.png);
        }
        .four{
            -webkit-transform: rotateX(90deg) translateZ(100px);
            background-image: url(img/james4.png);
        }
        .five{
            -webkit-transform: rotateX(-90deg) translateZ(100px);
            background-image: url(img/james5.png);
        }
        .six{
            -webkit-transform: translateZ(100px);
            background-image: url('img/james6.png');
        }
        #person{
            color: white;
            width: 28%;
            height: 500px;
            border: 2px dashed white;
            margin-left: 2%;
            margin-right: 2%;
            float: left;
        }
        #per-img{
            background-image: url('img/IMG.png');
            background-repeat: no-repeat;
            width: 200px;
            height: 267px;
            margin: 0 auto;
        }
        #life{
            color: white;
            width: 28%;
            height: 500px;
            border: 2px dashed white;
            margin-left: 50px;
            margin-right: 30px;
            float: left;
        }
        #life-img{
            background-image: url('img/IMG1.png');
            background-repeat: no-repeat;
            width: 200px;
            height: 267px;
            margin: 0 auto;
        }
        #basket{
            color: white;
            width: 28%;
            height: 500px;
            border: 2px dashed white;
            margin-left: 2%;
            float: left;
        }
        #bask-img{
            background-image: url('img/IMG2.png');
            background-repeat: no-repeat;
            width: 200px;
            height: 267px;
            margin: 0 auto;
        }
        @media screen and (max-width: 1000px){
            #person, #life, #basket{
                width: 100%;
                margin-left: 0;
                margin-left: 0;
                margin-top: 10px;
            }
            #menu{
                width: 100%;
            }
        }
        #menu{
            width: 1000px;
            height: 450px;
            margin: 50% auto;
            clear: both;
        }
    </style>
</head>
<body>
<div id="nav">
    <ul>
        <li>首页</li>
        <li>前端笔记</li>
        <li>NBA聚集地</li>
        <li>心理交流站</li>
        <li>关于</li>
    </ul>
</div>
<div id="container">
    <div class='square one'>L</div>
    <div class='square two'>B</div>
    <div class='square three'>!</div>
    <div class='square four'>23</div>
    <div class='square five'>23</div>
    <div class='square six'>J</div>
</div>
<div id="person">
    <div id="per-img"></div>

    <h2>个人简介</h2>
    <p>  栗鑫，中共预备党员，96年生人，出生在黑龙江省佳木斯市，目前就读于黑龙江大学计算机科学技术学院物联网工程专业，现任14级物联网一班班长、院学生会生活部部长、黑大箐马工程二期学员、大学生创业创新实验室成员，在校期间曾获“校三等奖学金”、“优秀学生干部”、“优秀特困大学生”、“校ACM大赛一等奖”。</p>
</div>
<div id="life">
    <div id="life-img">
    </div>
    <h2>生活感悟</h2>
    <p>  人的一生就像一条长河，停滞不前的唯一结果是被庸长的的生活暗浪淹没，只有不断的否定过去，才能面对新的挑战，而每一次的选择与放弃是为了实现梦想，也是为了得到更多的喝彩。</p>
</div>
<div id="basket">
    <div id="bask-img"></div>
    <h2>关于篮球</h2>
    <p>  从开始接触篮球到看NBA就喜欢上了詹姆斯，他身上那种不凡的霸气、无私、勇敢，都一直是我心中的榜样，直到2016年为家乡带来一个总冠军，全美的人民都为之折服，在我心中永远都是爱篮球、爱生活。</p>
</div>
<div id="menu">
    <img src="img/qx1.png" alt="..." class="img-rounded">
    <img src="img/qx2.png" alt="..." class="img-circle">
    <img src="img/qx9.png" alt="..." class="img-thumbnail">
    <img src="img/qx3.png" alt="..." class="img-rounded">
    <img src="img/qx5.png" alt="..." class="img-circle">
    <img src="img/qx6.png" alt="..." class="img-thumbnail">
</div>

</body>
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>