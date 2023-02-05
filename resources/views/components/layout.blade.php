@props(['title', 'header1' => '', 'header2' => ''])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#FDEFEE]">

    <header>
        <div class="text-center py-4 md:py-16">
            <h1 class="text-6xl text-[#w] font-bold">{{$header1}}</h1>
            <h1 class="text-6xl text-[#F33A2E] font-bold">{{$header2}}</h1>
        </div>
    </header>

    <main>
        <div class="w-full">
            {{$slot}}
        </div>
    </main>

    <hr>

    <footer class="h-[40vh] bg-[#F33A2E] text-white flex justify-center items-center gap-4">
        <div>

            <p class="text-muted text-center">
                Made with ♥ by Mark Dennis Sanchez
            </p>
            <h6 class="text-muted text-center">
                <small>
                    <a href="mailto:markdennissanchez1@gmail.com">Contact Me</a>
                </small>
            </h6>
        </div>
    </footer>
</body>
</html>
