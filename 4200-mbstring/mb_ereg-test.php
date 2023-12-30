<?php
$input = "123-4567";

if (mb_ereg('^[0-9]{3}-[0-9]{4}$', $input)) {
  echo "match";
} else {
  echo "not match";
}

var_dump(mb_ereg('[0-9]{3}-([0-9]{4})', $input));


