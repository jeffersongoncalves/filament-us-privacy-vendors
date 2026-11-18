<?php

return [
    'resource' => [
        'label' => 'Fornecedor',
        'plural_label' => 'Fornecedores',
    ],

    'fields' => [
        'name' => 'Nome',
        'role' => 'Papel',
        'risk' => 'Risco',
        'services' => 'Serviços',
        'business_purpose' => 'Finalidade do tratamento',
        'data_categories' => 'Dados pessoais comunicados',
        'contact' => 'Contacto',
        'dpa_signed_at' => 'Contrato assinado em',
        'dpa_expires_at' => 'Contrato expira em',
        'dpa_checklist' => 'O contrato abrange',
        'notes' => 'Notas',
        'issues' => 'Pendências',
        'no_issues' => 'Nenhuma',
        'next_review' => 'Próxima revisão',
    ],

    'sections' => [
        'agreement' => 'Contrato escrito',
    ],

    'help' => [
        'business_purpose' => 'A natureza e a finalidade do tratamento descritas no contrato.',
        'agreement' => 'Todos os estados exigem um contrato vinculativo com cada subcontratante, com as cláusulas abaixo. Terceiros não precisam.',
        'terminate' => 'O fornecedor passará a dever a eliminação ou devolução dos dados pessoais.',
    ],

    'filters' => [
        'active' => 'Ativos',
    ],

    'roles' => [
        'processor' => 'Subcontratante',
        'third_party' => 'Terceiro',
    ],

    'risks' => [
        'low' => 'Baixo',
        'medium' => 'Médio',
        'high' => 'Alto',
    ],

    'issues' => [
        'agreement_missing' => 'Sem contrato assinado',
        'agreement_expired' => 'Contrato expirado',
        'agreement_incomplete' => 'Contrato incompleto',
        'review_due' => 'Revisão em falta',
        'data_return_pending' => 'Devolução dos dados pendente',
    ],

    'checklist' => [
        'instructions' => 'Estabelece as instruções para o tratamento dos dados',
        'nature_and_purpose' => 'Descreve a natureza e a finalidade do tratamento',
        'data_types' => 'Enumera os tipos de dados pessoais tratados',
        'duration' => 'Indica a duração do tratamento',
        'rights_and_obligations' => 'Indica os direitos e obrigações de ambas as partes',
        'confidentiality' => 'Vincula todas as pessoas que tratam os dados a um dever de confidencialidade',
        'delete_or_return' => 'Exige eliminar ou devolver os dados no fim dos serviços',
        'compliance_information' => 'Disponibiliza as informações necessárias para demonstrar a conformidade',
        'assessments' => 'Permite avaliações ou auditorias razoáveis, ou fornece um relatório de auditoria independente',
        'subcontractors' => 'Vincula os subcontratados às mesmas obrigações, após aviso e oportunidade de oposição',
    ],

    'actions' => [
        'review' => 'Marcar como revisto',
        'terminate' => 'Terminar relação',
        'data_returned' => 'Dados apagados ou devolvidos',
    ],

    'notifications' => [
        'reviewed' => 'Fornecedor revisto',
    ],
];
