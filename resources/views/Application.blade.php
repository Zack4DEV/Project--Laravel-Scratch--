<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="{{ asset('favicon.ico') }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ __('Welcome') }}</title>
</head>

<body>
  <div id="app">
    @vite(['resources/ts/main.ts'])
  </div>
</body>

</html>