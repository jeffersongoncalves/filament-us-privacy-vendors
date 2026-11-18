<?php

return [
    'resource' => [
        'label' => 'Dienstleister',
        'plural_label' => 'Dienstleister',
    ],

    'fields' => [
        'name' => 'Name',
        'role' => 'Rolle',
        'risk' => 'Risiko',
        'services' => 'Leistungen',
        'business_purpose' => 'Zweck der Verarbeitung',
        'data_categories' => 'Offengelegte personenbezogene Daten',
        'contact' => 'Kontakt',
        'dpa_signed_at' => 'Vertrag unterzeichnet am',
        'dpa_expires_at' => 'Vertrag läuft ab am',
        'dpa_checklist' => 'Der Vertrag umfasst',
        'notes' => 'Notizen',
        'issues' => 'Mängel',
        'no_issues' => 'Keine',
        'next_review' => 'Nächste Prüfung',
    ],

    'sections' => [
        'agreement' => 'Schriftlicher Vertrag',
    ],

    'help' => [
        'business_purpose' => 'Art und Zweck der Verarbeitung, die der Vertrag beschreibt.',
        'agreement' => 'Jeder Bundesstaat verlangt mit jedem Auftragsverarbeiter einen verbindlichen Vertrag mit den folgenden Bedingungen. Dritte brauchen keinen.',
        'terminate' => 'Der Anbieter schuldet dann die Löschung oder Rückgabe der personenbezogenen Daten.',
    ],

    'filters' => [
        'active' => 'Aktiv',
    ],

    'roles' => [
        'processor' => 'Auftragsverarbeiter',
        'third_party' => 'Dritter',
    ],

    'risks' => [
        'low' => 'Niedrig',
        'medium' => 'Mittel',
        'high' => 'Hoch',
    ],

    'issues' => [
        'agreement_missing' => 'Kein unterzeichneter Vertrag',
        'agreement_expired' => 'Vertrag abgelaufen',
        'agreement_incomplete' => 'Vertrag unvollständig',
        'review_due' => 'Prüfung fällig',
        'data_return_pending' => 'Datenrückgabe ausstehend',
    ],

    'checklist' => [
        'instructions' => 'Legt die Weisungen für die Verarbeitung der Daten fest',
        'nature_and_purpose' => 'Beschreibt Art und Zweck der Verarbeitung',
        'data_types' => 'Nennt die Arten der verarbeiteten personenbezogenen Daten',
        'duration' => 'Gibt die Dauer der Verarbeitung an',
        'rights_and_obligations' => 'Legt die Rechte und Pflichten beider Parteien fest',
        'confidentiality' => 'Verpflichtet jede Person, die die Daten verarbeitet, zur Vertraulichkeit',
        'delete_or_return' => 'Verlangt Löschung oder Rückgabe der Daten am Ende der Leistungen',
        'compliance_information' => 'Stellt die zum Nachweis der Einhaltung nötigen Informationen bereit',
        'assessments' => 'Erlaubt angemessene Prüfungen oder Audits oder liefert einen unabhängigen Prüfbericht',
        'subcontractors' => 'Verpflichtet Unterauftragnehmer zu denselben Pflichten, nach Mitteilung und Widerspruchsmöglichkeit',
    ],

    'actions' => [
        'review' => 'Als geprüft markieren',
        'terminate' => 'Beziehung beenden',
        'data_returned' => 'Daten gelöscht oder zurückgegeben',
    ],

    'notifications' => [
        'reviewed' => 'Dienstleister geprüft',
    ],
];
