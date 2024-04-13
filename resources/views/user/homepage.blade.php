<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=width-device, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <!--<link rel="stylesheet" href="css/min.js"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Unilag Artisans</title>
</head>

<body>

    <div class="container mx-auto px-4 py-4">
        <form method="GET" action="{{ url('search') }}">
            @csrf
            <div class="flex items-center">
                <input type="text" class="w-full px-4 py-2 border rounded-md mr-2" name="query"
                    placeholder="Search for an artisan">
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Search</button>
            </div>
        </form>
    </div>


    <div class="mt-4">
        @if ($artisans->count() > 0)
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-2 px-4">Name</th>
                    <th class="py-2 px-4">Speciality</th>
                    <th class="py-2 px-4">Hall Of Residence</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($artisans as $artisan)
                    <tr>
                            <td class="py-2 px-4">
                                <a href="{{ url('/')}}" class="block text-black hover:text-blue-500 px-4 py-2"> {{ $artisan->name }} </a>
                            </td>

                            <td class="py-2 px-4">
                                <a href="{{ url('/')}}" class="block text-black hover:text-blue-500 px-4 py-2"> {{ $artisan->artisan }} </a>
                            </td>

                            <td class="py-2 px-4">
                                <a href="{{ url('/')}}" class="block text-black hover:text-blue-500 px-4 py-2"> {{ $artisan->hallOfResidence }} </a>
                            </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- @if ($artisans->count() > 0) --}}
          @else
            <p class="py-2 px-4"> No Artisan Found </p>
          @endif
    </div>


    <script src="app.js"></script>
</body>

</html>
