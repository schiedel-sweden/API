<div class="col-md-8 col-md-offset-2">
    <h2>Importera excel fil</h2>

    <div class="alert alert-info">
        information om importer
    </div>

    <form action="/" method="POST">
        {{ csrf_field() }}
        @include('layouts.errors')

        <div class="form-group">
            <input type="file" name="import_file">
        </div>
        <div class="form-group">
            <button class="btn btn-info" type="submit" name="button">Ladda upp excel fil</button>
        </div>
    </form>
</div>
