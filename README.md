🌍 Travel Paradise – Application Mobile de Gestion Touristique
Travel Paradise est une agence spécialisée dans l’organisation de voyages touristiques à l’échelle internationale. Afin d’améliorer la gestion des visites et l’activité de ses guides touristiques, le projet vise à développer une application mobile centralisée, intuitive et collaborative, destinée à :

Suivre les visites en temps réel

Gérer les présences des touristes

Offrir une interface personnalisée selon les rôles : Administrateur, Guide ou Visiteur

🎯 Objectifs du projet
Digitaliser la gestion manuelle actuelle des visites touristiques.

Fournir une interface mobile aux guides pour gérer efficacement leurs plannings.

Centraliser les données des utilisateurs, guides et visites.

Offrir des statistiques détaillées sur l’activité touristique (fréquentation, notation, etc.).

🧭 Exemples de lieux de visites intégrés
Type	Nom du lieu	Pays	Activité possible
🏖️ Plage	Plage de Blankenberge	Belgique	Baignade, jeux de plage, détente
🏰 Ville	Centre historique de Bruges	Belgique	Tour guidé, balade en bateau, musées
⛰️ Montagne	Montagnes de l'Atlas	Maroc	Randonnée, découverte culturelle
🖼️ Musée	Musée du Louvre	France	Visite culturelle, expositions temporaires
🌉 Monument	Tour Eiffel	France	Tour panoramique, photos, guide historique
🏞️ Parc	Parc national de Yosemite	USA	Excursion, photographie, camping
🕌 Site historique	Petra	Jordanie	Exploration archéologique, visite guidée

👤 Fonctionnalités par rôle
✅ Administrateur
🔍 Visualisation des guides touristiques (nom, prénom, photo, statut, pays d’affectation)

🗺️ Gestion des visites : lieux, pays, photo, horaires, guide assigné, liste des visiteurs

👥 Suivi des utilisateurs : prénom, nom, email, rôle (admin, guide, visiteur)

📈 Statistiques :

Nombre de visites par mois

Taux de présence des touristes

Notations des touristes

🧭 Guide
🔐 Authentification sécurisée

📆 Accès au calendrier des visites : passées, en cours, futures

📋 Liste d’appel en temps réel pour vérifier la présence des touristes

✅ Clôture d’une visite avec commentaire et note

🧳 Visiteur (à intégrer prochainement)
🔐 Connexion / Inscription

📅 Planification de visites en avance

🔍 Recherche de lieux par type (plage, musée, monument…)

✅ Réservation de créneaux avec guides

⭐ Donner une note ou un avis après la visite

🏗️ Architecture du projet (Dockerisé)
bash
Copier
Modifier
📦 travel-paradise/
│
├── backend/               → API Symfony (PHP)
│   └── Dockerfile
│
├── frontend/              → App mobile React Native (Expo)
│   └── Dockerfile
│
├── docker-compose.yml    → Orchestration des services
└── README.md              → Présentation du projet