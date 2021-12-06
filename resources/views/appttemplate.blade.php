<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h4{
            color:deeppink;
        }
    </style>
</head>
<body>
    
</body>
</html>
<h1>Appointment Made</h1>

<body>
<p>Name:{{$details['name']}}</p>
<p>Email:{{ $details['email'] }}</p>
<p>Number:{{ $details['phone'] }}</p>
<p>#Adults:{{ $details['adults'] }}</p>
<p>Date:{{ $details['apptdate'] }}</p>
<p>Time:{{ $details['appttime'] }}</p>
<p>Add'l Details:{{ $details['message'] }}</p>
<h4>Services:</h4>
<p>{{ $details['check'] }}</p>
<p>{{ $details['classic'] }}</p>
<p>{{ $details['half'] }}</p>
<p>{{ $details['volume'] }}</p>
<p>{{ $details['set'] }}</p>
<p>{{ $details['remove'] }}</p>
<p>{{ $details['refill'] }}</p>
<p>{{ $details['bottom'] }}</p>
<p>{{ $details['hybrid'] }}</p>
<p>{{ $details['eyebrow'] }}</p>
<p>{{ $details['arm'] }}</p>
<p>{{ $details['waxing'] }}</p>
<p>{{ $details['line'] }}</p>
<p>{{ $details['Bikini'] }}</p>
<p>{{ $details['Brazilian'] }}</p>
<p>{{ $details['leg'] }}</p>
<p>{{ $details['Stomach'] }}</p>
<p>{{ $details['Tinting'] }}</p>

<p>Thank You</p>
</body>