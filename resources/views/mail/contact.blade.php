<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f8fafc; padding: 20px;">
<div style="max-width: 600px; margin: auto; background: #ffffff; border-radius: 10px; padding: 20px; border: 1px solid #e5e7eb;">

    <h2 style="color: #1f2937; text-align: center; margin-bottom: 20px;">📩 New Contact Message</h2>

    <p style="font-size: 16px; color: #374151;">
        You have received a new contact message from <strong>{{ $contact->name }}</strong>.
    </p>

    <table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
        <tr>
            <td style="padding: 10px; border: 1px solid #e5e7eb; width: 30%;"><strong>Name</strong></td>
            <td style="padding: 10px; border: 1px solid #e5e7eb;">{{ $contact->name }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #e5e7eb;"><strong>Email</strong></td>
            <td style="padding: 10px; border: 1px solid #e5e7eb;">{{ $contact->email }}</td>
        </tr>
        @if(!empty($contact->message))
            <tr>
                <td style="padding: 10px; border: 1px solid #e5e7eb; vertical-align: top;"><strong>Message</strong></td>
                <td style="padding: 10px; border: 1px solid #e5e7eb;">{{ $contact->message }}</td>
            </tr>
        @endif
    </table>

    <p style="font-size: 15px; color: #374151;">
        Please respond to this message at your earliest convenience.
    </p>

    <p style="font-size: 14px; color: #6b7280; margin-top: 20px;">
        Regards,<br>
        <strong>{{ config('app.name') }}</strong>
    </p>
</div>
</body>
</html>
