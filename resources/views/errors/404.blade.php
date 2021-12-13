<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page not found</title>
    @include('layouts.inc.styles')
</head>

<body class=" w-full h-full p-40  mx-auto text-indigo-100">

    <div
        class="w-1/2 flex bg-gradient-to-tr from-indigo-600 to-indigo-900 i justify-around items-center rounded-lg shadow-md shadow-indigo-500/50 mx-auto p-1   0">

        <div class="container-page text-center p-10 mx-auto my-auto">
            <h1 class="block text-6xl"> Page not found</h1>
            <div class="text-8xl">
                404
            </div>
            <div class="text-center text-xl">
                Tu sais ce qui ne cesse de me passer par la tête ? Où est mon sandwich ?
            </div>
            <div class="block mt-10">
                <a href="{{ route('dashboard') }}" class="mt-4 text-bold p-4 bg-indigo-400 text-white shadow-xl"> <i
                        class="fas fa-home"></i> Back Home</a>
            </div>
        </div>

    </div>

</body>

</html>
