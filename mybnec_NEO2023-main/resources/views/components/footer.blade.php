<footer id="footer" class="position-relative overflow-hidden mb-0">
    <div class="position-relative layer1">
        <div class="posititon-absolute layer2">
            <div class="d-flex justify-content-center align-items-center position-relative "
                style="padding-top: 2rem; padding-bottom: 4rem; ">
                <div class="container">
                    <div class="row">
                        <div class="d-flex d-md-none gap-4 align-items-end justify-content-center my-3">
                            <div>
                                <img src="/storage/logo/BNEC/Black.svg" alt="" class="img-fluid" width="120">
                            </div>
                            <div>
                                <a class="navbar-brand" href="{{ route('home') }}">
                                    <img src="/storage/logo/NEO-FULL/Colored.png" alt="NEO" width="120"
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 text-center text-lg-start my-3 d-md-flex d-none flex-column justify-content-between gap-3" style="color: white;">
                            <div>
                                <a class="navbar-brand" href="{{ route('home') }}">
                                    <img src="/storage/logo/NEO-FULL/Colored.png" alt="NEO" width="300"
                                        class="img-fluid">
                                </a>
                                <img src="/storage/app/public/assets/bnec-logo-white 1.png" alt="">
                            </div>
                            {{-- <div class="d-md-block d-none">
                                <img src="/storage/logo/BNEC/White.png" alt="" class="img-fluid" width="250">
                            </div> --}}
                        </div>
                        <div class="col-md-4 col-12 text-center text-lg-center my-3 d-flex flex-column justify-content-center gap-3">
                            <div>
                                <h4 class="neoHeader" style="">INVITATION LETTER</h4>
                                <button class="btn neoContent requestBtn" data-bs-toggle="modal" data-bs-target="#showRequestLetter">
                                    CLICK HERE
                                </button>
                                    {{-- Jadiin rata tengah kayak tulisan atasnya, caps lock --}}
                            </div>

                        </div>
                        <div class="col-md-4 col-12 text-center text-lg-start my-3 d-flex flex-column justify-content-center neoContent" style="font-family:GoudyOld">


                                    <h4 class="mb-3">Contact Us!</h4>
                                    <p><i class="bi bi-envelope-fill me-2 fa-lg"></i>neo.bnec@gmail.com</p>
                                    <p><i class="bi bi-instagram me-2 fa-lg"></i>@bnec.neo</p>
                                    <p><i class="bi bi-youtube me-2 fa-lg"></i>NEO 2024</p>
                                    <p><i class="bi bi-line me-2 fa-lg"></i>@816tzkes</p>
                                    <img src="/storage/app/public/assets/bnec-logo-white 1.png" alt="">
                        </div>

                    </div>

                    <div class="position-relative bottom-0 end-0 d-none d-lg-block">
                        <div>
                            <img src="{{url('/storage/logo/BNEC/Black.svg')}}" alt="" class="img-fluid" width="300">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="text-center text-light py-2 neoContent" style="background-color: #522C22; z-index:5;">
        <small>
            <b>
                <i class="bi bi-c-circle me-1"></i> 2024 BINUS English Club | This website is designed and built with
                love by Information and Technology Division</b>
        </small>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="showRequestLetter" tabindex="-1" aria-labelledby="showRequestLetterLabel"
        aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="pt-3">
                    <h1 class="fs-5 text-center" id="showRequestLetterLabel" style="font-family: Glacial-Bold">Request Invitation Letter</h1>
                    <hr>
                </div>
                <div class="modal-body px-4">
                    <form action="{{ route('request-invitations.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="code" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="mb-4">
                            <label for="name" class="form-label">Institution</label>
                            <input type="text" class="form-control" name="institution">
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-outline-primary col-12" data-bs-dismiss="modal">Cancel</button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-primary col-12">Send</button>
                                </div>


                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<style>
    .glacialBold {
        font-family: Glacial-Bold;
    }

    .buffaloText {
        font-family: Buffalo-Grunge;
    }

    .registerbtn {
        background-color: #D64C25;
        border-radius: 0;
    }

    .layer1 {

        /* Set the background color to transparent */
        background: linear-gradient(360deg, #D38E31 5%, #F0DF99 96%);
    }

    .primary-btn-neo2024{
        font-family: "GoudyOld";
        font-weight: 600;
        background: white;
        color:#522C22;
        border-radius: 16px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
    }

    .primary-btn-neo2024:hover{
        font-family: "GoudyOld";
        background: #522C22;
        color:white;
        border-radius: 16px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
    }

    .requestBtn {
        background-color: white;
        color: #522C22;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        font-size: 20px;
        width: 175px;
        height: 50px;
        border-radius: 16px;
        font-weight: 600;
        font-family: "GoudyOld" !important;
    }

    .requestBtn:hover{
        font-family: "GoudyOld";
        background: #522C22;
        color:white;
        border-radius: 16px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
    }

</style>
