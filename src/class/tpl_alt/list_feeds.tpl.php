<header>
	<ul class="navbar navbar-top desktop-hidden">
		<li ><a href="<?php  echo $query.'current='.$currentItemHash; ?>" Title="Back to item list">&lt;</a></li>
	</ul>
</header>


<!-- BEGIN of FL-MAIN -->
<div class="fl-main">
 
	<div class="fl-menu-fixed">

		 <ul class="menu fl-menu-back phone-hidden"> 
			<li class="btn"><a href="<?php  echo $query.'current='.$currentItemHash; ?>" Title="Back to item list">&lt; Items</a></li>
		 </ul> 

		<!-- BEGIN of JUMPER -->
		<ul class="j">

			<!-- ALL FEEDS -->
			<li id="all-subscriptions" class="j-folder<?php if ($currentHash == 'all') echo ' current'; ?>">
				<?php if($feedsView['all']['nbUnread']==!0) { ?><div class="j-circle"></div><?php } ?>
				<a class="j-t"  href="<?php echo '?currentHash=all'; ?>"><?php echo $feedsView['all']['title']; ?></a>
				<span class="j-u<?php echo ($feedsView['all']['nbUnread']==0?' no-unread':'');?>">
					<?php echo $feedsView['all']['nbUnread']; ?>
				</span>
				<span class="j-jmp"><a  href="#go to unrated feed">v</a></span>
			</li>
		
			<!-- LOOP FOLDER JUMPER-->
			<?php foreach ($feedsView['folders'] as $hashFolder => $folder) {  $isOpen = $folder['isOpen'];  ?>
				
			 <li  class="j-folder<?php if ($currentHash == $hashFolder) echo ' current'; ?><?php echo ($folder['nbUnread']==0?' no-unread':'');?><?php if ($autohide and $folder['nbUnread']== 0) { echo ' autohide-folder';} ?>">
				<?php if($folder['nbUnread']==!0) { ?><div class="j-circle"></div><?php } ?>
				<a class="j-t" href="<?php echo '?currentHash='.$hashFolder.'#folder-'.$hashFolder; ?>"><?php echo htmlspecialchars($folder['title']); ?></a> 
				  
				  <span class="j-u<?php echo ($folder['nbUnread']==0?' no-unread':'');?>">
					<?php echo $folder['nbUnread']; ?>
				</span>
				<span class="j-jmp"><a class="fl-btn-jmp" href="<?php echo $query.'&amp;feedview';?>#folder-<?php echo $hashFolder; ?>">v</a></span>
			 </li>

			<?php } ?> 
			<!-- END of LOOP FOLDER JUMPER-->

		</ul>
		<!-- END of JUMPER -->  

		<ul class="menu"> 
			<li class="fl-menu-top phone-hidden"><a class="" href="<?php echo $query.'&amp;feedview'; ?>#haut"  onClick="window.scrollTo(0,0);return false;">Top ^</a></li>
		</ul>

	</div>
	<!-- END of fl-menu-fixed -->  
 
   
