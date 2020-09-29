<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzxap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">            
    </script>
    
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/login.css" rel="stylesheet">
   
</head>

<body>
    <div class="wrapper">
        @if($pageContent->URI != 'adminLogin')
        @component('layouts.components.navbar')
        @endcomponent
        @endif
        @if ($pageContent->URI == 'home')
        @component('layouts.components.carousel')
        @endcomponent
        @endif
        @if ($pageContent->URI == 'home')
        @component('layouts.components.radioShow')
        @endcomponent
        @endif
        {!!$pageContent->pageContent!!}
        @if ($pageContent->URI == 'shop')
        @component('layouts.components.sidenavbar')
        @endcomponent
        @endif
        @if ($pageContent->URI == 'videos')
        @component('layouts.components.sidenavbar')
        @endcomponent
        @endif
        @if ($pageContent->URI == 'audio')
        @component('layouts.components.sidenavbar')
        @endcomponent
        @endif
        @if ($pageContent->URI == 'books')
        @component('layouts.components.sidenavbar')
        @endcomponent
        @endif
        @if ($pageContent->URI == 'cart')
        @component('layouts.components.cart')
        @endcomponent
        @endif
        @if ($pageContent->URI == 'checkOut')
        @component('layouts.components.checkout')
        @endcomponent
        @endif
        @if ($pageContent->URI == 'sendemail')
        @component('layouts.components.send_email')
        @endcomponent
        @endif
        @if ($pageContent->URI == 'adminLogin')
        @component('layouts.components.adminLogin')
        @endcomponent
        @endif
        @if ($pageContent->URI == 'service')
        @component('layouts.components.service')
        @endcomponent
        @endif
        @if ($pageContent->URI == 'news')
        @component('layouts.components.news')
        @endcomponent
        @endif
        @if ($pageContent->URI == 'shop')
        @component('layouts.components.shop')
        @endcomponent
        @endif
        @if ($pageContent->URI == 'audio')
        @component('layouts.components.audioShop')
        @endcomponent
        @endif
        @if ($pageContent->URI == 'books')
        @component('layouts.components.bookShop')
        @endcomponent
        @endif
        @if ($pageContent->URI == 'videos')
        @component('layouts.components.videoShop')
        @endcomponent
        @endif
    </div>
    @if ($pageContent->URI != 'adminLogin')
    @component('layouts.components.footer')
    @endcomponent
    @endif
</body>

</html>
