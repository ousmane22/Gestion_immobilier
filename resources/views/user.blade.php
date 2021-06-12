@extends('layouts.utilisateur')

@section('contents')

    <!-- Page Content -->
    <div class="content">
        <!-- Search -->
        <div class="p-3 bg-white rounded push">
            <form action="bd_search.html" method="POST">
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control form-control-alt" placeholder="Search..">
                    <div class="input-group-append">
                        <span class="input-group-text border-0 bg-body">
                            <i class="fa fa-fw fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>
        </div>
        <!-- END Search -->
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <!-- Results -->
        <div class="block block-rounded">
            <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" href="#search-customers">Mes Biens</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#search-projects">Publier biens</a>
                </li>
            </ul>
            <div class="block-content tab-content overflow-hidden">



                <!-- list biens -->
                <div class="tab-pane fade" id="search-customers" role="tabpanel">
                    <div class="font-size-h3 font-w600 pt-2 pb-4 mb-4 text-center border-bottom">
                        <span class="text-primary font-w700">10</span> results found for <mark
                            class="text-danger">client</mark>
                    </div>

                </div>
                <!-- END list -->




                <!-- add biens -->
                <div class="tab-pane fade" id="search-projects" role="tabpanel">
                    <div class="font-size-h3 font-w600 pt-2 pb-4 mb-4 text-center border-bottom"></div>

                    <div class="row container">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-info p-4 text-white"></div>
                                <div class="card-body">
                                    <form action="{{ route('') }}" method="post">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Montant Caution</label>
                                            <input type="number" class="form-control" name="MontantCaution">
                                            @error('MontantCaution')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="mb-3">
                                            <label for="" class="form-label">Loyer mensuel</label>
                                            <input type="number" class="form-control" name="loyerMensuel">
                                            @error('loyerMensuel')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Adresse</label>
                                            <input type="text" class="form-control" name="adresse">
                                            @error('adresse')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>



                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Images du bien</label>
                                            <input class="form-control" type="file" name="fileName[]">
                                            @error('fileName[]')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>

                                </div>
                            </div>
                        </div>





                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-success p-4 text-white"></div>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="">Garniture</label>
                                        <select class="form-control" name="garniture_id">
                                            <option selected>Garniture</option>
                                            @foreach ($garniture as $garn)
                                                <option value="{{ $garn->id }}">{{ $garn->label }}</option>
                                            @endforeach
                                        </select>
                                        @error('garniture_id')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>



                                    <div class="form-group">
                                        <label for="">Type biens</label>
                                        <select class="form-control" name="type_id">
                                            <option selected>Type du biens</option>
                                            @foreach ($type as $types)
                                                <option value="{{ $types->id }}">{{ $types->label }}</option>
                                            @endforeach
                                        </select>
                                        @error('type_id')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>




                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select class="form-control" name="statu_id">
                                            <option selected>Status du biens</option>
                                            @foreach ($status as $statu)
                                                <option value="{{ $statu->id }}">{{ $statu->label }}</option>
                                            @endforeach
                                        </select>
                                        @error('statu_id')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="">Quartier</label>
                                        <select class="form-control" name="quartier_id">
                                            <option selected>Quartier(Localisation)</option>
                                            @foreach ($quartier as $q)
                                                <option value="{{ $q->id }}">{{ $q->nom }}</option>
                                            @endforeach
                                        </select>
                                        @error('quartier_id')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="card-footer">
                        <button class="btn btn-success">Enregister</button>

                    </div>
                </div>
                <!-- END Page Content -->
                </main>
                <!-- END Main Container -->

            @endsection
