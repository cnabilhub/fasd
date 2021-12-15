@extends('layouts.app')
@section('page_name')
    Ajouter une entreprose / Autoentrepreneur
@endsection
@section('content')
    <div class="p-4">
        @include('companies.form')
    </div>
@endsection
