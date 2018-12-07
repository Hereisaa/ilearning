var capital_json = {"capital":["A","Ă","Â","E","Ê","I","O","Ô","Ơ","U","Ư"]}
var lowercase_json = {"lowercase":["a","ă","â","e","ê","i","o","ô","ơ","u","ư"]};
var playaudio_icon_path = "PIC/game/playaudio.jpg";

var source_para = [
    {word:"A",x:40,y:660},
    {word:"Ă",x:120,y:660},
    {word:"Â",x:200,y:660},
    {word:"E",x:280,y:660},
    {word:"Ê",x:360,y:660},
    {word:"I",x:440,y:660},
    {word:"O",x:520,y:660},
    {word:"Ô",x:600,y:660},
    {word:"Ơ",x:680,y:660},
    {word:"U",x:760,y:660},
    {word:"Ư",x:840,y:660}
    ]
var target_para = [
    {word:"A",x:140,y:180},
    {word:"Ă",x:260,y:180},
    {word:"Â",x:380,y:180},
    {word:"E",x:500,y:180},
    {word:"Ê",x:620,y:180},
    {word:"I",x:740,y:180},
    {word:"O",x:180,y:380},
    {word:"Ô",x:300,y:380},
    {word:"Ơ",x:420,y:380},
    {word:"U",x:540,y:380},
    {word:"Ư",x:660,y:380}
    ]
// var source_para = [
//     {word:"Aa",x:40,y:660},
//     {word:"Ăă",x:120,y:660},
//     {word:"Ââ",x:200,y:660},
//     {word:"Ee",x:280,y:660},
//     {word:"Êê",x:360,y:660},
//     {word:"Ii",x:440,y:660},
//     {word:"Oo",x:520,y:660},
//     {word:"Ôô",x:600,y:660},
//     {word:"Ơơ",x:680,y:660},
//     {word:"Uu",x:760,y:660},
//     {word:"Ưư",x:840,y:660}
//     ]
// var target_para = [
//     {word:"Aa",x:140,y:180},
//     {word:"Ăă",x:260,y:180},
//     {word:"Ââ",x:380,y:180},
//     {word:"Ee",x:500,y:180},
//     {word:"Êê",x:620,y:180},
//     {word:"Ii",x:740,y:180},
//     {word:"Oo",x:180,y:380},
//     {word:"Ôô",x:300,y:380},
//     {word:"Ơơ",x:420,y:380},
//     {word:"Uu",x:540,y:380},
//     {word:"Ưư",x:660,y:380}
//     ]

var context;
var pressobj,collision_dst;
var audio_path = "audio/teach/";
var background_path = "PIC/game/tree_background.jpg";
var test_result;
var old = {x:0,y:0};


