@extends('layouts.sidebar-right')

@section('content')

    @noposts
        <x-alert type="warning">
            <h3>{!! __('404', 'sage') !!}</h3>
            {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
        </x-alert>

        {!! get_search_form(false) !!}
    @endnoposts

    @posts
        @includeIf('loops.content')
    @endposts

@endsection

@section('sidebar')
    @include('sections.sidebar')
@endsection
