<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top tour-step tour-step-one">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=<?php echo constant('BRAND');?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
        <li class="<?echo$active['0']?>" data-tooltip="tooltip" title="Add a link"><a href="<?php echo base_url();?>">Link</a></li>
        

        <?php if($this->ion_auth->is_admin()):?>
        <li class="" data-tooltip="tooltip" title="ADMIN"><?php echo anchor('auth',$this->config->item('admin_icon').' ADMIN')?></li>
            <?php endif; ?>
        <li><form class="navbar-form navbar-right" action="<?php echo base_url();?>auth/logout" method="post">
          	<input type=submit class="btn btn-sm btn-primary btn-navbar" data-tooltip="tooltip" title="Sign out of your account" value="Sign Out">
        </form></li>  
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <!--end of bar.php-->
    