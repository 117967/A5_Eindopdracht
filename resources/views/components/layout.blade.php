<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    <link rel='icon' href="">
    <title>EINDOPDRACHT</title>
</head>

<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href=""><img class="w-24" src="images/logo.png" class="logo"></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            <li>
                <a href="" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i>Register</a>
            </li>
            <li>
                <a href="" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>Login</a>
            </li>
        </ul>
    </nav>


    <main>
        {{$slot}}
    </main>
    
    <footer
        class="fixed bottom-0 left-0 w-full flex item-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity 90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2022, We just making a school project</p>
        <a href="create.html" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Create Band</a>
    </footer>
</body>

</html>
