@extends('layouts.app')

@section('title')
Show Book | Omega Secondary School
@endsection
@section('content')
    @include('layouts.headers.cards')
   
 
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush