@csrf

@if ($errors->any())
    <div class="alert alert-danger">
        <p class="m-0">Compilare/Aggiustare i campi suggeriti</p>
    </div>
@endif
<div class="row">
    <div class="col-12">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control shadow @error('title') is-invalid @enderror" required name="title"
                id="title" placeholder="Testo del progetto" value="{{ old('title', $project->title ?? '') }}">
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

    </div>
    <div class="col-12 mb-3">
        <label for="description" class="form-label">Descrizione del progetto</label>
        <textarea class="form-control shadow @error('description') is-invalid @enderror" required id="description"
            name="description" rows="5">{{ old('description', $project->description ?? '') }}</textarea>
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="row justify-content-end">
    <div class="col-10 text-start">
        <div class="mb-3">
            <input type="file" id="img" class="form-control-file" name="img">
        </div>
    </div>
    <div class="col-2 text-end">
        <img src="{{ $project->img ?? 'https://www.edengi.it/vendor/paginesi/custom_sdk/src/php_classes/placeholder.jpg' }}"
            class="img-fluid shadow" width="250" alt="{{ $project->title }}" id="output">
    </div>
</div>

<div class="col-12 @error('languages') is-invalid @enderror">
    @foreach ($languages as $language)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="lang-{{ $language->id }}" value="{{ $language->id }}"
                name="languages[]" @if (in_array($language->id, old('languages', $project_languages_ids ?? []))) checked @endif>
            <label class="form-check-label" for="lang-{{ $language->id }}">{{ $language->name }}</label>
        </div>
        @error('languages')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    @endforeach
</div>

<button class="btn btn-primary text-light shadow" type="submit">Invia</button>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(e) {

        $('#img').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#output').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
