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
                            <h6>Landing</h6>
                        </div>

                        <a href="{{ url('/admin/show_landing') }}" class="btn btn-dark w-10 ms-4">
                            <i class="bi bi-arrow-left"></i>
                            Back
                        </a>

                        <div class="card-body px-0 pt-0 pb-2">

                            <form action="{{ url('/admin/update_landing_confirm', $landing->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row text-center m-3">

                                    {{-- wedding --}}
                                    <div class="col-4">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            Wedding Video
                                        </label>
                                        <input type="file" class="form-control" id="wedding_video" name="wedding_video"
                                            accept="video/*">

                                    </div>

                                    <div class="col-3">
                                        <label for="">

                                            Wedding Title
                                        </label>
                                        <input type="text" name="wedding_title" class="form-control"
                                            value="{{ $landing->wedding_title }}">
                                    </div>


                                    <div class="col-5">
                                        <label for="">

                                            Wedding Text
                                        </label>
                                        <textarea type="text" name="wedding_text" class="form-control" cols="5"
                                            rows="4">{{ $landing->wedding_text }}</textarea>
                                    </div>
                                </div>




                                {{-- club --}}

                                <div class="row text-center m-3">


                                    <div class="col-4">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            Club Video
                                        </label>
                                        <input type="file" class="form-control" id="club_video" name="club_video"
                                            accept="video/*">

                                    </div>

                                    <div class="col-3">
                                        <label for="">

                                            Club Title
                                        </label>
                                        <input type="text" name="club_title" class="form-control"
                                            value="{{ $landing->club_title }}">
                                    </div>


                                    <div class="col-5">
                                        <label for="">

                                            Club Text
                                        </label>
                                        <textarea type="text" name="club_text" class="form-control" cols="5"
                                            rows="4">{{ $landing->club_text }}</textarea>
                                    </div>
                                </div>






                        {{-- interactive --}}
                        <div class="row text-center m-3">
                            <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">
                                    Interactive Video
                                </label>
                                <input type="file" class="form-control" id="interactive_video" name="interactive_video"
                                    accept="video/*">

                            </div>

                            <div class="col-3">
                                <label for="">

                                    Interactive Title
                                </label>
                                <input type="text" name="interactive_title" class="form-control"
                                    value="{{ $landing->interactive_title }}">
                            </div>


                            <div class="col-5">
                                <label for="">

                                    Interactive Text
                                </label>
                                <textarea type="text" name="interactive_text" class="form-control" cols="5"
                                    rows="4">{{ $landing->interactive_text }}</textarea>
                            </div>
                        </div>

                        {{-- special --}}
                        <div class="row text-center m-3">
                            <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">
                                    Special Video
                                </label>
                                <input type="file" class="form-control" id="special_video" name="special_video"
                                    accept="video/*">

                            </div>

                            <div class="col-3">
                                <label for="">

                                    Special Title
                                </label>
                                <input type="text" name="special_title" class="form-control"
                                    value="{{ $landing->special_title }}">
                            </div>


                            <div class="col-5">
                                <label for="">

                                    Special Text
                                </label>
                                <textarea type="text" name="special_text" class="form-control" cols="5"
                                    rows="4">{{ $landing->special_text }}</textarea>
                            </div>
                        </div>

                            {{-- musical --}}
                            <div class="row text-center m-3">
                                <div class="col-4">
                                    <label for="exampleFormControlInput1" class="form-label">
                                        Musical Video
                                    </label>
                                    <input type="file" class="form-control" id="musical_video" name="musical_video"
                                        accept="video/*">

                                </div>

                                <div class="col-3">
                                    <label for="">

                                        Musical Title
                                    </label>
                                    <input type="text" name="musical_title" class="form-control"
                                        value="{{ $landing->musical_title }}">
                                </div>


                                <div class="col-5">
                                    <label for="">

                                        Musical Text
                                    </label>
                                    <textarea type="text" name="musical_text" class="form-control" cols="5"
                                        rows="4">{{ $landing->musical_text }}</textarea>
                                </div>
                            </div>

                                {{-- kid --}}
                        <div class="row text-center m-3">
                            <div class="col-4">
                                <label for="exampleFormControlInput1" class="form-label">
                                    Kid Video
                                </label>
                                <input type="file" class="form-control" id="kid_video" name="kid_video"
                                    accept="video/*">

                            </div>

                            <div class="col-3">
                                <label for="">

                                    Kid Title
                                </label>
                                <input type="text" name="kid_title" class="form-control"
                                    value="{{ $landing->kid_title }}">
                            </div>


                            <div class="col-5">
                                <label for="">

                                    Kid Text
                                </label>
                                <textarea type="text" name="kid_text" class="form-control" cols="5"
                                    rows="4">{{ $landing->kid_text }}</textarea>
                            </div>
                        </div>

                            {{-- occasion --}}
                            <div class="row text-center m-3">
                                <div class="col-4">
                                    <label for="exampleFormControlInput1" class="form-label">
                                        Occasion Video
                                    </label>
                                    <input type="file" class="form-control" id="occasion_video" name="occasion_video"
                                        accept="video/*">

                                </div>

                                <div class="col-3">
                                    <label for="">

                                        Occasion Title
                                    </label>
                                    <input type="text" name="occasion_title" class="form-control"
                                        value="{{ $landing->occasion_title }}">
                                </div>


                                <div class="col-5">
                                    <label for="">

                                        Occasion Text
                                    </label>
                                    <textarea type="text" name="occasion_text" class="form-control" cols="5"
                                        rows="4">{{ $landing->occasion_text }}</textarea>
                                </div>
                            </div>

                        </div>

                    </div>

                        </div>

                    </div>

                </div>

                    <div class="row">
                        <div class="col-12">
                            <button class="d-block m-auto btn btn-dark w-10 text-center" type="submit">Submit</button>
                        </div>
                    </div>
                    </form>

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
