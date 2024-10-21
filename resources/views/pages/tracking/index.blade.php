@extends('layout.index')

@section('content')
<section class="contact-one">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <h4>Tracking</h4>
            </div>
            <h2>
                Track your stuff here
            </h2>
        </div>
        <div class="live-tracking-box text-and-inputs text-center mx-auto" style="max-width: 600px;">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="form-group position-relative mb-1">
                        <label for="noResi" class="form-label">No. Resi</label>
                        <input type="text" id="noResi" class="form-control shadow-sm" aria-label="No. Resi">
                        <small class="error-message text-danger d-none">No. Resi is required</small>
                    </div>

                    <div class="form-group position-relative mb-3">
                        <label for="kodeMarking" class="form-label">Kode Marking</label>
                        <input type="text" id="kodeMarking" class="form-control shadow-sm" aria-label="Kode Marking">
                        <small class="error-message text-danger d-none">Kode Marking is required</small>
                    </div>

                    <button id="cekResi" class="btn btn-primary btn-lg w-100 shadow-sm">Cek Resi</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('style')
<style>
    .live-tracking-box {
        background-color: #f9f9f9;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        position: relative;
        margin-bottom: 20px;
        /* Add spacing between input fields */
    }

    /* Label style */
    .form-label {
        font-size: 1rem;
        margin-bottom: 3px;
        display: block;
        text-align: left;
    }

    /* Error Message Style - align to left */
    .error-message {
        text-align: left;
        font-size: 0.85rem;
        margin-top: 5px;
        padding-left: 10px;
        display: block;
    }

    /* Form control (input) */
    .form-control:focus {
        border-color: #80bdff;
        outline: none;
    }

    .form-control.is-invalid {
        border-color: red;
    }

    /* Button styling */
    #cekResi {
        background-color: #ff6b00;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 1.2rem;
        padding: 10px 0;
        transition: background-color 0.3s;
    }

    #cekResi:hover {
        background-color: #ff7d2a;
    }

    /* Media queries for better responsiveness */
    @media (max-width: 768px) {
        .input-group {
            flex-direction: column;
        }

        #cekResi {
            font-size: 1rem;
            padding: 8px 0;
        }
    }
</style>
@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const noResiField = document.getElementById('noResi');
        const kodeMarkingField = document.getElementById('kodeMarking');
        const cekResiButton = document.getElementById('cekResi');
        const noResiError = noResiField.nextElementSibling;
        const kodeMarkingError = kodeMarkingField.nextElementSibling;

        function validateField(field, errorElement) {
            if (field.value.trim() === '') {
                field.classList.add('is-invalid');  // Add red border
                errorElement.classList.remove('d-none');  // Show error message
                return false;
            } else {
                field.classList.remove('is-invalid');  // Remove red border
                errorElement.classList.add('d-none');  // Hide error message
                return true;
            }
        }

        // Hide error message when the user starts typing again
        noResiField.addEventListener('input', function () {
            if (noResiField.classList.contains('is-invalid')) {
                validateField(noResiField, noResiError);  // Validate and remove error if valid
            }
        });

        kodeMarkingField.addEventListener('input', function () {
            if (kodeMarkingField.classList.contains('is-invalid')) {
                validateField(kodeMarkingField, kodeMarkingError);  // Validate and remove error if valid
            }
        });

        // Add validation on button click
        cekResiButton.addEventListener('click', function (e) {
            e.preventDefault();

            const isNoResiValid = validateField(noResiField, noResiError);
            const isKodeMarkingValid = validateField(kodeMarkingField, kodeMarkingError);

            if (isNoResiValid && isKodeMarkingValid) {
                alert('Tracking in progress...');
            }
        });
    });
</script>
@endsection
