<?php $this->load->view('includes/header'); ?>




	<!-- Button trigger modal -->

	<!-- Modal -->
	<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
    		<form method="post" action="<?php echo site_url('CrudController/create'); ?>">
			  <div class="form-group">
			    <label for="lastName">Last Name</label>
			    <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="emailHelp" placeholder="Enter Last Name">
			  </div>

			  <div class="form-group">
			    <label for="firstName">First Name</label>
			    <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="emailHelp" placeholder="Enter First Name">
			  </div>

			  <div class="form-group">
			    <label for="birthdate">Birtdate</label>
			    <input type="date" class="form-control" id="birthdate" name="birthdate" aria-describedby="emailHelp" placeholder="Enter Birthdate">
			  </div>

			  <div class="form-group">
			    <label for="contactNo">Contact No</label>
			    <input type="text" class="form-control" id="contactNo" name="contactNo" aria-describedby="emailHelp" placeholder="Enter Contact No">
			  </div>

			   <div class="form-group">
			    <label for="bio">Bio</label>
			    <input type="text" class="form-control" id="bio" name="bio" aria-describedby="emailHelp" placeholder="Enter Bio">
			  </div>

			  <button type="submit" class="btn btn-primary">Save</button>
			</form>
	      </div>
	    </div>
	  </div>
	</div>






	<div class="container">
    	<h1 class="m-5">Crud Edit</h1>
    	<form method="post" action="<?php echo site_url('CrudController/update'); ?>/<?php echo $row->id ?>">
		  <div class="form-group">
		    <label for="lastName">Last Name</label>
		    <input type="text" class="form-control" id="lastName" value="<?php echo $row->lastname ?>" name="lastName" aria-describedby="emailHelp" placeholder="Enter Last Name">
		  </div>

		  <div class="form-group">
		    <label for="firstName">First Name</label>
		    <input type="text" class="form-control" id="firstName" value="<?php echo $row->firstname ?>" name="firstName" aria-describedby="emailHelp" placeholder="Enter First Name">
		  </div>

		  <div class="form-group">
		    <label for="birthdate">Birtdate</label>
		    <input type="date" class="form-control" id="birthdate" value="<?php echo $row->birthdate ?>" name="birthdate" aria-describedby="emailHelp" placeholder="Enter Birthdate">
		  </div>

		  <div class="form-group">
		    <label for="contactNo">Contact No</label>
		    <input type="text" class="form-control" id="contactNo" value="<?php echo $row->contactNo ?>" name="contactNo" aria-describedby="emailHelp" placeholder="Enter Contact No">
		  </div>

		   <div class="form-group">
		    <label for="bio">Bio</label>
		    <input type="text" class="form-control" id="bio" value="<?php echo $row->bio ?>" name="bio" aria-describedby="emailHelp" placeholder="Enter Bio">
		  </div>

		  <button type="submit" class="btn btn-primary">Save</button>
		  <a href="<?php echo site_url('CrudController') ?>"><button class="btn btn-danger">Cancel</button></a>
		</form>
	</div>

<?php $this->load->view('includes/footer'); ?>