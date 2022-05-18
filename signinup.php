<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=0.1" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <link
    rel="stylesheet"
    href="https:use//fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1H7uH2+nqUivzIebhndOJK28anvf"
    crossorigin="anonymous"
    />

    <link rel="stylesheet" href="signinup.css" />
    <title>Slider Sign In/Sign Up Form</title>
  </head>
  <body>

    <div class="container" id="container">
    	<div class="form-container sign-up-container">
    		<form action="form.php" method="POST">
    			<h1>Buat Akun</h1>

    			<input type="text" name="Name" placeholder="Name" required/>
    			<input type="email" name="Email" placeholder="Email" required />
    			<input type="password" name="Password" placeholder="Password" required/>
    			<button>Sign Up</button>
    		</form>
    	</div>
    	<div class="form-container sign-in-container">
    		<form action="form2.php" method="post">
    			<h1>Sign in</h1>

    			<input type="email" name="Email" placeholder="Email" required/>
    			<input type="password" name="Password" placeholder="Password" required/>

    			<button>Sign In</button>
    		</form>
    	</div>
    	<div class="overlay-container">
    		<div class="overlay">
    			<div class="overlay-panel overlay-left">
    				<h1>Selamat Datang Kembali!</h1>
    				<p>Untuk tetap terhubung dengan kami, mohon login dengan info pribadi Anda</p>
    				<button class="ghost" id="signIn">Sign In</button>
    			</div>
    			<div class="overlay-panel overlay-right">
    				<h1>Halo!</h1>
    				<p>Masukkan detail data pribadi Anda dan mulailah perjalanan dengan kami</p>
    				<button class="ghost" id="signUp">Sign Up</button>
    			</div>
    		</div>
    	</div>
    </div>

    <script src="main.js"></script>
  </body>
</html>
