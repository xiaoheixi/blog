<footer id="footer">
    @foreach ($footerContent as $footer)
    <p class="contactDetails">
        @foreach($contactDetail as $con)
        {{$con->contactName}} <br>
        Office: {{$con->contactOffice}} <br>
        Postal: {{$con->contactPostal}} <br>
        Address: {{$con->contactAddress}} <br>
        Email: {{$con->contactEmail}} <br>
        @endforeach
    </p>
    <p class="text-center">&copy; {{$footer -> footerText}} | <a class="footerLink" target="_blank"
            href="{{$footer -> footerLink}}">
            {{$footer -> footerName}}</a> </p>
    @endforeach
</footer>
