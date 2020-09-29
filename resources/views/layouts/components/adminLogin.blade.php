<!--

<form class="adminLoginForm" action="/authenticate" method="post">
    @csrf
    <label class="adminLoginLabel" for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br>
    @error('email') <p style="color: red">{{ $message }}</p> @enderror
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>
    @error('password') <p style="color: red">{{ $message }}</p> @enderror
    <input class="btn btn-outline-warning" type="submit" value="Submit">
</form>

!-->

<div class="service-page">
    <div class="container ">
        <div class="widget cart">
            <h3 align="left">Login</h3>
            <hr />

            <form action="/authenticate" method="post">
                <a class="adminbar">
                    <img class="navBarLogo" src="/images/Marketing_4_Growth_Logo.jpg" alt="logo" width="30%"
                        style="margin-bottom: 20px;" />
                </a>
                <div class="text">
                    @csrf



                    <label for="email"><b>Email:</b></label><br> <input type="email" id="email" name="email"><br><br>
                    @error('email') <p style="color: red">{{ $message }}</p> @enderror





                    <label for="password"><b>Password:</b></label><br>
                    <input type="password" id="password" name="password"><br><br>
                    @error('password') <p style="color: red">{{ $message }}</p> @enderror

                    <input type="submit" value="Login Now" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
