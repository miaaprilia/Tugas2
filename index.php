<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="https://s-media-cache-ak0.pinimg.com/originals/40/1e/6c/401e6ce81c674e75a47683ed4d8c4db6.jpg" alt="" width="72">
                <h2>Form Isian Index Massa Tubuh </h2>

            </div>

            <div class="row">

                <div class="col-md-12">
                    <form action="index.php" method="POST">
                        <div class="row g-3">
                            <div class="col-sm-12">
                                <label for="firstName" class="form-label">Nama Lengkap</label>
                                <input id="nama_lengkap" required="" name="nama_lengkap" type="text" class="form-control">

                            </div>
                            <div class="col-sm-12">
                                <label for="firstName" class="form-label">Berat Badan</label>
                                <input id="nilai_uts" required="" name="berat_badan" type="text" class="form-control">

                            </div>
                            <div class="col-sm-12">
                                <label for="firstName" class="form-label">Tinggi Badan</label>
                                <input id="nilai_uas" required="" name="tinggi_badan" type="number" class="form-control">

                            </div>

                            <div class="col-sm-12">
                                <label for="firstName" class="form-label">Umur</label>
                                <input id="Nilai Praktik" required="" name="umur" type="number" class="form-control">

                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label> Jenis Kelamin </label>
                                    <div class="input-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki">
                                            <label class="form-check-label">Laki-Laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan">
                                            <label class="form-check-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="w-100 btn btn-primary btn-lg" type="submit" name="proses">Submit</button>
                    </form>
                </div>
            </div>
        </main>
        <?php
        require_once "Class_BIM.php";
        if (isset($_POST['proses'])) {
            $nama = $_POST['nama_lengkap'];
            $beratBadan = $_POST['berat_badan'];
            $tinggiBadan = $_POST['tinggi_badan'];
            $umur = $_POST['umur'];
            $jenisKelamin = $_POST['jenis_kelamin'];
            $pasien = new bimPasien($nama, $beratBadan, $tinggiBadan, $umur, $jenisKelamin);
        }
        ?>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card" ">
                    <div class=" card-body">
                    <h5 class="card-title">
                        <center> Hasil Evaluasi BMI </center>
                    </h5>
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td> : </td>
                            <td><?= $nama ?></td>
                        </tr>
                        <tr>
                            <td>Berat Badan</td>
                            <td> : </td>
                            <td><?= $beratBadan ?></td>
                        </tr>
                        <tr>
                            <td>Tinggi Badan</td>
                            <td> : </td>
                            <td><?= $tinggiBadan ?></td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td> : </td>
                            <td><?= $umur ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td> : </td>
                            <td> <?= $jenisKelamin ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">

    </footer>
    </div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script src="form-validation.js"></script>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>