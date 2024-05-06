<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a class="has-arrow ai-icon" href="#" aria-expanded="false">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">Statistiques</a></li>
                    <li><a href="#">Graphiques</a></li>
                    <li><a href="#">Rapports</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="#" aria-expanded="false">
                    <i class="fas fa-user-md"></i>
                    <span class="nav-text">Gestion du Personnel</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">Médecins</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.listdocteur') }}">Liste des Médecins</a></li>
                            <li><a href="{{ route('admin.listdocteur') }}#exampleModal">Ajouter Médecin</a></li>
                            <li><a href="#">Modifier Médecin</a></li>
                            <li><a href="#">Supprimer Médecin</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">Infirmiers</a>
                        <ul aria-expanded="false">
                            <li><a href="#">Liste des Infirmiers</a></li>
                            <li><a href="#">Ajouter Infirmier</a></li>
                            <li><a href="#">Modifier Infirmier</a></li>
                            <li><a href="#">Supprimer Infirmier</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">Types de Personnel</a>
                        <ul aria-expanded="false">
                            <li><a href="#">Liste des Types de Personnel</a></li>
                            <li><a href="#">Ajouter Type de Personnel</a></li>
                            <li><a href="#">Modifier Type de Personnel</a></li>
                            <li><a href="#">Supprimer Type de Personnel</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">Spécialités</a>
                        <ul aria-expanded="false">
                            <li><a href="#">Liste des Spécialités</a></li>
                            <li><a href="#">Ajouter Spécialité</a></li>
                            <li><a href="#">Modifier Spécialité</a></li>
                            <li><a href="#">Supprimer Spécialité</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a class="ai-icon" href="#">
                    <i class="fas fa-procedures"></i>
                    <span class="nav-text">Gestion des Patients</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">Liste des Patients</a></li>
                    <li><a href="#">Ajouter Patient</a></li>
                    <li><a href="#">Modifier Patient</a></li>
                    <li><a href="#">Supprimer Patient</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="#" aria-expanded="false">
                    <i class="fas fa-users"></i>
                    <span class="nav-text">Gestion des Utilisateurs</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">Liste des Utilisateurs</a></li>
                    <li><a href="#">Bloquer Utilisateur</a></li>
                    <li><a href="#">Modifier Utilisateur</a></li>
                    <li><a href="#">Supprimer Utilisateur</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="#" aria-expanded="false">
                    <i class="fas fa-cogs"></i>
                    <span class="nav-text">Paramètres</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Préférences</a></li>
                    <li><a href="#">Déconnexion</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
