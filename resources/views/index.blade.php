@extends('layouts.master')


    @section('title', 'about')
<div id="about" data-magellan-target="about"></div>
            {{-- ------------------------seccion de contenido 1----------------------------------------------------- --}}
            @section('content1')
              @include('secciones.about')
            @endsection


                {{-- ------------------------------seccion de contenido 2------------------------------------------------------- --}}
                @section('content2')

                    @include('secciones.experience')

                    @endsection

                    {{-- -----------------------seccion de contenido 3-------------------------------------------------------------- --}}
                    @section('content3')
                        @include('secciones.skill')
                    @endsection


                    {{-- -------------------------------seccion de contenido 5------------------------------------------------------ --}}
                            @section('content4')
                                @include('secciones.contact')
                            @endsection






@section('contentex')
    @include('secciones.about1')
    @endsection