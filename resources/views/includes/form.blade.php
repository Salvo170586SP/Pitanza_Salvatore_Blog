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
                <input type="text" class="form-control shadow @error('title') is-invalid @enderror" required name="title" id="title" placeholder="Testo del post"
                    value="{{ old('title', $post->title ??  '') }}">
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

        </div>
        <div class="col-12 mb-3">
            <label for="description" class="form-label">Descrizione del post</label>
            <textarea class="form-control shadow @error('description') is-invalid @enderror" required id="description" name="description"
                rows="5">{{ old('description', $post->description ?? '') }}</textarea>
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
                <input type="file" id="image" class="form-control-file" name="image">
            </div>
        </div>
        <div class="col-2 text-end">
            <img src="{{ $post->image  ?? 'https://www.edengi.it/vendor/paginesi/custom_sdk/src/php_classes/placeholder.jpg' }}"
                class="img-fluid shadow" width="250" alt="{{ $post->title }}" id="output">
        </div>
    </div>

    <button class="btn btn-primary text-light shadow" type="submit">Invia</button>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(e) {

            $('#image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#output').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
