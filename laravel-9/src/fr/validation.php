<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Le champ :attribute doit être accepté.',
    'accepted_if'          => 'L\' :attribut doit être accepté lorsque :other vaut :value.',
    'active_url'           => 'Le champ :attribute n\'est pas une URL valide.',
    'after'                => 'Le champ :attribute doit être une date postérieure au :date.',
    'after_or_equal'       => 'Le champ :attribute doit être une date après ou égale à :date.',
    'alpha'                => 'Le champ :attribute doit seulement contenir des lettres.',
    'alpha_dash'           => 'Le champ :attribute doit seulement contenir des lettres, des chiffres et des tirets.',
    'alpha_num'            => 'Le champ :attribute doit seulement contenir des chiffres et des lettres.',
    'array'                => 'Le champ :attribute doit être un tableau.',
    'before'               => 'Le champ :attribute doit être une date antérieure au :date.',
    'before_or_equal'      => 'Le champ :attribute: doit être une date avant ou égale à :date.',
    'between'              => [
        'numeric' => 'La valeur de :attribute doit être comprise entre :min et :max.',
        'file'    => 'Le fichier :attribute doit avoir une taille entre :min et :max kilo-octets.',
        'string'  => 'Le texte :attribute doit avoir entre :min et :max caractères.',
        'array'   => 'Le tableau :attribute doit avoir entre :min et :max éléments.',
    ],
    'boolean'              => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed'            => 'Le champ de confirmation :attribute ne correspond pas.',
    'current_password'     => 'Le mot de passe est incorrect.',
    'date'                 => 'Le champ :attribute n\'est pas une date valide.',
    'date_equals'          => 'Le champ :attribute doit être une date égale à :date.',
    'date_format'          => 'Le champ :attribute ne correspond pas au format :format.',
    'declined'             => 'Le champ :attribute doit être refusé.',
    'declined_if'          => 'Le champ :attribute doit être refusé lorsque :other vaut :value.',
    'different'            => 'Les champs :attribute et :other doivent être différents.',
    'digits'               => 'Le champ :attribute doit avoir :digits chiffres.',
    'digits_between'       => 'Le champ :attribute doit avoir entre :min and :max chiffres.',
    'dimensions'           => 'Le champ :attribute a des dimensions d\'image non valides.',
    'distinct'             => 'Le champ a une valeur en double.',
    'email'                => "Le champ :attribute doit être une adresse email valide.",
    'ends_with'            => 'Le champ :attribute doit se terminer par l\'une des valeurs suivantes : :values.',
    'enum'                 => 'Le champ :attribute sélectionné est invalide.',
    'exists'               => 'Le champ :attribute sélectionné est invalide.',
    'file'                 => 'Le champ :attribute doit être un fichier.',
    'filled'               => "Le champ :attribute est obligatoire.",
    'gt' => [
        'numeric' => 'Le champ :attribute doit être supérieur à :value.',
        'file'    => 'Le champ :attribute doit être supérieur à :value kilobytes.',
        'string'  => 'Le champ :attribute doit être supérieur à :value caractères.',
        'array'   => 'Le champ :attribute doit avoir plus de :value éléments.',
    ],
    'gte' => [
        'numeric' => 'Le champ :attribute doit être supérieur ou égal :value.',
        'file'    => 'Le champ :attribute doit être supérieur ou égal :value kilobytes.',
        'string'  => 'Le champ :attribute doit être supérieur ou égal :value caractères.',
        'array'   => 'Le champ :attribute doit avoir :value éléments ou plus.',
    ],
    'image'                => 'Le champ :attribute doit être une image.',
    'in'                   => 'Le champ :attribute est invalide.',
    'in_array'             => 'Le champ :attribute n\'existe pas dans :other.',
    'integer'              => 'Le champ :attribute doit être un entier (un nombre sans virgule).',
    'ip'                   => 'Le champ :attribute doit être une adresse IP valide.',
    'ipv4'                 => 'Le champ :attribute doit être une adresse IPv4 valide.',
    'ipv6'                 => 'Le champ :attribute doit être une adresse IPv6 valide.',
    'json'                 => 'Le champ :attribute doit être une chaîne JSON valide.',
    'lt' => [
        'numeric' => 'Le champ :attribute doit être inférieur à :value.',
        'file'    => 'Le champ :attribute doit être inférieur à :value kilobytes.',
        'string'  => 'Le champ :attribute doit être inférieur à :value caractères.',
        'array'   => 'Le champ :attribute doit avoir moins de :value éléments.',
    ],
    'lte' => [
        'numeric' => 'Le champ :attribute doit être inférieur à or equal :value.',
        'file'    => 'Le champ :attribute doit être inférieur à or equal :value kilobytes.',
        'string'  => 'Le champ :attribute doit être inférieur à or equal :value caractères.',
        'array'   => 'Le champ :attribute ne doit pas avoir plus de :value éléments.',
    ],
    'mac_address' => 'Le champ :attribute doit être une adresse MAC valide.',
    "max"  => [
        'numeric' => 'La valeur de :attribute ne peut être supérieure à :max.',
        'file'    => 'Le fichier :attribute ne peut être plus gros que :max kilo-octets.',
        'string'  => 'Le texte de :attribute ne peut contenir plus de :max caractères.',
        'array'   => 'Le tableau :attribute ne peut avoir plus de :max éléments.',
    ],
    'mimes'                => 'Le champ :attribute doit être un fichier de type : :values.',
    'mimetypes'            => 'Le champ :attribute doit être un fichier de type : :values.',
    'min' => [
        'numeric' => 'La valeur de :attribute doit être au moins de :min.',
        'file'    => 'Le fichier :attribute doit être au moins de :min kilo-octets.',
        'string'  => 'Le texte du champ :attribute doit contenir au moins :min caractères.',
        'array'   => 'Le tableau :attribute doit avoir au moins :min éléments.',
    ],
    'multiple_of'          => 'Le champ :attribute doit être un multiple de :value.',
    'not_in'               => 'Le champ :attribute sélectionné n\'est pas valide.',
    'not_regex'            => 'Le champ :attribute a un format invalide.',
    'numeric'              => 'Le champ :attribute doit contenir un nombre.',
    'password'             => 'Le mot de passe est incorrect.',
    'present'              => 'Le champ :attribute doit être present.',
    'prohibited'           => 'Le champ :attribute est interdit.',
    'prohibited_if'        => 'Le champ :attribute est interdit lorsque :other vaut :value.',
    'prohibited_unless'    => 'Le champ :attribute est interdit sauf si :other est dans :values.',
    'prohibits'            => 'Le champ :attribute interdit la présence de :other.',
    'regex'                => 'Le format du champ :attribute est invalide.',
    'required'             => 'Le champ :attribute est obligatoire.',
    'required_array_keys'  => 'Le champ :attribute doit contenir des entrées pour : :values.',
    'required_if'          => 'Le champ :attribute est obligatoire quand la valeur de :other est :value.',
    'required_unless'      => 'Le champ :attribute est obligatoire sauf si :other est dans :values.',
    'required_with'        => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_with_all'    => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_without'     => 'Le champ :attribute est obligatoire quand :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est requis quand aucun de :values n\'est présent.',
    'same'                 => 'Les champs :attribute et :other doivent être identiques.',
    'size'                 => [
        'numeric' => 'La valeur de :attribute doit être :size.',
        'file'    => 'La taille du fichier de :attribute doit être de :size kilo-octets.',
        'string'  => 'Le texte de :attribute doit contenir :size caractères.',
        'array'   => 'Le tableau :attribute doit contenir :size éléments.',
    ],
    'starts_with'          => 'Le champ :attribute doit commencer par l\'un des éléments suivants : :values.',
    'string'               => 'Le champ :attribute doit être une chaîne de caractères.',
    'timezone'             => 'Le champ :attribute doit être un fuseau horaire valide.',
    'unique'               => 'La valeur du champ :attribute est déjà utilisée.',
    'uploaded'             => 'Le champ :attribute a échoué à télécharger.',
    'url'                  => 'Le format de l\'URL de :attribute n\'est pas valide.',
    'uuid'                 => 'Le champ :attribute doit être un UUID valide.',

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

    'attributes' => [],

];
