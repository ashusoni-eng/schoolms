<table>
    <tr>
        <th>Name</th>
        <th>Class Teacher</th>
        <th>Total Student</th>
    </tr>
    @foreach ($classes as $cls)
        <tr>
            <td>{{$cls->className}}</td>
            <td>
                @if ($cls->classTeacher)
                    {{$cls->classTeacher->name}}
                @else
                    No Class Teacher Assigned
                @endif
            </td>
            <td>{{$cls->students->count()}}</td>
        </tr>
    @endforeach
</table>