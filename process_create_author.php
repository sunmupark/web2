<?php
$conn = mysqli_connect("localhost","root", "111111","opentutorials");

$filtered = array(
  'name'=>mysqli_real_escape_string($conn, $_POST['name']),
  'profile'=>mysqli_real_escape_string($conn, $_POST['profile'])
);

$sql = "INSERT INTO author
              (name, profile)
        VALUES(
          '{$filtered['name']}',
          '{$filtered['profile']}'

        )
      ";

$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정, 문제 발생. 관리자에게 문의.';
  error_log(mysqli_error($conn));
}else{
  header('Location: author.php');
}

?>
