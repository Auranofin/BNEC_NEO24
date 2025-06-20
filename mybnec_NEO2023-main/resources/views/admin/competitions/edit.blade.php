<x-app title="Edit Competition | NEO 2022">

    <x-slot name="navbarAdmin"></x-slot>
    <x-slot name="sidebarAdmin"></x-slot>

    <div class="container p-5" style="max-width: 60rem">
        <h4 class="mb-4 fw-semibold text-primary">Edit Competition</h4>

        <form method="POST" action="{{ route('competitions.update', $competition) }}" enctype="multipart/form-data">
            @csrf

            <div class="card card-custom mb-3">
                <div class="card-body">
                    <h5 class="mb-4">Upload Logo</h5>

                    <div class="row">
                        <div class="col-3">
                            <label for="logo" class="col-form-label">
                                Competition Logo <span class="text-danger">*</span>
                            </label>
                            <div class="form-text">
                                The image format is .jpg .jpeg .png and a minimum size of 300 x 300px (For optimal
                                images use a minimum size of 700 x 700 px).
                            </div>
                        </div>
                        <div class="col">
                            <label for="logo">
                                <div class="input-img text-center text-secondary">
                                    <img class="img-preview rounded-3"
                                        src="/storage/images/competitions/{{ $competition->logo }}" width="100%">
                                </div>
                            </label>
                            <input class="form-control @error('logo') is-invalid @enderror" id="logo"
                                name="logo" type="file" hidden />
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
                            <input type="text" class="form-control" name="name" value="{{ $competition->name }}"
                                required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-3 col-form-label">Normal Price <span class="text-danger">*</span></label>
                        <div class="input-group col">
                            <span class="input-group-text">Rp</span>
                            <input class="form-control price-format" type="text" name="normal_price"
                                value="{{ $competition->normal_price }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-3 col-form-label">Total Quota <span class="text-danger">*</span></label>
                        <div class="col">
                            <input class="form-control" type="number" name="total_quota"
                                value="{{ $competition->total_quota }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-3 col-form-label">Early Price</label>
                        <div class="input-group col">
                            <span class="input-group-text">Rp</span>
                            <input class="form-control price-format" type="text" name="early_price"
                                value="{{ $competition->early_price }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-3 col-form-label">Early Quota</label>
                        <div class="col">
                            <input class="form-control" type="number" name="early_quota"
                                value="{{ $competition->early_quota }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-3 col-form-label">Link Group</label>
                        <div class="col">
                            <input class="form-control" type="text" name="link_group_whatsapp"
                                value="{{ $competition->link_group_whatsapp }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-3 col-form-label">QR Group</label>
                        <div class="col">
                            <input class="form-control" type="file" name="qr_code_whatsapp"
                                value="{{ $competition->qr_code_whatsapp }}">
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
                            <textarea class="form-control" name="content" value={{ $competition->content }} rows="3">{{ $competition->content }}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-3 col-form-label">E-Booklet</label>
                        <div class="col">
                            <input class="form-control" type="text" name="ebooklet" placeholder="link drive"
                                value="{{ $competition->ebooklet }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-2 d-flex justify-content-end">
                <a href="{{ route('competitions.index') }}" type="button"
                    class="btn btn-outline-primary py-2 px-5">
                    Cancel
                </a>
                @method('PUT')
                <button type="submit" class="btn btn-primary py-2 px-5">Save Changes</button>
            </div>
        </form>
    </div>
</x-app>
