<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <h1 class="text-danger">Contact Us Form Message</h1>
    <h5>Email: {{$data['email']}}</h5>
    <h5>Name: {{$data['name']}}</h5>
    <h5>Phone: {{$data['phone']}}</h5>

    <h5>Message</h5>
    <p>{{$data['message']}}</p>
</body>
</html>