@extends('Schema.view_stucture')
@section('Content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Message List</h1>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%">
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
                                    @forelse ($message as $item)
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
