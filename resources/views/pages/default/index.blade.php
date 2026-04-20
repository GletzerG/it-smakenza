@extends('layouts.app')
@section('main')
    <section id="home">@include('pages.default.landing.index')</section>
    <section id="programs">@include('pages.default.programs.index')</section>
    <section id="about">@include('pages.default.about.mission.index')</section> 
@endsection