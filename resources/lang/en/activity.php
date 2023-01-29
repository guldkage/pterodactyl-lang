<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => 'Log ind mislykkedes',
        'success' => 'Logget ind',
        'password-reset' => 'Nulstilling af adgangskode',
        'reset-password' => 'Anmodet om nulstilling af adgangskode',
        'checkpoint' => 'To-faktor-godkendelse anmodet',
        'recovery-token' => 'Brugte to-faktor gendannelsestoken',
        'token' => 'Løst to-faktor udfordring',
        'ip-blocked' => 'Blokeret anmodning fra unoteret IP-adresse for :identifier',
        'sftp' => [
            'fail' => 'SFTP login mislykkedes',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'Changed email from :old to :new',
            'password-changed' => 'Changed password',
        ],
        'api-key' => [
            'create' => 'Oprettet ny API-nøgle :identifier',
            'delete' => 'Slettet API-nøgle :identifier',
        ],
        'ssh-key' => [
            'create' => 'Tilføjede SSH-nøgle :fingerprint til konto',
            'delete' => 'Fjernet SSH-nøgle :fingerprint fra konto',
        ],
        'two-factor' => [
            'create' => 'Aktiveret to-faktor godkendelse',
            'delete' => 'Deaktiveret to-faktor godkendelse',
        ],
    ],
    'server' => [
        'reinstall' => 'Geninstallerede serveren',
        'console' => [
            'command' => 'Udførte ":command" på serveren',
        ],
        'power' => [
            'start' => 'Startede serveren',
            'stop' => 'Stoppede serveren',
            'restart' => 'Genstartede serveren',
            'kill' => 'Dræbte serveren',
        ],
        'backup' => [
            'download' => 'Downloadede :name backup',
            'delete' => 'Slettede :name backup',
            'restore' => 'Gendannet :name backup (slettede filer: :truncate)',
            'restore-complete' => 'Fuldført gendannelse af :name backup',
            'restore-failed' => 'Det lykkedes ikke at fuldføre gendannelsen af ​​:name backup',
            'start' => 'Startet en ny backup :name',
            'complete' => 'Markerede :name backupen som færdig',
            'fail' => 'Markerede :name backup som mislykket',
            'lock' => 'Låst :name backup',
            'unlock' => 'Låste op for :name backup',
        ],
        'database' => [
            'create' => 'Oprettet ny database :navn',
            'rotate-password' => 'Adgangskode roteret til databasen :navn',
            'delete' => 'Slettet database :navn',
        ],
        'file' => [
'compress_one' => 'Komprimeret :directory:fil',
            'compress_other' => 'Komprimerede :count filer i :directory',
            'read' => 'Så indholdet af :fil',
            'copy' => 'Oprettede en kopi af :fil',
            'create-directory' => 'Oprettet mappe :directory:navn',
            'decompress' => 'Udekomprimerede :files i :directory',
            'delete_one' => 'Slettet :directory:files.0',
            'delete_other' => 'Slettede :count filer i :directory',
            'download' => 'Downloadet :fil',
            'pull' => 'Downloadede en ekstern fil fra :url til :directory',
            'rename_one' => 'Omdøbt :directory:files.0.fra til :directory:files.0.til',
            'rename_other' => 'Omdøbt :count filer i :directory',
            'write' => 'Skrev nyt indhold til :fil',
            'upload' => 'Begyndte en filupload',
            'uploaded' => 'Uploadet :directory:files',
        ],
        'sftp' => [
            'denied' => 'Blokeret SFTP-adgang på grund af tilladelser',
            'create_one' => 'Oprettet :files.0',
            'create_other' => 'Oprettet :count nye filer',
            'write_one' => 'Ændrede indholdet af :files.0',
            'write_other' => 'Ændrede indholdet af :count filer',
            'delete_one' => 'Slettet :files.0',
            'delete_other' => 'Slettede :count filer',
            'create-directory_one' => 'Oprettede mappen :files.0',
            'create-directory_other' => 'Oprettet :count mapper',
            'rename_one' => 'Omdøbt :files.0.from til :files.0.to',
            'rename_other' => 'Omdøbt eller flyttet :count filer',
        ],
        'allocation' => [
            'create' => 'Tilføjet porten :allocation til serveren',
            'notes' => 'Opdaterede noterne for :allocation fra ":old" til ":new"',
            'primary' => 'Sæt :allocation som den primære port',
            'delete' => 'Slettede :allocation port',
        ],
        'schedule' => [
            'create' => 'Oprettede opgaven :name',
            'update' => 'Opdaterede opgaven :name',
            'execute' => 'Udførte opgaven :name manuelt',
            'delete' => 'Slettede opgaven :name',
        ],
        'task' => [
            'create' => 'Oprettede en ny ":action"-opgave til opgaven :name',
            'update' => 'Opdaterede ":action"-opgaven for opgaven :name',
            'delete' => 'Slettede en underopgave for opgaven :name',
        ],
        'settings' => [
            'rename' => 'Omdøbte serveren fra :old til :new',
            'description' => 'Ændrede serverbeskrivelsen fra :old til :new',
        ],
        'startup' => [
            'edit' => 'Ændrede variablen :variable fra ":old" til ":new"',
            'image' => 'Opdaterede Docker-billedet for serveren fra :old til :new',
        ],
        'subuser' => [
            'create' => 'Tilføjet :email som bruger',
            'update' => 'Opdaterede brugertilladelserne for :email',
            'delete' => 'Fjernet :email som bruger',
        ],
    ],
];
