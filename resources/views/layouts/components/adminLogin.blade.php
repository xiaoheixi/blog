<form action="/authenticate">
  @csrf
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>
  @error('email') <p style="color: red">{{ $message }}</p> @enderror
  <label for="password">Password:</label><br>
  <input type="text" id="password" name="password"><br><br>
  @error('password') <p style="color: red">{{ $message }}</p> @enderror
  <input type="submit" value="Submit">
</form>
