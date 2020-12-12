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
                    <table class="table table-bordered" width="100%">
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
                          <tr>
                            <td>1</td>
                            <td>ini judul</td>
                            <td>Kategori</td>
                            <td>Status</td>
                            <td>Status</td> 
                          </tr>
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