<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Buku Tamu!</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tanggal Berkunjung</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Telepon</th>
      <th scope="col">User Penerima</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($all_data_tamu as $tamu): ?>
        <tr>
        <th scope="row">1</th>
        <th scope="col"><?= $tamu->tgl_berkunjung?></th>
        <th scope="col"><?= $tamu->nama_tamu?></th>
        <th scope="col"><?= $tamu->alamat?></th>
        <th scope="col"><?= $tamu->no_telepon?></th>
        <th scope="col"><?= $tamu->username?></th>
        <th scope="col">
        <a href="<?= base_url('edit_data_tamu').'/'.$tamu->id?>" class="btn btn-info btn-sm">Edit</a>
        <a href="<?= base_url('delete_data_tamu').'/'.$tamu->id?>" class="btn btn-danger btn-sm">Delete</a>

        </th>
        </tr>
    <?php endforeach?>
  </tbody>
</table>
<br>
<a href="<?= base_url('add_data_tamu')?>" class="btn btn-primary">+ Tambah Data</a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>