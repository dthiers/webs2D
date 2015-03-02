<!DOCTYPE html>
<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 'on');
  include 'database.class.php';
  $db = new Database('week2');

?>
<html>
<head>
  <title>Week 2</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css" />

  <script type="text/javascript">
    function addRecord(){

      if(document.getElementById('surname') != null){
        var sname = document.getElementById('surname').value;
      }
      if(document.getElementById('name') != null){
        var nname = document.getElementById('name').value;
      }
      //var querytje = "INSERT INTO WSPHP_GEBRUIKERS '', " + $nname + ", " + $sname;
    }
  </script>
</head>

<body>
  <?php
  $query = "SELECT * FROM WSPHP_GEBRUIKERS";
  $db->doSQL($query);

  ?>

  <header>

  </header>

  <div id="inputdiv">

    <form action="insertRecord.php" method="POST">
      <input type="text" id="surname" name="surname">
      <input type="text" id="name" name="name">
      <input type="submit" name="submit">
    </form>

  </div>

  <div class="content">

    <table id="db_uitlezen">
      <tr>
        <th>Id</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
      </tr>
      <?php while ($row = $db->readRecord()) {?>
      <tr>
        <td><?php echo $row['geb_id']; ?></td>
        <td><?php echo $row['geb_voornaam']; ?></td>
        <td><?php echo $row['geb_achternaam']; ?></td>
      </tr>
      <?php } ?>
    </table>
  </div>


  <?php
  // Hiermee wordt een record toegevoegd aan de db.
    //$query2 = "INSERT INTO WSPHP_GEBRUIKERS VALUES ('', 'Test', 'Test')";
    //$db->addRecord($query2);
  ?>
</body>
</html>
