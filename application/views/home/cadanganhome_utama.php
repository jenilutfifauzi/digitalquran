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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.dataTables.css">
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-warning kotak-atas">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="#!"><b>Digi</b>tal Al-Qur'an</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5">
        
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">Digital Al-Qur'an</h1>
                        <p class="fs-4">Bacalah Walau Satu Huruf</p>
                        <a class="btn btn-warning btn-lg" href="#daftar_surah">Mulai</a>
                    </div>
                </div>
            </div>
           
        </header>
        <!-- Page Content-->
        <section class="pt-4" name="daftar_surah">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <!-- judul -->
                <h3 class="text-center">Daftar Surah</h3>

                <!-- tabel -->
                <table class="table table-striped" id="mydata">
                    <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Arti</th>
                        <th scope="col">Jumlah Ayat</th>
                    </tr>
                    </thead>
                    <tbody id="show_data">
                    
                    </tbody>
                </table>

            </div>

                    <!-- js search -->
                    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
                    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
                    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>
                    <script type="text/javascript">
                    $(document).ready(function(){
                        tampil_data_surah();	//pemanggilan fungsi tampil barang.
                        
                        $('#mydata').dataTable();
                        
                        //fungsi tampil barang
                        function tampil_data_surah(){
                            $.ajax({
                                type  : 'ajax',
                                url   : '<?php echo base_url()?>Home/data_surah',
                                async : false,
                                dataType : 'json',
                                success : function(data){
                                    var html = '';
                                    var i;
                                    for(i=0; i<data.length; i++){
                                        html += '<tr>'+
                                                '<td>'+data[i].surah_indonesia+'</td>'+
                                                '<td>'+data[i].arti+'</td>'+
                                                '<td>'+data[i].jumlah_ayat+'</td>'+
                                                '</tr>';
                                    }
                                    $('#show_data').html(html);
                                }

                            });
                        }

                    });

                </script>

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
