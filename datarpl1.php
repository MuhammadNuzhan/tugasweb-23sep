<?php
include "koneksi.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>OK!</title>
</head>

<body class="bg-dark">
    <div class="container ">
        <div class="card mt-5 col-10 mx-auto">
            <div class="card-body">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Tambah Data
                </button>

                <!-- Sidebar -->
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    Open Sidebar
                </button>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title font-weight-bold" id="offcanvasExampleLabel">Data siswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div>
                            Siswa
                        </div>
                        <div class="dropdown mt-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                Kompetensi Keahlian
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Rekayasa Perangkat Lunak</a></li>
                                <li><a class="dropdown-item" href="#">Tata Busana</a></li>
                                <li><a class="dropdown-item" href="#">Tata Boga</a></li>
                                <li><a class="dropdown-item" href="#">Tata Kecantikan</a></li>
                                <li><a class="dropdown-item" href="#">AkomodasiPerhotelan</a></li>
                                <li><a class="dropdown-item" href="#">Usaha Lintas Wisata</a></li>
                                <li><a class="dropdown-item" href="#">Seni Musik</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->

                <table class="table table-striped mt-3 text-center">
                    <thead>
                        <tr>
                            <th class="col-1">Absen</th>
                            <th class="col-1">Nama</th>
                            <th class="col-1">Usia</th>
                            <th class="col-1">Gender</th>
                            <th class="col-1">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $tampil = mysqli_query($konek, "SELECT * FROM datarpl ORDER BY absen ASC");
                        while ($data = mysqli_fetch_array($tampil)) :
                        ?>

                            <tr class="text-center">
                                <td><?= $data['Absen'] ?></td>
                                <td><?= $data['Nama'] ?></td>
                                <td><?= $data['Usia'] ?></td>
                                <td><?= $data['Gender'] ?></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-warning outline btn-sm" id="tombol" onclick="alert('Ubah')">Ubah</a>
                                    <a href="hapusdatarpl.php?absen=<?= $data['Absen'] ?>" class="btn btn-danger btn-sm" id="delete" onclick="alerthapus()">Hapus</a>
                                </td>
                            </tr>


                        <?php endwhile; ?>
                    </tbody>
                </table>

                <!-- Modal 1-->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="tambahdata.php">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Absen</label>
                                        <input type="text" class="form-control" name="absen" placeholder="Nomer Absen">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Usia</label>
                                        <input type="text" class="form-control" name="usia" placeholder="Usia">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Gender</label>
                                        <select class="form-select" name="gender">
                                            <option></option>
                                            <option>Laki-Laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary" name="bsimpan" id="simpan" onclick="alert('Simpan')">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal 2-->

            </div>
        </div>
    </div>
    <script>
        //MENGGUNAKAN SATU FUNCTION UNTUK RESULT
        function alert(aksi) {
            Swal.fire(`Data Berhasil di ${aksi.toLowerCase()}!`, '', 'success');
        }

        // MENGGUNAKAN ID="SIMPAN"
        // document.querySelector('#simpan').addEventListener('click', function() {
        //     Swal.fire({
        //         title: 'SUKSES',
        //         text: 'Data Berhasil didisimpan',
        //         icon: 'success',
        //         confirmButtonText: 'OK'
        //     });

        // });

        //MENGGUNAKAN FUNCTION
        // function ubahalert() {
        //   Swal.fire({
        //         title: 'SUKSES',
        //         text: 'Data Berhasil diubah',
        //         icon: 'success',
        //         confirmButtonText: 'OK'
        //     });
        //   }

        //ALERT HAPUS DENGAN FUNCTION
        function alerthapus() {
            Swal.fire({
                title: 'Konfirmasi Hapus',
                text: 'Apakah Anda yakin ingin menghapus item ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {

                    Swal.fire('Item telah dihapus!', '', 'success');
                }
            });
        }

        //  MENGGUNAKAN SATU FUNCTION UNTUK BEBERAPA ALERT
        // function alert(aksi) {
        //     Swal.fire({
        //         title: `Konfirmasi ${aksi}`,
        //         text: `Apakah Anda yakin ingin ${aksi.toLowerCase()} item ini?`,
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonText: `Ya, ${aksi}!`,
        //         cancelButtonText: 'Batal'
        //     }).then((result) => {
        //         if (result.isConfirmed) {

        //             Swal.fire(`Item telah ${aksi.toLowerCase()}!`, '', 'success');
        //         }
        //     });
        // }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>