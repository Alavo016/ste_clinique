@extends('include.layout1')

@section('title', 'Admin/Acceuil')


@section('content')



    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item  active"><a href="javascript:void(0)">Doctor List</a></li>
                </ol>
            </div>

            <div class="form-head d-flex mb-3 mb-md-4 align-items-start">
                <div class="me-auto d-lg-block">
                    <a href="javascript:void(0);" class="btn btn-primary btn-rounded" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">+ Add New</a>
                </div>
                <div class="input-group search-area ms-auto d-inline-flex me-2">
                    <input type="text" class="form-control" placeholder="Search here">
                    <div class="input-group-append">
                        <button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                    </div>
                </div>
            </div>
            <div class="row">

                <x-session />

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Datatable Responsive</h4>
                        </div>
                        <div class="card-body">
                            <table id="responsiveTable" class="display responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Email</th>
                                        <th>Pseudo</th>
                                        <th>Contact</th>
                                        <th>Specialité</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($listdocteurs as $listdocteurs)
                                        <tr>

                                            <td>#P-{{ $listdocteurs->id }}</td>

                                            <td>{{ $listdocteurs->name }}</td>
                                            <td>{{ $listdocteurs->prenom }}</td>
                                            <td>{{ $listdocteurs->email }}</td>
                                            <td>{{ $listdocteurs->pseudo }}</td>
                                            <td><span class="font-w500">{{ $listdocteurs->telephone }}</span></td>
                                            <td>{{ $listdocteurs->specialite['nom'] }}</td>
                                            <td>
                                                <div class="dropdown ms-auto text-right">
                                                    <!-- Bouton Modifier -->
                                                    <a class="btn-link" href="#"
                                                        onclick="modifierDocteur({{ $listdocteurs->id }})">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>

                                                    <!-- Bouton Supprimer -->
                                                    <a class="btn-link"
                                                        href="{{ route( 'admin.supprimer.docteur' , ['id' => $listdocteurs->id]) }}">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Doctor</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- Formulaire du Modal -->
                        <form action="{{ route('admin.store_docteur') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nom</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                placeholder="Nom" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput2" class="form-label">Prénom</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput2"
                                                placeholder="Prénom" name="prenom">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <label class="form-label">Pseudo</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput3"
                                            placeholder="pseudo" name="pseudo">
                                    </div>
                                    <div class="col-xl-12">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput4"
                                            placeholder="email" name="email">
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="role" class="form-label">Role</label>
                                            <select name="role" id="role" class="form-control">
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}">{{ $role->libelle }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="specialite" class="form-label">Spécialité</label>
                                            <select name="specialite" id="specialite" class="form-control">
                                                <option value="">Sélectionner une spécialité</option>
                                                @foreach ($specialites as $specialite)
                                                    <option value="{{ $specialite->id }}">{{ $specialite->nom }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <label class="form-label">Télephone</label>
                                        <div class="input-group">
                                            <input type="tel" id="" class="form-control" name="telephone">

                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <label class="form-label">Mot de passe</label>
                                        <div class="input-group">
                                            <input type="password" name="password" id="dz-password" class="form-control"
                                                value="password">
                                            <span class="input-group-text show-pass eye">
                                                <i class="fa fa-eye-slash"></i>
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger light"
                                    data-bs-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>



        </div>
    </div>

    <script src="">
        const eyeIcon = document.querySelector('.show-pass.eye');

        // Sélectionnez l'élément d'entrée de mot de passe
        const passwordInput = document.getElementById('dz-password');

        // Ajoutez un écouteur d'événements au clic sur l'icône d'œil
        eyeIcon.addEventListener('click', function() {
            // Basculez entre le type de mot de passe et le texte visible
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = '<i class="fa fa-eye"></i>';
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = '<i class="fa fa-eye-slash"></i>';
            }
        });
    </script>
@endsection
