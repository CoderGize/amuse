<button type="button" class="btn btn-dark mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="bi bi-pencil"></i>
    Update
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update counter Page
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/update_counter/' . $counter->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">



                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">

                           Number 1
                        </label>
                        <input type="number" name="nb1" class="form-control" value="{{ $counter->nb1 }}" >
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">

                           Number 2
                        </label>
                        <input type="number" name="nb2" class="form-control" value="{{ $counter->nb2 }}" >
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">

                           Number 3
                        </label>
                        <input type="number" name="nb3" class="form-control" value="{{ $counter->nb3 }}" >
                    </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                           Text 1
                        </label>
                        <textarea name="text1" class="form-control" rows="4" cols="5">{{ $counter->text1 }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                           Text 2
                        </label>
                        <textarea name="text2" class="form-control" rows="4" cols="4">{{ $counter->text2 }}</textarea>
                    </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                           Text 3
                        </label>
                        <textarea name="text3" class="form-control" rows="4" cols="5">{{ $counter->text3 }}</textarea>
                    </div>




                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark">Update
                        {{-- <i class="bi bi-plus-lg"></i> --}}
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
