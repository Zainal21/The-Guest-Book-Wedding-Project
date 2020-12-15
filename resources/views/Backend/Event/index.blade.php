@extends('Schema.view_stucture')
@section('Content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Event List</h1>
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
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('event.create')}}" class="btn btn-primary mt-2 mb-2 float-right">Add item</a>
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="thead">No</th>
                                        <th class="thead">Nama Acara</th>
                                        <th class="thead">Tanggal</th>
                                        <th class="thead">Jam</th>
                                        <th class="thead">Deskripsi</th>
                                        <th class="thead">Foto</th>
                                        <th class="thead">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events as $item)
                                    <tr>
                                        <td>{{$item->nama_acara}}</td>
                                        <td>{{$item->tanggal}}</td>
                                        <td>{{$item->waktu}}</td>
                                        <td>{{$item->deskripsi}}</td>
                                        <td><img src="{{asset($item->image)}}" width="80px" alt=""></td>
                                    <td><a href="{{route('event.delete', \Crypt::encrypt($item->id))}}" class="btn btn-danger ml-2 mr-2 mt-1">Delete</a><a
                                                href="{{route('event.edit', \Crypt::encrypt($item->id))}}"
                                                class="btn btn-success ml-2 mr-2 mt-1">Edit</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
