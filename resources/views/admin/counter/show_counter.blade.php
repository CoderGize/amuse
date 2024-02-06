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
                            <h6>Counter Section</h6>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-center">

                                    @include('admin.counter.update_counter')

                                </div>
                            </div>
                        </div>


                        <div class="row text-center my-3">
                            <div class="col-6">
                                <label for="">
                                   Number 1
                                </label>
                                <p>
                                    {{ $counter->nb1 }}
                                </p>
                            </div>

                            <div class="col-6">
                                <label for="">
                                   Number 2
                                </label>
                                <p>
                                    {{ $counter->nb2 }}
                                </p>
                            </div>

                        </div>

                        <div class="row text-center my-3">
                            <div class="col-4">
                                <label for="">
                                   Text 1
                                </label>
                                <p>
                                    {{ $counter->text1 }}
                                </p>
                            </div>

                            <div class="col-4">
                                <label for="">
                                   Text 2
                                </label>
                                <p>
                                    {{ $counter->text2 }}
                                </p>
                            </div>

                            <div class="col-4">
                                <label for="">
                                   Text 3
                                </label>
                                <p>
                                    {{ $counter->text3 }}
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
