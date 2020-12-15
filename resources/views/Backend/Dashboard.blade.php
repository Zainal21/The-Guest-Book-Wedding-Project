@extends('Schema.view_stucture')
@section('Content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Guest Total</h4>
                        </div>
                        <div class="card-body">
                            {{$guest}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Message</h4>
                        </div>
                        <div class="card-body">
                            {{$message}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Event</h4>
                        </div>
                        <div class="card-body">
                            {{$event}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Gallery Photo</h4>
                        </div>
                        <div class="card-body">
                            {{$gallery}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-black-50">Guest List (Daftar Tamu</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" id="TABLE_GUEST">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="thead">No</th>
                                        <th class="thead">Email</th>
                                        <th class="thead">Nama</th>
                                        <th class="thead">Alamat</th>
                                        <th class="thead">Acara yang dihadiri</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($guests as $guest)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$guest->email}}</td>
                                        <td>{{$guest->email}}</td>
                                        <td>{{$guest->alamat}}</td>
                                        <td>{{$guest->acara_hadir}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                  <div class="card-header">
                    <h4>Message List (Pesan Ucapan</h4>
                  </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" id="TABLE_MESSAGE">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="thead">No</th>
                                        <th class="thead">Name</th>
                                        <th class="thead">Email</th>
                                        <th class="thead">Message</th>
                                        <th class="thead">No Telp</th>
                                        <th class="thead">Reply Email</th>
                                        <th class="thead">Reply Whatsapp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($message_list as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->guest->nama}}</td>
                                        <td>{{$item->guest->email}}</td>
                                        <td>{{$item->pesan}}.</td>
                                        <td>{{$item->no_hp}}.</td>
                                        <td><a href="" class="btn btn-info ml-2 mr-2 mt-1">Balas email</a></td>
                                        <td><a href="" class="btn btn-info ml-2 mr-2 mt-1">Balas Whatapps</a></td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td>Data Tidak Ditemukan</td>
                                    </tr>
                                    @endforelse
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
