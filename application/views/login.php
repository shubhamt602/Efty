<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= base_url();?>">
    <title><?= $title;?>Materialize Sample Integration</title>
    <script src="assets/jquery/jquery-3.1.1.min.js"></script>
 <link rel="stylesheet" href="assets/materialize/css/materialize.min.css"> <link rel="stylesheet" href="assets/iconfont/material-icons.css">   <script src="assets/materialize/js/materialize.min.js"></script>
</head>
<body class="white">
<div class="container">
        <h1>Hi there  , </h1>
    <h2>This is MaterializeCss integrated Codeigniter with Google's Materialize Icons and Latest Jquery Bro . . .For you. . . So get started</h2>

    
    <!-- Modal Trigger -->
<br>  <a class="waves-effect waves-light btn" href="#modal1">Modal</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
  
  
  
  
  <i class="large material-icons">grade</i>
   <i class="large material-icons">power_settings_new</i> 
  <i class="large material-icons">thumb_up</i>
  
  
    
    
    
</div>
  
  <script> $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });</script>
</body>
   
</html>