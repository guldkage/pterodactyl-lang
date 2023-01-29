<?php

return [
    'daemon_connection_failed' => 'Der var en undtagelse under forsøg på at kommunikere med daemon, hvilket resulterede i en HTTP/:code. Denne undtagelse er blevet logget.',
    'node' => [
        'servers_attached' => 'En maskine må ikke have nogen servere knyttet til sig for at blive slettet.',
        'daemon_off_config_updated' => 'Daemon konfigurationen <strong>er blevet opdateret</strong>, men der opstod en fejl under forsøg på automatisk at opdatere konfigurationsfilen på Daemon. Du skal manuelt opdatere konfigurationsfilen (config.yml) for at daemon kan anvende disse ændringer.',
    ],
    'allocations' => [
        'server_using' => 'A server is currently assigned to this allocation. An allocation can only be deleted if no server is currently assigned.',
        'too_many_ports' => 'Adding more than 1000 ports in a single range at once is not supported.',
        'invalid_mapping' => 'The mapping provided for :port was invalid and could not be processed.',
        'cidr_out_of_range' => 'CIDR notation only allows masks between /25 and /32.',
        'port_out_of_range' => 'Ports in an allocation must be greater than 1024 and less than or equal to 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'A Nest with active servers attached to it cannot be deleted from the Panel.',
        'egg' => [
            'delete_has_servers' => 'An Egg with active servers attached to it cannot be deleted from the Panel.',
            'invalid_copy_id' => 'The Egg selected for copying a script from either does not exist, or is copying a script itself.',
            'must_be_child' => 'The "Copy Settings From" directive for this Egg must be a child option for the selected Nest.',
            'has_children' => 'This Egg is a parent to one or more other Eggs. Please delete those Eggs before deleting this Egg.',
        ],
        'variables' => [
            'env_not_unique' => 'The environment variable :name must be unique to this Egg.',
            'reserved_name' => 'The environment variable :name is protected and cannot be assigned to a variable.',
            'bad_validation_rule' => 'The validation rule ":rule" is not a valid rule for this application.',
        ],
        'importer' => [
            'json_error' => 'There was an error while attempting to parse the JSON file: :error.',
            'file_error' => 'The JSON file provided was not valid.',
            'invalid_json_provided' => 'The JSON file provided is not in a format that can be recognized.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Redigering af din egen konto er ikke tilladt.',
        'user_is_owner' => 'Du kan ikke tilføje serverejeren som bruger til denne server.',
        'subuser_exists' => 'En bruger med den e-mailadresse er allerede tildelt som en bruger til denne server.',
    ],
    'databases' => [
        'delete_has_databases' => 'Kan ikke slette en database host, der har aktive databaser knyttet til sig.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Den maksimale intervaltid for en lænket opgave er 15 minutter.',
    ],
    'locations' => [
        'has_nodes' => 'Kan ikke slette en placering, der har aktive maskiner knyttet til sig.',
    ],
    'users' => [
        'node_revocation_failed' => 'Failed to revoke keys on <a href=":link">Node #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Der blev ikke fundet nogen noder, der opfylder kravene specificeret for automatisk implementering.',
        'no_viable_allocations' => 'Der blev ikke fundet nogen tildelinger, der opfylder kravene til automatisk implementering.',
    ],
    'api' => [
        'resource_not_found' => 'Den anmodede ressource findes ikke på denne server.',
    ],
];
