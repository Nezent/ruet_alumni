<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Sign Up</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="admin/assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="admin/assets/css/portal.css">

</head> 

<body class="app app-signup p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="admin/assets/images/app-logo.svg" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-4">Sign up to RUET Alumni</h2>					
	
					<div class="auth-form-container text-start mx-auto">
						<form class="auth-form auth-signup-form" method="POST" enctype="multipart/form-data" action="upload.php">         
							<div class="email mb-3">
								<label class="sr-only" for="email">Your Name</label>
								<input id="signup-name" name="name" type="text" class="form-control signup-name" placeholder="Full name" required="required">
							</div>
							
							<div class="email mb-3">
								<label class="sr-only" for="email">Your Email</label>
								<input id="signup-email" name="email" type="email" class="form-control signup-email" placeholder="Email" required="required">
							</div>
							<div class="password mb-3">
								<label class="sr-only" for="password">Password</label>
								<input id="signup-password" name="password" type="password" class="form-control signup-password" placeholder="Create a password" required="required">
							</div>
							<div class="email mb-3">
								<div class="row">
									<div class="col-md-6">
									  <div class="form-group row">
										<label class="sr-only">Gender</label>
										<div class="col-md-12">
											<select class="form-select" aria-label="Default select example" name="gender" required>
												<option selected>Select Gender</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>	
											  </select>
										</div>
									  </div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="sr-only">Department</label>
											<div class="col-md-12">
												<select class="form-select" aria-label="Default select example" name="department" required>
													<option selected>Choose Dept</option>
													<option value="CSE">CSE</option>
													<option value="ETE">ETE</option>
													<option value="ECE">ECE</option>
												  </select>
											</div>
										  </div>
									</div>
								  </div>
							</div>
							<div class="email mb-3">
								<label class="sr-only" for="image">Image</label>
								<input id="signup-name" name="image" type="file" class="form-control signup-name"required="required">
							</div>
							<div class="row">
								<div class="col-md-6">
								  <div class="form-group row">
									<label class="sr-only">Series</label>
									<div class="col-md-12">
										<input id="signup-name" name="series" type="text" class="form-control signup-name" placeholder="Series" required="required">
									</div>
								  </div>
								</div>
								<div class="col-md-6">
									<div class="form-group row">
										<label class="sr-only">Company Name</label>
										<div class="col-md-12">
											<input id="signup-name" name="company_name" type="text" class="form-control signup-name" placeholder="Connected To" required="required">
										</div>
									  </div>
								</div>
							  </div>
							
							<div class="extra mb-3">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="RememberPassword" required>
									<label class="form-check-label" for="RememberPassword">
									I agree to RUET's <a href="#" class="app-link">Terms of Service</a> and <a href="#" class="app-link">Privacy Policy</a>.
									</label>
								</div>
							</div><!--//extra-->
							
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto" name="submit">Sign Up</button>
							</div>
						</form><!--//auth-form-->
						
						<div class="auth-option text-center pt-5">Already have an account? <a class="text-link" href="login.php" >Log in</a></div>
					</div><!--//auth-form-container-->	
					
					
				    
			    </div><!--//auth-body-->
		    
			    <footer class="app-auth-footer">
				    <div class="container text-center py-3">
				         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			        <small class="copyright">Designed By Adiba</small>
				       
				    </div>
			    </footer><!--//app-auth-footer-->	
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">			    
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				    
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->


</body>
</html> 

