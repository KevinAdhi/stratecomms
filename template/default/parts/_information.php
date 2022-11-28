<?php
# @Author: Waris Agung Widodo <user>
# @Date:   2018-01-23T11:27:04+07:00
# @Email:  ido.alit@gmail.com
# @Filename: _home.php
# @Last modified by:   user
# @Last modified time: 2018-01-26T18:43:45+07:00

?>

<style>
    body {
        background-color: red;
    }

    a {
        text-decoration: none;
    }

    .pt20 {
        padding-top: 20px;
    }

    .ptb20 {
        padding: 20px 0;
    }

    .d-flex {
        display: flex;
    }

    .container-r {
        background-color: red;
        padding: 30px 0;
    }

    .button-b {
        background-color: blue;
        color: white;
        padding: 10px;
        /* border-radius: 20px; */
    }

    .button-w {
        background-color: white;
        color: blue;
        padding: 10px;
        /* border-radius: 20px; */
    }

    .button-b:hover {
        background-color: white;
        color: blue;
        padding: 10px;
        /* border-radius: 20px; */
    }

    .container-pic {
        background-color: paleturquoise;
    }

    .shape {
        clip-path: polygon(0 0, 50% 0, 30% 100%, 0% 100%);
        size: 50%;
    }

    .r-text {
        position: absolute;
        bottom: 15%;
        right: 20%;
        text-align: center;
        color: white;
    }
</style>

<section id="section1 container-fluid">
    <!-- <header class="c-header">
        <div class="mask"></div> -->
    <div style="background-color: black;">
        <?php
        // ------------------------------------------------------------------------
        // include navbar
        // ------------------------------------------------------------------------
        include '_navbar.php'; ?>
    </div>


    <!-- </header> -->

</section>

<div class="container-r" style="text-align: center">
    <div class="" style="color:white;">
        <h3>Selamat Datang di StrateComms</h3>
        <p>Lembaga pelatihan keahlian yang menyelenggarakan <br> bimbingan teknis dan uji kompetensi</p>
    </div>
    <div class="ptb20">
        <a href="#" class="button-b">Jadwal Sertifikasi</a>
        <a href="#" class="button-w">Pendaftaran</a>
    </div>
</div>
<div class="container-pic d-flex">
    <div class="shape">
        <img src="./images/presernt.jpg" alt="test">
    </div>
    <div class="r-text">
        <h1>150+ Peserta</h1>
        <br>
        <br>
        <p>telah berhasil lulus ujian serifikasi<br>dengan bantuan Stratecomms</p>
    </div>

</div>