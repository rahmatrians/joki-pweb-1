<?php

include 'config.php';

$id     = 1;
$get    = $conx->query("SELECT * FROM mahasiswa WHERE id_mhs = '$id'");
$data   = mysqli_fetch_assoc($get);


$splits_edu = explode(".", $data['education']);
$splits_exp = explode(".", $data['experience']);
$splits_skill = explode(",", $data['skill']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="edit_process.php" method="POST">
        <label for="fullname">Nama Lengkap</label>
        <input type="text" value="<?= $data['full_name'] ?>" name="fullname" id="fullname">
        <br>
        <br>
        <label for="information">Infomasi Diri</label>
        <input type="text" value="<?= $data['about'] ?>" name="information" id="information">
        <br>
        <br>


        <!-- education form -->
        <label for="education">Pendidikan</label>
        <br>
        <button type="button" class="add-more-education">tambah</button>
        <table>
            <tr>
                <td>Nama Sekolah</td>
                <td>Jurusan</td>
                <td>Tahun Masuk</td>
                <td>Tahun Lulus</td>
            </tr>
            <?php
            foreach ($splits_edu as $edu) {
                $splitted = explode(",", $edu);
            ?>
                <tr class="multi-form-education">
                    <?php
                    foreach ($splitted as $val) {
                    ?>

                        <td>
                            <input type="text" value="<?= $val; ?>" name="education[]" id="education">
                        </td>

                    <?php
                    }
                    ?>
                    <td>
                        <button type="button" class="remove-education">hapus</button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>

        <table class="paste-new-form-education">
        </table>


        <!-- experience form -->
        <label for="education">Pengalaman</label>
        <br>
        <button type="button" class="add-more-experience">tambah</button>
        <table>
            <tr>
                <td>Nama Sekolah</td>
                <td>Jurusan</td>
                <td>Tahun Masuk</td>
                <td>Tahun Lulus</td>
            </tr>
            <?php
            foreach ($splits_exp as $exp) {
                $splitted = explode(",", $exp);
            ?>
                <tr class="multi-form-experience">
                    <?php
                    foreach ($splitted as $val) {
                    ?>

                        <td>
                            <input type="text" value="<?= $val; ?>" name="experience[]" id="experience">
                        </td>

                    <?php
                    }
                    ?>
                    <td>
                        <button type="button" class="remove-experience">hapus</button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>

        <table class="paste-new-form-experience">
        </table>



        <!-- education form -->
        <label for="skill">Keahlian</label>
        <br>
        <button type="button" class="add-more-skill">tambah</button>
        <table>
            <?php
            foreach ($splits_skill as $skill) {
            ?>
                <tr class="multi-form-skill">
                    <td>
                        <input type="text" value="<?= $skill; ?>" name="skill[]" id="skill">
                    </td>
                    <td>
                        <button type="button" class="remove-skill">hapus</button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>

        <table class="paste-new-form-skill">
        </table>
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.remove-education', function() {
                $(this).closest('.multi-form-education').remove();
            });
            $(document).on('click', '.add-more-education', function() {
                $('.paste-new-form-education').append('<tr class="multi-form-education"><td> \
                <input type = "text" name = "education[]" id = "education" >\
                <input type = "text" name = "education[]" id = "education" >\
                <input type = "text" name = "education[]" id = "education" >\
                <input type = "text" name = "education[]" id = "education" >\
                <button type="button" class="remove-education">hapus</button></td></tr>')
            });


            $(document).on('click', '.remove-experience', function() {
                $(this).closest('.multi-form-experience').remove();
            });
            $(document).on('click', '.add-more-experience', function() {
                $('.paste-new-form-experience').append('<tr class="multi-form-experience"><td> \
                <input type = "text" name = "experience[]" id = "experience" >\
                <input type = "text" name = "experience[]" id = "experience" >\
                <input type = "text" name = "experience[]" id = "experience" >\
                <input type = "text" name = "experience[]" id = "experience" >\
                <button type="button" class="remove-experience">hapus</button></td></tr>')
            });


            $(document).on('click', '.remove-skill', function() {
                $(this).closest('.multi-form-skill').remove();
            });
            $(document).on('click', '.add-more-skill', function() {
                $('.paste-new-form-skill').append('<tr class="multi-form-skill"><td> \
                <input type = "text" name = "skill[]" id = "skill" >\
                <button type="button" class="remove-skill">hapus</button></td></tr>')
            });
        });
    </script>
</body>

</html>