<!DOCTYPE html>
<html>


<head>
	<!-- stylesheets separated for readability -->
	<link rel="stylesheet" type="text/css" href="styles/blogstyle.css">
	<link rel="stylesheet" type="text/css" href="styles/popuplogin.css">
	<link rel="stylesheet" type="text/css" href="styles/popupSignup.css">
	
	<!--rescale for small windows and mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="author" content="Liam Taylor">
	<meta name="keywords" content="blog">
	<meta name="description" content="A blog layout template">
	<title>My First Blog</title>
</head>


<body>
	<!--Blog header links back to blog main page-->
	<header>
		<a href="blog.html"><h2>BLOG NAME</h2></a>
	</header>
	
	<!--currently handles the login/signup button-->
	<nav>
		<button class="open-button" onclick="openForm('loginForm')">Login/Signup</button>
		
		<!-- login form that logs in users after checking credentials with the login infor database -->
		<div class="popup-login" id="loginForm">
			<form action="login_page.php" class="login-form-container" method="post">
				<h1>Login</h1>
				
				<label for="email"><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" required>
				
				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>
				
				<button type="submit" class="btn">Login</button>
				<button type="button" class="btn cancel" onclick="closeForm('loginForm')">Close</button>
				<button type="button" class="btn signup" onclick="openForm('signupForm')">Signup</button>
			</form>
		</div>
		
		<!-- signup form that adds new users to the login info database -->
		<div class="popup-signup" id="signupForm">
			<span onclick="closeForm('signupForm')" class="close" title="Close Signup Form">&times;</span>
			<form action="/signup_page.php" class="signup-form-container" method="post">
				<h1>Sign Up</h1>
				<p>Please fill in this form to create an account.</p>
				<hr>
				<label for="email"><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" required>
				
				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>
				
				<label for="psw_repeat"><b>Repeat Password</b></label>
				<input type="password" placeholder="password" name="psw_repeat" required>
				
				<label>
					<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">Remember me
				</label>
				
				<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
				
				<div class="clearfix">
					<button type="button" class="btn cancel" onclick="closeForm('signupForm')">Cancel</button>
					<button type="submit" class="btn signup">Sign Up</button>
				</div>
			</form>
		</div>
		
		<!-- general use open/close form functions -->
		<script>
			function openForm(formId) {
				document.getElementById(formId).style.display = "block";
			}
			
			function closeForm(formId) {
				document.getElementById(formId).style.display = "none";
			}
		</script>
		
		
	</nav>
	
	
	<div class="row">
	
	
		<div class="leftcolumn">
			<article>
				<!-- TD add link to blog post and post image -->
				<a href="blogPost.html"><h2>BLOG POST TITLE</h2></a>
				<h5>Title description, June 5, 2020</h5>
				<div class="fakeimg" style="height:200px;">Image</div>
				<p>Blog post description</p>
			</article>
			<article>
				<!-- TD add link to blog post and post image -->
				<a href=""><h2>BLOG POST TITLE</h2></a>
				<h5>Title description, June 12, 2020</h5>
				<div class="fakeimg" style="height:200px;">Image</div>
				<p>Blog post description<p>
			</article>
		</div>
		
		
		<div class="rightcolumn">
			<article>
				<h2>About Me</h2>
				<div class="fakeimg" style<"height:100px;">Image</div>
				<p>Some text about me and some more text about me and even more...</p>
			</article>
			<article>
				<h3>Popular Post</h3>
				<div class="fakeimg">Image</div><br>
				<div class="fakeimg">Image</div><br>
				<div class="fakeimg">Image</div>
			</article>
			<div class="card">
				<h3>Follow Me</h3>
				<p>Some text..</p>
			</div>
		</div>
		
		
	</div>
	
	
	<footer>
		<h2>Footer</h2>
	</footer>
	
	
</body>


</html>

