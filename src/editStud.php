

<!-- <form action="updateData.php" method="POST">
                <h1>View Student Details</h1>
               
                <input type="text" name='name' placeholder="Name">
                <input type="usn" name='usn' placeholder="USN">
				<button>Update</button>
            </form> -->
<button type="submit" class="back-button" ><a href="adminPage.php" >BACK</a></button>

    <div id="login-form-wrap">
  <h2>Update Student Details</h2>
  <form id="login-form" action="updateData.php" method="POST">
    <p>
    <input type="text" name="name" placeholder="Enter Name" required>
    </p>
    <p>
    <input type="text" name="usn" placeholder="Enter USN" required>
    </p>
    <p>
    <input type="submit" value="Update" />
    </p>
  </form>
  <div id="create-account-wrap">
    <p> <a href="#"></a><p>
  </div>
</div><!--login-form-wrap-->

<style>
body {
	background-color: #9f9da7;
	font-size: 1.6rem;
	font-family: "Open Sans", sans-serif;
	color: #2b3e51;
    background-image: url("https://graphicloot.com/wp-content/uploads/2016/02/36.jpg");
	background-size : 100% 100%;
}
.back-button {
	padding: 15px 32px;
  	text-align: center;
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	font-size: 1.1rem;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
	
}
h2 {
	font-weight:300;
	text-align:center;
}
p {
	position: relative;
}
a,
a:link,
a:visited,
a:active {
	color:#3ca9e2;
	transition: all 0.2s ease;
	&:focus,
	&:hover {
		color:#329dd5;
		transition: all 0.2s ease;
	}
}
#login-form-wrap {
	background-color: #fff;
	width: 35%;
	margin: 30px auto;
	text-align: center;
	padding:20px 0 0 0;
	border-radius: 4px;
	box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);
}
#login-form {
	padding:0 60px;
}
input {
	display: block;
	box-sizing: border-box;
	width: 100%;
	outline: none;
	height: 60px;
	line-height: 60px;
	border-radius: 4px;
}
/* button {
	display: block;
	box-sizing: border-box;
	width: 100%;
	outline: none;
	height: 60px;
	line-height: 60px;
	border-radius: 4px;
} */
input[type="text"],
input[type="email"]{
	width: 100%;
	padding: 0 0 0 10px;
	margin: 0;
	color: #8a8b8e;
	border: 1px solid #c2c0ca;
	font-style: normal;
	font-size: 16px;
	appearance: none;
	position: relative;
	display: inline-block;
	background: none;
	&:focus {
		border-color:#3ca9e2;
		&:invalid  {
			color:#cc1e2b;
			border-color:#cc1e2b;
		}
	}
	&:valid ~ .validation {
		display:block;
		border-color:#0C0;
		span {
			background: #0C0;
			position:absolute;
			border-radius: 6px;
			&:first-child {
				top: 30px;
				left: 14px;
				width: 20px;
				height: 3px;
				transform: rotate(-45deg);
			}
			&:last-child {
				top: 35px;
				left: 8px;
				width: 11px;
				height: 3px;
				transform: rotate(45deg);
			}
		}
	}
}
.validation {
	display:none;
	position: absolute;
	content: " ";
	height:60px;
	width:30px;
	right:15px;
	top:0px;
}

input[type="submit"] {
	border: none;
	display:block;
	background-color: green;
	color: #fff;
	font-weight: bold;
	text-transform:uppercase;
	cursor: pointer;
	transition: all 0.2s ease;
	font-size: 18px;
	position: relative;
	display: inline-block;
	cursor: pointer;
	text-align: center;
	&:hover {
		background-color:#329dd5;
		transition: all 0.2s ease;
	}
}
#create-account-wrap {
	background-color:#eeedf1;
	color:#8a8b8e;
	font-size:14px;
	width:100%;
	padding:10px 0;
	border-radius: 0 0 4px 4px;
}

</style>