<?php

// ARRAYS MULTIDIMENSIONAIS

$empresa = [
    'administracao' => [
        'Joao administrador',
        'Carlos sócio'
    ],
    'contabilidade' => [
        'Mariana',
        'Joaquim',
        'Antonio'
    ],
    'armazem' => [
        'gestores' => [
            'carlos',
            'marco'
        ],
        'operadores' => [
            'fernando',
            'manuel',
            'luis',
            'ricardo'
        ]
    ],
    'comerciais' => [
        'lisboa' => [
            'joao miguel',
            'carlos santos',
            'norte' => [
                'rui',
                'ana'
            ],
        ],
        'porto' =>[
            'marco antonio',
            'sergio santos'
        ],
        'coimbra' => [
            'maria silva'
        ]
    ]
];

print_r($empresa['comerciais']['lisboa']['norte']);