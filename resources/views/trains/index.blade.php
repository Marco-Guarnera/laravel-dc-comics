@extends("layouts.app")

@section("page-title", "Index")

<!-- Index -->
@section("main")
    <div class="container-fluid">
        <a href="{{ route('trains.create') }}" class="btn btn-primary">Create</a>
        <!-- Table -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Azienda</th>
                    <th>Stazione di partenza</th>
                    <th>Stazione di arrivo</th>
                    <th>Data di partenza</th>
                    <th>Data di arrivo</th>
                    <th>Orario di partenza</th>
                    <th>Orario di arrivo</th>
                    <th>Codice treno</th>
                    <th>Funzioni</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($trains_list as $item)
                    <tr class="align-middle">
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->azienda }}</td>
                        <td>{{ $item->stazione_partenza }}</td>
                        <td>{{ $item->stazione_arrivo }}</td>
                        <td>{{ $item->data_partenza }}</td>
                        <td>{{ $item->data_arrivo }}</td>
                        <td>{{ $item->orario_partenza }}</td>
                        <td>{{ $item->orario_arrivo }}</td>
                        <td>{{ $item->codice_treno }}</td>
                        <td>
                            <a href="{{ route('trains.show', $item->id) }}" class="btn btn-success">Show</a>
                            <a href="{{ route('trains.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('trains.delete', $item->id) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <div>Not Available</div>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
