<?php



if(empty($_POST['username']) || !isset($_POST['username'])){
  echo "<script>window.location.href = \"../session_index\"; </script>";
  setcookie("logged_in", "0");
  die();
} else {
  setcookie("logged_in", "1");
}
$username = $_POST['username'];
setcookie("username", $username);
echo "<script>window.location.href =\"../session_password\"; </script>";
?>