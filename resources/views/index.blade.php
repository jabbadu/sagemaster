@extends('layouts.fullwidth')

@section('content')

    @noposts
        <x-alert type="warning">
            {!! __('Sorry, no results were found.', 'sage') !!}
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
