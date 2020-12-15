@extends('Schema.view_stucture')
@section('Content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Setting</h1>
        </div>
        <div class="row">
            <div class="col">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
            </div>
        </div>
        <form action="{{url('site/admin/setting/1')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-black-50">Setting Website</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Nama website</label>
                                <input type="text" id="title" class="form-control" name="nama_website" autofocus=""
                                    value="{{$setting->nama_website}}" required>
                                @error('nama_website')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Kode Analitic Google</label>
                                <input type="text" id="title" class="form-control" name="kode_analitic" autofocus=""
                                    value="{{$setting->kode_analitic}}" required>
                                @error('kode_analitic')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-black-50">Meta data</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Logo Website</label>
                                <div class="mb-2">
                                    <img src="" class="img-fluid" alt="" id="upload-img-preview" style="display: none;"
                                        required>
                                    <a href="#" class="text-danger" id="upload-img-delete" style="display: none;">Delete
                                        Logo Website Image</a>
                                </div>
                                <div class="mb-2">
                                    <img src="{{asset($setting->logo)}}" class="img-fluid" alt="">
                                    Logo Website Sebelumnya
                                </div>
                                <div class="custom-file">
                                    <input type="file" accept="image/*" name="logo" id="cover"
                                        class="custom-file-input js-upload-image form-control">
                                    <label class="custom-file-label " for="cover">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-whitesmoke">
                            <button type="submit" class="btn btn-simpan  btn-primary">
                                Simpan
                            </button>

                            <a href="#" class="btn btn-danger  btn-secondary">
                                Batal
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>
@endsection
