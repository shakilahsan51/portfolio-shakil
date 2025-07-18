@extends('admin.layouts.layout')
@section('content')
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>General Setting</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update General Setting</h4>
                  </div>
                  <div class="card-body">

                  <form action="{{route('admin.general-setting.update',1)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')


                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logo Preview</label>
                      <div class="col-sm-12 col-md-7">
                          <img src="{{ asset($settings->logo) }}" alt="Logo" width="150px">
                      </div>
                    </div>


                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logo</label>
                      <div class="col-sm-12 col-md-7">
                         <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" name="logo">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                      </div>
                    </div>


                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Footer logo Preview</label>
                      <div class="col-sm-12 col-md-7">
                          <img src="{{ asset($settings->footer_logo) }}" alt="Logo" width="150px">
                      </div>
                    </div>


                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Footer Logo </label>
                      <div class="col-sm-12 col-md-7">
                         <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" name="footer_logo">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Favicon Preview</label>
                      <div class="col-sm-12 col-md-7">
                          <img src="{{ asset($settings->favicon) }}" alt="Logo" width="150px">
                      </div>
                    </div>

                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Favicon</label>
                      <div class="col-sm-12 col-md-7">
                         <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" name="favicon">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
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