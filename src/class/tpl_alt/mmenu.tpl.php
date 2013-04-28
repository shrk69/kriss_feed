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
