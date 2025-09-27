<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Consultation Booking</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f8fafc; padding: 20px;">
<div style="max-width: 600px; margin: auto; background: #ffffff; border-radius: 10px; padding: 20px; border: 1px solid #e5e7eb;">

    <h2 style="color: #1f2937; text-align: center; margin-bottom: 20px;">📅 New Consultation Scheduled</h2>

    <p style="font-size: 16px; color: #374151;">
        Hello <strong>{{ $consultation->name }}</strong>,
    </p>
    <p style="font-size: 15px; color: #374151; line-height: 1.6;">
        Thank you for booking a consultation with us. Here are your details:
    </p>

    <table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
        <tr>
            <td style="padding: 10px; border: 1px solid #e5e7eb;"><strong>Name</strong></td>
            <td style="padding: 10px; border: 1px solid #e5e7eb;">{{ $consultation->name }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #e5e7eb;"><strong>Email</strong></td>
            <td style="padding: 10px; border: 1px solid #e5e7eb;">{{ $consultation->email }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #e5e7eb;"><strong>Phone</strong></td>
            <td style="padding: 10px; border: 1px solid #e5e7eb;">{{ $consultation->phone }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #e5e7eb;"><strong>Date</strong></td>
            <td style="padding: 10px; border: 1px solid #e5e7eb;">{{ \Carbon\Carbon::parse($consultation->date)->format('d M Y') }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #e5e7eb;"><strong>Time</strong></td>
            <td style="padding: 10px; border: 1px solid #e5e7eb;">{{ \Carbon\Carbon::parse($consultation->time)->format('h:i A') }}</td>
        </tr>
        @if(!empty($consultation->notes))
            <tr>
                <td style="padding: 10px; border: 1px solid #e5e7eb;"><strong>Notes</strong></td>
                <td style="padding: 10px; border: 1px solid #e5e7eb;">{{ $consultation->notes }}</td>
            </tr>
        @endif
    </table>

    <p style="font-size: 15px; color: #374151;">
        We look forward to speaking with you.
    </p>

    <p style="font-size: 14px; color: #6b7280; margin-top: 20px;">
        Regards,<br>
        <strong>Shivansh Dargarh</strong>
    </p>
</div>
</body>
</html>
