@extends('layouts.app')
@section('page_name')
    Ajouter Entreprise / Auto-Entrepreneur
@endsection
@section('content')
    <div class="p-4">
        @include('companies.form')
    </div>
@endsection
