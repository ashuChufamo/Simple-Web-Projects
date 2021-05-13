(function() {

// get ElementsByTagName is live 
var pElements = document.getElementsByTagName('p');
//var pElements = document.querySelectorAll('p');

alert(pElements.length);
//a variable to store a created p element 
var el = document.createElement('p');

// the above only create element to append use 
// append 
document.body.appendChild(el);

//pElements=document.querySelectorAll('p');

alert(pElements.length);


var el=document.createElement('p'),//create element
    content=document.createTextNode("<strong>Dynamically Created</strong>"); //content

    pFoo=document.getElementById("foo");

    el.appendChild(content);// append content to element

    el.setAttribute("align","center");
    el.id='bar';

    //document.body.appendChild(el); //append element to body, what if you need to add specific element ?
   // pFoo.parentNode.appendChild(el)

    // what if you want to insert before or after certain element
    //pFoo.parentNode.insertBefore(el,pFoo);
    //what if you want to replace one element by another
    pFoo.parentNode.replaceChild(el,pFoo);


}());

