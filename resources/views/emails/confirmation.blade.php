<h1>{{ $user->name }}</h1>
<h2>{{ $user->email }}</h2>
<h3>{{ $user->confirmed ? 'Confirmed' : 'Waiting Confirmation' }}</h3>
<h4>{{ $user->confirmation_code }}</h4>