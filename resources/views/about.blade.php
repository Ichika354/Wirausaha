@extends('layouts.home')
@section('content')
    <!-- Hero Section -->
    @include('components.about.hero')
    <!-- /Hero Section -->

    <!-- About Description-->
    @include('components.about.description')
    <!-- /About Description-->

    <!-- About-->
    @include('components.about.about')
    <!-- /About -->

@endsection