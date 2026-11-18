<?php

return [
    'resource' => [
        'label' => 'Proveedor',
        'plural_label' => 'Proveedores',
    ],

    'fields' => [
        'name' => 'Nombre',
        'role' => 'Rol',
        'risk' => 'Riesgo',
        'services' => 'Servicios',
        'business_purpose' => 'Finalidad del tratamiento',
        'data_categories' => 'Datos personales comunicados',
        'contact' => 'Contacto',
        'dpa_signed_at' => 'Contrato firmado el',
        'dpa_expires_at' => 'Contrato vence el',
        'dpa_checklist' => 'El contrato cubre',
        'notes' => 'Notas',
        'issues' => 'Pendientes',
        'no_issues' => 'Ninguno',
        'next_review' => 'Próxima revisión',
    ],

    'sections' => [
        'agreement' => 'Contrato por escrito',
    ],

    'help' => [
        'business_purpose' => 'La naturaleza y finalidad del tratamiento que describe el contrato.',
        'agreement' => 'Todos los estados exigen un contrato vinculante con cada encargado, con las cláusulas siguientes. Los terceros no lo necesitan.',
        'terminate' => 'El proveedor deberá entonces eliminar o devolver los datos personales.',
    ],

    'filters' => [
        'active' => 'Activos',
    ],

    'roles' => [
        'processor' => 'Encargado del tratamiento',
        'third_party' => 'Tercero',
    ],

    'risks' => [
        'low' => 'Bajo',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'issues' => [
        'agreement_missing' => 'Sin contrato firmado',
        'agreement_expired' => 'Contrato vencido',
        'agreement_incomplete' => 'Contrato incompleto',
        'review_due' => 'Revisión pendiente',
        'data_return_pending' => 'Devolución de datos pendiente',
    ],

    'checklist' => [
        'instructions' => 'Establece las instrucciones para el tratamiento de los datos',
        'nature_and_purpose' => 'Describe la naturaleza y finalidad del tratamiento',
        'data_types' => 'Enumera los tipos de datos personales tratados',
        'duration' => 'Indica la duración del tratamiento',
        'rights_and_obligations' => 'Establece los derechos y obligaciones de ambas partes',
        'confidentiality' => 'Obliga a toda persona que trate los datos a un deber de confidencialidad',
        'delete_or_return' => 'Exige eliminar o devolver los datos al final de los servicios',
        'compliance_information' => 'Pone a disposición la información necesaria para demostrar el cumplimiento',
        'assessments' => 'Permite evaluaciones o auditorías razonables, o aporta un informe de auditoría independiente',
        'subcontractors' => 'Obliga a los subcontratistas a las mismas obligaciones, tras aviso y oportunidad de oponerse',
    ],

    'actions' => [
        'review' => 'Marcar como revisado',
        'terminate' => 'Terminar relación',
        'data_returned' => 'Datos eliminados o devueltos',
    ],

    'notifications' => [
        'reviewed' => 'Proveedor revisado',
    ],
];
