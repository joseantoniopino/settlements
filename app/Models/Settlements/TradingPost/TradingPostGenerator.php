<?php

namespace App\Models\Settlements\TradingPost;

use Illuminate\Database\Eloquent\Model;

class TradingPostGenerator extends Model
{
    public static function getGenerator(?string $type = null): array
    {
        return is_null($type)
            ? self::generators()
            : self::generator($type);

    }

    private static function generators(): array
    {
        return [
            'origin' => [
                'model' => 'trading_post',
                'type' => 'origin',
                'dice_type' => '1d8',
                'results' => [
                    1 => [
                        'description' => __('settlements/trading_post.origin.accidental'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => null,
                    ],
                    2 => [
                        'description' => __('settlements/trading_post.origin.business_venture'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => null,
                    ],
                    3 => [
                        'description' => __('settlements/trading_post.origin.crossroads'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => null,
                    ],
                    4 => [
                        'description' => __('settlements/trading_post.origin.military_outpost'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => null,
                    ],
                    5 => [
                        'description' => __('settlements/trading_post.origin.no_mans_land'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => null,
                    ],
                    6 => [
                        'description' => __('settlements/trading_post.origin.native'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => null,
                    ],
                    7 => [
                        'description' => __('settlements/trading_post.origin.overnight_stop'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => null,
                    ],
                    8 => [
                        'description' => __('settlements/trading_post.origin.wilderness_expert'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => null,
                    ],
                ],
            ],

            'specialty' => [
                'model' => 'trading_post',
                'type' => 'specialty',
                'dice_type' => '1d6',
                'results' => [
                    1 => [
                        'description' => __('settlements/trading_post.specialty.atypical_shipping_methods'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => null,
                    ],
                    2 => [
                        'description' => __('settlements/trading_post.specialty.food_and_drink'),
                        'special' => null,
                        'choice' => [
                            'specialty_food_and_drink' => [
                                'dice_type' => '1d6',
                                'results' => [
                                    1 => __('settlements/trading_post.specialty.choices.excellent_and_unique_food'),
                                    2 => __('settlements/trading_post.specialty.choices.excellent_and_unique_food'),
                                    3 => __('settlements/trading_post.specialty.choices.excellent_and_unique_food'),
                                    4 => __('settlements/trading_post.specialty.choices.plentiful_and_varied_high_quality_beverages'),
                                    5 => __('settlements/trading_post.specialty.choices.plentiful_and_varied_high_quality_beverages'),
                                    6 => __('settlements/trading_post.specialty.choices.plentiful_and_varied_high_quality_beverages'),
                                ],
                            ],
                        ],
                        'table_modifications' => null,
                    ],
                    3 => [
                        'description' => __('settlements/trading_post.specialty.hospitality'),
                        'special' => __("settlements/trading_post.specialty.specials.hospitality_special"),
                        'choice' => null,
                        'table_modifications' => null,
                    ],
                    4 => [
                        'description' => __('settlements/trading_post.specialty.information'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => null,
                    ],
                    5 => [
                        'description' => __('settlements/trading_post.specialty.purchasing_connections'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => null,
                    ],
                    6 => [
                        'description' => __('settlements/trading_post.specialty.unscrupulous_contractors'),
                        'special' => __('settlements/trading_post.specialty.unscrupulous_contractors'),
                        'choice' => [
                            'specialty_unscrupulous_contractors' => [
                                'dice_type' => '1d10',
                                'results' => [
                                    1 => __('settlements/trading_post.specialty.choices.brutes_and_brawlers'),
                                    2 => __('settlements/trading_post.specialty.choices.cloak_and_dagger'),
                                    3 => __('settlements/trading_post.specialty.choices.bows_and_slings'),
                                    4 => __('settlements/trading_post.specialty.choices.scribes_and_clerks'),
                                    5 => __('settlements/trading_post.specialty.choices.guides_and_trackers'),
                                    6 => __('settlements/trading_post.specialty.choices.caravan_and_mount'),
                                    7 => __('settlements/trading_post.specialty.choices.arcane_academics'),
                                    8 => __('settlements/trading_post.specialty.choices.magic_mercenaries'),
                                    9 => __('settlements/trading_post.specialty.choices.priestly_guidance'),
                                    10 => __('settlements/trading_post.specialty.choices.hands_of_the_divine'),
                                ],
                            ],
                        ],
                        'table_modifications' => null,
                    ],
                ],
            ],

            'age' => [
                'model' => 'trading_post',
                'type' => 'specialty',
                'dice_type' => '1d20',
                'results' => [
                    1 => [
                        'description' => __('settlements/trading_post.age.recent'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => -1,
                        ],
                    ],
                    2 => [
                        'description' => __('settlements/trading_post.age.recent'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => -1,
                        ],
                    ],
                    3 => [
                        'description' => __('settlements/trading_post.age.recent'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => -1,
                        ],
                    ],
                    4 => [
                        'description' => __('settlements/trading_post.age.established'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => 0,
                        ],
                    ],
                    5 => [
                        'description' => __('settlements/trading_post.age.established'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => 0,
                        ],
                    ],
                    6 => [
                        'description' => __('settlements/trading_post.age.established'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => 0,
                        ],
                    ],
                    7 => [
                        'description' => __('settlements/trading_post.age.established'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => 0,
                        ],
                    ],
                    8 => [
                        'description' => __('settlements/trading_post.age.established'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => 0,
                        ],
                    ],
                    9 => [
                        'description' => __('settlements/trading_post.age.mature'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => 1,
                        ],
                    ],
                    10 => [
                        'description' => __('settlements/trading_post.age.mature'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => 1,
                        ]
                    ],
                    11 => [
                        'description' => __('settlements/trading_post.age.mature'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => 1,
                        ]
                    ],
                    12 => [
                        'description' => __('settlements/trading_post.age.mature'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => 1,
                        ]
                    ],
                    13 => [
                        'description' => __('settlements/trading_post.age.mature'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => 1,
                        ]
                    ],
                    14 => [
                        'description' => __('settlements/trading_post.age.old'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => 2,
                        ],
                    ],
                    15 => [
                        'description' => __('settlements/trading_post.age.old'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => 2,
                        ],
                    ],
                    16 => [
                        'description' => __('settlements/trading_post.age.old'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => 2,
                        ],
                    ],
                    17 => [
                        'description' => __('settlements/trading_post.age.old'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => 2,
                        ],
                    ],
                    18 => [
                        'description' => __('settlements/trading_post.age.ancient'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => 3,
                        ],
                    ],
                    19 => [
                        'description' => __('settlements/trading_post.age.ancient'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => 3,
                        ],
                    ],
                    20 => [
                        'description' => __('settlements/trading_post.age.unknown'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'visitor_traffic' => 4,
                        ],
                    ],
                ],
            ],

            'condition' => [
                'model' => 'trading_post',
                'type' => 'condition',
                'dice_type' => '1d20',
                'results' => [
                    1 => [
                        'description' => __('settlements/trading_post.condition.ramshackle'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => -6,
                        ],
                    ],
                    2 => [
                        'description' => __('settlements/trading_post.condition.ramshackle'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => -6,
                        ],
                    ],
                    3 => [
                        'description' => __('settlements/trading_post.condition.poor'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => -3,
                        ],
                    ],
                    4 => [
                        'description' => __('settlements/trading_post.condition.poor'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => -3,
                        ],
                    ],
                    5 => [
                        'description' => __('settlements/trading_post.condition.poor'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => -3,
                        ],
                    ],
                    6 => [
                        'description' => __('settlements/trading_post.condition.poor'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => -3,
                        ],
                    ],
                    7 => [
                        'description' => __('settlements/trading_post.condition.fair'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => 0,
                        ],
                    ],
                    8 => [
                        'description' => __('settlements/trading_post.condition.fair'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => 0,
                        ],
                    ],
                    9 => [
                        'description' => __('settlements/trading_post.condition.fair'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => 0,
                        ],
                    ],
                    10 => [
                        'description' => __('settlements/trading_post.condition.fair'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => 0,
                        ],
                    ],
                    11 => [
                        'description' => __('settlements/trading_post.condition.fair'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => 0,
                        ],
                    ],
                    12 => [
                        'description' => __('settlements/trading_post.condition.fair'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => 0,
                        ],
                    ],
                    13 => [
                        'description' => __('settlements/trading_post.condition.fair'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => 0,
                        ],
                    ],
                    14 => [
                        'description' => __('settlements/trading_post.condition.fair'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => 0,
                        ],
                    ],
                    15 => [
                        'description' => __('settlements/trading_post.condition.good'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => 3,
                        ],
                    ],
                    16 => [
                        'description' => __('settlements/trading_post.condition.good'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => 3,
                        ],
                    ],
                    17 => [
                        'description' => __('settlements/trading_post.condition.good'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => 3,
                        ],
                    ],
                    18 => [
                        'description' => __('settlements/trading_post.condition.good'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => 3,
                        ],
                    ],
                    19 => [
                        'description' => __('settlements/trading_post.condition.immaculate'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => 6,
                        ],
                    ],
                    20 => [
                        'description' => __('settlements/trading_post.condition.immaculate'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'population_wealth' => 6,
                        ],
                    ],
                ],
            ],

            'visitor_traffic' => [
                'model' => 'trading_post',
                'type' => 'visitor_traffic',
                'dice_type' => '1d20',
                'results' => [
                    1 => [
                        'description' => __('settlements/trading_post.visitor_traffic.vacant'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 0,
                            'crime' => 2,
                        ],
                    ],
                    2 => [
                        'description' => __('settlements/trading_post.visitor_traffic.vacant'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 0,
                            'crime' => 2,
                        ],
                    ],
                    3 => [
                        'description' => __('settlements/trading_post.visitor_traffic.groups'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 1,
                            'crime' => 1,
                        ],
                    ],
                    4 => [
                        'description' => __('settlements/trading_post.visitor_traffic.groups'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 1,
                            'crime' => 1,
                        ],
                    ],
                    5 => [
                        'description' => __('settlements/trading_post.visitor_traffic.groups'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 1,
                            'crime' => 1,
                        ],
                    ],
                    6 => [
                        'description' => __('settlements/trading_post.visitor_traffic.groups'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 1,
                            'crime' => 1,
                        ],
                    ],
                    7 => [
                        'description' => __('settlements/trading_post.visitor_traffic.crowds'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 2,
                            'crime' => 0,
                        ],
                    ],
                    8 => [
                        'description' => __('settlements/trading_post.visitor_traffic.crowds'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 2,
                            'crime' => 0,
                        ],
                    ],
                    9 => [
                        'description' => __('settlements/trading_post.visitor_traffic.crowds'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 2,
                            'crime' => 0,
                        ],
                    ],
                    10 => [
                        'description' => __('settlements/trading_post.visitor_traffic.crowds'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 2,
                            'crime' => 0,
                        ],
                    ],
                    11 => [
                        'description' => __('settlements/trading_post.visitor_traffic.crowds'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 2,
                            'crime' => 0,
                        ],
                    ],
                    12 => [
                        'description' => __('settlements/trading_post.visitor_traffic.crowds'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 2,
                            'crime' => 0,
                        ],
                    ],
                    13 => [
                        'description' => __('settlements/trading_post.visitor_traffic.crowds'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 2,
                            'crime' => 0,
                        ],
                    ],
                    14 => [
                        'description' => __('settlements/trading_post.visitor_traffic.crowds'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 2,
                            'crime' => 0,
                        ],
                    ],
                    15 => [
                        'description' => __('settlements/trading_post.visitor_traffic.droves'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 3,
                            'crime' => -1,
                        ],
                    ],
                    16 => [
                        'description' => __('settlements/trading_post.visitor_traffic.droves'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 3,
                            'crime' => -1,
                        ],
                    ],
                    17 => [
                        'description' => __('settlements/trading_post.visitor_traffic.droves'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 3,
                            'crime' => -1,
                        ],
                    ],
                    18 => [
                        'description' => __('settlements/trading_post.visitor_traffic.droves'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 3,
                            'crime' => -1,
                        ],
                    ],
                    19 => [
                        'description' => __('settlements/trading_post.visitor_traffic.masses'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 4,
                            'crime' => -2,
                        ],
                    ],
                    20 => [
                        'description' => __('settlements/trading_post.visitor_traffic.masses'),
                        'special' => null,
                        'choice' => null,
                        'table_modifications' => [
                            'size' => 4,
                            'crime' => -2,
                        ],
                    ],
                ],
            ],

        ];
    }
}
