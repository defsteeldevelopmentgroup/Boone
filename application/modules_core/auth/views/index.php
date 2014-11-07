<?php echo Modules::run('hmvc/header'); ?> 
<?php echo Modules::run('nav_bar'); ?>
<div class="container"><!--container div-->
<div class="panel panel-info"><!--PANEL OPEN-->
<div class="panel-heading"><?php echo lang('index_heading');?></div><!--PANEL HEADING-->
<div class="panel-body"><!--PANEL BODY OPEN-->
<p><?php echo lang('index_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>


<div class="table-responsive">
<table class="table table-striped table-condensed">
	<tr>
		<th><?php echo lang('index_fname_th');?></th>
		<th><?php echo lang('index_lname_th');?></th>
		<th><?php echo lang('index_email_th');?></th>
		<th><?php echo lang('index_groups_th');?></th>
		<th><?php echo lang('index_status_th');?></th>
		<th><?php echo lang('index_action_th');?></th>
	</tr>
	<?php foreach ($users as $user):?>
		<tr>
			<td><?php echo $user->first_name;?></td>
			<td><?php echo $user->last_name;?></td>
			<td><?php echo $user->email;?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo anchor("auth/edit_group/".$group->id, $group->name) ;?><br />
                <?php endforeach?>
			</td>
			<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
			<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
		</tr>
	<?php endforeach;?>
</table>
</div><!--END OF TABLE RESPONSIVE-->
</div><!--END OF PANEL BODY-->
<div class="panel-footer"><!--PANEL FOOTER-->
<p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>
</div><!--END OF PANEL FOOTER-->
</div><!--END OF PANEL-->


</div><!--END OF CONTAINER-->
<?php echo Modules::run('hmvc/hmvc/footer'); ?>