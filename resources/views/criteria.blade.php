@extends('layouts.main')

@section('title', 'Kriteria')

@section('page_name', 'Kriteria')

@section('content')
    <div class="row">
        <div class="col-12">
            {{-- @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
            </div>
        @endif
        @if (session()->has('updateSuccess'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('updateSuccess') }}</strong>
            </div>
        @endif --}}
            <div class="card">
                <div class="card-header">
                    <a href="" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>
                                        Name
                                    </th>
                                    <th>Type</th>
                                    <th>Wight</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>Kriteria 1</td>
                                    <td>Benefit/Cost</td>
                                    <td>0.3</td>
                                    <td>
                                        <a href="" class="text-warning mr-2"><i class="fas fa-edit"
                                                style="font-size: 20px"></i></a>
                                        <a href="" class="text-danger"><i class="fas fa-trash-alt"
                                                style="font-size: 20px"></i></a>
                                    </td>
                                </tr>
                                {{-- @foreach ($admins as $admin)
                                <tr>
                                    <td>
                                        {{ $admin->name }}
                                    </td>
                                    <td>{{ $admin->email }}</td>
                                    <td>
                                        {{ $admin->username }}
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.destroy', $admin->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('admin.edit', $admin->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            @if (auth()->user()->name == $admin->name)
                                                <button type="submit" class="btn btn-danger" disabled>Delete</button>
                                            @else
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            @endif
                                        </form>
                                    </td>
                                </tr>
                            @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
