@extends('layouts.main')

@section('title', 'Perhitungan')

@section('page_name', 'Perhitungan')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Nilai Perbandingan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
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
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Normalisasi Matriks (Tren Positif, Tren Negatif)</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
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
@endsection
