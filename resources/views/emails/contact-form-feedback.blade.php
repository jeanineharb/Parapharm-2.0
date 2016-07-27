<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
<h2> We've received a new message from you on <a href="parapharm.com.lb">Parapharm SAL</a>'s Contact Form! </h2>
<h3> Below is a copy of your message. We will reply to you shortly. Thank you! </h3>

<hr>

<p> <b>Name:</b> {{ $data['name'] }} </p>
<p> <b>Email:</b> {{ $data['email'] }} </p>
<p> <b>Date:</b> {{ Carbon\Carbon::now() }} </p>
<p> <b>Message:</b> <br> {{ $data['message'] }} </p>

<hr>

<h3> Parapharm SAL </h3>

</body>
</html>