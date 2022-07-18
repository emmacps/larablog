@extends('layouts.admin')

@section('title')
CodeHack Backend
@endsection

@section('content')
    <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Users</h1>
                    </div>
                    <!-- Content Row -->

                    @include('includes.form_error')

                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-md-2">
                          <img src="{{$user->photo->file}}" alt="">
                        </div>
                        <div class="col-md-10">
                              <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
                        </div>
                        <div class="card-body">

                        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'class'=>'row', 'files'=>true]) !!}
                        <div class="col-md-6 mb-3">
                          <label for="" class="form-label">Name</label>
                          <input type="text" name="name" class="form-control" value="{{$user->name}}">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="" class="form-label">Email</label>
                          <input type="email" name="email" class="form-control" value="{{$user->email}}">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="" class="form-label">Role</label>
                          <select class="form-control" name="role_id">
                            <option value="3">Select Role</option>
                            <option value="1">Administrator</option>
                            <option value="2">Author</option>
                            <option value="3">Subscriber</option>
                          </select>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="" class="form-label">Status</label>
                          <select class="form-control" name="is_active">
                            <option value="0">Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">Not Active</option>
                          </select>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="" class="form-label">Profile Upload</label>
                          <input type="file" name="photo_id" class="form-control">
                        </div>
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary">Add User</button>
                            </div>
                          </form>

                        </div>
                      </div>
                    </div>

                    <div class="row">
                      {!! Form::open(['method'=>'DELETE', 'action'=>'AdminUserController@destroy'])!!}
                      {!! Form::submit('Delete user', 'class'=>'btn btn-primary')!!}
                      }
                    </div>

                    </div>
                  </div>
                </div>
                <!-- /.container-fluid -->


@endsection
