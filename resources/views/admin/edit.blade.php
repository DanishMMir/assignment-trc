@extends('layouts.app')
@section('title',' Dashboard')
@section('content')
    <div id="app">
        @if($view === 'snippet')
            <edit-snippet :snippet-prop="{{ $snippet }}"></edit-snippet>
        @elseif($view === 'link')
            <edit-link :link-prop="{{ $link }}"></edit-link>
        @else
            <edit-file :file-prop="{{ $file }}"></edit-file>
        @endif
    </div>
@endsection
