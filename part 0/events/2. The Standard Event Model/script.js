(function() {

var buttons = document.getElementsByTagName("a");
var buttonClick = function () {
	var className = this.innerHTML.toLowerCase();
	document.body.className=className;

};

for (var i = 0, len = buttons.length; i < len; i = i + 1) {
    /*buttons[i].onclick = function() {
        var className = this.innerHTML.toLowerCase();
        
        document.body.className = className;
    };
    buttons[i].onclick = function () {
		alert("Hi");	
};
	*/
    buttons[i].addEventListener('click',buttonClick,false);
   buttons[i].addEventListener('click',function () {
	alert("Hi");
},false);
	buttons[i].removeEventListener('click',buttonClick,false);
	buttons[i].removeEventListener('click',function () {
	alert("Hi");
},false);
	/*
	// getting some information 
    buttons[i].addEventListener("click", function(evt) {
        var className = this.innerHTML.toLowerCase();
        alert(evt.type);//alert(evt.target);
        evt.preventDefault();
        
        document.body.className = className;
    }, false);
	*/    
}

}());

