<?php

declare(strict_types=1);

return [

    /*ORIGEN*/
    'origin' => [
        'dice_type' => '1d8',
        'results' => [
            1 => [
                'description' => 'Accidental: El puesto comercial se creó por accidente, por ejemplo, después de que se averiase o perdiese una caravana. Las medidas que se tomaron para remediar el accidente acabaron dando lugar al puesto comercial.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => null,
            ],
            2 => [
                'description' => 'Empresa comercial: Un emprendedor adinerado decidió fundar un puesto comercial.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => null,
            ],
            3 => [
                'description' => 'Cruce de caminos: El puesto comercial está en la intersección de varias de las principales rutas de comercio.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => null,
            ],
            4 => [
                'description' => 'Puesto militar: El puesto comercial se construyó en las ruinas de una antigua fortaleza o torre de guardia. Estas estructuras llevaban mucho tiempo abandonadas o los habitantes de la zona decidieron reutilizarlas.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => null,
            ],
            5 => [
                'description' => 'Tierra de nadie: El puesto comercial se ha establecido en una zona neutral, donde los ejércitos pueden comprar mercancías sin adentrarse en terreno enemigo.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => null,
            ],
            6 => [
                'description' => 'Nativo: Alguien de la zona fundó el puesto comercial tras considerar que el comercio con la gente que pasaba por la zona tenía potencial.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => null,
            ],
            7 => [
                'description' => 'Parada nocturna: Originalmente el puesto comercial era una casa de gran tamaño que ofrecía estancias de una noche a viajeros cansados. El lugar pronto evolucionó como respuesta a la creciente demanda de alojamiento.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => null,
            ],
            8 => [
                'description' => 'Experto en naturaleza: El puesto comercial fue fundado por un trampero, un cazador o un guía, que estableció un campamento para ayudar a quienes viajasen por la zona.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => null,
            ],
        ],
        'sub_tables' => null,
    ],

    /*ESPECIALIDAD*/
    'specialty' => [
        'dice_type' => '1d6',
        'results' => [
            1 => [
                'description' => 'Métodos de envío atípicos. A este puesto comercial se lo conoce por su forma única y efectiva de transportar mercancías.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => null,
            ],
            2 => [
                'description' => 'Comida y bebida. Al puesto comercial se lo conoce por [d6]:',
                'special' => null,
                'table_modifications' => null,
                'sub_table' => 'trading_post_speciality_2',
            ],
            3 => [
                'description' => 'Hospitalidad. La posada principal es de gran calidad y ofrece un servicio excelente, habitaciones cómodas y buena comida.',
                'special' => 'Si haces una tirada para saber la calidad de la posada utilizando la tabla de Calidad del paso 3, ignora los resultados que le atribuirían la calidad «pobre».',
                'sub_table' => null,
                'table_modifications' => null,
            ],
            4 => [
                'description' => 'Información. Este puesto comercial es famoso por ser una buena fuente de información. Aunque las personas aquí no lo saben todo, existen muchas posibilidades de encontrarse con rumores verídicos, sabiduría tradicional, noticias o algún detalle interesante.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => null,
            ],
            5 => [
                'description' => 'Contactos. El puesto comercial es famoso por contar con gente que sabe encontrar cosas. Si no tienen (o no saben) lo que estás buscando, te pueden recomendar a alguien.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => null,
            ],
            6 => [
                'description' => 'Contratistas sin escrúpulos. Este puesto comercial es famoso por tener gente que puede hacer cualquier cosa si hay suficiente dinero de por medio.',
                'special' => 'Lugar gratuito (servicio): Mercenarios [tira 1d10]:',
                'sub_table' => 'trading_post_speciality_6',
                'table_modifications' => null,
            ],
        ],
        'sub_tables' => [
            'trading_post_speciality_2' => [
                'dice_type' => '1d6',
                'results' => [
                    1 => 'Una comida excepcional',
                    2 => 'Una comida excepcional',
                    3 => 'Una comida excepcional',
                    4 => 'Gran surtido de bebidas variadas y de buena calidad',
                    5 => 'Gran surtido de bebidas variadas y de buena calidad',
                    6 => 'Gran surtido de bebidas variadas y de buena calidad',
                ],
            ],
            'trading_post_speciality_6' => [
                'dice_type' => '1d10',
                'results' => [
                    1 => 'Brutos y matones',
                    2 => 'Agentes clandestinos',
                    3 => 'Arqueros y honderos',
                    4 => 'Escribas y administrativos',
                    5 => 'Guías y rastreadores',
                    6 => 'Caravaneros y monturas',
                    7 => 'Académicos arcanos',
                    8 => 'Mercenarios mágicos',
                    9 => 'Orientación sacerdotal',
                    10 => 'Manos de la divinidad',
                ],
            ],
        ],
    ],

    /*ANTIGÜEDAD*/
    'age' => [
        'dice_type' => '1d20',
        'results' => [
            1 => [
                'description' => 'Reciente. El puesto comercial se ha establecido hace menos de un año.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => -1,
                ],
            ],
            2 => [
                'description' => 'Reciente. El puesto comercial se ha establecido hace menos de un año.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => -1,
                ],
            ],
            3 => [
                'description' => 'Reciente. El puesto comercial se ha establecido hace menos de un año.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => -1,
                ],
            ],
            4 => [
                'description' => 'Asentado. El puesto comercial lleva abierto al menos un par de años.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 0,
                ],
            ],
            5 => [
                'description' => 'Asentado. El puesto comercial lleva abierto al menos un par de años.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 0,
                ],
            ],
            6 => [
                'description' => 'Asentado. El puesto comercial lleva abierto al menos un par de años.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 0,
                ],
            ],
            7 => [
                'description' => 'Asentado. El puesto comercial lleva abierto al menos un par de años.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 0,
                ],
            ],
            8 => [
                'description' => 'Asentado. El puesto comercial lleva abierto al menos un par de años.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 0,
                ],
            ],
            9 => [
                'description' => 'Longevo. El puesto comercial se construyó hace décadas.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 1,
                ],
            ],
            10 => [
                'description' => 'Longevo. El puesto comercial se construyó hace décadas.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 1,
                ],
            ],
            11 => [
                'description' => 'Longevo. El puesto comercial se construyó hace décadas.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 1,
                ],
            ],
            12 => [
                'description' => 'Longevo. El puesto comercial se construyó hace décadas.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 1,
                ],
            ],
            13 => [
                'description' => 'Longevo. El puesto comercial se construyó hace décadas.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 1,
                ],
            ],
            14 => [
                'description' => 'Viejo. El puesto comercial se construyó hace unos cien años.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 2,
                ],
            ],
            15 => [
                'description' => 'Viejo. El puesto comercial se construyó hace unos cien años.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 2,
                ],
            ],
            16 => [
                'description' => 'Viejo. El puesto comercial se construyó hace unos cien años.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 2,
                ],
            ],
            17 => [
                'description' => 'Viejo. El puesto comercial se construyó hace unos cien años.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 2,
                ],
            ],
            18 => [
                'description' => 'Antiguo. El puesto comercial se construyó hace siglos.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 3,
                ],
            ],
            19 => [
                'description' => 'Antiguo. El puesto comercial se construyó hace siglos.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 3,
                ],
            ],
            20 => [
                'description' => 'Desconocido. Nadie sabe cuánto tiempo lleva abierto este puesto comercial.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 4,
                ],
            ],
        ],
        'sub_tables' => null,
    ],

    /*ESTADO*/
    'condition' => [
        'dice_type' => '1d20',
        'results' => [
            1 => [
                'description' => 'Destartalado. Parece que algunos de los edificios están a punto de venirse abajo y no hay ninguna carretera propiamente dicha, solo zonas que el tránsito ha convertido en caminos.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => -6,
                ],
            ],
            2 => [
                'description' => 'Destartalado. Parece que algunos de los edificios están a punto de venirse abajo y no hay ninguna carretera propiamente dicha, solo zonas que el tránsito ha convertido en caminos.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => -6,
                ],
            ],
            3 => [
                'description' => 'Pobre. Los edificios y sus alrededores están sucios y en mal estado. Las carreteras son de tierra e irregulares.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => -3,
                ],
            ],
            4 => [
                'description' => 'Pobre. Los edificios y sus alrededores están sucios y en mal estado. Las carreteras son de tierra e irregulares.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => -3,
                ],
            ],
            5 => [
                'description' => 'Pobre. Los edificios y sus alrededores están sucios y en mal estado. Las carreteras son de tierra e irregulares.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => -3,
                ],
            ],
            6 => [
                'description' => 'Pobre. Los edificios y sus alrededores están sucios y en mal estado. Las carreteras son de tierra e irregulares.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => -3,
                ],
            ],
            7 => [
                'description' => 'Decente. Los edificios están limpios y decorados con sobriedad. Los caminos son de tierra aplastada o gravilla.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 0,
                ],
            ],
            8 => [
                'description' => 'Decente. Los edificios están limpios y decorados con sobriedad. Los caminos son de tierra aplastada o gravilla.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 0,
                ],
            ],
            9 => [
                'description' => 'Decente. Los edificios están limpios y decorados con sobriedad. Los caminos son de tierra aplastada o gravilla.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 0,
                ],
            ],
            10 => [
                'description' => 'Decente. Los edificios están limpios y decorados con sobriedad. Los caminos son de tierra aplastada o gravilla.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 0,
                ],
            ],
            11 => [
                'description' => 'Decente. Los edificios están limpios y decorados con sobriedad. Los caminos son de tierra aplastada o gravilla.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 0,
                ],
            ],
            12 => [
                'description' => 'Decente. Los edificios están limpios y decorados con sobriedad. Los caminos son de tierra aplastada o gravilla.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 0,
                ],
            ],
            13 => [
                'description' => 'Decente. Los edificios están limpios y decorados con sobriedad. Los caminos son de tierra aplastada o gravilla.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 0,
                ],
            ],
            14 => [
                'description' => 'Decente. Los edificios están limpios y decorados con sobriedad. Los caminos son de tierra aplastada o gravilla.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 0,
                ],
            ],
            15 => [
                'description' => 'Bueno. La mayoría de los edificios están bien cuidados y decorados con moderación. Los caminos son de adoquines o quizás de ladrillos baratos.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 3,
                ],
            ],
            16 => [
                'description' => 'Bueno. La mayoría de los edificios están bien cuidados y decorados con moderación. Los caminos son de adoquines o quizás de ladrillos baratos.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 3,
                ],
            ],
            17 => [
                'description' => 'Bueno. La mayoría de los edificios están bien cuidados y decorados con moderación. Los caminos son de adoquines o quizás de ladrillos baratos.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 3,
                ],
            ],
            18 => [
                'description' => 'Bueno. La mayoría de los edificios están bien cuidados y decorados con moderación. Los caminos son de adoquines o quizás de ladrillos baratos.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 3,
                ],
            ],
            19 => [
                'description' => 'Inmaculado. Las tiendas y casas están impecables, adornadas con un gusto exquisito, y los caminos son de piedras regulares y lisas.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 6,
                ],
            ],
            20 => [
                'description' => 'Inmaculado. Las tiendas y casas están impecables, adornadas con un gusto exquisito, y los caminos son de piedras regulares y lisas.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 6,
                ],
            ],
        ],
        'sub_tables' => null,
    ],

    /*AFLUENCIA DE VISITANTES*/
    'visitor_traffic' => [
        'dice_type' => '1d20',
        'results' => [
            1 => [
                'description' => 'Desierto. No parece que nadie visite este lugar.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 0,
                    'crime' => 2,
                ],
            ],
            2 => [
                'description' => 'Desierto. No parece que nadie visite este lugar.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 0,
                    'crime' => 2,
                ],
            ],
            3 => [
                'description' => 'Grupos. Los visitantes son la excepción, pero puede que haya algunos en las cercanías.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 1,
                    'crime' => 1,
                ],
            ],
            4 => [
                'description' => 'Grupos. Los visitantes son la excepción, pero puede que haya algunos en las cercanías.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 1,
                    'crime' => 1,
                ],
            ],
            5 => [
                'description' => 'Grupos. Los visitantes son la excepción, pero puede que haya algunos en las cercanías.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 1,
                    'crime' => 1,
                ],
            ],
            6 => [
                'description' => 'Grupos. Los visitantes son la excepción, pero puede que haya algunos en las cercanías.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 1,
                    'crime' => 1,
                ],
            ],
            7 => [
                'description' => 'Aglomeraciones. Se suelen ver nuevos visitantes casi todos los días.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 2,
                    'crime' => 0,
                ],
            ],
            8 => [
                'description' => 'Aglomeraciones. Se suelen ver nuevos visitantes casi todos los días.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 2,
                    'crime' => 0,
                ],
            ],
            9 => [
                'description' => 'Aglomeraciones. Se suelen ver nuevos visitantes casi todos los días.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 2,
                    'crime' => 0,
                ],
            ],
            10 => [
                'description' => 'Aglomeraciones. Se suelen ver nuevos visitantes casi todos los días.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 2,
                    'crime' => 0,
                ],
            ],
            11 => [
                'description' => 'Aglomeraciones. Se suelen ver nuevos visitantes casi todos los días.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 2,
                    'crime' => 0,
                ],
            ],
            12 => [
                'description' => 'Aglomeraciones. Se suelen ver nuevos visitantes casi todos los días.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 2,
                    'crime' => 0,
                ],
            ],
            13 => [
                'description' => 'Aglomeraciones. Se suelen ver nuevos visitantes casi todos los días.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 2,
                    'crime' => 0,
                ],
            ],
            14 => [
                'description' => 'Aglomeraciones. Se suelen ver nuevos visitantes casi todos los días.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 2,
                    'crime' => 0,
                ],
            ],
            15 => [
                'description' => 'Multitudes. Se ven muchas caras nuevas con frecuencia',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 3,
                    'crime' => -1,
                ],
            ],
            16 => [
                'description' => 'Multitudes. Se ven muchas caras nuevas con frecuencia',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 3,
                    'crime' => -1,
                ],
            ],
            17 => [
                'description' => 'Multitudes. Se ven muchas caras nuevas con frecuencia',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 3,
                    'crime' => -1,
                ],
            ],
            18 => [
                'description' => 'Multitudes. Se ven muchas caras nuevas con frecuencia',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 3,
                    'crime' => -1,
                ],
            ],
            19 => [
                'description' => 'Masas. Por todas partes hay gente nueva yendo y viniendo a todas horas.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 4,
                    'crime' => -2,
                ],
            ],
            20 => [
                'description' => 'Masas. Por todas partes hay gente nueva yendo y viniendo a todas horas.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'size' => 4,
                    'crime' => -2,
                ],
            ],
        ],
        'sub_tables' => null,
    ],
];
