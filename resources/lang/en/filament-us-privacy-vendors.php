<?php

return [
    'resource' => [
        'label' => 'Vendor',
        'plural_label' => 'Vendors',
    ],

    'fields' => [
        'name' => 'Name',
        'role' => 'Role',
        'risk' => 'Risk',
        'services' => 'Services',
        'business_purpose' => 'Purpose of the processing',
        'data_categories' => 'Personal data disclosed',
        'contact' => 'Contact',
        'dpa_signed_at' => 'Contract signed on',
        'dpa_expires_at' => 'Contract expires on',
        'dpa_checklist' => 'The contract covers',
        'notes' => 'Notes',
        'issues' => 'Issues',
        'no_issues' => 'None',
        'next_review' => 'Next review',
    ],

    'sections' => [
        'agreement' => 'Written contract',
    ],

    'help' => [
        'business_purpose' => 'The nature and purpose of the processing the contract describes.',
        'agreement' => 'Every state requires a binding contract with each processor, with the terms below. Third parties need none.',
        'terminate' => 'The vendor will then owe the deletion or return of the personal data.',
    ],

    'filters' => [
        'active' => 'Active',
    ],

    'roles' => [
        'processor' => 'Processor',
        'third_party' => 'Third party',
    ],

    'risks' => [
        'low' => 'Low',
        'medium' => 'Medium',
        'high' => 'High',
    ],

    'issues' => [
        'agreement_missing' => 'No signed contract',
        'agreement_expired' => 'Contract expired',
        'agreement_incomplete' => 'Contract incomplete',
        'review_due' => 'Review due',
        'data_return_pending' => 'Data return pending',
    ],

    'checklist' => [
        'instructions' => 'Sets out the instructions for processing the data',
        'nature_and_purpose' => 'Describes the nature and purpose of the processing',
        'data_types' => 'Lists the types of personal data processed',
        'duration' => 'States the duration of the processing',
        'rights_and_obligations' => 'States the rights and obligations of both parties',
        'confidentiality' => 'Binds every person processing the data to a duty of confidentiality',
        'delete_or_return' => 'Requires deleting or returning the data at the end of the services',
        'compliance_information' => 'Makes available the information needed to demonstrate compliance',
        'assessments' => 'Allows reasonable assessments or audits, or provides an independent audit report',
        'subcontractors' => 'Binds subcontractors to the same obligations, after notice and an opportunity to object',
    ],

    'actions' => [
        'review' => 'Mark as reviewed',
        'terminate' => 'End relationship',
        'data_returned' => 'Data deleted or returned',
    ],

    'notifications' => [
        'reviewed' => 'Vendor reviewed',
    ],
];
