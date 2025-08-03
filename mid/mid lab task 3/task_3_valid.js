function HandleSubmit(){
    var first_name = document.getElementById("first_name").value.trim();    
    var last_name = document.getElementById("last_name").value.trim();    
    var address = document.getElementById("address").value.trim();
    var city = document.getElementById("city").value.trim();
    var state = document.getElementById("state").value;
    var phone = document.getElementById("phone").value.trim();
    var email = document.getElementById("email").value.trim();
    var password = document.getElementById("password").value.trim();
    var cp = document.getElementById("cp").value.trim();
    var amount = document.getElementById("amount").value;
    var checkbox = document.getElementById("checkbox").value;
    var comment = document.getElementById("comment").value.trim();

    //validation
    if(first_name === "" || last_name === "" || address === "" || city === "" || phone === "" || email === "" || password === "" || cp === "" || comment === ""){
        alert("Please Fill The Form ❗");
        return false;
    }

    //password
    if(password.length < 8){
          alert("Password must be at least 8 characters long.");
          return false;
    }
    if(password !== cp){
        alert(" Password do not match.")
        return false;
    }

    if(phone.length !== 11 || isNaN(phone)){
        alert("Phone Number is not Valid ❗");
        return false;
    }
   

    alert("Registration Complete 👍 \n" +
        "Full Name :" + first_name +" "+last_name + "\n" +
        "Address :" + address + "\n" +
        "City :" + city + "\n" +
        "State :" + state+ "\n" +
        "Phone :" + phone + "\n" +
        "Email :" + email + "\n" +
        "Additional Information :" + checkbox + "\n" +
        "Donation Amount :" + amount + "\n" 

    );
    return true;
}