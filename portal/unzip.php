<?php

//system("unzip archive.zip");
$zip = new ZipArchive;
$res = $zip->open('lms.zip');
if ($res === TRUE) {
  $zip->extractTo('./');
  $zip->close();
  echo 'Success';
} else {
  echo 'Error';
}

?>