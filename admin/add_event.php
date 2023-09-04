<?php include 'header.php'; ?>
    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">Events</h1>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">Add Event</h3>
		                <div class="section-intro">Event section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
	                </div>
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <form class="settings-form" method="POST">
								    
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">Catagory</label>
									    <select class="form-select" aria-label="Default select example" name="catagory" required>
													<option selected>Choose Catagory</option>
													<option value="Programming">Programming</option>
													<option value="Electrical">Electrical</option>
													<option value="Technical">Technical</option>
												  </select>
									</div>
								    <div class="mb-3">
									    <label for="setting-input-3" class="form-label">Title</label>
									    <input type="text" name="title" class="form-control" id="setting-input-3" placeholder="Enter Title Here..">
									</div>
									<div class="mb-3">
									    <label for="setting-input-3" class="form-label">Date</label>
									    <input type="text" name="date" class="form-control date" id="setting-input-3"  data-date-format="mm/dd/yyyy" data-provide="datepicker" placeholder="Starting Date">
									</div>
									<div class="mb-3">
									    <label for="setting-input-3" class="form-label">Duration</label>
									    <input type="text" name="duration" class="form-control" id="setting-input-3" placeholder="Duration in Hours">
									</div>
									<div class="mb-3">
									    <label for="setting-input-3" class="form-label">Price</label>
									    <input type="text" name="price" class="form-control" id="setting-input-3" placeholder="Price">
									</div>
									<button type="submit" name="submit" class="btn app-btn-primary" >Add Event</button>
							    </form>
						    </div><!--//app-card-body-->
						    <?php
								 
								if(isset($_POST['submit'])){
									include_once 'db_connect.php';

									$catagory = $_POST['catagory'];
									$title = $_POST['title'];
									$date = $_POST['date'];
									$duration = $_POST['duration'];
									$price = $_POST['price'];

									$sql = "INSERT INTO events (catagory,title,date,duration,price) VALUES ('$catagory','$title','$date','$duration','$price')";

									if(mysqli_query($conn,$sql)){
										echo "Event Added Succesfully";
										
									}
									else{
										echo "Error!";
									}
								}
							?>
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->
                <hr class="my-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">Running</h3>
		                <div class="section-intro">Events section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
	                </div>
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <div class="mb-2"><strong>Current Event:</strong> RAPL Contest</div>
							    <div class="mb-2"><strong>Status:</strong> <span class="badge bg-success">Active</span></div>
							    <div class="mb-2"><strong>Expires:</strong> 2030-09-24</div>
							    <div class="mb-4"><strong>Invoices:</strong> <a href="#">view</a></div>
							    <div class="row justify-content-between">
								    <div class="col-auto">
								        <a class="btn app-btn-primary" href="#">Upgrade Plan</a>
								    </div>
								    <div class="col-auto">
								        <a class="btn app-btn-secondary" href="#">Cancel Plan</a>
								    </div>
							    </div>
								    
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->
                
                </div><!--//row-->
			    <hr class="my-4">
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
		
	    
		<?php include 'footer.php'; ?>