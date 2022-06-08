<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $connect = mysqli_connect('localhost','root','','notes');
    $text = $_POST['text'];
    $sql = "INSERT INTO `task` (`text`) VALUES ('$text');";
    if ($text) {
      $run_sql = mysqli_query($connect,$sql);
      if ($run_sql) {
        echo '<p style="color:#008000;">Задача добавлена!</p>';
      }
    }
    else
    {
      echo '<p style="color:red;">Заполните поля!</p>';
    }
    }
?>