<main role="main" class="container">
    <div class="row mt-4">
        <div class="col-md-3">
            <?php $this->load->view('layouts/_menu'); ?>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    Daftar Order
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Tanggal</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/order-detail.html"><strong>#012345678</strong></a>
                                </td>
                                <td>20200520</td>
                                <td>Rp.300.000,-</td>
                                <td>
                                    <span class="badge badge-pill badge-warning">Menunggu Pembayaran</span>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="/order-detail.html">#012345678</a></td>
                                <td>20200519</td>
                                <td>Rp.300.000,-</td>
                                <td>
                                    <span class="badge badge-pill badge-success">Dikirim</span>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="/order-detail.html">#012345678</a></td>
                                <td>20200510</td>
                                <td>Rp.300.000,-</td>
                                <td>
                                    <span class="badge badge-pill badge-danger">Dibatalkan</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>