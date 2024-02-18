@extends('layouts.template')

@push('header')
About Us
@endpush

@section('content')
@include('includes.pagetitle')
@include('includes.about')
@include('includes.action')
@include('includes.team')
@endsection