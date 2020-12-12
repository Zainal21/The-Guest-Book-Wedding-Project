@extends('Schema.view_stucture')
@section('Content')
     <!-- Main Content -->
     <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Add Sosial Media</h1>
          </div>
          <form action="#" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-black-50">Social Media Create</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" id="title" class="form-control" name="title" autofocus="" value="">
                              </div>
                              <div class="form-group">
                                <label for="title">Link</label>
                                <input type="text" id="title" class="form-control" name="title" autofocus="" value="">
                          </div>
                            <div class="form-group">
                                <label for="description">Social Media Icon</label>
                                <input type="text" id="title" class="form-control" name="title" autofocus="" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-black-50">Aksi</h4>
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