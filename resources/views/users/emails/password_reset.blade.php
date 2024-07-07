<!-- resources/views/emails/password_reset.blade.php -->
<p>Hello,</p>

<p>You are receiving this email because we received a password reset request for your account.</p>

<p>Click the link below to reset your password:</p>

<a href="{{ url('password/reset', $token) }}">Reset Password</a>

<p>If you did not request a password reset, no further action is required.</p>

<p>Thanks,<br>{{ config('app.name') }}</p>
