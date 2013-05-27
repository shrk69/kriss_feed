<!-- BEGIN of MAIN-DESK -->
<div  class="il-main-container">
	
<header>
	<ul class="navbar navbar-top desktop-hidden">
		<li><a href="<?php echo $query.'&amp;feedview'; ?>" Title="Go to feed list">&lt;</a></li>
		<li><a href="<?php echo $query.'update='.$currentHash; ?>#menu" title="Update <?php echo $currentHashType; ?> manually">Refresh</a></li>
		<li><a href="#il-footer" onClick="scrollid('il-footer');return false;">Menu</a></li>
	</ul>
</header>

<!--BEGIN of IL-HEADER -->
<div class="il-header">
	
	<h1 class="il-feed"><?php if (isset($altCurrentHashView)) { ?><?php echo $altCurrentHashView ?><?php } ?></h1>
	
	<div class="il-unread<?php echo ( $altCurrentHashUnread==0?' no-unread':''); ?>">
		<?php if ($altCurrentHashUnread==!0) { ?>
			<a class="il-unread-all-btn" href="<?php echo $query.'read='.$currentHash; ?>"  title="Mark <?php echo $currentHashType; ?> as read">x</a>
		<?php }  ?>
		<div class="il-unread-nb"><?php echo $altCurrentHashUnread ?> <small>new</small></div>
	</div>

</div>
<!-- END of IL-HEADER -->

<?php if ($filter === 'unread' and $altCurrentHashUnread==0) { ?>
	 <div class="il-message">There is no unread items, view :  <a href="<?php echo $query.'filter=all'; ?>" title="Filter: show all (read and unread) items">All</a> ?</div>
<?php } ?>

<!-- BEGIN of IL-MAIN -->
<div class="il-main">

	<div class="il-items-wrapper">
	
		<!-- LOOP ITEM -->
		<?php
			 foreach (array_keys($items) as $itemHash){
			 $item = $kf->getItem($itemHash);
		?>
				
			<!-- BEGIN of IL-ITEM -->
			<div id="item-<?php echo $itemHash; ?>" class="il-item<?php echo ($item['read']==1?' read':''); ?><?php echo ($itemHash==$currentItemHash?' current':''); ?><?php if (isset($item['starred']) && $item['starred']===1) echo ' starred'; ?> zoom">

				<?php if (isset($item['starred']) && $item['starred']===1) { ?>
					<div class="full-circle full-circle-vu -il-vu"></div>
				<?php } else if ($item['read']===0) { ?>
					<div class="full-circle full-circle-new"></div>
				<?php }  ?>

				<!-- TITLE -->
				<h2  class="il-title">
					<a href="<?php echo $query.'star='.$itemHash;?>" data-toggle="collapse" data-target="#item-div-<?php echo $itemHash; ?>">
					<?php echo $item['title']; ?></a>
				</h2>
				
				<!--	FAVICON	-->
				<?php if ($addFavicon) { ?><img class="il-favicon" src="<?php echo $item['favicon']; ?>" height="16px" width="16px" title="favicon" alt="favicon"/><?php } ?>
				
				<!--	AUTHOR -->
				<span class="il-author small"><a  href="<?php echo '?currentHash='.substr($itemHash, 0, 6); ?>"><?php echo $item['author']; ?></a></span>
				
				<!--	DATE -->
				<span class="il-date small"><?php echo $item['time']['list']; ?></span>
								
				<!-- URL -->
				<a class="il-url small" target="_blank"<?php echo ($redirector==='noreferrer'?' rel="noreferrer"':''); ?> href="<?php echo ($redirector!='noreferrer'?$redirector:'').$item['link']; ?>">url</a>
				
				<?php if (!$item['read'] == 1) { ?>
				<a class="il-btn-read" href="<?php echo $query.'read='.$itemHash; ?>">x</a>
				 <?php } ?>
									
			</div>
			<!-- END of IL-ITEM -->
		
		<?php } ?>
		<!-- END of ITEM LOOP -->

	</div>
	<!-- END of ITEMS WRAPPER -->

	<ul class="menu il-menu-next -phone-hidden">
		<li class="btn"><a class="previous-page<?php echo ($currentPage === 1)?' disabled':''; ?>" href="<?php echo $query.'previousPage='.$currentPage; ?>">&lt;</a></li>
		<li class=""><?php echo $currentPage.'/'.$maxPage; ?></li>
		<li class="btn"><a class="next-page<?php echo ($currentPage === $maxPage)?' disabled':''; ?>" href="<?php echo $query.'nextPage='.$currentPage; ?>">Next ></a></li>
	</ul>	
	
</div>
<!-- END of IL-MAIN -->


