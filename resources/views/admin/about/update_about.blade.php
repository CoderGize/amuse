<button type="button" class="btn btn-dark mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="bi bi-pencil"></i>
    Update
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update About Page
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/update_about/' . $about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Video URL
                        </label>
                        <div class="d-flex flex-column align-items-center">
                            
                            <iframe  src="{{$about->video}}" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                            <input type="text" name="video" class="form-control mt-2" id="exampleFormControlInput1" value="{{ $about->video }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                           Video Status
                        </label>
                        <div class=" m-auto">
                            <select class=" form-select" name="video_sh">
                                <option value="0"
                                    {{ $about->video_sh == '0' ? 'selected' : '' }}>
                                    Hidden
                                </option>
                                <option value="1"
                                    {{ $about->video_sh == '1' ? 'selected' : '' }}>
                                    Visible
                                </option>
                            </select>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">

                           Title
                        </label>
                        <input type="text" name="title" class="form-control" value="{{ $about->title }}" >
                    </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                           Text
                        </label>
                        <textarea name="text" class="form-control" rows="4" cols="50">{{ $about->text }}</textarea>
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
