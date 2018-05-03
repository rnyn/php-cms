<?php
  if (!isset($page_title)) { $page_title = "Admin Area"; }
?>
<!DOCTYPE html>
<html lang='en-US'>

<head>
  <meta charset="utf-8">
  <title>Code Resources - <?php echo h($page_title); ?></title>
  <link rel="stylesheet" media="all" href="<?php echo url_for('/css/admin.css'); ?>" />
</head>

<body>
  <header>
    <h1>admin area</h1>
  </header>

  <navigation>
    <ul>
      <li><a href="<?php echo url_for('/admin/index.php'); ?>">admin.menu</a></li>
    </ul>
  </navigation>
