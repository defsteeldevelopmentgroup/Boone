<?php echo Modules::run('hmvc/header');?>
<?php echo Modules::run('public/nav_bar/index') ?>

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
	
    <p><sub>Page rendered in <strong>{elapsed_time}</strong> seconds</sub></p>
    
</div>
</footer>
</body>