@extends('layouts.main')

@section('title', 'Edit Alternatif')

@section('page_name', 'Edit Alternatif')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form method="post" action="/edit_alternatif/{{ $alternatif->id }}">
                    @csrf
                    @method('PUT')
                    <div class="card-header">
                        <h4>{{ $alternatif->name }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required=""
                                value="{{ $alternatif->name }}">
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
