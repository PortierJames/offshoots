@extends('layouts.base')

@section('title')
  @include('partial/title')
@endsection
@section('search')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>
<div class="row">
  @include('partial/options')
  @include('partial/advanced')
  @include('partial/results')
</div>
@endsection
