<?php
/**
 * One-time product content seeder.
 * Called manually via CLI; does not auto-run.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

function sda_get_product_content_map() {
    $specs_door_default = array(
        array( 'label' => 'Frame Material', 'value' => '14-gauge cold-rolled steel, fully welded corners' ),
        array( 'label' => 'Glass',          'value' => '1" insulated dual-pane low-E, argon-filled, tempered' ),
        array( 'label' => 'Finish',         'value' => 'Polyester powder-coat over zinc-rich primer, 30+ colors' ),
        array( 'label' => 'Hardware',       'value' => 'Ball-bearing hinges, multi-point lock option' ),
        array( 'label' => 'Warranty',       'value' => '10-year finish, 25-year structural' ),
        array( 'label' => 'Lead Time',      'value' => '8–12 weeks (custom)' ),
    );

    $specs_window_default = array(
        array( 'label' => 'Frame Material', 'value' => '14-gauge welded steel, thermally broken option' ),
        array( 'label' => 'Glass',          'value' => 'Dual-pane low-E, argon-filled, warm-edge spacer' ),
        array( 'label' => 'U-factor',       'value' => '0.28 – 0.34' ),
        array( 'label' => 'SHGC',           'value' => '0.25 – 0.38' ),
        array( 'label' => 'Finish',         'value' => 'Powder-coat, interior/exterior can differ' ),
        array( 'label' => 'Warranty',       'value' => '10-year finish, 20-year glass seal' ),
        array( 'label' => 'Lead Time',      'value' => '6–10 weeks' ),
    );

    return array(

        'Wrought Iron Entry Doors' => array(
            'short' => 'Hand-forged wrought iron entry doors built to handle Texas weather while anchoring the look of a home. Custom-fabricated at our Austin shop.',
            'body'  => '<p>Our wrought iron entry doors are hammered, welded, and finished by fabricators who have been doing this work for decades. We use 12- to 14-gauge cold-rolled steel for the frames and solid iron bar stock for the decorative work — no hollow tubing, no thin gauge shortcuts.</p>
<h2>What goes into every door</h2>
<ul>
  <li>Fully welded frame with optional continuous thermal break</li>
  <li>1" insulated low-E glass, tempered as standard</li>
  <li>Ball-bearing hinges rated for doors up to 250 lbs</li>
  <li>Powder-coat finish over zinc-rich primer for long-term corrosion protection</li>
  <li>Optional clavos, scrollwork, ornamental grilles, and custom glass patterns</li>
</ul>
<h2>Where they fit</h2>
<p>Wrought iron entry doors pair well with Tuscan, Mediterranean, Spanish Colonial, and modern farmhouse homes throughout Central Texas. The thermally broken frames also perform in our climate — interior frame surfaces stay near room temperature even when the outside face is absorbing 100°F afternoon sun.</p>
<h2>Customization</h2>
<p>Standard sizes run up to 48" × 96" for singles and 96" × 108" for doubles. Bring drawings if you need something outside those ranges — we shop-draw and confirm every detail before steel is cut. Finishes include matte black, aged bronze, satin silver, and any RAL color. Glass options range from clear to seedy, rain, reeded, and custom leaded patterns.</p>',
            'specs' => array(
                array( 'label' => 'Frame Material', 'value' => '12–14 gauge cold-rolled steel, solid iron decorative bars' ),
                array( 'label' => 'Glass',          'value' => '1" insulated low-E, tempered standard' ),
                array( 'label' => 'Max Size',       'value' => 'Single 48" × 96" / Double 96" × 108"' ),
                array( 'label' => 'Finish',         'value' => 'Powder-coat over zinc primer, 30+ colors' ),
                array( 'label' => 'Hardware',       'value' => 'Ball-bearing hinges, multi-point lock' ),
                array( 'label' => 'Warranty',       'value' => '10-year finish, 25-year structural' ),
                array( 'label' => 'Lead Time',      'value' => '10–14 weeks' ),
            ),
        ),

        'Steel Pivot Doors' => array(
            'short' => 'Modern steel pivot doors that make an entry. Engineered to swing smoothly at oversized heights with hidden hardware.',
            'body'  => '<p>A pivot door rotates on a central point rather than on hinges mounted to the jamb. That lets us build doors up to 10 feet tall and 5 feet wide without the long-term sag a standard hinged door develops past about 8 feet.</p>
<h2>Hardware and construction</h2>
<ul>
  <li>14-gauge steel skin over a welded tube frame</li>
  <li>Dorma, FritsJurgens, or equivalent top/bottom pivot sets</li>
  <li>Soft-close option on heavy doors</li>
  <li>Full-height glass or partial glass available</li>
  <li>10-year structural warranty on frame and pivot hardware</li>
</ul>
<h2>Finish and detail</h2>
<p>Stock finishes include matte black, aged bronze, and brushed steel. We can spray-match any paint code from our library. Handles are custom-cut from the same finish for a clean, one-material look. Pull sizes range from 36" to full-door height.</p>
<h2>Typical build</h2>
<p>A 4\' × 9\' pivot in matte black with clear low-E glass runs about 8 weeks from deposit to install. Larger sizes, custom glass, or bronze finishes add 2–4 weeks. Shop drawings go out within 10 business days of your measure appointment.</p>',
            'specs' => array(
                array( 'label' => 'Frame Material', 'value' => '14-gauge welded steel tube frame' ),
                array( 'label' => 'Glass',          'value' => '1" insulated low-E, tempered' ),
                array( 'label' => 'Max Size',       'value' => '60" × 120"' ),
                array( 'label' => 'Pivot Hardware', 'value' => 'Dorma / FritsJurgens / soft-close optional' ),
                array( 'label' => 'Finish',         'value' => 'Powder-coat, matte black most popular' ),
                array( 'label' => 'Warranty',       'value' => '10-year structural, 5-year hardware' ),
                array( 'label' => 'Lead Time',      'value' => '8–12 weeks' ),
            ),
        ),

        'Steel Double Doors' => array(
            'short' => 'Matched steel double doors for grand entrances, garden gates, and split-opening interior transitions.',
            'body'  => '<p>A double steel door is two leaves sharing a single frame, usually with one active leaf and one fixed leaf locked by a cremone bolt. Done right, the stiles meet cleanly with a reveal under 1/16".</p>
<h2>Standard configurations</h2>
<ul>
  <li>Equal swing: 36" + 36" (72" total) up to 48" + 48" (96" total)</li>
  <li>Unequal swing: 24" + 36" for narrow openings that still need wide access</li>
  <li>Active leaf with lockset; inactive leaf with cremone bolt</li>
  <li>Astragal and gasket seal between the two meeting stiles</li>
</ul>
<h2>Build details</h2>
<ul>
  <li>14-gauge steel frames with fully welded corners</li>
  <li>Dual-pane low-E tempered glass — dozens of grid patterns</li>
  <li>Weatherstripping on all four sides, including between leaves</li>
  <li>Concealed ball-bearing hinges or exposed barrel hinges</li>
</ul>
<h2>Finish choices</h2>
<p>Matte black is the most-ordered color, but we run bronze, graphite, white, and custom RAL finishes regularly. For exterior applications we spec a zinc-rich primer under the polyester powder-coat to fight oxidation even under irrigation overspray.</p>',
            'specs' => array(
                array( 'label' => 'Frame Material', 'value' => '14-gauge welded steel' ),
                array( 'label' => 'Glass',          'value' => '1" insulated low-E, tempered' ),
                array( 'label' => 'Sizes',          'value' => '72" – 96" total width, up to 120" tall' ),
                array( 'label' => 'Meeting Stile',  'value' => 'Astragal + compression gasket + cremone' ),
                array( 'label' => 'Hardware',       'value' => 'Multi-point lock active, cremone inactive' ),
                array( 'label' => 'Warranty',       'value' => '10-year finish, 25-year structural' ),
                array( 'label' => 'Lead Time',      'value' => '8–12 weeks' ),
            ),
        ),

        'Steel Single Doors' => array(
            'short' => 'A single steel door is the simplest path to a harder, better-looking entry. Thin profiles, big glass, long life.',
            'body'  => '<p>The single-leaf steel door covers most of our residential front-door work. Typical sizes are 36" × 80" or 42" × 96", but we\'ll build them as tall as 120" with a reinforced frame.</p>
<h2>Construction at a glance</h2>
<ul>
  <li>Frame: 14-gauge cold-rolled steel, fully welded corners</li>
  <li>Glass: 1" insulated unit, argon-filled, low-E coated</li>
  <li>Skin: mill-smooth or textured (sand-blasted, brushed)</li>
  <li>Threshold: aluminum with replaceable vinyl weather seal</li>
  <li>Locks: single-point deadbolt standard; multi-point available</li>
</ul>
<h2>Why steel beats wood for front entries</h2>
<p>Steel doors don\'t warp with humidity swings, don\'t rot at the bottom rail, and don\'t need refinishing every couple of years. Maintenance is an occasional wipe-down and annual hinge lubrication. In Central Texas, where summer UV and winter north wind both punish wood, that difference shows up fast.</p>
<h2>Finish and hardware</h2>
<p>Matte black leads the request list, followed by oil-rubbed bronze and graphite. Hardware is ground and finished to match, so handles, hinges, and deadbolt plates all read as one material. Smart locks (August, Yale, Schlage Encode) drop in with a trim kit.</p>',
            'specs' => array(
                array( 'label' => 'Frame Material', 'value' => '14-gauge cold-rolled steel' ),
                array( 'label' => 'Glass',          'value' => '1" insulated low-E, argon-filled, tempered' ),
                array( 'label' => 'Standard Sizes', 'value' => '36" × 80" or 42" × 96"' ),
                array( 'label' => 'Max Size',       'value' => '48" × 120"' ),
                array( 'label' => 'Finish',         'value' => 'Powder-coat, 30+ stock colors' ),
                array( 'label' => 'Warranty',       'value' => '10-year finish, 25-year structural' ),
                array( 'label' => 'Lead Time',      'value' => '6–10 weeks' ),
            ),
        ),

        'Steel Doors with Side Windows' => array(
            'short' => 'Steel entry doors flanked by fixed sidelites — more daylight, same security, matching profiles throughout.',
            'body'  => '<p>A sidelite is a narrow fixed window next to the main door, framed in the same steel profile. Most of our sidelite doors run either one side or both, with widths from 8 to 18 inches per panel.</p>
<h2>How we build them</h2>
<ul>
  <li>Active door + one or two sidelites in a single continuous frame</li>
  <li>Same 1" insulated low-E glass throughout</li>
  <li>Matching grid pattern between door glass and sidelite glass</li>
  <li>Sidelites are structurally fixed — no hardware visible</li>
</ul>
<h2>Configurations we do most</h2>
<ul>
  <li>36" door + 12" sidelite (single-side)</li>
  <li>36" door + 12" sidelites on both sides (symmetric)</li>
  <li>42" door + 14" sidelite (wider entry)</li>
</ul>
<h2>Glass considerations</h2>
<p>If privacy matters, seedy, reeded, or frosted glass in the sidelites keeps the daylight but blocks line-of-sight. Clear glass with a curtain rod above the sidelites is another common approach. All glass in doors and sidelights is tempered to meet Texas building code.</p>
<h2>Finish match</h2>
<p>Because the door and sidelites share a frame, powder-coat and glass are applied to the whole assembly at once — there is no color seam between the door and the sidelites.</p>',
            'specs' => array(
                array( 'label' => 'Frame Material', 'value' => '14-gauge welded steel, shared frame' ),
                array( 'label' => 'Glass',          'value' => '1" insulated low-E, tempered' ),
                array( 'label' => 'Sidelite Width', 'value' => '8" – 18" per panel' ),
                array( 'label' => 'Configurations', 'value' => 'Single-side, both-sides, asymmetric' ),
                array( 'label' => 'Finish',         'value' => 'Powder-coat, matched door + sidelite' ),
                array( 'label' => 'Warranty',       'value' => '10-year finish, 25-year structural' ),
                array( 'label' => 'Lead Time',      'value' => '8–10 weeks' ),
            ),
        ),

        'Steel Doors with Top Windows' => array(
            'short' => 'Steel entry doors with a transom above — adds height, daylight, and proportion to tall openings.',
            'body'  => '<p>A transom is a window above the door, typically 12" to 36" tall. It brings light into a foyer without compromising door security, and it visually raises the ceiling of the entry.</p>
<h2>Build approach</h2>
<ul>
  <li>Transom shares the door\'s frame so the assembly reads as one unit</li>
  <li>Fixed (non-operable) on most installs for tighter sealing</li>
  <li>Operable transom option available with a cam-operated ring pull</li>
</ul>
<h2>Common sizes</h2>
<ul>
  <li>36" × 80" door + 36" × 12" transom (92" total)</li>
  <li>42" × 96" door + 42" × 18" transom (114" total)</li>
  <li>Pair with sidelites for a four- or five-lite assembly</li>
</ul>
<h2>Glass and grid</h2>
<p>Arched and stepped transoms are popular. Divided-lite patterns in the transom look best when they align with the door grid below. Low-E insulated glass is standard; frosted or reeded upgrades give privacy when the transom faces a neighboring window.</p>
<h2>When a transom makes sense</h2>
<p>Any opening taller than about 86" benefits from a transom. Rather than building an abnormally tall door (which adds weight and hinge stress), a transom handles the height cleanly and gives you a second glass plane for design interest.</p>',
            'specs' => array(
                array( 'label' => 'Frame Material', 'value' => '14-gauge welded steel, shared frame' ),
                array( 'label' => 'Glass',          'value' => '1" insulated low-E, tempered' ),
                array( 'label' => 'Transom Height', 'value' => '12" – 36"' ),
                array( 'label' => 'Operable Option','value' => 'Cam-action with ring pull' ),
                array( 'label' => 'Finish',         'value' => 'Powder-coat, matched door + transom' ),
                array( 'label' => 'Warranty',       'value' => '10-year finish, 25-year structural' ),
                array( 'label' => 'Lead Time',      'value' => '8–10 weeks' ),
            ),
        ),

        'Steel Interior Doors' => array(
            'short' => 'Steel interior doors for offices, pantries, wine rooms, and anywhere you want a design statement without losing daylight.',
            'body'  => '<p>Interior doesn\'t have to mean wood. Steel interior doors have become the go-to for modern farmhouse and industrial interiors because they run thinner profiles (3/4" sightlines) and bigger glass panels than any framed wood door.</p>
<h2>Typical use cases</h2>
<ul>
  <li>Home office: full glass with divided lites for a library feel</li>
  <li>Pantry: glass-top with steel-skin bottom, 32"–36" wide</li>
  <li>Wine cellar: custom cooling-rated gasket and seedy glass</li>
  <li>Primary suite: oversized pivot or double-leaf for impact</li>
</ul>
<h2>What we do differently indoors</h2>
<ul>
  <li>Lighter 16-gauge frame since exterior weatherproofing isn\'t needed</li>
  <li>Cleaner hardware — no threshold or weather seal to accommodate</li>
  <li>Interior-grade powder coat with a softer finish sheen</li>
  <li>Optional mortised floor guide on sliding or pocket conversions</li>
</ul>
<h2>Glass options</h2>
<p>Clear low-iron glass (no greenish cast) is the interior bestseller. Seedy, rain, reeded, and sandblasted glass add privacy while keeping the light. We do custom leaded and caming patterns for period-style homes.</p>
<h2>Timelines</h2>
<p>Interior jobs usually install in 6–8 weeks because we skip the waterproofing step and don\'t have to coordinate with exterior envelope work.</p>',
            'specs' => array(
                array( 'label' => 'Frame Material', 'value' => '16-gauge welded steel, 3/4" sightlines' ),
                array( 'label' => 'Glass',          'value' => 'Single-pane clear low-iron or specialty' ),
                array( 'label' => 'Standard Sizes', 'value' => '30" – 42" wide, up to 108" tall' ),
                array( 'label' => 'Configurations', 'value' => 'Hinged, pivot, sliding, pocket' ),
                array( 'label' => 'Finish',         'value' => 'Interior-grade powder-coat' ),
                array( 'label' => 'Warranty',       'value' => '10-year finish, 25-year structural' ),
                array( 'label' => 'Lead Time',      'value' => '6–8 weeks' ),
            ),
        ),

        'Steel Wine Cellar / Wine Room' => array(
            'short' => 'Temperature-sealed steel doors for wine rooms, built to hold 55°F against a 75°F interior.',
            'body'  => '<p>A wine cellar door isn\'t just a regular door with a wine rack behind it. It needs a continuous thermal break, a triple-gasket seal, and insulated glass rated for the temperature differential between the cellar and the surrounding room.</p>
<h2>How we build ours</h2>
<ul>
  <li>Fully thermally broken frame — polyamide strut between interior and exterior steel</li>
  <li>Triple-pane or argon-filled dual-pane insulated glass</li>
  <li>Silicone compression gasket at head, jambs, and sill</li>
  <li>Automatic door bottom that drops when the door closes</li>
  <li>Vapor barrier between frame and rough opening</li>
</ul>
<h2>Temperature performance</h2>
<p>Built and installed correctly, our wine doors hold a 20°F differential with less than 1% condensation risk. We test each install by leaving a temperature and humidity meter on the door for 24 hours before handing it over.</p>
<h2>Finishes</h2>
<p>Most wine doors get clear low-iron glass so the collection is the feature. The steel frame is typically matte black or graphite to let the bottles carry the color. Custom wrought-iron detailing (scrollwork, initials, vineyard motifs) is available.</p>
<h2>Planning</h2>
<p>Because wine rooms are usually part of a larger finish-out, we schedule the door measure <em>after</em> HVAC and insulation are done but <em>before</em> drywall finish so the jamb is set cleanly against the rough opening.</p>',
            'specs' => array(
                array( 'label' => 'Frame Material', 'value' => '14-gauge thermally broken steel' ),
                array( 'label' => 'Glass',          'value' => 'Dual or triple-pane insulated low-iron' ),
                array( 'label' => 'Seal System',    'value' => 'Silicone compression + auto door bottom' ),
                array( 'label' => 'Temp Rating',    'value' => '20°F differential sustained' ),
                array( 'label' => 'Finish',         'value' => 'Matte black / graphite most common' ),
                array( 'label' => 'Warranty',       'value' => '10-year finish, 25-year structural' ),
                array( 'label' => 'Lead Time',      'value' => '10–14 weeks' ),
            ),
        ),

        'Steel Bifold Doors' => array(
            'short' => 'Steel bifold doors stack neatly to the side — ideal for patios, pantries, and large openings where swing space is tight.',
            'body'  => '<p>A bifold door is two or more panels hinged together that fold flat against one side of the opening when open. It gives you 80–90% clear width with zero outswing into a patio or interior room.</p>
<h2>Sizes we build</h2>
<ul>
  <li>2-panel: up to 6\' wide</li>
  <li>3-panel: up to 9\' wide</li>
  <li>4-panel: up to 12\' wide</li>
  <li>6-panel: up to 18\' wide (commercial or oversized residential)</li>
</ul>
<h2>Hardware</h2>
<p>Top-hung bifold tracks from SL25, G-U, or equivalent. Bottom guide is a low-profile pin that does not interrupt floor flow. Locking is a single lever at the lead panel, or a three-point mortise if security is the priority.</p>
<h2>Glass and frame</h2>
<p>Full-height insulated low-E glass in each panel is standard, with thin mid-rails for divided-lite looks. Frame is 14-gauge welded steel; panels stack to about 4–5" of depth when folded.</p>
<h2>Where they install well</h2>
<p>Kitchen-to-patio transitions, pool houses, covered porches, and retail storefronts. Because they stack to the side rather than swinging outward, they work well on homes with narrow yards or tight setbacks.</p>',
            'specs' => array(
                array( 'label' => 'Frame Material', 'value' => '14-gauge welded steel' ),
                array( 'label' => 'Glass',          'value' => '1" insulated low-E, tempered' ),
                array( 'label' => 'Max Width',      'value' => '18\' (6-panel system)' ),
                array( 'label' => 'Max Height',     'value' => '9\'' ),
                array( 'label' => 'Track',          'value' => 'Top-hung SL25 / G-U hardware' ),
                array( 'label' => 'Finish',         'value' => 'Powder-coat, 30+ colors' ),
                array( 'label' => 'Lead Time',      'value' => '10–14 weeks' ),
            ),
        ),

        'Steel French Doors' => array(
            'short' => 'Steel French doors — a pair of glass doors that swings out, in, or into a pocket. Classic look, modern performance.',
            'body'  => '<p>French doors are a pair of inswing or outswing hinged doors with full-length glass. Traditionally built in wood, steel versions have become the preferred build for Central Texas because of how they handle heat, humidity, and long-term use.</p>
<h2>Configurations</h2>
<ul>
  <li>6\' opening (two 36" doors) — standard patio size</li>
  <li>8\' opening (two 48" doors) — wider flow</li>
  <li>10\'+ opening with fixed sidelites outside the active pair</li>
</ul>
<h2>What steel does better than wood here</h2>
<ul>
  <li>No warping when leaves sit exposed to 100°F sun on one face and AC on the other</li>
  <li>No bottom-rail rot from lawn irrigation overspray or afternoon storms</li>
  <li>Thinner profile — wood needs 2" stiles to stay stiff; we do it in 1-3/8"</li>
</ul>
<h2>Hardware</h2>
<p>Multi-point locking is the right call on steel French doors — one throw of the lever engages top, center, and bottom pins for a dead-on seal. Exposed barrel hinges or fully concealed hinges, both available.</p>
<h2>Grid options</h2>
<p>Colonial 4-lite, 6-lite, and 10-lite grids are available as either true divided lites (each pane separate) or applied lites (single glass with grid caming on both sides). Applied is more thermally efficient; true divided looks period-correct.</p>',
            'specs' => array(
                array( 'label' => 'Frame Material', 'value' => '14-gauge welded steel, 1-3/8" stiles' ),
                array( 'label' => 'Glass',          'value' => '1" insulated low-E, tempered' ),
                array( 'label' => 'Standard Widths','value' => '6\', 8\', 10\'+' ),
                array( 'label' => 'Grid Options',   'value' => 'True divided or applied lites' ),
                array( 'label' => 'Lock',           'value' => 'Multi-point mortise' ),
                array( 'label' => 'Finish',         'value' => 'Powder-coat, 30+ colors' ),
                array( 'label' => 'Lead Time',      'value' => '8–12 weeks' ),
            ),
        ),

        'Steel Sliding Doors' => array(
            'short' => 'Steel sliding doors glide on a top-hung track — no threshold interruption, big clear openings, minimal moving parts.',
            'body'  => '<p>Sliding doors don\'t need swing clearance. They fit where a French door cannot — kitchen islands near patio walls, narrow bedrooms with shared bathrooms, wall-to-wall glass on a covered porch.</p>
<h2>Build details</h2>
<ul>
  <li>Top-hung carriage on a hardened steel or aluminum track</li>
  <li>Bottom guide pin, flush-mount so floors stay unbroken</li>
  <li>Single or double track for 2-panel (one slides) or 4-panel (both slide past each other)</li>
  <li>Full-length insulated glass with thin 1-3/8" stiles</li>
</ul>
<h2>Size range</h2>
<p>Single slider up to 8 feet wide; multi-track systems up to 20 feet. For openings larger than that we usually suggest a panoramic (pocket) or accordion system instead.</p>
<h2>Weather performance</h2>
<p>Our slider uses a dual-brush and compression-gasket combination at the meeting stile, plus a drop seal at the bottom that engages when the door is closed and locked. Tested to 50 mph wind-driven rain with zero infiltration.</p>
<h2>Ideal applications</h2>
<p>Pool-deck openings, open-plan living rooms with patio access, narrow side-yard exits. Not our first pick for north-facing winter-wind exposures — an inswing door seals marginally tighter against sustained wind load.</p>',
            'specs' => array(
                array( 'label' => 'Frame Material', 'value' => '14-gauge welded steel' ),
                array( 'label' => 'Glass',          'value' => '1" insulated low-E, tempered' ),
                array( 'label' => 'Max Size',       'value' => '20\' multi-track' ),
                array( 'label' => 'Track',          'value' => 'Top-hung hardened steel' ),
                array( 'label' => 'Seal',           'value' => 'Dual-brush + drop seal' ),
                array( 'label' => 'Finish',         'value' => 'Powder-coat, 30+ colors' ),
                array( 'label' => 'Lead Time',      'value' => '10–14 weeks' ),
            ),
        ),

        'Steel Pocket Doors' => array(
            'short' => 'Steel pocket doors slide into the wall — invisible when open, full door when closed. Ideal for bathrooms, pantries, and zoned living spaces.',
            'body'  => '<p>A pocket door rolls into a pre-framed cavity in the adjacent wall. Our cavity kits use steel studs with non-bowing tracks. Unlike wood-stud pocket frames, they stay true over time even if the house settles.</p>
<h2>Sizes</h2>
<ul>
  <li>30", 32", 36", 42" standard single-pocket</li>
  <li>Double-pocket (two doors meeting in the middle) for openings up to 96" wide</li>
</ul>
<h2>When a pocket door beats a swing door</h2>
<ul>
  <li>Tight bathrooms where a swing door would hit the vanity</li>
  <li>Home offices that need to close during calls but open the rest of the time</li>
  <li>Pantry / laundry pairs off a kitchen hall</li>
</ul>
<h2>Frame and glass</h2>
<p>14-gauge welded steel frame, usually with a single large pane or divided-lite design. Opaque glass (frosted, reeded, seedy) is popular for bathroom pockets where privacy matters.</p>
<h2>Hardware</h2>
<p>Soft-open and soft-close on both directions using dual dampers. Flush pulls on both sides, or a recessed finger notch if you prefer minimal visible hardware. Privacy lock with push-button interior and thumb-release exterior.</p>
<h2>Install reality</h2>
<p>Pocket doors are framed during rough construction. If the wall is already finished, we can still do it — but it means cutting the wall open, installing the pocket frame, and refinishing. Plan ahead if you can.</p>',
            'specs' => array(
                array( 'label' => 'Frame Material', 'value' => '14-gauge welded steel, steel-stud cavity' ),
                array( 'label' => 'Glass',          'value' => 'Clear or privacy glass' ),
                array( 'label' => 'Standard Widths','value' => '30" – 42" single, up to 96" double' ),
                array( 'label' => 'Hardware',       'value' => 'Soft-close dual damper, flush pulls' ),
                array( 'label' => 'Privacy Lock',   'value' => 'Push-button / thumb-release' ),
                array( 'label' => 'Finish',         'value' => 'Interior-grade powder-coat' ),
                array( 'label' => 'Lead Time',      'value' => '8–10 weeks' ),
            ),
        ),

        'Steel Accordion Doors' => array(
            'short' => 'Steel accordion doors fold across an opening in multiple leaves — the largest clear openings we build, up to 40 feet wide.',
            'body'  => '<p>Both accordion and bifold doors fold, but they handle different opening sizes. Bifolds stack to one end (or split to both ends); accordions use more leaves (6, 8, 10+) and fold tighter, handling wider openings.</p>
<h2>Where they excel</h2>
<ul>
  <li>Indoor-outdoor living spaces 14–40 feet wide</li>
  <li>Restaurants and event spaces that need fully open during service, fully closed after hours</li>
  <li>Pool houses with oversized openings</li>
  <li>Commercial storefronts</li>
</ul>
<h2>Build specs</h2>
<ul>
  <li>6 to 14 panels, each 18" – 36" wide</li>
  <li>Top-hung track, usually concealed in a pocket above the opening</li>
  <li>Bottom guide pin on each panel</li>
  <li>Panels stack to ~6–8" depth when folded against a wall</li>
</ul>
<h2>Glass and frame</h2>
<p>Full-height insulated low-E glass per panel. Frame is 14-gauge welded steel. For truly oversized walls we reinforce with concealed structural steel in the header.</p>
<h2>Weather sealing</h2>
<p>With 6–14 meeting stiles, we use a dual-brush seal at every joint plus a compression drop seal at the sill. Tested to the same 50 mph wind-driven rain standard as our sliding systems.</p>
<h2>Lead time</h2>
<p>Accordion systems are custom-engineered per opening — expect 10–14 weeks. Install is a 2–3 day job with a crew of three.</p>',
            'specs' => array(
                array( 'label' => 'Frame Material', 'value' => '14-gauge welded steel' ),
                array( 'label' => 'Glass',          'value' => '1" insulated low-E, tempered' ),
                array( 'label' => 'Max Width',      'value' => '40\' (14-panel system)' ),
                array( 'label' => 'Panels',         'value' => '6 – 14 leaves, 18"–36" each' ),
                array( 'label' => 'Seal',           'value' => 'Dual-brush + drop seal' ),
                array( 'label' => 'Finish',         'value' => 'Powder-coat, 30+ colors' ),
                array( 'label' => 'Lead Time',      'value' => '10–14 weeks' ),
            ),
        ),

        'Steel Panoramic Doors' => array(
            'short' => 'Steel panoramic doors stack into a concealed wall pocket for a true unobstructed opening — the closest thing to no door at all.',
            'body'  => '<p>A panoramic door (sometimes called a pocket slider) is a multi-panel sliding system where every panel stacks inside a pocket in the adjacent wall. When it\'s open, you don\'t see any doors — just the opening.</p>
<h2>How it differs from a regular slider</h2>
<p>A standard slider has a fixed panel the moving panel glides against. A panoramic has no fixed panel — every leaf moves into a concealed pocket, giving you the full opening width with nothing in the view plane.</p>
<h2>Typical configurations</h2>
<ul>
  <li>3-panel pocket slider for 12–15\' openings</li>
  <li>4-panel for 16–20\' openings</li>
  <li>Custom assemblies for larger spans — we\'ve built 30\'+</li>
</ul>
<h2>Build</h2>
<ul>
  <li>Top-hung hardened carriage, zero-load bottom guide</li>
  <li>14-gauge steel panels with 1" insulated glass</li>
  <li>Concealed multi-point locking at the lead panel</li>
  <li>Pocket depth = panel count × ~3"</li>
</ul>
<h2>Design considerations</h2>
<p>The adjacent wall needs enough solid run to house the panels when stacked. Plan early — panoramic doors are easiest to integrate during framing, not as a retrofit.</p>
<h2>What to expect</h2>
<p>Lead time 12–16 weeks. Install is a 2-day job. Once in, panels slide under 10 lbs of manual effort even at 400+ lb panel weight.</p>',
            'specs' => array(
                array( 'label' => 'Frame Material', 'value' => '14-gauge welded steel' ),
                array( 'label' => 'Glass',          'value' => '1" insulated low-E, tempered' ),
                array( 'label' => 'Panels',         'value' => '3 – 6 leaves typical' ),
                array( 'label' => 'Max Width',      'value' => '30\'+ custom' ),
                array( 'label' => 'Pocket Depth',   'value' => '~3" per panel' ),
                array( 'label' => 'Hardware',       'value' => 'Top-hung carriage, multi-point lock' ),
                array( 'label' => 'Lead Time',      'value' => '12–16 weeks' ),
            ),
        ),

        'Steel Fixed Windows' => array(
            'short' => 'Fixed steel windows — picture frames for daylight and view. Zero operable parts, maximum glass area, tightest seal of any window we build.',
            'body'  => '<p>Every window you can open is a compromise: hardware, weather-stripping that eventually wears, and a thicker frame to hide the crank or hinge. Fixed windows skip all of that.</p>
<h2>What we build</h2>
<ul>
  <li>Insulated low-E dual-pane glass, argon-filled</li>
  <li>14-gauge steel frame, 2-1/4" profile depth</li>
  <li>Glazing beads concealed on the interior face</li>
  <li>Custom grids (2-lite, 4-lite, 6-lite, or free-form)</li>
  <li>Max size: 6\' × 10\' single pane (larger with structural glass)</li>
</ul>
<h2>Performance numbers</h2>
<p>U-factor 0.28–0.34 depending on glass package, SHGC 0.25–0.38. Competitive with high-end vinyl and aluminum windows, at a frame that\'s roughly one-third the visible thickness.</p>
<h2>Where they fit</h2>
<ul>
  <li>Stairwell walls — light without operable reach</li>
  <li>Feature walls in living rooms and dining rooms</li>
  <li>Gable peaks where ventilation isn\'t needed</li>
  <li>Commercial storefronts</li>
</ul>
<h2>Custom shapes</h2>
<p>Arched, circular, trapezoidal, and triangular units are routine work. Shop drawings confirm every radius and vertex before fabrication.</p>
<h2>Finishes</h2>
<p>Same powder-coat options as our doors — matte black is the top seller, followed by bronze and graphite. Interior and exterior finishes can be different colors on request.</p>',
            'specs' => $specs_window_default,
        ),

        'Steel Operable Windows' => array(
            'short' => 'Steel windows that open — casement, awning, hopper, or tilt-turn. Real ventilation in a period-correct profile.',
            'body'  => '<p>Old-house steel windows used simple friction hinges. Modern operable steel windows use European-grade multi-point hardware for weather sealing and security, wrapped in the same thin profile that made classic steel windows iconic.</p>
<h2>Styles we build</h2>
<ul>
  <li>Casement (side-hinged, full outswing)</li>
  <li>Awning (top-hinged, bottom swings out)</li>
  <li>Hopper (bottom-hinged, top swings in)</li>
  <li>Tilt-turn (casement and hopper in one unit)</li>
  <li>Single and double hung (traditional up-down)</li>
</ul>
<h2>Hardware</h2>
<p>Roto or Maco multi-point mechanisms, cam-action compression against a continuous EPDM gasket. Handle is a lever in matte black, bronze, or custom-matched finish. Push-out versions are available for that pre-war look.</p>
<h2>Glass and seal</h2>
<p>Same insulated low-E glass as our fixed windows. The seal is a continuous EPDM gasket around the sash, compressed by the multi-point hardware.</p>
<h2>Size range</h2>
<p>Up to 4\' × 7\' on casements, 5\' × 4\' on awnings, larger on hoppers (weight pulls the sash into the frame). Heavier sashes get ball-bearing hinges rated for the load.</p>
<h2>Typical applications</h2>
<p>Anywhere you need real ventilation — bedrooms, bathrooms, kitchens, home gyms. Also required by code for bedroom egress.</p>',
            'specs' => $specs_window_default,
        ),

        'Steel Curtain Windows' => array(
            'short' => 'Steel curtain wall — floor-to-ceiling glass held together with a grid of thin steel mullions. Maximum daylight, minimum visible frame.',
            'body'  => '<p>A curtain wall is a non-structural glass skin hung on a structural frame. The steel (or occasionally aluminum) grid holds the glass; the building\'s structure holds the grid. In residential work, we use it for atrium walls, stairwell walls, and two-story great rooms.</p>
<h2>Build approach</h2>
<ul>
  <li>Structural steel sub-frame engineered per opening</li>
  <li>Steel mullions: 2-1/2" or 3" depth, 1" sightline</li>
  <li>Glass infill: insulated low-E, sometimes spider-fitted laminated glass for oversized lights</li>
  <li>Continuous thermal break so the grid doesn\'t sweat in summer</li>
</ul>
<h2>Sizes</h2>
<p>Effectively unlimited — we\'ve built curtain walls 30 feet tall and 50 feet wide. Individual lights (glass panes within the grid) commonly run 4\' × 8\' to 6\' × 10\'.</p>
<h2>Glazing options</h2>
<ul>
  <li>Double-pane insulated (standard)</li>
  <li>Triple-pane for extreme energy performance</li>
  <li>Laminated tempered for safety (required above 8\' in most jurisdictions)</li>
  <li>Solar-tinted or ceramic-fritted for west-facing exposures</li>
</ul>
<h2>Where they shine</h2>
<p>South- and east-facing elevations with a view. Two-story foyers. Stairwells. Indoor-outdoor transitions where a wall of sliders is structurally limited.</p>
<h2>Coordination</h2>
<p>Curtain walls are engineered, permitted, and installed as part of the building shell — not a finish-out drop-in. Schedule us early in framing so we can coordinate anchor locations with the structural engineer.</p>',
            'specs' => array(
                array( 'label' => 'Frame Material', 'value' => '14-gauge steel mullions, 2-1/2" – 3" depth' ),
                array( 'label' => 'Sightline',      'value' => '1" visible' ),
                array( 'label' => 'Glass',          'value' => 'Dual or triple-pane insulated low-E' ),
                array( 'label' => 'Max Size',       'value' => 'Engineered per opening (30\'+ common)' ),
                array( 'label' => 'Thermal Break',  'value' => 'Continuous polyamide strut' ),
                array( 'label' => 'Finish',         'value' => 'Powder-coat, interior/exterior differ option' ),
                array( 'label' => 'Lead Time',      'value' => '14–20 weeks' ),
            ),
        ),

        'Steel Casement Windows' => array(
            'short' => 'Side-hinged casement windows that crank open for full ventilation. The most-used operable window we sell.',
            'body'  => '<p>A casement window is hinged on one vertical side and swings outward like a door. You open it with a crank or a push handle. Fully open, a casement catches side breezes a sliding window can\'t — the sash acts like a sail.</p>
<h2>Why we sell more casements than any other operable</h2>
<ul>
  <li>Tightest seal of any operable window (hardware pulls the sash against a compression gasket)</li>
  <li>Full sash clears the opening when open — maximum airflow</li>
  <li>Clean, minimalist look with no sill lip or rail divide</li>
  <li>Egress-compliant for bedrooms at the right sizing</li>
</ul>
<h2>Build</h2>
<ul>
  <li>14-gauge welded steel sash and frame</li>
  <li>2-1/4" frame profile, 1-3/8" sash</li>
  <li>Insulated low-E dual-pane glass, argon-filled</li>
  <li>Maco or Roto hardware with lifetime mechanical warranty</li>
  <li>Stainless steel friction hinges rated for continuous Gulf-coast humidity</li>
</ul>
<h2>Standard sizes</h2>
<ul>
  <li>Single casement: 24" × 48" up to 36" × 72"</li>
  <li>Paired casement (French-style): 48" × 60" up to 72" × 72"</li>
  <li>Custom sizes to structural limits</li>
</ul>
<h2>Screens</h2>
<p>Roll-down interior screens are standard (since the sash swings out). Optional motorized screens on larger units.</p>
<h2>Where they fit</h2>
<p>Kitchens (crank opens easily over a sink), bedrooms (egress), bathrooms, and any spot where maximum airflow matters.</p>',
            'specs' => $specs_window_default,
        ),

        'Steel Awning Windows' => array(
            'short' => 'Top-hinged steel awning windows open outward from the bottom — rain-resistant ventilation for bathrooms, high walls, and transoms.',
            'body'  => '<p>An awning window is hinged at the top. The bottom swings out, creating a small roof over the opening. That lets you leave it open during a rain shower without water coming in — useful in Austin\'s afternoon thunderstorms.</p>
<h2>Common uses</h2>
<ul>
  <li>Bathroom windows high on the wall for privacy and ventilation</li>
  <li>Kitchen windows above counter-height cabinets</li>
  <li>Stacked under a large fixed picture window for vent + view</li>
  <li>Commercial storefronts where air movement matters but weather intrusion is unacceptable</li>
</ul>
<h2>Size range</h2>
<p>Awning windows lean wider-than-tall. Typical units run 24–48" wide by 16–30" tall. Larger sizes are available but the awning effect diminishes past about 36" tall.</p>
<h2>Build</h2>
<ul>
  <li>14-gauge steel sash and frame</li>
  <li>Roto cam-action hardware — one handle engages top and sides of the sash against a gasket</li>
  <li>Insulated low-E dual-pane glass, argon-filled</li>
  <li>Stainless friction hinges at the head</li>
</ul>
<h2>Screens</h2>
<p>Interior roll-down or flat-mount since the sash swings out.</p>
<h2>Typically paired with</h2>
<p>Fixed picture windows (awning below), transoms above a door (operable version instead of fixed), gym walls (high awnings for airflow without heat loss).</p>',
            'specs' => $specs_window_default,
        ),

        'Energy Efficiency' => array(
            'short' => 'How we build steel doors and windows that beat your existing envelope on heat transfer — frame by frame, gasket by gasket.',
            'body'  => '<p>Steel conducts heat. An un-engineered steel frame will pull heat in during summer and push it out during winter — the frame becomes a thermal bridge. First-generation steel doors and windows (1930s–1980s) weren\'t built to solve this. Modern ones are.</p>
<h2>What we build in today</h2>
<ul>
  <li><strong>Thermal break</strong>: a polyamide or PVC strut that sits between exterior and interior steel, stopping conductive heat transfer. Our frames are continuously broken — no cold spots at corners or hardware locations.</li>
  <li><strong>Low-E coated insulated glass</strong>: a microscopic metallic-oxide coating reflects infrared while letting visible light pass. Our standard insulated unit is dual-pane low-E, argon-filled, with a warm-edge spacer.</li>
  <li><strong>Multi-point hardware</strong>: compresses the sash against a continuous gasket. Single-point hardware lets air leak at the corners; multi-point engages 3–5 points per operation.</li>
</ul>
<h2>What you get</h2>
<ul>
  <li>U-factor 0.28–0.34 on operable windows; 0.24–0.28 on fixed</li>
  <li>SHGC 0.25–0.38 depending on glass package and orientation</li>
  <li>Air infiltration under 0.1 CFM/ft² — tighter than most vinyl replacement windows</li>
</ul>
<h2>Rebates and tax credits</h2>
<p>Most of our door and window packages qualify for the federal Energy Efficient Home Improvement Credit (up to $1,200/year). We provide the manufacturer NFRC labels and signed product-performance letters for your tax filing.</p>
<h2>When to upgrade</h2>
<p>If your current windows are single-pane aluminum or pre-1990s steel, the payback from reduced cooling load is usually 7–12 years in Central Texas\' climate — sooner if you\'re also chasing summer comfort rather than pure ROI.</p>',
            'specs' => array(
                array( 'label' => 'Thermal Break',  'value' => 'Continuous polyamide strut' ),
                array( 'label' => 'Glass',          'value' => 'Dual-pane low-E, argon, warm-edge spacer' ),
                array( 'label' => 'U-factor',       'value' => '0.24 – 0.34' ),
                array( 'label' => 'SHGC',           'value' => '0.25 – 0.60 (varies by package)' ),
                array( 'label' => 'Air Infiltration','value' => '< 0.1 CFM/ft²' ),
                array( 'label' => 'Hardware',       'value' => 'Multi-point compression' ),
                array( 'label' => 'Credits',        'value' => 'Federal EEHIC up to $1,200/year' ),
            ),
        ),

        'Glass Options' => array(
            'short' => 'The glass in your door or window determines privacy, energy, and look. Here are the combinations we offer and where each makes sense.',
            'body'  => '<p>People pick out frames carefully and often accept whatever glass their installer puts in. That\'s a miss. Glass controls privacy, heat transfer, light quality, and maintenance — arguably more than the frame does.</p>
<h2>Glazing (how many panes)</h2>
<ul>
  <li><strong>Single-pane</strong>: interior-only applications where thermal performance doesn\'t matter</li>
  <li><strong>Dual-pane insulated (IGU)</strong>: our standard exterior glass — two panes with argon gas and a warm-edge spacer</li>
  <li><strong>Triple-pane</strong>: for extreme climates or sound attenuation; 30% better U-factor than dual, 20% more weight</li>
</ul>
<h2>Low-E coatings</h2>
<ul>
  <li><strong>Solar Low-E</strong> (SHGC 0.25): west-facing sun-exposed glass</li>
  <li><strong>Balanced Low-E</strong> (SHGC 0.40): most applications</li>
  <li><strong>High-gain Low-E</strong> (SHGC 0.60): north-facing where winter solar gain is a benefit</li>
</ul>
<h2>Privacy and pattern options</h2>
<ul>
  <li><strong>Clear</strong>: standard</li>
  <li><strong>Low-iron (ultra-clear)</strong>: for showrooms and wine rooms where color fidelity matters</li>
  <li><strong>Seedy</strong>: small bubbles, old-glass character</li>
  <li><strong>Rain</strong>: vertical ripple, fully obscures</li>
  <li><strong>Reeded</strong>: vertical linear stripes, partially obscures</li>
  <li><strong>Sandblasted / acid-etched</strong>: smooth frosted look</li>
  <li><strong>Custom leaded</strong>: traditional divided-lite patterns</li>
</ul>
<h2>Safety and specialty</h2>
<ul>
  <li><strong>Tempered</strong>: required in doors and any glass within 18" of the floor per IRC. Four times the strength of annealed; breaks into small cubes if it fails.</li>
  <li><strong>Laminated</strong>: two panes bonded with a plastic interlayer. Holds together when broken — used for hurricane, burglary-resistant, and overhead applications.</li>
  <li><strong>Ballistic / security</strong>: UL-rated glass for high-security applications.</li>
</ul>
<h2>What we recommend for most Central Texas homes</h2>
<p>Dual-pane balanced low-E with argon fill, tempered where code requires, and seedy or reeded glass for bathroom windows and front-door sidelites.</p>',
            'specs' => array(
                array( 'label' => 'Standard Glass', 'value' => 'Dual-pane low-E, argon-filled' ),
                array( 'label' => 'Upgrade',        'value' => 'Triple-pane for acoustic / extreme climate' ),
                array( 'label' => 'Low-E Grades',   'value' => 'Solar / Balanced / High-gain' ),
                array( 'label' => 'Privacy',        'value' => 'Seedy, rain, reeded, sandblasted, leaded' ),
                array( 'label' => 'Safety',         'value' => 'Tempered, laminated, ballistic' ),
                array( 'label' => 'Spacer',         'value' => 'Warm-edge (low conductivity)' ),
                array( 'label' => 'Certification',  'value' => 'NFRC-labeled units' ),
            ),
        ),

        'Door Locksets' => array(
            'short' => 'The lockset is the part of the door you touch every day. Here\'s what goes into ours — and what to consider on yours.',
            'body'  => '<p>A $6,000 steel door locked with a $40 single-cylinder deadbolt is a common mistake. Hardware quality determines daily feel, long-term reliability, and actual security performance — not just brand logo.</p>
<h2>Lockset types we offer</h2>
<ul>
  <li><strong>Single-point deadbolt</strong>: basic residential lock. One dead-bolt throws into the strike plate. Adequate for interior doors and smaller exterior applications.</li>
  <li><strong>Multi-point lock</strong>: one lever throw engages 3–5 locking points (top, middle, bottom) simultaneously. Dramatically tighter seal and significantly better security. Standard on our French and bifold systems.</li>
  <li><strong>Mortise lock</strong>: traditional European-style lock body pocketed into the door edge. Solid feel, decades of reliable use. Common on higher-end entries.</li>
  <li><strong>Cremone bolt</strong>: a long vertical rod that engages top and bottom simultaneously, driven by a center-mount lever. Used on inactive leaves of French doors and on pantries.</li>
</ul>
<h2>Handle material and finish</h2>
<p>Standard handles are custom-forged steel matched to the door finish — matte black, aged bronze, graphite, satin nickel. Custom handles in solid bronze, brass, or patinated iron are available on request. We don\'t use nickel plating (it pits); our bronze is solid through.</p>
<h2>Smart locks</h2>
<p>Yale, Schlage Encode, August, and Kwikset Halo all integrate with our multi-point systems using a trim kit. You keep the multi-point mechanical locking while adding keypad, app, and auto-lock functionality.</p>
<h2>Keyed entry vs keyless</h2>
<p>We recommend keypad or biometric entry for new installs. Lost keys are the most common security failure — not forced entry. A keypad eliminates that risk entirely.</p>
<h2>Rekeying</h2>
<p>All our locks are delivered with a rekeyable core. If you fire a housekeeper, lose a key, or move in, any locksmith can rekey the lock without replacing the hardware.</p>',
            'specs' => array(
                array( 'label' => 'Types',          'value' => 'Single-point, multi-point, mortise, cremone' ),
                array( 'label' => 'Handle Finish',  'value' => 'Matched to door — black, bronze, nickel, brass' ),
                array( 'label' => 'Smart Lock',     'value' => 'Yale / Schlage Encode / August / Kwikset Halo' ),
                array( 'label' => 'Core',           'value' => 'Rekeyable standard' ),
                array( 'label' => 'Warranty',       'value' => 'Lifetime mechanical on European hardware' ),
                array( 'label' => 'Grade',          'value' => 'ANSI/BHMA Grade 1 commercial' ),
            ),
        ),

    );
}

/**
 * Apply the content map to existing products.
 */
function sda_apply_product_content() {
    $map = sda_get_product_content_map();
    $updated = 0;

    foreach ( $map as $title => $data ) {
        $query = new WP_Query( array(
            'post_type'      => 'product',
            'post_status'    => 'any',
            'posts_per_page' => 1,
            'title'          => $title,
            'fields'         => 'ids',
            'no_found_rows'  => true,
        ) );

        if ( empty( $query->posts ) ) {
            echo "SKIP (not found): {$title}\n";
            continue;
        }

        $post_id = (int) $query->posts[0];

        wp_update_post( array(
            'ID'           => $post_id,
            'post_content' => $data['body'],
        ) );

        if ( function_exists( 'update_field' ) ) {
            update_field( 'product_short_desc', $data['short'], $post_id );
            update_field( 'product_specs',      $data['specs'], $post_id );
        }

        echo "UPDATED: {$title}\n";
        $updated++;
    }

    return $updated;
}
