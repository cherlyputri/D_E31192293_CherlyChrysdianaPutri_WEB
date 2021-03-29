<!-- Begin page content -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E31192043 - M. Tahajudin Arrofi</title>
</head>
<body>
<main class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Daftar Angkatan</h1>
        <table border="1";>
            <thead>
                <tr>
                    <th scope="col" style="width: 70px;">No</th>
                    <th scope="col">Tahun</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($angkatan as $row) : ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $row['tahun']; ?></td>
                    </tr>
                    <?php $no++ ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>    
</body>
</html>
