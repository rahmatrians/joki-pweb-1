<!--Ini adalah script header. Berisi head, body, dan juga inline css
Nama: M.Ardiansyah
NIM: 41519010023-->


<?php

include 'config.php';

$id = 1;
$get = $conx->query("SELECT * FROM mahasiswa WHERE id_mhs = '$id'");
$data = mysqli_fetch_assoc($get);

$splits_edu = explode(".", $data['education']);
$splits_exp = explode(".", $data['experience']);
$splits_skill = explode(".", $data['skill']);

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!--Source font-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!--Source font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>M.Ardiansyah (41519010023)</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html {
            height: 100%;
            width: 100%;
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: 'Roboto', normal !important;
            /*background-color: #1e1e1e;*/
            background-color: white;
            color: white !important;
        }

        header {
            position: relative;
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)), url("images/bg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
            height: 850px;
        }

        header #sect-title {
            position: absolute;
            text-align: center;
            width: 50%;
            left: 25%;
            top: 35%;
        }

        header p#mainTitle {
            font-size: 50px;
            font-weight: 500;
            font-family: 'Montserrat', sans-serif;
            margin: 0 !important;
            /*color: #ffe004;*/
        }

        header p#secTitle {
            margin-top: 20px;
            font-size: 60px;
            font-family: 'Montserrat', sans-serif;
            letter-spacing: 5px;
            color: #ffe004;
        }

        section.content {
            padding: 80px 20px;
        }

        .row {
            display: flex;
            flex: 1 0 100%;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .col-set {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-full {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .container {
            /*width: 100%;*/
            width: 1140px;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .progress-bar {
            width: 100%;
            background-color: darkgray;
            border-radius: 20px;
        }

        .bar {
            text-align: right;
            /*margin-right: 10px;*/
            padding-right: 10px;
            padding-top: 10px;
            padding-bottom: 10px;
            color: white;
        }

        .office {
            width: 80%;
            background-color: #bd2525;
            border-radius: 20px;
        }

        .lightroom {
            width: 90%;
            background-color: #1c46b9;
            border-radius: 20px;
        }

        .premiere {
            width: 75%;
            background-color: #742dd1;
            border-radius: 20px;
        }

        .networking {
            width: 80%;
            background-color: #cad43b;
            border-radius: 20px;
        }

        .hardware {
            width: 80%;
            background-color: #5aa543;
            border-radius: 20px;
        }

        .cplus {
            width: 75%;
            background-color: #44c2c2;
            border-radius: 20px;
        }

        .form-group {
            position: relative;
            margin: 20px 20px 20px 0;
        }

        label {
            font-size: 14px;
            position: absolute;
            top: -11px;
            background-color: white;
            left: 10px;
            padding: 0 5px;
            color: #636363;
        }

        .form-control {
            width: 100%;
            padding: 10px 10px;
            border-radius: 3px;
            /* border: 1px solid #999999; */
        }

        button.btn-submit {
            width: 100%;
            padding: 10px 30px 10px 30px;
            background-color: #2885b7;
            border: 1px solid #2885b7;
            border-radius: 5px;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        input {
            /*background-color: transparent;*/
            border: 2px solid #d7d7d7;
            border-radius: 10px;
        }

        textarea {
            /*background-color: transparent;*/
            border: 2px solid #d7d7d7;
            border-radius: 10px;
        }

        footer {
            padding: 30px;
            background-color: #2c2c2c;
        }

        a.sm-link {
            color: white;
        }

        a.sm-link:hover {
            opacity: 0.5;
        }

        ul li {
            list-style: none;
        }

        a#btn-kebawah {
            text-decoration: none;
        }

        #btn-kebawah {
            padding: 10px 65px;
            /*border: 2px solid #ffe004;*/
            background-color: #048aff;
            border-radius: 20px;
            color: white;
            text-transform: uppercase;
        }
    </style>
</head>

<body>

    <header>
        <div id="sect-title">
            <p id="mainTitle">Hello</p>
            <p id="secTitle"><span style="font-weight: 300">I Am</span> <span style="font-weight: 600;"><?= $data['full_name'] ?>
                </span></p>
            <!--        <p id="infoTitle">082112554051 | ardiansyah3544@gmail.com</p>-->
            <a href="#started" id="btn-kebawah" style="margin-right: 20px;">Click Here !</a>
        </div>
    </header>

    <section class="content" id="started">
        <div class="container">
            <div class="row">
                <div class="col-set">
                    <div style="text-align: center;">
                        <img src="images/profile-img.png" width="60%" alt="">
                    </div>
                </div>
                <div class="col-set">
                    <h1 style="font-size: 35px;margin-bottom: 10px;color: black">About Me.</h1>
                    <div style="width: 50px; height: 7px; background-color: #ffcf1f;"></div>
                    <p style="font-size: 18px; line-height: 35px; color: black;text-justify: inter-word;"><?= $data['about'] ?>
                    </p>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </section>

    <section class="content" style="background-color: rgb(235, 233, 233);">
        <div class="container">
            <div class="row">
                <div class="col-full" style="margin-bottom: 50px;">
                    <h1 style="font-size: 35px;margin-bottom: 10px;color: black; text-align: center;">SCHOOL</h1>
                    <div style="width: 160px; height: 7px; background-color: #2885b7; margin: auto;"></div>
                </div>
                <div class="col-set" style="padding: 0px 20px; text-align: center; margin-left: auto; margin-right: auto">
                    <ul>

                        <?php
                        $temp_edu = [];
                        foreach ($splits_edu as $edu) {
                            $splitted = explode(",", $edu);
                        ?>
                            <li>
                                <?php
                                foreach ($splitted as $val) {
                                    array_push($temp_edu, $val);
                                ?>

                                <?php
                                }
                                ?>
                                <p style="color: black;"><b><?= $temp_edu[0]; ?>
                                    </b></p>
                                <p style="color: black;"><?= $temp_edu[1]; ?></p>
                                <p style="color: black;">( <?= $temp_edu[2]; ?> - <?= $temp_edu[3]; ?> )</p>
                                <br>

                            </li>
                        <?php
                            $temp_edu = [];
                        }
                        ?>

                    </ul>
                </div>
    </section>

    <section class="content" style="background-color: rgb(219, 219, 219);">
        <div class="container">
            <div class="row">
                <div class="col-full" style="margin-bottom: 50px;">
                    <h1 style="font-size: 35px;margin-bottom: 10px;color: black; text-align: center;">EXPERIENCE</h1>
                    <div style="width: 230px; height: 7px; background-color: #be8d31; margin: auto;"></div>
                </div>
                <div class="col-set" style="padding: 0px 20px; text-align: center; margin-left: auto; margin-right: auto">
                    <ul>

                        <?php
                        $temp_exp = [];
                        foreach ($splits_exp as $exp) {
                            $splitted = explode(",", $exp);
                        ?>
                            <li>
                                <?php
                                foreach ($splitted as $val) {
                                    array_push($temp_exp, $val);
                                ?>

                                <?php
                                }
                                ?>
                            <li>
                                <p style="color: black; margin-right: 40px"><b><?= $temp_exp[0]; ?>
                                    </b></p>
                                <p style="color: black; margin-right: 40px"><?= $temp_exp[1]; ?></p>
                                <p style="color: black; margin-right: 40px">( <?= $temp_exp[2]; ?> - <?= $temp_exp[3]; ?> )</p>
                                <br>

                            </li>
                        <?php
                            $temp_exp = [];
                        }
                        ?>

                    </ul>
                </div>
    </section>

    <section class="content" style="background-color: rgb(206, 205, 205);">
        <div class="container">
            <div class="row">
                <div class="col-full" style="margin-bottom: 50px;">
                    <h1 style="font-size: 35px;margin-bottom: 10px;color: black; text-align: center;">My Skills.</h1>
                    <div style="width: 165px; height: 7px; background-color: #35ac59; margin: auto;"></div>
                </div>
                <div class="col-set" style="padding: 5px 20px;">
                    <ul>
                        <?php
                        $temp_exp = [];
                        foreach ($splits_exp as $exp) {
                            $splitted = explode(",", $exp);
                        ?>
                            <li>
                                <?php
                                foreach ($splitted as $val) {
                                    array_push($temp_exp, $val);
                                ?>

                                <?php
                                }
                                ?>
                            <li>
                                <p style="color: black;"><b>Adobe Lightroom</b></p>
                                <div class="progress-bar">
                                    <div class="bar lightroom">90%</div>
                                </div>
                                <br>

                            </li>
                        <?php
                            $temp_exp = [];
                        }
                        ?>

                        <li>
                            <p style="color: black;"><b>Adobe Lightroom</b></p>
                            <div class="progress-bar">
                                <div class="bar lightroom">90%</div>
                            </div>
                        </li>
                        <li>
                            <p style="color: black;"><b>Adobe Premiere Pro</b></p>
                            <div class="progress-bar">
                                <div class="bar premiere">75%</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-set" style="padding: 0 20px;">
                    <ul>
                        <li>
                            <p style="color: black;"><b>Networking (Cisco)</b></p>
                        </li>
                        <li>
                            <p style="color: black;"><b>Hardware Maintenance</b></p>
                        </li>
                        <li>
                            <p style="color: black;"><b>C++</b></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-full">
                    <h1 style="font-size: 35px;margin-bottom: 10px;color: black; text-align: center;">Contact Me.</h1>
                    <div style="width: 80px; height: 7px; background-color: #ffcf1f; margin: auto;"></div>
                    <div style="margin-bottom: 50px;"></div>
                    <form action="" style="width: 60%; margin: auto;">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="nama" id="nama" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="pesan" class="form-control" id="pesan" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn-submit" onclick="test()">Send</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <script>
        function test() {
            let field_nama = document.getElementById('nama');
            let field_email = document.getElementById('email');
            let field_pesan = document.getElementById('pesan');

            if (field_nama.value === '') {
                alert("Isi nama kamu dulu!");
            } else if (field_email.value === '') {
                alert("Isi email kamu dulu!");
            } else if (field_pesan.value === '') {
                alert("Isi pesan!");
            } else {
                location.reload();
            }
        }
    </script>

</body>

</html>