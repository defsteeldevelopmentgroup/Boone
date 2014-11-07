<?$this -> load -> helper('language');?>
<?$this->lang->load('auth');?>
<?$this->lang->load('ion_auth');?>
<html>
<body>
	<h1><?php echo sprintf(lang('email_activate_heading'), $identity);?></h1>
	<p><?php echo sprintf(lang('email_activate_subheading'), anchor('auth/activate/'. $id .'/'. $activation, lang('email_activate_link')));?></p>
</body>
</html>