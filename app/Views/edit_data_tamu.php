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
        <h1>Edit Buku Tamu!</h1>
        <form action="<?= base_url('proses_edit_data_tamu')?>" method="post">
        <input type="hidden" name="id" id="id" value="<?= $data_tamu->id?>">
        <div class="mb-3">
            <label for="tgl_berkunjung" class="form-label">Tanggal Berkunjung</label>
            <input type="text" class="form-control" id="tgl_berkunjung" name="tgl_berkunjung" placeholder=".." value="<?= $data_tamu->tgl_berkunjung?>">
        </div>
        <div class="mb-3">
            <label for="nama_tamu" class="form-label">Nama Tamu</label>
            <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" placeholder=".." value="<?= $data_tamu->nama_tamu?>">
        </div>
        <div class="mb-3">
            <label for="no_telepon" class="form-label">No Telepon</label>
            <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder=".." value="<?= $data_tamu->no_telepon?>">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder=".." value="<?= $data_tamu->alamat?>">
        </div>
        <div class="mb-3">
            <label for="keperluan" class="form-label">Keperluan</label>
            <input type="text" class="form-control" id="keperluan" name="keperluan" placeholder=".." value="<?= $data_tamu->keperluan?>">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>