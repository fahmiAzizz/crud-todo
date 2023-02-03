<?php
require 'functions.php';
$query = query("SELECT * FROM todo");

if (isset($_POST['search'])) {
    $query = search($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../build.css">
    <title>Document</title>
</head>

<body>
    <header class="mx-auto my-20">
        <h1 class="text-5xl text-indigo-700 font-semibold mx-auto text-center">TO DO LIST</h1>
    </header>

    <section>
        <table border="1" class="table table-auto w-2/3 mx-auto mb-10">
            <tr>
                <th class=" w-2/12"><a href="create.php" class="border rounded-lg bg-cyan-600 py-2 px-2">Tambah Task</a></th>
                <th class="w-7/12"></th>
                <th class="w-3/12">
                    <form action="" method="post" class="flex">
                        <input type="text" name="keyword" class="w-10/12 border font-normal border-black rounded-md placeholder:italic p-1" placeholder="search...">
                        <button class="w-2/12" name="search">🔎</button>
                    </form>
                </th>
            </tr>
        </table>

        <table border="1" class="table table-auto w-2/3 mx-auto">
            <tr>
                <th class=" w-1/12">No.</th>
                <th class=" w-4/12">Tugas</th>
                <th class=" w-2/12">Waktu</th>
                <th class=" w-3/12">Keterangan</th>
                <th class=" w-2/12">Aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($query as $data) : ?>
                <tr>
                    <td class=" w-1/12 text-center"><?php echo $i; ?></td>
                    <td class=" w-4/12 "><?= $data['tugas'] ?></td>
                    <td class=" w-2/12 text-center"><?= $data['waktu'] ?></td>
                    <td class=" w-3/12 text-center"><?= $data['keterangan'] ?></td>
                    <td class=" w-2/12 text-center">
                        <a href="update.php?id=<?= $data['id']; ?>">Update</a> | <a href="delete.php?id=<?= $data['id']; ?>">Delete</a>
                    </td>
                    <?php $i++; ?>
                <?php endforeach; ?>
                </tr>
        </table>
    </section>
</body>

</html>