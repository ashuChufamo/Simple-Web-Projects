<?php

function validateuser($username,$password)
{

	if (getuserpassword($username) == crypt($password,'$2a$09$asdfjklfz85t5dmnedlsi9'))
		return true;
	return false;
}

function getuserpassword($username)
{
	return '$2a$09$asdfjklfz85t5dmnedlsiurRIXCqTYg35Miqn/9AV.pbQpTwe9a5a';
}
?>