<html>
<head>
    <title>Loaded data from mysql database</title>
</head>

<body>
    <h1>My Travel Bucket List</h1>
    <h2>Places I'd Like to Visit</h2>
    <ul>
      @foreach ($togo as $newplace)
        <li>{{ $newplace->name }}</li>
      @endforeach
    </ul>

    <h2>Places I've Already Been To</h2>
    <ul>
          @foreach ($visited as $place)
                <li>{{ $place->name }}</li>
          @endforeach
    </ul>

    <h1>Loaded data from redis</h1>
    <p>{{ $redis }}</p>
</body>
</html>
