<?php
$conn = mysqli_connect("localhost","root", "111111","opentutorials");

$filtered = array(
  'title'=>mysqli_real_escape_string($conn, $_POST['title']),
  'description'=>mysqli_real_escape_string($conn, $_POST['description'])
);

$sql = "INSERT INTO topic (title, description, created)
        VALUES(
          '{$filtered['title']}',
          '{$filtered['description']}',
          NOW()
        )";

$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정, 문제 발생. 관리자에게 문의.';
  error_log(mysqli_error($conn));
}else{
  echo 'Success. <a href = "index.php">Home</a>';
}

?>
