@extends('Schema.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Embed Maps</h1>
          </div>
          <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Embed Maps">
                    <button class="btn btn-primary my-2">Update</button>
                  </div>
                </div>
              </div>
            </div>
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
                          <th class="thead">Embed Maps</th>
                        </tr>
                      </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>zainal</td>
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