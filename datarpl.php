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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>OK!</title>
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="bg-dark">
    <div class="container ">
        <div class="card mt-5 col-10 mx-auto">
            <div class="card-body">

                <!-- Sidebar -->
                <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i data-feather="chevron-right"></i>
                </button>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header bg-secondary">
                        <h5 class="offcanvas-title font-weight-bold text-white" id="offcanvasExampleLabel">Data siswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div>
                            Rekayasa Perangkat Lunak
                        </div>
                        <div class="dropdown mt-2">
                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                Kelas
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Kelas XII</a></li>
                                <li><a class="dropdown-item" href="#">Kelas XI</a></li>
                                <li><a class="dropdown-item" href="#">Kelas X</a></li>

                            </ul>
                        </div>
                        <br>
                        <div>
                            Tata Boga
                        </div>
                        <div class="dropdown mt-2">
                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                Kelas
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Kelas XII</a></li>
                                <li><a class="dropdown-item" href="#">Kelas XI</a></li>
                                <li><a class="dropdown-item" href="#">Kelas X</a></li>
                            </ul>
                        </div>
                        <br>
                        <div>
                            Tata Busana
                        </div>
                        <div class="dropdown mt-2">
                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                Kelas
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Kelas XII</a></li>
                                <li><a class="dropdown-item" href="#">Kelas XI</a></li>
                                <li><a class="dropdown-item" href="#">Kelas X</a></li>
                            </ul>
                        </div>
                        <br>
                        <div>
                            Tata Kecantikan
                        </div>
                        <div class="dropdown mt-2">
                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                Kelas
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Kelas XII</a></li>
                                <li><a class="dropdown-item" href="#">Kelas XI</a></li>
                                <li><a class="dropdown-item" href="#">Kelas X</a></li>
                            </ul>
                        </div>
                        <br>
                        <div>
                            Akomodasi Perhotelan
                        </div>
                        <div class="dropdown mt-2">
                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                Kelas
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Kelas XII</a></li>
                                <li><a class="dropdown-item" href="#">Kelas XI</a></li>
                                <li><a class="dropdown-item" href="#">Kelas X</a></li>
                            </ul>
                        </div>
                        <br>
                        <div>
                            Usaha Lintas Pariwisata
                        </div>
                        <div class="dropdown mt-2">
                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                Kelas
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Kelas XII</a></li>
                                <li><a class="dropdown-item" href="#">Kelas XI</a></li>
                                <li><a class="dropdown-item" href="#">Kelas X</a></li>
                            </ul>
                        </div>
                        <br>
                        <div>
                            Seni Musik
                        </div>
                        <div class="dropdown mt-2">
                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                Kelas
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Kelas XII</a></li>
                                <li><a class="dropdown-item" href="#">Kelas XI</a></li>
                                <li><a class="dropdown-item" href="#">Kelas X</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i data-feather="user-plus"></i>
                </button>



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
                        // Query untuk mengambil data dari tabel 'datarpl'
                        $query = "SELECT * FROM datarpl ORDER BY Absen ASC";
                        $result = mysqli_query($konek, $query);

                        while ($data = mysqli_fetch_assoc($result)) :
                        ?>
                            <tr class="text-center">
                                <td><?= $data['Absen'] ?></td>
                                <td><?= $data['Nama'] ?></td>
                                <td><?= $data['Usia'] ?></td>
                                <td><?= $data['Gender'] ?></td>
                                <td class="text-center">
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="menu"></i>
                                        </button>
                                        <ul class="dropdown-menu text-center">
                                            <a href="#" class="btn btn-warning btn-sm" onclick="ubahData()"><i data-feather="edit"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm " onclick="konfirmasiHapus(<?= $data['Absen'] ?>)"><i data-feather="trash-2"></i></a>
                                        </ul>
                                    </div>

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
                            <form method="POST" action="tambahdatarpl.php">
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
                                    <button type="submit" class="btn btn-primary" name="bsimpan" id="simpan" onclick="simpanData()">Simpan</button>
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
        function ubahData() {
            Swal.fire('Ubah data berhasil!', '', 'success');
        }

        function simpanData() {
            Swal.fire('Ubah data berhasil!', '', 'success');
        }

        function konfirmasiHapus(idAbsen) {
            Swal.fire({
                title: 'Konfirmasi Hapus',
                text: 'Apakah Anda yakin ingin menghapus data ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    hapusData(idAbsen);
                }
            });
        }

        function hapusData(idAbsen) {
            $.ajax({
                type: "POST",
                url: "hapusdatarpl.php",
                data: {
                    absen: idAbsen
                },
                success: function(response) {
                    if (response === "success") {
                        // Setelah penghapusan berhasil, tampilkan SweetAlert
                        Swal.fire({
                            title: 'Hapus data berhasil!',
                            icon: 'success'
                        }).then((result) => {
                            if (result.isConfirmed || result.isDismissed) {
                                // Refresh halaman atau lakukan tindakan lain yang diperlukan
                                location.reload();
                            }
                        });
                    } else {
                        Swal.fire('Hapus data gagal!', '', 'error');
                    }
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>