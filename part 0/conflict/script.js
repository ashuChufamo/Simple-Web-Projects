var hello ="script";
(function() {

var globalVar = "This is a global variable.";
//alert(window.globalVar);
var globalFunction = function(paramOne) {
    var localVar = "This is a local variable.";

    var localFunction = function() {
        var localVarInside = "hello, world!";
        
       /// alert(localVar);
	// alert(globalVar);
    };
    // alert(localVarInside);// 
    localFunction();
    //alert(localVar);
};

//globalFunction(2);


}());

alert(globalVar);
