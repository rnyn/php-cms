<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = 'Admin Menu'; ?>
<?php include(SHARED_PATH . '/admin-header.php'); ?>

<div id="content">
  <div id="main-menu">
    <h2>Main Menu</h2>
    <ul>
      <li><a href="<?php echo url_for('/admin/subjects/index.php');
      ?>">Subjects</a></li>
      <li><a href="<?php echo url_for('/admin/pages/index.php');
      ?>">Pages</a></li>
    </ul>
  </div>
body test
</div>

<?php include(SHARED_PATH . '/admin-footer.php'); ?>
