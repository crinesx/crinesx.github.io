@extends('layouts.master2')

@switch($id)
    {{-- ------------------------seccion de contenido 1----------------------------------------------------- --}}
    @case('about')
        @section('title','about')
        @section('content')
            @include('secciones.about1')
        @endsection
    @break
{{-- ------------------------seccion de contenido 2----------------------------------------------------- --}}
    @case('experience')
        @section('title','experience')
        @section('content')
            @include('secciones.experience')
        @endsection
    @break
{{-- ------------------------seccion de contenido 3----------------------------------------------------- --}}
    @case('skill')
        @section('title','skill')
        @section('content')
          @include('secciones.skill')
        @endsection
    @break
{{-- ------------------------seccion de contenido 4----------------------------------------------------- --}}
    @case('contact')
        @section('title','contact')
        @section('content')
            @include('secciones.contact')
        @endsection
    @break
    @default
@endswitch