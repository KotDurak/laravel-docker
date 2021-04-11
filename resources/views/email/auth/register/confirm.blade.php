
# Email confirmation

Please refer to the following link:

<a href="<?= route('register.verify', ['token' => $user->verify_token]) ?>">Register</a>
<br>
    Verify email


Thanks, <br>
{{ config('app.name') }}
