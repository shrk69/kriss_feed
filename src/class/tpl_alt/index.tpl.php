<!doctype html>
<!--[if lte IE 6]> <html class="no-js ie6 ie67 ie678" lang="fr"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 ie67 ie678" lang="fr"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 ie678" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<head>
    <?php altFeedPage::includesTpl(); ?>
</head>
<body>
	  <a id="haut"></a>
    <div id="index" class="container-fluid full-height" data-view="<?php echo $view; ?>" data-list-feeds="<?php echo $listFeeds; ?>" data-filter="<?php echo $filter; ?>" data-order="<?php echo $order; ?>" data-by-page="<?php echo $byPage; ?>" data-autoread-item="<?php echo $autoreadItem; ?>" data-autoread-page="<?php echo $autoreadPage; ?>" data-autohide="<?php echo $autohide; ?>" data-current-hash="<?php echo $currentHash; ?>" data-current-page="<?php echo $currentPage; ?>" data-nb-items="<?php echo $nbItems; ?>" data-shaarli="<?php echo $shaarli; ?>" data-redirector="<?php echo $redirector; ?>" data-autoupdate="<?php echo $autoupdate; ?>" data-autofocus="<?php echo $autofocus; ?>" data-add-favicon="<?php echo $addFavicon; ?>">
    
    <?php altFeedPage::statusTpl(); ?>
	
	 <?php if (isset($_GET['open'])) { ?>
		
<!-- ITEM ----------------------------------------------->				
          <?php altFeedPage::itemTpl(); ?>
	
	<?php }  else  if (isset($_GET['feedview'])) { ?>   

<!-- FEEDs LIST ----------------------------------------------->			
		
			<?php altFeedPage::listFeedsTpl(); ?>
 
     
     <?php }
     else { ?>   
	
<!-- ITEMs LIST ----------------------------------------------->	
    
			<?php altFeedPage::listItemsTpl(); ?>
		        
        <?php } ?>
        
    <a class="inbl small txtright mr1" href="?tpl=std">Switch to standard template</a>
    <br>
    <br>
    </div>
    
   
<!--
	<!?php if (is_file('inc/script.js')) { ?>
	<script type="text/javascript" src="inc/script.js?version=<!?php echo $version;?>"></script>
	<!?php } else { ?>
	<script type="text/javascript">
	<!?php include("inc/script.js"); ?>
	</script>
	<!?php } ?>
-->


</body>
</html>
