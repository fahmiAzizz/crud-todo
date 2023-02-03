<?php
require 'functions.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM todo WHERE id='$id'");
if (isset($_POST["update"])) {
    update($_POST);
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
            <h1 class="text-center text-4xl text-white font-bold pb-6">UPDATE TASK</h1>
            <table class="text-white">
                <?php while ($d = mysqli_fetch_assoc($data)) : ?>
                    <form action="" method="post">
                        <tr>
                            <input type="hidden" name="id" value="<?php echo $d["id"]; ?>">
                            <div class="w-full py-3">
                                <label class="w-4/12 pr-14" for="tugas">Tugas</label>
                                <input required class="w-8/12 text-black p-1 rounded-md" type="text" name="tugas" id="tugas" value="<?php echo $d["tugas"]; ?>">
                            </div>
                        </tr>
                        <tr>
                            <div class="w-full py-3">
                                <label class="w-4/12 pr-14" for="waktu">Waktu</label>
                                <input required class="w-4/12  text-black p-1 rounded-md" type="date" name="waktu" id="waktu" value="<?php echo $d["waktu"]; ?>">
                            </div>
                        </tr>
                        <tr>
                            <div class="w-full py-3">
                                <label class="w-4/12 pr-4" for="keterangan">Keterangan</label>
                                <input required class="w-8/12  text-black p-1 rounded-md" type="text" name="keterangan" id="keterangan" value=" <?php echo $d["keterangan"]; ?>"">
                            </div>
                        </tr>
                        <tr>
                            <div class=" mx-auto pt-8">
                                <button class="text-center  rounded-lg mx-auto align-middle block p-2 bg-green-500 " name="update">Edit Task!</button>
                            </div>
                        </tr>
                    </form>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</body>

</html>