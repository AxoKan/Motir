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
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>

<script>
    function convertToExcel() {
        const table = document.querySelector('.table');
        const rows = table.querySelectorAll('tr');
        const data = [];

        // Iterate through rows and cells to collect data
        rows.forEach(row => {
            const rowData = [];
            row.querySelectorAll('th, td').forEach(cell => {
                rowData.push(cell.innerText);
            });
            data.push(rowData);
        });

        // Create a new Excel workbook
        const wb = XLSX.utils.book_new();

        // Add worksheet to the workbook
        const ws = XLSX.utils.aoa_to_sheet(data);

        // Define range
        const range = XLSX.utils.decode_range(ws['!ref']);
        
        // Set borders for columns with data
        for (let C = range.s.c; C <= range.e.c; ++C) {
            let hasData = false;
            for (let R = range.s.r; R <= range.e.r; ++R) {
                const cellAddress = { r: R, c: C };
                const cellRef = XLSX.utils.encode_cell(cellAddress);
                if (ws[cellRef] && ws[cellRef].v !== undefined && ws[cellRef].v !== null && ws[cellRef].v !== "") {
                    hasData = true;
                    break;
                }
            }
            if (hasData) {
                for (let R = range.s.r; R <= range.e.r; ++R) {
                    const cellAddress = { r: R, c: C };
                    const cellRef = XLSX.utils.encode_cell(cellAddress);
                    if (!ws[cellRef]) continue;
                    ws[cellRef].s = { border: { top: { style: "thin" }, bottom: { style: "thin" }, left: { style: "thin" }, right: { style: "thin" } } };
                }
            }
        }

        // Set column widths
        for (let i = range.s.c; i <= range.e.c; i++) {
            ws['!cols'] = ws['!cols'] || [];
            ws['!cols'][i] = { wch: 15 }; // Set the width in characters (adjust as needed)
        }

        // Set table style
        const tableName = 'MyTable';
        ws["!tbl"] = {
            ref: ws["!ref"],
            name: tableName,
            styleInfo: {
                name: "TableStyleMedium9" // You can change the table style here
            }
        };

        // Add the worksheet to the workbook
        XLSX.utils.book_append_sheet(wb, ws, "Sheet1");

        // Save the workbook as an Excel file
        XLSX.writeFile(wb, 'hasil_penjualan.xlsx');
    }

    // Call the function to trigger conversion when the document loads
    window.onload = function() {
        convertToExcel();
    };
</script>


</body>
</html>
