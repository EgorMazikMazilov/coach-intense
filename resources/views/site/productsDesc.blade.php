@extends('layouts.site')
@section('head')
    @include('site.head')
@endsection
@section('menu')
    @include('site.menuInner')
@endsection
@section('content')
    @include('site.contentDescProduct')
@endsection
@section('footer')
    @include('site.footerInner')
@endsection
@section('scripts')
    @include('site.scripts')
@endsection

