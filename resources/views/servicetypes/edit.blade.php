@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Servicetype</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($servicetype, ['route' => ['servicetypes.update', $servicetype->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('servicetypes.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('servicetypes.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
