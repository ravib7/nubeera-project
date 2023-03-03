function authenticate(name){

    if(name=='login'){
        event.preventDefault();

        let email = document.getElementById(name).elements.namedItem("email").value;
        let password = document.getElementById(name).elements.namedItem("password").value;
        console.log(email,password);
        let httpr = new XMLHttpRequest();
        httpr.open("POST", "../database/userLoginController.php",true);
        httpr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        httpr.onreadystatechange = function(){

            if(httpr.readyState == 4 && httpr.status == 200){
                if(httpr.responseText == "ok"){
                    document.getElementById("message").innerHTML = "Login Success";
                    window.location.assign('../User/User.php');
                }
                else
                    document.getElementById("message").innerHTML = "Invalid Email or Password....Try Again";
            }
        };
        httpr.send("email="+email+"&password="+password);
    }else{

        event.preventDefault();
        let email = document.getElementById(name).elements.namedItem("email").value;
        let firstName = document.getElementById(name).elements.namedItem('firstName').value;
        let lasttName = document.getElementById(name).elements.namedItem('lastName').value;
        let password1 = document.getElementById(name).elements.namedItem("password").value;
        let password2 = document.getElementById(name).elements.namedItem("password2").value;
        let mobile = document.getElementById(name).elements.namedItem("mobile").value;
	
		if(password1 != password2){
			document.getElementById("message").innerHTML = "Please Enter Same Password";
		}
		else{
		
			let httpr = new XMLHttpRequest();
			httpr.open("POST", "../database/userRegistrationController.php",true);
			httpr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			httpr.onreadystatechange = function(){
				if(httpr.readyState == 4 && httpr.status == 200){
					
				}
			};
			httpr.send("email="+email+"&password="+password+"&firstName="+firstName+"&lastName="+lasttName+"&mobile="+mobile);
		}
	}
}


