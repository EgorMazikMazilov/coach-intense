@extends('layouts.site')
@section('head')
    @include('site.head')
@endsection
@section('menu')
    @include('site.menuInner')
@endsection
@section('content')
    @include('site.contentCategories')
@endsection
@section('footer')
    @include('site.footer')
@endsection
@section('scripts')
    @include('site.scripts')
@endsection

