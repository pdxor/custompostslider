<?php
$id = $_GET['id'];
if($id == 9780062258199 ){
  $id = 9780062258236;
}
$page = file_get_contents('https://www.googleapis.com/books/v1/volumes?q=isbn:'.$id);
$data = json_decode($page, true);

echo "<h2>Title</h2>" . $data['items'][0]['volumeInfo']['title'];
echo "<br><h2>Description</h2>" . $data['items'][0]['volumeInfo']['description'];
echo "<br><h2>ISBN</h2>" . $id;
?>
