@extends('admin.layouts.layout')
@section('content')
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Experience</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Experience Section</h4>
                  </div>
                  <div class="card-body">

                  <form action="{{route('admin.experience.update',1)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')


                    {{-- Image  --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">Choose File</label>
                          <input type="file" name="image" id="image-upload" />
                        </div>
                      </div>
                    </div>

                    {{-- Title  --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="title" value="{{$experience->title}}">
                      </div>
                    </div>


                    {{-- Description  --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote" name="description">{!! $experience->description !!}</textarea>
                      </div>
                    </div>


                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="phone" value="{{$experience->phone}}">
                      </div>
                    </div>


                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="email" value="{{$experience->email}}">
                      </div>
                    </div>


                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
@endsection


@push('scripts')
<script>
    $(document).ready(function(){
      $('#image-preview').css({
        'background-image':'url("{{asset($experience->image)}}")',
        'background-size': 'cover',
        'background-position': 'center center',
      })
  });
</script>
@endpush