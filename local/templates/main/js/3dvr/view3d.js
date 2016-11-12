var stage;

function init() {   
    var canvas = document.getElementById("canvas");
   
    //var canvas = $(".view3d__canvas");
    if (!canvas || !canvas.getContext) return;
		
    stage = new createjs.Stage(canvas);  
 
    stage.enableMouseOver(true);
    stage.mouseMoveOutside = true; 
    createjs.Touch.enable(stage);
    
    var imgList = ["http://takhograf.p-w-d.ru/images/DSC00041.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00043.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00044.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00045.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00046.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00047.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00048.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00049.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00050.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00051.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00052.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00053.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00054.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00055.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00056.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00057.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00058.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00059.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00060.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00061.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00062.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00063.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00064.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00065.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00066.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00067.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00068.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00069.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00070.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00071.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00072.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00073.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00074.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00075.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00076.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00077.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00078.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00079.jpg",
                   "http://takhograf.p-w-d.ru/images/DSC00080.jpg"];  
    var images = [], loaded = 0, currentFrame = 0, totalFrames = imgList.length; 
    var rotate360Interval, start_x;
    
    var bg = new createjs.Shape();
    stage.addChild(bg);  
    
    var bmp = new createjs.Bitmap();	  
    stage.addChild(bmp);
    
    var myTxt = new createjs.Text("тахограф МИКАС - ЗАГРУЗКА ИЗОБРАЖЕНИЙ", '24px aa_bebas_neueregular', "#ffffff");
    myTxt.x = myTxt.y =20;
    myTxt.alpha = 0.7;
    stage.addChild(myTxt);   
    
    
    function load360Image() {
        var img = new Image();
        img.src = imgList[loaded];
        img.onload = img360Loaded;
        images[loaded] = img;   
    }
    
    function img360Loaded(event) {
        loaded++;        
        bg.graphics.clear()
        bg.graphics.beginFill("#101731").drawRect(0,0,stage.canvas.width * loaded/totalFrames, stage.canvas.height);
        bg.graphics.endFill();
        
        if(loaded==totalFrames) start360();
        else load360Image();
    }

    
    function start360() {
       
        
        // 360 icon
        var iconImage = new Image();
        iconImage.src = "http://takhograf.p-w-d.ru/images/ynDcT.png";
        iconImage.onload = iconLoaded;        
       
        // update-draw
        update360(0);
        
        // first rotation
        rotate360Interval = setInterval(function(){ if(currentFrame===totalFrames-1) { clearInterval(rotate360Interval); addNavigation(); } update360(1); }, 25);
    }
    
    function iconLoaded(event) {
        var iconBmp = new createjs.Bitmap();
        iconBmp.image = event.target;
        iconBmp.x = 20;
        iconBmp.y = canvas.height - iconBmp.image.height - 20;
        stage.addChild(iconBmp);
    }
    
    function update360(dir) {
        currentFrame+=dir;
        if(currentFrame<0) currentFrame = totalFrames-1;
        else if(currentFrame>totalFrames-1) currentFrame = 0;
        bmp.image = images[currentFrame];
    }


    //------------------------------- 
     function addNavigation() { 
        stage.onMouseOver = mouseOver;
        stage.onMouseDown = mousePressed;        
        
    }
    
    function mouseOver(event) {
        
    }
    
    function mousePressed(event) {
        start_x = event.rawX;
        stage.onMouseMove = mouseMoved;
        stage.onMouseUp = mouseUp;
              
    }
    
	function mouseMoved(event) {
        var dx = event.rawX - start_x;
        var abs_dx = Math.abs(dx);
        
        if(abs_dx>5) {
            update360(dx/abs_dx);
            start_x = event.rawX;
        }
	}
    
    function mouseUp(event) {
        stage.onMouseMove = null;
        stage.onMouseUp = null;         
        
	}    
    
    function handleTick() {	
         stage.update();
    }    
    
    
    load360Image();

    
     // TICKER
    createjs.Ticker.addEventListener("tick", handleTick);
    createjs.Ticker.setFPS(24);
    createjs.Ticker.useRAF = true;
}




// Init
window.addEventListener('load', init, false);






var stage2;

