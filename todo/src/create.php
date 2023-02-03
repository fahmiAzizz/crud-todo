<?php
require 'functions.php';
if (isset($_POST['add-btn'])) {
    tambah($_POST);
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="../build.css">
    <title>Document</title>
</head>

<body>
    <div class=" max-w-lg mx-auto mt-36">
        <div class="mx-auto bg-indigo-600 px-8 py-8 rounded-xl text-white">
            <h1 class="text-center text-4xl text-white font-bold pb-6">Menambahkan Task</h1>
            <table class="text-white">
                <form action="" method="post">
                    <tr>
                        <div class="w-full py-3">
                            <label class="w-4/12 pr-14" for="tugas">Tugas</label>
                            <input required class="w-8/12 text-black p-1 rounded-md" type="text" name="tugas" id="tugas">
                        </div>
                    </tr>
                    <tr>
                        <div class="w-full py-3">
                            <label class="w-4/12 pr-14" for="waktu">Waktu</label>
                            <input required class="w-4/12  text-black p-1 rounded-md" type="date" name="waktu" id="waktu">
                        </div>
                    </tr>
                    <tr>
                        <div class="w-full py-3">
                            <label class="w-4/12 pr-4" for="keterangan">Keterangan</label>
                            <input required class="w-8/12  text-black p-1 rounded-md" type="text" name="keterangan" id="keterangan">
                        </div>
                    </tr>
                    <tr>
                        <div class="mx-auto pt-8">
                            <button class="text-center rounded-lg mx-auto align-middle block p-2 bg-green-500 " name="add-btn">Tambah Task!</button>
                        </div>
                    </tr>
                </form>
            </table>
        </div>
    </div>
</body>

</html>