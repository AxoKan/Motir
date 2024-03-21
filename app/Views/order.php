<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include your head content here -->
</head>
<body>
    <main id="main" class="main">
        <div class="container">
            <form action="<?= base_url('home/aksi_order')?>" method="post">
                <div class="pagetitle">
                    <h1>ORDER</h1>
                     <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-message-alt-add"></i> ORDER</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?=base_url('home/inprogress')?>"
                        ><i class="bx bx-spreadsheet me-1"></i> IN PROGRESS</a
                      >
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="<?=base_url('home/history')?>"
                        ><i class="bx bx-history me-1"></i> HISTORY</a
                      >
                    </li>
                </div><!-- End Page Title -->

                <section class="section">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card">

                                <div class="card-body">
                                    <h5 class="card-title">order</h5>

                                    <!-- General Form Elements -->

                                    <div class="mb-3 mt-3">
                                    <label for="Deskripsi" class="form-label">Nama Pemesan</label>
                                    <input class="form-control" id="Deskripsi" value="<?=session()->get('nama')?>" name="nama"></input>
                                </div>
                                    <div class="mb-3 mt-3">
                                        <label for="jumlah" class="form-label">alamat</label>
                                        <input type="text" class="form-control" id="alamat" value="<?=session()->get('alamat')?>" name="alamat">
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="Invoice" class="form-label">Tanggal order</label>
                                        <input type="date" class="form-control" id="Invoice" value="<?php echo date('Y-m-d'); ?>" name="Tanggal">
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="status" class="form-label">jenis Pemesanan</label>
                                        <select class="form-select" id="status" name="jenis" required>
                                            <option value=""></option>
                                            <option value="Perbaikan">Perbaikan</option>
                                            <option value="Pengecekan">Pengecekan</option>
                                            <option value="Perbaikan dan Pengecekan">Pengecekan dan Perbaikan</option>
                                        </select>
                                    </div>
                                   <div class="mb-3 mt-3">
              <label for="jumlah" class="form-label">harga</label>
                   <input type="text" class="form-control" id="harga" placeholder="Rp12,345" name="harga">
                </div>

                                  <div class="mb-3 mt-3">
                                        <label for="status" class="form-label">Metode Pembayaran</label>
                                        <select class="form-select" id="status" name="metode" required>
                                            <option value=""></option>
                                            <option value="cash">cash</option>
                                            <option value="transfer">transfer</option>
                                        </select>
                                    </div>

                                    <div class="row mb-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </main>
</body>
</html>
