<!DOCTYPE html>
<html>
  <head>
    <?php altFeedPage::includesTpl(); ?>
  </head>
  <body onload="document.loginform.login.focus();">
<header>
	<ul class="bar">
		<li><a class="txtleft pl1" href="<?php echo $query.'&amp;feedview'; ?>" Title="Go to feed list">&lt;</a></li>
	</ul>
</header>
	  

<div id="login">
            <form class="form-horizontal" method="post" action="?login" name="loginform">
              <fieldset>
                <legend>Welcome to KrISS feed</legend>
                <div class="control-group">
                  <label class="control-label" for="login">Login</label>
                  <div class="controls">
                    <input type="text" id="login" name="login" placeholder="Login" tabindex="1">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="password">Password</label>
                  <div class="controls">
                    <input type="password" id="password" name="password" placeholder="Password" tabindex="2">
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                    <label><input type="checkbox" name="longlastingsession" tabindex="3">&nbsp;Stay signed in (Do not check on public computers)</label>
                  </div>
                </div>
                
                <div class="control-group">
                  <div class="controls">
                    <button type="submit" class="btn" tabindex="4">Sign in</button>
                  </div>
                </div>
              </fieldset>

              <input type="hidden" name="returnurl" value="<?php echo htmlspecialchars($referer);?>">
              <input type="hidden" name="token" value="<?php echo Session::getToken(); ?>">
            </form>
            <?php altFeedPage::statusTpl(); ?>
</div>                                           
<div id="menu">
	<ul class="menucom">
		<li class="small about pr1"><a href="http://github.com/tontof/kriss_feed">KrISS feed <?php echo $version; ?></a> by <a href="http://tontof.net">Tontof</a></li>
	</ul>
</div>

  </body>
</html> 
