<html>
  <head>
    <title>CodeIgniter Blog</title>
    <link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
    <?php echo link_tag('assets/css/style.css'); ?>
    <script src="http://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">CIBlog</a>
      </div>
      <div id="navbar">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li><a href="<?php echo base_url(); ?>about">About</a></li>
          <li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url(); ?>posts/create">Create post</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
