<?php
/**
 * Neighborhood content map: city => [neighborhood => tagline + body]
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

function sda_get_neighborhood_content() {
    return array(

        'Austin' => array(
            'Tarrytown' => array(
                'tagline' => 'Mid-century and early-modern homes in West Austin lean into custom steel entries and operable windows.',
                'body'    => '<p>Tarrytown sits west of MoPac and north of Lake Austin Boulevard. The neighborhood is full of architect-designed homes from the 1950s–70s, along with newer modern rebuilds on original lots.</p><p>We install steel pivot entries, French patio doors, and full curtain walls here. The original 1960s steel windows often need replacement at this point, and Tarrytown homeowners tend to upgrade to real steel frames rather than vinyl. 78703 has been our highest-volume Austin ZIP for several years running.</p>',
            ),
            'Hyde Park' => array(
                'tagline' => 'Craftsman and bungalow restoration work in one of Austin\'s oldest neighborhoods.',
                'body'    => '<p>Hyde Park homes were mostly built between 1891 and 1930, which means original front doors are often at the end of their useful life. The neighborhood\'s historic designation means replacements have to respect the original scale and profile.</p><p>We shop-draw to match the existing door dimensions and sidelite configurations. Steel frames in period-appropriate grid patterns pass HPO review. Submittal paperwork is part of what we handle.</p>',
            ),
            'Clarksville' => array(
                'tagline' => 'Historic cottages west of downtown — thoughtful replacements that respect neighborhood character.',
                'body'    => '<p>Clarksville is a small, walkable historic district between West Lynn and MoPac. The homes are cottages, craftsmen, and the occasional rebuild — small-footprint lots with tight setbacks.</p><p>Steel entry door replacements here are typically 32"–36" wide. We match existing trim and casing to preserve the street elevation and keep the historic character intact.</p>',
            ),
            'East Austin' => array(
                'tagline' => 'Modern infill and adaptive reuse across 78702 — steel doors and curtain walls are the look.',
                'body'    => '<p>East Austin has seen more architectural change than any other part of the city in the last decade. New-build modern homes and adaptive-reuse warehouses both use steel doors prominently as a design feature.</p><p>We work from Chestnut to Govalle, installing pivot entries, accordion patio doors, and full curtain walls. East Austin HOAs in some subdivisions require letters — we prepare the submittal.</p>',
            ),
            'Mueller' => array(
                'tagline' => 'Master-planned Mueller has a specific aesthetic — clean modern with dark steel windows and front doors.',
                'body'    => '<p>Mueller\'s design guidelines tend toward clean modernism: flat roofs, stucco or board-formed concrete, dark metal accents. Our matte-black steel doors and windows fit that aesthetic naturally.</p><p>We\'ve done dozens of single-family front entries and several townhome block installs across Mueller\'s sub-neighborhoods.</p>',
            ),
            'Barton Hills' => array(
                'tagline' => 'Between Zilker and Barton Creek — large lots with tree cover and design-forward front doors.',
                'body'    => '<p>Barton Hills sits between Zilker Park and the Barton Creek Greenbelt. Homes here are a mix of 1960s originals and newer modern rebuilds on the same lot sizes.</p><p>Tree canopy and natural setting make matte-black steel doors pop visually against limestone exteriors. French and pivot entries are the common requests.</p>',
            ),
            'Zilker' => array(
                'tagline' => 'Close-in Austin with a walkable neighborhood feel — steel door upgrades on mid-century cottages.',
                'body'    => '<p>Zilker homes are mostly 1940s–70s cottages and bungalows on small lots. The neighborhood\'s density means front doors are visible from the sidewalk, and a steel upgrade has outsized curb appeal.</p><p>Our typical Zilker install is a 36"–42" single steel door with a half-lite of reeded or seedy glass, matte black finish, multi-point lock.</p>',
            ),
            'South Congress' => array(
                'tagline' => 'SoCo homes from bungalows to modern builds — steel doors bridge the architectural range.',
                'body'    => '<p>South Congress (SoCo) runs from Riverside down through Travis Heights and Bouldin into the Oltorf area. The housing stock ranges from 1930s bungalows to modern new-builds on teardown lots.</p><p>Steel doors work across the range — French doors on restored cottages, oversized pivots on the new builds.</p>',
            ),
        ),

        'Bee Cave' => array(
            'Spanish Oaks' => array(
                'tagline' => 'Limestone Hill Country homes in Spanish Oaks — wrought iron entries and oversized pivots are the norm.',
                'body'    => '<p>Spanish Oaks is a gated community off Highway 71 with a golf course at its center. Homes are Hill Country-limestone with stacked stone walls and forged-iron accents throughout.</p><p>We\'ve installed oversized wrought iron entries, steel French doors onto covered patios, and panoramic patio door systems across Spanish Oaks. Matte bronze and aged-iron finishes dominate the palette.</p>',
            ),
            'Falconhead' => array(
                'tagline' => 'Established luxury enclave in Bee Cave with traditional architecture and steel upgrades on most elevations.',
                'body'    => '<p>Falconhead is a wooded neighborhood just south of the Bee Cave Road corridor. Homes tend to be traditional Tuscan or Mediterranean with forged-iron accents — a natural fit for steel entry doors.</p><p>Our Falconhead work includes wrought-iron front doors, steel double entries, and French patio doors.</p>',
            ),
            'Lake Pointe' => array(
                'tagline' => 'Bee Cave\'s Lake Pointe homes face Hill Country views — large glass systems and steel windows fit naturally.',
                'body'    => '<p>Lake Pointe sits just south of Ladera Boulevard. Many homes have panoramic views worth framing with large steel window or door systems.</p><p>We install panoramic doors onto rear decks, steel casement windows for view-facing rooms, and curtain walls on two-story great rooms here.</p>',
            ),
            'Uplands' => array(
                'tagline' => 'Bee Cave\'s Uplands section has newer builds ready for steel door upgrades.',
                'body'    => '<p>Uplands is a more recent addition to Bee Cave\'s residential stock, with newer homes built in the 2010s. Builder-grade front doors here are common upgrade targets.</p><p>Post-closing steel door replacement is the most frequent job — same rough opening, huge visual difference on the front elevation.</p>',
            ),
            'Homestead' => array(
                'tagline' => 'Traditional neighborhood feel with large-lot homes and classic steel door choices.',
                'body'    => '<p>Homestead is a family-oriented community near the Bee Cave Road corridor. Home styles lean traditional — classic single steel doors with matching sidelites are common here.</p><p>Finishes tend toward oil-rubbed bronze and matte black. Smart lock integration is a routine upgrade request.</p>',
            ),
        ),

        'Buda' => array(
            'Garlic Creek' => array(
                'tagline' => 'Buda\'s Garlic Creek subdivision is full of newer homes ripe for upgrade.',
                'body'    => '<p>Garlic Creek consists of well-planned streets with homes from the 2000s–2020s. Steel door replacements here dramatically lift curb appeal.</p><p>Most installs are single-day 36"×80" swap-outs. The steel door outlives the rest of the house.</p>',
            ),
            'Whispering Hollow' => array(
                'tagline' => 'Another Buda master-planned community with plenty of entry-door upgrade opportunities.',
                'body'    => '<p>Whispering Hollow is family-oriented with a mix of home sizes. Replacement steel doors are the most common request here.</p><p>Half-lite glass configurations with smart-lock integration make up most of our Whispering Hollow installs.</p>',
            ),
            'Sunfield' => array(
                'tagline' => 'Newer Buda development with consistent home styles — steel door upgrades look right at home.',
                'body'    => '<p>Sunfield is a Buda master-planned community known for its walkability and newer construction. The homes were largely built 2015 forward, so builder doors are still in working condition but visibly generic.</p><p>Upgrading to a real steel door is an immediate and obvious improvement.</p>',
            ),
            'Elm Grove' => array(
                'tagline' => 'Quieter Buda neighborhood with steady door upgrade demand.',
                'body'    => '<p>Elm Grove has a mix of established homes that have been looking for door replacements as their original builds age.</p><p>Typical installs are straightforward: 36"×80" single steel doors, occasionally with sidelites for wider openings.</p>',
            ),
        ),

        'Cedar Park' => array(
            'Anderson Mill' => array(
                'tagline' => 'Established Cedar Park community — 1980s–90s homes ready for modern steel entry upgrades.',
                'body'    => '<p>Anderson Mill is one of the original Cedar Park neighborhoods with homes from the 1980s–90s. Many homeowners are now upgrading original fiberglass entries to steel as part of broader curb-appeal projects.</p><p>Replacement work here is efficient — same rough openings, single-day install.</p>',
            ),
            'Buttercup Creek' => array(
                'tagline' => 'Family-oriented Cedar Park area where security and style are both priorities.',
                'body'    => '<p>Buttercup Creek homes often include multi-point locks and smart-lock integration as part of the steel door upgrade. Families here want doors that balance daily-use security with curb appeal.</p><p>Our most-ordered configuration is a 36"×80" steel door with half-lite frosted glass, matte black finish, Schlage Encode or Yale Assure smart lock.</p>',
            ),
            'Brushy Creek' => array(
                'tagline' => 'Long-established Cedar Park community with good tree canopy and established design.',
                'body'    => '<p>Brushy Creek homes tend toward traditional styles with classic single steel doors featuring glass lites.</p><p>Installations here often include matching steel windows on the front elevation as part of a whole-facade refresh.</p>',
            ),
            'Bella Vista' => array(
                'tagline' => 'Newer Cedar Park section with move-in-ready homes.',
                'body'    => '<p>Bella Vista is a recent Cedar Park addition. Builder-grade doors are commonly upgraded to steel within the first year of ownership.</p><p>Post-closing installation works well here since the homes are still under warranty and the openings are square and true.</p>',
            ),
            'Parkside' => array(
                'tagline' => 'Parkside\'s new-build homes are primed for steel door upgrades.',
                'body'    => '<p>Parkside is a master-planned community with consistent home styles that adapt well to steel door replacements. The consistency actually helps — our measurements from one Parkside home often apply to another.</p><p>Popular finishes here are matte black and graphite.</p>',
            ),
            'Twin Creeks' => array(
                'tagline' => 'Twin Creeks golf community homes benefit from steel front entries.',
                'body'    => '<p>Twin Creeks includes both estate homes and more modest builds around the golf course. Steel doors fit the range — single entries on the smaller homes, oversized pivots on the estates.</p>',
            ),
        ),

        'Dripping Springs' => array(
            'Caliterra' => array(
                'tagline' => 'Large-lot acreage in Caliterra — oversized doors are the norm here.',
                'body'    => '<p>Caliterra sits on 600 acres of Hill Country with homes on large lots. We often install oversized pivot entries and panoramic door systems here to match the scale of the homes and the views beyond.</p><p>Wrought iron and steel are both common finishes in Caliterra.</p>',
            ),
            'Headwaters' => array(
                'tagline' => 'Headwaters has a distinct Hill Country look and larger homes — perfect for steel door design.',
                'body'    => '<p>Headwaters is a 1,000-acre community with well-planned streets and large homes. Wrought iron entries, oversized pivot doors, and panoramic rear systems are common requests here.</p>',
            ),
            'Howard Ranch' => array(
                'tagline' => 'Acreage homes in Howard Ranch that take advantage of Hill Country views.',
                'body'    => '<p>Howard Ranch homes sit on multi-acre lots. Many installations here feature large glass systems framing Hill Country views — curtain walls, panoramic sliders, or multi-panel accordion doors onto outdoor living areas.</p>',
            ),
            'Belterra' => array(
                'tagline' => 'Belterra master-planned community with steady steel door demand.',
                'body'    => '<p>Belterra is one of Dripping Springs\' larger planned communities with homes across several price points. Steel door upgrades happen across the community on a steady cadence.</p>',
            ),
            'Founders Ridge' => array(
                'tagline' => 'Newer Dripping Springs community ready for steel door upgrades.',
                'body'    => '<p>Founders Ridge represents newer Dripping Springs construction. Builder-grade door upgrades are common here, usually as a post-closing project.</p>',
            ),
        ),

        'Georgetown' => array(
            'Old Town Georgetown' => array(
                'tagline' => 'Historic district with Victorian-era homes needing period-correct door replacements.',
                'body'    => '<p>Old Town Georgetown\'s historic homes include Victorian, Queen Anne, and bungalow styles. Steel replacements must respect the original profiles, and we shop-draw accordingly.</p><p>True divided-lite grids and historically accurate hardware are the norm for Old Town jobs.</p>',
            ),
            'Park Meadows' => array(
                'tagline' => 'Established Georgetown neighborhood with a range of home ages.',
                'body'    => '<p>Park Meadows has both traditional and more modern homes. Steel doors work across the variety — classic single entries on the older homes, French doors on the newer builds.</p>',
            ),
            'Sun City' => array(
                'tagline' => 'Retiree community in Georgetown — low-maintenance steel doors are the clear choice.',
                'body'    => '<p>Sun City is Georgetown\'s large retiree community. Steel doors here replace aging wood originals and eliminate the need for regular refinishing — critical for homeowners who don\'t want ongoing exterior maintenance.</p><p>Wipe-down is the only upkeep our steel doors need.</p>',
            ),
            'Highland Village' => array(
                'tagline' => 'Modern Georgetown neighborhood with design-focused homeowners.',
                'body'    => '<p>Highland Village homes tend toward modern or transitional styles — steel doors fit the aesthetic naturally.</p><p>Matte black and graphite finishes, clean hardware, clear low-E glass: the typical Highland Village package.</p>',
            ),
            'Berry Creek' => array(
                'tagline' => 'Golf community with estate-scale homes and steel door upgrades to match.',
                'body'    => '<p>Berry Creek Country Club surrounds larger Georgetown homes where steel entries scale appropriately. Wider double doors, full sidelite configurations, and matched patio door systems are common here.</p>',
            ),
        ),

        'Hutto' => array(
            'Star Ranch' => array(
                'tagline' => 'Newer Hutto neighborhood with strong door upgrade demand.',
                'body'    => '<p>Star Ranch is a golf course community in Hutto with newer construction. Many homeowners upgrade the builder\'s standard entry to steel within the first few years of ownership.</p>',
            ),
            'Hutto Highlands' => array(
                'tagline' => 'Fast-growing Hutto Highlands is ripe for entry-door upgrades.',
                'body'    => '<p>Hutto Highlands represents Hutto\'s recent growth. Post-closing door upgrades are common, and the newer construction makes installs predictable.</p>',
            ),
            'Emory Crossing' => array(
                'tagline' => 'Master-planned Emory Crossing community in Hutto.',
                'body'    => '<p>Emory Crossing features consistent home styles where a steel door upgrade is immediately visible from the street. We do regular work here — the upgrade pattern is well-established.</p>',
            ),
            'Riverwalk' => array(
                'tagline' => 'Newer Riverwalk development with entry-door upgrade opportunities.',
                'body'    => '<p>Riverwalk is a newer Hutto neighborhood with move-in-ready homes that benefit from steel door replacements.</p>',
            ),
        ),

        'Kyle' => array(
            'Plum Creek' => array(
                'tagline' => 'Kyle\'s largest master-planned community with hundreds of homes and steady door upgrades.',
                'body'    => '<p>Plum Creek is densely built with homes from the 2000s–2020s. We\'ve installed in roughly half the Plum Creek front elevations at this point — enough that reference homes are easy to find nearby.</p><p>Single doors with half-lite glass are the most common Plum Creek install.</p>',
            ),
            '6 Creeks' => array(
                'tagline' => '6 Creeks is one of Kyle\'s most popular newer communities.',
                'body'    => '<p>6 Creeks features homes across several design styles. Steel door upgrades pair well with the community\'s Texas-traditional aesthetic.</p>',
            ),
            'Crosswinds' => array(
                'tagline' => 'Crosswinds homes fit a Hill Country feel with traditional door upgrades.',
                'body'    => '<p>Crosswinds is a newer Kyle community with family-oriented homes. Standard steel doors with sidelites are popular, often in oil-rubbed bronze or matte black.</p>',
            ),
        ),

        'Lakeway' => array(
            'The Hollows' => array(
                'tagline' => 'Lake Travis views and Hill Country homes — The Hollows homes call for large glass systems.',
                'body'    => '<p>The Hollows is a Lake Travis-adjacent community with homes designed to capture views. We install panoramic doors, curtain walls, and oversized pivot entries here on a steady basis.</p>',
            ),
            'Rough Hollow' => array(
                'tagline' => 'Marina community with waterfront homes that benefit from steel doors.',
                'body'    => '<p>Rough Hollow sits on Lake Travis with homes that need weather-resistant doors capable of handling wind and rain off the water. Multi-point locking, drop-seal bottoms, and wind-rated hardware are all standard specs here.</p>',
            ),
            'Flintrock Falls' => array(
                'tagline' => 'Gated community with Hill Country golf course — larger homes, bigger doors.',
                'body'    => '<p>Flintrock Falls homes often include oversized pivot entries and wrought iron doors. We do regular work here — the homes are large enough that door scale is a primary design concern.</p>',
            ),
            'Lakeway Highlands' => array(
                'tagline' => 'Newer section of Lakeway with modern architecture.',
                'body'    => '<p>Lakeway Highlands features more contemporary home styles. Steel pivots, panoramic patios, and curtain walls are the usual requests.</p>',
            ),
            'Serene Hills' => array(
                'tagline' => 'Master-planned community in Lakeway with Hill Country character.',
                'body'    => '<p>Serene Hills homes span traditional and modern styles. Matching steel entry and patio doors are common — clients often do the front door and back patio system together.</p>',
            ),
            'Vineyard Bay' => array(
                'tagline' => 'Waterfront Lake Travis community where doors take the weather.',
                'body'    => '<p>Vineyard Bay homes face the lake directly. Multi-point locking, continuous compression seals, and wind-rated hardware are all standard specs here. Panoramic doors onto waterfront patios are common.</p>',
            ),
        ),

        'Leander' => array(
            'Crystal Falls' => array(
                'tagline' => 'Leander\'s largest and most-worked community — steel door upgrades across hundreds of homes.',
                'body'    => '<p>Crystal Falls is Leander\'s flagship master-planned community. Homes here are large enough that we often do full exterior door packages — front entry, back patio, and side-yard access all coordinated as one project.</p>',
            ),
            'Travisso' => array(
                'tagline' => 'Hill Country estate homes in Travisso demand steel doors to match the scale.',
                'body'    => '<p>Travisso homes sit on larger lots with Hill Country-style architecture. Oversized wrought iron and steel pivot entries are the standard. Matching panoramic patio doors often follow on the rear elevation.</p>',
            ),
            'Cornerstone' => array(
                'tagline' => 'Established Leander community with consistent steel door upgrade demand.',
                'body'    => '<p>Cornerstone is a family-oriented community where steel door replacements happen steadily as original doors age. Typical upgrades are 36"×80" singles with half-lite glass.</p>',
            ),
            'Oaks at San Gabriel' => array(
                'tagline' => 'Newer Leander community with homes primed for steel upgrades.',
                'body'    => '<p>Oaks at San Gabriel features newer construction with builder-grade doors that are commonly upgraded to steel within the first two years of ownership.</p>',
            ),
            'Bryson' => array(
                'tagline' => 'Master-planned Bryson community in Leander with active steel door upgrades.',
                'body'    => '<p>Bryson homes are mid-priced to larger. Both builder-installed and post-closing steel door upgrades happen here at a steady pace.</p>',
            ),
        ),

        'Manor' => array(
            'Whisper Valley' => array(
                'tagline' => 'Master-planned Whisper Valley in Manor — energy-efficient homes that pair well with thermally broken steel doors.',
                'body'    => '<p>Whisper Valley markets itself as a net-zero community with geothermal and solar systems built into every home. Our thermally broken steel entries support the efficiency goal — U-factor 0.24–0.28 on fixed doors, well within net-zero envelope requirements.</p>',
            ),
            'ShadowGlen' => array(
                'tagline' => 'Manor\'s ShadowGlen has golf course homes and steady door demand.',
                'body'    => '<p>ShadowGlen surrounds a Jack Nicklaus golf course with homes across several price points. Steel door replacements are common, ranging from single entries to estate-scale double doors.</p>',
            ),
            'EastVillage' => array(
                'tagline' => 'EastVillage is one of Manor\'s newer communities, primed for door upgrades.',
                'body'    => '<p>EastVillage features newer construction. Steel door upgrades during or after closing are frequent.</p>',
            ),
            'Presidential Meadows' => array(
                'tagline' => 'Manor\'s Presidential Meadows has a mix of newer homes with standard builder doors.',
                'body'    => '<p>Presidential Meadows homeowners often upgrade the builder\'s entry to steel as one of their first post-move-in projects.</p>',
            ),
        ),

        'Pflugerville' => array(
            'Windermere' => array(
                'tagline' => 'Pflugerville\'s established Windermere community has 20+ year old homes due for door upgrades.',
                'body'    => '<p>Windermere homes were built in the 1990s and early 2000s. Original fiberglass doors are now showing 25+ years of Texas weather — swollen stiles, gone weather-stripping, chalked finish. Steel replacement solves all three.</p>',
            ),
            'Heatherwilde' => array(
                'tagline' => 'Long-established Heatherwilde community — classic replacement work.',
                'body'    => '<p>Heatherwilde homes are in the same age range as Windermere with similar door-replacement patterns. Single steel doors are the most common install.</p>',
            ),
            'Highland Park' => array(
                'tagline' => 'Pflugerville\'s Highland Park has larger, more established homes.',
                'body'    => '<p>Highland Park homes tend to be larger. Steel French doors and double entries are common upgrades, often paired with matching steel patio systems.</p>',
            ),
            'Avalon' => array(
                'tagline' => 'Newer Avalon community in Pflugerville with door upgrade opportunities.',
                'body'    => '<p>Avalon is among Pflugerville\'s newer master-planned communities. Builder-grade door upgrades are frequent and straightforward — newer homes mean square, true openings.</p>',
            ),
            'Sorento' => array(
                'tagline' => 'Sorento is another newer Pflugerville community with steady demand.',
                'body'    => '<p>Sorento homes are relatively new with builder-grade entries ready for steel upgrades. Most installs are post-closing.</p>',
            ),
            'Villages of Hidden Lake' => array(
                'tagline' => 'Older-established community with steel door replacement opportunities.',
                'body'    => '<p>Villages of Hidden Lake is a quieter Pflugerville community with homes from the early 2000s that are now due for door upgrades.</p>',
            ),
        ),

        'Rollingwood' => array(
            'Hatley' => array(
                'tagline' => 'The Hatley section of Rollingwood — long-established homes with discreet, custom steel doors.',
                'body'    => '<p>Hatley runs along Rollingwood\'s east-west streets. Our work here tends to be referral-driven and fully custom — oversized pivot entries, panoramic patio doors, and interior steel doors for home offices and wine rooms.</p>',
            ),
            'Rockbridge' => array(
                'tagline' => 'Rockbridge in Rollingwood — architect-driven renovations with steel door components.',
                'body'    => '<p>Rockbridge features architect-designed homes. Steel panoramic systems and pivot entries are common on renovations — we shop-draw to the architect\'s spec and coordinate through the GC.</p>',
            ),
        ),

        'Round Rock' => array(
            'Forest Creek' => array(
                'tagline' => 'Forest Creek is one of Round Rock\'s most-worked communities for steel door replacements.',
                'body'    => '<p>Forest Creek homes are mostly 2000s-era. Original builder-grade doors are commonly replaced with steel — the upgrade is immediately visible from the street and the door will outlive the rest of the home.</p>',
            ),
            'Behrens Ranch' => array(
                'tagline' => 'Established Round Rock community with estate-scale homes.',
                'body'    => '<p>Behrens Ranch has larger homes where steel double doors and French doors fit well. We also do plenty of single entries here.</p>',
            ),
            'Teravista' => array(
                'tagline' => 'Golf course community homes in Teravista prefer steel door upgrades.',
                'body'    => '<p>Teravista surrounds a golf course. Steel French doors onto covered patios are common installs, along with front entry upgrades.</p>',
            ),
            'Paloma Lake' => array(
                'tagline' => 'Paloma Lake is a master-planned Round Rock community with active upgrades.',
                'body'    => '<p>Paloma Lake homes include traditional and modern styles. Steel doors fit both aesthetics — we do classic 6-lite French doors and minimalist pivot entries in roughly equal volume here.</p>',
            ),
            'Chisholm Valley' => array(
                'tagline' => 'Long-established Chisholm Valley community — steel door replacements are steady work.',
                'body'    => '<p>Chisholm Valley homes date to the 1980s–90s. Original doors are commonly replaced, usually as part of broader curb-appeal projects.</p>',
            ),
            'Stone Canyon' => array(
                'tagline' => 'Stone Canyon is one of Round Rock\'s newer developments.',
                'body'    => '<p>Stone Canyon features newer construction with builder-grade entries ready for steel upgrades. Post-closing installation is the most common pattern here.</p>',
            ),
        ),

        'West Lake Hills' => array(
            'Davenport' => array(
                'tagline' => 'Davenport Ranch homes in West Lake Hills — architect-driven with steel door components.',
                'body'    => '<p>Davenport Ranch is a gated West Lake Hills community with custom homes. We do oversized pivots, panoramic systems, and curtain walls here regularly — most jobs come through the architect or builder.</p>',
            ),
            'Rob Roy' => array(
                'tagline' => 'Rob Roy estate homes — large-scale custom steel doors.',
                'body'    => '<p>Rob Roy homes are often architect-designed estates. Full door packages and curtain wall systems are common here — interior steel doors for home offices, wine rooms, and pantries as part of whole-home projects.</p>',
            ),
            'Las Lomas' => array(
                'tagline' => 'Las Lomas in West Lake Hills — custom homes with custom door needs.',
                'body'    => '<p>Las Lomas features a mix of established and newer custom homes. Our work here is fully custom to each home\'s architecture — no off-the-shelf sizes.</p>',
            ),
            'Indian Hills' => array(
                'tagline' => 'Indian Hills in West Lake Hills — quiet custom-home neighborhood.',
                'body'    => '<p>Indian Hills homes are larger custom builds. Steel door installations are part of full exterior renovations, often coordinated with window and patio door packages.</p>',
            ),
        ),

    );
}
