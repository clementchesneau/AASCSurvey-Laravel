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

    'accepted' => 'Den :attribute muss akzeptiert werden.',
    'active_url' => 'Den :attribute ist keine gültige URL.',
    'after' => 'Den :attribute muss ein Datum nach den :date.',
    'after_or_equal' => 'Den :attribute muss ein Datum nach oder gleich den :date sein.',
    'alpha' => 'Den :attribute darf nur Buchstaben enthalten.',
    'alpha_dash' => 'Den :attribute darf nur Buchstaben, Zahlen, Bindestriche und Unterstriche enthalten.',
    'alpha_num' => 'Den :attribute darf nur Buchstaben und Zahlen enthalten.',
    'array' => 'Den :attribute muss ein Array sein.',
    'before' => 'Den :attribute muss ein Datum vor den :date sein.',
    'before_or_equal' => 'Den :attribute muss ein Datum vor oder gleich den :date sein.',
    'between' => [
        'numeric' => 'Den :attribute muss zwischen :min und :max liegen.',
        'file' => 'Den :attribute muss zwischen :min und :max kilobytes liegen.',
        'string' => 'Den :attribute muss zwischen :min und :max characters liegen.',
        'array' => 'Den :attribute muss zwischen :min und :max items liegen.',
    ],
    'boolean' => 'Den :attribute Feld muss wahr oder falsch sein.',
    'confirmed' => 'Die Bestätigung des :attribute stimmt nicht überein.',
    'date' => 'Den :attribute ist kein gültiges Datum.',
    'date_equals' => 'Den :attribute muss ein Datum gleich :date sein.',
    'date_format' => 'Den :attribute stimmt nicht mit dem Format :format  überein.',
    'different' => 'Den :attribute und :other muss anders sein.',
    'digits' => 'Den :attribute muss :digits digits sein.',
    'digits_between' => 'Den :attribute muss zwischen :min und :max digits sein.',
    'dimensions' => 'Den :attribute hat ungültige Bildabmessungen.',
    'distinct' => 'Den :attribute Feld hat einen doppelten Wert.',
    'email' => 'Den :attribute muss eine gültige E-Mail-Adresse sein.',
    'ends_with' => 'The :attribute muss mit einem der folgenden :value werden',
    'exists' => 'Die gewählte :attribute ist ungültig.',
    'file' => 'Den :attribute muss eine Datei sein.',
    'filled' => 'Den :attribute Feld muss einen Wert haben.',
    'gt' => [
        'numeric' => 'Den :attribute muss größer als :value sein.',
        'file' => 'The :attribute muss größer alsn :value kilobytes sein.',
        'string' => 'The :attribute muss größer als :value characters sein.',
        'array' => 'The :attribute muss größer als :value items sein.',
    ],
    'gte' => [
        'numeric' => 'Den :attribute muss größer oder gleich als :value sein.',
        'file' => 'Den :attribute muss größer oder gleich als :value kilobytes sein.',
        'string' => 'Den :attribute muss größer oder gleich als :value characters sein.',
        'array' => 'Den :attribute muss :value Gegenstände oder mehr haben.',
    ],
    'image' => 'Den :attribute muss ein Bild sein.',
    'in' => 'Den ausgewählt :attribute ist ungültig.',
    'in_array' => 'Den :attribute Feld existiert nicht in :other.',
    'integer' => 'Den :attribute muss eine ganze Zahl sein.',
    'ip' => 'Den :attribute muss eine gültige IP-Adresse sein.',
    'ipv4' => 'Den :attribute muss eine gültige IPv4 address sein.',
    'ipv6' => 'Den :attribute muss eine gültige IPv6-Adresse sein.',
    'json' => 'Den :attribute muss eine gültige JSON-Zeichenfolge sein.',
    'lt' => [
        'numeric' => 'Den :attribute muss kleiner als :value sein.',
        'file' => 'Den :attribute muss kleiner als :value kilobytes sein.',
        'string' => 'Den :attribute muss kleiner als :value characters sein.',
        'array' => 'Den :attribute muss kleiner als :value items sein.',
    ],
    'lte' => [
        'numeric' => 'Den :attribute muss kleiner oder gleich :value sein.',
        'file' => 'Den :attribute muss kleiner oder gleich :value kilobytes sein.',
        'string' => 'Den :attribute muss kleiner oder gleich :value characters sein.',
        'array' => 'Den :attribute muss kleiner oder gleich :value items sein.',
    ],
    'max' => [
        'numeric' => 'Den :attribute darf nicht größer als :max sein.',
        'file' => 'Den :attribute darf nicht größer als :max kilobytes sein.',
        'string' => 'Den :attribute darf nicht größer als :max characters sein.',
        'array' => 'Den :attribute darf nicht größer als :max items sein.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'Den :attribute muss mindestens als :min sein.',
        'file' => 'Den :attribute muss mindestens als :min kilobytes sein.',
        'string' => 'Den :attribute muss mindestens als :min characters sein.',
        'array' => 'Den :attribute muss mindestens als :min items sein.',
    ],
    'not_in' => 'Den :attribute ausgewählt ist ungültig.',
    'not_regex' => 'Den :attribute Format ist ungültig.',
    'numeric' => 'Den :attribute muss eine Nummer sein.',
    'password' => 'Den Passwort ist inkorrekt.',
    'present' => 'Den :attribute Feld muss vorhanden sein.',
    'regex' => 'Den :attribute Format ist ungültig.',
    'required' => 'Den :attribute Feld ist erforderlich.',
    'required_if' => 'Den :attribute Feld ist erforderlich, wenn :other ist :value.',
    'required_unless' => 'Den :attribute Feld ist erforderlich, wenn :other ist in :values.',
    'required_with' => 'Den :attribute Feld ist erforderlich, wenn :values ist vorhanden.',
    'required_with_all' => 'Den :attribute Feld ist erforderlich wenn :values sind vorhanden.',
    'required_without' => 'Den :attribute Feld ist erforderlich wenn :values ist nicht present.',
    'required_without_all' => 'Den :attribute Feld is erforderlich wenn kein von diesem :values sind vorhanden.',
    'same' => 'Den :attribute und :other muss match.',
    'size' => [
        'numeric' => 'Den :attribute muss :size sein.',
        'file' => 'Den :attribute muss :size kilobytes sein.',
        'string' => 'Den :attribute muss :size characters sein.',
        'array' => 'Den :attribute muss :size Artikel enthalten.',
    ],
    'starts_with' => 'Den :attribute muss mit einem der folgenden: :values beginnen.',
    'string' => 'Den :attribute muss eine Zeichenfolge sein.',
    'timezone' => 'Den :attribute muss eine gültige Zone sein.',
    'unique' => 'Den :attribute wurde bereits genommen.',
    'uploaded' => 'Den :attribute Fehler beim Hochladen.',
    'url' => 'Den :attribute Format ist ungültig.',
    'uuid' => 'Den :attribute muss eine gültige UUID sein.',

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
            'rule-name' => 'benutzerdefinierte Nachricht',
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
