<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full">
        <div class="max-w-4xl mx-auto">
            <div class="flex justify-center py-16">
                <h1 class="text-8xl font-bold">Movies</h1>
            </div>
            <div class="flex justify-end mb-4">
                <div class="flex cursor-pointer gap-2 px-4 py-2 text-white border rounded-lg bg-green-500 hover:bg-green-600">
                    Add
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
                </div>
            </div>
            <div class="grid grid-cols-1 px-2 gap-4 md:px-4 md:grid-cols-2 lg:grid-cols-3">
                @foreach($movies as $movie)
                <div class="flex flex-col gap-2 border rounded-lg p-2">
                    <img src="{{$movie['poster_path']}}" alt="{{$movie['title']}}">
                    <h4 class="text-lg font-bold">
                        {{$movie['title']}}
                    </h4>
                    <p class="line-clamp-2">
                        {{$movie['description']}}
                    </p>
                    <div class="flex justify-around items-center">
                        <button class="hover:text-blue-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                        </button>
                        <button class="hover:text-red-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                        </svg>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
