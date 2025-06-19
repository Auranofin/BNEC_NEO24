<x-app title="Participant Registration | Payment">
    <x-slot name="navbarUser"></x-slot>
    <div style="display: flex; justify-content: center; align-items: center; color: #1295C3; background-color: #D6E3E9; padding-top: 120px; padding-bottom: 50px;">
        <p class="fw-bold fs-2">Participant Registration</p>
    </div>
    <form method="POST" action="{{ route('payments.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="container py-5">
            {{-- <div class="row mb-3">
                <div class="col-12 pt-3">
                    <div class="text-center fw-bold fs-3 glacial pt-3">
                        Participant Registration
                    </div>
                </div>
            </div> --}}
            <div class="d-flex d-flex justify-content-between align-items-start mt-5">
                <div>
                    <p class="m-0 fs-4 fw-bold" style="color: #1295C3;">Payment</p>
                    <small class="fst-italic glacialReg" style="color: #1295C3;">* complete the payment before payment due</small>
                </div>
                <div class="timer px-2 py-1 px-sm-2 py-sm-1 px-md-4 py-md-2 rounded fw-semibold bg-danger text-white">
                    Payment Due: <span>{{ $registration->payment_due }}</span>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-lg-7 col-12 mb-4">
                    <section>
                        <div class="card" style="border: 1px solid #1295C3;">
                            <div class="card-body">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <p class="fw-semibold fs-3 m-0" style="color: #1295C3;">Payment Information</p>
                                        <small  style="color: #38AAC4;">Please make sure your payment proof is true</small>
                                    </div>
                                    <input type="hidden" name="registration_id" value="{{ $registration->id }}">
                                    <input type="hidden" name="payment_amount" value="{{ $payment_amount }}">
                                    <input type="hidden" name="payment_due" value="{{ $registration->payment_due }}">
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold" style="color: #1295C3;">Payment Method</label>
                                            <select class="form-select" name="payment_method" required style="color: #38AAC4;">
                                                <option value="" disabled selected >Payment Method</option>
                                                @foreach($paymentProviders as $paymentProvider)
                                                    <option value="{{ $paymentProvider->name }}">{{ $paymentProvider->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold" style="color: #1295C3;">Account Name</label>
                                            <input type="text" class="form-control @error ('account_name') is-invalid @enderror" name="account_name" placeholder="Account Name" style="color: #38AAC4;" required>
                                            @error('account_name')
                                                <span class="invalid-feedback" role="alert" >
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold" style="color: #1295C3;">Account Number</label>
                                            <input type="text" class="form-control @error ('account_number') is-invalid @enderror" name="account_number" placeholder="Account Number" required>
                                            @error('account_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold" style="color: #1295C3;">Payment Proof</label>
                                            <input type="file" class="form-control @error ('payment_proof') is-invalid @enderror" name="payment_proof" required>
                                            @error('payment_proof')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <small>Minimal file size : 2 MB</small>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="mt-3 py-2 btn w-100 border-0" style="background-color: #1295C3; color:white;">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <section id="paymentDestination" class="col-lg-5 col-12">
                    <div class="card sticky-top" style="top: 5rem; border: 1px solid #1295C3;">
                        <div class="card-body">
                            <div class="card-body">
                                <div class="mb-3">
                                    <p class="fw-semibold fs-3 m-0" style="color: #1295C3;">Payment Destination</p>
                                    <small style="color: #38AAC4;">Please check again before transfer!</small>
                                </div>
                                <table class="table table-borderless m-0">
                                    <tbody>
                                        <tr>
                                            <td class="text-truncate col-7 p-0">
                                                <p class="my-1 fw-bold" style="color: #1295C3;">Destination Bank</p>
                                            </td>
                                            <td class="text-end" style="color: #38AAC4;">BCA</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate col-7 p-0">
                                                <p class="my-1 fw-bold" style="color: #1295C3;">Account Name</p>
                                            </td>
                                            <td class="text-end" style="color: #38AAC4;">DIANNE MANUELLA SOEGIANT</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate col-7 p-0">
                                                <p class="my-1 fw-bold" style="color: #1295C3;">Account Number</p>
                                            </td>
                                            <td class="d-flex justify-content-end align-items-center">

                                                <p class="text-end m-0" id="noRek" style="color: #38AAC4;">7615459917</p>
                                                <i class="bi bi-clipboard-fill d-flex justify-content-end ps-3" type="button" onclick="copyRek()" style="color: #38AAC4;"></i>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate col-7 p-0">
                                                <p class="my-1 fw-bold" style="color: #1295C3;">Transfer Amount</p>
                                            </td>
                                            <td class="text-end" style="color: #38AAC4;">Rp {{ number_format($payment_amount, 0, '.', '.') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </form>
</x-app>

<script>
    $()
    let text = document.getElementById('noRek').innerHTML;
    const copyRek = async () => {
        const textElement = document.getElementById('noRek');
        const originalText = 6044382606
        try {
            await navigator.clipboard.writeText(text);
            console.log('Content copied to clipboard');
            textElement.innerHTML = 'Number Copied!';
            setTimeout(() => {
                textElement.innerHTML = originalText;
            }, 1000);

        } catch (err) {
            console.error('Failed to copy ', err);
            flag = false;
            textElement.innerHTML = originalText;
        }

    }
</script>
