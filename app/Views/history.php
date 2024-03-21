<main id="main" class="main">
  <div class="container">
    <div class="pagetitle">
      <h1>History</h1>
      <nav>
                      <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link" href="<?=base_url('home/order')?>"
                        ><i class="bx bx-message-alt-add"></i> ORDER</a>
                      
                    </li>
                      <li class="nav-item">
                      <a class="nav-link" href="<?=base_url('home/inprogress')?>"
                        ><i class="bx bx-spreadsheet me-1"></i>IN PROGRESS</a
                      >
                    </li>
                     <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"
                        ><i class="bx bx-history me-1"></i> HISTORY</a
                      >
      </nav>
    </div><!-- End Page Title -->
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row justify-content-center">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <div class="d-flex justify-content-between align-items-center mb-3">

                <!-- Add a search input on the right side -->
                <div class="search-container">
                  <label for="search">Search:</label>
                  <input type="text" id="search" placeholder="Enter keywords...">
                </div>
              </div>

              <!-- Table with stripped rows -->
              <table class="table datatable" id="mitraTable">
                <thead>
                  <tr>
                    <th align="center" scope="col">No History Order</th>
                    <th align="center" scope="col">Pelanggan</th>
                    <th align="center" scope="col">Tgl. Pemesanan</th>
                    <th align="center" scope="col">Tgl. Akhir</th>
                    <th align="center" scope="col">Harga</th>
                    <th align="center" scope="col">Metode Pembayaran</th>
                    <th align="center" scope="col">alamat</th>
                    <th align="center" scope="col">Jenis Pemesanan</th>
                  </tr>
                </thead>
                <tbody>
                 <?php
      $no=1;
      foreach ($axo as $key){
      ?>

      <tr>
          <td align="center" scope="col"><?= $no++ ?></td>
        <td align="center" scope="col"><?= $key->nama?></td>
        <td align="center" scope="col"><?= $key->tanggal_awal?></td>
         <td align="center" scope="col"><?= $key->tanggal_akhir?></td>
        <td align="center" scope="col">Rp <?= number_format($key->harga, 0, ',', '.') ?></td>
         <td align="center" scope="col"><?= $key->metode?></td>
        <td align="center" scope="col"><?= $key->alamat ?></td>
       <td align="center" scope="col"><?= $key->jenis ?></td>
      </tr>
    <?php }?>
                </tbody>
              </table>
               </div>
          </div>

        </div>
      </div>
    </section>

  </div>
</main><!-- End #main -->

<script>
  // Add JavaScript for search functionality
  document.getElementById('search').addEventListener('input', function() {
    const searchValue = this.value.toLowerCase();
    const rows = document.querySelectorAll('#mitraTable tbody tr');

    rows.forEach(row => {
      const rowData = row.textContent.toLowerCase();
      row.style.display = rowData.includes(searchValue) ? '' : 'none';
    });
  });
</script>
