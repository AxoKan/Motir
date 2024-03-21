<main id="main" class="main">
  <div class="container">
    <div class="pagetitle">
      <h1>ORDER IN PROGRESS</h1>
      <nav>
         <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link" href="<?=base_url('home/order')?>"
                        ><i class="bx bx-message-alt-add"></i> ORDER</a>
                      
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"
                        ><i class="bx bx-spreadsheet me-1"></i> IN PROGRESS</a
                      >
                      <li class="nav-item">
                      <a class="nav-link" href="<?=base_url('home/history')?>"
                        ><i class="bx bx-history me-1"></i> HISTORY</a
                      >
                    </li>
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
                    <th align="center" scope="col">No Order</th>
                    <th align="center" scope="col">Pelanggan</th>
                    <th align="center" scope="col">Tgl. Pemesanan</th>
                    <th align="center" scope="col">Harga</th>
                    <th align="center" scope="col">Metode Pembayaran</th>
                    <th align="center" scope="col">alamat</th>
                    <th align="center" scope="col">Jenis Pemesanan</th>
                    <th align="center" scope="col">tindakan</th>
                  </tr>
                </thead>
                <tbody>
                 <?php
      $no=1;
      foreach ($axo as $key){
      ?>

      <tr>
          <td align="center" scope="col"><?= $no++ ?></td>
        <td align="center" scope="col"><?= $key->nama_pemesan?></td>
        <td align="center" scope="col"><?= $key->tanggal_pemesanan?></td>
        <td align="center" scope="col">Rp <?= number_format($key->harga, 0, ',', '.') ?></td>
         <td align="center" scope="col"><?= $key->metode?></td>
        <td align="center" scope="col"><?= $key->alamat ?></td>
       <td align="center" scope="col"><?= $key->Jenis_Pemesanan ?></td>
        <td align="center">
          <!-- <li class="nav-item dropdown pe-3"> -->
       <a class="btn btn-success" class="nav-link d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

            <span class="d-none d-md-block dropdown-toggle ps-2">tindakan</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>
        <a href="<?= base_url('Home/hapusO/'.$key->id_pesanan)?>">
          <i class="btn btn-danger">CANCEL</i>
        </a><a href="<?= base_url('Home/completed/'.$key->id_pesanan)?>">
          <i class="btn btn-warning">COMPLETED</i>
        </a>
              <span></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
        </td>
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
