<?php

return [
    'resource' => [
        'label' => 'Prestataire',
        'plural_label' => 'Prestataires',
    ],

    'fields' => [
        'name' => 'Nom',
        'role' => 'Rôle',
        'risk' => 'Risque',
        'services' => 'Services',
        'business_purpose' => 'Finalité du traitement',
        'data_categories' => 'Données personnelles communiquées',
        'contact' => 'Contact',
        'dpa_signed_at' => 'Contrat signé le',
        'dpa_expires_at' => 'Contrat expire le',
        'dpa_checklist' => 'Le contrat couvre',
        'notes' => 'Notes',
        'issues' => 'Points en suspens',
        'no_issues' => 'Aucun',
        'next_review' => 'Prochaine revue',
    ],

    'sections' => [
        'agreement' => 'Contrat écrit',
    ],

    'help' => [
        'business_purpose' => 'La nature et la finalité du traitement décrites dans le contrat.',
        'agreement' => 'Chaque État exige un contrat contraignant avec chaque sous-traitant, avec les clauses ci-dessous. Les tiers n\'en ont pas besoin.',
        'terminate' => 'Le fournisseur devra alors supprimer ou restituer les données personnelles.',
    ],

    'filters' => [
        'active' => 'Actifs',
    ],

    'roles' => [
        'processor' => 'Sous-traitant',
        'third_party' => 'Tiers',
    ],

    'risks' => [
        'low' => 'Faible',
        'medium' => 'Moyen',
        'high' => 'Élevé',
    ],

    'issues' => [
        'agreement_missing' => 'Aucun contrat signé',
        'agreement_expired' => 'Contrat expiré',
        'agreement_incomplete' => 'Contrat incomplet',
        'review_due' => 'Revue à faire',
        'data_return_pending' => 'Restitution des données en attente',
    ],

    'checklist' => [
        'instructions' => 'Fixe les instructions de traitement des données',
        'nature_and_purpose' => 'Décrit la nature et la finalité du traitement',
        'data_types' => 'Énumère les types de données personnelles traitées',
        'duration' => 'Indique la durée du traitement',
        'rights_and_obligations' => 'Précise les droits et obligations des deux parties',
        'confidentiality' => 'Soumet toute personne traitant les données à une obligation de confidentialité',
        'delete_or_return' => 'Exige la suppression ou la restitution des données à la fin des services',
        'compliance_information' => 'Met à disposition les informations nécessaires pour démontrer la conformité',
        'assessments' => 'Autorise des évaluations ou audits raisonnables, ou fournit un rapport d\'audit indépendant',
        'subcontractors' => 'Soumet les sous-traitants ultérieurs aux mêmes obligations, après information et possibilité de s\'y opposer',
    ],

    'actions' => [
        'review' => 'Marquer comme revu',
        'terminate' => 'Mettre fin à la relation',
        'data_returned' => 'Données supprimées ou restituées',
    ],

    'notifications' => [
        'reviewed' => 'Prestataire revu',
    ],
];
