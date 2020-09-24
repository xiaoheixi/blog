<!DOCTYPE html>
<html>

<head>
    <title>Contact Detail Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzxap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-fluid">
        <h1>Welcome to Contact Detail Management</h1>
        <div class="row">
            @component('layouts.components.adminSideNavBar')
            @endcomponent
            <table class="table table-bordered" style="width:71%">
                <tr>
                    <th>Contact Name</th>
                    <th>Contact Office</th>
                    <th>Contact Postal</th>
                    <th>Contact Address</th>
                    <th>Contact Email</th>
                    <th>Modify</th>
                    <th>Delete</th>
                </tr>
                @foreach($contactDetail as $contact)
                <tr>
                    <td>{{$contact->contactName}}</td>
                    <td>{{$contact->contactOffice}}</td>
                    <td>{{$contact->contactPostal}}</td>
                    <td>{{$contact->contactAddress}}</td>
                    <td>{{$contact->contactEmail}}</td>
                    <td><a href="/contact/{{ $contact->contactName }}/edit"><button
                                class="modifyButton">Modify</button></a></td>
                    <td>
                        <form class="formDeleteButtonAdminPanel" action="/contact/{{ $contact->contactName }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="deleteButton">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            <a class="createButton" href="{{url('createContact')}}" class="btn btn-primary"><button
                    class="createButton">Add
                    Contact Detail</button></a>
        </div>
    </div>
</body>

</html>
