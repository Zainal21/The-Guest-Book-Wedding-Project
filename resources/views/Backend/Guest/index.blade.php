@extends('Schema.view_stucture')
@section('Content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Guest List</h1>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
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
    </section>
</div>
@endsection
