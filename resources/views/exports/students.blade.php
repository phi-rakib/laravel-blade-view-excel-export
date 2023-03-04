<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">City</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($students as $student)
            <tr>
                <th scope="row">{{ $student->id }}</th>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->city }}</td>
            </tr>
        @endforeach
    </tbody>
</table>