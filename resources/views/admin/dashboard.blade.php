@extends('layouts.blank')

@section('title')
    Dashboard Tailwind
@endsection

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    @include('layouts.widget')
    @include('layouts.activity')
    @include('layouts.signup')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

@section('scripts')
    
@endsection