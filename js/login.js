$('.login_form').find('input, textarea').on('keyup', function (e) {

    var $this = $(this),
        label = $this.prev('label');

    // 若输入框被按下,如果输入内容为空,则移除active class,否则添加active class
    if ($this.val() === '') {
        // label.removeClass('active highlight');
        label.removeClass('active');
    } else {
        // label.addClass('active highlight');
        label.addClass('active');
    }

});

$('.tab a').on('click', function (e) {

    //防止打开超链接
    e.preventDefault();

    $(this).parent().addClass('active');
    //除自己以外的同胞元素移除class
    $(this).parent().siblings().removeClass('active');

    // 得到当前tab的id
    var target = $(this).attr('href');

    // 将非当前tab的id的tab隐藏
    $('.tab-content > div').not(target).hide();

    $(target).fadeIn(600);

});