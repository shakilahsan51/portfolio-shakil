@extends('admin.layouts.layout')
@section('content')
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>SEO Section Setting</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update SEO Setting</h4>a
                  </div>
                  <div class="card-body">

                  <form action="{{route('admin.seo-setting.update',1)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')

                    {{-- Title  --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">SEO Title</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="title" value="{{ $seo->title }}">
                      </div>
                    </div>

                    {{-- KeywOrd  --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">SEO Keyword</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="keyword" value="{{ $seo->keyword }}">
                        <code>Keyword Will be comma seperated</code>
                      </div>
                      
                    </div>
                    

                    
                    {{-- Description  --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">SEO Description</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea name="description" id="" class="form-control" style="height: 100px">{!! $seo->description !!}</textarea>
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