@extends("layouts.app")

@section("page-title", "Create")

<!-- Create -->
@section("main")
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <!-- Form -->
                <form action="{{ route('trains.store') }}" method="post">
                    @csrf
                    <!-- Azienda -->
                    <label for="azienda" class="form-label">Azienda:</label>
                    <input type="text" id="azienda" class="form-control" name="azienda" placeholder="Azienda">
                    <!-- Stazione di partenza -->
                    <label for="stazione-partenza" class="form-label">Stazione di partenza:</label>
                    <input type="text" id="stazione-partenza" class="form-control" name="stazione_partenza" placeholder="Stazione di partenza">
                    <!-- Stazione di arrivo -->
                    <label for="stazione-arrivo" class="form-label">Stazione di arrivo:</label>
                    <input type="text" id="stazione-arrivo" class="form-control" name="stazione_arrivo" placeholder="Stazione di arrivo">
                    <!-- Data di partenza -->
                    <label for="data-partenza" class="form-label">Data di partenza:</label>
                    <input type="text" id="data-partenza" class="form-control" name="data_partenza" placeholder="Data di partenza">
                    <!-- Data di arrivo -->
                    <label for="data-arrivo" class="form-label">Data di arrivo:</label>
                    <input type="text" id="data-arrivo" class="form-control" name="data_arrivo" placeholder="Data di arrivo">
                    <!-- Orario di partenza -->
                    <label for="orario-partenza" class="form-label">Orario di partenza:</label>
                    <input type="text" id="orario-partenza" class="form-control" name="orario_partenza" placeholder="Orario di partenza">
                    <!-- Orario di arrivo -->
                    <label for="orario-arrivo" class="form-label">Orario di arrivo:</label>
                    <input type="text" id="orario-arrivo" class="form-control" name="orario_arrivo" placeholder="Orario di arrivo">
                    <!-- Codice treno -->
                    <label for="codice-treno" class="form-label">Codice treno:</label>
                    <input type="text" id="codice-treno" class="form-control" name="codice_treno" placeholder="Codice treno">
                    <!-- Numero carrozze -->
                    <label for="numero-carrozze" class="form-label">Numero carrozze:</label>
                    <input type="text" id="numero-carrozze" class="form-control" name="numero_carrozze" placeholder="Numero carrozze">
                    <!-- In orario -->
                    <label for="in-orario" class="form-label">In orario:</label>
                    <input type="text" id="in-orario" class="form-control" name="in_orario" placeholder="In orario">
                    <!-- Cancellato -->
                    <label for="cancellato" class="form-label">Cancellato:</label>
                    <input type="text" id="cancellato" class="form-control" name="cancellato" placeholder="Cancellato">
                    <div class="my-3">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <button type="reset" class="btn btn-secondary">Annulla</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
