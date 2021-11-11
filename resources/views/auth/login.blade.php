<link rel="stylesheet" href="/css/login.css">

<div class="center">
    <h1>Login</h1>
    <form method="POST" action="{{route('login.custom')}}">
        @csrf
        <div class="inputbox">
            <input type="text" required="required" name="username">
            <span>Username</span>
        </div>
        <div class="inputbox">
            <input type="password" required="required" name="password">
            <span>Password</span>
        </div>
        <div class="inputbox">
            <input type="button" value="submit">
        </div>

    </form>
</div>
