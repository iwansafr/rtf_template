<?php
if(!empty($_POST)){
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $ttl = $_POST['ttl'];

  $file = file_get_contents('template.rtf');

  $file = str_replace('[nama]', $nama, $file);
  $file = str_replace('[kelas]', $kelas, $file);
  $file = str_replace('[ttl]', $ttl, $file);

  header("Content-type: application/msword");
  header("Content-disposition: inline; filename=output.doc");
  header("Content-length: ".strlen($file));
  echo $file;
}