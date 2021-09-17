<div class="table-responsive">
    <table class="table" id="schools-table">
        <thead>
            <tr>
                <th>Schoolname</th>
        <th>Schooladdress</th>
        <th>Principalname</th>
        <th>Date</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($schools as $school)
            <tr>
                <td>{{ $school->schoolName }}</td>
            <td>{{ $school->schoolAddress }}</td>
            <td>{{ $school->principalName }}</td>
            <td>{{ $school->Date }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['schools.destroy', $school->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('schools.show', [$school->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('schools.edit', [$school->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
