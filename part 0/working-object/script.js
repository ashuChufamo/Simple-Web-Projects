/*
alert(this);
var person = new Object();
person.firstName = "Jeremy";
person.lastName = "McPeak";
person.getFullName = function() {
	
    return this.firstName + " " + 
    this.lastName;
};
*/

var person = {
    firstName : "Jeremy",
    lastName : "McPeak",
    getFullName : function() {
        return this.firstName + " " + this.lastName;
    }
};

alert(window.person.firstName);
alert(person.lastName);
alert(person.getFullName());
