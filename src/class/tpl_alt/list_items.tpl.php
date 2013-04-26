<header>
	<ul class="bar">
		<li><a class="txtleft pl1" href="<?php echo $query.'&amp;feedview'; ?>" Title="Go to feed list">&lt;</a></li>
		<li><a class="txtcenter" href="<?php echo $query.'update='.$currentHash; ?>#menu" title="Update <?php echo $currentHashType; ?> manually">Update</a></li>
		<li><a class="txtright pr1" href="#il-footer" >Menu</a></li>
	</ul>
</header>


<!--BEGIN of IL-HEADER -->
<div class="il-header">
	
	<!-- FOLDER/FEED TITLE -->
	<h1 class="il-feed">
		<!-- NBUNREAD -->
		<span class="il-unread<?php echo ( $altCurrentHashUnread==0?' no-unread':''); ?>"><?php echo $altCurrentHashUnread ?></span>
<?php if (isset($altCurrentHashView)) { ?><?php echo $altCurrentHashView ?><?php } ?>
<!--
		<span class="il-new"><a  href="<?php echo $query.'read='.$currentHash; ?>"  title="Mark <?php echo $currentHashType; ?> as read">+18</a></span>
-->
	</h1>

</div>
<!-- END of IL-HEADER -->


<?php if ($filter === 'unread' and $altCurrentHashUnread==0) { ?>
			 <div class="il-message">There is no unread items, view :  <a href="<?php echo $query.'filter=all'; ?>" title="Filter: show all (read and unread) items">All</a>
			 ?</div>
<?php } ?>


<!-- BEGIN of IL-MAIN -->
<div class="il-main">

<!-- LOOP ITEM -->
<?php
     foreach (array_keys($items) as $itemHash){
     $item = $kf->getItem($itemHash);
?>
				
	<!-- BEGIN of IL-ITEM -->
	<div id="item-<?php echo $itemHash; ?>" class="il-item<?php echo ($item['read']==1?' read':''); ?><?php echo ($itemHash==$currentItemHash?' current':''); ?>">

		<!-- TITLE -->
		<h2  class="il-title">
			<a href="<?php echo $query.'current='.$itemHash.((!isset($_GET['open']) or $currentItemHash != $itemHash)?'&amp;open':''); ?>" data-toggle="collapse" data-target="#item-div-<?php echo $itemHash; ?>"><?php echo $item['title']; ?></a>
		</h2>
		
		<!--	FAVICON	-->
		<?php if ($addFavicon) { ?><img class="il-favicon" src="<?php echo $item['favicon']; ?>" height="16px" width="16px" title="favicon" alt="favicon"/><?php } ?>
		
		<!--	AUTHOR -->
		<span class="il-author small"><a  href="<?php echo '?currentHash='.substr($itemHash, 0, 6); ?>"><?php echo $item['author']; ?></a></span>
		
		<!--	DATE -->
		<span class="il-date small"><?php echo $item['time']['list']; ?></span>
		
		<!-- URL -->
		<a class="il-url small" target="_blank"<?php echo ($redirector==='noreferrer'?' rel="noreferrer"':''); ?> href="<?php echo ($redirector!='noreferrer'?$redirector:'').$item['link']; ?>">URL</a>
	
	</div>
	<!-- END of IL-ITEM -->
		
<?php } ?>
<!-- END of ITEM LOOP -->
	
</div>
<!-- END of IL-MAIN -->



<!--	BEGIN of IL-FOOTER -->
<div id="il-footer">
	
	<ul class="menu big">
		<li class="btn"><a class="txtcenter previous-page<?php echo ($currentPage === 1)?' disabled':''; ?>" href="<?php echo $query.'previousPage='.$currentPage; ?>">&lt;</a></li>
		<li class="nobg txtcenter"><?php echo $currentPage.'/'.$maxPage; ?></li>
		<li class="btn btn-primary" style="width:50%"><a id="next" class="next-page<?php echo ($currentPage === $maxPage)?' disabled':''; ?>" href="<?php echo $query.'nextPage='.$currentPage; ?>">Next ></a></li>
	</ul>

	<ul class="menu big">
		<li class="btn btn-primary"><a href="<?php echo $query.'read='.$currentHash; ?>" class="admin" title="Mark <?php echo $currentHashType; ?> as read">Mark <?php echo $currentHashType; ?> as read</a></li>
	</ul>
	
	<ul class="menu big">
		<li class="nobg">Filter : </li> 	
		<?php if ($filter === 'unread') { ?>
			 <li class="btn"><a href="<?php echo $query.'filter=all'; ?>" title="Filter: show all (read and unread) items">All</a></li>
			 <li class="select"><span>Unread only</span></li> 
		<?php } else { ?>
			<li class="select"><span>All</span></li> 
			<li class="btn"><a href="<?php echo $query.'filter=unread'; ?>" title="Filter: show unread items">Unread only</a></li>
		<?php } ?>	
	</ul>
         
	<ul class="menu big">
		<li class="nobg">Items per page : </li> 	
		<li class="btn"><a class="" href="<?php echo $query.'byPage=10'; ?>">10</a></li>
		<li class="btn"><a class="" href="<?php echo $query.'byPage=25'; ?>">25</a></li>
		<li class="btn"><a class="" href="<?php echo $query.'byPage=50'; ?>">50</a></li>
	</ul>         

	<ul class="menu big">
		<li class="btn"><a href="<?php echo $query.'unread='.$currentHash; ?>" class="admin" title="Mark <?php echo $currentHashType; ?> as unread">Mark <?php echo $currentHashType; ?> as unread</a></li>
	</ul>

	<ul class="menu big">
		<li class="btn"><a href="<?php echo $query.'update='.$currentHash; ?>" class="admin" title="Update <?php echo $currentHashType; ?> manually">Update <?php echo $currentHashType; ?></a></li>
	</ul>

	<ul class="menu big">			
		<li class="btn"><a href="<?php echo $query.'edit='.$currentHash; ?>" class="admin" title="Edit <?php echo $currentHashType; ?>">Edit <?php echo $currentHashType; ?></a></li>
	</ul>

</div>
<!--	END of IL-FOOTER -->

<div>
	<ul class="menucom">
		<li><a href="<?php echo $query.'add'; ?>" class="admin" title="Add a new feed">Add a new feed</a></li>
		<?php if (Session::isLogged()) { ?><li><a href="?logout" class="admin" title="Logout">Logout</a></li>
		<?php } else { ?><li><a href="?login">Login</a></li><?php } ?>
		<?php if ($kf->kfc->isLogged()) { ?><li><a href="?config" class="admin" title="Configuration">Configuration</a></li><?php } ?>
		<li><a href="<?php echo $query.'help'; ?>" title="Help : how to use KrISS feed">Help</a></li>
		<li class="small about pr1"><a href="http://github.com/tontof/kriss_feed">KrISS feed <?php echo $version; ?></a> by <a href="http://tontof.net">Tontof</a></li>
	</ul>
</div>


<footer>
	<ul  class="bar fixdown">
		<li><a class="txtleft pl1" href="<?php echo $query.'&amp;feedview'; ?>" Title="Jump to feed list">&lt;</a></li>
		<li><a class="txtcenter"   href="<?php echo $query.$currentHash; ?>#haut"  onClick="window.scrollTo(0,0);return false;">Top ^</a></li>
		<li><a class="txtright pr1" href="#il-footer" >Menu</a></li>
	</ul>
</footer>



