<table class="table-auto">
    <thead>
    <tr>
        <th>Name</th>
        <th>Created At</th>
    </tr>
    </thead>
    <tbody>

    @foreach($messages as $message)

        <tr>
            <td>{{$message->name}}</td>
            <td>{{$message->created_at->diffForHumans()}}</td>

        </tr>

    @endforeach

    </tbody>
</table>

@push('scripts')


@endpush
