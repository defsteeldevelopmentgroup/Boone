<?php echo Modules::run('hmvc/header');?>
<?php echo Modules::run('public/nav_bar/index') ?> 

<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<legend><?php echo lang('login_heading');?></legend>
			<div class="panel-info">
				<small><?php echo lang('login_subheading');?></small>
			</div>
		</div>
			<!--LOGIN FORM-->
			<?php echo form_open("auth/login", 'class="form-inline"');?>
			<fieldset>
		<div class="panel-body">
			<div id="infoMessage"><?php echo $message;?></div>
			<div class="form-group">
    			<label for="identity" class="control-label"><?php // echo lang('login_identity_label', 'identity', array('class' => 'control-label'));?>Email Address:</label>
    			<div class="input-group">
    				<?php echo form_input($identity);?>
    			</div>
  			</div>

  			<div class="form-group">
    			<label for="password" class="control-label"><?php // echo lang('login_password_label', 'password', array('class' => 'control-label'));?>Password:</label>
    			<div class="input-group">
					<?php echo form_input($password);?> 
				</div>
			</div>
			<div class="form-group">
			<div class="checkbox">
				<div class="input-group">
					<label>
						<?php //echo lang('login_remember_label', 'remember', array('class' => 'control-label'));?>
    					<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>  Remember Me
    				</label>
    			</div>
    		</div>
    		</div>
    		<input type="hidden" name="user_time_zone" value="x" /> 
		</div><!--END PANEL-BODY-->
		<div class="panel-footer">
  			<?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-primary"');?>  <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
  		</div><!--END PANEL FOOTER-->
  		</fieldset>
		<?php echo form_close();?>
			<!--END FORM-->
	</div><!--END PANEL-->
</div><!--END CONTAINER-->

<footer>
<div class="container-narrow" style="text-align: center; color:white;">
	
    <p><sub>Page rendered in <strong>{elapsed_time}</strong> seconds</sub></p>
    
</div>
</footer>
<script src="//cdnjs.cloudflare.com/ajax/libs/jstimezonedetect/1.0.4/jstz.min.js"></script>
<script type="text/javascript">
    // Determines the time zone of the browser client
    var tz = jstz.determine();
    // Returns the name of the time zone eg "Europe/Berlin"
    var tzName = tz.name();
    //log the tz value
    console.log('timezone:' + tzName);
    //set the var tz as the value of the hidden user_time_zone field
    document.getElementsByName('user_time_zone')[0].value = tzName;
</script>
</body>