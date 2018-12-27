
@extends('pages.structure')

@section('content')
    @component('partials.title')
    {{ $page->title }}
    {{-- {{ $page_title }} no db --}}
    @endcomponent
    <p>{{$page->content}}</p>
    @include('partials.navi')
@endsection
