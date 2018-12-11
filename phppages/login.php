<?php
require 'process_login.php';

 public function doLogin($uname,$umail,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT user_id, fullname,email,phone_number, password FROM user WHERE  user_email=:umail ");
			$stmt->execute(array(':email'=>$email));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(password_verify($upass, $userRow['pass']))
				{
					$_SESSION['user_session'] = $userRow['user_id'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	?>

<div class="page no-navbar login-form">
	<div class="page-content">
		
		<div class="block">
		
		<div class="title-page">
			<div class="title-page-with-link">
				<h1>Login to Farm Assist</h1>
			</div>
		</div>
			
		<div class="list no-hairlines">
			<ul>
				<li class="item-content item-input">
					<div class="item-inner">
						<div class="item-input-wrap">
							<input placeholder="Email Address" class="" type="email">
							<span class="input-clear-button"></span>
						</div>
					</div>
				</li>
				<li class="item-content item-input">
					<div class="item-inner">
						<div class="item-input-wrap">
							<input placeholder="Password" class="" type="password">
							<span class="input-clear-button"></span>
						</div>
					</div>
				</li>
				<li class="item-content item-input">
					<div class="item-inner forgot-password">
						<a href="#">Forgot Password?</a>
					</div>
				</li>
			</ul>
		</div>
		
		<a href="/" class="col button button-fill color-black">Login in</a>
		
		<p class="form-login-annonce">
			<span>NEW!</span> Quick login with FaceID
			<img src="./img/faceid.png" alt="faceid">
		</p>
		
		<p class="form-login-footer">
			Don't have an account? <a href="/signup/">Sign up</a>
		</p>
		
		</div>
	</div>
</div>
