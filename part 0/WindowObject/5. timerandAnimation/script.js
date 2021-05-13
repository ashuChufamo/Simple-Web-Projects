(function() {

/*
var speed = 10,
    moveBox = function() {
        var el = document.getElementById("box"),
            left = el.offsetLeft,
            moveBy=3;
            
        el.style.left = left + moveBy + "px";

        if(left>399){
            clearTimeout(timer);
        }
    };
var timer = setInterval(moveBox, speed);
*/

var speed = 10,
    moveBox = function(moveBy) {
        var el = document.getElementById("box"),
            left = el.offsetLeft;
            
        el.style.left = left + moveBy + "px";

        if ((moveBy > 0 && left > 399) || (moveBy < 0 && left < 51)) {
            clearTimeout(timer);
            timer = setInterval(function() {
                moveBox(moveBy * -1);
            }, speed);
        }
        
    };

var timer = setInterval(function () {
        moveBox(3);
    }, speed);


}());

