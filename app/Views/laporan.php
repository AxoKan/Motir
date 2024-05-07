<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include your head content here -->
    <style>
        .card {
            margin-bottom: 30px;
        }

        @media (min-width: 992px) {
            .card {
                margin-left: 20px;
            }
        }
    </style>
</head>
<body>
    <br>
    <br>
    <main id="main" class="main">
        <div class="container">
            <div class="row">
                <!-- Print Form -->
                <div class="col-lg-4">
                    <form action="<?= base_url('Home/print')?>" method="post">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Print</h5>
                                <div class="mb-3 mt-3">
                                    <label for="printStartDate" class="formal-label">TANGGALAWAL</label>
                                   <div class="row mb-3">
                                        <input type="date" class="form-control form-control-lg" name="DATE">
                                    </div>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="printEndDate" class="formal-label">TANGGALAKHIR</label>
                                    <div class="row mb-3">
                                        <input type="date" class="form-control form-control-lg" name="DATE1">
                                    </div>
                                </div>
                               <div class="row mb-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- PDF Form -->
                <div class="col-lg-4">
                    <form action="<?= base_url('Home/PDF')?>" method="post">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">PDF</h5>
                                <div class="mb-3 mt-3">
                                    <label for="pdfStartDate" class="formal-label">TANGGALAWAL</label>
                                    <div class="row mb-3">
                                        <input type="date" class="form-control form-control-lg" name="DATE2">
                                    </div>
                                </div>
                                <div class="mb-4 mt-3">
                                    <label for="pdfEndDate" class="formal-label">TANGGALAKHIR</label>
                                    <div class="row mb-3">
                                        <input type="date" class="form-control form-control-lg" name="DATE3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Excel Form -->
                <div class="col-lg-4">
                    <form action="<?= base_url('Home/Excel')?>" method="post">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Excel</h5>
                                <div class="mb-3 mt-3">
                                    <label for="excelStartDate" class="formal-label">TANGGALAWAL</label>
                                    <div class="row mb-3">
                                        <input type="date" class="form-control form-control-lg" name="DATE4">
                                    </div>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="excelEndDate" class="formal-label">TANGGALAKHIR</label>
                                    <div class="row mb-3">
                                        <input type="date" class="form-control form-control-lg" id="excelEndDate" name="DATE5">
                                    </div>
                                </div>
                                 <div class="row mb-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
