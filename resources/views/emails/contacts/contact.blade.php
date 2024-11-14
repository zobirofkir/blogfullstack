<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <h1>Contact Form Submission</h1>
    <p><strong>Name:</strong> {{ $contact['name'] }}</p>
    <p><strong>Email:</strong> {{ $contact['email'] }}</p>
    <p><strong>Subject:</strong> {{ $contact['subject'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $contact['message'] }}</p>
</body>
</html>
