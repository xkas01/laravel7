@extends('layouts.main')
@section('content')
    @foreach($news as $item)
        @include('components.news-card',['item'=>$item])
    @endforeach
@endsection
