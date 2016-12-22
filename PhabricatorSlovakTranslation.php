<?php

final class PhabricatorSlovakTranslation extends PhutilTranslation
{

  public function getLocaleCode()
  {
    return 'sk_SK';
  }

  protected function getTranslations()
  {
      return array(
            # Maniphest
            'Tasks and Bugs'                                    => 'Úlohy a chyby',
            'Maniphest Help'                                    => 'Pomoc s Maniphestom',
            'Create Task'                                       => 'Vytvoriť úlohu',
            'Create New Task'                                   => 'Vytvoriť novú úlohu',
            'Create Task...'                                    => 'Vytvoriť úlohu...',
            'Create Event'                                      => 'Vytvoriť udalosť',
            'Maniphest Task'                                    => 'Úloha Maniphestu',
            'Quick Create'                                      => 'Rýchle vytvorenie',
            'Type a project name...'                            => 'Zadajte meno projektu...',
            'Type a username...'                                => 'Zadajte používateľa...',
            'Type a user, project, or mailing list name...'     => 'Zadajte používateľa, projekt alebo názov mailing listu...',
            'Queries'                                           => 'Filtre',
            'Query: %s'                                         => 'Filter: %s',
            'Assigned'                                          => 'Priradené',
            'Reports'                                           => 'Reporty',
            'Calendar'                                          => 'Kalendár',
            'Workboard'                                         => 'Plocha',
            'Members'                                           => 'Členovia',
            'Manage'                                            => 'Spravovať',
            'Natural'                                           => 'Prirodzene',
            'Fullscreen'                                        => 'Na celú obrazovku',
            'Members of Project...'                             => 'Členovia projektu...',
            'Assign / Claim'                                    => 'Prideliť',
            'Needs Triage'                                      => 'Okamžite vybaviť',
            'Resolved'                                          => 'Vyriešené',
            'Unbreak Now'                                       => 'Vyriešiť teraz',
            'High'                                              => 'Vysoká',
            'Low'                                               => 'Nízka',
            'Wishlist'                                          => 'Prianie',
            'Normal'                                            => 'Normálna',
            'Hide Column'                                       => 'Skryť stĺpec',
            'Tags'                                              => 'Štítky',
            'Story Points'                                      => 'Body',
            'Assigned: %s'                                      => 'Priradené: %s',
            'Authored'                                          => 'Autor',
            'Subscribed'                                        => 'Odoberané',
            'Open Tasks'                                        => 'Otvorené úlohy',
            'All Tasks'                                         => 'Všetky úlohy',
            'By User'                                           => 'Podľa poúžívateľa',
            'By Project'                                        => 'Podľa projektu',
            'Assigned To'                                       => 'Priradené',
            'In All Projects'                                   => 'Vo všetkých projektorch',
            'In Any Project'                                    => 'V akomkoľvek projekte',
            'Not In Projects'                                   => 'Nie v projektoch',
            "In Users' Projects"                                => 'V používateľských projektoch',
            'Author'                                            => 'Autor',
            'Authors'                                           => 'Autory',
            'Contains Words'                                    => 'Obsahuje slová',
            'Priority'                                          => 'Priorita',
            'Blocks'                                            => 'Blokuje',
            'Blocking'                                          => 'Blokuje',
            'Blocked'                                           => 'Blokované',
            'Group By'                                          => 'Zoskúpiť podľa',
            'Order By'                                          => 'Zoradiť podľa',
            'Task IDs'                                          => 'ID úlohy',
            'Created After'                                     => 'Vytvorené po',
            'Created Before'                                    => 'Vytvorené pred',
            'Updated After'                                     => 'Aktualizované po',
            'Updated Before'                                    => 'Aktualizované pred',
            'Page Size'                                         => 'Veľkosť stránky',
            'Shift-Click to Select Tasks'                       => 'Shift+click pre výber úloh',
            'Select All'                                        => 'Vybrať všetko',
            'Clear Selection'                                   => 'Odznačiť výber',
            'Export to Excel'                                   => 'Export Excel',
            'Export Tasks to Excel'                             => 'Exportovať úlohy do excelu',
            'Do you want to export the query results to Excel?' => 'Prajete si exportovať výsledky do Excelu?',
            'Batch Edit Selected »'                             => 'Skupinovo upraviť vybrané »',
            'Edit Task'                                         => 'Upraviť úlohu',
            'Save Task'                                         => 'Uložiť úlohu',
            'Merge Duplicates In'                               => 'Spojiť duplikáty',
            'Create Subtask'                                    => 'Vytvoriť pod-úlohu',
            'Edit Blocking Tasks'                               => 'Pridať blokujúce úlohy',
            'Edit Differential Revisions'                       => 'Upraviť revízie kódu',
            'Edit Pholio Mocks'                                 => 'Upraviť mocky',
            'Automatically Subscribed'                          => 'Automaticky odoberané',
            'Unsubscribe'                                       => 'Zastaviť odberanie',
            'Subscribe'                                         => 'Odoberať',
            'Subscribers'                                       => 'Odoberatelia',
            'Start Tracking Time'                               => 'Začat sledovanie času',
            'Award Token'                                       => 'Udeliť odznak',
            'New task created. Create another?'                 => 'Nová úloha vytvorená, vytvoriť dalšiu ?',
            'Similar Task'                                      => 'Podobné úlohy',
            'Empty Task'                                        => 'Prázdna úloha',
            'Older changes are hidden. '                        => 'Staršie zmeny sú skryté ',
            'Show older changes.'                               => 'Ukázať staršie zmeny',

            '%s created this task.'                                   => '%s vytvoril túto úlohu.',
            'Weigh In'                                                => 'Vyjadriť...',
            '%s added a comment.'                                     => '%s pridal/a komentár.',
            '%s closed this task as a duplicate.'                     => '%s zatvoril/a túto úlohu ako duplikát.',
            '%s closed this task as "%s".'                            => '%s zatvoril/a úlohu ako : "%s".',
            '%s placed this task up for grabs.'                       => '%s dal/a úlohu na odobratie.',
            '%s assigned this task to %s.'                            => '%s priradil/a úlohu %s.',
            '%s claimed this task.'                                   => '%s si priradil/a úlohu.',
            '%s updated subscribers...'                               => '%s aktualizoval/a odoberateľov...',
            '%s triaged this task as "%s" priority.'                  => '%s ponížil/a úlohu na prioritu "%s".',
            '%s raised the priority of this task from "%s" to "%s".'  => '%s zvýšil/a prioritu z "%s" na "%s".',
            '%s lowered the priority of this task from "%s" to "%s".' => '%s znižil/a prioritu "%s" na "%s".',
            '%s edited associated projects.'                          => '%s upravil/a asociované projekty.',
            '%s awarded a token.'                                     => '%s získal/a odznak.',
            '%s set %s to %s.'                                        => '%s nastavil/a %s na %s.',
            '%s edited the task description.'                         => '%s upravil/a popis úlohy.',
            '%s updated the description of %s.'                       => '%s upravil/a popis %s',
            '%s changed %s from %s to %s.'                            => '%s zmenil/a %s z %s na %s.',
            '%s claimed %s.'                                          => '%s si priradil/a %s.',
            # Actions
            'Comment'            => 'Komentár',
            'Change Status'      => 'Upraviť status',
            'Reassign / Claim'   => 'Zmeniť priradenie / Priradiť',
            'Add CCs'            => 'Pridať kopie',
            'Change Priority'    => 'Zmeniť prioritu',
            'Associate Projects' => 'Asociované projekty',

            # Feed
            '%s created %s.'                                                     => '%s vytvoril/a %s.',
            '%s edited %s.'                                                      => '%s upravil/a %s.',
            '%s set %s to %s on %s.'                                             => '%s nastavil/a %s na %s na %s.',
            '%s changed %s from %s to %s on %s.'                                 => '%s zmenil/a %s z %s na %s na %s.',
            '%s added a comment to %s.'                                          => '%s pridal/a komentár %s.',
            '%s edited the description of %s.'                                   => '%s upravil/a popis %s.',
            '%s edited the content of %s.'                                       => '%s upravil/a obsah %s.',
            '%s awarded %s a %s token.'                                          => '%s dostal/a %s za %s odznak.',
            '%s triaged %s as "%s" priority.'                                    => '%s nastavil/a %s : "%s".',
            'To begin on such a grand journey, requires but just a single step.' => 'Na začatie takeho dobrodrúžstva, stačí drobný krok',

            # Diffusion
            'Host and Browse Repositories' => 'Hostovať a prehľadávať repozitáre',

            # Audit
            'Browse and Audit Commits'     => 'Prehľadávať a auditovať komity',

            # Projects
            'All'                          => 'Všetky',
            'Project'                      => 'Projekt',
            'Projects'                     => 'Projekty',
            'Get Organized'                => 'Organizovať',
            'Create Project'               => 'Vytvoriť projekt',
            'Create New Project'           => 'Vytvoriť nový projekt',
            'Joined'                       => 'Prihlásený',
            'Active'                       => 'Aktívny',

            # Profiles
            'User Accounts and Profiles' => 'Použivateľské účty a profily',
            'User'                       => 'Použivaťeľ',
            'People'                     => 'Ludia',
            'User Since'                 => 'Používateľ od',
            'Roles'                      => 'Roly',
            'Not Approved'               => 'Nepotvrdený',
            'Unverified'                 => 'Neoverený',
            'Verified'                   => 'Overený',
            'Available'                  => 'Dostupny',
            'Edit Profile'               => 'Upraviť profil',
            'Edit Profile Picture'       => 'Upraviť profilový obrázok',
            'Remove Administrator'       => 'Odstrániť administrátora',
            'Change Username'            => 'Zmeniť používateľské meno',
            'Disable User'               => 'Deaktivovať použivateľa',
            'Delete User'                => 'Vymazať používateľa',
            'Send Welcome Email'         => 'Odoslať uvítací email',
            'Basic Policies'             => 'Základné práva',
            'All Users'                  => 'Všetci používatelia',
            'Administrators'             => 'Administrátori',
            'No One'                     => 'Nikto',
            'User Policies'              => 'Použivateľské práva',
            'Advanced'                   => 'Rozšírené',
            'Custom Policy...'           => 'Vlastné práva',

            'Conpherence'              => 'Chat',
            'Send Messages'            => 'Odoslať správy',
            'Message'                  => 'Správa',
            'Messages'                 => 'Správy',
            'To'                       => 'Komu',
            'Send Message'             => 'Odoslať správu',
            'New Message'              => 'Nová správa',
            'Join a Room'              => 'Pripojiť sa do miestnosti',
            'Create a Room'            => 'Vytvoriť miestnosť',
            'No Messages'              => 'Žiadne správy',
            '%s named this room "%s".' => '%s pomenoval túto miestnosť "%s".',


            'Files'                 => 'Súbory',
            'Store and Share Files' => 'Uložiť a zdielať súbor',
            'Drop Files to Upload'  => 'Presunúť a nahrať',
            'Image'                 => 'Obrázok',
            'Countdown to Events'   => 'Odpočítavanie pre udalosť',

            # Settings
            'Settings'              => 'Nastavenia',
            'All Settings'          => 'Všetky Nastavenia',
            'Personal Account Settings' => 'Osobné Nastavenia Účtu',
            'Edit settings for your personal account.' => 'Upraviť nastavenia pre osobný účet.',
            'Conpherence Notifications' => 'Konferenčné Notifikácie',
            'Conpherence Preferences' => 'Konferenčné Nastavenia',
            'Choose the default notification behavior for Conpherence rooms.' => 'Nastavte zakladné nastavenia notifikácií pre Konferenciu.',
            'Send Mail' => 'Odoslať email',
            'Send Notification' => 'Odoslať notifikácu',
            'Choose which language you would like the Phabricator UI to use.' => 'Vyberte si jazyk, ktorý chcete použiť pre Phabrikátor.',
            'Desktop Notifications' => 'Desktopové Notifikácie',
            'Save Preference'       => 'Uložiť nastavenie',
            'Personal Settings'     => 'Osobné Nastavenia',
            'SSH Public Keys'       => 'Verejné SSH klúče',
            'Name'                  => 'Názov',
            'Edit Settings'         => 'Upraviť nastavenia',
            'Save Preferences'      => 'Uložiť nastavenia',
            'Save Account Settings' => 'Uložiť nastavenia',
            'Account Settings'      => 'Nastavenia účtu',
            'Account'               => 'Účet',
            'Translation'           => 'Preklad',
            'Added'                 => 'Pridané',
            'Name'                  => 'Názov',
            'Email Addresses'       => 'Emailové adresy',
            'Pronoun'               => 'Zámeno',
            'Notifications' => 'Notifikácie',
            'Details' => 'Detaily',
            '%s updated their profile'                  => '%s upravil ich profil',
            '%s updated his profile'                    => '%s upravil jeho profil',
            '%s updated her profile'                    => '%s upravila svoj profil',
            '**Choose the pronoun you prefer:**'        => "**Aké zámeno si prajete?**",
            'Date and Time Settings'                    => 'Nastavenia dátumu a času',
            'Timezone'                                  => 'Časové pásmo',
            'Time-of-Day Format'                        => 'Formát času dňa',
            'Format used when rendering a time of day.' => 'Formát pre vypísanie času dňa',
            'Date Format'                               => 'Formát dátumu',
            'Format used when rendering a date.'        => 'Formát pre výpis času',
            'European (28-02-2000)'                     => 'Európsky (28-02-2000)',
            'Week Starts On'                            => 'Prvý deň v týždni',
            'Calendar weeks will start with this day.'  => 'Kalendárny týždeň začina, dňom',
            '12-hour (2:34 PM)'                         => '12 hodinový (2:34 PM)',
            '24-hour (14:34)'                           => '24 hodinový (14:34)',

            'Signed Documents'          => 'Podpísané dokumenty',
            'Preamble' => 'Preambula',
            '%s Day(s) Ago' => 'pred %s dňom/dňami',
            'All Documents' => 'Všetky Dokumenty',

            'Rooms' => 'Miestnosti',
            'Persistent Chat' => 'Umiestniť Chat do lišty',
            'Send a message...' => 'Odoslať správu...',
            'Add Participants' => 'Pridať Účastníkov',
            'Edit Room' => 'Upraviť Miestnosť',
            'Hide Window' => 'Skryť okno',

            'Active Repositories' => 'Aktívne Repozitáre',
            'Create Repository' => 'Vytvoriť Repozitár',
            'Locate File' => 'Vyhľadať súbor',
            'Path' => 'Cesta',
            'Modified' => 'Zmenené',
            'Author/Committer' => 'Author',
            'Commit' => 'Kommit',
            'Committed' => 'Komitované',
            'Branches' => 'Vetvy',
            'Branch' => 'Vetva',
            'Head' => 'Hlava',
            'Show All' => 'Ukáž všetky',
            'View History' => 'Ukáž históriu',
            'Manage Repository' => 'Spravovať Repozitár',
            'Browse Repository' => 'Prehľadávať Repozitár',
            'Clone' => 'Klonovať',
            '' => '',

            # Config
            'Configure Phabricator'                                                                             => 'Nastaviť Phabrikátor',

            # 404
            'Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.' => 'Priepasť, čo poviem',

            # Auth' => '',
            'Login to Phabricator'                                                                              => 'Prihlásiť sa',
            'Username or Email'                                                                                 => 'Email alebo Nick',
            'Password'                                                                                          => 'Heslo',
            'Forgot your password?'                                                                             => 'Zabudnuté heslo?',
            'Register New Account'                                                                              => 'Vytvoriť účet',
            'Phabricator Username'                                                                              => 'Nick',
            'Real Name'                                                                                         => 'Reálne meno',
            'Confirm Password'                                                                                  => 'Potvrdiť heslo',
            'Minimum length of %d characters.'                                                                  => 'Minimálna dĺžka je %d znakov.',
            'Register Phabricator Account'                                                                      => 'Vytvoriť účet',
            'Login'                                                                                             => 'Prihlásiť sa',
            'Log out of Phabricator?'                                                                           => 'Odhlásiť sa?',
            'Are you sure you want to log out?'                                                                 => 'Ste si istý, že sa chcete odhlásiť ?',
            'Log Out'                                                                                           => 'Odhlásiť',
            'Logout'                                                                                            => 'Odhlásiť',

            # Date/Time
            'Time'          => 'Čas',
            'Date and Time' => 'Dátum a čas',

            # Days
            'MTWTFSS'       => 'PUSSPSN',
            'Mon'           => 'Pon',
            'Tue'           => 'Uto',
            'Wed'           => 'Str',
            'Thu'           => 'Štv',
            'Fri'           => 'Pia',
            'Sat'           => 'Sob',
            'Sun'           => 'Ned',

            'Monday'        => 'Pondelok',
            'Tuesday'       => 'Utorok',
            'Wednesday'     => 'Streda',
            'Thursday'      => 'Štvrtok',
            'Friday'        => 'Piatok',
            'Saturday'      => 'Sobota',
            'Sunday'        => 'Nedeľa',
            'Yesterday'     => 'Včera',
            'Today'         => 'Dnes',
            'Tomorrow'      => 'Zajtra',

            # Months
            'Feb'           => 'Feb',
            'Mar'           => 'Mar',
            'Apr'           => 'Apr',
            'Jun'           => 'Jún',
            'Jul'           => 'Júl',
            'Aug'           => 'Aug',

            'January'       => 'Január',
            'February'      => 'Február',
            'March'         => 'Marec',
            'April'         => 'Apríl',
            'May'           => 'Máj',
            'June'          => 'Jún',
            'July'          => 'Júl',
            'August'        => 'August',
            'September'     => 'September',
            'October'       => 'Október',
            'November'      => 'November',
            'December'      => 'December',

            # Autre
            '%s removed this form from the "Create" menu.'      => '%s ostránil/a tento formulár z vytvorenia menu.',
            '%s moved this document from %s'                    => '%s presunul dokument z %s',
            '%s moved this document to %s'                      => '%s presunul dokument do %s',
            '%s moved this task to %s on the %s workboard.'     => '%s presunul úlohu z %s na plochu %s.',

            '%d Answer(s)'                                      => array(
                'odpoveď',
                '%d Odpovede'
            ),
            'Show %d Comment(s)'                                => array(
                'Ukázať komentár',
                'Ukázať komentáre'
            ),

            '%d Assigned Task(s)'                               => array(
                '%d priradená úloha',
                '%d priradených úloh',
            ),

            'Create Custom Pages'                               => 'Vytvoriť vlastné stránky',
            'Explore More Applications'                         => 'Objaviť viac aplikácii',
            'Customize Menu...'                                 => 'Upraviť menu ...',
            'Create'                                            => 'Vytvoriť',
            'Create New...'                                     => 'Vytvoriť novú...',
            'Update'                                            => 'Aktualizovať',
            'Continue'                                          => 'Pokračovat',
            'Send'                                              => 'Odoslať',
            'Submit'                                            => 'Potvrdiť',
            'Save'                                              => 'Uložiť',
            'Save Changes'                                      => 'Uložiť zmeny',
            'Changes saved.'                                    => 'Zmeny uložené.',
            'Add Comment'                                       => 'Pridať komentár',
            'Add Action...'                                     => 'Pridať akciu...',
            'Move on Workboard'                                 => 'Presunuť na ploche',
            'Change Project Tags'                               => 'Zmeniť projektové značky',
            'Change Subscribers'                                => 'Zmeniť odoberateľov',
            'Take Action'                                       => 'Vykonať',
            'Join'                                              => 'Pripojiť',
            'Cancel'                                            => 'Zrušiť',
            'Close'                                             => 'Zatvoriť',
            'No data.'                                          => 'Nie sú dáta.',
            'Partial'                                           => 'Čiastočné',
            'Partial Upload'                                    => 'Čiastočné nahranie',
            'View All'                                          => 'Zobraziť všetky',
            'All'                                               => 'Všetko',
            'Title'                                             => 'Nadpis',
            'Action'                                            => 'Akcia',
            'Actions'                                           => 'Akcie',
            'View Raw'                                          => 'Zobraziť bez formátu',
            'PREVIEW'                                           => 'UKÁŽKA',
            'Preview'                                           => 'Ukážka',
            'Help'                                              => 'Pomoc',
            'Document Preview'                                  => 'Ukážka dokumentu',
            'Description Preview'                               => 'Ukážka popisu',
            'Configure Form'                                    => 'Nastaviť formulár',
            'Description'                                       => 'Popis',
            'Comments'                                          => 'Komentáre',
            'Author'                                            => 'Autor',
            'Subscribers'                                       => 'Odoberatelia',
            'Required'                                          => 'Vyžadované',
            'Visible To'                                        => 'Viditeľné',
            'Editable By'                                       => 'Upraviteľné',
            'Policies'                                          => 'Oprávnenia',
            'Default'                                           => 'Zakladné',
            'Prototype'                                         => 'Prototyp',
            '(Show Details)'                                    => '(Ukázať detaily)',
            'Change Details'                                    => 'Zmeniť detaily',
            'Updated'                                           => 'Aktualizované',
            'Loading...'                                        => 'Načitavam...',
            'None'                                              => 'Nič',
            'Recent Activity'                                   => 'Posledná aktivita',
            '%s mentioned this in %s.'                          => '%s spomenutý/á v %s.',
            '%s changed the visibility from "%s" to "%s".'      => '%s zmenil/a viditeľnosť z "%s" na "%s".',
            '%s changed the edit policy from "%s" to "%s".'     => '%s zmenil/a oprávnenia z "%s" na "%s".',
            '%s added %s subscriber(s): %s.'                    => '%s pridal/a %s odoberateľa/ov: %s.',
            '%s removed %s subscriber(s): %s.'                  => '%s odstránil/a %s odoberateľa/ov: %s.',
            '%s edited subscribers; added: %s, removed: %s.'    => '%s upravil/a odoberateľov; pridal/a: %s, odstránil/a: %s.',
            '%s added %s commit(s): %s.'                        => '%s pridal/a %s komit/y: %s.',
            '%s changed the title from "%s" to "%s".'           => '%s zmenil/a názov z "%s" na "%s".',
            '%s added %s project(s): %s.'                       => array(
                array(
                    '%s pridal/a projekt: %3$s.',
                    '%s pridal/a projekty: %3$s.',
                ),
            ),

            '%s moved this task from %s to %s on the %s board.' => '%s presunul/a túto úlohu z %s do %s na plochu %s.',

            # Search
            'Search'                                                       => 'Hľadať',
            'Query'                                                        => 'Filter',
            'Edit Query...'                                                => 'Upraviť filter...',
            'Edit Query'                                                   => 'Upraviť filter',
            'Edit Queries...'                                              => 'Upraviť filtre...',
            'Save Custom Query...'                                         => 'Uložiť vlastný filter',
            'Showing results for query "%s".'                              => 'Ukazujem výsledky pre filter "%s".',
            'Showing results for saved query "%s".'                        => 'Ukazujem výsledky pre uložený filter "%s".',
            'Advanced Search'                                              => 'Pokročilé vyhľadávanie',
            'No search results.'                                           => 'Žiadne výsledky.',
            'No results found for this query.'                             => 'Filtru nezodpovedajú žiadne výsledky.',
            'Hide Query'                                                   => 'Skryť filter',
            'Execute Query'                                                => 'Spusiť filter',
            'Browse Users'                                                 => 'Prehľadávať používateľov',
            'Browse Subscribers'                                           => 'Prehľadávať odoberateľov',
            'Browse Projects'                                              => 'Prehľadávať projekty',
            'Browse Document Types'                                        => 'Prehľadávať typy dokumentov',
            'Select'                                                       => 'Vybrať',
            'Search All Documents'                                         => 'Vyhľadať všetky dokumenty',
            'Search Current Application'                                   => 'Vyhľadať v aktuálnej aplikácii',
            'Saved Queries'                                                => 'Uložené filtre',
            'Open Documents'                                               => 'Otvorené dokumenty',
            'More Options'                                                 => 'Viac možností',
            # Edit
            'Edit'                                                         => 'Upraviť',
            'Edit Comment'                                                 => 'Upraviť komentár',
            'Remove Comment'                                               => 'Odstrániť komentár',
            'Bold'                                                         => 'Hrubé',
            'bold text'                                                    => 'hrubý text',
            'Italics'                                                      => 'Kurzíva',
            'Code Block'                                                   => 'Blok kódu',

            'italic text'                                                  => 'text s kurzívom Text',
            'Monospaced'                                                   => 'Jednoduchý',
            'monospaced text'                                              => 'jednoduchý text',
            'Bulleted List'                                                => 'Bodovaný',
            'List Item'                                                    => 'Odrážky',
            'Numbered List'                                                => 'Číslený zoznam',
            'Quote'                                                        => 'Citát',
            'Quoted Text'                                                  => 'Citovaný text',
            'Table'                                                        => 'Tabuľka',
            'data'                                                         => 'data',
            'Upload File'                                                  => 'Nahrať súbor',
            'To add files, drag and drop them into the comment text area.' => 'Presunte súbory na textové pole',
            'Fullscreen Mode'                                              => 'Na celú obrazovku',

            # Apps
            'All Applications'                                             => 'Všetky aplikácie',
            'Can Use Application'                                          => 'Može použiť aplikáciu',
            'Can Configure Application'                                    => 'Môže nastaviť aplikáciu',

            # Differential
            'Review Code'             => 'Skontrolovať kód',

            # Maniphest
            'Open'                    => 'Otvorená',
            'Resolved'                => 'Vyriešená',
            'Wontfix'                 => 'Nemožná',
            'Invalid'                 => 'Neplatná',
            'Authored By'             => 'Vytvorené',
            'Set Sail for Adventure'  => 'Komentovať',
            'Task Graph'              => 'Graf úloh',
            'Edit Related Tasks...'   => 'Upraviť napojené úlohy...',
            'Edit Parent Tasks'       => 'Upraviť hlavnú úlohu',
            'Edit Subtasks'           => 'Upraviť pod úlohy',
            'Close As Duplicate'      => 'Zatvoriť ako duplikát',
            'Edit Related Objects...' => 'Upraviť pripojené objekty...',
            'Edit Commits'            => 'Upraviť komity',
            'Commits' => 'Komity',
            'Edit Mocks'              => 'Upraviť mocky',
            'Edit Revisions'          => 'Upraviť revízie',

        );
    }
}