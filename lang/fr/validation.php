<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.n
    |
    */

    'accepted' => 'ce champ doit être accepté.',
    'accepted_if' => 'ce champ doit être accepté lorsque :other vaut :value.',
    'active_url' => 'ce champ n\'est pas une URL valide.',
    'after' => 'ce champ doit être une date postérieure au :date.',
    'after_or_equal' => 'ce champ doit être une date après ou égale à :date.',
    'alpha' => 'ce champ doit seulement contenir des lettres.',
    'alpha_dash' => 'ce champ doit seulement contenir des lettres, des chiffres et des tirets.',
    'alpha_num' => 'ce champ doit seulement contenir des chiffres et des lettres.',
    'array' => 'ce champ doit être un tableau.',
    'ascii' => 'ce champ ne doit contenir que des caractères alphanumériques à un octet et des symboles.',
    'before' => 'ce champ doit être une date antérieure au :date.',
    'before_or_equal' => 'ce champ: doit être une date avant ou égale à :date.',
    'between' => [
        'numeric' => 'La valeur de :attribute doit être comprise entre :min et :max.',
        'file' => 'Le fichier :attribute doit avoir une taille entre :min et :max kilo-octets.',
        'string' => 'Le texte :attribute doit avoir entre :min et :max caractères.',
        'array' => 'Le tableau :attribute doit avoir entre :min et :max éléments.',
    ],
    'boolean' => 'ce champ doit être vrai ou faux.',
    'confirmed' => 'Le champ de confirmation :attribute ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => 'ce champ n\'est pas une date valide.',
    'date_equals' => 'ce champ doit être une date égale à :date.',
    'date_format' => 'ce champ ne correspond pas au format :format.',
    'decimal' => 'ce champ doit avoir des décimales :decimal.',
    'declined' => 'ce champ doit être refusé.',
    'declined_if' => 'ce champ doit être refusé lorsque :other vaut :value.',
    'different' => 'Les champs :attribute et :other doivent être différents.',
    'digits' => 'ce champ doit avoir :digits chiffres.',
    'digits_between' => 'ce champ doit avoir entre :min and :max chiffres.',
    'dimensions' => 'ce champ a des dimensions d\'image non valides.',
    'distinct' => 'Le champ a une valeur en double.',
    'doesnt_end_with' => 'ce champ ne peut pas se terminer par l\'un des éléments suivants : :values.',
    'doesnt_start_with' => 'ce champ ne peut pas se commencer par l\'un des éléments suivants : :values.',
    'email'  => "ce champ doit être une adresse email valide.",
    'ends_with' => 'ce champ doit se terminer par l\'une des valeurs suivantes : :values.',
    'enum' => 'ce champ sélectionné est invalide.',
    'exists' => 'ce champ sélectionné est invalide.',
    'file' => 'ce champ doit être un fichier.',
    'filled' => "ce champ est obligatoire.",
    'gt' => [
        'array'  => 'ce champ doit avoir plus de :value éléments.',
        'file' => 'ce champ doit être supérieur à :value kilobytes.',
        'numeric' => 'ce champ doit être supérieur à :value.',
        'string' => 'ce champ doit être supérieur à :value caractères.',
    ],
    'gte' => [
        'array' => 'ce champ doit avoir :value éléments ou plus.',
        'file' => 'ce champ doit être supérieur ou égal :value kilobytes.',
        'numeric' => 'ce champ doit être supérieur ou égal :value.',
        'string' => 'ce champ doit être supérieur ou égal :value caractères.',
    ],
    'image' => 'ce champ doit être une image.',
    'in' => 'ce champ est invalide.',
    'in_array' => 'ce champ n\'existe pas dans :other.',
    'integer' => 'ce champ doit être un entier (un nombre sans virgule).',
    'ip' => 'ce champ doit être une adresse IP valide.',
    'ipv4' => 'ce champ doit être une adresse IPv4 valide.',
    'ipv6' => 'ce champ doit être une adresse IPv6 valide.',
    'json' => 'ce champ doit être une chaîne JSON valide.',
    'lowercase' => 'ce champ doit être en minuscules.',
    'lt' => [
        'array' => 'ce champ doit avoir moins de :value éléments.',
        'file' => 'ce champ doit être inférieur à :value kilobytes.',
        'numeric' => 'ce champ doit être inférieur à :value.',
        'string' => 'ce champ doit être inférieur à :value caractères.',
    ],
    'lte' => [
        'array' => 'ce champ ne doit pas avoir plus de :value éléments.',
        'file' => 'ce champ doit être inférieur à or equal :value kilobytes.',
        'numeric' => 'ce champ doit être inférieur à or equal :value.',
        'string' => 'ce champ doit être inférieur à or equal :value caractères.',
    ],
    'mac_address' => 'ce champ doit être une adresse MAC valide.',
    'max' => [
        'array' => 'Le tableau :attribute ne peut avoir plus de :max éléments.',
        'file' => 'Le fichier :attribute ne peut être plus gros que :max kilo-octets.',
        'numeric' => 'La valeur de :attribute ne peut être supérieure à :max.',
        'string' => 'Le texte de :attribute ne peut contenir plus de :max caractères.',
    ],
    'max_digits' => 'ce champ ne doit pas avoir plus de :max chiffres.',
    'mimes' => 'ce champ doit être un fichier de type : :values.',
    'mimetypes' => 'ce champ doit être un fichier de type : :values.',
    'min' => [
        'array' => 'Le tableau :attribute doit avoir au moins :min éléments.',
        'file' => 'Le fichier :attribute doit être au moins de :min kilo-octets.',
        'numeric' => 'La valeur de :attribute doit être au moins de :min.',
        'string' => 'Le texte du champ :attribute doit contenir au moins :min caractères.',
    ],
    'min_digits' => 'ce champ doit avoir au moins :min chiffres.',
    'missing' => 'ce champ doit être manquant.',
    'missing_if' => 'ce champ doit être manquant lorsque :other vaut :value.',
    'missing_unless' => 'ce champ doit être manquant sauf si :other est :value.',
    'missing_with' => 'ce champ doit être manquant lorsque :value est présent.',
    'missing_with_all' => 'ce champ doit être manquant lorsque :values sont présents.',
    'multiple_of' => 'ce champ doit être un multiple de :value.',
    'not_in' => 'ce champ sélectionné n\'est pas valide.',
    'not_regex' => 'ce champ a un format invalide.',
    'numeric' => 'ce champ doit contenir un nombre.',
    'password' => [
        'letters' => 'ce champ doit contenir au moins une lettre.',
        'mixed' => 'ce champ doit contenir au moins une majuscule et une minuscule.',
        'numbers' => 'ce champ doit contenir au moins un chiffre.',
        'symbols' => 'ce champ doit contenir au moins un symbole.',
        'uncompromised' => 'Le :attribute donné est apparu dans une fuite de données. Veuillez choisir un autre :attribute.',
    ],
    'present' => 'ce champ doit être present.',
    'prohibited' => 'ce champ est interdit.',
    'prohibited_if' => 'ce champ est interdit lorsque :other vaut :value.',
    'prohibited_unless' => 'ce champ est interdit sauf si :other est dans :values.',
    'prohibits' => 'ce champ interdit la présence de :other.',
    'regex' => 'Le format du champ :attribute est invalide.',
    'required' => 'ce champ est obligatoire.',
    'required_array_keys' => 'ce champ doit contenir des entrées pour : :values.',
    'required_if' => 'ce champ est obligatoire quand la valeur de :other est :value.',
    'required_if_accepted' => 'ce champ est obligatoire lorsque :other est accepté.',
    'required_unless' => 'ce champ est obligatoire sauf si :other est dans :values.',
    'required_with' => 'ce champ est obligatoire quand :values est présent.',
    'required_with_all' => 'ce champ est obligatoire quand :values est présent.',
    'required_without' => 'ce champ est obligatoire quand :values n\'est pas présent.',
    'required_without_all' => 'ce champ est requis quand aucun de :values n\'est présent.',
    'same' => 'Les champs :attribute et :other doivent être identiques.',
    'size' => [
        'numeric' => 'La valeur de :attribute doit être :size.',
        'file' => 'La taille du fichier de :attribute doit être de :size kilo-octets.',
        'string' => 'Le texte de :attribute doit contenir :size caractères.',
        'array' => 'Le tableau :attribute doit contenir :size éléments.',
    ],
    'starts_with' => 'Le :attribute doit commencer par l\'un des éléments suivants : :values.',
    'string' => 'Le :attribute doit être une chaîne.',
    'timezone' => 'Le :attribute doit être un fuseau horaire valide.',
    'unique' => 'Le :attribute a déjà été pris.',
    'uploaded' => 'Le :attribute n\'a pas pu être téléchargé.',
    'uppercase' => 'Le :attribute doit être en majuscule.',
    'url' => 'Le :attribute doit être une URL valide.',
    'ulid' => 'Le :attribute doit être un ULID valide.',
    'uuid' => 'Le :attribute doit être un UUID valide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        "activity" => "activité",
        "activities" => "activités",
        "address" => "adresse",
        "addresses" => "adresses",
        "age" => "âge",
        "ages" => "âges",
        "amount" => "montant",
        "amounts" => "montants",
        "answer" => "réponse",
        "answers" => "réponses",
        "available" => "disponible",
        "availables" => "disponibles",
        "barcode" => "code-barres",
        "barcodes" => "codes-barres",
        "birth_date" => "date de naissance",
        "brand" => "marque",
        "brands" => "marques",
        "brand_name" => "nom de la marque",
        "buying_price" => "prix d'achat",
        "category" => "catégorie",
        "categories" => "catégories",
        "city" => "ville",
        "cities" => "villes",
        "civility" => "civilité",
        "civilities" => "civilités",
        "comment" => "commentaire",
        "comments" => "commentaires",
        "company" => "entreprise",
        "companies" => "entreprises",
        "confirmed" => "confirmé",
        "confirmed_at" => "confirmé le",
        "content" => "contenu",
        "contents" => "contenus",
        "country" => "pays",
        "countries" => "pays",
        "customer" => "client",
        "customers" => "clients",
        "day" => "jour",
        "days" => "jours",
        "date_end" => "date de fin",
        "date_start" => "date de début",
        "directory" => "dossier",
        "directory_name" => "nom du dossier",
        "directories" => "dossiers",
        "directories_name" => "nom des dossiers",
        "directories_names" => "noms des dossiers",
        "email_banned" => "email banni",
        "email_confirmed" => "email confirmé",
        "email_validated" => "email validé",
        "email_prohibited" => "email inerdit",
        "emails_banned" => "emails bannis",
        "emails_confirmed" => "emails confirmés",
        "emails_validated" => "emails validés",
        "emails_prohibited" => "emails inerdits",
        "file" => "fichier",
        "files" => "fichiers",
        "first_name" => "prénom",
        "first_names" => "prénoms",
        "gender" => "genre",
        "genders" => "genres",
        "hour" => "heure",
        "hours" => "heures",
        "is_active" => "est actif ?",
        "is_banned" => "bannir ?",
        "job" => "métier",
        "jobs" => "métiers",
        "last_name" => "nom de famille",
        "last_names" => "noms de famille",
        "link" => "lien",
        "links" => "liens",
        "month" => "mois",
        "name" => "nom",
        "names" => "noms",
        "office" => "bureau",
        "offices" => "bureaux",
        "other" => "autre",
        "others" => "autres",
        "paid_at" => "payé le",
        "password" => "mot de passe",
        "password_confirmation" => "confirmation du mot de passe",
        "password_current" => "mot de passe actuel",
        "passwords" => "mots de passe",
        "phone" => "téléphone",
        "phones" => "téléphones",
        "postal_code" => "code postal",
        "price" => "prix",
        "published_at" => "publié le",
        "quantity" => "quantité",
        "quantities" => "quantités",
        "rate" => "taux",
        "rates" => "taux",
        "response" => "réponse",
        "responses" => "réponses",
        "role" => "rôle",
        "roles" => "rôles",
        "second" => "seconde",
        "seconds" => "secondes",
        "siren_number" => "numéro de siren",
        "siret_number" => "numéro de siret",
        "size" => "taille",
        "sizes" => "tailles",
        "status" => "statut",
        "statuses" => "statuts",
        "street" => "rue",
        "subfolder" => "sous-dossier",
        "subfolders" => "sous-dossiers",
        "subdirectory" => "sous-dossier",
        "subdirectories" => "sous-dossiers",
        "subject" => "sujet",
        "subjects" => "sujets",
        "summary" => "chapô",
        "summarys" => "chapôs",
        "supplier" => "fournisseur",
        "suppliers" => "fournisseurs",
        "tax" => "taxe",
        "time" => "heure",
        "title" => "titre",
        "titles" => "titres",
        "user" => "utilisateur",
        "users" => "utilisateurs",
        "username" => "pseudo",
        "usernames" => "pseudos",
        "value" => "valeur",
        "values" => "valeurs",
        "vat" => "TVA",
        "vat_rate" => "taux de TVA",
        "website" => "site web",
        "websites" => "sites web",
        "year" => "année",
        "years" => "années",
    ],

];
