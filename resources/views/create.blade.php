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
        <a style="background-color: #4CAF50; color: white; padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;" href="{{ route('index') }}" class="btn btn-primary">Back to index</a>
        
        <h3>Create Information</h3>
        <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
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