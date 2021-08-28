@if ($LoginStatusKey == true)

<h1>You are logged in!</h1>

@elseif ($LoginStatusKey==false)

<h1>You are not logged in!</h1>

@else

<h1>Login Status Not Found!</h1>

@endif
