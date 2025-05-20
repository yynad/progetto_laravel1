<x-layout>
    <x-navbar></x-navbar>
    <div class="container my-5 pt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="card-header text-white p-4 bg-aranciosfumato">
                        <div class="d-flex justify-content-center align-items-center">
                            <h3 class="mb-0 fw-bold guidacustom">IL TUO PROFILO</h3>
                        </div>
                    </div>
                    
                    <div class="card-body p-4 bg-nero">
                        <div class="row">
                            <div class="col-md-4 text-center mb-4 mb-md-0">
                                <div class="profile-img-container mb-3">
                                    <div class="profile-img">
                                        <span>{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                                    </div>
                                </div>
                                <h4 class="fw-bold mb-1 guidacustom2">{{ Auth::user()->name }}</h4>
                                <p class=" mb-3 guidacustom2">{{ Auth::user()->email }}</p>
                                <p class="badge bg-success mb-0 guidacustom2">Utente verificato</p>
                            </div>
                            
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="stat-card p-3 border rounded shadow-sm">
                                            <div class="d-flex align-items-center">
                                                <div class="icon-bg bg-primary-light rounded-circle me-3">
                                                    <i class="bi bi-file-earmark-text text-primary"></i>
                                                </div>
                                                <div>
                                                    <p class=" mb-0 guidacustom2 fw-bolder ">Libri pubblicati:</p>
                                                    <h5 class="fw-bold mb-0 guidacustom2">{{ Auth::user()->books->count() }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 mb-4">
                                        <div class="stat-card p-3 border rounded shadow-sm">
                                            <div class="d-flex align-items-center">
                                                <div class="icon-bg bg-success-light rounded-circle me-3">
                                                    <i class="bi bi-calendar-check text-success"></i>
                                                </div>
                                                <div>
                                                    <p class=" mb-0 guidacustom2 fw-bolder">Account creato:</p>
                                                    <h5 class="fw-bold mb-0 guidacustom2">{{ Auth::user()->created_at->locale('it')->diffForHumans() }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="border-top pt-4 mt-2">
                                    <h5 class="fw-bold mb-3 guidacustom2">Informazioni personali</h5>
                                    <div class="mb-3">
                                        <p class="mb-1 guidacustom2"><strong>Nome:</strong> {{ Auth::user()->name }}</p>
                                        <p class="mb-1 guidacustom2"><strong>Email:</strong> {{ Auth::user()->email }}</p>
                                        <p class="mb-1 guidacustom2"><strong>Data di registrazione:</strong> {{ Auth::user()->created_at->format('d/m/Y') }}</p>
                                    </div>
                                    
                                    <h5 class="fw-bold mb-3 guidacustom2">Ultime attività</h5>
                                    @if(Auth::user()->books->count() > 0)
                                        <div class="list-group">
                                            @foreach(Auth::user()->books->sortByDesc('created_at')->take(3) as $book)
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h6 class="mb-1 guidacustom">{{ $book->title }}</h6>
                                                        <small class="guidacustom">{{ $book->created_at->locale('it')->diffForHumans() }}</small>
                                                    </div>
                                                    <p class="mb-1">{{ Str::limit($book->content, 50) }}</p>
                                                </a>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="alert alert-info">
                                            <i class="bi bi-info-circle me-2"></i>Non hai ancora pubblicato nessun libro.
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-footer bg-aranciosfumato2 p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('homepage') }}" class="btn btn-custom3">
                                <i class="bi bi-arrow-left me-1"></i>TORNA ALLA HOME
                            </a>
                            <a href="#" class="btn btn-custom2" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">
                                <i class="bi bi-box-arrow-right me-1"></i>LOGOUT
                            </a>
                            <form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>


                </div>

    <div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteAccountModalLabel">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>Elimina account
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-3">Sei sicuro di voler eliminare definitivamente il tuo account? Questa azione non può essere annullata.</p>
                    
                    <div class="alert alert-warning mb-3">
                        <div class="d-flex">
                            <i class="bi bi-info-circle-fill me-2 fs-5"></i>
                            <div>
                                <strong>Verranno eliminati:</strong>
                                <ul class="mb-0 mt-1">
                                    <li>Tutti i tuoi libri</li>
                                    <li>Le tue informazioni personali</li>
                                    <li>La tua cronologia di attività</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="deleteConfirmation" class="form-label">Per confermare, digita "<strong>elimina</strong>" nel campo sottostante:</label>
                        <input type="text" class="form-control" id="deleteConfirmation" placeholder="elimina">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-custom" data-bs-dismiss="modal">
                        <i class="bi bi-x me-1"></i>Annulla
                    </button>
                    <form action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" id="confirmDeleteBtn" disabled>
                            <i class="bi bi-trash me-1"></i>Elimina definitivamente
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        .profile-img-container {
            display: flex;
            justify-content: center;
        }
        
        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #4361ee;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.5rem;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(67, 97, 238, 0.3);
        }
        
        .icon-bg {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }
        
        .bg-primary-light {
            background-color: rgba(13, 110, 253, 0.15);
        }
        
        .bg-success-light {
            background-color: rgba(25, 135, 84, 0.15);
        }
        
        .stat-card {
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1) !important;
        }
        
        .rounded-4 {
            border-radius: 1rem;
        }
        
        /* Stili per la zona pericolosa */
        .border-danger {
            border-left: 4px solid #dc3545 !important;
        }
    </style>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteConfirmation = document.getElementById('deleteConfirmation');
            const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
            
            deleteConfirmation.addEventListener('input', function() {
                if (this.value.toLowerCase() === 'elimina') {
                    confirmDeleteBtn.disabled = false;
                } else {
                    confirmDeleteBtn.disabled = true;
                }
            });
        });
    </script>
</x-layout>