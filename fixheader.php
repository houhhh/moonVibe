<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta htt-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./css/common.css">
    <script src="http://code.jquery.com/jquery-1.11.2.js"></script>
    <script src="https://kit.fontawesome.com/9b4d07ff5a.js" crossorigin="anonymous"></script>
   
    
    <script>
        $(function() {
            let $menu = $('.gnb').find('a');
            $menu.eq(0).addClass('active');
            $menu.on('click',function() {
                $menu.removeClass('active');
                $(this).addClass('active');
            })


            // bannerTop
            const $btn = $('.bannerTop .close');
            $btn.on('click',function() {
                $('.bannerTop').fadeOut();
            })
        })
    </script>