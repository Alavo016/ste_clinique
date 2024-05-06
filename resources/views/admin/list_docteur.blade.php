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
                {{-- <div class="col-xl-12">
                    <div class="table-responsive">
                        <table id="example5"
                            class="table shadow-hover doctor-list table-bordered mb-4 dataTablesCard fs-14">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="checkbox align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="checkAll"
                                                    required="">
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </div>
                                    </th>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Email</th>
                                    <th>Pseudo</th>
                                    <th>Contact</th>
                                    <th>Specialité</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listdocteurs as $listdocteurs)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="checkbox text-end align-self-center">
                                                    <div class="form-check custom-checkbox ">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox{{ $listdocteurs->id }}" required="">
                                                        <label class="form-check-label"
                                                            for="customCheckBox{{ $listdocteurs->id }}"></label>
                                                    </div>
                                                </div>
                                                <img alt="" src="{{ asset('images/doctors/9.jpg') }}" height="43"
                                                    width="43" class="rounded-circle ms-4">
                                            </div>
                                        </td>
                                        <td>#P-{{ $listdocteurs->id }}</td>

                                        <td>{{ $listdocteurs->name }}</td>
                                        <td>{{ $listdocteurs->prenom }}</td>
                                        <td>{{ $listdocteurs->email }}</td>
                                        <td>{{ $listdocteurs->pseudo }}</td>
                                        <td><span class="font-w500">{{ $listdocteurs->telephone }}</span></td>
                                        <td>{{ $listdocteurs->specialist }}</td>


                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="text-danger font-w600">{{ $listdocteurs->status }}</span>
                                                <div class="dropdown ms-auto c-pointer text-end">
                                                    <div class="btn-link" data-bs-toggle="dropdown">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z"
                                                                stroke="#3E4954" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z"
                                                                stroke="#3E4954" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z"
                                                                stroke="#3E4954" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">View Detail</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> --}}
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
                                        <td>{{ $listdocteurs->specialist }}</td>
                                        <td>
                                            <div class="dropdown ms-auto text-right">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item bg-success text-light" href="#">Modifier </a>
															<a class="dropdown-item bg-danger text-light" href="javascript:void(0);">Supprimer</a>

														</div>
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
                                            <input type="tel" id="" class="form-control" value="Télephone"
                                                name="telephone">

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