<!-- FOLDER -->

	<!-- UNRATED FEEDS --> 
	<h2 class="fd">
		<a class="fd-t"  href="#">Unrated feeds</a>
	</h2>
		
	<ul class="f">
			
		<?php
	    foreach ($feedsView['all']['feeds'] as $feedHash => $feed) {
		$atitle = trim(htmlspecialchars($feed['description']));
		if (empty($atitle) || $atitle == ' ') {
		$atitle = trim(htmlspecialchars($feed['title']));
		}
		if (isset($feed['error'])) {
		$atitle = $feed['error'];
		}
		?>
					
			<li id="<?php echo 'feed-'.$feedHash; ?>" class="feed<?php if ($feed['nbUnread']!== 0) echo ' has-unread'; ?><?php echo ($folder['nbUnread']==0?' no-unread':'');?><?php if ($currentHash == $feedHash) echo ' current-feed'; ?><?php if ($autohide and $feed['nbUnread']== 0) echo ' autohide-feed'; ?>">
				<!-- FAVICON -->
				<?php if ($addFavicon) { ?>
				 <span class="f-f"><img src="<?php echo $kf->getFaviconFeed($feedHash); ?>" height="16" width="16" title="favicon" alt="favicon"/></span>
				<?php } ?>
				<!-- TITLE -->
				<a class="f-t <?php echo (isset($feed['error'])?' text-error':''); ?>" href="<?php echo '?currentHash='.$feedHash.'#feed-'.$feedHash; ?>" title=""><?php echo htmlspecialchars($feed['title']); ?></a>
				<!-- NBUNREAD -->
				<?php if ($feed['nbUnread']!== 0) { ?><span class="f-u" >(<?php echo $feed['nbUnread']; ?>)</span><?php } ?>
			 </li>

		<?php  } ?>
	</ul> 
	<!-- END of UNRATED FEEDS -->            
           
    <!-- LOOP FOLDERS -->    
    <?php  foreach ($feedsView['folders'] as $hashFolder => $folder) { $isOpen = $folder['isOpen']; ?>

		<h2  id="folder-<?php echo $hashFolder; ?>" class="fd<?php if ($currentHash == $hashFolder) echo ' current'; ?>">
			<a class="fd-t" href="<?php echo '?currentHash='.$hashFolder.'#folder-'.$hashFolder; ?>"><?php echo htmlspecialchars($folder['title']); ?></a>
			<span class="fd-u<?php echo ($folder['nbUnread']==0?' no-unread':'');?>">(<?php echo $folder['nbUnread']; ?>)</span>
		</h2>
				
         <!-- LOOP FEEDS -->          
        <ul class="f">
         <?php
               foreach ($folder['feeds'] as $feedHash => $feed) {
            $atitle = trim(htmlspecialchars($feed['description']));
            if (empty($atitle) || $atitle == ' ') {
            $atitle = trim(htmlspecialchars($feed['title']));
            }
            if (isset($feed['error'])) {
            $atitle = $feed['error'];
            }
            ?>

            <li id="folder-<?php echo $hashFolder; ?>-feed-<?php echo $feedHash; ?>" class="feed<?php if ($feed['nbUnread']!== 0) echo ' has-unread'; ?><?php if ($currentHash == $feedHash) echo ' current'; ?><?php if ($autohide and $feed['nbUnread']== 0) { echo ' autohide-feed';} ?>">
             
				<!-- FAVICON -->
				<?php if ($addFavicon) { ?>
					<span class="f-f">
						<img src="<?php echo $kf->getFaviconFeed($feedHash); ?>" height="16" width="16" title="favicon" alt="favicon"/>
					</span>
				 <?php } ?>
				  
				<!-- TITLE-->            
				<a class="f-t<?php echo (isset($feed['error'])?' text-error':''); ?>" href="<?php echo '?currentHash='.$feedHash.'#folder-'.$hashFolder.'-feed-'.$feedHash; ?>" title=""><?php echo htmlspecialchars($feed['title']); ?></a>
				<!-- NBUNREAD -->
				<?php if ($feed['nbUnread']!== 0) { ?><span class="f-u" >(<?php echo $feed['nbUnread']; ?>)</span><?php } ?>
				
            </li>
         <?php } ?>
         
		</ul>
		 <!-- END of LOOP FEEDS -->        
     
     <?php } ?> 
    <!-- END of LOOP FOLDERS --> 
  
</div>
<!-- END of FL-MAIN -->

<!--	BEGIN of I-FOOTER -->
<div id="lf-footer"></div>
<!--	END of I-FOOTER -->

<footer>
	<ul  class="navbar navbar-bottom desktop-hidden">
		<li><a href="<?php  echo $query.'current='.$currentItemHash; ?>" Title="Back to item list">&lt;</a></li>
		<li><a href="<?php echo $query.'&amp;feedview'; ?>#haut"  onClick="window.scrollTo(0,0);return false;">Top ^</a></li>
	</ul>
</footer>	
