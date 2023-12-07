@extends('layouts.main')

@section('title', 'Edit Kriteria')

@section('page_name', 'Edit Kriteria')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form method="post" action="/edit_criteria/{{ $criteria->id }}">
                    @csrf
                    @method('PUT')
                    <div class="card-header">
                        <h4>{{ $criteria->name }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required=""
                                value="{{ $criteria->name }}">
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control" name="type">
                                <option value="Benefit" {{ $criteria->type == 'Benefit' ? 'selected' : '' }}>Benefit
                                </option>
                                <option value="Cost" {{ $criteria->type == 'Cost' ? 'selected' : '' }}>Cost</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Weight</label>
                            <input type="text" name="weight" class="form-control" value="{{ $criteria->weight }}">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
