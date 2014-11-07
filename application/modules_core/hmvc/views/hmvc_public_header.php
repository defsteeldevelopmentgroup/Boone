<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=constant('BRAND')?>?</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A web based administration app for daycare providers.">
    <meta name="keywords" content="">
    <meta name="author" content="DefSteelDevelopment">
    <meta name="sitelock-site-verification" content="3391" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script>
        if (typeof $ == 'undefined') {
            document.write(unescape("%3Cscript src='<?php echo base_url()?>/vendor/js/jquery-2.1.1.min.js' type='text/javascript'%3E%3C/script%3E"));
        }
    </script>
    <!--END JQUERY TAG-->
    <!--BOOTSTRAP LESS-->

    <!--COMPILED CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>less/style.css" media="screen">
    <!--END COMPILED CSS-->

    <link rel="stylesheet/less" type="text/css" href="<?php echo base_url()?>less/style.less" rel="stylesheet" media="screen">
    <!--END LESS STYLE SHEET-->
    <!--BOOTFLAT-->
    <!--<link href="<?php echo base_url()?>bootflat/bootflat/css/bootflat.min.css" rel="stylesheet" media="screen">-->
    <!--END BOOTFLAT-->
    
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <link href="<?php echo base_url()?>bootstrap_3/css/datepicker.css" rel="stylesheet" media="screen">
    <script src="<?php echo base_url()?>bootstrap_3/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>bootstrap_3/js/bootstrap-datepicker.js"></script>
    
    <!-- Custom styles for this template -->
    
    <link href="<?php echo base_url()?>bootstrap_3/css/cover.css" rel="stylesheet">  
    
    
    <!--FAVICON LINKS-->
    <link rel="shortcut icon" href="<?=base_url()?>favicon.ico?v=2">
    
    <!--END FAVICON LINKS-->
    <script type="text/javascript">
        $(document).ready(function(){
            var supportsTouch = isTouchDevice(); 
            var supportsSVGVar = supportsSVG();
            //feature detection
            function isTouchDevice(){
                return true == ("ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch);
            }
            function supportsSVG(a,b){return !!((b='createElementNS') in (a=document) && a[b]('http://www.w3.org/2000/svg','svg').createSVGRect)}
            if (!supportsSVGVar){
                $('body').css('padding-top', '70');
                $('.navbar').append('<div style="background-color:#F0AD4E; border-color:#EEA236; color:#FFFFFF">The browser you are using is not fully compatible with <?=constant('BRAND')?>.com. Please use Chrome, Firefox, Internet Explorer 9 or higher</div>');
                $('img').each(function(){
                    var x = $(this).attr('src');
                    var png = x.slice(0, -3);
                    png = png + 'png';
                    $(this).attr('src', png);
                    var id = $(this).attr('id');
                    if (id !== 'brand-img' && id !== 'sitelock'){
                        var y = $(this).parent().height() * .50;
                        var x = $(this).parent().width() * .75;
                        $(this).height(y);
                        $(this).width(x);
                    }
                });
            }
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            var toolTipOptions = {
                    animations : true,
                    placemenet : 'auto top left right bottom',
                    trigger : 'hover manual',
                    delay : {'show' : 1000, 'hide': 400} 
                }
            $('[data-tooltip=tooltip]').tooltip(toolTipOptions); 
            $(window).load(function(){
                console.log('win.load.header');
                $(".panel").first().addClass('no-bottom-margin');
                $(".panel-body").first().css('padding');
                $('.ajax').first().addClass('no-bottom-margin');
                $('.table').first().addClass('no-bottom-margin'); 
                
            });
            $(window).unload(function(){
                console.log('unload');
                $('.container').hide('slow');
            });
            
            // Setting up a loading indicator using Ajax Events
            $( document ).ajaxStart(function() {
                
                $('<div class="fade" id="loading-indicator"><img id="loading-gif" src="<?=constant('BRAND')?>.com/images/ajax-loader.gif"  /></div>').prependTo(document.body);
                
                centerLoadingGif();
                
                console.log('ajaxStart');
            }).ajaxStop(function() {
                //remove the selected div after the timeout(5ms)
                setTimeout(function(){
                    $('#loading-indicator').remove(); 
                 }, 400);
                $('[data-tooltip=tooltip]').tooltip(toolTipOptions); 
                
                console.log('ajaxStop');
            });
            function centerLoadingGif(){
                jQuery.fn.center = function ()
                {
                    this.css("position","fixed");
                    this.css("top", ($(window).height() / 2) - (this.outerHeight() / 2));
                    this.css("left", ($(window).width() / 2) - (this.outerWidth() / 2));
                    return this;
                }
                jQuery.fn.fullScreen = function(){
                    this.css("position","fixed");
                    this.css("top", ($(window).height() / 2) - (this.outerHeight() / 2));
                    this.css("left", ($(window).width() / 2) - (this.outerWidth() / 2));
                    return this;
                }
               
                $('#loading-indicator').center();
                $('#loading-gif').center();
                $(window).resize(function(){
                   $('#loading-indicator').center();
                   $('#loading-gif').center();
                });
            }
            
            $(document).on('click', 'a.contactus', function(e){
                //e.preventDefault();
            
                var uri = $(this).data('uri');
            
                console.log('name uri: '+uri);
                $.post(uri,
                  function(data,status){
                    console.log("Data: "+ data + "\nStatus: " + status);
                    var lastElem = $('body:last-child');
                    $(lastElem).append('<div id="comment"></div>');
                    $('#comment').html(data);
                  }
                );//post
            });//click .contactus
        });
    </script>
  </head>
  <body>
      <?php if($this->ion_auth->logged_in()):?>
            <?php 
                //get timezone from session
                if($this->session->userdata('user_time_zone')){
                    $tz = $this->session->userdata('user_time_zone');
                   //set the timezone for php
                    date_default_timezone_set($tz);
                }
            ?> 
          <?php endif; ?>
