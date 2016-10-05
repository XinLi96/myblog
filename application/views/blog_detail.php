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
           <h3><span class="comment-num">4</span>Response</h3>
           <ul class="comment-list">
               <li class="comment">
                   <div class="comment-info">
                       <span class="username">Admin</span>
                       <span class="post-date">2016-10-19</span>
                   </div>
                   <p class="content">sdafnsf lknalkffansflknalkfasnk  lnaklsfnlsanflasnsafl  nlskdnasklfnklsanf</p>
               </li>
           </ul>
           <div class="comment-form">
               <h3>leave a comment</h3>
               <form action="" method="post">
                   <p><input type="text" placeholder="Name" class="text-box" id="username" name="username"></p>
                   <p><input type="email" placeholder="Email" class="text-box" id="email" name="email"></p>
                   <p><input type="tel" placeholder="Phone" class="text-box" id="phone" name="phone"></p>
                   <p><textarea name="message" id="message" placeholder="Message" class="text-box" cols="30" rows="10"></textarea></p>
                   <p><input type="submit" value="SEND"></p>
               </form>
           </div>
       </div>
    </div>
</body>
</html>