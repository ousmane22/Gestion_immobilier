@extends('layouts.backend')

@section('content')
    @if (session('success'))
        <div class="container col-md-6 mt-4">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <!-- Button trigger modal -->
    {{-- <a href="{{ route('continent.add') }}" class="btn btn-info mt-2">Add new</a> --}}
    <script src="//code.jquery.com/jquery.js"></script>
    @include('flashy::message')


    <!-- Block Tabs Default Style -->
    <div class="container">
        <div class="block block-rounded col-md-12 mt-5">
            <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#list">List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#add">Add User Role</a>
                </li>
                <li class="nav-item ml-auto">
                    <a class="nav-link" href="#btabs-static-settings">
                        <i class="si si-settings"></i>
                    </a>
                </li>
            </ul>
            <div class="block-content tab-content">
                <div class="tab-pane active" id="list" role="tabpanel">
                    <h4 class="font-w400">
                        <div class="container">
                            <div class="card">
                                <div class="card-header text-white fw-5" style="background-color:#3177D5">List
                                    <span><i class="fa fa-globe"></i></span>
                                </div>
                                <div class="card-body">
                                    <table class="table table-stripped">
                                        <tr>
                                            <th>#</th>
                                            <th>User</th>
                                            <th>Role</th>
                                        </tr>
                                        @foreach ($userrole as $userroles)
                                            <tr>
                                                <td>{{ $userroles->id }}</td>
                                                <td>{{ $userroles->user->name }}</td>
                                                <td>{{ $userroles->role->label }}</td>
                                                <td>
                                                    <a href="http://"><span><i
                                                                class="fa fa-edit text-success"></i></span></a>
                                                    <a href="http://"> <span><i
                                                                class="fa fa-trash text-danger"></i></span></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                    </h4>
                </div>
                <div class="tab-pane" id="add" role="tabpanel">
                    <h4 class="font-w400">
                        <div class="container">
                            <div class="card">
                                <div class="card-header text-white fw-5" style="background-color:#3177D5">Add
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('store.userRole') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Utilisateur</label>
                                            <select name="user_id" id="" class="form-control">
                                                <option value="">Choose.....</option>
                                                @foreach ($user as $users)
                                                    <option value="{{ $users->id }}">{{ $users->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">@error('user_id')
                                                    {{ $message }}@enderror</span>
                                            </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="">Role</label>
                                        <select name="role_id" id="" class="form-control">
                                            <option value="">Choose.....</option>
                                            @foreach ($role as $roles)
                                                <option value="{{ $roles->id }}">{{ $roles->label }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">@error('role_id')
                                                {{ $message }}@enderror</span>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                        </div>
                    </div>
                    </h4>
                </div>

            </div>
            </div>
            </div>
            <!-- END Block Tabs Default Style -->
        @endsection
