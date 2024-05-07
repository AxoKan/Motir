<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        .table {
            font-family: ponzi hat;
            color: #232323;
            border-collapse: collapse;
            width: 100%;
            border: 2px solid #999;
        }

        th, td {
            border: 2px solid #999;
            padding: 8px 20px;
            text-align: center;
        }

        .no-border {
            border: none;
        }

        img {
            width: 30%;
        }
    </style>
</head>
<body>


<br>
<br>
<br>
<p style="font-size: 40px; font-weight: bold; border-bottom: 0px solid black; width: 100%; margin: 0 auto; text-align: center;">HASIL PENJUALAN</p>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<table class="table">
    <thead>
    <tr>
        <th scope="col">No Order</th>
        <th scope="col">Tgl. Pemesanan</th>        
        <th scope="col">Pelanggan</th>
        <th scope="col">Alamat</th>
        <th scope="col">Metode Pembayaran</th>
        <th scope="col">Jenis Pemesanan</th>
        <th scope="col">Harga</th>

    </tr>

    </thead>
    <tbody>
    <?php
    $no=1;
    foreach ($print as $key){
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $key->tanggal_awal?></td>
            <td><?= $key->nama?></td>
            <td><?= $key->alamat ?></td>
            <td><?= $key->metode?></td>
            <td><?= $key->jenis ?></td>
            <td>Rp <?= number_format($key->harga, 0, ',', '.') ?></td>

        </tr>
    <?php }?>
    <tr>
        <th class="no-border"></th>
        <th class="no-border"></th>
        <th class="no-border"></th>
        <th class="no-border"></th>
        <th class="no-border"></th>
        <th>Total :</th>
        <?php
        $total = 0;
        foreach ($print as $key){
            $total += $key->harga;
        }?>
        <th class="no-border" colspan="4">Rp <?= number_format($total, 0, ',', '.') ?></th>
    </tr>
    </tbody>
</table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
<script>
    // Function to convert HTML to PDF
    function convertToPDF() {
        const element = document.body; // Assuming you want to convert the whole body
        const opt = {
            margin: 1,
            filename: 'hasil_penjualan.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'in', format: 'a3', orientation: 'landscape' } // Adjust format to 'a3' for bigger page size
        };
        
        html2pdf()
            .set(opt)
            .from(element)
            .save();
    }

    // Call the function to trigger conversion when the document loads
    window.onload = function() {
        convertToPDF();
    };
</script>
</body>
</html>
