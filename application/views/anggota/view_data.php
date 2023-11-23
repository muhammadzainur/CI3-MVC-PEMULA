<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
  <style>
    .custom-table {
      width: 60%; 
      margin:40px auto; 
    }
    
    .custom-btns {
      margin-right: 10px;
    }

    .custom-bottom {
      margin-right: 39%;
    }
  </style>
</head>
<body>
<a class="btn btn-primary float-end custom-bottom" href="<?php echo base_url('anggota/tambah'); ?>">Tambah</a>
<table class="table table-responsive-md custom-table">
  <thead>
    <tr>
      <th>ANGGOTA</th>
      <th>ALAMAT</th>
      <th>AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($anggota as $a): ?>
    <tr>
      <td><?php echo $a['anggota'] ?></td>
      <td><?php echo $a['alamat'] ?></td>
      <td><a class="btn btn-success custom-btns" style="text-decoration:none" href="<?php echo site_url('anggota/get_edit/'.$a['idanggota']); ?>">Edit</a>
      <a class="btn btn-danger custom-btns" style="text-decoration:none;" href="<?php echo site_url('anggota/hapus/'.$a['idanggota']); ?>">Hapus</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
