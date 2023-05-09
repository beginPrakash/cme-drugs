<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        <ul>
            <li><a href="{{url('speciality')}}">Select Speciality</a></li>
            <li><a href="{{url('sub_group')}}">Select Sub Group</a></li>
            <li><a href="{{url('indications')}}">Select Indcations</a></li>
            <li><a href="{{url('sub_indications')}}">Select Sub Indcations</a></li>
            <li><a href="{{url('drug')}}">Select Drug</a></li>
            <li><a href="{{url('drug_detail')}}">Drugs Detail</a></li>
        </ul>
    </body>
</html>
