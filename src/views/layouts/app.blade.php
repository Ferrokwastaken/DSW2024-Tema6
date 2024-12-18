<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App - @yield('title')</title>
</head>

<body>
  <nav>
    <ul>
      @include('layouts.menu')
    </ul>
  </nav>
  <h1>@yield('title')</h1>
  <main>
    @section('content')
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi suscipit nihil natus minima. Dignissimos, reprehenderit voluptas ullam minus impedit vitae. Repudiandae optio cumque voluptatem adipisci laboriosam labore perspiciatis repellat velit!</p>
    @show
  </main>
</body>

</html>