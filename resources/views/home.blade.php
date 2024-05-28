@extends('layaout.app')

@section('title', 'Pagina Principal')

@section('content')
    <div class="max-w-4xl mx-auto px-4 mt-4">
        <!--<h1>Esta es la pagina principal de mi negocio</h1>-->
        <x-alert2 type="danger" class="mb-4">
            <x-slot name="title">
                Titulo de la alerta
            </x-slot>
            Contenido de la alertadesignslayouts
        </x-alert2>
        <p>hola mundo</p>
    </div>
@endsection

{{--
@push('css')
    <style>
        body {
            background-color: #b9d3d8;
        }
    </style>
@endpush

@push('css')
    <style>
        body {
            color: red;
        }
    </style>
@endpush
--}}
