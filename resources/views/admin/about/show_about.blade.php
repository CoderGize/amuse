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
                            <h6>About Section</h6>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-center">

                                    @include('admin.about.update_about')

                                </div>
                            </div>
                        </div>


                        <div class="row text-center my-3">
                            <div class="col-6">
                                <label for="">
                                   Title
                                </label>
                                <p>
                                    {{ $about->title }}
                                </p>
                            </div>

                            <div class="col-6">
                                <label for="">
                                   Text
                                </label>
                                <p>
                                    {{ $about->text }}
                                </p>
                            </div>

                        </div>

                        <div class="card-body px-0 pt-0 mt-4 pb-2">
                            <div class="row text-center">
                                <div class="col-6">
                                    <label for="">
                                       Video

                                    </label>

                                    <div class="">
                                        @if ($about->video != null)
                                            <a href="{{ $about->video }}" class="w-25 m-auto">{{ $about->video }}</a>
                                        @else
                                            <p class="text-danger">No Data</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label for="">
                                        Video status

                                     </label>

                                     <div class="">
                                        @if ($about->video_sh == 1)
                                        <span class="badge badge-sm bg-gradient-success">Visible</span>
                                    @else
                                        <span class="badge badge-sm bg-gradient-danger">Hidden</span>
                                    @endif
                                     </div>

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
