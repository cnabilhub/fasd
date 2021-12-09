@extends('layouts.app')

@section('content')
    <div class="w-full  flex flex-wrap -mx-2 overflow-hidden sm:-mx-2 md:-mx-3 lg:-mx-2 xl:-mx-2">
        @foreach ($companies as $c)

            <div
                class="bg-indigo-50 shadow-md  shadow-indigo-100  p-5  my-2 px-2 w-full overflow-hidden sm:my-2 
    sm:px-2 sm:w-full md:my-3 md:px-3 md:w-1/2 lg:my-2 lg:px-2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/3
    rounded">
                <h1> {{ $c->name }}</h1>
                <h1> {{ $c->phone }}</h1>
                <h1> {{ $c->email }}</h1>
                <h1> {{ $c->tax_id }}</h1>
                <div class="actions">
                    <button
                        class="py-2 px-3 bg-indigo-500 text-white text-sm font-semibold rounded-md shadow-lg shadow-indigo-500/50 focus:outline-none">View
                    </button>

                    <button
                        class="py-2 px-3 bg-indigo-500 text-white text-sm font-semibold rounded-md shadow-lg shadow-indigo-500/50 focus:outline-none">Edit</button>

                </div>
            </div>


        @endforeach

    </div>
@endsection
