@extends('layouts.main')

@section('title', 'Tambah Kriteria')

@section('page_name', 'Tambah Kriteria')

@section('content')
    <div class="row">
        <div class="col-12">
            @if (session()->has('alert'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('alert') }}</strong>
                </div>
            @endif
            <div class="card">
                <form method="post" action="/add_criteria">
                    @csrf
                    <div class="card-header">
                        <h4></h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control" name="type">
                                <option value="Benefit">Benefit
                                </option>
                                <option value="Cost">Cost</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Weight</label>
                            <input type="text" name="weight" class="form-control">
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
