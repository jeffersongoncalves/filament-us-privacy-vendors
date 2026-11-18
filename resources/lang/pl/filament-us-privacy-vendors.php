<?php

return [
    'resource' => [
        'label' => 'Dostawca',
        'plural_label' => 'Dostawcy',
    ],

    'fields' => [
        'name' => 'Nazwa',
        'role' => 'Rola',
        'risk' => 'Ryzyko',
        'services' => 'Usługi',
        'business_purpose' => 'Cel przetwarzania',
        'data_categories' => 'Ujawniane dane osobowe',
        'contact' => 'Kontakt',
        'dpa_signed_at' => 'Umowa podpisana',
        'dpa_expires_at' => 'Umowa wygasa',
        'dpa_checklist' => 'Umowa obejmuje',
        'notes' => 'Notatki',
        'issues' => 'Braki',
        'no_issues' => 'Brak',
        'next_review' => 'Następny przegląd',
    ],

    'sections' => [
        'agreement' => 'Umowa pisemna',
    ],

    'help' => [
        'business_purpose' => 'Charakter i cel przetwarzania opisane w umowie.',
        'agreement' => 'Każdy stan wymaga wiążącej umowy z każdym podmiotem przetwarzającym, z poniższymi postanowieniami. Strony trzecie jej nie potrzebują.',
        'terminate' => 'Dostawca będzie wtedy zobowiązany usunąć lub zwrócić dane osobowe.',
    ],

    'filters' => [
        'active' => 'Aktywni',
    ],

    'roles' => [
        'processor' => 'Podmiot przetwarzający',
        'third_party' => 'Strona trzecia',
    ],

    'risks' => [
        'low' => 'Niskie',
        'medium' => 'Średnie',
        'high' => 'Wysokie',
    ],

    'issues' => [
        'agreement_missing' => 'Brak podpisanej umowy',
        'agreement_expired' => 'Umowa wygasła',
        'agreement_incomplete' => 'Umowa niekompletna',
        'review_due' => 'Wymagany przegląd',
        'data_return_pending' => 'Oczekuje na zwrot danych',
    ],

    'checklist' => [
        'instructions' => 'Określa instrukcje przetwarzania danych',
        'nature_and_purpose' => 'Opisuje charakter i cel przetwarzania',
        'data_types' => 'Wymienia rodzaje przetwarzanych danych osobowych',
        'duration' => 'Określa czas trwania przetwarzania',
        'rights_and_obligations' => 'Określa prawa i obowiązki obu stron',
        'confidentiality' => 'Zobowiązuje każdą osobę przetwarzającą dane do zachowania poufności',
        'delete_or_return' => 'Wymaga usunięcia lub zwrotu danych po zakończeniu usług',
        'compliance_information' => 'Udostępnia informacje potrzebne do wykazania zgodności',
        'assessments' => 'Dopuszcza rozsądne oceny lub audyty albo dostarcza niezależny raport z audytu',
        'subcontractors' => 'Wiąże podwykonawców tymi samymi obowiązkami, po zawiadomieniu i umożliwieniu sprzeciwu',
    ],

    'actions' => [
        'review' => 'Oznacz jako sprawdzony',
        'terminate' => 'Zakończ współpracę',
        'data_returned' => 'Dane usunięte lub zwrócone',
    ],

    'notifications' => [
        'reviewed' => 'Dostawca sprawdzony',
    ],
];
