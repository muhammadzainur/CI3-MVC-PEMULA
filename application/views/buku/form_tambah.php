<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo base_url('buku/insert'); ?>" method="post">
    <label>Judul</label>
    <input type="text" name="judul">
    <br>
    <label>Penerbit</label>
    <input type="text" name="penerbit">
    <br>
    <label>Pengarang</label>
    <input type="text" name="pengarang">
    <br>
    <input type="submit" name="simpan" value="simpan">
  </form>
</body>
</html>