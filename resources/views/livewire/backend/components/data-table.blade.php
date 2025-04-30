<div>
    <table class="table table-striped">
        <thead>
            <tr>
                @foreach ($staticColumns as $static)
                <th>{{ $static['label'] }}</th>
                @endforeach

                @foreach ($columns as $column)
                <th>{{ $column['label'] }}</th>
                @endforeach

                @if($actions)
                <th>Actions</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @forelse ($rows as $row)
            <tr>
                {{-- Static Columns --}}
                @foreach ($staticColumns as $static)
                <td>
                    {!! $static['render']($row) !!}
                </td>
                @endforeach

                {{-- Dynamic Columns --}}
                @foreach ($columns as $column)
                <td>{{ data_get($row, $column['key']) }}</td>
                @endforeach

                {{-- Action Buttons --}}
                @if($actions)
                <td>
                    <a href="{{ route($static['editRoute'], $row->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <button wire:click="$emit('confirmDelete', {{ $row->id }})" class="btn btn-sm btn-danger">Delete</button>
                </td>
                @endif
            </tr>
            @empty
            <tr>
                <td colspan="{{ count($columns) + count($staticColumns) + ($actions ? 1 : 0) }}">
                    No records found.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{ $rows->links() }}
</div>