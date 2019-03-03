<section id="gallery" style="background-color: #900C3E">
<div class="container-fluid full-width">
    <h1 style="color:white; text-align: center;">Gallery</h1>
  <div class="d-flex flex-row flex-wrap justify-content-center">  
  <?php foreach ($images as $image) {?>
        <div class="" style="margin: 1em;">
        <img class="img-fluid img-thumbnail img-sz zoom-img" src="<?php echo base_url().'asset/uploads/gallery/'.$image;?>">
        </div>
  <?php }; ?>
  </div>
</div>
</section>