<?php
function find_subjects(){
  global $db;
  $sql = "SELECT * FROM subjects ";
  $sql .= "ORDER BY position ASC";
  $result = mysqli_query($db, $sql);
  return $result;
}



?>
