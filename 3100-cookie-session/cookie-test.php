<?php
if (isset($_COOKIE["username"])) {
  echo "username=".htmlentities($_COOKIE["username"]);
} else {
  setcookie("username", "pochi", time() + 3600);
  echo "setcookie!!";
}
