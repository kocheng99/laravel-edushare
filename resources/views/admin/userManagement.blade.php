@extends('admin/admin_layout/main')
@section('title', 'dashboard')
@section('content-title', 'User Management')

@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow p-3">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roles</th>
                            <th scope="col">tanggal Daftar</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $u)
                            <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ implode(', ',$u->roles()->get()->pluck('name')->toArray()) }}</td>
                            <td>{{ $u->created_at }}</td>
                            <td>
                              <div class="buttons">
                                @can('edit-users')
                                <a href="{{ route('admin.users.edit',$u->id) }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Edit</a>
                                @endcan

                                <form action="{{ route('admin.users.destroy', $u->id) }}" method="POST" class="float-left">
                                  @csrf
                                  {{ method_field('DELETE') }}
                                  <button type="submit" class="btn btn-icon icon-left btn-danger">Delete</button>
                                </form>
                                {{-- <a href="{{ route('admin.users.destroy', $u->id) }}" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Delete</a> --}}
                              </div>
                            </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection