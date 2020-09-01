@extends('admin/admin_layout/main')
@section('title', 'dashboard')
@section('content-title', 'Edit User')

@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-lg-8">
                <div class="card shadow p-3">
                    <div class="card-header">
                    <h4>Edit Data {{ $user->name }}</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('admin.users.update', $user) }}" method="POST">

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            @csrf
                            {{ method_field('PUT') }}
                            <div class="form-group row">
                                <label for="roles" class="col-md-4 col-form-label text-md-right">Roles</label>
                                    <div class="col-md-6">
                                        @foreach ($roles as $role)
                                            <div class="form-check">
                                                <input type="checkbox" name="roles[]" value="{{ $role->id}}"
                                                @if ($user->roles->pluck('id')->contains($role->id))checked @endif>
                                                <label for="">{{ $role->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                            </div>
                                
                            <button type="submit" class="btn btn-outline-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection