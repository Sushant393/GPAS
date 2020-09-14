function validate()
	{

		var name=document.forms["login"]["name"].value;

		var password=document.forms["login"]["password"].value;	

		if ((password==null || password=="") && !(name==null || name=="")){

		    alert("Please enter your password !!");return false;

		}
		if (!(password==null || password=="") && (name==null || name=="")  )
		{

		    alert("Please enter your name !!");return false;
        }
		if ((name==null || name=="") && (password==null || password==""))
		{
		    alert("Please enter your name !! \nPlease enter your password !!");return false;

		}
		else
		return true;

	}

		