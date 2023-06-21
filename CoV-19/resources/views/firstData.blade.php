<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{asset('icon.png')}}" type="image/x-icon">
  <title>CoV-19 Start the App</title>
</head>
<body>
  
<form action="{{route('UpdateData')}}" method="POST">
  @csrf
    <button> Click here to start the app</button>
</form>
  
</body>
</html>