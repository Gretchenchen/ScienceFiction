
// use DOM selection method to get specific nodes
let userName=document.getElementById("username");
let email=document.getElementById("email");
let password=document.getElementById("password");
let password2=document.getElementById("cfpassword");

// validate function
function validate(){
    let valid = true;

// validate user name
if(userName.value.trim()===""){
    onError(userName,"User Name cannot be empty");
    valid = false;
} else if(userName.value.trim().length > 20){
    onError(userName,"User Name should be less than 20 characters");
    valid = false;
} else{
    userName.value = userName.value.toLowerCase();
}

// validate email
    if(email.value.trim()===""){
        onError(email,"Email cannot be empty");
        valid = false;
    } else if(!isValidEmail(email.value.trim())){
        onError(email, "Email is not valid");
        valid = false;
    } else{
        onSuccess(email);
    }


// validate password
    if(password.value.trim()===""){
        onError(password,"Password cannot be empty");
        valid = false;
    } else if(!isValidPassword(password.value.trim())){
        onError(password,"Password should be at least 6 charachters long, contains 1 uppercase letter and 1 lowercase letter");
        valid = false;
    } else{
        onSuccess(password);
    }
        
// validate password2
    if(password2.value.trim()===""){
        onError(password2,"Password cannot be empty");
        valid = false;
    } else if(password2.value.trim()!=pass.value.trim()){
        onError(password2, "Password and confirm password does not match");
        valid = false;
    } else {
        onSuccess(password2);
    }
}

// validate email pattern
function isValidEmail(email){
    return /^(.+)@(.+)[.](.+)$/.test(email);
}

// validate password, should contain 1 uppercase letter and 1 lowercase letter
function isValidPassword(password){
    return /^(?=.*[a-z])(?=.*[A-Z]).{6,}$/.test(password);
}

//define a success function 
function onSuccess(input){
    let parent=input.parentElement;
    let messageElement=parent.querySelector("small");
    messageElement.style.visibility="hidden";
    messageElement.innerText="";
    parent.classList.remove("error");
    parent.classList.add("success");
}

//define an error function
function onError(input,message){
    let parent=input.parentElement;
    let messageElement=parent.querySelector("small");
    messageElement.style.visibility="visible";
    messageElement.innerText=message;
    parent.classList.add("error");
    parent.classList.remove("success");
}

