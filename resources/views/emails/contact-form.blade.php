<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
<h2> You've received a new message on parapharm.com.lb's Contact Form! </h2>
<hr>

<p> <b>Name:</b> {{ $data['name'] }} </p>
<p> <b>Email:</b> {{ $data['email'] }} </p>
<p> <b>Date:</b> {{ Carbon\Carbon::now() }} </p>
<p> <b>Message:</b> <br> {{ $data['message'] }} </p>

</body>
</html>