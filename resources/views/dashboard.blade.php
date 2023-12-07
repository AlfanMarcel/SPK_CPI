@extends('layouts.main')

@section('title', 'Dashboard')

@section('page_name', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>ALternatif</h4>
                    </div>
                    <div class="card-body">
                        {{ $alternatif }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-cube" style="font-size: 25px"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Kriteria</h4>
                    </div>
                    <div class="card-body">
                        {{ $criteria }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
