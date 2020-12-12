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
              <div class="card">
                <div class="card-body">
                <a href="#" class="btn btn-primary mt-2 mb-2 float-right">Add item</a>
                  <div class="table-responsive">
                    <table class="table table-bordered" width="100%">
                      <thead class="thead-light">
                        <tr>
                          <th class="thead">No</th>
                          <th class="thead">Name</th>
                          <th class="thead">Link</th>
                          <th class="thead">Social media icon</th>
                          <th class="thead">Aksi</th>
                        </tr>
                      </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>ini judul</td>
                            <td><a href="https://facebook.com">https://facebook.com</a></td>
                            <td><i class="fab fw fa-facebook"></i></td>
                            <td><a href="" class="btn btn-danger ml-2 mr-2 mt-1">Delete</a><a href="" class="btn btn-success ml-2 mr-2 mt-1">Edit</a></td>
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