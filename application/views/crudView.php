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
    	<h1 class="m-5">Crud View</h1>
		<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalLong">
		 Add
		</button>
	    <table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Last Name</th>
		      <th scope="col">First Name</th>
		      <th scope="col">Birthdate</th>
		      <th scope="col">ContactNo</th>
		      <th scope="col">Bio</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php foreach ($result as $row): ?>
			    <tr>
			      <th scope="row"><?= $row->id; ?></th>
			      <td><?= $row->lastname; ?></td>
			      <td><?= $row->firstname; ?></td>
			      <td><?= $row->birthdate; ?></td>
			      <td><?= $row->contactNo; ?></td>
			      <td><?= $row->bio ?></td>
			      <td>	
			      	<a href="<?php echo site_url('CrudController/edit') ?>/<?php echo $row->id ?>">Edit</a>
			      	|
			      	<a href="<?php echo site_url('CrudController/delete') ?>/<?php echo $row->id ?>">Delete</a>
			      </td>
			    </tr>
		  	<?php endforeach ?>
		  </tbody>
		</table>

	</div>


<?php $this->load->view('includes/footer'); ?>