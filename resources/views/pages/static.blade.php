
@extends('pages.structure')

@section('content')
    @component('partials.title')
    {{ $page_title }}
    @endcomponent
    @include('partials.navi')
@endsection
