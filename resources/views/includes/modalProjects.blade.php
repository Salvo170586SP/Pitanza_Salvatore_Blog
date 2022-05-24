<!-- Button trigger modal -->
<button type="button" class="btn btn-sm bg-danger text-light shadow" data-bs-toggle="modal"
    data-bs-target="#myModal-{{ $project->id }}">
    <i class="fa-solid fa-trash"></i>
</button>
<!-- modal -->
<div class="modal" tabindex="-1" id="myModal-{{ $project->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title">Conferma eliminazione</h5>
            </div>
            <div class="modal-body ">
                <p>Vuoi eliminare {{ $project->title }}? </p>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                        @method('DELETE')            
                @csrf
                <button type="submit" class="btn btn-outline-success">Conferma</button>
                </form>
            </div>
        </div>
    </div>
</div>
