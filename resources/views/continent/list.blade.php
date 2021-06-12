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
        <div class="block block-rounded col-md-12  mt-5">
            <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#list">List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#add">Add Continent</a>
                </li>

            </ul>
            <div class="block-content tab-content">
                <div class="tab-pane active" id="list" role="tabpanel">
                    <h4 class="font-w400">
                        <div class="container">
                            <div class="card">
                                <div class="card-header text-white fw-5" style="background-color:#3177D5">Liste des
                                    Continent
                                    <span><i class="fa fa-globe"></i></span>
                                </div>
                                <div class="card-body">
                                    <table class="table table-stripped">
                                        <tr>
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Superficie</th>
                                        </tr>
                                        @foreach ($continent as $continents)
                                            <tr>
                                                <td>{{ $continents->id }}</td>
                                                <td>{{ $continents->nom }}</td>
                                                <td>{{ $continents->superficie }}</td>
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
                                <div class="card-header text-white fw-5" style="background-color:#3177D5">Ajouter Continent
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('store.continent') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nom Continent:</label>
                                            <input type="text" name="nom" class="form-control" id=""
                                                placeholder="nom continent">
                                            <span class="text-danger">@error('nom') {{ $message }}@enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Superficie</label>
                                                <input type="text" class="form-control" name="superficie" id=""
                                                    placeholder="Superficie">
                                                <span class="text-danger">@error('superficie')
                                                        {{ $message }}@enderror</span>
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
