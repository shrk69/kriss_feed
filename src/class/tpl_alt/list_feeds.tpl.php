<header>
	<ul class="bar">
		<li ><a class="txtleft pl1" href="<?php  echo $query.'current='.$currentItemHash; ?>" Title="Back to item list">&lt;</a></li>
		
<!--
			<li><a class="txtleft pl1" href="?config" Title="Jump to feed list">Config</a></li>
-->
<!--
			<li><a class="txtcenter" href="<?php echo $query.'update='.$currentHash; ?>"  title="Update <?php echo $currentHashType; ?> manually">Up!</a></li>
-->
			<li><a class="txtright pr1" href="<?php echo $query.'&amp;feedview'; ?>#lf-footer" onClick="scrollid('lf-footer');return false;">Menu</a></li>
	</ul>
</header>

<!-- BEGIN of FL-MAIN -->
<div class="fl-main">
 
 
 <!-- BEGIN of JUMPER -->
<ul class="j">
	
	<!-- ALL FEEDS -->
	<li id="all-subscriptions" class="j-folder<?php if ($currentHash == 'all') echo ' current'; ?>">
		<span class="j-jmp"><a  href="#go to unrated feed">v</a></span>
		<a class="j-t"  href="<?php echo '?currentHash=all'; ?>"><?php echo $feedsView['all']['title']; ?></a>
		<span class="j-u<?php echo ($feedsView['all']['nbUnread']==0?' no-unread':'');?>">
			<?php echo $feedsView['all']['nbUnread']; ?>
		</span>
	</li>
	
	<!-- STARRED -->
<!--
	
		<li id="folder-<?php echo $hashFolder; ?>" class="j-folder<?php if ($currentHash == $hashFolder) echo ' current-folder'; ?><?php if ($autohide and $folder['nbUnread']== 0) { echo ' autohide-folder';} ?>">
		<span class="btn btn-jmp"><a class="btn-jmp" href=""></a></span>
		<a  class="title"  href="<?php echo '?currentHash=all'; ?>">Starred feeds</a>
		<a class="nbunread<?php if ($folder['nbUnread']== 0) { echo ' no-unread';} ?>" href="<?php echo ($feedsView['all']['nbUnread']==0?'?currentHash=all&unread':$query.'read').'=all'; ?>" title="Mark all as <?php echo ($feedsView['all']['nbUnread']==0?'unread':'read');?>"><?php echo $feedsView['all']['nbUnread']; ?></a>
		</span>
	</li>
-->
	
	<!-- UNRATED -->
<!--
	<li  class="j-folder">
		<span class="btn btn-jmp"><a class="fl-btn-jmp" href="#go to unrated feed">v</a></span>
		<a class="title"  href="<?php echo '?currentHash=all'; ?>">Unrated feeds</a>
		<a class="nbunread<?php if ($folder['nbUnread']== 0) { echo ' no-unread';} ?>" href="<?php echo ($feedsView['all']['nbUnread']==0?'?currentHash=all&unread':$query.'read').'=all'; ?>" title="Mark all as <?php echo ($feedsView['all']['nbUnread']==0?'unread':'read');?>"><span class="label"><?php echo $feedsView['all']['nbUnread']; ?></span></a>
	</li>			
-->
  
  	<!-- LOOP FOLDER JUMPER-->
	<?php foreach ($feedsView['folders'] as $hashFolder => $folder) {  $isOpen = $folder['isOpen'];  ?>
        
     <li  class="j-folder<?php if ($currentHash == $hashFolder) echo ' current'; ?><?php if ($autohide and $folder['nbUnread']== 0) { echo ' autohide-folder';} ?>">
		 <span class="j-jmp"><a class="fl-btn-jmp" href="<?php echo $query.'&amp;feedview';?>#folder-<?php echo $hashFolder; ?>">v</a></span>
		 <a class="j-t" href="<?php echo '?currentHash='.$hashFolder.'#folder-'.$hashFolder; ?>"><?php echo htmlspecialchars($folder['title']); ?></a> 
         <span class="j-u<?php echo ($folder['nbUnread']==0?' no-unread':'');?>">
			<?php echo $folder['nbUnread']; ?>
		</span>
    </li>

	<?php } ?> 
   	<!-- END of LOOP FOLDER JUMPER-->

 </ul>
<!-- END of JUMPER -->  

   
<!-- FOLDER -->

<!--
<ul class="unstyled">
-->

	<!-- UNRATED FEEDS --> 
<!--
	<li class="folder">
-->
		<h2 class="fd">
			<span class="fd-top"><a  href="#top">^</a></span>
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
					
			<li id="<?php echo 'feed-'.$feedHash; ?>" class="feed<?php if ($feed['nbUnread']!== 0) echo ' has-unread'; ?><?php if ($currentHash == $feedHash) echo ' current-feed'; ?><?php if ($autohide and $feed['nbUnread']== 0) echo ' autohide-feed'; ?>">
				<!-- FAVICON -->
				<?php if ($addFavicon) { ?>
				 <span class="f-f"><img src="<?php echo $kf->getFaviconFeed($feedHash); ?>" height="16" width="16" title="favicon" alt="favicon"/></span>
				<?php } ?>
				<!-- TITLE -->
				<a class="f-t <?php echo (isset($feed['error'])?' text-error':''); ?>" href="<?php echo '?currentHash='.$feedHash.'#feed-'.$feedHash; ?>" title=""><?php echo htmlspecialchars($feed['title']); ?></a>
				<!-- NBUNREAD -->
				<?php if ($feed['nbUnread']!== 0) { ?><span class="f-u" ><?php echo $feed['nbUnread']; ?></span><?php } ?>
			 </li>

			<?php  } ?>
		</ul> 
