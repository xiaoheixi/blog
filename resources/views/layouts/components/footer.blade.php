@foreach ($footerContent as $footer)
<div id="footer-container">

</div>
<footer id="footer">
    <p class="text-center">&copy; {{$footer -> footerText}} | <a class="footerLink" href="{{$footer -> footerLink}}">
            {{$footer -> footerName}}</a> </p>
</footer>
@endforeach
