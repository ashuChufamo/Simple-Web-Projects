var foo = parseFloat("3.14", 10); // 3.14
var x=parseInt("34af");
var str = 123;
alert(typeof str);
alert(x);


str=str.toString();
alert('using toSring='+typeof str );

str = str+'';
alert('using concat='+typeof str);
