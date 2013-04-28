<?php $item = $kf->getItem($currentItemHash);  ?>

<header>
	<ul class="bar">
		<li ><a class="txtleft pl1" href="<?php  echo $query.'current='.$currentItemHash.'#item-'.$currentItemHash; ?>" Title="Back to item list">&lt;</a></li>
		<li ><a class="txtright pr1" href="<?php  echo $query.'current='.$currentItemHash.'&amp;open'; ?>#i-footer"  onClick="scrollid('i-footer');return false;">Menu</a></li>
	</ul>
</header>



<!--BEGIN of I-HEADER -->
<div class="i-header">
	
	<!--	 TITLE -->
	<h1 class="i-title">
		<a class="" target="_blank"<?php echo ($redirector==='noreferrer'?' rel="noreferrer"':''); ?> href="<?php echo ($redirector!='noreferrer'?$redirector:'').$item['link']; ?>"><?php echo $item['title']; ?></a>
	</h1>
	<!--	FAVICON	-->
	<?php if ($addFavicon) { ?><img class="i-favicon" src="<?php echo $item['favicon']; ?>" height="16px" width="16px" title="favicon" alt="favicon"/><?php } ?>
	<!--	AUTHOR -->
	<span class="i-author small"><a  href="<?php echo '?currentHash='.substr($itemHash, 0, 6); ?>"><?php echo $item['author']; ?></a></span>
	<!--	DATE -->
	<span class="i-date small"><?php echo $item['time']['list']; ?></span>

</div>
<!-- END of I-HEADER -->

	

<!--	BEGIN of I-MAIN -->
<div class="i-main">
	
	<!--	CONTENT -->
	<?php echo $item['content']; ?>

</div>
<!--	END of I-MAIN -->
				


<!--	BEGIN of I-FOOTER -->
<div id="i-footer">

	<ul id="i-menu" class="big">
		  <li class="btn btn-primary"><a class="item-shaarli" href="<?php echo $query.'shaarli='.$currentItemHash; ?>"><span class="label label-expanded">Share</span></a></li>
		  <li>
			<?php if ($item['read'] == 1) { ?><a class="item-mark-as" href="<?php echo $query.'unread='.$currentItemHash; ?>">Mark as unread</a>
			<?php } else { ?><a class="item-mark-as" href="<?php echo $query.'read='.$currentItemHash; ?>">Mark as read</a>
			<?php } ?>
		</li>
<!--
		<li><a class="item-shaarli" href="<?php echo $query.'shaarli='.$CurrentItemHash; ?>"><span class="label label-expanded">Keep unread</span></a></li>
-->
	 </ul>

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
		<li><a class="txtcenter" href="<?php  echo $query.'current='.$currentItemHash.'&amp;open'; ?>#haut"  onClick="window.scrollTo(0,0);return false;">Top ^</a></li>
		<li ><a class="txtright pr1" href="<?php  echo $query.'current='.$currentItemHash.'&amp;open'; ?>#i-footer"  onClick="scrollid('i-footer');return false;">Menu</a></li>
	</ul>
</footer>	

	
	
	
