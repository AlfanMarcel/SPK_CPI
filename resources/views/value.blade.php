@extends('layouts.main')

@section('title', 'Nilai Alternatif')

@section('page_name', 'Nilai')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $values->name }}</h4>
                </div>
                <div class="card-body">
                    <form action="/edit_value/{{ $values->id }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            @foreach ($values->criterias as $criteria)
                                <div class="col-3 mb-3">
                                    <label for="" class="form-label"
                                        style="font-weight: bold">{{ $criteria->name }}</label>
                                    <input type="number" class="form-control" id="" min="1"
                                        name="{{ $criteria->id }}" max="100" value="{{ $criteria->pivot->value }}">
                                </div>
                            @endforeach
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button class="btn btn-success" type="submit">Simpan</button>
                            <a href="/value/{{ $values->id + 1 }}" class="btn btn-primary">Next</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
