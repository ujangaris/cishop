<main role="main" class="container">
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Formulir Alamat Pengiriman
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="name" placeholder="Masukan nama penerima" />
                                <small class="form-text text-danger">Nama harus diisi!</small>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="address" class="form-control"></textarea>
                                <small class="form-text text-danger">Alamat harus diisi!</small>
                            </div>
                            <div class="form-group">
                                <label for="">Telepo</label>
                                <input type="text" class="form-control" name="phone" placeholder="Masukan nomor telepon" />
                                <small class="form-text text-danger">Nomor telepon harus diisi!</small>
                            </div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                Cart
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Produk</th>
                                            <th>Qty</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($cart as $row) : ?>
                                            <tr>
                                                <td><?= $row->title ?></td>
                                                <td><?= $row->qty ?></td>
                                                <td>Rp<?= number_format($row->price, 0, ',', '.') ?>,-</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Subtotal</td>
                                                <td>Rp<?= number_format($row->subtotal, 0, ',', '.') ?>,-</td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="2">Total</th>
                                            <th>Rp<?= number_format(array_sum(array_column($cart, 'subtotal')), 0, ',', '.') ?>,-</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</main>