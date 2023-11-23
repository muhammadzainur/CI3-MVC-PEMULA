<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo base_url('buku/update'); ?>" method="post">
    <label>Judul</label>
    <input type="text" name="judul" value="<?php echo $judul ?>">
    <input type="hidden" name="id" value="<?php echo $id ?>"> 
    <br>
    <label>penerbit</label>
    <input type="text" name="penerbit" value="<?php echo $penerbit ?>">
    <br>
    <label>Penerbit</label>
    <input type="text" name="pengarang" value="<?php echo $pengarang ?>">
    <br>
    <input type="submit" name="simpan" value="simpan">
  </form>
</body>
</html>