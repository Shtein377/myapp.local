@extends('layouts.app')


@section('content')

@push('css')
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
@endpush
    

@push('js')
    <script src="js/script.js"></script>
@endpush
@endsection