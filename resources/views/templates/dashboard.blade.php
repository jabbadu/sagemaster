{{--
    Template Name: Dashboard
--}}

@extends('layouts.dashboard')

@section('content')
    @hasposts

        @includeFirst(['partials.single.' . get_post_type(), 'partials.single.post'])

    @endhasposts
@endsection

@section('sidebar-navigation')
    @includeIf('sections.dashboard.sidebar-navigation')
@endsection