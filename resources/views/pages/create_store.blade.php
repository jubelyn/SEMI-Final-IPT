@extends('layouts.app')

@section('content')



    <div class="container w-25 border mt-4">
        <h1 class="text-center">Create new Store</h1>

        @if($message = Session::get('success'))

        <div class="alert alert-success alert-block text-center">
                <strong>{{ $message }}</strong>
        </div>

        @endif

        {!! Form::open(['url' => ['store-store'], 'method' => 'post']) !!}
            <div class="form-group">
                {{ Form::label('name','Name') }}
                {{ Form::text('name',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('location','Location') }}
                {{ Form::text('location',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('duration','Duration') }}
                {{ Form::text('duration',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group">
                {{ Form::label('owner','Owner') }}
                {{ Form::text('owner',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('net_worth','Net worth') }}
                {{ Form::text('net_worth',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group text-center shadow-none">
                {!! Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-primary btn-block']) !!}

            </div>
        {!! Form::close() !!}

    </div>


@endsection
