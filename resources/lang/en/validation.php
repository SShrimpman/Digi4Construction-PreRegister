<?php

return [
    'accepted' => 'O  :attribute deve ser aceito.',
    'accepted_if' => 'O  :attribute deve ser aceito quando :other for :value.',
    'active_url' => 'O  :attribute não é uma URL válida.',
    'after' => 'O  :attribute deve ser uma data posterior a :date.',
    'after_or_equal' => 'O  :attribute deve ser uma data posterior ou igual a :date.',
    'alpha' => 'O  :attribute deve conter apenas letras.',
    'alpha_dash' => 'O  :attribute deve conter apenas letras, números, traços e sublinhados.',
    'alpha_num' => 'O  :attribute deve conter apenas letras e números.',
    'array' => 'O  :attribute deve ser um array.',
    'before' => 'O  :attribute deve ser uma data anterior a :date.',
    'before_or_equal' => 'O  :attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O  :attribute deve estar entre :min e :max.',
        'file' => 'O  :attribute deve ter entre :min e :max kilobytes.',
        'string' => 'O  :attribute deve ter entre :min e :max caracteres.',
        'array' => 'O  :attribute deve ter entre :min e :max itens.',
    ],
    'boolean' => 'O  :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'A confirmação do  :attribute não coincide.',
    'current_password' => 'A senha está incorreta.',
    'date' => 'O  :attribute não é uma data válida.',
    'date_equals' => 'O  :attribute deve ser uma data igual a :date.',
    'date_format' => 'O  :attribute não corresponde ao formato :format.',
    'declined' => 'O  :attribute deve ser recusado.',
    'declined_if' => 'O  :attribute deve ser recusado quando :other for :value.',
    'different' => 'Os s :attribute e :other devem ser diferentes.',
    'digits' => 'O  :attribute deve ter :digits dígitos.',
    'digits_between' => 'O  :attribute deve ter entre :min e :max dígitos.',
    'dimensions' => 'O  :attribute possui dimensões de imagem inválidas.',
    'distinct' => 'O  :attribute possui um valor duplicado.',
    'email' => 'O  :attribute deve ser um endereço de e-mail válido.',
    'ends_with' => 'O  :attribute deve terminar com um dos seguintes valores: :values.',
    'enum' => 'O valor selecionado para o  :attribute é inválido.',
    'exists' => 'O valor selecionado para o  :attribute é inválido.',
    'file' => 'O  :attribute deve ser um arquivo.',
    'filled' => 'O  :attribute deve ter um valor.',
    'gt' => [
        'numeric' => 'O  :attribute deve ser maior que :value.',
        'file' => 'O  :attribute deve ser maior que :value kilobytes.',
        'string' => 'O  :attribute deve ser maior que :value caracteres.',
        'array' => 'O  :attribute deve ter mais de :value itens.',
    ],
    'gte' => [
        'numeric' => 'O  :attribute deve ser maior ou igual a :value.',
        'file' => 'O  :attribute deve ser maior ou igual a :value kilobytes.',
        'string' => 'O  :attribute deve ser maior ou igual a :value caracteres.',
        'array' => 'O  :attribute deve ter :value itens ou mais.',
    ],
    'image' => 'O  :attribute deve ser uma imagem.',
    'in' => 'O valor selecionado para o  :attribute é inválido.',
    'in_array' => 'O  :attribute não existe em :other.',
    'integer' => 'O  :attribute deve ser um número inteiro.',
    'ip' => 'O  :attribute deve ser um endereço de IP válido.',
    'ipv4' => 'O  :attribute deve ser um endereço de IPv4 válido.',
    'ipv6' => 'O  :attribute deve ser um endereço de IPv6 válido.',
    'json' => 'O  :attribute deve ser uma string JSON válida.',
    'lt' => [
        'numeric' => 'O  :attribute deve ser menor que :value.',
        'file' => 'O  :attribute deve ser menor que :value kilobytes.',
        'string' => 'O  :attribute deve ser menor que :value caracteres.',
        'array' => 'O  :attribute deve ter menos de :value itens.',
    ],
    'lte' => [
        'numeric' => 'O  :attribute deve ser menor ou igual a :value.',
        'file' => 'O  :attribute deve ser menor ou igual a :value kilobytes.',
        'string' => 'O  :attribute deve ser menor ou igual a :value caracteres.',
        'array' => 'O  :attribute não deve ter mais que :value itens.',
    ],
    'mac_address' => 'O  :attribute deve ser um endereço MAC válido.',
    'max' => [
        'numeric' => 'O  :attribute não deve ser maior que :max.',
        'file' => 'O  :attribute não deve ter mais que :max kilobytes.',
        'string' => 'O  :attribute não deve ter mais que :max caracteres.',
        'array' => 'O  :attribute não deve ter mais que :max itens.',
    ],
    'mimes' => 'O  :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O  :attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O  :attribute deve ser no mínimo :min.',
        'file' => 'O  :attribute deve ter no mínimo :min kilobytes.',
        'string' => 'O  :attribute deve ter no mínimo :min caracteres.',
        'array' => 'O  :attribute deve ter pelo menos :min itens.',
    ],
    'multiple_of' => 'O  :attribute deve ser um múltiplo de :value.',
    'not_in' => 'O valor selecionado para o  :attribute é inválido.',
    'not_regex' => 'O formato do  :attribute é inválido.',
    'numeric' => 'O  :attribute deve ser um número.',
    'password' => 'A senha está incorreta.',
    'present' => 'O  :attribute deve estar presente.',
    'prohibited' => 'O  :attribute é proibido.',
    'prohibited_if' => 'O  :attribute é proibido quando :other for :value.',
    'prohibited_unless' => 'O  :attribute é proibido a menos que :other esteja em :values.',
    'prohibits' => 'O  :attribute proíbe que :other esteja presente.',
    'regex' => 'O formato do  :attribute é inválido.',
    'required' => 'O  :attribute é obrigatório.',
    'required_array_keys' => 'O  :attribute deve conter entradas para: :values.',
    'required_if' => 'O  :attribute é obrigatório quando :other for :value.',
    'required_unless' => 'O  :attribute é obrigatório a menos que :other esteja em :values.',
    'required_with' => 'O  :attribute é obrigatório quando :values estiver presente.',
    'required_with_all' => 'O  :attribute é obrigatório quando :values estiverem presentes.',
    'required_without' => 'O  :attribute é obrigatório quando :values não estiver presente.',
    'required_without_all' => 'O  :attribute é obrigatório quando nenhum dos valores :values estiver presente.',
    'same' => 'O  :attribute e :other devem ser iguais.',
    'size' => [
        'numeric' => 'O  :attribute deve ser :size.',
        'file' => 'O  :attribute deve ter :size kilobytes.',
        'string' => 'O  :attribute deve ter :size caracteres.',
        'array' => 'O  :attribute deve conter :size itens.',
    ],
    'starts_with' => 'O  :attribute deve começar com um dos seguintes valores: :values.',
    'string' => 'O  :attribute deve ser uma string.',
    'timezone' => 'O  :attribute deve ser uma timezone válida.',
    'unique' => 'O  :attribute já foi utilizado.',
    'uploaded' => 'Falha ao carregar o arquivo :attribute.',
    'url' => 'O formato do  :attribute é inválido.',
    'uuid' => 'O  :attribute deve ser um UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Aqui você pode especificar mensagens de validação personalizadas para os atributos
    | usando a convenção "attribute.rule" para nomear as linhas. Isso nos ajuda a
    | especificar rapidamente uma mensagem personalizada específica para uma regra de atributo.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'mensagem-personalizada',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | As seguintes linhas de idioma são usadas para substituir nossos marcadores de posição de atributo
    | por algo mais legível para o leitor, como "Endereço de E-mail" em vez de "email".
    | Isso ajuda a tornar nossa mensagem mais expressiva.
    |
    */

    'attributes' => [
        'name' => 'Nome',
        'email' => 'E-mail',
        'company' => 'Empresa',
        'password' => 'Palavra-Passe',
    ],

];
