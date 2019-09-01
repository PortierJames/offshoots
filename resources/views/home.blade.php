@extends('layouts.base')

@section('title')
  @include('partial/title')
@endsection
@section('search')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">{{ config('app.name', 'Laravel') }}</li>
  </ol>
</nav>
<div class="row">
  @include('partial/options')
  @include('partial/search')
  @include('partial/results')
</div>
@endsection
