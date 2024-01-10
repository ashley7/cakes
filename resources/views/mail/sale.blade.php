<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env("APP_NAME")}}</title>
</head>
<body>

<p>Hello {{$sale->name}}</p>
<p>Please visit this Link to access your file</p>
<a href="/sales/{{$hexEmail}}">File Access Link</a>
    
</body>
</html>