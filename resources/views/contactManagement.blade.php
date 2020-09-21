<!DOCTYPE html>
<html>
    <head>
        <title>Contact Detail Management</title>
    </head>
    <body>
        @component('layouts.components.adminSideNavBar')
        @endcomponent
        <h1>Welcome to Contact Detail Management</h1>
        <a href="{{url('createContact')}}" class="btn btn-primary">Add Contact Detail</a>
        <table style="width:100%">
            <tr>
                <th>Contact Name</th>
                <th>Contact Office</th>
                <th>Contact Postal</th>
                <th>Contact Address</th>
                <th>Contact Email</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($contactDetail as $contact)
                <tr>
                    <td>{{$contact->contactName}}</td>
                    <td>{{$contact->contactOffice}}</td>
                    <td>{{$contact->contactPostal}}</td>
                    <td>{{$contact->contactAddress}}</td>
                    <td>{{$contact->contactEmail}}</td>
                    <td><a href="/contact/{{ $contact->contactName }}/edit">Modify</a></td>
                    <td>
                        <form action="/contact/{{ $contact->contactName }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
