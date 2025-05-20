<x-layout>
    <x-navbar></x-navbar>

    <div class="container my-5 pt-4" style="
        font-family: 'Uncial Antiqua', serif;
        color: #deb887;">
        
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="card border-0 rounded-4 overflow-hidden" style="
                    background-color: rgba(30, 20, 5, 0.9);
                    box-shadow: 0 0 15px #7a5c2d;">
                    
                    <div class="card-header p-4" style="
                        background: linear-gradient(90deg, #c26a00, #a45300);
                        border-bottom: 2px solid #7a5c2d;">
                        <div class="d-flex justify-content-center align-items-center">
                            <h3 class="mb-0 fw-bold" style="
                                font-family: 'Cloister Black', serif;
                                color: #f4d79c;
                                text-shadow: 1px 1px 2px #4b3a16;">
                                IL TUO PROFILO
                            </h3>
                        </div>
                    </div>
                    
                    <div class="card-body p-4" style="background-color: #1e1405;">
                        <div class="row">
                            <div class="col-md-4 text-center mb-4 mb-md-0">
                                <div class="profile-img-container mb-3">
                                    <div class="profile-img" style="
                                        width: 120px; height: 120px;
                                        border-radius: 50%;
                                        background-color: #a97c50;
                                        color: #3c2f1a;
                                        font-size: 4rem;
                                        font-weight: 900;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        box-shadow: 0 0 15px #7a5c2d;">
                                        <span>{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                                    </div>
                                </div>
                                <h4 class="fw-bold mb-1" style="
                                    font-family: 'Uncial Antiqua', serif;
                                    color: #deb887;">{{ Auth::user()->name }}</h4>
                                <p style="
                                    font-family: 'Uncial Antiqua', serif;
                                    color: #deb887;">{{ Auth::user()->email }}</p>
                                <p class="badge" style="
                                    background-color: #4b7f1a;
                                    color: #e2e8b5;
                                    font-family: 'Uncial Antiqua', serif;
                                    font-weight: 600;">Utente verificato</p>
                            </div>
                            
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="stat-card p-3 border rounded shadow-sm" style="
                                            border-color: #a97c50;
                                            background-color: rgba(169,124,80,0.1);
                                            transition: all 0.3s ease;">
                                            <div class="d-flex align-items-center">
                                                <div class="icon-bg rounded-circle me-3" style="
                                                    background-color: rgba(194,106,0,0.3);
                                                    width: 50px; height: 50px;
                                                    display: flex; justify-content: center; align-items: center;
                                                    font-size: 1.5rem;
                                                    color: #c26a00;">
                                                    <i class="bi bi-file-earmark-text"></i>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-bolder" style="
                                                        font-family: 'Uncial Antiqua', serif;
                                                        color: #deb887;">Libri pubblicati:</p>
                                                    <h5 class="fw-bold mb-0" style="
                                                        font-family: 'Uncial Antiqua', serif;
                                                        color: #deb887;">{{ Auth::user()->books->count() }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 mb-4">
                                        <div class="stat-card p-3 border rounded shadow-sm" style="
                                            border-color: #a97c50;
                                            background-color: rgba(75,127,26,0.2);
                                            transition: all 0.3s ease;">
                                            <div class="d-flex align-items-center">
                                                <div class="icon-bg rounded-circle me-3" style="
                                                    background-color: rgba(75,127,26,0.3);
                                                    width: 50px; height: 50px;
                                                    display: flex; justify-content: center; align-items: center;
                                                    font-size: 1.5rem;
                                                    color: #4b7f1a;">
                                                    <i class="bi bi-calendar-check"></i>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-bolder" style="
                                                        font-family: 'Uncial Antiqua', serif;
                                                        color: #deb887;">Account creato:</p>
                                                    <h5 class="fw-bold mb-0" style="
                                                        font-family: 'Uncial Antiqua', serif;
                                                        color: #deb887;">{{ Auth::user()->created_at->locale('it')->diffForHumans() }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="border-top pt-4 mt-2" style="border-color: #a97c50 !important;">
                                    <h5 class="fw-bold mb-3" style="
                                        font-family: 'Uncial Antiqua', serif;
                                        color: #a97c50;">Informazioni personali</h5>
                                    <div class="mb-3" style="font-family: 'Uncial Antiqua', serif;">
                                        <p class="mb-1 fw-bold mb-3" style="
                                        font-family: 'Uncial Antiqua', serif;
                                        color: #a97c50;"><strong>Nome:</strong> {{ Auth::user()->name }}</p>
                                        <p class="mb-1 fw-bold mb-3" style="
                                        font-family: 'Uncial Antiqua', serif;
                                        color: #a97c50;"><strong>Email:</strong> {{ Auth::user()->email }}</p>
                                        <p class="mb-1 fw-bold mb-3" style="
                                        font-family: 'Uncial Antiqua', serif;
                                        color: #a97c50;"><strong>Data di registrazione:</strong> {{ Auth::user()->created_at->format('d/m/Y') }}</p>
                                    </div>
                                    
                                    <h5 class="fw-bold mb-3" style="
                                        font-family: 'Uncial Antiqua', serif;
                                        color: #a97c50;">Ultime attività</h5>
                                    @if(Auth::user()->books->count() > 0)
                                        <div class="list-group" style="font-family: 'Uncial Antiqua', serif;">
                                            @foreach(Auth::user()->books->sortByDesc('created_at')->take(3) as $book)
                                                <a href="#" class="list-group-item list-group-item-action" style="
                                                    background-color: rgba(169,124,80,0.15);
                                                    border: 1px solid #a97c50;
                                                    color: #deb887;
                                                    margin-bottom: 0.5rem;
                                                    border-radius: 0.3rem;">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h6 class="mb-1" style="font-family: 'Cloister Black', serif; color: #a97c50;">{{ $book->title }}</h6>
                                                        <small>{{ $book->created_at->locale('it')->diffForHumans() }}</small>
                                                    </div>
                                                    <p class="mb-1" style="font-style: italic;">{{ Str::limit($book->content, 50) }}</p>
                                                </a>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="alert alert-info" style="
                                            background-color: #a97c50;
                                            color: #1e1405;
                                            font-family: 'Uncial Antiqua', serif;">
                                            <i class="bi bi-info-circle me-2"></i>Non hai ancora pubblicato nessun libro.
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-footer p-4" style="
                        background: linear-gradient(90deg, #a45300, #c26a00);
                        border-top: 2px solid #7a5c2d;">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('homepage') }}" class="btn btn-custom3" style="
                                background-color: #7a5c2d;
                                color: #deb887;
                                border: 2px solid #a97c50;
                                padding: 0.5rem 1.5rem;
                                font-family: 'Uncial Antiqua', serif;
                                text-transform: uppercase;
                                box-shadow: 0 0 8px #a97c50;
                                transition: background-color 0.3s ease;">
                                <i class="bi bi-arrow-left me-1"></i>TORNA AL CASTELLO
                            </a>
                            <a href="#" class="btn btn-custom2" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();" style="
                                background-color: #a45300;
                                color: #f4d79c;
                                border: 2px solid #7a5c2d;
                                padding: 0.5rem 1.5rem;
                                font-family: 'Uncial Antiqua', serif;
                                text-transform: uppercase;
                                box-shadow: 0 0 8px #7a5c2d;
                                transition: background-color 0.3s ease;">
                                <i class="bi bi-box-arrow-right me-1"></i>LOGOUT
                            </a>
                            <form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <style>
        @font-face {
            font-family: 'Cloister Black';
            src: url('/fonts/CloisterBlack.ttf') format('truetype');
        }
        @import url('https://fonts.googleapis.com/css2?family=Uncial+Antiqua&display=swap');
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(121, 94, 44, 0.7) !important;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteConfirmation = document.getElementById('deleteConfirmation');
            const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');

            if(deleteConfirmation && confirmDeleteBtn) {
                deleteConfirmation.addEventListener('input', function() {
                    if (this.value.toLowerCase() === 'elimina') {
                        confirmDeleteBtn.disabled = false;
                    } else {
                        confirmDeleteBtn.disabled = true;
                    }
                });
            }
        });
    </script>
</x-layout>