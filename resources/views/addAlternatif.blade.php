@extends('layouts.main')

@section('title', 'Tambah Alternatif')

@section('page_name', 'Tambah Alternatif')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form method="post" action="/add_alternatif">
                    @csrf
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
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
