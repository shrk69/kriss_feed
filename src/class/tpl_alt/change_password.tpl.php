<!DOCTYPE html>
<html>
  <head><?php altFeedPage::includesTpl(); ?></head>
  <body>
<header>
	<ul class="bar">
		<li><a class="txtleft pl1" href="<?php echo $query.'&amp;feedview'; ?>" Title="Go to feed list">&lt;</a></li>
	</ul>
</header>

              <form class="form-horizontal" method="post" action="">
                <input type="hidden" name="token" value="<?php echo Session::getToken(); ?>">
                <input type="hidden" name="returnurl" value="<?php echo $referer; ?>" />
                <fieldset>
                  <legend>Change your password</legend>

                  <div class="control-group">
                    <label class="control-label" for="oldpassword">Old password</label>
                    <div class="controls">
                      <input type="password" id="oldpassword" name="oldpassword">
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="newpassword">New password</label>
                    <div class="controls">
                      <input type="password" id="newpassword" name="newpassword">
                    </div>
                  </div>

                  <div class="control-group">
                    <div class="controls">
                      <input class="btn" type="submit" name="cancel" value="Cancel"/>
                      <input class="btn" type="submit" name="save" value="Save new password" />
                    </div>
                  </div>
                </fieldset>
              </form>
           
    
    <div id="menu">
	<ul class="menucom">
		<li class="small about pr1"><a href="http://github.com/tontof/kriss_feed">KrISS feed <?php echo $version; ?></a> by <a href="http://tontof.net">Tontof</a></li>
	</ul>
</div>
  </body>
</html>
