
<?php
session_start();
if(isset($_SESSION['username'])){
	echo '<script>window.location = "newStudInfo.php";</script>';
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="sie-edge" />
    <link href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Slider Form</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="authenticate.php"method="post">
                <h1>Admin Login</h1>
                <!-- <div class="social-container">
                    <a href="#" class="social">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#" class="social">
                        <ion-icon name="logo-googleplus"></ion-icon>
                    </a>
                    <a href="#" class="social">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </div>
                <span>or use your email for registration</span> -->
                <input type="text" name="username" placeholder="UserName">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" id="login" >LOGIN</button>
                <!-- <button>Login</button> -->
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="view.php" method="POST">
                <h1>View Student Details</h1>
                <!-- <div class="social-container">
                    <a href="#" class="social">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#" class="social">
                        <ion-icon name="logo-googleplus"></ion-icon>
                    </a>
                    <a href="#" class="social">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </div>
                <span>or use your account</span> -->
                <input type="text" name='name' placeholder="Name" required>
                <input type="usn"name='usn' placeholder="USN" required>
                <button>View</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Student Details</h1>
                    <p>View student details by entering the USN number</p>
                    <button class="ghost" id="signIn">View</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Admin</h1>
                    <p>Enter the student details or edit the student details</p>
                    <button class="ghost" id="signUp">Login</button>
                </div>
            </div>
        </div>
    </div>
    <script src="main.js"></script>
    <script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
</body>

</html>



<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
    box-sizing: border-box;
}

body {
    font-family: 'Montserrat', sans-serif;
    background: #f6f5f7;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: -20px 0 50px;
    /* background-image: url(https://images.unsplash.com/photo-1500993855538-c6a99f437aa7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80); */
    background-image: url(https://ak.picdn.net/shutterstock/videos/1022736847/thumb/12.jpg);
    /* background-image: url("https://wallpapercave.com/wp/wp4430570.jpg"); */
    background-size: cover;  
}

h1 {
    font-weight: bold;
    margin: 0;
    color: beige;
}

p {
    font-size: 14px;
    font-weight: bold;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 20px 0 30px;
}

span {
    font-size: 12px;
    color: beige;
}

a {
    color: #fff;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0;
}

.container {
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    position: absolute;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
    opacity: 0.8;
}

.form-container form {
    background: rgba(45, 52, 54, 1.0);
    display: flex;
    flex-direction: column;
    padding: 0 50px;
    height: 100%;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.social-container {
    margin: 20px 0;
}

.social-container a {
    border: 1px solid #ddd;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 40px;
    width: 40px;
}


.form-container input {
    background: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
}

button {
    border-radius: 20px;
    border: 1px solid #ff4b2b;
    background: #ff4b2b;
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
}

input[type=text] {
    width: 240px;
    text-align: center;
    background: transparent;
    border: none;
    border-bottom: 1px solid #fff;
    font-family: 'PLay', sans-serif;
    font-size: 16px;
    font-weight: 200px;
    padding: 10px 0;
    transition: border 0.5s;
    outline: none;
    color: #fff;
    font-weight: bold;
}

input[type=usn] {
    width: 240px;
    text-align: center;
    background: transparent;
    border: none;
    border-bottom: 1px solid #fff;
    font-family: 'PLay', sans-serif;
    font-size: 16px;
    font-weight: bold;
    padding: 10px 0;
    transition: border 0.5s;
    outline: none;
    color: #fff;
}

input[type=password] {
    width: 240px;
    text-align: center;
    background: transparent;
    border: none;
    border-bottom: 1px solid #fff;
    font-family: 'PLay', sans-serif;
    font-size: 16px;
    font-weight: bold;
    padding: 10px 0;
    transition: border 0.5s;
    outline: none;
    color: #fff;
}

input[type=email] {
    width: 240px;
    text-align: center;
    background: transparent;
    border: none;
    border-bottom: 1px solid #fff;
    font-family: 'PLay', sans-serif;
    font-size: 16px;
    font-weight: 200px;
    padding: 10px 0;
    transition: border 0.5s;
    outline: none;
    color: #fff;
    font-weight: bold;
}

button:active {
    transform: scale(0.95);
}

button:focus {
    outline: :none;
}

button.ghost {
    background: transparent;
    border-color: #ff4b2b;
    background-color: #ff4b2b
}

.form-container {
    position: absolute;
    top: 0;
    height: 100%;
    transition: all 0.6s ease-in-out;
}

.sign-in-container {
    left: 0;
    width: 50%;
    z-index: 2;
}

.sign-up-container {
    left: 0;
    width: 50%;
    z-index: 1;
    opacity: 0;
}

.overlay-container {
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: transform 0.6s ease-in-out;
    z-index: 100;
}

.overlay {
    background: transparent;
    background: linear-gradient(to right, #ff4b2b, #ff416c) no repeat 0 0 /cover;
    color: #fff;
    position: absolute;
    left: -100%;
    height: 100%;
    width: 200%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}

.overlay-panel {
    position: absolute;
    top: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0 40px;
    height: 100%;
    width: 50%;
    text-align: center;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}

.overlay-right {
    right: 0;
    transform: translateX(0);
}

.overlay-left {
    transform: translateX(-20%);
}

/*....Animation....*/

/*....Move signin to the right....*/
.container.right-panel-active .sign-in-container {
    transform: translateX(100%);
}

/*....Move overlay to the left....*/
.container.right-panel-active .overlay-container {
    transform: translateX(-100%);
}

/*....Bring sign up over sign in....*/
.container.right-panel-active .sign-up-container {
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
}

/*...Move overlay back to right....*/
.container.right-panel-active .overlay {
    transform: translateX(50%);
}

.container.right-panel-active .overlay-left {
    transform: translateX(0);
}

.container.right-panel-active .overlay-right {
    transform: translateX(20%);
}

</style>


<script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');


signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});


signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});

</script>