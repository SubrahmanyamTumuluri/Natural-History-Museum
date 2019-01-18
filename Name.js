//Tumuluri, Subrahmanyam
//	Red ID:821919300
//	CS545,Cyndi Chie
//	Assignment #4


function ValidationFLN(firstName,middleName,lastName) {

firstName=firstName.toLowerCase().split(' ');//Converting the first name to lower case letters and splitting wherever there is a space inbetween two words.
middleName=middleName.toLowerCase().split(' ');//Converting the middle name to lower case letters and splitting wherever there is a space inbetween two words.
lastName=lastName.toLowerCase().split(' ');//Converting the last name to lower case letters and splitting wherever there is a space inbetween two words.

//initializing f,g and h variables with zero.
var g=0;var h=0; var f=0;
for (g;g<firstName.length;g++) {
firstName[g]=firstName[g].charAt(0).toUpperCase()+firstName[g].substring(1); //This line means it converts first letter of each word in firstname to capital letter and remaining letters are in lower case. 
}

console.log(firstName.join(' '));
document.getElementById('ValdFN').innerHTML='First Name :'+ firstName.join(' ');


for (h;h<middleName.length;h++) {
middleName[h]=middleName[h].charAt(0).toUpperCase()+middleName[h].substring(1);//This line means it converts first letter of each word in middlename to capital letter and remaining letters are in lower case. 

}

console.log(middleName.join(' '));
document.getElementById('ValdMN').innerHTML='Middle Name : '+ middleName.join(' ');


for (f;f<lastName.length;f++) {
lastName[f]=lastName[f].charAt(0).toUpperCase()+lastName[f].substring(1);     
}

console.log(lastName.join(' '));
document.getElementById('ValdLN').innerHTML='Last Name : '+ lastName.join(' ');//This line means it converts first letter of each word in firstname to capital letter and remaining letters are in lower case.

//Created an ID named 'ValdTN' which calls the total name that is sum of firstname,middlename,lastname fields.
	document.getElementById('ValdTN').innerHTML='Full Name is: '+ firstName+middleName+lastName;
		console.log('Name is:' + firstName.join(' ').join(' ')+middleName.join(' ')+lastName);
}

//Initializing num1,num2,num3,num4 variables and Performing addition of these four variables and calling the final result (named res) with an ID 'FinRes'. 
	function mysumfunct() {
	var num1=parseInt(document.getElementById('NFiveOld').value);
	var num2=parseInt(document.getElementById('NFToTwelveold').value);
	var num3=parseInt(document.getElementById('NTToSeventeenold').value);
	var num4=parseInt(document.getElementById('NEPlus').value);
	var res=num1+num2+num3+num4;
	console.log(res);
	document.getElementById('FinRes').value=res;
	} 