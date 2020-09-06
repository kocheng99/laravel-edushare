@extends('admin/admin_layout/main')
@section('title', 'Dashboard-post')
@section('content-title', 'Data Postinganku')

@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow p-3">
                    
                    
                    <div class="card-header"> 
                        {{-- <h4>CRUD Table</h4> --}}
                        <h4><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Postingan</button></h4>
                        <div class="card-header-form">
                          <form>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search">
                              <div class="input-group-btn">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                              </div>
                            </div> 
                          </form>
                        </div>
                      </div>
                      <div class="card-body p-0">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <tr>
                              <th>No</th>
                              <th>Nama User</th>
                              <th>Judul Post</th>
                              <th>Deskripsi Post</th>
                              <th>Action</th>
                            </tr>
                            {{-- @foreach ($cruds as $c) --}}
                            @foreach ($post as $posts)
                                
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                {{-- <td>{{ $users->firstItem()+$no }}</td> --}}
                                <td>{{ $posts->user->name }}</td>
                                <td>{{ $posts->judul_post }}</td>
                                <td>{{ $posts->deskripsi_post }}</td>
                                <td>
  
                                  <a href="#" class="btn btn-icon btn-primary" data-toggle="tooltip" title="Edit"><i class="far fa-edit"></i></a>
                                  <a href="#" data-id="#" class="btn btn-icon btn-danger swal-confirm" data-toggle="tooltip" title="hapus"><i class="fas fa-times"></i>
                                  <form action="#" id="#" method="POST">
                                    @csrf
                                    @method('delete')
                                    </form>
                                  </a>
                                
                                </td>
                              </tr>
                            
                            @endforeach
                            
                          </table>
                        </div>
                      </div>


                </div>
            </div>
        </div>
    </div>

    {{-- modal tambah data --}}
    @section('modal')
    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Form Posting</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ route('post.store') }}" method="POST">
              @csrf
            <div class="modal-body">

                <div class="form-group">
                  <label>Judul Post</label>
                  <input type="text" class="form-control @error('judul_post') 
                  is-invalid @enderror" id="judul_post" name="judul_post" placeholder="Masukkan judul" value="{{ old('judul_post') }}">
                  @error('judul_post')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                  <label>Deskripsi</label>
                  <input type="text" class="form-control @error('deskripsi_post') 
                  is-invalid @enderror" id="deskripsi_post" name="deskripsi_post" placeholder="Masukkan deskripsi" value="{{ old('deskripsi_post') }}">
                  @error('deskripsi_post')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
              <div class="form-group">
                <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
              </div>
            </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
          </form>

          </div>
        </div>
      </div>
    </div>
    @endsection

@endsection