<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo base_url('anggota/update'); ?>" method="post">
    <label>Anggota</label>
    <input type="text" name="anggota" value="<?php echo $anggota ?>">
    <input type="hidden" name="idanggota" value="<?php echo $idanggota ?>"> 
    <br>
    <label>Alamat</label>
    <input type="text" name="alamat" value="<?php echo $alamat ?>">
    <br>
    <input type="submit" name="simpan" value="simpan">
  </form>
</body>
</html>