<?php

declare(strict_types=1);

return [

    /*ORIGEN*/
    'origin' => [
        "accidental" => "Accidental: El puesto comercial se creó por accidente, por ejemplo, después de que se averiase o perdiese una caravana. Las medidas que se tomaron para remediar el accidente acabaron dando lugar al puesto comercial.",
        "business_venture" => "Empresa comercial: Un emprendedor adinerado decidió fundar un puesto comercial.",
        "crossroads" => "Cruce de caminos: El puesto comercial está en la intersección de varias de las principales rutas de comercio.",
        "military_outpost" => "Puesto militar: El puesto comercial se construyó en las ruinas de una antigua fortaleza o torre de guardia. Estas estructuras llevaban mucho tiempo abandonadas o los habitantes de la zona decidieron reutilizarlas.",
        "no_mans_land" => "Tierra de nadie: El puesto comercial se ha establecido en una zona neutral, donde los ejércitos pueden comprar mercancías sin adentrarse en terreno enemigo.",
        "native" => "Nativo: Alguien de la zona fundó el puesto comercial tras considerar que el comercio con la gente que pasaba por la zona tenía potencial.",
        "overnight_stop" => "Parada nocturna: Originalmente el puesto comercial era una casa de gran tamaño que ofrecía estancias de una noche a viajeros cansados. El lugar pronto evolucionó como respuesta a la creciente demanda de alojamiento.",
        "wilderness_expert" => "Experto en naturaleza: El puesto comercial fue fundado por un trampero, un cazador o un guía, que estableció un campamento para ayudar a quienes viajasen por la zona."
    ],

    /*ESPECIALIDAD*/
    'specialty' => [
        'atypical_shipping_methods' => 'Métodos de envío atípicos. A este puesto comercial se lo conoce por su forma única y efectiva de transportar mercancías.',
        'food_and_drink' => 'Comida y bebida. Al puesto comercial se lo conoce por [d6]:',
        'hospitality' => 'Hospitalidad. La posada principal es de gran calidad y ofrece un servicio excelente, habitaciones cómodas y buena comida.',
        'information' => 'Información. Este puesto comercial es famoso por ser una buena fuente de información. Aunque las personas aquí no lo saben todo, existen muchas posibilidades de encontrarse con rumores verídicos, sabiduría tradicional, noticias o algún detalle interesante.',
        'purchasing_connections' => 'Contactos. El puesto comercial es famoso por contar con gente que sabe encontrar cosas. Si no tienen (o no saben) lo que estás buscando, te pueden recomendar a alguien.',
        'unscrupulous_contractors' => 'Contratistas sin escrúpulos. Este puesto comercial es famoso por tener gente que puede hacer cualquier cosa si hay suficiente dinero de por medio.',

        'specials' => [
            'hospitality_special' => 'Si haces una tirada para saber la calidad de la posada utilizando la tabla de Calidad del paso 3, ignora los resultados que le atribuirían la calidad «pobre».',
            'free_location_special' => 'Lugar gratuito (servicio): Mercenarios [tira 1d10]:'
        ],

        'choices' => [
            // 2
            'specialty_food_and_drink' => 'Comida y bebida',
            'excellent_and_unique_food' => 'Una comida excepcional',
            'plentiful_and_varied_high_quality_beverages' => 'Gran surtido de bebidas variadas y de buena calidad',

            // 6
            'specialty_unscrupulous_contractors' => 'Contratistas sin escrúpulos',
            'brutes_and_brawlers' => 'Brutos y matones',
            'cloak_and_dagger' => 'Agentes clandestinos',
            'bows_and_slings' => 'Arqueros y honderos',
            'scribes_and_clerks' => 'Escribas y administrativos',
            'guides_and_trackers' => 'Guías y rastreadores',
            'caravan_and_mount' => 'Caravaneros y monturas',
            'arcane_academics' => 'Académicos arcanos',
            'magic_mercenaries' => 'Mercenarios mágicos',
            'priestly_guidance' => 'Orientación sacerdotal',
            'hands_of_the_divine' => 'Manos de la divinidad',

        ],
    ],

    /*ANTIGÜEDAD*/
    'age' => [
        'recent' => 'Reciente. El puesto comercial se ha establecido hace menos de un año.',
        'established' => 'Asentado. El puesto comercial lleva abierto al menos un par de años.',
        'mature' => 'Longevo. El puesto comercial se construyó hace décadas.',
        'old' => 'Old. The trading post was built around a hundred years ago.',
        'ancient' => 'Viejo. El puesto comercial se construyó hace unos cien años.',
        'unknown' => 'Desconocido. Nadie sabe cuánto tiempo lleva abierto este puesto comercial.',
    ],

    /*ESTADO*/
    'condition' => [
        'ramshackle' => 'Destartalado. Parece que algunos de los edificios están a punto de venirse abajo y no hay ninguna carretera propiamente dicha, solo zonas que el tránsito ha convertido en caminos.',
        'poor' => 'Pobre. Los edificios y sus alrededores están sucios y en mal estado. Las carreteras son de tierra e irregulares.',
        'fair' => 'Decente. Los edificios están limpios y decorados con sobriedad. Los caminos son de tierra aplastada o gravilla.',
        'good' => 'Bueno. La mayoría de los edificios están bien cuidados y decorados con moderación. Los caminos son de adoquines o quizás de ladrillos baratos.',
        'immaculate' => 'Inmaculado. Las tiendas y casas están impecables, adornadas con un gusto exquisito, y los caminos son de piedras regulares y lisas.',
    ],

    /*AFLUENCIA DE VISITANTES*/
    'visitor_traffic' => [
        'vacant' => 'Desierto. No parece que nadie visite este lugar.',
        'groups' => 'Grupos. Los visitantes son la excepción, pero puede que haya algunos en las cercanías.',
        'crowds' => 'Aglomeraciones. Se suelen ver nuevos visitantes casi todos los días.',
        'droves' => 'Multitudes. Se ven muchas caras nuevas con frecuencia.',
        'masses' => 'Masas. Por todas partes hay gente nueva yendo y viniendo a todas horas.',
    ],

];
