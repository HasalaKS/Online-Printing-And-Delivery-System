function validate() {
	
	var firstName = document.forms["myForm"]["name"].value;
	var email = document.forms["myForm"]["email"].value;
	var add1 = document.forms["myForm"]["address1"].value;
	var add2 = document.forms["myForm"]["address2"].value;
	var city = document.forms["myForm"]["city"].value;
	var zip = document.forms["myForm"]["zipcode"].value;
		
	
	var state=false;
	
	if( isEmpty(firstName, "Name") == false ){
		return state;
	}
	else if( isEmpty(email,"Email") == false ){
		return state;
	}
	else if( isEmpty(add1,"Address line 1") == false ){
		return state;
	}
	else if( isEmpty(add2,"Address line 2") == false ){
		return state;
	}
	else if( isEmpty(city,"City") == false ){
		return state;
	}
	else if( isEmpty(zip,"Zip Code") == false ){
		return state;
	}
	
}

function isEmpty(ele , msg ){
	if ( ele == 0){
		alert(msg + " field must be filled");
		return false;
	}
}