<x-app title="Participants | NEO 2022">

    <x-slot name="navbarAdmin"></x-slot>
    <x-slot name="sidebarAdmin"></x-slot>

    <div class="container p-5" id="page">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="m-0 fw-semibold text-primary">Participant List</h4>
            <div>
                <a href="{{ route('participants.account') }}" class="btn btn-primary btn-outline-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-gear me-2" viewBox="0 0 16 16">
                        <path
                            d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                    </svg>Account List
                </a>
            </div>
        </div>


        <div class="card card-custom p-0 px-4 mb-3">
            <ul class="nav nav-tabs border-0" id="participantTab" role="tablist">
                @foreach ($competitions as $competition)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $loop->first ? 'active' : '' }} text-muted" data-bs-toggle="tab"
                            data-bs-target="#tab{{ $competition->id }}" type="button" role="tab">
                            {{ $competition->name }}
                            @if ($competition->name == 'Debate')
                                ({{ $participantsDebate / 2 }})
                            @elseif($competition->name == 'Essaywriting')
                                ({{ $participantsNewscasting }})
                            @elseif($competition->name == 'Storytelling')
                                ({{ $participantsStorytelling }})
                            @elseif($competition->name == 'Speech')
                                ({{ $participantsSpeech }})
                            @endif
                        </button>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="tab-content">
            @foreach ($competitions as $competition)
                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab{{ $competition->id }}"
                    role="tabpanel" tabindex="0">
                    <div class="card card-custom">
                        <div class="card-body">
                            @if (count($competition->debateTeams) > 0)
                                <table class="table table-debate">
                                    <thead class="table-light">
                                        <tr class="text-secondary">
                                            <th></th>
                                            <th>TEAM NAME</th>
                                            <th>SPEAKERS</th>
                                            <th>GRADE</th>
                                            <th>PHONE</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($competition->debateTeams as $debateTeam)
                                            <tr>
                                                <td class="align-middle">
                                                    <button class="btn btn-outline-light btn-sm" type="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#show{{ $debateTeam->id }}">
                                                        <i class="fa-solid fa-chevron-down text-muted"></i>
                                                    </button>
                                                </td>
                                                <td class="align-middle">{{ $debateTeam->team_name }}</td>
                                                <td class="align-middle">
                                                    @foreach ($debateTeam->registrationDetail->participants as $participant)
                                                        {{ $participant->name }}<br>
                                                    @endforeach
                                                </td>
                                                <td class="align-middle">
                                                    @foreach ($debateTeam->registrationDetail->participants as $participant)
                                                        {{ $participant->university_year }}<br>
                                                    @endforeach
                                                </td>
                                                <td class="align-middle">
                                                    @foreach ($debateTeam->registrationDetail->participants as $participant)
                                                        {{ $participant->phone_number }}<br>
                                                    @endforeach
                                                </td>
                                                <td class="align-middle text-end">
                                                    <button class="btn btn-outline-light btn-sm" type="button"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bi bi-three-dots-vertical text-muted"></i>
                                                    </button>
                                                    <ul class="dropdown-menu p-1 border-0 shadow-sm rounded-3">
                                                        @if ($debateTeam->registrationDetail->registration->companion)
                                                            <li>
                                                                <button type="button" data-bs-toggle="modal"
                                                                    data-bs-target="#showCompanion{{ $debateTeam->registrationDetail->id }}"
                                                                    class="dropdown-item p-2 rounded-3">
                                                                    <i class="bi bi-person-badge me-2"></i>Companion
                                                                    Data
                                                                </button>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </td>
                                            </tr>

                                            <x-modal-confirmation action="destroy" title="Competition Withdrawal"
                                                name="registration-details" :model='$debateTeam->registrationDetail'>
                                                Are you sure want to withdraw {{ $debateTeam->name }} from the
                                                competition?
                                            </x-modal-confirmation>

                                            {{-- MODAL DEBATE TEAM --}}
                                            <div class="modal fade" id="show{{ $debateTeam->id }}" tabindex="-1">
                                                <div
                                                    class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content border-0">
                                                        <div
                                                            class="modal-header d-flex justify-content-between text-primary p-4">
                                                            <h5 class="m-auto">{{ $debateTeam->name }}</h5>
                                                            <i class="fa-solid fa-xmark fa-xl" role="button"
                                                                data-bs-dismiss="modal"></i>
                                                        </div>
                                                        <div class="modal-body p-4 text-start">
                                                            <div class="row">
                                                                @foreach ($debateTeam->registrationDetail->participants as $participant)
                                                                    <div class="col-6 {{ $loop->first ? 'border-end' : '' }}"
                                                                        style="font-size: 13px;">
                                                                        <div class="row g-0 mb-2">
                                                                            <div class="col-3 text-muted">Name</div>
                                                                            <div class="col-1 text-muted">:</div>
                                                                            <div class="col">
                                                                                {{ $participant->name }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row g-0 mb-2">
                                                                            <div class="col-3 text-muted">Gender</div>
                                                                            <div class="col-1 text-muted">:</div>
                                                                            <div class="col">
                                                                                {{ $participant->gender }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row g-0 mb-2">
                                                                            <div class="col-3 text-muted">PHONE</div>
                                                                            <div class="col-1 text-muted">:</div>
                                                                            <div class="col">
                                                                                {{ $participant->phone_number }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row g-0 mb-2">
                                                                            <div class="col-3 text-muted">Email</div>
                                                                            <div class="col-1 text-muted">:</div>
                                                                            <div class="col">
                                                                                {{ $participant->email }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row g-0 mb-2">
                                                                            <div class="col-3 text-muted">Province
                                                                            </div>
                                                                            <div class="col-1 text-muted">:</div>
                                                                            <div class="col">
                                                                                {{ $participant->province }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row g-0 mb-2">
                                                                            <div class="col-3 text-muted">District/City
                                                                            </div>
                                                                            <div class="col-1 text-muted">:</div>
                                                                            <div class="col">
                                                                                {{ $participant->district }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row g-0 mb-2">
                                                                            <div class="col-3 text-muted">Address</div>
                                                                            <div class="col-1 text-muted">:</div>
                                                                            <div class="col">
                                                                                {{ $participant->address }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row g-0 mb-2">
                                                                            <div class="col-3 text-muted">Allergy</div>
                                                                            <div class="col-1 text-muted">:</div>
                                                                            <div class="col">
                                                                                {{ $participant->allergy }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row g-0 mb-2">
                                                                            <div class="col-3 text-muted">Grade</div>
                                                                            <div class="col-1 text-muted">:</div>
                                                                            <div class="col">
                                                                                {{ $participant->university_year }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row g-0 mb-2">
                                                                            <div class="col-3 text-muted">Institution
                                                                            </div>
                                                                            <div class="col-1 text-muted">:</div>
                                                                            <div class="col">
                                                                                {{ $participant->institution }}
                                                                            </div>
                                                                        </div>
                                                                        @if ($participant->binusian)
                                                                            <div class="row g-0 mb-2">
                                                                                <div class="col-3 text-muted">NIM
                                                                                </div>
                                                                                <div class="col-1 text-muted">:</div>
                                                                                <div class="col">
                                                                                    {{ $participant->binusian->nim }}
                                                                                </div>
                                                                            </div>
                                                                            <div class="row g-0 mb-2">
                                                                                <div class="col-3 text-muted">Region
                                                                                </div>
                                                                                <div class="col-1 text-muted">:</div>
                                                                                <div class="col">
                                                                                    {{ $participant->binusian->region }}
                                                                                </div>
                                                                            </div>
                                                                            <div class="row g-0 mb-2">
                                                                                <div class="col-3 text-muted">Faculty
                                                                                </div>
                                                                                <div class="col-1 text-muted">:</div>
                                                                                <div class="col">
                                                                                    {{ $participant->binusian->faculty }}
                                                                                </div>
                                                                            </div>
                                                                            <div class="row g-0 mb-2">
                                                                                <div class="col-3 text-muted">Major
                                                                                </div>
                                                                                <div class="col-1 text-muted">:</div>
                                                                                <div class="col">
                                                                                    {{ $participant->binusian->major }}
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @if ($debateTeam->registrationDetail->registration->companion)
                                                <div id="showCompanion{{ $debateTeam->registrationDetail->id }}"
                                                    class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered"
                                                        style="max-width: 28rem">
                                                        <div class="modal-content border-0">
                                                            <div
                                                                class="modal-header d-flex justify-content-between align-items-center p-4">
                                                                <h5 class="fw-semibold m-auto">Companion Data</h5>
                                                                <i class="fa-solid fa-xmark fa-xl" role="button"
                                                                    data-bs-dismiss="modal"></i>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row g-0 mb-2">
                                                                    <div class="col-3 text-muted">Name</div>
                                                                    <div class="col-1 text-muted">:</div>
                                                                    <div class="col">
                                                                        {{ $debateTeam->registrationDetail->registration->companion->name }}
                                                                    </div>
                                                                </div>
                                                                <div class="row g-0 mb-2">
                                                                    <div class="col-3 text-muted">Phone</div>
                                                                    <div class="col-1 text-muted">:</div>
                                                                    <div class="col">
                                                                        {{ $debateTeam->registrationDetail->registration->companion->phone_number }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            @elseif (count($competition->participants) > 0)
                                <table class="table table-participant">
                                    <thead class="table-light">
                                        <tr class="text-secondary">
                                            {{-- <th></th> --}}
                                            <th>NAME</th>
                                            <th>GRADE</th>
                                            <th>PHONE</th>
                                            <th>INSTITUTION</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($competition->participants as $participant)
                                            <tr>
                                                {{-- <td>
                                                    <button class="btn btn-outline-light btn-sm toggleChevron"
                                                        type="button" data-bs-toggle="modal"
                                                        data-bs-target="#show{{ $participant->id }}">
                                                        <i class="fa-solid fa-chevron-down text-muted"></i>
                                                    </button>
                                                </td> --}}
                                                <td class="align-middle">{{ $participant->name }}</td>
                                                <td class="align-middle">{{ $participant->university_year }}</td>
                                                <td class="align-middle">{{ $participant->phone_number }}</td>
                                                <td class="align-middle">{{ $participant->institution }}</td>
                                                <td class="align-middle text-end">
                                                    <button class="btn btn-outline-light btn-sm" type="button"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bi bi-three-dots-vertical text-muted"></i>
                                                    </button>
                                                    <ul class="dropdown-menu p-1 border-0 shadow-sm rounded-3">
                                                        @if ($participant->registrationDetail->registration->companion)
                                                            <li>
                                                                <button type="button" data-bs-toggle="modal"
                                                                    data-bs-target="#showCompanion{{ $participant->registrationDetail->id }}"
                                                                    class="dropdown-item p-2 rounded-3">
                                                                    <i class="bi bi-person-badge me-2"></i>Companion
                                                                    Data
                                                                </button>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </td>


                                                <x-modal-confirmation action="destroy" title="Competition Withdrawal"
                                                    name="registration-details" :model='$participant->registrationDetail'>
                                                    Are you sure want to withdraw {{ $participant->name }} from the
                                                    competition?
                                                </x-modal-confirmation>

                                                {{-- <div class="modal fade" id="show{{ $participant->id }}"
                                                    tabindex="-1">
                                                    <div
                                                        class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                                        <div class="modal-content border-0">
                                                            <div
                                                                class="modal-header d-flex justify-content-between text-primary p-4">
                                                                <h5 class="m-auto">{{ $participant->name }}</h5>
                                                                <i class="fa-solid fa-xmark fa-xl" role="button"
                                                                    data-bs-dismiss="modal"></i>
                                                            </div> --}}
                                                            <tr>
                                                            <td class="modal-body p-4 text-start" colspan="3">
                                                                <small>
                                                                    <div class="row ps-5">
                                                                        <div class="col-8">
    
                                                                            <div class="row g-0 mb-2">
                                                                                <div class="col-3 text-muted">Gender</div>
                                                                                <div class="col-1 text-muted">:</div>
                                                                                <div class="col-8">
                                                                                    {{ $participant->gender }}
                                                                                </div>
                                                                            </div>
                                                                            {{-- <div class="row g-0 mb-2">
                                                                                <div class="col-3 text-muted">PHONE</div>
                                                                                <div class="col-1 text-muted">:</div>
                                                                                <div class="col-8">
                                                                                    {{ $participant->phone_number }}
                                                                                </div>
                                                                            </div> --}}
                                                                            <div class="row g-0 mb-2">
                                                                                <div class="col-3 text-muted">Email</div>
                                                                                <div class="col-1 text-muted">:</div>
                                                                                <div class="col-8">
                                                                                    {{ $participant->email }}
                                                                                </div>
                                                                            </div>
                                                                            {{-- <div class="row g-0 mb-2">
                                                                                <div class="col-3 text-muted">Province
                                                                                </div>
                                                                                <div class="col-1 text-muted">:</div>
                                                                                <div class="col-8">
                                                                                    {{ $participant->province }}
                                                                                </div>
                                                                            </div>
                                                                            <div class="row g-0 mb-2">
                                                                                <div class="col-3 text-muted">District/City
                                                                                </div>
                                                                                <div class="col-1 text-muted">:</div>
                                                                                <div class="col-8">
                                                                                    {{ $participant->district }}
                                                                                </div>
                                                                            </div>
                                                                            <div class="row g-0 mb-2">
                                                                                <div class="col-3 text-muted">Address</div>
                                                                                <div class="col-1 text-muted">:</div>
                                                                                <div class="col-8">
                                                                                    {{ $participant->address }}
                                                                                </div>
                                                                            </div> --}}
                                                                            <div class="row g-0 mb-2">
                                                                                <div class="col-3 text-muted">Allergy</div>
                                                                                <div class="col-1 text-muted">:</div>
                                                                                <div class="col">
                                                                                    {{ $participant->allergy }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            {{-- <div class="row g-0 mb-2">
                                                                                <div class="col-3 text-muted">Grade</div>
                                                                                <div class="col-1 text-muted">:</div>
                                                                                <div class="col">
                                                                                    {{ $participant->university_year }}
                                                                                </div>
                                                                            </div> --}}
                                                                            {{-- <div class="row g-0 mb-2">
                                                                                <div class="col-3 text-muted">Institution
                                                                                </div>
                                                                                <div class="col-1 text-muted">:</div>
                                                                                <div class="col">
                                                                                    {{ $participant->institution }}
                                                                                </div>
                                                                            </div> --}}
                                                                            @if ($participant->binusian)
                                                                                <div class="row g-0 mb-2">
                                                                                    <div class="col-3 text-muted">NIM
                                                                                    </div>
                                                                                    <div class="col-1 text-muted">:</div>
                                                                                    <div class="col-8">
                                                                                        {{ $participant->binusian->nim }}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row g-0 mb-2">
                                                                                    <div class="col-3 text-muted">Region
                                                                                    </div>
                                                                                    <div class="col-1 text-muted">:</div>
                                                                                    <div class="col-8">
                                                                                        {{ $participant->binusian->region }}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row g-0 mb-2">
                                                                                    <div class="col-3 text-muted">Faculty
                                                                                    </div>
                                                                                    <div class="col-1 text-muted">:</div>
                                                                                    <div class="col-8">
                                                                                        {{ $participant->binusian->faculty }}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row g-0 mb-2">
                                                                                    <div class="col-3 text-muted">Major
                                                                                    </div>
                                                                                    <div class="col-1 text-muted">:</div>
                                                                                    <div class="col-8">
                                                                                        {{ $participant->binusian->major }}
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </small>
                                                            </td></tr>
                                                        {{-- </div>
                                                    </div>
                                                </div> --}}

                                                @if ($participant->registrationDetail->registration->companion)
                                                    <div id="showCompanion{{ $participant->registrationDetail->id }}"
                                                        class="modal fade" tabindex="-1">
                                                        <div class="modal-dialog modal-dialog-centered"
                                                            style="max-width: 28rem">
                                                            <div class="modal-content border-0">
                                                                <div
                                                                    class="modal-header d-flex justify-content-between align-items-center p-4">
                                                                    <h5 class="fw-semibold m-auto">Companion Data</h5>
                                                                    <i class="fa-solid fa-xmark fa-xl" role="button"
                                                                        data-bs-dismiss="modal"></i>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row g-0 mb-2">
                                                                        <div class="col-3 text-muted">Name</div>
                                                                        <div class="col-1 text-muted">:</div>
                                                                        <div class="col">
                                                                            {{ $participant->registrationDetail->registration->companion->name }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="row g-0 mb-2">
                                                                        <div class="col-3 text-muted">Phone</div>
                                                                        <div class="col-1 text-muted">:</div>
                                                                        <div class="col">
                                                                            {{ $participant->registrationDetail->registration->companion->phone_number }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            @else
                                <div class="text-center">
                                    <img src="/storage/images/assets/empty.webp" alt="No Registration Yet"
                                        width="20%">
                                    <h5 class="fw-semibold">No Participant Yet</h5>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app>
<style>
    .nav-link.active.text-muted {
        color: #38AAC4 !important;
    }

    .nav-link.text-muted:active {
        border: #38AAC4 !important;
    }
</style>
<script>
    document.onreadystatechange = function() {

        var state = document.readyState

        if (state == 'interactive') {
            document.getElementById('page').style.display = "none";
            console.log("halo");
        } else if (state == 'complete') {
            setTimeout(function() {
                document.getElementById('page').style.display = "block";
            }, 1000);
        };


    }
</script>
