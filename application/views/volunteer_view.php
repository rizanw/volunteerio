	<div class="container-fluid full-width">
		<a data-toggle="modal" data-target="#add_vo"><button class="btn btn-primary"><i class="fas fa-plus"></i> Add</button></a>
		<div class="table-responsive">
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">Department</th>
			      <th scope="col">Season</th>
			      <th scope="col" class="tools-data"></th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  	if($fetch_all->num_rows()>0){ $i = 1;
			  		foreach ($fetch_all->result() as $row) {
			  	?>
			  		<tr>
			  			<th scope="row"><?php echo $i++; ?></th>
			  			<td><?php echo $row->volunteer_nrp; ?></td>
			  			<td><?php echo $row->volunteer_name; ?></td>
			  			<td><?php echo $row->volunteer_devision; ?></td>
			  			<td><?php echo $row->volunteer_season; ?></td>
			      	  	<td class="tools-data">
							<a 
							    href="javascript:;"
							    data-nrp="<?php echo $row->volunteer_nrp ?>"
							    data-name="<?php echo $row->volunteer_name ?>"
							    data-department="<?php echo $row->volunteer_department ?>"
							    data-season="<?php echo $row->volunteer_season ?>"
							    data-toggle="modal" data-target="#mod_v">
							    <button class="btn btn-info"><i class="far fa-edit"></i></button>
							</a>
							<a 
							    href="javascript:;"
							    data-nrp="<?php echo $row->volunteer_nrp ?>"
							    data-name="<?php echo $row->volunteer_name ?>"
							    data-department="<?php echo $row->volunteer_department ?>"
							    data-season="<?php echo $row->volunteer_season ?>"
							    data-toggle="modal" data-target="#mod_v">
							    <button class="btn btn-warning"><i class="fas fa-search"></i></button>
							</a>
							<form style="display: inline-block;" action="<?php echo base_url().'volunteer_controller/delete';?>" method="post" >
							<input type="hidden" name="del_id" value="<?php echo $row->volunteer_nrp;?>">
			      	  		<button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
			      	  		</form>
			      	  	</td>
			  		</tr>
			  	<?php
			  		}
			  	}else{?>
			  		<tr>
			  			<td colspan="6" style="text-align: center; background: grey; opacity: 20%">
			  				No Volunteer!
			  			</td>
			  		</tr>
			  	<?php
			  	}
			  	?>		    
			  </tbody>
			</table>
		</div>
	</div>

<!-- Modal Update -->
<div class="modal fade" id="mod_v" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modify Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url().'volunteer_controller/update_data';?>" method="post">
	      <div class="modal-body">
      		  <div class="form-group">
	      	    <label>NRP</label>
			    <input type="text" name="nrp" id="nrp" class="form-control">
	      	    <label>Name</label>
			    <input type="text" name="name" id="name" class="form-control">
	      	    <label>Department</label>
			    <input type="text" name="department" id="department" class="form-control">
	      	    <label>Season</label>
			    <input type="text" name="season" id="season" class="form-control">
			  </div>
	      </div>
	      <div class="modal-footer">
	      	<input type="hidden" name="up_id" id="id">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" name="update" class="btn btn-primary">Save changes</button>
	      </div>
      </form>
    </div>
  </div>
</div>
<!--/Modal Update-->
<!-- Modal Add -->
<div class="modal fade" id="add_vo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<?php echo form_open_multipart('volunteer_controller/validate_volunteer');?>
	      <div class="modal-body container">
      		  <div class="row">
      		  	<div class="col-xs-12">
      		  	<div class="form-group" ><label>Image</label>
	      		  	<input type="file" name="v_photo" id="v_photo" class="btn btn-default btn-file" />
		      	    <label>Name</label>
				    <input type="text" name="name" id="name"  class="form-control">
		      	    <label>Season</label>
				    <input type="text" name="season" id="season"  class="form-control">
      		  	</div>
      		  	</div>
      		  	<div class="col-xs-12" >
      		  	<div class="form-group">
		      	    <label>NRP</label>
				    <input type="text" name="nrp" id="nrp" class="form-control">
		      	    <label>Faculty</label>
			    	<input type="text" name="faculty" id="department" class="form-control">
		      	    <label>Department</label>
			    	<input type="text" name="department" id="department" class="form-control">
			    </div>
				</div>
			  </div>
      		  <div class="form-group">
			  </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" name="add" value="add_v" role="button" class="btn btn-primary">Add</button>
	      </div>
      </form>
    </div>
  </div>
</div>
<!--/Modal Add-->

<script>
    $(document).ready(function() {
        $('#mod_v').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) //show modal
            var modal = $(this)

            modal.find('#id').attr("value",div.data('id'));
            modal.find('#nrp').attr("value",div.data('nrp'));
            modal.find('#name').attr("value",div.data('name'));
            modal.find('#department').attr("value",div.data('department'));
            modal.find('#season').attr("value",div.data('season'));
        });
    });
</script>

