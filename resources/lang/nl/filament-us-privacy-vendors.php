<?php

return [
    'resource' => [
        'label' => 'Leverancier',
        'plural_label' => 'Leveranciers',
    ],

    'fields' => [
        'name' => 'Naam',
        'role' => 'Rol',
        'risk' => 'Risico',
        'services' => 'Diensten',
        'business_purpose' => 'Doel van de verwerking',
        'data_categories' => 'Verstrekte persoonsgegevens',
        'contact' => 'Contact',
        'dpa_signed_at' => 'Contract getekend op',
        'dpa_expires_at' => 'Contract verloopt op',
        'dpa_checklist' => 'Het contract omvat',
        'notes' => 'Notities',
        'issues' => 'Openstaande punten',
        'no_issues' => 'Geen',
        'next_review' => 'Volgende beoordeling',
    ],

    'sections' => [
        'agreement' => 'Schriftelijke overeenkomst',
    ],

    'help' => [
        'business_purpose' => 'De aard en het doel van de verwerking die het contract beschrijft.',
        'agreement' => 'Elke staat eist een bindend contract met elke verwerker, met de onderstaande voorwaarden. Derden hebben er geen nodig.',
        'terminate' => 'De leverancier moet dan de persoonsgegevens verwijderen of teruggeven.',
    ],

    'filters' => [
        'active' => 'Actief',
    ],

    'roles' => [
        'processor' => 'Verwerker',
        'third_party' => 'Derde',
    ],

    'risks' => [
        'low' => 'Laag',
        'medium' => 'Gemiddeld',
        'high' => 'Hoog',
    ],

    'issues' => [
        'agreement_missing' => 'Geen getekend contract',
        'agreement_expired' => 'Contract verlopen',
        'agreement_incomplete' => 'Contract onvolledig',
        'review_due' => 'Beoordeling nodig',
        'data_return_pending' => 'Teruggave van gegevens openstaand',
    ],

    'checklist' => [
        'instructions' => 'Legt de instructies voor de verwerking vast',
        'nature_and_purpose' => 'Beschrijft de aard en het doel van de verwerking',
        'data_types' => 'Noemt de soorten verwerkte persoonsgegevens',
        'duration' => 'Vermeldt de duur van de verwerking',
        'rights_and_obligations' => 'Legt de rechten en plichten van beide partijen vast',
        'confidentiality' => 'Verplicht iedereen die de gegevens verwerkt tot geheimhouding',
        'delete_or_return' => 'Vereist verwijdering of teruggave van de gegevens aan het einde van de dienstverlening',
        'compliance_information' => 'Stelt de informatie beschikbaar die nodig is om naleving aan te tonen',
        'assessments' => 'Staat redelijke beoordelingen of audits toe, of levert een onafhankelijk auditrapport',
        'subcontractors' => 'Bindt subverwerkers aan dezelfde verplichtingen, na kennisgeving en de mogelijkheid van bezwaar',
    ],

    'actions' => [
        'review' => 'Markeren als beoordeeld',
        'terminate' => 'Relatie beëindigen',
        'data_returned' => 'Gegevens verwijderd of teruggegeven',
    ],

    'notifications' => [
        'reviewed' => 'Leverancier beoordeeld',
    ],
];
