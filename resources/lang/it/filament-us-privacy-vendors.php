<?php

return [
    'resource' => [
        'label' => 'Fornitore',
        'plural_label' => 'Fornitori',
    ],

    'fields' => [
        'name' => 'Nome',
        'role' => 'Ruolo',
        'risk' => 'Rischio',
        'services' => 'Servizi',
        'business_purpose' => 'Finalità del trattamento',
        'data_categories' => 'Dati personali comunicati',
        'contact' => 'Contatto',
        'dpa_signed_at' => 'Contratto firmato il',
        'dpa_expires_at' => 'Contratto scade il',
        'dpa_checklist' => 'Il contratto copre',
        'notes' => 'Note',
        'issues' => 'Criticità',
        'no_issues' => 'Nessuna',
        'next_review' => 'Prossima revisione',
    ],

    'sections' => [
        'agreement' => 'Contratto scritto',
    ],

    'help' => [
        'business_purpose' => 'La natura e la finalità del trattamento descritte nel contratto.',
        'agreement' => 'Ogni stato richiede un contratto vincolante con ciascun responsabile, con le clausole seguenti. I terzi non ne hanno bisogno.',
        'terminate' => 'Il fornitore dovrà quindi cancellare o restituire i dati personali.',
    ],

    'filters' => [
        'active' => 'Attivi',
    ],

    'roles' => [
        'processor' => 'Responsabile del trattamento',
        'third_party' => 'Terza parte',
    ],

    'risks' => [
        'low' => 'Basso',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'issues' => [
        'agreement_missing' => 'Nessun contratto firmato',
        'agreement_expired' => 'Contratto scaduto',
        'agreement_incomplete' => 'Contratto incompleto',
        'review_due' => 'Revisione da fare',
        'data_return_pending' => 'Restituzione dei dati in sospeso',
    ],

    'checklist' => [
        'instructions' => 'Stabilisce le istruzioni per il trattamento dei dati',
        'nature_and_purpose' => 'Descrive la natura e la finalità del trattamento',
        'data_types' => 'Elenca i tipi di dati personali trattati',
        'duration' => 'Indica la durata del trattamento',
        'rights_and_obligations' => 'Indica i diritti e gli obblighi di entrambe le parti',
        'confidentiality' => 'Vincola ogni persona che tratta i dati a un obbligo di riservatezza',
        'delete_or_return' => 'Richiede la cancellazione o la restituzione dei dati al termine dei servizi',
        'compliance_information' => 'Mette a disposizione le informazioni necessarie per dimostrare la conformità',
        'assessments' => 'Consente valutazioni o audit ragionevoli, o fornisce un rapporto di audit indipendente',
        'subcontractors' => 'Vincola i subappaltatori agli stessi obblighi, previo avviso e possibilità di opporsi',
    ],

    'actions' => [
        'review' => 'Segna come revisionato',
        'terminate' => 'Chiudi il rapporto',
        'data_returned' => 'Dati cancellati o restituiti',
    ],

    'notifications' => [
        'reviewed' => 'Fornitore revisionato',
    ],
];
