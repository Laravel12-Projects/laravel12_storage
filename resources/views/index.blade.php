<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('create') }}" class="card btn btn-primary" style="text-decoration: none; display: inline-block; background-color: #E91E63; color: white; padding: 10px 15px; border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <div class="card-body" style="font-size: 14px;">
            Create
        </div>
    </a>
    <h3>Informations</h3>
    <div style="display: flex; flex-wrap: wrap; gap: 20px;">
        @foreach ($informations as $information)
            <div style="border: 1px solid #ddd; padding: 10px; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);">
                <h4 style="margin-top: 0;">{{ $information->name }}</h4>
                <img src="{{ asset('images/' . $information->file_uri) }}" alt="file" style="width: 100px; height: 100px; border-radius: 5px;">
            </div>
        @endforeach
    </div>
</body>
</html>