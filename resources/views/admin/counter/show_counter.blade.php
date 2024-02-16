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

                            <div class="col-12 d-flex justify-content-center">
                                <form action="/admin/counter" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  @if($show->counter_sh == 1)
                                  <input type="hidden"  name="datash" value="0">
                                  @endif
                                  <div class="form-check form-switch">
                                      <input class="form-check-input {{$show->counter_sh == 1 ? 'bg-success' : 'bg-danger' }}" type="checkbox" role="switch" id="flexSwitchCheckDefault"
                                      onchange="this.form.submit()" value="{{ $show->counter_sh == 1 ? '0' : '1' }}" name="datash" {{$show->counter_sh == 1 ? 'checked' : ''}}>
                                      <label class="form-check-label" for="flexSwitchCheckDefault">Show Section</label>
                                    </div>
                                </form>
                              </div>

                            <div class="col-12">
                                <div class="d-flex justify-content-center">

                                    @include('admin.counter.update_counter')

                                </div>
                            </div>
                        </div>


                        <div class="row text-center my-3">
                            <div class="col-4">
                                <label for="">
                                   Number 1
                                </label>
                                <p>
                                    {{ $counter->nb1 }}
                                </p>
                            </div>

                            <div class="col-4">
                                <label for="">
                                   Number 2
                                </label>
                                <p>
                                    {{ $counter->nb2 }}
                                </p>
                            </div>

                            <div class="col-4">
                                <label for="">
                                   Number 3
                                </label>
                                <p>
                                    {{ $counter->nb3 }}
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
