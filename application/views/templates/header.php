<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="<?php echo base_url() ?>/public/css/bootstrap.css"></script>
    <script src="<?php echo base_url() ?>/public/js/bootstrap.js"></script>
</head>
</body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url() . '' ?>">DJY News</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url() . '' ?>">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                        Matkul
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url() . 'Matakuliah/' ?>">Lihat/Edit Matkul</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?php echo base_url() . 'Matakuliah/tambah_data' ?>">Tambah Matkul</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                        Prodi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url() . 'Prodi/' ?>">Lihat/Edit Prodi</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?php echo base_url() . 'Prodi/tambah_data' ?>">Tambah Prodi</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                        Mahasiswa
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url() . 'Mahasiswa/' ?>">Lihat/Edit Mahasiswa</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?php echo base_url() . 'Mahasiswa/tambah_data' ?>">Tambah Mahasiswa</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                        Dosen
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url() . 'Dosen/' ?>">Lihat/Edit Dosen</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?php echo base_url() . 'Dosen/tambah_data' ?>">Tambah Dosen</a></li>
                        <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="<?php echo base_url() . 'Jadwal/' ?>">Lihat/Edit Jadwal Dosen</a></li>
                <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="<?php echo base_url() . 'Jadwal/tambah_data' ?>">Tambah Jadwal Dosen</a></li>
            </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                    Enroll
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="<?php echo base_url() . 'Enroll/' ?>">Lihat/Edit Enroll</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="<?php echo base_url() . 'Enroll/tambah_data' ?>">Tambah Enroll</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() . 'dompdf/' ?>">DOMPDF</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() . 'Dosen/logout_session_dosen' ?>">Logout</a>
            </li>
            </ul>
        </div>
    </div>
</nav>