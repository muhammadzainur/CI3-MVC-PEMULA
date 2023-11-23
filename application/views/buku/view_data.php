<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<a style="text-decoration:none" href="<?php echo base_url('buku/tambah'); ?>">Tambah</a>
<table border="1">
  <thead>
    <tr>
      <th>Judul</th>
      <th>Penerbit</th>
      <th>Pengarang</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($buku as $a): ?>
    <tr>
      <td><?php echo $a['judul'] ?></td>
      <td><?php echo $a['penerbit'] ?></td>
      <td><?php echo $a['pengarang'] ?></td>
      <td><a style="text-decoration:none" href="<?php echo site_url('buku/get_edit/'.$a['id']); ?>">Edit</a>
      <a style="text-decoration:none;" href="<?php echo site_url('buku/hapus/'.$a['id']); ?>">Hapus</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>
