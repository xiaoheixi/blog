<form class="adminLoginForm" action="/authenticate" method="post">
    @csrf
    <label class="adminLoginLabel" for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br>
    @error('email') <p style="color: red">{{ $message }}</p> @enderror
    <label for="password">Password:</label><br>
    <input type="text" id="password" name="password"><br><br>
    @error('password') <p style="color: red">{{ $message }}</p> @enderror
    <input class="btn btn-outline-warning" type="submit" value="Submit">
</form>
