<h1>User Login</h1>

<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="User Name"> <br>
    <span style="color: red">@error('username')
        {{ $message }}
        @enderror</span><br>
    <input type="password" name="password" placeholder="enter password"><br>
    <span style="color: red">@error('password')
        {{ $message }}
        @enderror</span><br>
    <button type="submit">Login</button>
</form>