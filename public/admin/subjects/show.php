<?php require_once('../../../private/initialize.php'); ?>

<?php
// $page = $_GET['page'] ?? '1';
$id = $_GET['id'] ?? '1';

$subject = find_subject_by_id($id);
?>

<?php $page_title = 'Show Subject'; ?>
<?php include(SHARED_PATH . '/admin-header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/admin/subjects/index.php')
  ?>">&laquo; Back to List</a>
<div class="subject show">

  <h1>Subject: <?php echo h($subject['menu_name']); ?></h1>

  <div class="attributes">
    <dl>
      <dt>Menu Name</dt>
      <dd><?php echo h($subject['menu_name']); ?></dd>
    </dl>
    <dl>
      <dt>Position</dt>
      <dd><?php echo h($subject['position']); ?></dd>
    </dl>
    <dl>
      <dt>Visible</dt>
      <dd><?php echo $subject['visible'] == '1' ? 'true' : 'false'; ?></dd>
    </dl>

</div>
</div>
</div>

<!-- // <a href="show.php?name=<?php echo u('John Doe'); ?>">Link</a><br />
// <a href="show.php?company=<?php echo u('Widgets&More'); ?>">Link</a><br />
// <a href="show.php?query=<?php echo u('!#*?'); ?>">Link</a><br /> -->
