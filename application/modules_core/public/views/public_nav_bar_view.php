<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of public_nav_bar_view
 *
 * @author DEF
 */
?>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
          <a class="navbar-brand"  href="<?=base_url()?>"><?=constant('BRAND')?></a>
        </div>
        
        <div id="nav" class="navbar-collapse collapse">
           <ul class="nav navbar-nav">
           	<li class="active" id="home-nav-button"><a class="" href="#home"><?= $this->config->item('home_icon')?> Home</a></li>
           	
            <input type=submit class="btn btn-sm btn-primary btn-navbar navbar-right" title="Log in to your account" value="Sign In">
            </form></li> 
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
<?php //end of file public_nav_bar_view?>