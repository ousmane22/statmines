<div>

    @include('livewire.entreprise.add')

    <div class="container mt-3">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header bg-dark text-white">
                Liste des Entreprises
            </div>

            <div class="card-body">
                <table class="table" id="entreprise">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>NINEA</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($entreprise as $entreprises)
                            <tr>
                                <td><strong>{{ $entreprises->nom }}</strong></td>
                                <td><strong>{{ $entreprises->ninea }}</strong></td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <a href="{{ route('entreprise.show', $entreprises->id) }}" type="button"
                                        class="btn btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    {{-- <a wire:click="$emit('show',{{ $entreprises->id }})" type="button" class="btn btn-primary">
                             <i class="fas fa-eye"></i>
                            </a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
