jQuery(function ($){
    //触屏
    if("ontouchstart" in document){
        $(".reward-btn").on('touchstart', function (e){
            e.stopPropagation();
            if($(".popup").is(':visible')){
                $(".popup").fadeOut();
            }else{
                $(".popup").show();
            }
        });
        $(document).on('touchstart', function (e){
            if($(".popup").is(':visible')){
                $(".popup").fadeOut();
            }
        })
    }else{
        //电脑
        $(".reward-btn").mouseenter(function(){
            $(".popup").stop().slideDown()
        }).mouseleave(function(){
            $(".popup").stop().slideUp();
        });
    }
});