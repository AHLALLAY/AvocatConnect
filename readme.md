# Projet Site Web de Réservations pour Cabinet d'Avocats

## Description

Ce projet consiste à développer un site web pour un cabinet d'avocats spécialisé. Le site permet aux clients de consulter les profils des avocats, de réserver des consultations en ligne, et de gérer leurs réservations. Les avocats, quant à eux, peuvent gérer leurs créneaux de disponibilité, accepter ou refuser les demandes de consultation, et mettre à jour leurs informations professionnelles.

Le site dispose de deux types d'utilisateurs : les **clients** et les **avocats**, chacun ayant des fonctionnalités spécifiques.

---

## Fonctionnalités

### Pour les Clients

- **Consultation des profils des avocats** : Accès aux informations détaillées sur chaque avocat (spécialités, années d'expérience, etc.).
- **Réservation de consultations** : Choix du créneau horaire disponible pour réserver une consultation avec un avocat.
- **Gestion des réservations** : Voir l'historique des réservations, modifier ou annuler des rendez-vous.
- **Modification des informations personnelles** : Mise à jour de leurs coordonnées personnelles.

### Pour les Avocats

- **Gestion des réservations** : Accepter ou refuser les demandes de consultations en fonction de la disponibilité.
- **Gestion du profil** : Modifier les informations personnelles, la biographie, les spécialités, la photo de profil, et les coordonnées.
- **Gestion des disponibilités** : Mettre à jour les créneaux horaires disponibles pour les consultations.
- **Statistiques détaillées** : Suivi des demandes en attente, des demandes approuvées et des réservations à venir.

### Fonctionnalités Générales

- **Inscription et Connexion** : Les utilisateurs peuvent s'inscrire et se connecter. Redirection vers un tableau de bord en fonction du rôle (client ou avocat).
- **Validation des Formulaires avec Regex** : Utilisation d'expressions régulières pour valider les informations utilisateur (email, téléphone, mot de passe, etc.)._`(prochian mise à jour)`_
- **Modals Dynamiques** : Affichage de modals pour des informations comme les détails de la réservation, confirmations, ou alertes sans recharger la page._`(prochian mise à jour)`_
- **SweetAlerts** : Alertes visuelles élégantes pour des actions importantes comme la confirmation d'une réservation ou l'annulation d'une consultation.
- **Calendriers** : Affichage des disponibilités des avocats en temps réel._`(prochian mise à jour)`_

---

## Sécurité

- **Hashage des Mots de Passe** : Utilisation `bcrypt` comme techniques de hashage sécurisées pour protéger les mots de passe des utilisateurs.
- **Protection contre les Failles XSS** : Validation et nettoyage des entrées utilisateurs pour éviter les attaques par injection de code (Cross-Site Scripting)._`(prochian mise à jour)`_
- **Prévention des Injections SQL** : Utilisation de requêtes préparées pour sécuriser les interactions avec la base de données et prévenir les injections SQL.
- **Protection contre les Attaques CSRF (Cross-Site Request Forgery)** : Mise en place de tokens CSRF pour sécuriser les actions sensibles comme les réservations, inscriptions et modifications de profil.

---

## Fonctionnalités Bonus

- **Avis des Clients** : Les clients peuvent laisser un avis sur l'avocat après la consultation. _`(prochaine mise à jour)`_
- **Consultation des Avis** : Les avocats peuvent consulter les avis laissés par les clients. _`(prochaine mise à jour)`_
- **Génération de Documents PDF** : Les avocats peuvent générer des rapports statistiques sur les réservations sous forme de fichiers PDF. _`(prochaine mise à jour)`_
- **Envoi d'E-mails** : Notifications par e-mail pour réinitialisation de mot de passe, confirmation de réservation, annulation, etc. _`(prochaine mise à jour)`_
- **Page 404 Personnalisée** : Création d'une page 404 élégante avec des liens vers d'autres sections du site.
 _`(prochaine mise à jour)`_
---

## Design

- **Responsive Design** : Le site est conçu pour être compatible avec tous les types d'écrans (mobile, tablette, desktop).
- **Esthétique** : Design moderne et élégant avec des couleurs raffinées pour refléter le luxe et le professionnalisme du cabinet.
- **UX/UI** : Interface utilisateur intuitive, fluide et agréable pour une navigation optimale.

---

## Installation

### Prérequis

- [Node.js](https://nodejs.org/) (version recommandée : 14.x ou plus)
- [npm](https://www.npmjs.com/) (ou [Yarn](https://yarnpkg.com/))
- Serveur web (Apache, Nginx, etc.) ou environnement local avec [XAMPP](https://www.apachefriends.org/) ou [WampServer](https://www.wampserver.com/) (si vous utilisez une base de données locale).
- Système de gestion de base de données (par exemple MySQL, PostgreSQL).

### Étapes d'Installation

1. **Cloner le projet** :
    ```bash
    git clone https://github.com/AHLALLAY/AvocatConnect.git
    cd AvocatConnect
    ```

2. **Installer les dépendances** :
    Si vous utilisez npm :
    ```bash
    npm install
    ```

3. **Configurer la base de données** :
    - Créez une base de données avec le schéma nécessaire pour le projet.
    - Configurez les paramètres de connexion à la base de données dans le fichier `.env` (ou tout autre fichier de configuration spécifique).

4. **Lancer le serveur local** :
    ```bash
    npm start
    ```

5. Accédez à l'application via votre navigateur à l'adresse `http://localhost:3000`.

---

## Tests

Les tests unitaires et d'intégration peuvent être ajoutés pour vérifier le bon fonctionnement du projet. Utilisez des outils comme [Jest](https://jestjs.io/) pour effectuer des tests automatisés.

---

## Contribuer

Les contributions sont les bienvenues ! Si vous avez une idée, un bug à signaler ou une amélioration à proposer, ouvrez une issue ou soumettez une pull request. Voici quelques étapes pour contribuer :

1. Fork le projet
2. Créez une branche pour votre fonctionnalité : `git checkout -b your_branch_name`
3. Effectuez vos changements.
4. Committez vos changements : `git commit -m 'Ajout de la fonctionnalité X'`
5. Poussez la branche : `git push origin your_branch_name`
6. Créez une pull request.

---

## Licence

Ce projet est sous la licence [MIT](https://opensource.org/licenses/MIT).

---

## Auteurs

- **Nom du responsable du projet** - *Initial contribution* - [Abderrahmane AHALLAY](https://github.com/AHLALLAY)

---

## Remerciements

Merci à tous ceux qui ont contribué à ce projet et à la communauté open-source pour leur soutien.
