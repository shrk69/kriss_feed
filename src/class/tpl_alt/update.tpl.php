<!DOCTYPE html>
<html>
  <head>
    <?php altFeedPage::includesTpl(); ?>
  </head>
  <body>
             <?php altFeedPage::statusTpl(); ?>
         
<header>          
         <ul class="bar">
		<li><a class="txtleft" href="<?php echo $query."".$currentHash; ?>"><</a></li>
		<li><a class="txtright" href="<?php echo $query."update=".$currentHash."&force"; ?>">Force update</a></li>
		</ul>
</header>      

                <br>                              
                
                <ul class="">
                  <?php $kf->updateFeedsHash($feedsHash, $forceUpdate, 'html')?>
                </ul>
                
                <br>
                
            <div id="menu">
	<ul class="menucom">
		<li class="small about pr1"><a href="http://github.com/tontof/kriss_feed">KrISS feed <?php echo $version; ?></a> by <a href="http://tontof.net">Tontof</a></li>
		</ul>                                    
<!--
               <a class="btn" href="?">Go home</a>
-->
   
<footer>          
         <ul class="bar fixdown">
		<!--li><a class="txtleft" href="<!?php  if (!empty($referer) && !isset($_GET['force']))  { echo htmlspecialchars($referer); } else{echo '?';}; ?>"><</a></li-->
		<li><a class="txtleft" href="<?php echo $query."".$currentHash; ?>"><</a></li>
		<li><a class="txtright" href="<?php echo $query."update=".$currentHash."&force"; ?>">Force update</a></li>
		</ul>
</footer>        
   
             
    <script type="text/javascript">
      <?php /* include("inc/script.js"); */ ?>
    </script>
  </body>
</html>
