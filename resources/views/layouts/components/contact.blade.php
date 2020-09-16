<p>
    @foreach($contactDetail as $con)
        {{$con->contactName}} <br>
        Office: {{$con->contactOffice}} <br>
        Postal: {{$con->contactPostal}} <br>
        Address: {{$con->contactAddress}} <br>
        Email: {{$con->contactEmail}} <br>
    @endforeach
</p>