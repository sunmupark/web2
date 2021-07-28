<?php
$conn = mysqli_connect("localhost","root", "111111","opentutorials");
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)){
  $escaped_title = htmlspecialchars($row['title']);
  $list = $list."<li><a href = \"index.php?id={$row['id']}\">{$escaped_title}</a></li>";
}

$article = array(
  'title'=>'Welcome!',
  'description'=>'Hello PHP.....'
  );



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    <h1><a href = "index.php">WEB</a></h1>
    <ol>
      <?=$list?>
    </ol>


    <form class="" action="process_create.php" method="post">
      <p>
        <input type="text" name="title" placeholder="Title" value="">
      </p>
      <p>
        <textarea name="description" placeholder="Description" rows="5" cols="50"> </textarea>
      </p>
      <p>
        <input type="submit" name="" value="submit">
      </p>

    </form>
  </body>
</html>
