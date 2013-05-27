<?php $item = $kf->getItem($currentItemHash);  ?>

<!-- BEGIN of MAIN-DESK -->
<div  class="i-main-container">

<header>
	<ul class="navbar navbar-top desktop-hidden">
		<li><a href="<?php  echo $query.'current='.$currentItemHash; ?>" Title="Back to item list">&lt;</a></li>
		<li><a href="<?php echo $query.'next='.$currentItemHash.'&amp;open'; ?>">Next ></a></li>
		<li><a href="<?php  echo $query.'current='.$currentItemHash.'&amp;open'; ?>#i-footer"  onClick="scrollid('i-footer');return false;">Menu</a></li>
	</ul>
</header>


<!--BEGIN of I-HEADER -->
<div class="i-header">
	<!--	 TITLE -->
	<h1 class="i-title">
		<a target="_blank"<?php echo ($redirector==='noreferrer'?' rel="noreferrer"':''); ?> href="<?php echo ($redirector!='noreferrer'?$redirector:'').$item['link']; ?>"><?php echo $item['title']; ?></a>
	</h1>
</div>
<!-- END of I-HEADER -->

<div class="i-main-header">
	<!--	FAVICON	-->
	<?php if ($addFavicon || $addFavicon) { ?><img class="i-favicon" src="<?php echo $item['favicon']; ?>" height="16px" width="16px" title="favicon" alt="favicon"/><?php } ?>
	<!--	AUTHOR -->
	<span class="i-author"><a  href="<?php echo '?currentHash='.substr($currentItemHash, 0, 6); ?>"><?php echo $item['author']; ?></a></span>
	<!--	DATE -->
	<span class="i-date"><?php echo $item['time']['list']; ?></span>
</div>


<!--	BEGIN of I-MAIN -->
<div class="i-main">
	<!--	CONTENT -->
	<?php echo $item['content']; ?>
</div>
<!--	END of I-MAIN -->


<!--	BEGIN of I-FOOTER -->
<div id="i-footer">

	<div class="i-menu-fixed">
		
		<ul class="menu i-menu-back phone-hidden">
			<li class="btn"><a class="" href="<?php  echo $query.'current='.$currentItemHash; ?>" Title="Back to item list">&lt; Items</a></li>
		</ul>

		<ul  class="menu i-menu-share">
			  <li class="btn"><a class="item-shaarli" href="<?php echo $query.'shaarli='.$currentItemHash; ?>">Share</a></li>
		</ul>
			
		<ul  class="menu i-menu-star">  
			<li class="btn">
				<?php if (isset($item['starred']) && $item['starred']===1) { ?>
				<a class="item-starred" href="<?php echo $query.'unstar='.$currentItemHash; ?>">Unstar</a>
				<?php } else { ?>
				<a class="item-starred" href="<?php echo $query.'star='.$currentItemHash; ?>">Star</a>
				<?php }?>
			</li>
		</ul>	
		
		<ul class="menu i-menu-read">  
			  <li class="btn">
				<?php if ($item['read'] == 1) { ?><a class="item-mark-as" href="<?php echo $query.'unread='.$currentItemHash; ?>">Mark as unread</a>
				<?php } else { ?><a class="item-mark-as" href="<?php echo $query.'read='.$currentItemHash; ?>">Mark as read</a>
				<?php } ?>
			</li>
		</ul>	
		
		<ul class="menu i-menu-next">
				<li class="btn"><a class="" href="<?php echo $query.'previous='.$currentItemHash.'&amp;open'; ?>">&lt; Prev.</a></li>
				<li class="btn"><a  href="<?php echo $query.'next='.$currentItemHash.'&amp;open'; ?>">Next ></a></li>
			</ul>
		
		<ul class="menu i-menu-top phone-hidden">
			<li class="btn"><a class="" href="<?php  echo $query.'current='.$currentItemHash.'&amp;open'; ?>#haut"  onClick="window.scrollTo(0,0);return false;">Top ^</a></li>
		</ul>

	</div>

</div>
<!--	END of I-FOOTER -->


<footer>
	<ul  class="navbar navbar-bottom desktop-hidden">
		<li><a href="<?php  echo $query.'current='.$currentItemHash; ?>" Title="Back to item list">&lt;</a></li>
		<li><a href="<?php  echo $query.'current='.$currentItemHash.'&amp;open'; ?>#haut"  onClick="window.scrollTo(0,0);return false;">Top ^</a></li>
		<li><a href="<?php  echo $query.'current='.$currentItemHash.'&amp;open'; ?>#i-footer"  onClick="scrollid('i-footer');return false;">Menu</a></li>
	</ul>
</footer>	

</div>
<!-- END of IL-MAIN-CONTAINER -->	
	
	
