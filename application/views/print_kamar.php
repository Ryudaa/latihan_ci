<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Kode kamar</th>
            <th>Lantai</th>
            <th>Nama kamar</th>
            <th>Harga</th>
            <th>Status</th>
            <th>Fasilitas</th>
        </tr>
        <?php $no =1; foreach ($kamar as $kamar): ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $kamar->kdkamar ?></td>
            <td><?php echo $kamar->lantai ?></td>
            <td><?php echo $kamar->nmkamar ?></td>
            <td><?php echo $kamar->harga ?></td>
            <td><?php echo $kamar->status ?></td>
            <td><?php echo $kamar->fasilitas ?></td>
        </tr>
        
        <?php endforeach; ?>

    <script type="text/javascript">
        window.print()
    </script>

    </table>
</body>
</html>