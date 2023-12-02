@extends('layouts.main')

@section('title', 'Nilai Alternatif')

@section('page_name', 'Nilai Alternatif')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                {{-- <div class="card-header">
                    <h1>Nilai Alternatif</h1>
                </div> --}}
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatifs as $alternatif)
                                    <tr class="text-center">
                                        <td>{{ $alternatif->id }}</td>
                                        <td>{{ $alternatif->name }}</td>
                                        <td>
                                            <a href="/value/{{ $alternatif->id }}" class="text-warning mr-2"><i
                                                    class="fas fa-edit" style="font-size: 20px"></i></a>
                                        </td>
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
