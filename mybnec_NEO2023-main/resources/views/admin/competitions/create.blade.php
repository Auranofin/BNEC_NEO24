<x-app title="Add Competition | NEO 2022">

    <x-slot name="navbarAdmin"></x-slot>
    <x-slot name="sidebarAdmin"></x-slot>

    <div class="container p-5" style="max-width: 60rem">
        <h4 class="mb-4 fw-semibold text-primary">Add New Competition</h4>

        <form method="POST" action="{{ route('competitions.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card card-custom mb-3">
                <div class="card-body">
                    <h5 class="mb-4">Upload Logo</h5>
                    <div class="row">
                        <div class="col-3">
                            <label for="logo" class="col-form-label">
                                Competition Logo <span class="text-danger">*</span>
                            </label>
                            <div class="form-text pe-3">
                                The image format is .jpg .jpeg .png and a minimum size of 300 x 300px (For optimal
                                images use a minimum size of 700 x 700 px).
                            </div>
                        </div>
                        <div class="col">
                            <label for="logo">
                                <div class="input-img text-center text-secondary">
                                    <div class="input-img-label p-4">
                                        <img class="icon mb-2" src="/storage/images/assets/add_img.svg" width="70%">
                                        <small>Add Image</small>
                                    </div>
                                    <img class="img-preview" src="#" width="100%" hidden>
                                </div>
                            </label>
                            <input class="form-control @error('logo') is-invalid @enderror" type="file"
                                id="logo" name="logo" required hidden />

                            @error('logo')
                                <div class="invalid-feedback">
                                    Mininum size: 300 x 300px and maximum size: 700 x 700px.
                                </div>

                                <style>
                                    .input-img {
                                        border-color: red;
                                    }
                                </style>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-custom mb-3">
                <div class="card-body">
                    <h5 class="mb-4">Competition Details</h5>

                    <div class="row mb-3">
                        <label class="col-3 col-form-label">Competition Name <span class="text-danger">*</span></label>
                        <div class="col">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-3 col-form-label">Price <span class="text-danger">*</span></label>
                        <div class="input-group col">
                            <span class="input-group-text">Rp</span>
                            <input class="form-control price-format" type="text" name="normal_price"
                                value="{{ old('normal_price') }}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-3 col-form-label">Total Quota <span class="text-danger">*</span></label>
                        <div class="col">
                            <input class="form-control" type="number" name="total_quota"
                                value="{{ old('total_quota') }}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-3 col-form-label">Early Price</label>
                        <div class="input-group col">
                            <span class="input-group-text">Rp</span>
                            <input class="form-control price-format" type="text" name="early_price"
                                value="{{ old('early_price') }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-3 col-form-label">Early Quota</label>
                        <div class="col">
                            <input class="form-control" type="number" name="early_quota"
                                value="{{ old('early_quota') }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-3 col-form-label">Link Group</label>
                        <div class="col">
                            <input class="form-control" type="text" name="link_group_whatsapp"
                                value="{{ old('link_group_whatsapp') }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-3 col-form-label">QR Group</label>
                        <div class="col">
                            <input class="form-control" type="file" name="qr_code_whatsapp"
                                value="{{ old('qr_code_whatsapp') }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-custom mb-3">
                <div class="card-body">
                    <h5 class="mb-4">Description</h5>

                    <div class="row mb-3">
                        <label class="col-3 col-form-label">Content</label>
                        <div class="col">
                            <textarea class="form-control" name="content" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-3 col-form-label">E-Booklet</label>
                        <div class="col">
                            <input class="form-control" type="text" name="ebooklet"
                                value="{{ old('ebooklet') }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-2 d-flex justify-content-end">
                <a href="{{ route('competitions.index') }}" type="button"
                    class="btn btn-outline-primary py-2 px-5">
                    Cancel
                </a>
                <button type="submit" class="btn btn-primary py-2 px-5">Add</button>
            </div>
        </form>
    </div>
</x-app>
