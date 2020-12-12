@extends('Schema.view_stucture')
@section('Content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Gallery List</h1>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-black-50">Meta data</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Photo Gallery</label>
                            <div class="mb-2">
                                <img src="" class="img-fluid" alt="" id="upload-img-preview" style="display: none;">
                                <a href="#" class="text-danger" id="upload-img-delete" style="display: none;">Delete
                                    Photo Gallery</a>
                            </div>
                            <div class="custom-file">
                                <input type="file" accept="image/*" name="cover" id="cover"
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
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="thead">No</th>
                                        <th class="thead">Photo</th>
                                        <th class="thead">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>ini judul</td>
                                        <td>
                                          <form action="#" method="post">
                                            <button class="btn btn-danger">Delete Photo</button>
                                          </form>
                                        </td>
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
