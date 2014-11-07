<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BRAND</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <script src="//code.jquery.com/jquery.js"></script>
    <link href="<?php echo base_url()?>bootstrap_3/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url()?>bootstrap_3/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
   <link href="<?php echo base_url()?>bootstrap_3/css/datepicker.css" rel="stylesheet" media="screen">
   
   <script src="<?php echo base_url()?>bootstrap_3/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url()?>bootstrap_3/js/bootstrap-datepicker.js"></script>
   
   <!--<style>
      body {
        padding-top: 70px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
   </style>-->
   
  </head>
  <body>
  	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>index.php/"><?=$this->config->item('home_icon');?> BRAND</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
          	<li class="" title="Home"><?php echo anchor('public/market/', ''.$this->config->item('home_icon').' Home');?></li>
            <li class="" title="About"><?php echo anchor('public/market/about', ''.$this->config->item('about_icon').' About');?></li>
          	<li class="" title="Contact Us"><?php echo anchor('public/market/contact', ''.$this->config->item('envelope_icon').' Contact Us');?></li>
          	<li class="" title="Register"><?php echo anchor('public/cart', ''.$this->config->item('pencil_icon').' Register');?></li>
          </ul>          
        </div><!--/.navbar-collapse -->
      </div><!-- END CONTAINER -->
</div><!--END NAVBAR-->

	<div class="container no-padding">
		<div class="panel panel-default">
			<div class="panel-heading">
				<legend><?php echo lang('forgot_password_heading');?></legend>
				<div class="panel-info">
					<small><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></small>
				</div>
			</div>
			<div class="panel-body">
				<div id="infoMessage"><?php echo $message;?></div>
				<?php echo form_open("auth/forgot_password", 'class="form-inline"');?>
				<fieldset>
				<div class="form-group">
      				<label for="email" class="control-label"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label> <br />
      				<div class="input-group">
      					<?php echo form_input($email);?>
      				</div>	
      			</div>
			</div><!--END PANEL BODY-->
			<div class="panel-footer">
				<?php echo form_submit('submit', lang('forgot_password_submit_btn'), 'class="btn btn-primary"');?>
			</div>
			</fieldset>
			<?php echo form_close();?>
		</div><!--END PANEL-->
	</div><!--END CONTAINER-->

<footer>
<div class="container-narrow" style="text-align: center;">
	<p><sub><?php echo anchor('public/market', 'HOME'); ?> | <?php echo anchor('public/market/about', 'ABOUT'); ?> | <?php echo anchor('public/market/contact', 'CONTACT'); ?> | <?php echo anchor('public/cart', 'REGISTER'); ?> | <?php echo anchor('public/support', 'SUPPORT'); ?></sub></p>
    <p><sub>&COPY; BRAND &TRADE; All Rights reserved</sub></p>
    <p><sub>Page rendered in <strong>{elapsed_time}</strong> seconds</sub></p>
    
</div>
</footer>
</body>