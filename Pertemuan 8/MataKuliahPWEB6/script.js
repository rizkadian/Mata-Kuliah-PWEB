function Login() {
    var done = 0;
    var username = document.login.username.value;
    username = username.toLowerCase();
    var password = document.login.password.value;
    password = password.toLowerCase();
    if (username == "english" && password == "english") {
        window.location.href = "http://localhost/matakuliahPWEB6/Dashboard.html";
    } 
    else if (done == 0) {
        alert("Username/Password is wrong!");
    }
}