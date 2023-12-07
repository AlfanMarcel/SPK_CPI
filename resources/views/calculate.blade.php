@extends('layouts.main')

@section('title', 'Perhitungan')

@section('page_name', 'Perhitungan')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Nilai Perbandingan</h4>
                    <div class="card-header-action">
                        <a data-collapse="#nilai-perbandingan" class="btn btn-icon btn-info" href="#"><i
                                class="fas fa-minus"></i></a>
                    </div>
                </div>
                <div class="collapse show" id="nilai-perbandingan">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="table-1">
                                <thead>
                                    <tr class="text-center">
                                        <th></th>
                                        @foreach (array_keys(reset($array)) as $criteria)
                                            <th>C{{ $criteria }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($array as $alternative => $criteriaValues)
                                        <tr class="text-center">
                                            <th>A{{ $alternative }}</th> <!-- Add 'a' here -->
                                            @foreach ($criteriaValues as $value)
                                                <td>{{ $value }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Normalisasi Matriks (Tren Positif, Tren Negatif)</h4>
                    <div class="card-header-action">
                        <a data-collapse="#normalisasi" class="btn btn-icon btn-info" href="#"><i
                                class="fas fa-minus"></i></a>
                    </div>
                </div>
                <div class="collapse show" id="normalisasi">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="table-1">
                                <thead>
                                    <tr class="text-center">
                                        <th></th>
                                        @foreach (array_keys(reset($normalisasi)) as $criteria)
                                            <th>C{{ $criteria }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($normalisasi as $alternative => $criteriaValues)
                                        <tr class="text-center">
                                            <th>A{{ $alternative }}</th> <!-- Add 'a' here -->
                                            @foreach ($criteriaValues as $value)
                                                <td>{{ $value }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Perhitungan Index Alternatif</h4>
                    <div class="card-header-action">
                        <a data-collapse="#pembobotan" class="btn btn-icon btn-info" href="#"><i
                                class="fas fa-minus"></i></a>
                    </div>
                </div>
                <div class="collapse show" id="pembobotan">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="table-1">
                                <thead>
                                    <tr class="text-center">
                                        <th></th>
                                        @foreach (array_keys(reset($weighting)) as $criteria)
                                            <th>C{{ $criteria }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($weighting as $alternative => $criteriaValues)
                                        <tr class="text-center">
                                            <th>A{{ $alternative }}</th> <!-- Add 'a' here -->
                                            @foreach ($criteriaValues as $value)
                                                <td>{{ $value }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Perhitungan index gabungan dan Peringkat Alternatif</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="table-1">
                            <thead>
                                <tr class="text-center">
                                    <th></th>
                                    <th>SUM</th>
                                    <th>RANKING</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sum as $alternative => $criteriaValues)
                                    <tr class="text-center">
                                        @foreach ($criteriaValues as $value)
                                            <td>{{ $value }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
