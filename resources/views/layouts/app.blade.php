<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', "Umarov's Diary")</title>
</head>
<body>
    <header>
        <h1>Umarov's Diary</h1>
        <nav>
            <a href="{{ route('posts.index') }}">Home</a>
        </nav>
    </header>

    <main>
        <nav>
            <ul>
                @yield('breadcrumb')
            </ul>
        </nav>

        @yield('content')
    </main>
</body>
</html>
