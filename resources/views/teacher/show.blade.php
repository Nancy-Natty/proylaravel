@extends('layouts.app')

@section('template_title')
    {{ $teacher->name ?? 'Show Teacher' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Teacher</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('teacher.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $teacher->name }}
                        </div>
                        <div class="form-group">
                            <strong>Lastname:</strong>
                            {{ $teacher->lastname }}
                        </div>
                        <div class="form-group">
                            <strong>Idcard:</strong>
                            {{ $teacher->idcard }}
                        </div>
                        <div class="form-group">
                            <strong>Cellphone:</strong>
                            {{ $teacher->cellphone }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $teacher->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
