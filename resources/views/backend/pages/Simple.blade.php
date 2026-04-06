@extends('backend.layouts.app')
@section('title', 'Simple')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Simple</li>
                    </ol>
                </div>
            </div>

            <div class="card shadow-lg rounded card-success card-outline">
                <div class="card-header">
                    <h3 class="card-title"><i class="far fa-list-alt"></i> <b>Simple</b> </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-outline-danger" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <div class="row">
                        <h1>
                            Welcome Page
                        </h1>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection

