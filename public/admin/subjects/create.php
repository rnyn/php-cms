<?php
require_once('../../../private/initialize.php');

if (is_post_request()){
        // Handle form values sent by new.php
        $subject = [];
        $subject['menu_name'] = $_POST['menu_name'] ?? '';
        $subject['position'] = $_POST['position'] ?? '';
        $subject['visible'] = $_POST['visible'] ?? '';

      $result = insert_subject($subject);
      if($result === true){
        $new_id = mysqli_insert_id($db);
        redirect_to(url_for('/admin/subjects/show.php?id=' . $new_id));
      }else{
        $errors = $result
    }else{
  redirect_to(url_for('/admin/subjects/new.php'));
}

?>
