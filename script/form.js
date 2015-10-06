function formvalidation(){
	var firstname = document.registration.firstname;
	var lastname = document.registration.lastname;
	var email = document.registration.email;
	var password = document.registration.password;
	var dob = document.registration.dob;
	var male = document.registration.male;
	var female = document.registration.female;
	var message = document.registration.message;
	var onoff = document.registration.onoff;
	

if(all(firstname)){
	if(all(lastname)){
		if(email_valid(email)){
			if(password_valid(password)){
				if(sex_valid(male,female)){
					
				}
			}
		}
	}
}
return false;
}
//passwsord valisation
function password_valid(password , mx,mi){
	var len = password.value.length;
	if(len == 0 || len >= mx || len < mi){
		alert("password not empty or length between"+ mx + "and" + mi+".");
		password.focus();
		return false;
	}
	return true;
}
//first name and last name

function all(name){
	var letters = /^[A-Za-z]+$/;
	if(name.value.match(letters)){
		return true;
	}else{
		alert("firstname and last name can only be alphabets no space are allowed!");
		name.focus();
		return false;
	}
}
function email_valid(email){
	var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	if(email.value.match(format)){
		return true;
	}else{
		alert('Enter a valid email format ');
		email.focus();
		return false();
	}
}
function sex_valid(male,female){
	x=0;
	if(male.checked){
		x++;
	}
	if(female.checked){
		x++;
	}
	if(x  == 0){
		alert('select one male or female');
		male.focus();
		return false;
	}
	
}