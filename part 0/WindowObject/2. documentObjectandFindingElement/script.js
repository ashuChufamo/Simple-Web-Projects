//alert(location);
(function() {
var pElements = document.getElementsByTagName('p');//nodelist

alert(pElements.length);
//finding the last element but ineffient 
var lastElement=pElements[pElements.length-1];

alert(lastElement.innerHTML);


var pElement = document.getElementById("foo");
pElement.innerHTML="<strong>Javascript modified value</strong>";
var pElement = document.querySelectorAll("p");
alert(pElement.length);



// select only one element 
var pElement = document.querySelector("p");
alert(pElement.parentNode.tagName);


var pElement = document.querySelectorAll("body p");
alert(pElement.length);



/*




// select element by id
var pElement = document.querySelector("#foo");
alert(pElement.parentNode.tagName);
  */  
}());

