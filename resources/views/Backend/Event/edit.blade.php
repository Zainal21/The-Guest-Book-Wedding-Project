@extends('Schema.view_stucture')
@section('Content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Event</h1>
        </div>
        <form action="{{route('event.update', $event->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-black-50">Event List</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Nama Acara</label>
                                <input type="text" id="title" class="form-control" name="nama_acara" autofocus=""
                                    value="{{$event->nama_acara}}" placeholder="Masukkan Nama Acara">
                            </div>
                            <div class="form-group">
                                <label for="date">Tanggal</label>
                                <input type="date" id="date" class="form-control" name="tanggal" autofocus=""
                                    value="{{$event->tanggal}}" placeholder="Masukkan Tanggal Acara">
                            </div>
                            <div class="form-group">
                                <label for="description">Waktu</label>
                                <input type="text" id="title" class="form-control" name="waktu" autofocus=""
                                    value="{{$event->waktu}}" placeholder="19.00 - selesai">
                            </div>
                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" id="" cols="30"
                                    rows="10">{{$event->deskripsi}}</textarea>
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
                                <label>Image</label>
                                <div class="mb-2">
                                    <img src="" class="img-fluid" alt="" id="upload-img-preview" style="display: none;"
                                        required>
                                    <a href="#" class="text-danger" id="upload-img-delete" style="display: none;">Delete
                                        Image</a>
                                </div>
                                <div class="mb-2">
                                    <img src="{{asset($event->image)}}" class="img-fluid" alt="" >
                                            Logo Website Sebelumnya
                                    </div>
                                <div class="custom-file">
                                    <input type="file" accept="image/*" name="image" id="image"
                                        class="custom-file-input js-upload-image form-control">
                                    <label class="custom-file-label " for="image">Choose file</label>
                                </div>
                            </div>
                            <div class="card-footer bg-whitesmoke">
                                <button type="submit" class="btn btn-simpan  btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </section>
</div>
@endsection
