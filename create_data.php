<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>

    <button class="add-more">tambah</button>
    <form action="create_process.php" method="POST">
        <label for="fullname">Nama Lengkap</label>
        <input type="text" name="fullname" id="fullname">
        <br>
        <br>
        <label for="information">Infomasi Diri</label>
        <input type="text" name="information" id="information">
        <br>
        <br>
        <label for="education">Pendidikan</label>
        <input type="text" name="education" id="education">
        <div class="paste-new-form"></div>
        <br>
        <br>
        <label for="experience">Pengalaman</label>
        <input type="text" name="experience" id="experience">
        <br>
        <br>
        <label for="skill">Keahlian</label>
        <input type="text" name="skill" id="skill">
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.remove', function() {
                $(this).closest('.multi-form').remove();
            });
            $(document).on('click', '.add-more', function() {
                $('.paste-new-form').append('<div class="multi-form"><label for="education">Pendidikan</label>\
                <input type = "text"name = "education" id = "education" >\
                <button type="button" class="remove">hapus</button><br></div>')
            });
        });
    </script>
</body>

</html>