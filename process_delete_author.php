<?php
$conn = mysqli_connect("localhost","root", "111111","opentutorials");

settype($_POST['id'], 'integer');
$filtered = array(
  'id'=>mysqli_real_escape_string($conn, $_POST['id'])
);

$sql = "DELETE FROM topic WHERE author_id = {$filtered['id']}";
mysqli_query($conn, $sql);
$sql = " DELETE FROM author WHERE id = {$filtered['id']} ";
// die ($sql);
$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정, 문제 발생. 관리자에게 문의.';
  error_log(mysqli_error($conn));
}else{
  header('Location: author.php');
}

?>
