@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            Nuevo Producto
            <a href="{{ route('products.index')  }}" class="btn btn-default pull-right">Listado</a>
        </h2>

        @include('products.aside.error')

        {!! Form::open(['route' => 'products.store']) !!}

            @include('products.aside.form')

        {!! Form::close() !!}
    </div>
    <div class="col-sm-4">
        @include('products.aside.aside')
    </div>
@endsection