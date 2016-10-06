<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文章详情</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/blog_detail.css">
</head>
<body>
    <div id="article-content">
        <div class="wrapper">
            <h3 class="title"><?php echo $blog->title;?></h3>
            <img src="<?php echo $blog->big_img;?>" alt="" class="img">
            <p class="content"><?php echo $blog->content;?></p>
            <ul class="article-info">
                <li class="date">
                    <small></small>
                    <?php echo $blog->post_date;?>
                </li>
                <li class="categories"><?php echo $blog->cate_name;?></li>
                <li class="clicked"><?php echo $blog->clicked;?></li>
            </ul>
        </div>
    </div>
    <div id="article-comment">
       <div class="wrapper">
           <h3><span class="comment-num" id="comment-num"><?php echo count($blog -> comments);?></span> Response</h3>
           <ul class="comment-list">
               <?php
                    foreach ($blog -> comments as $comment){
               ?>
                        <li class="comment">
                            <div class="comment-info">
                                <span class="username"><?php echo $comment->username;?></span>
                                <span class="post-date"><?php echo $comment->post_date;?></span>
                            </div>
                            <p class="content"><?php echo $comment->message;?></p>
                        </li>
               <?php
                    }
               ?>
           </ul>
           <div class="comment-form">
               <h3>leave a comment</h3>
<!--               <form action="" method="post">-->
                   <input type="hidden" id="blogId" value="<?php echo $blog->blog_id;?>">
                   <p><input type="text" placeholder="Name" class="text-box" id="username" name="username"></p>
                   <p><input type="email" placeholder="Email" class="text-box" id="email" name="email"></p>
                   <p><input type="tel" placeholder="Phone" class="text-box" id="phone" name="phone"></p>
                   <p><textarea name="message" id="message" placeholder="Message" class="text-box" cols="30" rows="10"></textarea></p>
                   <p><input type="button" value="SEND" id="btn-send"></p>
<!--               </form>-->
           </div>
       </div>
    </div>
    <script src="js/require.js" data-main="js/blog_detail"></script>
</body>
</html>