window.onload=function(){
    test_result = window.location.search.substring(1,window.location.search.length);
    console.log(test_result);

    var canvas = document.getElementById("canvas");
    context = canvas.getContext("2d");
    canvas.style.backgroundImage = "url('"+background_path+"')";
    rectager = new Array;
    target = new Array;
    
    // mcomplete = new complete().draw(context);
    

    for (var i = 0; i < source_para.length; i++) {
        rectager[i] = new Rectager();
        rectager[i].fillStyle = 'red';
        rectager[i].audio_src = audio_path+source_para[i].word+".mp3";
        rectager[i].word = source_para[i].word;
        rectager[i].x = source_para[i].x;
        rectager[i].y = source_para[i].y;
        // rectager[i].showtext = 1;
        rectager[i].showimage = 1;
        // 渲染音檔
        rectager[i].draw(context);
    }

    for (var i = 0; i < target_para.length; i++) {
        target[i]=new Rectager();
        target[i].fillStyle = 'green';
        target[i].word = target_para[i].word;
        target[i].audio_src = audio_path+target_para[i].word+".mp3";
        target[i].x = target_para[i].x;
        target[i].y = target_para[i].y;
        target[i].showtext = 1;
        // 渲染目標
        target[i].draw(context);
    }


    mouse = {x: 0, y: 0},
        isPressed = false,pressobj = 0;
    // 声明鼠标按下时，鼠标与小球圆心的距离
    var dx = 0,
        dy = 0;


    // 小球拖拽事件
    canvas.addEventListener("mousedown", mouseDown, false);
    canvas.addEventListener("mousemove", mouseMove, false);
    canvas.addEventListener("mouseup", mouseUp, false);

}
    

    // function complete(){
    //     this.word = "很棒! 再測驗一次"
    //     this.x = 300;
    //     this.y = 450;
    //     this.fontsize = 50;
    //     this.width = 420;
    //     this.height = 70;

    //     this.draw = function(cxt) {
    //         cxt.beginPath();
    //         cxt.fillStyle = this.fillStyle;
    //         cxt.font = this.fontsize+"px Arial";
    //         cxt.fillStyle = "green";
    //         cxt.fillRect(this.x,this.y,(this.word.length-1)*this.fontsize,this.fontsize*1.2);
    //         cxt.fillStyle = "black";
    //         cxt.fillText(this.word,this.x+this.fontsize*0.2,this.y+this.fontsize*0.9);
    //         cxt.closePath();
    //   }
    // }


    // 创建画球函数
    function Rectager() {
       this.word="";
      this.x = 0;
      this.y = 0;
      this.width = 30;
      this.height = 30;
      this.fillStyle = "#f85455";
      this.audio_src = "";
      this.filltext = 0;
      this.showtext = 0;
      this.showimage = 0;

      this.draw = function(cxt) {
        cxt.beginPath();
        cxt.fillStyle = this.fillStyle;
        cxt.font = "50px Arial";
        
        if(this.showtext==1){
            cxt.fillRect(this.x,this.y,this.width,this.height);
            if(this.filltext==1)
                cxt.fillText(this.word,this.x,this.y);
            else
                cxt.strokeText(this.word,this.x,this.y);
        }
        if(this.showimage==1){
            image = new Image();
            image.src = playaudio_icon_path;
            cxt.drawImage(image,this.x,this.y,this.width,this.height);
        }
        
        cxt.closePath();
      }

    };
    // 获得当前鼠标位置
    function getMouse(ev) {
      var mouse = {
        x: 0,
        y: 0
      };
      // var event = ev || window.event;
      // if(event.pageX || event.pageY) {
      //   x = event.x;
      //   y = event.y;
      // }else {
      //   var scrollLeft = document.documentElement.scrollLeft || document.body.scrollLeft;
      //   var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
      //   x = event.clientX + scrollLeft;
      //   y = event.clientY + scrollTop;
      // }
      // mouse.x = x;
      // mouse.y = y;

        var canvasBox = canvas.getBoundingClientRect(); //獲取canvas元素的邊界框
        mouse.x= (ev.x - canvasBox.left)*(canvas.width/canvasBox.width), //對canvas元素大小與繪圖表面大小不一致時進行縮放
        mouse.y= (ev.y - canvasBox.top)*(canvas.height/canvasBox.height)
        

      return mouse;
    }


    function mouseDown(ev) {
      // 判断当前鼠标是否在方塊內
      mouse = getMouse(ev);
      for (var i = 0; i < rectager.length; i++) {
            if( mouse.x>=rectager[i].x && mouse.y >= rectager[i].y && mouse.x<=rectager[i].x+rectager[i].width && mouse.y<= rectager[i].y+rectager[i].height ) {
                isPressed = true;
                pressobj = i;
                // 撥放音檔
                msound = new sound(rectager[i].audio_src);
                msound.play(); 

                // 记录鼠标按下时，鼠标与矩形中心的距离
                dx = mouse.x - rectager[i].x;
                dy = mouse.y - rectager[i].y;


                
          }
      }
      old.x = rectager[pressobj].x;
      old.y = rectager[pressobj].y; 
      console.log("rectager:"+rectager[pressobj].x+","+rectager[pressobj].y+"Mouse:"+mouse.x+","+mouse.y);
      console.log("pressobj : oldx:"+old.x+",oldy"+old.y);
    }

    function mouseMove(ev) {

        if(isPressed) {
            mouse = getMouse(ev);
            rectager[pressobj].x = mouse.x-dx;
            rectager[pressobj].y = mouse.y-dy;
            
            context.clearRect(0, 0, canvas.width, canvas.height);
            rectager[pressobj].draw(context);
            
                

            for (var i = 0; i < target.length; i++) {
                target[i].draw(context);
            }
            for (var i = 0; i < rectager.length; i++) {
                rectager[i].draw(context);
            }

                    
        }
        
    }

    function mouseUp(ev) {
        // 标示鼠标弹起事件
        isPressed = false;
        collision = 0;
        // 判斷碰撞到哪一個obj
        for (var i = 0; i < target.length; i++) {
                
            ax = rectager[pressobj].x;
            ay = rectager[pressobj].y;
            aw = rectager[pressobj].width;
            ah = rectager[pressobj].height;
            bx = target[i].x;
            by = target[i].y;
            bw = target[i].width;
            bh = target[i].height;

            var maxX,maxY,minX,minY
            maxX = ax+aw >= bx+bw ? ax+aw : bx+bw;
            maxY = ay+ah >= by+bh ? ay+ah : by+bh;
            minX = ax <= bx ? ax : bx;
            minY = ay <= by ? ay : by;

            if(maxX - minX <= aw+bw && maxY - minY <= ah+bh){                   
                console.log("collision_src:"+pressobj+" scollision_dst:"+i);
                collision_dst = i;
                collision = 1; 
            }
        }
       // 放開鼠標後，判斷是否成功配對
       if(collision==1){
            if(rectager[pressobj].word==target[collision_dst].word ){
                console.log("collision");

                console.log("src:"+pressobj+"dst:"+collision_dst);
                rectager.splice(pressobj,1);
                // target.splice(collision_dst,1);
                target[collision_dst].filltext=1;
            }else{
                // 碰撞錯誤 也要放回去
                console.log("no_collision");
                console.log("pressobj : oldx:"+old.x+",oldy"+old.y);
                rectager[pressobj].x=old.x;
                rectager[pressobj].y=old.y;
            }
            
        }else{
            // 配對失敗，音檔回去
            console.log("no_collision");
            console.log("pressobj : oldx:"+old.x+",oldy"+old.y);
            rectager[pressobj].x=old.x;
            rectager[pressobj].y=old.y;
        }
       
        
        

        // 再從畫一次
        context.clearRect(0, 0, canvas.width, canvas.height);

        for (var i = 0; i < target.length; i++) {
                target[i].draw(context);
            }
            for (var i = 0; i < rectager.length; i++) {
                rectager[i].draw(context);
            }
      // 把鼠标与圆心的距离位置恢复初始值
      dx = 0;
      dy = 0;
      // 碰到的東西歸零
      collision_dst = null;

      if(rectager.length==0)
        document.getElementById("complete_btn").style.display="block";
      

    }

function complete(){
    
    window.location.href = "teach.html?"+test_result;

}

function sound(src) {
    this.sound = document.createElement("audio");
    this.sound.src = src;
    this.sound.setAttribute("preload", "auto");
    this.sound.setAttribute("controls", "none");
    this.sound.style.display = "none";
    document.body.appendChild(this.sound);
    this.play = function(){
        this.sound.play();
    }
    this.stop = function(){
        this.sound.pause();
    }
}

