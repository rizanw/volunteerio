<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Volunteer of ITS IO</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/fontawesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/css/sb-admin.css"/>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand center-logo" href="<?php echo $this->uri->segment(1); ?>"><img class="logo-v" src="<?php echo base_url().'asset/img/logo.png' ?>"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="About">
          <a class="nav-link" href="<?php base_url().'volunteer_dashboard' ?>">
            <i class="fas fa-users"></i><span class="nav-link-text"> Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php base_url() ?>">
            <i class="fas fa-comments"></i><span class="nav-link-text"> Post</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link" href="<?php echo base_url().'volunteer_controller' ?>">
            <i class="fas fa-list"></i><span class="nav-link-text"> Volunteers list</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link" href="<?php echo base_url().'gallery_controller' ?>">
            <i class="fas fa-images"></i><span class="nav-link-text"> Our Gallery</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link" href="#collapseMulti">
            <i class="fas fa-sitemap"></i><span class="nav-link-text"> Settings</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid full-width">