<!--
	</li>
-->
	<!-- END of UNRATED FEEDS -->            
           
     <!-- LOOP FOLDERS -->    
    <?php  foreach ($feedsView['folders'] as $hashFolder => $folder) { $isOpen = $folder['isOpen']; ?>

<!--
	<li id="folder-<?php echo $hashFolder; ?>" class="folder<?php if ($currentHash == $hashFolder) echo ' current'; ?><?php if ($autohide and $folder['nbUnread']== 0) { echo ' autohide-folder';} ?>">
-->
		<h2  id="folder-<?php echo $hashFolder; ?>" class="fd<?php if ($currentHash == $hashFolder) echo ' current'; ?>">
			<span class="fd-top"><a  href="#top">^</a></span>
			<a class="fd-t" href="<?php echo '?currentHash='.$hashFolder.'#folder-'.$hashFolder; ?>"><?php echo htmlspecialchars($folder['title']); ?></a>
			 <span class="fd-u<?php echo ($folder['nbUnread']==0?' no-unread':'');?>"><?php echo $folder['nbUnread']; ?></span>
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
             
				<!-- favicon-->
				<?php if ($addFavicon) { ?>
					<span class="f-f">
					<img src="<?php echo $kf->getFaviconFeed($feedHash); ?>" height="16" width="16" title="favicon" alt="favicon"/>
					</span>
				 <?php } ?>
				  
				<!-- TITLE-->            
				<a class="f-t<?php echo (isset($feed['error'])?' text-error':''); ?> inbl pl1" href="<?php echo '?currentHash='.$feedHash.'#folder-'.$hashFolder.'-feed-'.$feedHash; ?>" title=""><?php echo htmlspecialchars($feed['title']); ?></a>
				<!-- NBUNREAD -->
				<?php if ($feed['nbUnread']!== 0) { ?><span class="f-u" ><?php echo $feed['nbUnread']; ?></span><?php } ?>
<!--
				<a class="btn-starred inbl right mr1 smaller" href="">*</a> 
-->
				
            </li>
         <?php } ?>
         </ul>
         <!-- END of LOOP FEEDS -->        
     
<!--
     </li>
-->
	<?php } ?> 
    <!-- END of LOOP FOLDERS --> 
  
<!--
</ul>
-->
<!-- END of FOLDER -->  
  
</div>
<!-- END of FL-MAIN -->


<!--	BEGIN of I-FOOTER -->

<div id="lf-footer">
<!--
	<ul id="i-menu" class="big">
		  <li>
			<?php if ($item['read'] == 1) { ?><a class="item-mark-as" href="<?php echo $query.'unread='.$itemHash; ?>">Unread</a>
			<?php } else { ?><a class="item-mark-as" href="<?php echo $query.'read='.$itemHash; ?>">Clear</a>
			<?php } ?>
		</li>
		<li><a class="item-shaarli" href="<?php echo $query.'shaarli='.$itemHash; ?>"><span class="label label-expanded">Later</span></a></li>
		<li><a class="item-shaarli" href="<?php echo $query.'shaarli='.$itemHash; ?>"><span class="label label-expanded">Share ></span></a></li>
    </ul>
-->
</div>

<!--	END of I-FOOTER -->

<div>
	<ul class="menucom">
		<li><a href="<?php echo $query.'add'; ?>" class="admin" title="Add a new feed">Add a new feed</a></li>
		<?php if (Session::isLogged()) { ?><li><a href="?logout" class="admin" title="Logout">Logout</a></li>
		<?php } else { ?><li><a href="?login">Login</a></li><?php } ?>
		<?php if ($kf->kfc->isLogged()) { ?><li><a href="?config" class="admin" title="Configuration">Configuration</a></li><?php } ?>
		<li><a href="<?php echo $query.'help'; ?>" title="Help : how to use KrISS feed">Help</a></li>
		<li class="small about pr1"><a href="http://github.com/tontof/kriss_feed">KrISS feed <?php echo $version; ?></a> by <a href="http://tontof.net">Tontof</a></li>
		<li class="smaller about pr1">(<a href="http://github.com/shrk69/kriss_feed">Alternative template</a> by shrk)</li>
		<li class="small about pr1"><a href="?tpl=std">Switch to standard template</a></li>
	</ul>
</div>

<footer>
	<ul class="bar fixdown">
		<li ><a class="txtleft pl1" href="<?php  echo $query.'current='.$currentItemHash; ?>" Title="Back to item list">&lt;</a></li>
		<li><a class="txtcenter" href="<?php echo $query.'&amp;feedview'; ?>#haut"  onClick="window.scrollTo(0,0);return false;">Top ^</a></li>
		<li ><a class="txtright pr1" href="<?php echo $query.'&amp;feedview'; ?>#lf-footer"  onClick="scrollid('lf-footer');return false;">Menu</a></li>
	</ul>
</footer>	




