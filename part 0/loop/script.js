var names = [];
var fullName = ['Tomas Alex','Ayele Lema',
'Name'];

for(var len=fullName.length;len<10;len++) {
	// retriver value from the datababse based

	fullName.push("name"+len);
	//fullName.pop();
	
}


for(var i=0;i<10;i++) {
	
	fullName.pop();
	alert(fullName.pop());
}
/*
do  {
    var element = names.pop();
    
    alert(element);
} while (names.length > 0);

alert("this is outside of the loop");
*/
