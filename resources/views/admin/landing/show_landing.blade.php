<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body class="g-sidenav-show   bg-gray-100">

    @include('admin.sidebar')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('admin.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Landing Section</h6>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-center">

                                    <a  href="{{ url('admin/update_landing', $landing->id) }}" class="btn btn-dark">
                                        <i class="bi bi-pen"></i>

                                        Update
                                    </a>


                                </div>
                            </div>
                        </div>

                        <div class="card-body px-0 pt-0 mt-4 pb-2">

                            {{-- wedding --}}
                            <div class="row text-center">
                                <div class="col-6">
                                    <label for="">
                                        Wedding Video
                                    </label>
                                    <div class="">
                                        @if ($landing->wedding_video != null)
                                            <video controls class="w-50" src="/landing/{{ $landing->wedding_video }}" alt="Wedding Video"></video>
                                        @else
                                            <p class="text-danger">No Data</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="">
                                        Wedding Title
                                    </label>
                                    <p>
                                        {{ $landing->wedding_title }}
                                    </p>
                                </div>

                                <div class="col-3">
                                    <label for="">
                                       Wedding Text
                                    </label>
                                    <p>
                                        {{ $landing->wedding_text }}
                                    </p>
                                </div>
                            </div>

                            {{-- club --}}

                            <div class="row text-center">
                                <div class="col-6">
                                    <label for="">
                                        Club Video
                                    </label>
                                    <div class="">
                                        @if ($landing->club_video != null)
                                            <video controls class="w-50" src="/landing/{{ $landing->club_video }}" alt="club Video"></video>
                                        @else
                                            <p class="text-danger">No Data</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="">
                                        Club Title
                                    </label>
                                    <p>
                                        {{ $landing->club_title }}
                                    </p>
                                </div>

                                <div class="col-3">
                                    <label for="">
                                       Club Text
                                    </label>
                                    <p>
                                        {{ $landing->club_text }}
                                    </p>
                                </div>
                            </div>

                            {{-- interactive --}}
                            <div class="row text-center">
                                <div class="col-6">
                                    <label for="">
                                        Interactive Video
                                    </label>
                                    <div class="">
                                        @if ($landing->interactive_video != null)
                                            <video controls class="w-50" src="/landing/{{ $landing->interactive_video }}" alt="interactive Video"></video>
                                        @else
                                            <p class="text-danger">No Data</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="">
                                        Interactive Title
                                    </label>
                                    <p>
                                        {{ $landing->interactive_title }}
                                    </p>
                                </div>

                                <div class="col-3">
                                    <label for="">
                                       Interactive Text
                                    </label>
                                    <p>
                                        {{ $landing->interactive_text }}
                                    </p>
                                </div>
                            </div>

                            {{-- special --}}
                            <div class="row text-center">
                                <div class="col-6">
                                    <label for="">
                                        special Video
                                    </label>
                                    <div class="">
                                        @if ($landing->special_video != null)
                                            <video controls class="w-50" src="/landing/{{ $landing->special_video }}" alt="special Video"></video>
                                        @else
                                            <p class="text-danger">No Data</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="">
                                        special Title
                                    </label>
                                    <p>
                                        {{ $landing->special_title }}
                                    </p>
                                </div>

                                <div class="col-3">
                                    <label for="">
                                       special Text
                                    </label>
                                    <p>
                                        {{ $landing->special_text }}
                                    </p>
                                </div>
                            </div>

                            {{-- musical --}}

                            <div class="row text-center">
                                <div class="col-6">
                                    <label for="">
                                        club Video
                                    </label>
                                    <div class="">
                                        @if ($landing->club_video != null)
                                            <video controls class="w-50" src="/landing/{{ $landing->club_video }}" alt="club Video"></video>
                                        @else
                                            <p class="text-danger">No Data</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="">
                                        club Title
                                    </label>
                                    <p>
                                        {{ $landing->club_title }}
                                    </p>
                                </div>

                                <div class="col-3">
                                    <label for="">
                                       club Text
                                    </label>
                                    <p>
                                        {{ $landing->club_text }}
                                    </p>
                                </div>
                            </div>

                            {{-- kid --}}
                            <div class="row text-center">
                                <div class="col-6">
                                    <label for="">
                                        kid Video
                                    </label>
                                    <div class="">
                                        @if ($landing->kid_video != null)
                                            <video controls class="w-50" src="/landing/{{ $landing->kid_video }}" alt="kid Video"></video>
                                        @else
                                            <p class="text-danger">No Data</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="">
                                        kid Title
                                    </label>
                                    <p>
                                        {{ $landing->kid_title }}
                                    </p>
                                </div>

                                <div class="col-3">
                                    <label for="">
                                       kid Text
                                    </label>
                                    <p>
                                        {{ $landing->kid_text }}
                                    </p>
                                </div>
                            </div>

                            {{-- occasion --}}

                            <div class="row text-center">
                                <div class="col-6">
                                    <label for="">
                                        occasion Video
                                    </label>
                                    <div class="">
                                        @if ($landing->occasion_video != null)
                                            <video controls class="w-50" src="/landing/{{ $landing->occasion_video }}" alt="occasion Video"></video>
                                        @else
                                            <p class="text-danger">No Data</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="">
                                        occasion Title
                                    </label>
                                    <p>
                                        {{ $landing->occasion_title }}
                                    </p>
                                </div>

                                <div class="col-3">
                                    <label for="">
                                       occasion Text
                                    </label>
                                    <p>
                                        {{ $landing->occasion_text }}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @include('admin.footer')
        </div>
    </main>

    @include('admin.script')

</body>

</html>
