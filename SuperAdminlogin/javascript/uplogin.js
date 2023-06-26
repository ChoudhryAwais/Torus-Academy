function logincheck() 
{
	var un = document.getElementById('username').value;
	var pa = document.getElementById('password').value;
	var aun = document.getElementById('ausername').value;
	var apa = document.getElementById('apassword').value;
	var unc = document.getElementById('usernamec');
	var pac = document.getElementById('passwordc');
	var invalid = document.getElementById('invalidup');
	if ((un==aun)||(pa==apa)) 
	{
		unc.style.border = "";
		pac.style.border = "";
		if (un!=aun) 
		{
			unc.style.border = "1px solid red";
			invalid.style.display = "";
			invalid.innerHTML="Invalid login, please try again";
			return false;
		}
		else if(pa!=apa)
		{
			pac.style.border = "1px solid red";
			invalid.style.display = "";
			invalid.innerHTML="Invalid login, please try again";
			return false;
		}
		else
		{
			return true;
		}
	}
	else
	{
		unc.style.border = "1px solid red";
		pac.style.border = "1px solid red";
		invalid.style.display = "";
		invalid.innerHTML="Invalid login, please try again";	
		return false;
	}
}