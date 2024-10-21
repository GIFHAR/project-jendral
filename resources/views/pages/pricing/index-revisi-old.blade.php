@extends('layout.index')

@section('style')
<style>
    /* Default button styles: white background, dark text */
    .btn-outline-secondary {
        background-color: transparent;
        color: #6c757d;
        border-color: #6c757d;
        transition: background-color 0.3s, color 0.3s;
    }

    /* When a button is clicked (active), green background and white text */
    .btn-outline-secondary.active,
    .btn-outline-secondary:active {
        background-color: green;
        /* Blue background */
        color: #fff;
        /* White text */
        border-color: green;
    }

    /* When a button is inactive, revert to white background, dark text */
    .btn-outline-secondary.inactive {
        background-color: #fff;
        color: #6c757d;
        /* Dark text */
        border-color: #6c757d;
    }

    /* Placeholder text color for input and textarea */
    input::placeholder,
    textarea::placeholder {
        color: #808080;
        /* Grey placeholder text */
        opacity: 1;
        /* Ensure full opacity for all browsers */
    }

    /* Dark label styling */
    label {
        color: #333;
        /* Dark color for labels */
        font-weight: 600;
        /* Optional: Make label text a bit bolder */
    }

    /* Make buttons full width on mobile */
    @media (max-width: 768px) {
        .btn-group.w-50 {
            width: 100% !important;
        }

        .btn-group .btn {
            width: 100%;
            margin-bottom: 10px;
            /* Add space between buttons on mobile */
        }
    }

    /* Base styles for the select dropdown */
    .form-select {
        width: 100%;
        padding: 8px;
        /* Adjust padding for a smaller height */
        font-size: 16px;
        color: #333;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
        appearance: none;
        /* Remove default arrow */
        -webkit-appearance: none;
        -moz-appearance: none;
        position: relative;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M7 10l5 5 5-5z' fill='%236c757d'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 10px center;
        background-size: 16px;
        transition: border-color 0.2s ease;
        height: 40px;
        /* Set a fixed height to control the overall height */
        line-height: 1.5;
        /* Ensures text is vertically centered */
    }

    /* When the select dropdown is focused */
    .form-select:focus {
        border-color: #80bdff;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    /* Label styling for select */
    .form-label {
        font-size: 16px;
        color: #333;
        font-weight: 600;
        margin-bottom: 5px;
        display: block;
    }

    /* Style for select options */
    .form-select option {
        padding: 10px;
        font-size: 16px;
    }

    /* Optional: For mobile devices, you can make the select full width */
    @media (max-width: 768px) {
        .form-select {
            width: 100%;
        }
    }

    /* Default styles for input fields */
    .form-control {
        border: 1px solid #ccc;
        /* Regular border */
        background-color: transparent;
        padding: 10px;
        transition: border-color 0.3s;
    }

    /* Error state for unfilled required fields */
    .form-control.error {
        border: 1px solid red;
        /* Red border on error */
    }

    /* Error state for select dropdown */
    .form-select.error {
        border: 1px solid red;
        /* Red border for select dropdown */
    }

    /* Error message styling */
    .error-message {
        color: red;
        font-size: 12px;
        margin-top: 5px;
    }

    /* Hide the error message by default */
    .error-message.hidden {
        display: none;
    }

    /* Red border for input fields with error */
    input.error,
    textarea.error,
    select.error {
        border-bottom: 2px solid red !important;
    }

    /* Red border for input fields with error */
    input.error-modal,
    textarea.error-modal,
    select.error-modal {
        border-bottom: 2px solid red !important;
    }
</style>
@endsection

@section('content')
<section class="contact-one">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <h4>Pricing</h4>
            </div>
            <h2>
                Estimate the Price
            </h2>
        </div>
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-12">
                <div class="contact-one__form">
                    <form id="contact-form" action="assets/inc/mail.php" method="POST">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6">
                                <div class="contact-one__input-box">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" id="nama-field" name="nama" placeholder="Masukkan nama" required>
                                    <p class="error-message hidden">Nama harus diisi</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6">
                                <div class="contact-one__input-box">
                                    <label for="no_wa" class="form-label">No. WA</label>
                                    <input type="text" id="no-wa-field" name="no_wa" placeholder="Masukkan No. WA"
                                        required>
                                    <p class="error-message hidden">No. WA harus diisi</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6">
                                <div class="contact-one__input-box">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email-field" name="email" placeholder="Masukkan email"
                                        required>
                                    <p class="error-message hidden">Email harus diisi</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-one__input-box text-message-box">
                                    <label for="email" class="form-label pb-2">Alamat</label>
                                    <textarea name="message" id="alamat-field" placeholder="Masukkan alamat"
                                        required></textarea>
                                    <p class="error-message hidden">Alamat harus diisi</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6">
                                <div class="contact-one__input-box">
                                    <label for="email" class="form-label">Jumlah Link</label>
                                    <input type="number" id="jumlah-link-field" placeholder="Masukkan jumlah link"
                                        name="jumlah_link" required>
                                    <p class="error-message hidden">Jumlah link harus diisi</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6">
                                <div class="contact-one__input-box">
                                    <label for="email" class="form-label">Total Berat (kg)</label>
                                    <input type="number" id="total-berat-field" placeholder="Masukkan total berat"
                                        name="total_berat" required>
                                    <p class="error-message hidden">Total berat harus diisi</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label mb-3">Total Volume (P x L x T)</label>
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <div class="contact-one__input-box">
                                        <input type="number" id="v_panjang" name="v_panjang" placeholder="P (cm)"
                                            min="1" required>
                                        <p class="error-message hidden">Panjang harus diisi</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="contact-one__input-box">
                                        <input type="number" id="v_lebar" name="v_lebar" placeholder="L (cm)" min="1"
                                            required>
                                        <p class="error-message hidden">Lebar harus diisi</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="contact-one__input-box">
                                        <input type="number" id="v_tinggi" name="v_tinggi" placeholder="T (cm)" min="1"
                                            required>
                                        <p class="error-message hidden">Tinggi harus diisi</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <label class="form-label d-block">Pengiriman Via</label>
                            <div class="btn-group w-50" role="group">
                                <button type="button" id="courier-udara-reguler"
                                    class="btn btn-outline-secondary courier inactive">Udara Reguler</button>
                                <button type="button" id="courier-udara-express"
                                    class="btn btn-outline-secondary courier inactive">Udara Express</button>
                                <button type="button" id="courier-laut"
                                    class="btn btn-outline-secondary courier inactive">Laut</button>
                            </div>
                            <p class="error-message hidden" id="pengiriman-error">Pilih salah satu metode pengiriman</p>
                        </div>

                        <div class="col-12 mt-3">
                            <label class="form-label d-block">Pembayaran Via</label>
                            <div class="btn-group w-50" role="group">
                                <button type="button" id="payment-transfer"
                                    class="btn btn-outline-secondary payment inactive">Transfer</button>
                                <button type="button" id="payment-tokped"
                                    class="btn btn-outline-secondary payment inactive">Tokopedia</button>
                                <button type="button" id="payment-shopee"
                                    class="btn btn-outline-secondary payment inactive">Shopee</button>
                            </div>
                            <p class="error-message hidden" id="pembayaran-error">Pilih salah satu metode pembayaran</p>
                        </div>


                        <hr class="my-4">

                        <!-- Table Items -->
                        <label class="form-label fw-bold">Items Order</label>
                        <button type="button" id="btn-add-item" class="btn btn-outline-warning mb-3"
                            data-bs-toggle="modal" data-bs-target="#modalAddItem">Add Item</button>

                        <div class="table-responsive">
                            <table id="table-items" class="table">
                                <thead class="table-head">
                                    <tr>
                                        <th>Link</th>
                                        <th>Varian</th>
                                        <th>Kategori</th>
                                        <th>Harga</th>
                                        <th>Quantity</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <!-- End of Table Items -->

                        <div class="contact-one__btn-box" style="margin-top: 70px;">
                            <button id="submit-btn" class="thm-btn" type="submit" data-loading-text="Please wait...">
                                <span class="txt">Submit Now</span>
                            </button>
                        </div>
                    </form>
                    <p class="ajax-response mb-0"></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="google-map-one">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
        class="google-map-one__map" allowfullscreen></iframe>
</section>

<!-- Modal for Add Item -->
<div class="modal fade" id="modalAddItem" tabindex="-1" aria-labelledby="modalAddItemLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAddItemLabel">Add Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="contact-one__input-box mb-1">
                    <label for="add-item-link" class="form-label">Link</label>
                    <input type="text" class="form-control" id="add-item-link" required>
                    <p class="error-message hidden">Link is required</p>
                </div>

                <div class="contact-one__input-box mb-1">
                    <label for="add-item-varian" class="form-label">Varian</label>
                    <input type="text" class="form-control" id="add-item-varian" required>
                    <p class="error-message hidden">Varian is required</p>
                </div>

                <div class="contact-one__input-box mb-2">
                    <label for="add-item-kategori" class="form-label">Kategori</label>
                    <select id="add-item-kategori" class="form-select" required>
                        <option value="Umum">Umum</option>
                        <option value="Branded">Branded</option>
                        <option value="Lartas Ringan">Lartas Ringan</option>
                    </select>
                    <p class="error-message hidden">Kategori is required</p>
                </div>
                <br />
                <div class="contact-one__input-box mb-1">
                    <label for="add-item-harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="add-item-harga" required>
                    <p class="error-message hidden">Harga is required</p>
                </div>

                <div class="contact-one__input-box mb-1">
                    <label for="add-item-quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="add-item-quantity" min="1" required>
                    <p class="error-message hidden">Quantity is required</p>
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


<!-- Confirmation Modal -->
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmationLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this row?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" id="confirmDeleteBtn" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')
<script src="{{ asset('js/scripts.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Define categories for each courier option
        const categoriesByCourier = {
            'Udara Reguler': ['Umum', 'Branded', 'Lartas Ringan'],
            'Udara Express': ['Umum', 'Branded', 'Lartas Ringan', 'Lartas Berat', 'Pure Battery', 'Magnet', 'Germen'],
            'Laut': ['Umum', 'Lartas Ringan', 'Lartas Berat', 'Garment', 'Obat', 'Makanan']
        };

        const createBtn = document.getElementById('create-btn');
        const addItemBtn = document.getElementById('btn-add-item');
        const submitBtn = document.getElementById('submit-btn');
        const modalAddItem = new bootstrap.Modal(document.getElementById('modalAddItem'));
        const modalAddItemElement = document.getElementById('modalAddItem');

        const modalTitle = document.getElementById('modalAddItemLabel');
        let editingRow = null;

        const deleteConfirmationModal = new bootstrap.Modal(document.getElementById('deleteConfirmationModal'));
        const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
        let rowToDelete = null;

        const courierButtons = document.querySelectorAll('.courier');
        const pengirimanError = document.getElementById('pengiriman-error');

        const paymentButtons = document.querySelectorAll('.payment');
        const pembayaranError = document.getElementById('pembayaran-error');

        const namaField = document.getElementById('nama-field');
        const noWaField = document.getElementById('no-wa-field');
        const emailField = document.getElementById('email-field');
        const alamatField = document.getElementById('alamat-field');
        const jumlahLinkField = document.getElementById('jumlah-link-field');
        const totalBeratField = document.getElementById('total-berat-field');
        const vPanjangField = document.getElementById('v_panjang');
        const vLebarField = document.getElementById('v_lebar');
        const vTinggiField = document.getElementById('v_tinggi');

        const linkField = document.getElementById('add-item-link');
        const varianField = document.getElementById('add-item-varian');
        const kategoriField = document.getElementById('add-item-kategori');
        const hargaField = document.getElementById('add-item-harga');
        const quantityField = document.getElementById('add-item-quantity');

        const namaError = namaField.nextElementSibling;
        const noWaError = noWaField.nextElementSibling;
        const emailError = emailField.nextElementSibling;
        const alamatError = alamatField.nextElementSibling;
        const jumlahLinkError = jumlahLinkField.nextElementSibling;
        const totalBeratError = totalBeratField.nextElementSibling;
        const vPanjangError = vPanjangField.nextElementSibling;
        const vLebarError = vLebarField.nextElementSibling;
        const vTinggiError = vTinggiField.nextElementSibling;

        const linkError = linkField.nextElementSibling;
        const varianError = varianField.nextElementSibling;
        const kategoriError = kategoriField.nextElementSibling;
        const hargaError = hargaField.nextElementSibling;
        const quantityError = quantityField.nextElementSibling;

        let formIsValid = true;

        function validateField(field, errorMessageElement) {
            if (field.value.trim() === '') {
                field.classList.add('error');
                errorMessageElement.classList.remove('hidden');
                formIsValid = false;
            } else {
                field.classList.remove('error');
                errorMessageElement.classList.add('hidden');
            }
        }

        // Function to update the "Kategori" dropdown based on selected courier
        function updateKategoriDropdown(categories) {
            kategoriField.innerHTML = ''; // Clear existing options
            categories.forEach(category => {
                const option = document.createElement('option');
                option.value = category;
                option.textContent = category;
                kategoriField.appendChild(option);
            });
        }

        function validatePengiriman() {
            let isPengirimanSelected = false;

            courierButtons.forEach(button => {
                if (button.classList.contains('active')) {
                    isPengirimanSelected = true;
                }
            });

            if (!isPengirimanSelected) {
                pengirimanError.classList.remove('hidden');
                formIsValid = false;
            } else {
                pengirimanError.classList.add('hidden');
            }
        }

        function validatePembayaran() {
            let isPembayaranSelected = false;

            paymentButtons.forEach(button => {
                if (button.classList.contains('active')) {
                    isPembayaranSelected = true;
                }
            });

            if (!isPembayaranSelected) {
                pembayaranError.classList.remove('hidden');
                formIsValid = false;
            } else {
                pembayaranError.classList.add('hidden');
            }
        }

        courierButtons.forEach(button => {
            button.addEventListener('click', function () {
                courierButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
            });
        });

        paymentButtons.forEach(button => {
            button.addEventListener('click', function () {
                paymentButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
            });
        });

        addItemBtn.addEventListener('click', function () {
            editingRow = null;
            createBtn.textContent = 'Create';
            modalTitle.textContent = 'Add Item';

            linkField.classList.remove('error', 'error-modal');
            varianField.classList.remove('error', 'error-modal');
            kategoriField.classList.remove('error', 'error-modal');
            hargaField.classList.remove('error', 'error-modal');
            quantityField.classList.remove('error', 'error-modal');

            linkField.style.border = '';
            varianField.style.border = '';
            kategoriField.style.border = '';
            hargaField.style.border = '';
            quantityField.style.border = '';

            linkError.classList.add('hidden');
            varianError.classList.add('hidden');
            kategoriError.classList.add('hidden');
            hargaError.classList.add('hidden');
            quantityError.classList.add('hidden');
        });

        submitBtn.addEventListener('click', function (event) {
            event.preventDefault();
            formIsValid = true;

            validatePengiriman();
            validatePembayaran();

            validateField(namaField, namaError);
            validateField(noWaField, noWaError);
            validateField(emailField, emailError);
            validateField(alamatField, alamatError);
            validateField(jumlahLinkField, jumlahLinkError);
            validateField(totalBeratField, totalBeratError);
            validateField(vPanjangField, vPanjangError);
            validateField(vLebarField, vLebarError);
            validateField(vTinggiField, vTinggiError);

            if (formIsValid) {
                alert('Form is valid and ready for submission.');
            } else {
                const firstErrorField = document.querySelector('.error');
                if (firstErrorField) {
                    firstErrorField.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });

        createBtn.addEventListener('click', function (event) {
            event.preventDefault();
            formIsValid = true;

            validateField(linkField, linkError);
            validateField(varianField, varianError);
            validateField(kategoriField, kategoriError);
            validateField(hargaField, hargaError);
            validateField(quantityField, quantityError);

            if (formIsValid) {
                if (editingRow) {
                    updateTableRow(editingRow);
                    createBtn.textContent = 'Create';
                    modalAddItem.hide();
                } else {
                    const tableBody = document.querySelector('#table-items tbody');

                    const newRow = document.createElement('tr');

                    newRow.innerHTML = `
                    <td>${linkField.value}</td>
                    <td>${varianField.value}</td>
                    <td>${kategoriField.value}</td>
                    <td>${hargaField.value}</td>
                    <td>${quantityField.value}</td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm edit-row">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm delete-row">Delete</button>
                    </td>
                `;

                    tableBody.appendChild(newRow);

                    newRow.querySelector('.delete-row').addEventListener('click', function () {
                        rowToDelete = newRow;
                        deleteConfirmationModal.show();
                    });

                    newRow.querySelector('.edit-row').addEventListener('click', function () {
                        editingRow = newRow;
                        fillFormFieldsForEdit(newRow);
                        createBtn.textContent = 'Update';
                        modalTitle.textContent = 'Edit Item';
                        modalAddItem.show();
                    });

                    linkField.value = '';
                    varianField.value = '';
                    kategoriField.value = 'Umum';
                    hargaField.value = '';
                    quantityField.value = '';

                    modalAddItem.hide();
                }
            } else {
                const firstErrorField = document.querySelector('.error-modal');
                if (firstErrorField) {
                    firstErrorField.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });

        function updateTableRow(row) {
            row.cells[0].textContent = linkField.value;
            row.cells[1].textContent = varianField.value;
            row.cells[2].textContent = kategoriField.value;
            row.cells[3].textContent = hargaField.value;
            row.cells[4].textContent = quantityField.value;
        }

        function fillFormFieldsForEdit(row) {
            linkField.value = row.cells[0].textContent;
            varianField.value = row.cells[1].textContent;
            kategoriField.value = row.cells[2].textContent;
            hargaField.value = row.cells[3].textContent;
            quantityField.value = row.cells[4].textContent;
        }

        confirmDeleteBtn.addEventListener('click', function () {
            if (rowToDelete) {
                rowToDelete.remove();
                rowToDelete = null;
            }
            deleteConfirmationModal.hide();
        });

        modalAddItemElement.addEventListener('hidden.bs.modal', function () {
            linkField.value = '';
            varianField.value = '';
            kategoriField.value = 'Umum';
            hargaField.value = '';
            quantityField.value = '';

            linkField.classList.remove('error-modal');
            varianField.classList.remove('error-modal');
            kategoriField.classList.remove('error-modal');
            hargaField.classList.remove('error-modal');
            quantityField.classList.remove('error-modal');

            linkError.classList.add('hidden');
            varianError.classList.add('hidden');
            kategoriError.classList.add('hidden');
            hargaError.classList.add('hidden');
            quantityError.classList.add('hidden');
        });

        // Initialize with default courier categories
        updateKategoriDropdown(categoriesByCourier['Udara Reguler']);
    });

</script>

@endsection
