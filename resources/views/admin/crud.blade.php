@extends('admin/admin_layout/main')
@section('title', 'dashboard-crud')
@section('content-title', 'CRUD')

@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow p-3">
                    
                    {{-- <div class="row">
                    </div> --}}
                    <div class="card-header">
                      {{-- <h4>CRUD Table</h4> --}}
                      <h4><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button></h4>
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
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Jurusan</th>
                            <th>Action</th>
                          </tr>
                          @foreach ($cruds as $c)
                              
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $c->nama }}</td>
                              <td>{{ $c->nim }}</td>
                              <td>{{ $c->email }}</td>
                              <td>{{ $c->alamat }}</td>
                              <td>{{ $c->jurusan }}</td>
                              <td>
                                <a href="#" class="btn btn-icon btn-primary" data-toggle="tooltip" title="Edit"><i class="far fa-edit"></i></a>
                                <a href="#" class="badge badge-danger confirmation" id="swal-6">delete</a>
                                {{-- <button class="btn btn-primary" id="swal-6">Launch</button> --}}
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

    @section('modal')
    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Tambah Data CRUD</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ route('crud.store') }}" method="POST">
              @csrf
            <div class="modal-body">


                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control @error('nama') 
                  is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan nama" value="{{ old('nama') }}">
                  @error('nama')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                  <label>Nim</label>
                  <input type="number" class="form-control" id="nim" name="nim">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="form-group">
                  <label>Jurusan</label>
                  <select class="form-control" id="jurusan" name="jurusan">
                    <option>Teknik Informatika</option>
                    <option>Teknik Mesin</option>
                    <option>Teknik Pendingin</option>
                  </select>
                </div>
              

            </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
          </form>

          </div>
        </div>
      </div>
    </div>
    @endsection
    
@endsection

@push('page-script')
  <script src="{{ asset('../node_modules/sweetalert/dist/sweetalert.min.js') }}"></script>
@endpush

@push('after-script')
  {{-- <script src="{{ asset('assets/js/page/modules-sweetalert.js') }}"></script> --}}
  <script>
    $(".confirmation").click(function() {
      swal({
          title: 'Are you sure?',
          text: 'Once deleted, you will not be able to recover this imaginary file!',
          icon: 'warning',
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
          swal('Poof! Your imaginary file has been deleted!', {
            icon: 'success',
          });
          } else {
          swal('Your imaginary file is safe!');
          }
        });
    });
  </script>
@endpush