<!--	BEGIN of IL-FOOTER -->
<div id="il-footer" class="il-footer">
	
	<div class="il-menu-fixed">
	
		<ul class="menu il-menu-back phone-hidden">
			<li class="btn"><a class="" href="<?php echo $query.'&amp;feedview'; ?>" Title="Go to feed list">&lt; Feeds</a></li>
		</ul>
	
		<ul class="menu txtcenter next">
			<li class="btn"><a class="txtcenter previous-page<?php echo ($currentPage === 1)?' disabled':''; ?>" href="<?php echo $query.'previousPage='.$currentPage; ?>">&lt; Prev.</a></li>
			<li class="-nobg -txtcenter -big"><?php echo $currentPage.'/'.$maxPage; ?></li>
			<li class="btn -btn-primary" style="-width:50%"><a id="next" class="next-page<?php echo ($currentPage === $maxPage)?' disabled':''; ?>" href="<?php echo $query.'nextPage='.$currentPage; ?>">Next ></a></li>
		</ul>
		
		<ul class="menu -txtcenter all">
			<!--li class="pr1 small">Filter :</li-->
			<?php if ($filter === 'unread') { ?>
				 <li class="btn"><a href="<?php echo $query.'filter=all'; ?>" title="Filter: show all (read and unread) items">All</a></li>
				 <li class="select"><span>New</span></li>
				 <li class="btn"><a href="<?php echo $query.'filter=all'; ?>" title="Filter: show all (read and unread) items">Vu</a></li> 
				 <li class="btn"><a href="<?php echo $query.'filter=all'; ?>" title="Filter: show all (read and unread) items">Star</a></li> 
			<?php } else { ?>
				<li class="select"><span>All</span></li> 
				<li class="btn"><a href="<?php echo $query.'filter=unread'; ?>" title="Filter: show unread items">New</a></li>
				<li class="btn"><a href="<?php echo $query.'filter=all'; ?>" title="Filter: show all (read and unread) items">Vu</a></li> 
				<li class="btn"><a href="<?php echo $query.'filter=all'; ?>" title="Filter: show all (read and unread) items">Star</a></li> 
			<?php } ?>	
		</ul>
         
		<ul class="menu -txtcenter ten">
			<li class="-btn"><a class="" href="<?php echo $query.'byPage=10'; ?>">10</a></li>
			<li class="-btn"><a class="" href="<?php echo $query.'byPage=25'; ?>">25</a></li>
			<li class="-btn"><a class="" href="<?php echo $query.'byPage=50'; ?>">50</a></li>
		</ul>         
	
		<ul class="menu il-menu-refresh phone-hidden">
			<li class="btn -btn-refresh"><a href="<?php echo $query.'update='.$currentHash; ?>" class="admin" title="Update <?php echo $currentHashType; ?> manually">Refresh <?php echo $currentHashType; ?></a></li>
		</ul>
	
		<ul class="menu il-menu-edit phone-hidden">			
			<li class="btn"><a href="<?php echo $query.'edit='.$currentHash; ?>" class="admin" title="Edit <?php echo $currentHashType; ?>">Edit <?php echo $currentHashType; ?></a></li>
		</ul>
	
		<ul class="menu il-menu-menu phone-hidden">
			<li class="btn -btn-back"><a href="#il-footer" onClick="scrollid('il-footer');return false;">Menu</a></li>
		</ul>
	
		<ul class="menu il-menu-top phone-hidden">
			<li class="btn -btn-back">
				<a  href="<?php echo $query.$currentHash; ?>#haut"  onClick="window.scrollTo(0,0);return false;">Top ^</a>
			</li>
		</ul>
	
	</div>
	
	
	<ul class="menu big">
		<li class="btn -btn-primary"><a href="<?php echo $query.'read='.$currentHash; ?>" class="admin" title="Mark <?php echo $currentHashType; ?> as read">Mark <?php echo $currentHashType; ?> as read</a></li>
	</ul>

	<ul class="menu big">
		<li class="btn"><a href="<?php echo $query.'update='.$currentHash; ?>" class="admin" title="Update <?php echo $currentHashType; ?> manually">Refresh <?php echo $currentHashType; ?></a></li>
	</ul>
	
	<ul class="menu big">
		<li class="btn"><a href="<?php echo $query.'unread='.$currentHash; ?>" class="" title="Mark <?php echo $currentHashType; ?> as unread">Mark <?php echo $currentHashType; ?> as unread</a></li>
	</ul>

	<ul class="menu big">
		<li class="btn"><a href="<?php echo $query.'add'; ?>" class="admin" title="Add a new feed">Add a new feed</a></li>
	</ul>
	
	<ul class="menu big">
		<?php if (Session::isLogged()) { ?><li class="btn"><a href="?logout" class="admin" title="Logout">Logout</a></li>
		<?php } else { ?><li class="btn"><a href="?login">Login</a></li><?php } ?>
	</ul>
	
	<ul class="menu big">
		<?php if ($kf->kfc->isLogged()) { ?><li class="btn"><a href="?config" class="admin" title="Configuration">Configuration</a></li><?php } ?>
	</ul>
	
	<ul class="menu big">
		<li class="btn"><a href="<?php echo $query.'help'; ?>" title="Help : how to use KrISS feed">Help</a></li>
	</ul>
	
	<ul class="menu big">
		<li class="btn"><a href="http://github.com/tontof/kriss_feed">KrISS feed <?php echo $version; ?> by Tontof</a> </li>
	</ul>

	<ul class="menu big">
		<li class="btn"><a href="?tpl=std">Switch to std tpl</a></li>
	</ul>

</div>
<!--	END of IL-FOOTER -->


<footer>
	<ul  class="navbar navbar-bottom desktop-hidden">
		<li><a href="<?php echo $query.'&amp;feedview'; ?>" Title="Jump to feed list">&lt;</a></li>
		<li><a href="<?php echo $query.$currentHash; ?>#haut"  onClick="window.scrollTo(0,0);return false;">Top ^</a></li>
		<li><a href="#il-footer" onClick="scrollid('il-footer');return false;">Menu</a></li>
	</ul>
</footer>

</div>
<!-- END of IL-MAIN-CONTAINER -->

