<?php echo Modules::run('hmvc/header');?>
<?php echo Modules::run('public/nav_bar/index') ?>

	<div class="container no-padding">
		<div class="panel panel-default">
			<div class="panel-heading">
				<legend><?php echo lang('change_password_heading');?></legend>
				<div class="panel-info">
					<div class="" id="infoMessage">
						<small><?php echo $message;?></small>
					</div>					
				</div>
			</div>
			<?php echo form_open("auth/change_password", 'class="form-horizontal"');?>
				<fieldset>
			<div class="panel-body">			
					<div class="form-group">
      					<label for="old_password" class="control-label"><?php echo lang('change_password_old_password_label', 'old_password');?></label>
      					<div class="input-group">
            				<?php echo form_input($old_password);?>
      					</div>
					</div>
					<div class="form-group">
						<label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label>
      					<div class="input-group">
            				<?php echo form_input($new_password);?>
      					</div>
					</div>
					<div class="form-group">
      					<?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
      					<div class="input-group">
            				<?php echo form_input($new_password_confirm);?>
      					</div>
					</div>
					<div class="hidden">
						<?php echo form_input($user_id);?>
      				</div>	
			</div><!--END PANEL BODY-->
			<div class="panel-footer">
      				<?php echo form_submit('submit', lang('change_password_submit_btn'), 'class="btn btn-primary"');?>
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