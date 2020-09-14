function validate()
{
var name=document.forms["signup"]["name"].value;
var password=document.forms["signup"]["password"].value;
var repassword=document.forms["signup"]["repassword"].value;
var collname=document.forms["signup"]["collname"].value;
var email=document.forms["signup"]["email"].value;
var phone=document.forms["signup"]["phone"].value;
var realname=document.forms["signup"]["realname"].value;
if ((realname==null || realname=="") ||(password==null || password=="") || (name==null || name=="") || (repassword==null || repassword=="") || (collname==null || collname=="") || (email==null || email=="") || (phone==null || phone==""))
{
	alert("All fields are compulsory ! \nPlease fill in the empty fields !");return false;
}
if(password!=repassword)
{
	alert("Passwords do not match !\nPlease provide the same password !");return false;
}
if(name.length>10)
	{
	alert('Please enter name of of less than 10 characters only !');return false;
	}
if(phone.length!=10)
	{
	alert("Phone number must be exactly of 10 digits !\nPlease enter again !");return false;
	}

else
return true;
}

function test()
{
var name=document.forms["signup"]["name"].value;
if(name.length>10)
{
alert('Please enter name of less than 10 characters only !');
}
}

function test2()
{
var password=document.forms["signup"]["password"].value;
var repassword=document.forms["signup"]["repassword"].value;
if(password!=repassword)
{
alert("Passwords do not match !\nPlease provide the same password !");return false;
}
}

function test3()
{
var phone=document.forms["signup"]["phone"].value;
if(phone.length!=10)
{
alert("Phone number must be exactly of 10 digits !\nPlease enter again !");return false;
}
}