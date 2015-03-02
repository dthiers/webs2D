<?php

include 'database.class.php';
$db = new Database('week2');

if(isset($_POST['surname'])){
  $surname = $_POST['surname'];
  $name = $_POST['name'];

    $queryAdd = "INSERT INTO WSPHP_GEBRUIKERS VALUES ('', '$surname', '$name')";
    $db->addRecord($queryAdd);
}
else {
  echo "Je moet waardes invullen kneus";
}
?>
<html>
<head>
  <title>Insert person</title>
  <script type="text/javascript">
    setTimeout(function(){
      window.location = "home.php";
    }, 2000);
  </script>
</head>
<body>Een moment geduld, u wordt automatisch teruggestuurd</body>
</html
