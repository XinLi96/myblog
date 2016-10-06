require(['jquery.min'], function($) {
    jQuery(function(){
        jQuery('#btn-send').on('click',function () {
            var $username = jQuery('#username');
            var $email = jQuery('#email');
            var $phone = jQuery('#phone');
            var $message = jQuery('#message');
            var $blogId = jQuery('#blogId');
            var $commentNum = jQuery('#comment-num');
            jQuery.post("welcome/comment",{
               username: $username.val(),
               email: $email.val(),
               phone: $phone.val(),
               message: $message.val(),
               blogId: $blogId.val()
            },function (data) {
                if(data == 'success'){
                    alert('评论成功!');
                    var now = new Date();
                    var html = `<li class="comment">
                            <div class="comment-info">
                                <span class="username">`+$username.val()+`</span>
                                <span class="post-date">`+now.toLocaleDateString()+`</span>
                            </div>
                            <p class="content">`+$message.val()+`</p>
                        </li>`;
                    jQuery('.comment-list').prepend(html);
                    $commentNum.text(parseInt($commentNum.text())+1);
                }else{
                    alert('评论失败!');
                }
            },'text');
        });
    });
});