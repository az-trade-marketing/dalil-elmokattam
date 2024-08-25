<!-- resources/views/emails/password_reset.blade.php -->
<p>Hello,</p>

<p>You are receiving this email because we received a password reset request for your account.</p>

<p>this otp :{{ $token }}</p>

<p>Thanks,<br>{{ config('app.name') }}</p>
