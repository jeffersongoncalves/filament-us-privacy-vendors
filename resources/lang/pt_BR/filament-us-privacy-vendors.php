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
        'data_categories' => 'Dados pessoais compartilhados',
        'contact' => 'Contato',
        'dpa_signed_at' => 'Contrato assinado em',
        'dpa_expires_at' => 'Contrato expira em',
        'dpa_checklist' => 'O contrato abrange',
        'notes' => 'Observações',
        'issues' => 'Pendências',
        'no_issues' => 'Nenhuma',
        'next_review' => 'Próxima revisão',
    ],

    'sections' => [
        'agreement' => 'Contrato escrito',
    ],

    'help' => [
        'business_purpose' => 'A natureza e a finalidade do tratamento descritas no contrato.',
        'agreement' => 'Todos os estados exigem um contrato vinculante com cada processador, com os termos abaixo. Terceiros não precisam de contrato.',
        'terminate' => 'O fornecedor passará a dever a exclusão ou a devolução dos dados pessoais.',
    ],

    'filters' => [
        'active' => 'Ativos',
    ],

    'roles' => [
        'processor' => 'Processador',
        'third_party' => 'Terceiro',
    ],

    'risks' => [
        'low' => 'Baixo',
        'medium' => 'Médio',
        'high' => 'Alto',
    ],

    'issues' => [
        'agreement_missing' => 'Sem contrato assinado',
        'agreement_expired' => 'Contrato vencido',
        'agreement_incomplete' => 'Contrato incompleto',
        'review_due' => 'Revisão pendente',
        'data_return_pending' => 'Devolução dos dados pendente',
    ],

    'checklist' => [
        'instructions' => 'Estabelece as instruções para o tratamento dos dados',
        'nature_and_purpose' => 'Descreve a natureza e a finalidade do tratamento',
        'data_types' => 'Lista os tipos de dados pessoais tratados',
        'duration' => 'Indica a duração do tratamento',
        'rights_and_obligations' => 'Indica os direitos e obrigações de ambas as partes',
        'confidentiality' => 'Obriga todas as pessoas que tratam os dados ao dever de confidencialidade',
        'delete_or_return' => 'Exige excluir ou devolver os dados ao fim dos serviços',
        'compliance_information' => 'Disponibiliza as informações necessárias para demonstrar conformidade',
        'assessments' => 'Permite avaliações ou auditorias razoáveis, ou fornece um relatório de auditoria independente',
        'subcontractors' => 'Vincula subcontratados às mesmas obrigações, após aviso e oportunidade de objeção',
    ],

    'actions' => [
        'review' => 'Marcar como revisado',
        'terminate' => 'Encerrar relação',
        'data_returned' => 'Dados eliminados ou devolvidos',
    ],

    'notifications' => [
        'reviewed' => 'Fornecedor revisado',
    ],
];
