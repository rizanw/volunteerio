
	<div class="container">
		<a data-toggle="modal" data-target="#upload_g"><button class="btn btn-primary"><i class="fas fa-plus"></i> Add</button></a>
	</div>
	<div class="container-fluid full-width" style="background: #212529; padding: 46px 0px 96px">
		<div class="d-flex flex-row flex-wrap justify-content-center">	
<?php foreach ($images as $image) {?>
			<div class="" style="margin: 2em;">
			<img class="img-fluid zoom-img img-thumbnail" src="<?php echo base_url().'asset/uploads/'.$image;?>">
			</div>
<?php }; ?>
		</div>
	</div>

<!-- Modal -->
<div class="modal fade" id="upload_g" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Picture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<?php echo form_open_multipart('gallery_volunteer/do_upload');?>
      <div class="modal-body">
		<input type="file" name="userfile" size="20" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" value="upload" class="btn btn-primary">
      </div>
  	</form>
    </div>
  </div>
</div>