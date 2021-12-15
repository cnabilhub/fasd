@extends('layouts.app')
@section('page_name')
    Edit : {{ $company->name }}
@endsection
@section('content')
    <div class="p-4">
        @include('companies.form')
    </div>
@endsection
