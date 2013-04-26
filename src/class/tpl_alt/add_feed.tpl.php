<!DOCTYPE html>
<html>
  <head>
    <?php altFeedPage::includesTpl(); ?>
  </head>
  <body>
	  <header>
	<ul class="bar">
		<li><a class="txtleft pl1" href="<?php echo $query.'&amp;feedview'; ?>" Title="Go to feed list">&lt;</a></li>
	</ul>
</header>
              <?php altFeedPage::statusTpl(); ?>
          <form class="form-horizontal" action="?add" method="POST">
            <fieldset>
              <legend>Add a new feed</legend>
              <div class="control-group">
                <label class="control-label" > Feed url</label>
                <div class="controls">
                  <input type="text" id="newfeed" name="newfeed" value="<?php echo $newfeed; ?>">                  
                </div>
              </div>
                 <div class="control-group">
				 <label class="control-label" >Add selected folders to feed</label>
                <div class="controls">
                  <?php foreach ($folders as $hash => $folder) { ?>
                  <label for="add-folder-<?php echo $hash; ?>">
                    <input type="checkbox" id="add-folder-<?php echo $hash; ?>" name="folders[]" value="<?php echo $hash; ?>"> <?php echo htmlspecialchars($folder['title']); ?> (<a href="?edit=<?php echo $hash; ?>">edit</a>)
                  </label>
                  <?php } ?>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" >Add to a new folder</label>
                <div class="controls">
                  <input type="text" name="newfolder" value="">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <input class="btn" type="submit" name="add" value="Add new feed"/>
                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend>Use bookmarklet to add a new feed</legend>
              <div id="add-feed-bookmarklet" class="text-center">
                <a onclick="alert('Drag this link to your bookmarks toolbar, or right-click it and choose Bookmark This Link...');return false;" href="javascript:(function(){var%20url%20=%20location.href;window.open('<?php echo $kfurl;?>?add&amp;newfeed='+encodeURIComponent(url),'_blank','menubar=no,height=390,width=600,toolbar=no,scrollbars=yes,status=no,dialog=1');})();"><b>Add KF</b></a>
              </div>
            </fieldset>
            <input type="hidden" name="token" value="<?php echo Session::getToken(); ?>">
            <input type="hidden" name="returnurl" value="<?php echo $referer; ?>" />
          </form>
            <div id="menu">
	<ul class="menucom">
		<li class="small about pr1"><a href="http://github.com/tontof/kriss_feed">KrISS feed <?php echo $version; ?></a> by <a href="http://tontof.net">Tontof</a></li>
	</ul>
</div>
  </body>
</html>
