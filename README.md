# Phabricator Slovak Translation

## Installation

1. Copy PhabricatorSlovakTranslation.php to `/phabricator/src/infrastructure/internationalization/translation`
2. Copy PhutilSlovakLocale.php to `/var/www/libphutil/src/internationalization/locales`

## Configuration

Set `maniphest.priorities` to:
```
{
  "100": {
    "name": "Vyriešiť ihneď!",
    "short": "Vyriešiť!",
    "color": "pink",
    "keywords": [
      "unbreak"
    ]
  },
  "90": {
    "name": "Dôležitá",
    "short": "Dôležitá",
    "color": "violet",
    "keywords": [
      "triage"
    ]
  },
  "80": {
    "name": "Vysoká",
    "short": "Vysoká",
    "color": "red",
    "keywords": [
      "high"
    ]
  },
  "50": {
    "name": "Normálna",
    "short": "Normálna",
    "color": "orange",
    "keywords": [
      "normal"
    ]
  },
  "25": {
    "name": "Nízke",
    "short": "Nízke",
    "color": "yellow",
    "keywords": [
      "low"
    ]
  },
  "0": {
    "name": "Prianie",
    "short": "Prianie",
    "color": "sky",
    "keywords": [
      "wish",
      "wishlist"
    ]
  }
}
```

Set `maniphest.statuses` to:
```
{
  "open": {
    "name": "Otvorené",
    "special": "default",
    "prefixes": [
      "open",
      "opens",
      "reopen",
      "reopens"
    ]
  },
  "resolved": {
    "name": "Vyriešené",
    "name.full": "Zatvorené, Vyriešené",
    "closed": true,
    "special": "closed",
    "transaction.icon": "fa-check-circle",
    "prefixes": [
      "closed",
      "closes",
      "close",
      "fix",
      "fixes",
      "fixed",
      "resolve",
      "resolves",
      "resolved"
    ],
    "suffixes": [
      "as resolved",
      "as fixed"
    ],
    "keywords": [
      "closed",
      "fixed",
      "resolved"
    ]
  },
  "wontfix": {
    "name": "Nemožné",
    "name.full": "Zatvorené, Nemožné",
    "transaction.icon": "fa-ban",
    "closed": true,
    "prefixes": [
      "wontfix",
      "wontfixes",
      "wontfixed"
    ],
    "suffixes": [
      "as wontfix"
    ]
  },
  "invalid": {
    "name": "Nesprávne",
    "name.full": "Zatvorené, Nesprávne",
    "transaction.icon": "fa-minus-circle",
    "closed": true,
    "claim": false,
    "prefixes": [
      "invalidate",
      "invalidates",
      "invalidated"
    ],
    "suffixes": [
      "as invalid"
    ]
  },
  "duplicate": {
    "name": "Duplikát",
    "name.full": "Zatvorené, Duplikát",
    "transaction.icon": "fa-files-o",
    "special": "duplicate",
    "closed": true,
    "claim": false
  },
  "spite": {
    "name": "Nesprávne",
    "name.full": "Zatvorené, Nesprávne",
    "name.action": "Spited",
    "transaction.icon": "fa-thumbs-o-down",
    "silly": true,
    "closed": true,
    "prefixes": [
      "spite",
      "spites",
      "spited"
    ],
    "suffixes": [
      "out of spite",
      "as spite"
    ]
  }
}
```

Set `metamta.maniphest.subject-prefix` to `[Manifest]`
Set `metamta.conpherence.subject-prefix` to `[Konferencia]`
