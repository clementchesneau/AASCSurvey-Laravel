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

    'accepted' => ':attribute doit être accepté.',
    'active_url' => ':attribute n\'est pas un URL valide.',
    'after' => ':attribute doit être à une date après le :date.',
    'after_or_equal' => ':attribute doit être à une date après ou égale au :date.',
    'alpha' => 'L\':attribute doit contenir certaines lettres.',
    'alpha_dash' => ':attribute doit que contenir des lettres, des chiffres, des tirets et des underscores.',
    'alpha_num' => ':attribute doit que contenir des lettres, des chiffres.',
    'array' => ':attribute doit être une liste.',
    'before' => ':attribute doit être une date avant le :date.',
    'before_or_equal' => ':attribute doit être une date avant ou égale au :date.',
    'between' => [
        'numeric' => ':attribute doit être entre :min et :max.',
        'file' => ':attribute doit être entre :min et :max kilobytes.',
        'string' => ':attribute doit être entre :min et :max caractères.',
        'array' => ':attribute doit être entre :min et :max items.',
    ],
    'boolean' => ':attribute doit être vrai ou faux.',
    'confirmed' => ':attribute confirmé ne marche pas.',
    'date' => ':attribute n\'est pas une date valide.',
    'date_equals' => ':attribute doit être une date égale à :date.',
    'date_format' => ':attribute n\'a pas le format :format.',
    'different' => ':attribute et :other doit être différent.',
    'digits' => ':attribute doit être de :digits chiffres.',
    'digits_between' => ':attribute doit être entre :min et :max chiffres.',
    'dimensions' => ':attribute n\'a pas les dimensions valides.',
    'distinct' => ':attribute a une valeur duppliqué.',
    'email' => ':attribute doit être une adresse mail valide.',
    'ends_with' => ':attribute doit se terminer avec une des valeurs suivantes :values.',
    'exists' => ':attribute sélectionné est invalide.',
    'file' => ':attribute doit être une fichier.',
    'filled' => ':attribute doit avoir une valeur.',
    'gt' => [
        'numeric' =>':attribute doit être plus grand que :value.',
        'file' => ':attribute doit être plus grand que :value kilobytes.',
        'string' => ':attribute doit être plus grand que :value caractères.',
        'array' => ':attribute doit être plus grand que :value items.',
    ],
    'gte' => [
        'numeric' => ':attribute doit être plus grand ou égale à :value.',
        'file' => ':attribute doit être plus grand ou égale à :value kilobytes.',
        'string' => ':attribute doit être plus grand ou égale à :value caractères.',
        'array' => ':attribute doit avoir :value items ou plus.',
    ],
    'image' => ':attribute doit être une image.',
    'in' => ':attribute sélectionné est invalide.',
    'in_array' => ':attribute n\'existe pas dans :other.',
    'integer' => ':attribute doit être un entier.',
    'ip' => ':attribute doit avoir une adresse IP valide.',
    'ipv4' => ':attribute doit avoir une adresse IPV4 valide.',
    'ipv6' => ':attribute doit avoir une adresse IPV6 valide.',
    'json' => ':attribute doit être une chaîne JSON valide.',
    'lt' => [
        'numeric' => ':attribute doit être plus petit que :value.',
        'file' => ':attribute doit être plus petit que :value kilobytes.',
        'string' => ':attribute doit être plus petit que :value caractères.',
        'array' => ':attribute doit avoir moins de :value items.',
    ],
    'lte' => [
        'numeric' => ':attribute doit être avoir autant ou moins de :value.',
        'file' => ':attribute doit être avoir autant ou moins de :value kilobytes.',
        'string' => ':attribute doit être avoir autant ou moins de :value caractères.',
        'array' => ':attribute doit avoir autant ou moins de :value items.',
    ],
    'max' => [
        'numeric' => ':attribute ne doit pas dépasser :max.',
        'file' => ':attribute ne doit pas dépasser :max kilobytes.',
        'string' => ':attribute ne doit pas dépasser :max caractères.',
        'array' => ':attribute ne doit pas dépasser :max items.',
    ],
    'mimes' => ':attribute doit être un fichier de type: :values.',
    'mimetypes' => ':attribute doit être un fichier de type: :values.',
    'min' => [
        'numeric' => ':attribute doit être plus grand que :min.',
        'file' => ':attribute doit être plus grand que :min kilobytes.',
        'string' => ':attribute doit être plus grand que :min caractères.',
        'array' => ':attribute doit avoir au moins :min items.',
    ],
    'not_in' => ':attribute sélectionné est invalide.',
    'not_regex' => 'Le format de L\':attribute est invalide.',
    'numeric' => ':attribute doit être un chiffre.',
    'password' => 'Le mot de passe est incorrecte.',
    'present' => ':attribute doit être présent.',
    'regex' => 'Le format de :attribute est invalide.',
    'required' => 'Le champ de :attribute est requis.',
    'required_if' => 'Le champ de :attribute est requis quand :other est :value.',
    'required_unless' => 'Le champ de :attribute est requis sauf si :other est dans :values.',
    'required_with' => 'Le champ de :attribute est requis quand :values est présent.',
    'required_with_all' => 'Le champ de :attribute est requis quand :values sont présents.',
    'required_without' => 'Le champ de :attribute est requis quand :values n\'est pas présent.',
    'required_without_all' => 'Le champ de :attribute est requis quand :values ne sont pas présents.',
    'same' => 'L\':attribute et :other doit être les mêmes.',
    'size' => [
        'numeric' => ':attribute doit être de:size.',
        'file' => ':attribute doit être de :size kilobytes.',
        'string' => ':attribute doit être de :size caractères.',
        'array' => ':attribute doit contenir :size items.',
    ],
    'starts_with' => ':attribute doit commencer avec :values.',
    'string' => ':attribute doit être une phrase.',
    'timezone' => ':attribute doit être une zone valide.',
    'unique' => ':attribute a déjà été utilisé.',
    'uploaded' => ':attribute ne s\'est pas téléchargé.',
    'url' => 'Le format de :attribute est invalide.',
    'uuid' => ':attribute doit avoir un UUID valide.',

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
