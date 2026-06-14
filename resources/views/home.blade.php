@extends('layouts.app')

@section('title', 'Klik Rekrut - Layanan Asisten Rekrutmen')
@section('description', 'Temukan pekerjaan impianmu di Klik Rekrut')
@section('keywords', 'find job, lowongan kerja, klik rekrut')

@section('content')
  <link href="{{ asset('assets/css/talent.css') }}?v={{ time() }}" rel="stylesheet">

  <!-- TALENT VIEW -->
  <div id="view-talent" style="display: block;">
      @include('partials.home-talent')
  </div>

  <!-- BUSINESS VIEW -->
  <div id="view-business" style="display: none;">
      @include('partials.home-business')
  </div>

@endsection