function init2() {   
    var canvas2 = document.getElementById("canvas2");
   
    //var canvas = $(".view3d__canvas");
    if (!canvas2 || !canvas2.getContext) return;
        
    stage2 = new createjs.Stage(canvas2);  
 
    stage2.enableMouseOver(true);
    stage2.mouseMoveOutside = true; 
    createjs.Touch.enable(stage2);
    
    var imgList = ["/test/js/3dvr/275/DSC00041.jpg",
                   "/test/js/3dvr/275/DSC00042.jpg",
                   "/test/js/3dvr/275/DSC00043.jpg",
                   "/test/js/3dvr/275/DSC00044.jpg",
                   "/test/js/3dvr/275/DSC00045.jpg",
                   "/test/js/3dvr/275/DSC00046.jpg",
                   "/test/js/3dvr/275/DSC00047.jpg",
                   "/test/js/3dvr/275/DSC00048.jpg",
                   "/test/js/3dvr/275/DSC00049.jpg",
                   "/test/js/3dvr/275/DSC00050.jpg",
                   "/test/js/3dvr/275/DSC00052.jpg",
                   "/test/js/3dvr/275/DSC00053.jpg",
                   "/test/js/3dvr/275/DSC00054.jpg",
                   "/test/js/3dvr/275/DSC00055.jpg",
                   "/test/js/3dvr/275/DSC00055.jpg",
                   "/test/js/3dvr/275/DSC00056.jpg",
                   "/test/js/3dvr/275/DSC00057.jpg",
                   "/test/js/3dvr/275/DSC00058.jpg",
                   "/test/js/3dvr/275/DSC00059.jpg",
                   "/test/js/3dvr/275/DSC00060.jpg",
                   "/test/js/3dvr/275/DSC00061.jpg",
                   "/test/js/3dvr/275/DSC00062.jpg",
                   "/test/js/3dvr/275/DSC00063.jpg",
                   "/test/js/3dvr/275/DSC00064.jpg",
                   "/test/js/3dvr/275/DSC00065.jpg",
                   "/test/js/3dvr/275/DSC00066.jpg",
                   "/test/js/3dvr/275/DSC00067.jpg",
                   "/test/js/3dvr/275/DSC00068.jpg",
                   "/test/js/3dvr/275/DSC00069.jpg",
                   "/test/js/3dvr/275/DSC00070.jpg",
                   "/test/js/3dvr/275/DSC00071.jpg",
                   "/test/js/3dvr/275/DSC00072.jpg",
                   "/test/js/3dvr/275/DSC00073.jpg",
                   "/test/js/3dvr/275/DSC00074.jpg",
                   "/test/js/3dvr/275/DSC00075.jpg",
                   "/test/js/3dvr/275/DSC00076.jpg",
                   "/test/js/3dvr/275/DSC00077.jpg",
                   "/test/js/3dvr/275/DSC00078.jpg",
                   "/test/js/3dvr/275/DSC00079.jpg",
                   "/test/js/3dvr/275/DSC00080.jpg",
                   "/test/js/3dvr/275/DSC00055.jpg",
                   "/test/js/3dvr/275/DSC00055.jpg",
                   "/test/js/3dvr/275/DSC00055.jpg",
                   "/test/js/3dvr/275/DSC00055.jpg",
                   "/test/js/3dvr/275/DSC00056.jpg"];  
    var images = [], loaded = 0, currentFrame = 0, totalFrames = imgList.length; 
    var rotate360Interval, start_x;
    
    var bg2 = new createjs.Shape();
    stage2.addChild(bg2);  
    
    var bmp = new createjs.Bitmap();      
    stage2.addChild(bmp);
    
    var myTxt = new createjs.Text("тахограф МИКАС - ЗАГРУЗКА ИЗОБРАЖЕНИЙ", '24px aa_bebas_neueregular', "#ffffff");
    myTxt.x = myTxt.y =20;
    myTxt.alpha = 0.7;
    stage2.addChild(myTxt);   
    
    
    function load360Image() {
        var img2 = new Image();
        img2.src = imgList[loaded];
        img2.onload = img360Loaded;
        images[loaded] = img2;   
    }
    
    function img360Loaded(event) {
        loaded++;        
        bg2.graphics.clear()
        bg2.graphics.beginFill("#101731").drawRect(0,0,stage2.canvas.width * loaded/totalFrames, stage2.canvas.height);
        bg2.graphics.endFill();
        
        if(loaded==totalFrames) start360();
        else load360Image();
    }

    
    function start360() {
       
        
        // 360 icon
        var iconImage = new Image();
        iconImage.src = "http://takhograf.p-w-d.ru/images/ynDcT.png";
        iconImage.onload = iconLoaded;        
       
        // update-draw
        update360(0);
        
        // first rotation
        rotate360Interval = setInterval(function(){ if(currentFrame===totalFrames-1) { clearInterval(rotate360Interval); addNavigation(); } update360(1); }, 25);
    }
    
    function iconLoaded(event) {
        var iconBmp = new createjs.Bitmap();
        iconBmp.image = event.target;
        iconBmp.x = 20;
        iconBmp.y = canvas.height - iconBmp.image.height - 20;
        stage2.addChild(iconBmp);
    }
    
    function update360(dir) {
        currentFrame+=dir;
        if(currentFrame<0) currentFrame = totalFrames-1;
        else if(currentFrame>totalFrames-1) currentFrame = 0;
        bmp.image = images[currentFrame];
    }


    //------------------------------- 
     function addNavigation() { 
        stage2.onMouseOver = mouseOver;
        stage2.onMouseDown = mousePressed;        
        
    }
    
    function mouseOver(event) {
        
    }
    
    function mousePressed(event) {
        start_x = event.rawX;
        stage2.onMouseMove = mouseMoved;
        stage2.onMouseUp = mouseUp;
              
    }
    
    function mouseMoved(event) {
        var dx = event.rawX - start_x;
        var abs_dx = Math.abs(dx);
        
        if(abs_dx>5) {
            update360(dx/abs_dx);
            start_x = event.rawX;
        }
    }
    
    function mouseUp(event) {
        stage2.onMouseMove = null;
        stage2.onMouseUp = null;         
        
    }    
    
    function handleTick() { 
         stage2.update();
    }    
    
    
    load360Image();
    
    
     // TICKER
    createjs.Ticker.addEventListener("tick", handleTick);
    createjs.Ticker.setFPS(24);
    createjs.Ticker.useRAF = true;
}




// Init
window.addEventListener('load', init2, false);