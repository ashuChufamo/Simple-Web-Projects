<?php
	// US State Abbreviations
	$US_States_REGEX = '/\\b(?:A[KLRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|LA|M[ADEINOST]|N[CDEHJMVY]|O[HKR]|PA|RI|S[CD]|T[NX]|UT|V[AT]|W[AIVY])\\b/';
	// USPS Zipcodes
	$US_ZipCode_REGEX ='/\b[0-9]{5}(?:-[0-9]{4})?\b/';
	//Password must contain at least one upper case letter, one lower case letter and one digit.
	$PW_Complexity_REGEX = "/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/";
	//Phone numbers of the form: 3334445555, 333.444.5555, 333-444-5555, 333 444 5555, (333) 444 5555
	$PhoneNumber_REGEX = '/\(?[0-9]{3}\)?[-. ]?[0-9]{3}[-. ]?[0-9]{4}/';
	//US Social Security Numbers
	$SSN_REGEX = '/\b[0-9]{3}-[0-9]{2}-[0-9]{4}\b/';
	//E-Mail Address
	$EMAIL_REGEX = '/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,4}/';
	//Dates of the form MM/DD/YYYY
	$Date_REGEX = '/^(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d$/';
	//IP Address
	$IPAddress_REGEX = '/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/';
	//Floating point numbers
	$FloatNumbers_REGEX = '/{^[-+]?[0-9]*\.?[0-9]+([eE][-+]?[0-9]+)?$}/';
	//URL Name
	$URL_REGEX = '/((([A-Za-z]{3,9}:(?:\/\/)?)(?:[-;:&=\+\$,\w]+@)?[A-Za-z0-9.-]+|(?:www.|[-;:&=\+\$,\w]+@)[A-Za-z0-9.-]+)((?:\/[\+~%\/.\w-_]*)?\??(?:[-\+=&;%@.\w_]*)#?(?:[\w]*))?)/';
?>