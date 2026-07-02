@extends('layouts.app')

@section('content')

    <div id="home"></div>

    @include('partials.hero')
    <x-marquee bg="yellow" text="WEB DEVELOPER • OPEN TO WORK • LARAVEL • TAILWIND CSS • PYTHON • BALI, INDONESIA" />
    @include('partials.about')
    @include('partials.skills')
    @include('partials.experience')
    @include('partials.projects')
    <x-marquee bg="pink" text="LET'S BUILD SOMETHING TOGETHER • SAY HELLO • LET'S BUILD SOMETHING TOGETHER" />
    @include('partials.certificates')
    @include('partials.contact')

@endsection
