@extends('layouts.sidebar-right')

@section('content')

    @noposts
        <x-alert type="warning">
            {!! __('Sorry, no results were found.', 'sage') !!}
        </x-alert>

        {!! get_search_form(false) !!}
    @endnoposts

    @posts
        @includeFirst(['loops.' . get_post_type(), 'loops.content'])
    @endposts

@endsection

@section('sidebar')
    @include('sections.sidebar')
@endsection
