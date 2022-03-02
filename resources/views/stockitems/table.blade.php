<div class="table-responsive">
    <table class="table" id="stockitems-table">
        <thead>
        <tr>
            <th>Administratorid</th>
        <th>Branchid</th>
        <th>Product</th>
        <th>Stocklevel</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($stockitems as $stockitem)
            <tr>
                <td>{{ $stockitem->administratorid }}</td>
            <td>{{ $stockitem->branchid }}</td>
            <td>{{ $stockitem->product }}</td>
            <td>{{ $stockitem->stocklevel }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['stockitems.destroy', $stockitem->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('stockitems.show', [$stockitem->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('stockitems.edit', [$stockitem->id]) }}"
                           class='btn btn-default btn-xs'>
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
