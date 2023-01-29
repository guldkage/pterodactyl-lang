<?php

return [
    'notices' => [
        'created' => 'En nyt egg, :name, er blevet oprettet.',
        'deleted' => 'Det anmodede egg blev slettet fra panelet.',
        'updated' => 'Opsætning af egg er blevet opdateret.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Importerede dette egg og dets tilknyttede variabler.',
            'updated_via_import' => 'Dette egg er blevet opdateret ved hjælp af den medfølgende fil.',
            'deleted' => 'Det anmodede egg blev slettet fra panelet.',
            'updated' => 'Egg konfigurationen er blevet opdateret.',
            'script_updated' => 'Egg install script er blevet opdateret og vil køre hver gang servere installeres.',
            'egg_created' => 'Et nyt egg blev installeret. Du skal genstarte alle kørende daemons for at anvende.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'Variablen ":variable" er blevet slettet og vil ikke længere være tilgængelig for servere, når den er genopbygget.',
            'variable_updated' => 'Variablen ":variable" er blevet opdateret. Du bliver nødt til at genopbygge alle servere ved hjælp af denne variabel for at anvende ændringer.',
            'variable_created' => 'Ny variabel er blevet oprettet og tildelt dette egg.',
        ],
    ],
];
