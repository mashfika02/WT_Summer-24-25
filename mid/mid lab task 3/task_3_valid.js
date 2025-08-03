function HandleSubmit(){
    var name = document.getElementById("name").value;
    var address = document.getElementById("address").value;
    var city = document.getElementById("city").value;
    var state = document.getElementById("state").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var cp = document.getElementById("cp").value;
    var amount = document.getElementById("amount").value;
    var checkbox = document.getElementById("checkbox").value;
    var comment = document.getElementById("comment").value;

    //validation
    if(name === "" || address === "" || city === "" || state === "" || phone === "" || email === "" || password === "" || cp === "" || amount === "" || comment === ""){
        alert("Please Fill The Form!");
        return false;
    }

    //password
    if(password.length <= 8){
          alert("Password must be at least 8 characters long.");
          return false;
    }
    if(password !== cp){
        alert(" ❗ Password do not match.")
        return false;
    }
}