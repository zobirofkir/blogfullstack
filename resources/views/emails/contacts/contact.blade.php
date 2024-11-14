<!DOCTYPE html>
<html>
<head>
    <title>إرسال نموذج الاتصال الجديد</title>
</head>
<body>
    <h1>إرسال نموذج الاتصال</h1>
    <p><strong>الاسم:</strong> {{ $contact['name'] }}</p>
    <p><strong>البريد الإلكتروني:</strong> {{ $contact['email'] }}</p>
    <p><strong>الموضوع:</strong> {{ $contact['subject'] }}</p>
    <p><strong>الرسالة:</strong></p>
    <p>{{ $contact['message'] }}</p>
</body>
</html>
