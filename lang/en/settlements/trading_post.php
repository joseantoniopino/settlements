<?php

return [

    /*ORIGIN*/
    'origin' => [
        'dice_type' => '1d8',
        'result' => [
            1 => [
                'description' => 'Accidental. The trading post came about due to an accident, such as a caravan breaking down or mistaken directions. What was set up to deal with the accident eventually became the trading post.',
                'special' => null,
                'sub_table' => null,
            ],
            2 => [
                'description' => 'Business Venture. The trading post was established by a wealthy entrepreneur specifically to be a trading post from the start.',
                'special' => null,
                'sub_table' => null,
            ],
            3 => [
                'description' => 'Crossroads. The trading post is at the intersection of more than one major trade route.',
                'special' => null,
                'sub_table' => null,
            ],
            4 => [
                'description' => 'Military Outpost. The trading post was built on the remnants of an old fortress or watchtower, the structures of which have long since fallen down or been repurposed by the locals.',
                'special' => null,
                'sub_table' => null,
            ],
            5 => [
                'description' => 'No Man’s Land. The trading post was established as a neutral place where opposing forces could purchase wares, without encroaching on enemy territory.',
                'special' => null,
                'sub_table' => null,
            ],
            6 => [
                'description' => 'Native. The trading post was started by someone native to the area, who saw potential in trade with passersby.',
                'special' => null,
                'sub_table' => null,
            ],
            7 => [
                'description' => 'Overnight Stop. The trading post was originally a single, large house for overnight stays for weary travelers, which soon grew, along with the demand for accommodations.',
                'special' => null,
                'sub_table' => null,
            ],
            8 => [
                'description' => 'Wilderness Expert. The trading post was started when a trapper, hunter or guide set up a camp, in order to aid those passing through the area.',
                'special' => null,
                'sub_table' => null,
            ],
        ],
    ],

    /*SPECIALTY*/
    'specialty' => [
        'dice_type' => '1d6',
        'result' => [
            1 => [
                'description' => 'Atypical Shipping Methods. This trading post is known for having unique and effective ways to move goods.',
                'special' => null,
                'sub_table' => null,
            ],
            2 => [
                'description' => 'Food & Drink. This trading post is known for [d6]:',
                'special' => null,
                'sub_table' => 'trading_post_speciality_2',
            ],
            3 => [
                'description' => 'Hospitality. The main inn here is particularly good, offering excellent service, comfortable rooms, and good food.',
                'special' => 'If you roll for the inn’s quality using the quality table found in step 3, ignore results that would make it ‘poor’.',
                'sub_table' => null,
            ],
            4 => [
                'description' => 'Information. This trading post is known as a source for reliable information. They may not know everything, but your chances of finding solid gossip, lore, news, or an intriguing tidbit here is good.',
                'special' => null,
                'sub_table' => null,
            ],
            5 => [
                'description' => 'Purchasing Connections. This trading post is known for having folks who can find things. If they don’t have (or know about) what you’re looking for, they can direct you to someone who does.',
                'special' => null,
                'sub_table' => null,
            ],
            6 => [
                'description' => 'Unscrupulous Contractors. This trading post is known for having people who can get just about anything done, if the coin is right.',
                'special' => 'Free Location: Service - Hired Help [Roll 1d10]:',
                'sub_table' => 'trading_post_speciality_6',
            ],
        ],
        'sub_tables' => [
            'trading_post_speciality_2' => [
                'dice_type' => '1d6',
                'result' => [
                    1 => 'Excellent and unique food',
                    2 => 'Excellent and unique food',
                    3 => 'Excellent and unique food',
                    4 => 'Plentiful and varied high-quality beverages',
                    5 => 'Plentiful and varied high-quality beverages',
                    6 => 'Plentiful and varied high-quality beverages',
                ],
            ],
            'trading_post_speciality_6' => [
                'dice_type' => '1d10',
                'result' => [
                    1 => 'Brutes & Brawlers',
                    2 => 'Cloak & Dagger',
                    3 => 'Bows & Slings',
                    4 => 'Scribes & Clerks',
                    5 => 'Guides & Trackers',
                    6 => 'Caravan & Mount',
                    7 => 'Arcane Academics',
                    8 => 'Magic Mercenaries',
                    9 => 'Priestly Guidance',
                    10 => 'Hands of the Divine',
                ],
            ],
        ],
    ],

    /*AGE*/
    'age' => [
        'dice_type' => '1d20',
        'result' => [
            1 => [
                'description' => 'Recent. The trading post was established within the past year.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => -1,
                ],
            ],
            2 => [
                'description' => 'Recent. The trading post has been around for at least a couple of years.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => -1,
                ],
            ],
            3 => [
                'description' => 'Established. The trading post has been around for at least a couple of years.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 0,
                ],
            ],
            4 => [
                'description' => 'Established. The trading post has been around for at least a couple of years.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 0,
                ],
            ],
            5 => [
                'description' => 'Established. The trading post has been around for at least a couple of years.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 0,
                ],
            ],
            6 => [
                'description' => 'Established. The trading post has been around for at least a couple of years.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 0,
                ],
            ],
            7 => [
                'description' => 'Established. The trading post has been around for at least a couple of years.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 0,
                ],
            ],
            8 => [
                'description' => 'Established. The trading post has been around for at least a couple of years.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 0,
                ],
            ],
            9 => [
                'description' => 'Mature. The trading post was originally built decades ago.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 1,
                ],
            ],
            10 => [
                'description' => 'Mature. The trading post was originally built decades ago.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 1,
                ]
            ],
            11 => [
                'description' => 'Mature. The trading post was originally built decades ago.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 1,
                ]
            ],
            12 => [
                'description' => 'Mature. The trading post was originally built decades ago.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 1,
                ]
            ],
            13 => [
                'description' => 'Mature. The trading post was originally built decades ago.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 1,
                ]
            ],
            14 => [
                'description' => 'Old. The trading post was built around a hundred years ago.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 2,
                ],
            ],
            15 => [
                'description' => 'Old. The trading post was built around a hundred years ago.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 2,
                ],
            ],
            16 => [
                'description' => 'Old. The trading post was built around a hundred years ago.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 2,
                ],
            ],
            17 => [
                'description' => 'Old. The trading post was built around a hundred years ago.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 2,
                ],
            ],
            18 => [
                'description' => 'Ancient. The trading post was built hundreds of years ago.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 3,
                ],
            ],
            19 => [
                'description' => 'Ancient. The trading post was built hundreds of years ago.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 3,
                ],
            ],
            20 => [
                'description' => 'Unknown. No one really knows when the trading post was established.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'visitor_traffic' => 4,
                ],
            ],
        ],
    ],

    /*CONDITION*/
    'condition' => [
        'dice_type' => '1d20',
        'result' => [
            1 => [
                'description' => 'Ramshackle. A few of the buildings look to be falling down. There are no formal roads, only trodden paths.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => -6,
                ],
            ],
            2 => [
                'description' => 'Ramshackle. A few of the buildings look to be falling down. There are no formal roads, only trodden paths.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => -6,
                ],
            ],
            3 => [
                'description' => 'Poor. The buildings and surroundings are rough and dirty. Roads are uneven dirt and dust.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => -3,
                ],
            ],
            4 => [
                'description' => 'Poor. The buildings and surroundings are rough and dirty. Roads are uneven dirt and dust.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => -3,
                ],
            ],
            5 => [
                'description' => 'Fair. The buildings are clean and sparsely decorated. Roads are flattened earth, possibly with gravel.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 0,
                ],
            ],
            6 => [
                'description' => 'Fair. The buildings are clean and sparsely decorated. Roads are flattened earth, possibly with gravel.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 0,
                ],
            ],
            7 => [
                'description' => 'Fair. The buildings are clean and sparsely decorated. Roads are flattened earth, possibly with gravel.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 0,
                ],
            ],
            8 => [
                'description' => 'Fair. The buildings are clean and sparsely decorated. Roads are flattened earth, possibly with gravel.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 0,
                ],
            ],
            9 => [
                'description' => 'Good. Most of the structures are exceptionally well kept and moderately decorated. Roads are cobblestone or, perhaps, cheap brick.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 3,
                ],
            ],
            10 => [
                'description' => 'Good. Most of the structures are exceptionally well kept and moderately decorated. Roads are cobblestone or, perhaps, cheap brick.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 3,
                ],
            ],
            11 => [
                'description' => 'Fair. The buildings are clean and sparsely decorated. Roads are flattened earth, possibly with gravel.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 0,
                ],
            ],
            12 => [
                'description' => 'Fair. The buildings are clean and sparsely decorated. Roads are flattened earth, possibly with gravel.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 0,
                ],
            ],
            13 => [
                'description' => 'Fair. The buildings are clean and sparsely decorated. Roads are flattened earth, possibly with gravel.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 0,
                ],
            ],
            14 => [
                'description' => 'Fair. The buildings are clean and sparsely decorated. Roads are flattened earth, possibly with gravel.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 0,
                ],
            ],
            15 => [
                'description' => 'Good. Most of the structures are exceptionally well kept and moderately decorated. Roads are made of fine, smooth, well-placed flagstones.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 3,
                ],
            ],
            16 => [
                'description' => 'Good. Most of the structures are exceptionally well kept and moderately decorated. Roads are made of fine, smooth, well-placed flagstones.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 3,
                ],
            ],
            17 => [
                'description' => 'Good. Most of the structures are exceptionally well kept and moderately decorated. Roads are made of fine, smooth, well-placed flagstones.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 3,
                ],
            ],
            18 => [
                'description' => 'Good. Most of the structures are exceptionally well kept and moderately decorated. Roads are made of fine, smooth, well-placed flagstones.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 3,
                ],
            ],
            19 => [
                'description' => 'Immaculate. The shops and houses are spotless, and well-adorned with tasteful decorations. Roads are made of fine, smooth, well-placed flagstones.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 6,
                ],
            ],
            20 => [
                'description' => 'Immaculate. The shops and houses are spotless, and well-adorned with tasteful decorations. Roads are made of fine, smooth, well-placed flagstones.',
                'special' => null,
                'sub_table' => null,
                'table_modifications' => [
                    'population_wealth' => 6,
                ],
            ],
        ],
    ],

];
