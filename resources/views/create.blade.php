<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a href="{{ route('index') }}" class="card btn btn-primary" style="text-decoration: none; display: inline-block; background-color: #E91E63; color: white; padding: 10px 15px; border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <div class="card-body" style="font-size: 14px;">
                Back to index
            </div>
        </a>
        <h3>Create Information</h3>
    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data" 
                style="border: 1px solid #ddd; padding: 10px; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); margin-right: 50%">
            @csrf
            <div style="margin-bottom: 10px;" class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
           
            <div style="margin-bottom: 10px;" class="form-group">
                <label for="file">File</label>
                <input type="file" name="file" class="form-control-file">
            </div>
           

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</body>
</html>