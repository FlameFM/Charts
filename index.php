<?php

if(isset($_GET['link'])){
  echo $_GET['link'];
  header('Location: http://' . $_GET['link']);
} else {
  die('No link in url Parameter!<br><a href="index.php?link=img.howtonoah.de">Nicer Hund</a>');
  echo('<a href="index.php?link=img.howtonoah.de">Nicer Hund</a>');
}

?>
