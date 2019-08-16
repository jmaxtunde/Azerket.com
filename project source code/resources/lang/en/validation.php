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

    'accepted'             => ':attribute doit être acceptable.',
    'active_url'           => ':attribute n\'est pas un lien valable.',
    'after'                => ':attribute doit être un date posterieur à :date.',
    'after_or_equal'       => ':attribute doit être un date posterieur ou égale à must :date.',
    'alpha'                => ' :attribute ne doit contenir que des lettres.',
    'alpha_dash'           => ' :attribute ne doit contenir que des lettres, nombres et caractères spéciaux.',
    'alpha_num'            => ' :attribute ne doit contenir que des lettres, nombres.',
    'array'                => ' :attribute doit être un tableau.',
    'before'               => ' :attribute must be a date before :date.',
    'before_or_equal'      => ' :attribute doit être une date avant ou après :date.',
    'between'              => [
        'numeric' => ' :attribute doit être compris entre :min et :max.',
        'file'    => ' :attribute doit être compris entre :min et :max kilobytes.',
        'string'  => ' :attribute doit être compris entre :min et :max characters.',
        'array'   => ' :attribute doit être compris entre :min et :max items.',
    ],
    'boolean'              => ' :attribute doit être vrai ou faux.',
    'confirmed'            => 'Le nouveau mot de passe et la confirmation sont différents.',
    'date'                 => ' :attribute n\est pas une date valable.',
    'date_format'          => ' :attribute ne correspond pas aux format :format.',
    'different'            => ' :attribute et :other doivent être different.',
    'digits'               => ' :attribute doit être :digits entier.',
    'digits_between'       => ' :attribute doit être compris entre :min et :max .',
    'dimensions'           => ' :attribute dimension invalide.',
    'distinct'             => ' :attribute a une valeur repliquée.',
    'email'                => ' :attribute email non valide.',
    'exists'               => 'l\'option selectionnée :attribute est invalide.',
    'file'                 => ' :attribute doit être un fichier.',
    'filled'               => ' :attribute field doit avoir une valeur.',
    'image'                => ' :attribute doit être une image.',
    'in'                   => 'l\'option selectionnée :attribute est invalide.',
    'in_array'             => ' :attribute le champs n\'existe pas :other.',
    'integer'              => ' :attribute doit être entier.',
    'ip'                   => ' :attribute doit être entier une adresse IP valide.',
    'ipv4'                 => ' :attribute doit être entier une adresse IPv4 valide.',
    'ipv6'                 => ' :attribute doit être entier une adresse IPv6 valide.',
    'json'                 => ' :attribute doit être entier une adresse JSON string valide',
    'max'                  => [
        'numeric' => ' :attribute doit pas être plus grand que :max.',
        'file'    => 'La taille de la photo doit être inférieur à 1 Mo',
        'string'  => ' :attribute doit pas être plus grand que :max characters.',
        'array'   => ' :attribute ne doit pas avoir plus  que :max items.',
    ],
    'mimes'                => ' :attribute doit être un fichier de type: :values.',
    'mimetypes'            => ' :attribute doit être un fichier de type: :values.',
    'min'                  => [
        'numeric' => ' :attribute doit avoir au moin :min.',
        'file'    => ' :attribute doit avoir au moin :min kilobytes.',
        'string'  => ' :attribute doit avoir au moin :min characters.',
        'array'   => ' :attribute doit avoir au moin :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => ' :attribute doit être un nombre.',
    'present'              => ' :attribute le champ doit être présent.',
    'regex'                => ' :attribute le format est invalide.',
    'required'             => ' :attribute est nécéssaire.',
    'required_if'          => ' :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute doit être :size.',
        'file'    => ' :attribute doit être :size kilobytes.',
        'string'  => ' :attribute doit être :size characters.',
        'array'   => ' :attribute doit contenir :size items.',
    ],
    'string'               => ' :attribute doit être une chaine de caractères.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => ':attribute ,cette valeur existe déja.',
    'uploaded'             => ' :attribute ,le chargement du fichier a échouer. La taille du fichier doit être inférieur ou égal 1Mo et l\'extension doit être jpg,jpeg ou png.',
    'url'                  => ' :attribute format invalide.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
