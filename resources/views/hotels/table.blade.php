<div class="table-responsive">
    <table class="table" id="hotels-table">
        <thead>
            <tr>
                <th>Yourname</th>
        <th>Youraddress</th>
        <th>Hotelname</th>
        <th>Hotelnumber</th>
        <th>Hoteladdress</th>
        <th>Dateattended</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($hotels as $hotels)
            <tr>
                <td>{{ $hotels->yourName }}</td>
            <td>{{ $hotels->yourAddress }}</td>
            <td>{{ $hotels->hotelName }}</td>
            <td>{{ $hotels->hotelNumber }}</td>
            <td>{{ $hotels->hotelAddress }}</td>
            <td>{{ $hotels->dateAttended }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['hotels.destroy', $hotels->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('hotels.show', [$hotels->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('hotels.edit', [$hotels->id]) }}" class='btn btn-default btn-xs'>
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
