@extends('app')

@section('estilo')
  @livewireStyles
@endsection

@section('contenido')
  @include('plantilla.smallBoxes')
  <livewire:counter /> 
@endsection

@section('script')
  @livewireScripts
@endsection