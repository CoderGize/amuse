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
                            <h6>Occasion</h6>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-center">

                                    @include('admin.occasion.add_occasion')

                                </div>
                            </div>
                        </div>

                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr class="text-center">
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Image
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">


                                                Title
                                            </th>
                                            <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">


                                            Text
                                        </th>
                                        <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">

                                       Occasion URL
                                    </th> <th
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">

                                    Type
                                </th>
                                            {{-- <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Created At
                                            </th> --}}
                                            <th class="text-secondary opacity-7"></th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($occasion as $data)
                                            <tr class="text-center">
                                                <td >
                                                        <img src="/occasion/{{ $data->img }}" async class="d-block m-auto" width="50px" alt="">

                                                </td>


                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $data->title }}
                                                    </p>
                                                </td>

                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $data->text }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                       <a href="{{ $data->url }}" style="color: blue">{{ $data->url }}</a>
                                                    </p>
                                                </td>   <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $data->type }}
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                  @include('admin.occasion.update_occasion')
                                                </td>

                                                <td class="align-middle">
                                                    <a href="{{ url('admin/delete_occasion', $data->id) }}"
                                                        class="text-danger font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit occasion"
                                                        onclick="return confirm('Are you sure you want to delete this occasion?')">
                                                        Delete
                                                        <i class="bi bi-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="16">
                                                    <p class="text-xs text-center text-danger font-weight-bold mb-0">
                                                        No Data !
                                                    </p>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                {{ $occasion->render('admin.pagination') }}
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
