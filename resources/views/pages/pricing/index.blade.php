@extends('layout.index')

@section('style')
@endsection

@section('content')
<section class="blog-one">
    <div class="container p-5 rounded card">
        <div class="pb-3">
            <h2 class="text-base fw-semibold text-dark">Fitur Cek Harga</h2>
            <p class="text-muted">Silakan cek harga di bawah ini</p>

            <!-- Form -->
            <form class="row g-3 mt-3">
                <div class="col-md-4">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <div class="col-md-4">
                    <label for="no_wa" class="form-label">No. WA</label>
                    <input type="text" class="form-control" id="no_wa" name="no_wa" required>
                </div>

                <div class="col-md-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="col-12">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                </div>


                <div class="col-md-3">
                    <label for="jumlah-link" class="form-label">Jumlah Link</label>
                    <input type="number" class="form-control" id="jumlah_link" name="jumlah-link" min="1" max="20"
                        required>
                </div>

                <div class="col-md-3">
                    <label for="total_berat" class="form-label">Total Berat (kg)</label>
                    <input type="number" class="form-control" id="total_berat" name="total_berat" required>
                </div>

                <div class="col-12">
                    <label class="form-label">Total Volume</label>
                    <div class="row g-2">
                        <div class="col-md-4">
                            <input type="number" class="form-control" id="v_panjang" name="v_panjang"
                                placeholder="P (cm)" min="1" required>
                        </div>
                        <div class="col-md-4">
                            <input type="number" class="form-control" id="v_lebar" name="v_lebar" placeholder="L (cm)"
                                min="1" required>
                        </div>
                        <div class="col-md-4">
                            <input type="number" class="form-control" id="v_tinggi" name="v_tinggi" placeholder="T (cm)"
                                min="1" required>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <label class="form-label">Pengiriman Via</label>
                    <div class="btn-group w-100" role="group">
                        <button type="button" id="courier-udara-reguler" class="btn btn-outline-secondary">Udara
                            Reguler</button>
                        <button type="button" id="courier-udara-express" class="btn btn-outline-secondary">Udara
                            Express</button>
                        <button type="button" id="courier-laut" class="btn btn-outline-secondary">Laut</button>
                    </div>
                </div>

                <div class="col-12">
                    <label class="form-label">Pembayaran Via</label>
                    <div class="btn-group w-100" role="group">
                        <button type="button" id="payment-transfer" class="btn btn-outline-secondary">Transfer</button>
                        <button type="button" id="payment-tokped" class="btn btn-outline-secondary">Tokopedia</button>
                        <button type="button" id="payment-shopee" class="btn btn-outline-secondary">Shopee</button>
                    </div>
                </div>
            </form>
            <!-- End of Form -->

            <hr class="my-4">

            <!-- Table Items -->
            <label class="form-label fw-bold">Items Order</label>
            <button id="btn-add-item" class="btn btn-outline-warning mb-3">Add Item</button>

            <div class="table-responsive">
                <table id="table-items" class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>Link</th>
                            <th>Varian</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Table content will be dynamically generated -->
                    </tbody>
                </table>
            </div>
            <!-- End of Table Items -->
        </div>
    </div>

    <!-- Modal for Add Item -->
    <div class="modal fade" id="modalAddItem" tabindex="-1" aria-labelledby="modalAddItemLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAddItemLabel">Add Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="add-item-link" class="form-label">Link</label>
                        <input type="text" class="form-control" id="add-item-link" required>
                    </div>

                    <div class="mb-3">
                        <label for="add-item-varian" class="form-label">Varian</label>
                        <input type="text" class="form-control" id="add-item-varian" required>
                    </div>

                    <div class="mb-3">
                        <label for="add-item-kategori" class="form-label">Kategori</label>
                        <select id="add-item-kategori" class="form-select" required>
                            <option value="Umum">Umum</option>
                            <option value="Lartas Ringan">Lartas Ringan</option>
                            <option value="Lartas Berat">Lartas Berat</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="add-item-harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="add-item-harga" required>
                    </div>

                    <div class="mb-3">
                        <label for="add-item-quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="add-item-quantity" min="1" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="create-btn" class="btn btn-primary">Create</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal for Add Item -->
</section>
@endsection

@section('script')
{{-- Add Bootstrap JS --}}
<script src="{{ asset('js/scripts.js') }}"></script>
@endsection
