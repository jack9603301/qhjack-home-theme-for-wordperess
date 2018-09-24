//qq emotion:104
//emoji:1619
//emoji路径
var emoji_path = '/wp-content/themes/home/emoji';
(function($){
    //预加载表情图片
    var tmp = new Image();
    for(var i=0; i<=104; i++){
        tmp.src = emoji_path + '/qqfaces/'+i+'.gif';
    }
    tmp.src = emoji_path + '/emoji.png';

    var $html = document.getElementsByTagName("html")[0];
    //触屏(手机/平板/触屏电脑)
    if("ontouchstart" in document){
        $html.addEventListener('touchstart', emojiBubble, false);
    }else{
        //电脑
        $html.addEventListener('click', emojiBubble, false);
    }
})(jQuery);

/**
 * 产生随机整数，包含下限值，包括上限值
 * @param {Number} lower 下限
 * @param {Number} upper 上限
 * @return {Number} 返回在下限到上限之间的一个随机整数
 */
function random(lower, upper) {
    return Math.floor(Math.random() * (upper - lower+1)) + lower;
}

//模拟php的in_array用于检查元素是否在数组中功能
Array.prototype.in_array = function(needle)
{
    for(i=0; i<this.length; i++)
    {
        //说明有多个类名
        if(needle!==undefined && needle.indexOf(' ') > -1){
            var tmpArr = needle.split(' ');
            for (j=0; j < tmpArr.length; j++) {
                //递归调用自己
                if(this.in_array(tmpArr[i])){
                    return true;
                }
            }
        }
        if(this[i] == needle){
            return true;
        }
    }
    return false;
}

function emojiBubble (e){
    var t = e.target;
    var tp = t.parentNode!=undefined ? t.parentNode : t;
    var tn = t.tagName;
    var excludeClasses = ['wpdiscuz-sbs-wrap', 'wpd_label__check', 'wc-field-avatararea', 'reward-btn','geetest_radar_tip'];
    var excludeBubbleEle= ['A', 'INPUT', 'BUTTON', 'SELECT', 'OPTION', 'RADIO', 'CHECKBOX', 'LABEL', 'TEXTAREA'];
    if(!excludeBubbleEle.in_array(tn) && (tp!=undefined && tp.tagName!=undefined && !excludeBubbleEle.in_array(tp.tagName))
        && (t.className!=undefined && !excludeClasses.in_array(t.className)) && (tp.className!=undefined && !excludeClasses.in_array(tp.className))
    ){
        var $body = document.getElementsByTagName("body")[0];
        var $elem = document.createElement("b");
        $elem.style.color = "#E94F06";
        $elem.style.zIndex = 9999;
        $elem.style.position = "absolute";
        $elem.style.select = "none";
        if("ontouchstart" in document){
            var x = e.targetTouches[0].pageX
            var y = e.targetTouches[0].pageY
        }else{
            var x = e.pageX;
            var y = e.pageY;
        }
        //默认从鼠标点击位置的左上方开始往上冒泡（如果不这么做，表情会被鼠标指针挡住）
        $elem.style.left = (x - 10) + "px";
        $elem.style.top = (y - 20) + "px";
        //不管上一次interval有没有运行完，直接结束它，再重新开始
        clearInterval(anim);

        //获取一个随机数
        var rand = random(1,1723);
        var emojiSize = 32;
        if(rand>104){
            //设置元素宽高
            $elem.style.width = emojiSize+'px';
            $elem.style.height = emojiSize+'px';
            //设置元素背景图片
            $elem.style.backgroundImage = 'url('+emoji_path+'/emoji.png)';

            //0-104为qq表情，从105开始为emoji，由于emoji也从0开始，所以要减去105
            rand = rand - 105;
            //emoji是一个正方形，共41*41列=1681个格式，最后有62个格式是空的，所以共有1681-62=1619个表情
            //rand表示第几个，从0开始（从左边第一列开始往下数，不往右数原因是最后一列为空，倒数第二列只有一半，有个行有40个，有的行只有39个，不方便定位）
            //我们要根据给定的第几个，计算出对应表情的(x,y)坐标（已经整个图片是41*41的正方形）
            var x2 = Math.floor(rand/41);
            var y2 = rand % 41;
            // console.log(rand, x2,y2);
            $elem.style.backgroundPosition = x2*(-emojiSize)+'px '+y2*(-emojiSize)+'px';
        }else{
            var img = '<img src="'+emoji_path+'/qqfaces/'+rand+'.gif">';
            $elem.innerHTML = img;
        }
        // $body.appendChild($elem);return;
        var increase = 0;
        var anim;
        //点击后稍微延迟再开始动画
        setTimeout(function() {
            anim = setInterval(function() {
                //每8毫秒循环一次，每循环一次就往上移动一个像素，共循环150次=1200毫秒=1.2s
                if (++increase == 150) {
                    clearInterval(anim);
                    $body.removeChild($elem);
                }
                $elem.style.top = y - 20 - increase + "px";
                $elem.style.opacity = (150 - increase) / 120;
            }, 8);
        }, 70);
        $body.appendChild($elem);
    }
}
