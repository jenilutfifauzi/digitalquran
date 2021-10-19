<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Digital Al-Qur'an - Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet" />

        <!-- js -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    </head>
    <body>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5 ">
                <div class="p-4 p-lg-5 bg-light rounded-2 text-center ">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold text-dark">Digital Al-Qur'an</h1>
                        <p class="fs-4 text-dark">Bacalah Walau Satu Huruf</p><br>
                        <a class="btn btn-warning btn-lg" href="#daftar_surah">Mulai</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4" name="daftar_surah">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <h3 class="text-center">Daftar Surah</h3>
                <div class="form-row ">    
                    <div class="form-group col-md-4 justify-content-md-center">
                        <form action="<?= base_url('Home/index/') ?>" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="keyword" placeholder="Ketik nama surah.. contoh : Al-Fatihah">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">Cari</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- tabel -->
                <table class="table table-striped" id="mydata">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Arti</th>
                    </tr>
                    </thead>
                    <tbody id="show_data">
                    <?php
                        $no = 1;
                        foreach ($data as $d) :
                    ?>
                    <tr>
                        <th scope="row"><?= $d['index']; ?></th>
                        <td>
                            <a href="<?php echo base_url();?>Home/surah/<?php echo $d['index']?>/<?= $d['surah_indonesia']; ?>" class="list-group-item list-group-item-action"> <?= $d['surah_indonesia']; ?></a>
                        </td>
                        <td><?= $d['arti']; ?></td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                    </tbody>
                </table>

            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Digital Al-Qur'an | Jenlut | Ldk Uswatun Hasanah | @2021 </p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
    </body>
</html>
