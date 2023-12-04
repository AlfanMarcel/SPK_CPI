@extends('layouts.main')

@section('title', 'Nilai Alternatif')

@section('page_name', 'Nilai')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{ $values->name }}</div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($values->criterias as $criteria)
                            <div class="col-3 mb-3">
                                <label for="" class="form-label">{{ $criteria->name }}</label>
                                <input type="number" class="form-control" id="" min="0"
                                    name="{{ $criteria->id }}" max="100" value="{{ $criteria->pivot->value }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
