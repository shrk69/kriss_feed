<!DOCTYPE html>
<html>
  <head>
    <?php altFeedPage::includesTpl(); ?>
  </head>
  <body>
	  <?php altFeedPage::nav_topTpl(); ?>
    <div class="container-fluid">
      <div class="row-fluid">
        <div id="edit-folder" class="span4 offset4">
          
          <form class="form-horizontal" method="post" action="">
            <fieldset>
              <div class="control-group">
                <label class="control-label" for="foldertitle">Folder title</label>
                <div class="controls">
                  <input type="text" id="foldertitle" name="foldertitle" value="<?php echo $foldertitle; ?>">
                  <span class="help-block">Leave empty to delete</span>
                </div>
              </div>

              <div class="control-group">
                <div class="controls">
                  <input class="btn" type="submit" name="cancel" value="Cancel"/>
                  <input class="btn" type="submit" name="save" value="Save" />
                </div>
              </div>
            </fieldset>

            <input type="hidden" name="returnurl" value="<?php echo $referer; ?>" />
            <input type="hidden" name="token" value="<?php echo Session::getToken(); ?>">
          </form>
        </div>
      </div>
    </div>
  <a id="menu"></a>
      <?php altFeedPage::mmenuTpl(); ?>
      <?php altFeedPage::nav_bottomTpl(); ?>
  </body>
</html>
