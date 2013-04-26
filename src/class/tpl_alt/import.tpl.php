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
          <form class="form-horizontal" method="post" action="?import" enctype="multipart/form-data">
            <fieldset>
              <legend>Import Opml file</legend>
              <div class="small">Import an opml file as exported by Google Reader, Tiny Tiny RSS, RSS lounge...</div>
              
              <div class="control-group">
                <label class="control-label" for="filetoupload">File (Size max: <?php echo MyTool::humanBytes(MyTool::getMaxFileSize()); ?>)</label>
                <div class="controls">
                  <input class="btn" type="file" id="filetoupload" name="filetoupload">
                </div>
              </div>

              <div class="control-group">
                <div class="controls">
                  <label for="overwrite">
                    <input type="checkbox" name="overwrite" id="overwrite">
                    Overwrite existing feeds
                  </label>
                </div>
              </div>

              <div class="control-group">
                <div class="controls">
                  <input class="btn" type="submit" name="import" value="Import">
                  <input class="btn" type="submit" name="cancel" value="Cancel">
                </div>
              </div>

              <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MyTool::getMaxFileSize(); ?>">
              <input type="hidden" name="returnurl" value="<?php echo $referer; ?>" />
              <input type="hidden" name="token" value="<?php echo Session::getToken(); ?>">
            </fieldset>
          </form>
<div id="menu">
	<ul class="menucom">
		<li class="small about pr1"><a href="http://github.com/tontof/kriss_feed">KrISS feed <?php echo $version; ?></a> by <a href="http://tontof.net">Tontof</a></li>
	</ul>
</div>
        
  </body>
</html> 
