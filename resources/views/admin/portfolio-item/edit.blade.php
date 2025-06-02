@extends('admin.layouts.layout')
@section('content')
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Portfolio Item</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Portfolio Item</h4>
                  </div>
                  <div class="card-body">

                  <form action="{{route('admin.portfolio-item.update', $portfolioItem->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')

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
                        <input type="text" class="form-control" name="title" value="{{$portfolioItem->title}}">
                      </div>
                    </div>


                    {{-- Category  --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="category_id">
                          <option>Select</option>
                          @foreach ($categories as $category)
                            {{-- <option value="{{$category->id}}">{{$category->name}}</option> --}}
                             <option value="{{$category->id}}" {{ $portfolioItem->category_id == $category->id ? 'selected' : '' }}> {{$category->name}}
                          @endforeach
                        </select>
                      </div>
                    </div>


                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote" name="description">{{$portfolioItem->description}}</textarea>
                      </div>
                    </div>


                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Client</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="client" value="{{$portfolioItem->client}}">
                      </div>
                    </div>


                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Website</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="website" value="{{$portfolioItem->website}}">
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
        'background-image':'url("{{asset($portfolioItem->image)}}")',
        'background-size': 'cover',
        'background-position': 'center center',
      })
  });
</script>
@endpush