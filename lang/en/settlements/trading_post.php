<?php

declare(strict_types=1);

return [

    /*ORIGIN*/
    'origin' => [
        "accidental" => "Accidental. The trading post came about due to an accident, such as a caravan breaking down or mistaken directions. What was set up to deal with the accident eventually became the trading post.",
        "business_venture" => "Business Venture. The trading post was established by a wealthy entrepreneur specifically to be a trading post from the start.",
        "crossroads" => "Crossroads. The trading post is at the intersection of more than one major trade route.",
        "military_outpost" => "Military Outpost. The trading post was built on the remnants of an old fortress or watchtower, the structures of which have long since fallen down or been repurposed by the locals.",
        "no_mans_land" => "No Man’s Land. The trading post was established as a neutral place where opposing forces could purchase wares, without encroaching on enemy territory.",
        "native" => "Native. The trading post was started by someone native to the area, who saw potential in trade with passersby.",
        "overnight_stop" => "Overnight Stop. The trading post was originally a single, large house for overnight stays for weary travelers, which soon grew, along with the demand for accommodations.",
        "wilderness_expert" => "Wilderness Expert. The trading post was started when a trapper, hunter or guide set up a camp, in order to aid those passing through the area."
    ],

    /*SPECIALTY*/
    'specialty' => [
        'atypical_shipping_methods' => 'Atypical Shipping Methods. This trading post is known for having unique and effective ways to move goods.',
        'food_and_drink' => 'Food & Drink. This trading post is known for [d6]:',
        'hospitality' => 'Hospitality. The main inn here is particularly good, offering excellent service, comfortable rooms, and good food. If you roll for the inn’s quality using the quality table found in step 3, ignore results that would make it ‘poor’.',
        'information' => 'Information. This trading post is known as a source for reliable information. They may not know everything, but your chances of finding solid gossip, lore, news, or an intriguing tidbit here is good.',
        'purchasing_connections' => 'Purchasing Connections. This trading post is known for having folks who can find things. If they don’t have (or know about) what you’re looking for, they can direct you to someone who does.',
        'unscrupulous_contractors' => 'Unscrupulous Contractors. This trading post is known for having people who can get just about anything done, if the coin is right.',

        'specials' => [
            // 3
            'hospitality_special' => 'If you roll for the inn’s quality using the quality table found in step 3, ignore results that would make it ‘poor’',

            // 6
            'free_location_special' => 'Free Location: Service - Hired Help [Roll 1d10]:'
        ],

        'choices' => [
            // 2
            'excellent_and_unique_food' => 'Excellent and unique food',
            'plentiful_and_varied_high_quality_beverages' => 'Plentiful and varied high-quality beverages',

            // 6
            'brutes_and_brawlers' => 'Brutes & Brawlers',
            'cloak_and_dagger' => 'Cloak & Dagger',
            'bows_and_slings' => 'Bows & Slings',
            'scribes_and_clerks' => 'Scribes & Clerks',
            'guides_and_trackers' => 'Guides & Trackers',
            'caravan_and_mount' => 'Caravan & Mount',
            'arcane_academics' => 'Arcane Academics',
            'magic_mercenaries' => 'Magic Mercenaries',
            'priestly_guidance' => 'Priestly Guidance',
            'hands_of_the_divine' => 'Hands of the Divine',

        ],
    ],

    /*AGE*/
    'age' => [
        'recent' => 'Recent. The trading post was established within the past year.',
        'established' => 'Established. The trading post has been around for at least a couple of years.',
        'mature' => 'Mature. The trading post was originally built decades ago.',
        'old' => 'Old. The trading post was built around a hundred years ago.',
        'ancient' => 'Ancient. The trading post was built hundreds of years ago.',
        'unknown' => 'Unknown. No one really knows when the trading post was established.',
    ],

    /*CONDITION*/
    'condition' => [
        'ramshackle' => 'Ramshackle. A few of the buildings look to be falling down. There are no formal roads, only trodden paths.',
        'poor' => 'Poor. The buildings and surroundings are rough and dirty. Roads are uneven dirt and dust.',
        'fair' => 'Fair. The buildings are clean and sparsely decorated. Roads are flattened earth, possibly with gravel.',
        'good' => 'Good. Most of the structures are exceptionally well kept and moderately decorated. Roads are made of fine, smooth, well-placed flagstones.',
        'immaculate' => 'Immaculate. The shops and houses are spotless, and well-adorned with tasteful decorations. Roads are made of fine, smooth, well-placed flagstones.',
    ],



    /*VISITOR TRAFFIC*/
    'visitor_traffic' => [
        'vacant' => 'Vacant. No one seems to be visiting this place.',
        'groups' => 'Groups. Visitors are a rarity, though a few might be around.',
        'crowds' => 'Crowds. It is typical to see some new visitors most days.',
        'droves' => 'Droves. There are lots of new faces on a regular basis.',
        'masses' => 'Masses. New people are everywhere, coming and going at all times.',
    ],

];
