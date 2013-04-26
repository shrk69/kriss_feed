<ul class="inline">
  <?php foreach(array_keys($paging) as $pagingOpt) { ?>
  <?php switch($pagingOpt) {
        case 'pagingItem': ?>
  <li>
    <div class="btn-group">
      <a class="btn btn2 btn-info previous-item" href="<?php echo $query.'previous='.$currentItemHash; ?>">Previous item</a>
      <a class="btn btn2 btn-info next-item" href="<?php echo $query.'next='.$currentItemHash; ?>">Next item</a>
    </div>
  </li>
  <?php break; ?>
  <?php case 'pagingMarkAs': ?>
  <li>
    <div class="btn-group">
      <a class="btn btn-info" href="<?php echo $query.'read='.$currentHash; ?>">Mark as read</a>
    </div>
  </li>
  <?php break; ?>
  <?php case 'pagingPage': ?>
  <li>
    <div class="btn-group">
      <a class="btn btn3 btn-info previous-page<?php echo ($currentPage === 1)?' disabled':''; ?>" href="<?php echo $query.'previousPage='.$currentPage; ?>">Previous page</a>
      <button class="btn btn3 disabled current-max-page"><?php echo $currentPage.' / '.$maxPage; ?></button>
      <a class="btn btn3 btn-info next-page<?php echo ($currentPage === $maxPage)?' disabled':''; ?>" href="<?php echo $query.'nextPage='.$currentPage; ?>">Next page</a>
    </div>
  </li>
  <?php break; ?>
  <?php case 'pagingByPage': ?>
  <li>
    <div class="btn-group">
      <form class="form-inline" action="<?php echo $kfurl; ?>" method="GET">
        <div class="input-prepend input-append paging-by-page">
          <a class="btn btn3 btn-info" href="<?php echo $query.'byPage=1'; ?>">1</a>
          <a class="btn btn3 btn-info" href="<?php echo $query.'byPage=10'; ?>">10</a>
          <a class="btn btn3 btn-info" href="<?php echo $query.'byPage=50'; ?>">50</a>
          <div class="btn-break"></div>
          <input class="btn2 input-by-page input-mini" type="text" name="byPage">
            <input type="hidden" name="currentHash" value="<?php echo $currentHash; ?>">
              <button type="submit" class="btn btn2">items per page</button>
        </div>
      </form>
    </div>
  </li>
  <?php break; ?>
  <?php default: ?>
  <?php break; ?>
  <?php } ?>
  <?php } ?>
</ul>
<div class="clear"></div>
