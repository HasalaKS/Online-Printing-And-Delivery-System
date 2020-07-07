function validate() {
	
	var firstName = document.forms["myForm"]["firstname"].value;
	var secondName = document.forms["myForm"]["secondname"].value;
	var email = document.forms["myForm"]["email"].value;
	var tp = document.forms["myForm"]["contactnumber"].value;
	var add1 = document.forms["myForm"]["addressline1"].value;
	var cust_city = document.forms["myForm"]["city"].value;
	var cust_country = document.forms["myForm"]["country"].value;
	var zip = document.forms["myForm"]["zipcode"].value;
	var user = document.forms["myForm"]["username"].value;
	var pw1 = document.forms["myForm"]["password"].value;
	var pw2 = document.forms["myForm"]["confirmpassword"].value;
	var user_agree = document.forms["myForm"]["agree"].value;
		
	
	var state=false;
	
	if( isEmpty(firstName, "User Name") == false ){
		return state;
	}
	else if( isEmpty(secondName,"Second Name") == false ){
		return state;
	}
	else if( isEmpty(email,"Email") == false ){
		return state;
	}
	else if( isEmpty(tp,"Contact Number") == false ){
		return state;
	}
	else if( isEmpty(add1,"Address line1") == false ){
		return state;
	}
	else if( isEmpty(cust_city,"City") == false ){
		return state;
	}
	else if( isEmpty(cust_country,"Country") == false ){
		return state;
	}
	else if( isEmpty(zip,"Zip code") == false ){
		return state;
	}
	else if( isEmpty(user,"User Name") == false ){
		return state;
	}
	else if( isEmpty(pw1,"Password") == false ){
		return state;
	}
	else if( isEmpty(pw2,"Confirm Password") == false ){
		return state;
	}
	else if( isEmpty(user_agree,"Agrement") == false ){
		return state;
	}
	
}

function isEmpty(ele , msg ){
	if ( ele == 0){
		alert(msg + " field must be filled");
		return false;
	}
}