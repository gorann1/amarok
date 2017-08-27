@extends('layouts.app')

@section('content')
    <h1>Contact Page Here</h1>

    @if(count($people))

        <ul>
        @foreach($people as $person)
            <li>{{$person}}</li>

            @endforeach
        </ul>
    @endif

        @stop

@section('footer')
    {{--<script>alert('Ovo je kontakt stranica')</script>--}}

    @stop