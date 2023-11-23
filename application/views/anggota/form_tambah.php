<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo base_url('anggota/insert'); ?>" method="post">
    <label>Anggota</label>
    <input type="text" name="anggota">
    <br>
    <label>Alamat</label>
    <input type="text" name="alamat">
    <br>
    <input type="submit" name="simpan" value="simpan">
  </form>
</body>
</html>