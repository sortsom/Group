@extends('layouts.default')
@section('content')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Analytics</strong> Dashboard</h3>
            </div>
            <div class="col-auto ml-auto text-right mt-n1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                        <li class="breadcrumb-item"><a href="#">AdminKit</a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Analytics</li>
                    </ol>
                </nav>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>images</th>
                <th style="width:20%">Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id}}</td>
<<<<<<< Updated upstream
                    <td>{{$user->image ?? ''}}</td>
=======
                    <td>{{$user->image}}</td>
>>>>>>> Stashed changes
                    <td>{{ $user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td class="table-action">
                        <a href="#" data-toggle="modal"
                           data-target="#edit-user-{{$user->id}}">
                            <i class="align-middle" data-feather="edit-2"></i>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#delete-user-{{ $user->id }}">
                            <i class="align-middle" data-feather="trash"></i>
                        </a>

<<<<<<< Updated upstream
                        <!--    editmodel-->
                        <div class="modal fade" id="edit-user-{{$user->id}}" aria-hidden="true">
=======
                        <!--edited-->
                        <div class="modal fade" id="edit-user-{{$user->id}}" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
>>>>>>> Stashed changes
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>EDIT USER</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
<<<<<<< Updated upstream
                                    <form action="{{route('users.update',$user->id)}}" method="POST">
                                        <div class="modal-body">
=======
                                    <div class="modal-body">
                                        <form method="POST" action="{route('users.update',$user->id)}}">
>>>>>>> Stashed changes
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group row">
                                                <label for="name"
                                                       class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                                <div class="col-md-6">
                                                    <input id="name" type="text"
                                                           class="form-control @error('name') is-invalid @enderror"
                                                           name="name" value="{{ $user->name }}" required
                                                           autocomplete="name" autofocus>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email"
                                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email"
                                                           class="form-control @error('email') is-invalid @enderror"
                                                           name="email" value="{{ $user->email }}" required>

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
<<<<<<< Updated upstream
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Save delete</button>
                                        </div>
                                    </form>
=======

                                            <div class="form-group row">
                                                <label for="password"
                                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                <div class="col-md-6">
                                                    <input id="password" type="password"
                                                           class="form-control @error('password') is-invalid @enderror" value="{{ $user->password }}"
                                                           name="password"
                                                           required autocomplete="new-password">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                                <div class="form-group row">
                                                    <label for="password-confirm"
                                                           class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                                                    <div class="col-md-6">
                                                        <select name="role_od" id="role_id" class="form-control">
                                                            <option value="">--select--</option>
                                                            <option value="admin">administrator</option>
                                                            <option value="user">Teachers</option>
                                                            <option value="student">Students</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="password-confirm"
                                                           class="col-md-4 col-form-label text-md-right">{{ __('images') }}</label>
                                                    <div class="col-md-6">
                                                        <div class="variants">
                                                            <div class='file'>
                                                                <label for='input-file'>
                                                                    <i class="fa fa-cloud" aria-hidden="true"></i>
                                                                    Select a file
                                                                </label>
                                                                <input id='input-file' type='file' />
                                                            </div>
                                                        </div>
                                                    </div>

                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success">Save user</button>
                                    </div>
>>>>>>> Stashed changes
                                </div>
                            </div>
                        </div>
{{--delete user--}}
                        <div class="modal fade" id="delete-user-{{ $user->id }}" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{route('users.delete',$user->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><b>DELETE USER</b></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <P><span class="text-danger">Are you sure delete</span> "{{ $user->name }}"?
                                            </P>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close
                                            </button>
                                            <button type="submit" class="btn btn-success">delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
<<<<<<< Updated upstream
    <!-- Modal -->

    <!--    editmodel-->
    <div class="modal fade" id="editModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>EDIT USER</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="#">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('E-Mail ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password">
                                >>>>>>> Stashed changes


                                <<<<<<< Updated upstream
                                =======
                                <div class="form-group row">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                                    <div class="col-md-6">
                                        <select name="role_od" id="role_id" class="form-control">
                                            <option value="">--select--</option>
                                            <option value="admin">administrator</option>
                                            <option value="user">Teachers</option>
                                            <option value="student">Students</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-right">{{ __('images') }}</label>
                                    <div class="col-md-6">
                                        <div class="variants">
                                            <div class='file'>
                                                <label for='input-file'>
                                                    <i class="fa fa-cloud" aria-hidden="true"></i>
                                                    Select a file
                                                </label>
                                                <input id='input-file' type='file'/>
                                            </div>
                                        </div>
                                    </div>
                           </form>
                        </div>
                        <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save update</button>
                </div>
            </div>
        </div>
    </div>



=======
>>>>>>> Stashed changes
@stop
