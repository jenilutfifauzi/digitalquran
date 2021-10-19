<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Digital Al-Qur'an - Surah</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet" />
        
        <!-- css arab -->
        <style>

            @font-face {
                font-family: 'Uthmani';
                src: url('assets/font/UthmanicHafs1Ver09.otf') format('truetype');
            }
            .arabic {
                font-family: 'Uthmani', serif;
                font-size: 35px;
                font-weight: normal;
                direction: rtl;
                padding: 0 5px;
                margin: 0;
            }
            .scroll {
                color: #fff;
                margin-top: 100px
            }

            #toTopBtn {
                position: fixed;
                bottom: 26px;
                right: 39px;
                z-index: 98;
                padding: 21px;
                background-color: hsla(5, 76%, 62%, .8)
            }

            .js .cd-top--fade-out {
                opacity: .5
            }

            .js .cd-top--is-visible {
                visibility: visible;
                opacity: 1
            }

            .js .cd-top {
                visibility: hidden;
                opacity: 0;
                transition: opacity .3s, visibility .3s, background-color .3s
            }

            .cd-top {
                position: fixed;
                bottom: 20px;
                bottom: var(--cd-back-to-top-margin);
                right: 20px;
                right: var(--cd-back-to-top-margin);
                display: inline-block;
                height: 40px;
                height: var(--cd-back-to-top-size);
                width: 40px;
                width: var(--cd-back-to-top-size);
                box-shadow: 0 0 10px rgba(0, 0, 0, .05) !important;
                background: url(https://res.cloudinary.com/dxfq3iotg/image/upload/v1571057658/cd-top-arrow.svg) no-repeat center 50%;
                background-color: hsla(5, 76%, 62%, .8);
                background-color: hsla(var(--cd-color-3-h), var(--cd-color-3-s), var(--cd-color-3-l), 0.8)
            }      
        </style>

    </head>
    <body>
    <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>     
        <!-- Header-->
        <!-- Page Content-->
        <section class="pt-4" name="daftar_surah">
            <div class="container px-lg-5">
                <!-- mengambil segment -->
                <?php $id = $this->uri->segment(3); ?>
                <!-- tombol ke menu surah -->
                <a class="nav-link active" href="<?php echo base_url();?>Home">Kembali ke daftar surah</a><br>
                <!-- nama surah -->
    <div class="container px-lg-4 ">
        <div class="p-4 p-lg-4 bg-light rounded-2 text-center ">
            <div class="m-4 m-lg-4">
            <div class="text-center">
                <h3><?php echo $isidata['surah_indonesia']; ?></h3>
                <p>(
                    Artinya <?php echo $isidata['arti']; ?>,
                    terdiri dari <?php echo $isidata['jumlah_ayat']; ?> ayat,
                    diturunkan dikota <?php echo $isidata['tempat_turun']; ?>)
                </p>
            </div>
            </div>
        </div><br>
    </div>
    
                <!-- bismillah -->
            <?php 
            if ($id == 1 ){
                // isikosong
            }else if($id == 9){
                //isikosong
            }else{
                foreach($bismillah as $b) :
                    echo "<p class='text-center arabic'>",$b['ayat'],"</p><hr>";
                endforeach;
            }
            ?>


            <!-- isi ayat sesuai surah -->
                    <?php 
                     
                    $no = 1;
                    foreach($baru as $u){ 
                    ?>
                        <div class="btn btn-warning mb-2"><h6 class="text-left"><?= $u['nomor_ayat']; ?></h6></div>
                        <p class="arabic"><?php echo $u['ayat']; ?><br><br>
                        <p class="latin"><?php echo $u['latin']; ?></p>
                        <p class="latin"><?php echo $u['arti_ayat']; ?></p>
                        <hr size="3" >
                    <?php } ?>
            </div>
            
        </section>
        <!-- back top -->

        </div><br>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Digital Al-Qur'an | Jenlut | Ldk Uswatun Hasanah | @2021 </p></div>
        </footer>
        

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
        <script>
            $(document).ready(function() {
            $(window).scroll(function() {
            if ($(this).scrollTop() > 20) {
            $('#toTopBtn').fadeIn();
            } else {
            $('#toTopBtn').fadeOut();
            }
            });

            $('#toTopBtn').click(function() {
            $("html, body").animate({
            scrollTop: 0
            }, 1000);
            return false;
            });
            });

        </script>
    </body>
</html>
