# Luke's Garden Planner 2026 — Complete Platform Dossier

A single self-contained reference covering: the garden, the 33-SKU product line, the recipes, the business model, the web platform architecture, and the current deployment state. Generated 2026-05-30.

---

## Table of Contents

1. Project at a Glance
2. Repo & Deployment Overview
3. Garden Infrastructure
4. Bed Layouts — Summer 2026
5. Hydroponic & Indoor Systems
6. Plant Encyclopedia (Varieties Currently Grown)
7. 2026 Season Timeline
8. Product Line — 33 SKUs at a Glance
9. Recipes — Full Detail
   - 9.1 Tomato Jams (4)
   - 9.2 Tomato Beverages (2)
   - 9.3 Pepper Jelly Line (11)
   - 9.4 Onion & Garlic Jam Line (7)
   - 9.5 Combination Jam Line (6)
   - 9.6 Vodka Infusion Line (4)
10. 22-Cocktail Bar Program
11. Production Notes & Methodology
12. 12 Tomato Production Techniques
13. Pricing & Channel Strategy
14. Scaling Tiers (Personal → Commercial)
15. Legal & Cottage-Food Compliance (Georgia)
16. **Web Platform Architecture**
17. Repo File Map
18. Current Deployment State & Outstanding Steps

---

## 1. Project at a Glance

- **Owner:** Luke Benton (`lukebenton@kw.com`)
- **Location:** Decatur, GA — USDA Zone 8a, elevation <1,000 ft
- **Season:** 2026, currently late spring (May)
- **Garden scope:** 3 raised beds (8×4 ft each), 8 felt grow bags, AeroGarden (30 pods), 9-port hydro, Gardyn tower (30 pods), greenhouse, perennials
- **Business scope:** 33 SKUs across tomato jams, beverages, pepper jellies, onion/garlic jams, combination jams, and vodka infusions; 3 restaurant relationships (Cherokee Rose, Live Oak Tap, Las Brasas Peruvian); farmers market presence; specialty retail tier
- **Production phase:** Tier 1 pilot — friends & family, no commercial licensing pursued yet
- **Web presence:** `garden.lukebenton.com` (SiteGround shared hosting) — stateful, PHP+MySQL backed
- **Source code:** `github.com/lukebenton-ctrl/garden-planner-2026`

---

## 2. Repo & Deployment Overview

| Item | Value |
|---|---|
| GitHub repo | `lukebenton-ctrl/garden-planner-2026` (private) |
| Default branch | `main` |
| Active feature branch | `claude/add-garden-web-view-MxQNT` (merged to main) |
| Production URL | `https://garden.lukebenton.com/` |
| Hosting | SiteGround shared hosting (`lukebenton.com` account) |
| SSH host / port / user | `gvam1301.siteground.biz` / `18765` / `u2060-ndz1sldvhgts` |
| Doc root on server | `/home/customer/www/garden.lukebenton.com/public_html/` |
| MySQL DB name | `dbjnxwauotrgiv` (label: `garden`) |
| MySQL DB user | `uyp86ufa3xguf` |
| MySQL DB host | `localhost` |
| PHP version | 8.3.31 |
| SSL | Let's Encrypt (to be confirmed installed) |
| Deployment method | GitHub Actions → rsync over SSH on `push` to `main` |
| Single source of truth | The repo. GitHub Pages was removed; SiteGround pulls from the repo. |

---

## 3. Garden Infrastructure

| System | Spec / Role |
|---|---|
| Bed A | 8×4 ft raised bed — tomato production (8 plants + 16 basil + companion flowers) |
| Bed B | 8×4 ft raised bed — peppers, beans, cucumbers, 8 interplanted basil |
| Bed C | 8×4 ft raised bed — beans (Blue Lake), 4 okra, 2 green basil at south end |
| Grow bags | 8 felt bags — each holds 1 tomato + 1 pepper + 1 basil companion (3 extra basil at Bed A south end) |
| AeroGarden | 30 pods — dedicated basil propagation (2 rounds per season) |
| 9-port hydro | Nursery role early-season, then permanent tatsoi + mustard greens after cucumber starts move out |
| Gardyn tower | 30 pods across 3 columns × 10 rows — fruiting plants center column (highest light), reserve pods for replacements |
| Greenhouse | Citrus production + season extension |
| Perennials | 2 raspberry, 2 blueberry, hanging strawberries, rosemary, peony, liriope |

**Basil distribution strategy:** Basil is not given dedicated bed space. Instead, 20 in-ground (8 purple, 12 green) interplanted as companions: ~16 in Bed A (around tomatoes), 8 in Bed B (around peppers), 2 at Bed C south end. Plus 1 basil per grow bag (8) and 3 extras at Bed A south end.

---

## 4. Bed Layouts — Summer 2026 (Current)

### Bed A — Tomato Production
- **6 slicing tomatoes:** Big Beef, Park's Whopper, Big Rainbow, Brandywine Pink, Cherokee Purple, Yellow Pear
- **2 Roma:** San Marzano, Amish Paste (Roma is determinate — produces 150–300 lbs in July all at once)
- **2 Sweet 150 cherry tomatoes** (interior)
- **16 basil** (interplanted) — 8 purple + 12 green split across beds
- **Companion flowers:** Marigold 'Sparky' + Nasturtium 'Alaska'

### Bed B — Peppers, Beans, Cucumbers, Basil
- **8 peppers:** Organic Bell, Cajun Belle, Lunchbox Orange, Jalapeño
- **Stringless Green Beans** (Sow 1 + succession sows)
- **2 cucumbers** on east trellis (pickling)
- **8 basil** interplanted
- One TBD pepper row

### Bed C — Beans, Okra, Basil
- **Blue Lake bush beans** (Sow 1 + succession)
- **4 okra** (Clemson Spineless — direct sow only)
- **2 green basil** at south end

### Grow Bags (8 felt)
Each bag: 1 tomato + 1 pepper + 1 basil companion. 3 extra basil at Bed A south end.

---

## 5. Hydroponic & Indoor Systems

| System | Current State | Strategy |
|---|---|---|
| **AeroGarden (30 pods)** | Basil sprouting (current round transplants late April) | Two annual basil propagation rounds — current + mid-May second round. Keep light at lowest level during sprouting. |
| **9-port hydro** | Cucumber starts → transplanted | Switches to tatsoi + mustard greens (permanent) after cucumbers move out |
| **Gardyn tower (30 pods, 3 cols × 10 rows)** | Fruiting plants in center column | Center column gets the strongest light — assign fruiting plants there. Reserve pods on outer columns for replacements. |

---

## 6. Plant Encyclopedia (Currently Grown Varieties)

### Tomatoes (8 varieties + 2 cherries)

| Variety | Type | Notes |
|---|---|---|
| Big Beef | Slicing | Standard reliable slicer |
| Park's Whopper | Slicing | Used in Las Brasas Jam |
| Big Rainbow | Heirloom slicing | Stunning yellow-red striped, low acid, used in Live Oak Orchard Jam |
| Brandywine Pink | Heirloom slicing | Rich complexity, used in Cherokee Rose Jam, Tomato Water |
| Cherokee Purple | Heirloom | Smoky, dusky — anchor variety for Cherokee Rose Jam, Tomato Water, vodka infusions |
| Yellow Pear | Heirloom small | Golden sweetness — Live Oak Orchard Jam |
| Sweet 150 | Cherry | 2 interior plants for fresh eating |
| San Marzano | Roma | Determinate — June/July dump |
| Amish Paste | Roma | Determinate — June/July dump |

**Roma push target:** From baseline ~25 lbs/plant toward 40–50 lbs/plant on the 6 Roma → 150 lbs → 240–300 lbs/season. See Section 12 for techniques.

### Peppers

| Variety | Heat | Use |
|---|---|---|
| Orange Bell, Green Bell, Lunchbox Orange, Sweet Long | None | Pepper jellies (sweet base), Pepper-Onion Marmalade |
| Cajun Belle | Mild | Hop & Heat, Cajun Fire, Bacon-Pepper jams |
| Banana Pepper | Mild | Banana Tang Jelly |
| Jalapeño | Medium | Pepper-jelly tier, vodka, Garden Pepper Jam |
| Mammoth Jalapeño | Medium (milder per oz) | Bulk into Hop & Heat |
| Poblano | Medium | Smoked Poblano Jelly (fire-roasted) |
| Burrito | Medium | Burrito Smoke Jelly |
| Purple Cayenne | Hot | Purple Reign Jelly (violet color), Bourbon Burn Jelly |

### Beans

| Variety | Type | Bed |
|---|---|---|
| Blue Lake (Bush) | Bush bean | Bed C |
| Stringless Green Bean | Bush bean | Bed B |

### Other Vegetables

| Crop | Variety | Notes |
|---|---|---|
| Okra | Clemson Spineless | **Direct sow only** — dislikes root disturbance. Soak seeds 12–24 hrs first, soil ≥65°F. |
| Cucumber | Pickling + slicing | Bed B east trellis. Sow 1 direct sow. |
| Sweet Basil | Genovese (green) + purple | 20 in-ground + 8 bag companions + 3 Bed A extras |
| Onion / Garlic | Sweet onion, garlic | Production: sourced year-round from DeKalb Farmers Market (not grown) |

### Sowing Depths Quick Reference

| Crop | Depth |
|---|---|
| Bush beans | 1–2" |
| Okra | 1" (direct sow only) |
| Pickling cucumber | ½" |
| Basil | ¼" |
| Flat parsley | ⅛–¼" |
| Dill, thyme, sage, oregano | Surface sow (light-dependent) |

### Companion Flowers
- **Marigold 'Sparky'** — pest deterrent
- **Nasturtium 'Alaska'** — pest deterrent + edible

### Perennials Notes
- **Peony:** divide in fall (Sep–Oct), 3–5 eye sections, plant 1–2" deep. Never spring.
- **Liriope:** species matter. *L. spicata* spreads via stolons (invasive). *L. muscari* stays clumping (safe).
- **Citrus:** grafted 2–3 year old trees fruit fastest. Source: **Four Winds Growers** (recommended).
- **Snake plants:** not Zone 8a frost-hardy — indoor or covered porch only.

---

## 7. 2026 Season Timeline

### April (current → just done)
- Tomato transplanting complete
- Basil transplanting from AeroGarden late April
- Bean Sow 1 (Blue Lake Bed C + Stringless Green Bed B) — done ~Mar 29
- Bean Sow 2 — Mid April
- Pepper starts transplanted to Bed B

### May
- Second basil propagation round starts (mid-May)
- Continued bean succession sowings
- Cucumber starts → 9-port hydro

### June – July
- Bean Sow 3 in same Bed B column
- Roma harvest dump (150–300 lbs in July)
- Tomato jam production peak
- Vodka infusion runs during heirloom peak
- Mid-June: second wave of indeterminate starts (succession planting)

### August
- Begin fall greens succession sowing
- Tomato production tapers (indeterminates continue)

### September – October
- Peony division window (Sep–Oct only)
- Frost watch begins October
- Garlic planting (fall planting for next year's harvest)

### Winter
- Greenhouse citrus management
- Off-season vodka production (Black Pepper Vodka year-round capability)
- Recipe refinement, restaurant pitches

---

## 8. Product Line — 33 SKUs at a Glance

| Category | Count | Channels |
|---|---|---|
| Tomato Jams | 4 | Farmers market + Cherokee Rose + Live Oak Tap + Las Brasas |
| Tomato Beverages | 2 | Retail + Live Oak Tap |
| Pepper Jellies | 11 | Cherokee Rose + Farmers market + Live Oak Tap + Las Brasas + Specialty |
| Onion & Garlic Jams | 7 | Cherokee Rose + Live Oak Tap + Farmers market + Specialty |
| Combination Jams | 6 | Las Brasas + Live Oak Tap + Cherokee Rose + Farmers market + Specialty |
| Vodka Infusions | 4 | Specialty retail (Tier 1 = friends/family gifts) + Live Oak Tap |
| **TOTAL** | **34*** | *11 pepper jellies after adding Garden Pepper Jam (Jalapeño); product line summary still cites 33. |

### Restaurant Partnerships

| Restaurant | SKUs | Theme |
|---|---|---|
| **Cherokee Rose** | 4 — Cherokee Rose Jam, Sunset Sweet Jelly, Red Wine & Shallot Jam, Cherokee Rose Sophisticate | Southern fine-dining; smoky/heirloom/wine-forward |
| **Live Oak Tap** | 6 — Live Oak Orchard Jam, Hop & Heat Jelly, Bourbon Burn Jelly, Tomato Water, Bourbon Caramelized Onion, Live Oak Sundown | Bar-pairing; bourbon/peach/hop |
| **Las Brasas Peruvian** | 3 — Las Brasas Jam, Cajun Fire Jelly, Las Brasas Trinity | Peruvian fire; ají amarillo/ají panca |
| **Farmers Market** | 12 SKUs | General retail |
| **Specialty Retail** | 8 SKUs | Premium, gift, vodka |

Wholesale = same jar; restaurant uses in dishes OR offers retail for take-home customers.

---

## 9. Recipes — Full Detail

### 9.1 Tomato Jams (4)

All tomato jams: combine all ingredients, simmer 2–3 hours, jar in half-pint jars, water bath process 15 minutes.

---

#### Original Tomato Jam (Base · Farmers Market) — 10–12 jars/batch
Classic savory-sweet tomato jam. Bright lime, warm cinnamon, slow-building heat. Cheese boards, grilled meats, breakfast biscuits.

**Tomato allocation:** Any mix of varieties

**Ingredients:**
- 10 lbs tomatoes, cored and chopped
- 6 cups sugar
- 16 cloves garlic, minced
- 1 cup apple cider vinegar
- ½ cup lime juice
- 4 tsp salt
- 4 tsp red pepper flakes
- 1.5 tsp cinnamon

**Method:** Combine all → boil → simmer 2–3 hrs uncovered, stir frequently until thick and jammy → jar half-pints, water bath 15 min.

---

#### Cherokee Rose Jam (Cherokee Rose Restaurant) — 12–14 jars/batch
Smoky, soulful tomato jam built around Cherokee Purple heirloom. Brown sugar, smoked paprika, fresh thyme, whisper of bourbon.

**Tomato allocation:** 4 lbs Cherokee Purple · 3 lbs Brandywine · 3 lbs Roma

**Ingredients:**
- 4 lbs Cherokee Purple tomatoes, cored and chopped
- 3 lbs Brandywine tomatoes, cored and chopped
- 3 lbs Roma tomatoes, cored and chopped
- 5 cups sugar
- 1 cup brown sugar
- 16 cloves garlic, minced
- 1 cup apple cider vinegar
- ½ cup lemon juice
- 4 tsp salt
- 2 tsp red pepper flakes
- 2 tsp smoked paprika
- 1 tsp black pepper, freshly ground
- 3 sprigs fresh thyme (removed before jarring)
- 2 tbsp bourbon (optional)

**Method:** Combine all → boil → simmer 2.5–3 hrs, stir frequently → remove thyme → jar, water bath 15 min.

**Why it works:** Cherokee Purple smokiness is hero; Brandywine adds rich complexity; Roma provides body and reduces cooking time; smoked paprika and thyme echo the Southern/Appalachian Cherokee Rose name.

---

#### Live Oak Orchard Jam (Live Oak Tap) — 13–15 jars/batch
Bright, sun-soaked. Yellow Pear + Big Rainbow heirlooms + Georgia peaches + bourbon + vanilla + ginger. Drinks as well as it spreads.

**Tomato allocation:** 5 lbs Roma · 2 lbs Big Rainbow · 1 lb Yellow Pear · 2 lbs peaches

**Ingredients:**
- 5 lbs Roma, cored and chopped
- 2 lbs Big Rainbow, cored and chopped
- 1 lb Yellow Pear, halved
- 2 lbs peaches, peeled and chopped
- 5 cups sugar
- 12 cloves garlic, minced
- 1 cup white balsamic vinegar
- ½ cup lemon juice
- ½ cup bourbon (simmered 3–4 min to mellow first)
- 3 tsp salt
- 2 tsp red pepper flakes
- 2 tbsp fresh ginger, grated
- 1 tsp vanilla extract (added at end)

**Method:** Simmer bourbon 3–4 min → combine all except vanilla → boil → simmer 2 hrs → add bourbon reduction → simmer 45 more min → stir in vanilla last 5 min → jar, water bath 15 min.

**Why it works:** Yellow Pear adds sweetness that plays with peach; Big Rainbow gives stunning bright orange-gold color and low acidity; Roma keeps body substantial; bourbon ties to the Tap's beverage identity.

---

#### Las Brasas Jam (Las Brasas Peruvian) — 13–15 jars/batch
Fire-kissed Peruvian tomato jam. Ají amarillo + ají panca + Cherokee Purple smokiness + bright lime/orange.

**Tomato allocation:** 5 lbs Roma · 2 lbs Park's Whopper · 2 lbs Cherokee Purple

**Source for Peruvian ingredients:** Buford Highway Farmers Market (Atlanta).

**Ingredients:**
- 5 lbs Roma, cored and chopped
- 2 lbs Park's Whopper, cored and chopped
- 2 lbs Cherokee Purple, cored and chopped
- 1 lb red bell peppers, chopped (rocoto substitute)
- 5 cups sugar
- 16 cloves garlic, minced
- 1 cup apple cider vinegar
- ½ cup fresh lime juice
- ¼ cup fresh orange juice
- 4 tsp salt
- 2 tbsp ají amarillo paste
- 2 tsp ají panca paste *(substitute: 1 tsp smoked paprika + 1 tsp ancho chile powder)*
- 2 tsp ground cumin
- 1 tsp dried oregano
- ½ tsp ground cloves

**Method:** Combine all → boil → simmer 2.5–3 hrs until thick → jar, water bath 15 min.

---

### 9.2 Tomato Beverages (2)

#### Bloody Mary Mix (Retail + Live Oak Tap) — ~8 pint jars/batch
Handcrafted from 10 lbs heirloom tomatoes per batch. Spiked with horseradish, smoked paprika, Worcestershire, citrus.

**Tomato allocation:** 5 lbs Roma · 3 lbs Cherokee Purple · 2 lbs Brandywine

**Ingredients:**
- 10 lbs tomatoes (mix above)
- 1 cup fresh lemon juice
- ½ cup fresh lime juice
- ¼ cup Worcestershire sauce
- 3 tbsp prepared horseradish
- 2 tbsp hot sauce (to taste)
- 2 tbsp celery salt
- 1 tbsp black pepper
- 1 tbsp smoked paprika
- 2 tsp garlic powder
- 2 tsp onion powder
- 1 tbsp salt
- Optional: 2 tbsp pickle brine

**Method:** Core and chop tomatoes → simmer 45 min until broken down → purée with immersion blender → strain through fine mesh → return to pot, add seasonings → simmer 15 min → hot-pack pint jars, water bath process 40 min.

Each pint = ~4 bloody marys.

---

#### Tomato Water (Premium · Live Oak Tap) — ~2 cups per 5 lbs
Crystal-clear, intensely tomato-flavored. Gravity-only extraction (no pressing). Stunning in martinis, gimlets, premium cocktails.

**Ingredients:**
- 5 lbs very ripe heirloom tomatoes (Brandywine + Cherokee Purple ideal)
- 1 tsp sea salt

**Method:** Roughly chop → purée briefly with salt → line fine-mesh strainer with cheesecloth over bowl → pour purée → refrigerate 12–24 hrs *(do not press or squeeze — gravity only)*.

Yields crystal-clear liquid with intense tomato flavor.

**Critical:** This same technique is the base for Garden Tomato Vodka and Black Pepper & Tomato Vodka (see Section 9.6).

---

### 9.3 Pepper Jelly Line (11 SKUs)

**Standard for all pepper jellies:** Process peppers in food processor to fine chop. Combine peppers + vinegar + acid + sugar in heavy pot. Bring to hard rolling boil 1 min. Stir in pectin, return to hard boil exactly 1 min. Skim foam. Ladle into sterilized half-pint jars (¼" headspace). Water bath process 10 min.

**Pectin:** 2 pouches liquid pectin (Certo, 6 oz total) OR 1 box powdered Sure-Jell (1.75 oz) per batch. Never omit/substitute — won't set without pectin.

**Heat handling:** Always nitrile gloves when seeding hot peppers. Never touch your face. Well-ventilated areas for cayenne/large quantity jalapeño.

#### Pepper Inventory Per Season Run
| Pepper | Amount |
|---|---|
| Bell/sweet (Orange, Green, Lunchbox, Sweet Long) | ~6–8 cups |
| Banana peppers | ~2 cups |
| Cajun Belle | ~3 cups |
| Jalapeño + Mammoth | ~5 cups |
| Burrito | ~1.5 cups |
| Poblano | ~3 cups (raw, before roasting) |
| Purple Cayenne | ~3.5 cups |

**Full season run: 11 batches × 6–8 jars = 66–88 half-pint jars** across the pepper jelly line.

---

#### No-Heat Tier (2 jellies)

**Sunset Sweet Jelly** — Cherokee Rose Restaurant · 6–8 jars
Heat-free pepper jelly. Sun-drenched amber-gold color, deep sweet pepper flavor.
- 1 cup Orange Bell + 1 cup Lunchbox Orange + 1 cup Sweet Long peppers, finely chopped
- 1 cup white balsamic vinegar · ¼ cup lemon juice · 5 cups sugar · 1 tsp salt · 2 pouches liquid pectin

**Garden Verde Jelly** — Farmers Market · 6–8 jars
Bright, herbaceous. Green Bell + Sweet Long + fresh basil.
- 1.5 cups Green Bell + 1.5 cups Sweet Long peppers + ½ cup fresh basil leaves chopped fine
- 1 cup white wine vinegar · ¼ cup lemon juice · 5 cups sugar · 1 tsp salt · 2 pouches liquid pectin
- *Note: add basil in final 30 sec of boil to preserve color/freshness*

#### Mild Tier (1 jelly)

**Banana Tang Jelly** — Farmers Market · 6–8 jars
Golden, tangy, gently warm. Banana peppers + Cajun Belle + touch of turmeric.
- 2 cups banana peppers + 1 cup Cajun Belle (with seeds for slight heat)
- 1 cup ACV · ¼ cup lemon juice · 5 cups sugar · 1 tsp salt · ½ tsp turmeric · 2 pouches liquid pectin

#### Mild-Medium Tier (1 jelly)

**Sweet Heat Jelly** — Farmers Market · 6–8 jars
Classic gateway. Lunchbox Orange sweetness + jalapeño slow heat.
- 2 cups Lunchbox Orange + 1 cup jalapeños (seeded)
- 1 cup ACV · ¼ cup lemon juice · 5 cups sugar · 1 tsp salt · 2 pouches liquid pectin
- *For more heat: leave half jalapeño seeds in*

#### Two-Tier SKU — NEW

**Garden Pepper Jam (Jalapeño)** — Farmers Market · Two-Tier (Mild or Medium) · ~6 jars
Rustic, sellable pepper jam. Confetti color. Only jalapeño-to-sweet ratio changes between tiers; everything safety-critical stays identical.

**Heat Tiers:**
| Tier | Jalapeño | Sweet peppers | Total |
|---|---|---|---|
| Mild | ¼ cup | 2 cups | ~2.25 cups |
| Medium | ¾ cup | 1.5 cups | ~2.25 cups |

**Ingredients (base batch, ~6 half-pints):**
- 2 cups sweet peppers (Bell + Lunchbox Orange + Cajun Belle), seeded & finely diced — MILD *(reduce to 1.5 cups for MEDIUM)*
- ¼ cup jalapeños, seeded & finely diced (regular, not Mammoth) — MILD *(increase to ¾ cup for MEDIUM)*
- 1 cup apple cider vinegar (5% acidity)
- 5 cups granulated sugar
- 3 tbsp powdered pectin (regular, e.g. Sure-Jell)
- ½ tsp butter (optional, reduces foaming)

**Method:**
1. Prep 6 half-pint jars, lids, rings. Hot in 180°F water. Start canner heating.
2. Gloves. Seed and finely dice all peppers. Pulse in food processor (don't purée).
3. Combine peppers + vinegar + pectin (and butter if using) in large pot. Stir constantly; bring to full rolling boil that can't be stirred down.
4. Add all sugar at once. Return to full rolling boil. Boil hard exactly 1 minute, stirring constantly.
5. Off heat. Skim foam. Sit 5 min, stir occasionally to keep pepper bits suspended.
6. Ladle into hot jars, ¼" headspace. Wipe rims. Lids fingertip-tight.
7. Boiling water bath 10 minutes. Off heat. Sit 5 min. Remove.
8. Cool undisturbed 12–24 hrs. Confirm lid seal (no flex). Verify pH ≤ 4.6 before selling. Fridge unsealed jars.

**Garden Pepper Notes:**
- **Mammoth jalapeños** = milder per oz; bulk into sweet base for MILD tier
- **Regular jalapeños** = push heat into MEDIUM
- **Cajun Belle** = sweet-warm rounded flavor; secret weapon for "flavor without heat"
- **Color:** Bell + Lunchbox Orange for orange-red; add a little green jalapeño skin for fleck contrast

**Why two tiers, one base:** Holding vinegar/sugar/pectin/process time constant means one validated safety profile for both products. Only jalapeño ratio swings — that's flavor, not safety.

#### Medium Tier (4 jellies)

**Hop & Heat Jelly** — Live Oak Tap · 6–8 jars
Bar-pairing jelly. Mammoth Jalapeños + Cajun Belles + IPA reduction.
- 1.5 cups Mammoth jalapeños + 1 cup Cajun Belle
- ½ cup IPA reduction (reduce 2 cups IPA → ½ cup) · 1 cup ACV · ¼ cup lemon juice · 5 cups sugar · 1 tsp salt · 2 pouches liquid pectin
- *IPA: Sweetwater 420, Creature Comforts Tropicalia, or any Georgia local IPA*

**Cajun Fire Jelly** — Las Brasas Peruvian · 7–9 jars
Pepper jelly meets Peruvian spice. Cajun Belle + jalapeño + Cherokee Purple tomato for body.
- 1.5 cups Cajun Belle + 1 cup jalapeños + 1 cup Cherokee Purple tomatoes (peeled, scored X + 30 sec blanch)
- 1 cup ACV · ¼ cup fresh lime juice · 5 cups sugar · 1 tsp salt · 1 tsp ground cumin · ½ tsp dried oregano · 2 pouches liquid pectin
- *Initial boil 2 min (extra for tomato) before adding pectin*

**Burrito Smoke Jelly** — Farmers Market · 6–8 jars
Tex-Mex. Burrito peppers + poblano + jalapeño + smoked paprika.
- 1.5 cups Burrito + 1 cup poblano + ½ cup jalapeños
- 1 cup ACV · ¼ cup lime juice · 5 cups sugar · 1 tsp salt · 1 tsp smoked paprika · ½ tsp ground cumin · 2 pouches liquid pectin

**Smoked Poblano Jelly** — Specialty Premium · 6–8 jars
Standout specialty. Fire-roasted poblanos, hand-peeled.
- 6–8 large poblanos → roast to yield ~2 cups roasted/peeled + ½ cup jalapeños
- 1 cup ACV · ¼ cup lime juice · 5 cups sugar · 1 tsp salt · 1 tsp cumin · ½ tsp oregano · 2 pouches liquid pectin
- **Roasting:** Char whole poblanos over gas flame/grill/broiler until skin blackened and blistered (5–8 min). Steam in covered bowl 15 min. Peel off skin (don't rinse). Remove stems and seeds.
- *Roasting step is non-negotiable*

#### Hot Tier (2 jellies)

**Purple Reign Jelly** — Specialty Showpiece · 6–8 jars
Striking violet-magenta. Purple Cayenne only.
- 2 cups Purple Cayenne peppers, finely chopped (gloves required, ventilated)
- 1 cup ACV · ¼ cup lemon juice · 5 cups sugar · 1 tsp salt · 2 pouches liquid pectin
- *Seeds in = full heat. Half seeds = medium-hot. Color intensity depends on ripeness — fully ripe purple cayennes give strongest violet-magenta*

**Bourbon Burn Jelly** — Live Oak Tap · 6–8 jars
Cayenne + jalapeño tamed by bourbon reduction.
- 1.5 cups Purple Cayenne + 1 cup jalapeños
- ⅓ cup bourbon (simmered 3–4 min to mellow first) · 1 cup ACV · ¼ cup lemon juice · 5 cups sugar · 1 tsp salt · 2 pouches liquid pectin

---

### 9.4 Onion & Garlic Jam Line (7 SKUs)

**Set through long reduction — no pectin needed.** Caramelization is everything: 45–60 minutes minimum on low-medium heat for proper depth. Vidalias get extra 60 min for full sweetness. Sourcing year-round from DeKalb Farmers Market.

**Roasted garlic technique:** Cut tops off whole heads → drizzle olive oil → wrap in foil → 400°F for 40 min. Squeeze out soft cloves when cool. Used across Roasted Garlic Confit, Herbed Garlic & Shallot, Spicy Onion, Las Brasas Trinity, Cherokee Rose Sophisticate.

**Bacon handling:** Render bacon first, reserve ¼ cup fat for cooking onions. Don't pour off all the fat — that's where the flavor lives.

---

#### Classic Bacon Onion Jam — Farmers Market · 7–9 jars
The flagship savory jam. Slow-caramelized onions + smoky bacon + brown sugar + balsamic. Sells out reliably.
- 1 lb bacon, diced · 4 lbs yellow onions, thinly sliced
- 1 cup brown sugar · ½ cup balsamic + ½ cup ACV · 2 tbsp fresh thyme · 2 tsp salt · 1 tsp black pepper

Method: Cook bacon crispy → remove, leave ¼ cup fat → onions in fat 45–60 min until deeply caramelized → bacon back + brown sugar + vinegars + thyme + salt/pepper → simmer 30–45 min until thick → jar, water bath 15 min.

#### Bourbon Caramelized Onion Jam — Live Oak Tap · 8–10 jars
Boozy, brooding. Vidalia + bourbon + dark molasses.
- ¼ cup olive oil · 5 lbs Vidalia onions, thinly sliced
- 1 cup bourbon · 1 cup brown sugar · 2 tbsp dark molasses · ½ cup balsamic + ½ cup ACV · 2 tbsp fresh thyme · 2 tsp salt · 1 tsp black pepper

Method: Onions 60 min caramelized → bourbon simmered 3–4 min separately → all in → simmer 45 min thick syrupy → jar, water bath 15 min.

#### Red Wine & Shallot Jam — Cherokee Rose · 7–9 jars
French-bistro. Shallots + dry red wine (Cab/Merlot) + balsamic. Deep burgundy color.
- ¼ cup olive oil · 4 lbs shallots, thinly sliced
- 2 cups red wine · 1 cup balsamic · ¾ cup brown sugar + ½ cup white sugar · 3 tbsp fresh thyme · 2 tsp salt · 1 tsp pepper

Method: Shallots 60 min caramelized → add wine, simmer 15 min reduce → balsamic + sugars + thyme + salt/pepper → simmer 45–60 min thick burgundy → jar, water bath 15 min.

#### Roasted Garlic Confit Jam — Specialty · 6–8 jars
Whole heads slow-roasted to butter-sweet. Honey + EVOO + rosemary/thyme. *Top wholesale margin (51%).*
- 12 whole heads garlic (roast 400°F 40 min)
- ½ cup EVOO · 1 cup honey · 1 cup white balsamic + ½ cup white wine vinegar · ½ cup white sugar · 2 tbsp rosemary + 2 tbsp thyme · 2 tsp salt · 1 tsp pepper · 1 tsp lemon zest

Method: Roast garlic, squeeze out cloves, mash to paste → combine all → simmer 30–45 min thick → jar, water bath 15 min.

#### Herbed Garlic & Shallot Jam — Farmers Market · 7–9 jars
"Everything" savory. Roasted garlic + caramelized shallots + thyme + rosemary + lemon zest.
- 2 lbs shallots + 6 heads roasted garlic mashed
- ¼ cup olive oil · 1 cup dry white wine · 1 cup white balsamic · 1 cup white sugar + ¼ cup brown sugar · 2 tbsp thyme + 2 tbsp rosemary · 1 tbsp lemon zest · 2 tsp salt · 1 tsp pepper

#### Sweet Vidalia & Honey Jam — Farmers Market · Georgia Pride · 7–9 jars
Pure celebration of Georgia's state vegetable. No booze, bacon, or heat.
- ¼ cup olive oil · 5 lbs Vidalia onions
- 1 cup Georgia honey · ½ cup white sugar · ¾ cup ACV · 2 tbsp thyme · 2 tsp salt

#### Spicy Onion Jam — Specialty · 7–9 jars · Medium 🌶️🌶️
Heat-seekers' savory. Caramelized onions + roasted garlic + Calabrian chile paste (or purple cayenne paste).
- 5 lbs yellow onions, thinly sliced + 4 heads roasted garlic mashed
- ¼ cup olive oil · 1 cup brown sugar · 3 tbsp Calabrian chile paste · ½ cup balsamic + ½ cup ACV · 2 tbsp fresh oregano · 2 tsp salt · 1 tsp black pepper

---

### 9.5 Combination Jam Line (6 SKUs)

Span multiple primary ingredients (tomato + pepper + onion). Premium SKUs that draw across the full garden inventory. Some use pectin (Pepper-Onion Marmalade); rest set through long reduction.

#### Tomato-Onion Confit Jam — Farmers Market · 9–11 jars
Italian trattoria. Roma + caramelized onions + garlic + balsamic + fresh basil. *50% wholesale margin.*
- 6 lbs Roma + 3 lbs yellow onions + 8 cloves garlic
- ¼ cup olive oil · 2 cups sugar · ½ cup balsamic + ½ cup ACV · ½ cup fresh basil (added last 5 min) · 2 tsp salt · 1 tsp pepper · 1 tsp red pepper flakes

Method: Onions 45 min caramelized → garlic 2 min → tomatoes + sugar + vinegars + salt/pepper/flakes → simmer 90 min thick → basil last 5 min → jar, water bath 15 min.

#### Pepper-Onion Marmalade — Farmers Market · 8–10 jars · Mild 🌶️
Between pepper jelly and onion jam. Chunky, spreadable. *Uses pectin* (peppers dominate).
- 2 cups Red Bell + 1 cup Orange Bell + 2 cups yellow onions + ½ cup jalapeños + 8 cloves garlic
- ¼ cup olive oil · 5 cups sugar · 1 cup ACV · ¼ cup lemon juice · 2 tbsp fresh thyme · 2 tsp salt · 2 pouches liquid pectin

#### Las Brasas Trinity Jam — Las Brasas Premium SKU · 13–15 jars · Medium 🌶️🌶️
Most ambitious Peruvian-inspired. Tomato + pepper + onion + 8 heads roasted garlic + ají amarillo. "Salsa criolla meets tomato jam." *53% wholesale margin.*
- 4 lbs Roma + 2 lbs Cherokee Purple + 2 lbs yellow onions + 1.5 cups Cajun Belle + 1 cup jalapeños + 8 heads roasted garlic mashed
- ¼ cup olive oil · 4 cups sugar · 3 tbsp ají amarillo paste · 1 cup ACV · ½ cup fresh lime · 4 tsp salt · 1 tbsp ground cumin · 2 tsp oregano

Method: Roast garlic → onions 45 min caramelized → peppers 5 min → tomatoes + roasted garlic + sugar + ají amarillo + vinegar + lime + spices → simmer 2–2.5 hrs thick → jar, water bath 15 min.

#### Live Oak Sundown Jam — Live Oak Tap · 11–13 jars
Savory counterpart to sweet Orchard. Roma + Vidalia + peaches + bourbon + thyme/ginger.
- 4 lbs Roma + 3 lbs Vidalia + 2 lbs peaches
- ½ cup bourbon (simmered 3–4 min) · ¼ cup olive oil · 3 cups brown sugar · ½ cup balsamic + ½ cup ACV · 2 tbsp thyme + 2 tbsp ginger · 3 tsp salt · 1 tsp pepper

#### Cherokee Rose Sophisticate — Cherokee Rose Premium SKU · 10–12 jars
Fine-dining. Cherokee Purple + shallots + 8 heads roasted garlic + dry red wine. *52% wholesale margin.*
- 5 lbs Cherokee Purple + 2 lbs shallots + 8 heads roasted garlic mashed
- ¼ cup olive oil · 2 cups dry red wine (Cabernet) · 1 cup brown sugar · ½ cup balsamic + ½ cup ACV · 3 tbsp thyme + 2 tbsp rosemary · 3 tsp salt · 1 tsp pepper

#### Bacon-Pepper Jam — Specialty · 8–10 jars · Medium 🌶️🌶️
Sweet-savory-smoky-spicy. Bacon + jalapeño + Cajun Belle + caramelized onions + bourbon + smoked paprika.
- 1 lb bacon + 3 lbs yellow onions + 1.5 cups jalapeños + 1 cup Cajun Belle + 8 cloves garlic
- 1 cup brown sugar · ½ cup bourbon (mellowed) · ½ cup balsamic + ½ cup ACV · 2 tsp salt · 1 tsp pepper · 1 tsp smoked paprika

---

### 9.6 Vodka Infusion Line (4 SKUs · Tito's base · scale-ready)

**Strategy:** Targeting two flavor families — **tomato** (Crop Organic-style clear + Crop×Peppar fusion) and **pepper** (refined black-pepper + Peppar-style chili-forward). All four SKUs use **Tito's Handmade Vodka** for consistency and scalable sourcing.

**Current Phase: Tier 1 Pilot — Friends & Family** (decided 2026-04-27). Goal: refine recipes, build word-of-mouth, gift to friends/family and potential restaurant partners. **No commercial wholesale, no TTB/GA licensing pursuit yet** — revisit Path 2 (recipe licensing to Live Oak Tap / Cherokee Rose / Las Brasas) once recipes dialed and demand confirmed.

**Why Tito's:**
- Corn-based, slight natural sweetness complements tomato
- 6× distilled, charcoal filtered, clean
- $20/750ml · **$32–$35/1.75L** (best value for scaling — 1.75L ≈ 2.3 retail 750ml bottles → drops per-bottle base $20 → $15)
- Source: **Tower Liquor Store (Buford Highway)** — best local pricing. Also Total Wine, Costco, Kroger, Sam's

**Critical technique — "tomato water, NOT pulp":** The Crop Organic/Absolut Peppar profile requires **gravity-dripped tomato water** (clear, intensely tomato-flavored liquid) as the infusion base. Not crushed pulp. Produces crystal-clear final, intense aroma without heaviness, easy filtering.

**Pepper toast technique:** Toast peppercorns 30–45 seconds in dry skillet to release essential oils, then steep briefly (24–48 hrs MAX). Beyond 48 hrs → bitter, tannic, harsh.

#### Tier 1 Starting Checklist (8 tasks)
- Buy Tier 1 startup equipment kit (~$210): $120 infusion + $60 bottling + $30 spices
- Buy 4 × Tito's 750ml ($80) at Tower Liquor
- Make two pepper vodkas FIRST in parallel (3–4 day production each, no tomato dependency)
- Run Garden Tomato + Black Pepper & Tomato in parallel during July tomato peak (9 lbs Cherokee Purple/Brandywine per round)
- Tasting log per batch (= IP for Path 2 licensing)
- 5–10 friend/family taste-test recipients (mix cocktail-curious + savory-food + restaurant-connected)
- After 2–3 batches per SKU, draft Path-2 pitch for Live Oak Tap
- DO NOT pursue TTB DSP / GA manufacturing license yet (wait for clear demand signal)

---

#### Garden Tomato Vodka — Specialty Retail · 6–8 days · No heat
Flagship clear tomato vodka. Crystal clear, bright/zesty, garden-fresh.

**Ingredients (per 750ml bottle):**
- 750ml Tito's Handmade Vodka
- 5 lbs ripe heirloom tomatoes (Cherokee Purple, Brandywine, Big Rainbow mix)
- 1 tsp sea salt
- ¼ tsp whole black peppercorns, lightly toasted (optional)

**Stage 1 — Tomato water (12–24 hrs):**
1. Roughly chop 5 lbs heirloom tomatoes
2. Pulse briefly with sea salt to chunky purée (DO NOT over-process)
3. Line fine-mesh strainer with 4 layers cheesecloth, set over deep bowl
4. Pour purée → cover loosely → refrigerate 12–24 hrs (gravity only, no press/squeeze/stir)
5. Yield: ~2 cups crystal-clear tomato water

**Stage 2 — Infuse (5–7 days):**
6. Combine tomato water + vodka in 1.5L+ glass jar
7. If using peppercorns: toast 1/4 tsp peppercorns dry skillet 30 sec, add
8. Seal, room temp 5–7 days. Taste daily after day 4.

**Stage 3 — Filter and bottle:**
9. Remove peppercorns
10. Filter through coffee filter into clean 750ml bottle
11. Label and refrigerate

**Flavor notes:** Bright, zesty, garden-fresh tomato aroma. Clean entry, light tomato through mid-palate, mineral salt finish. Clean tomato martinis or premium Bloody Mary base.

---

#### Black Pepper & Tomato Vodka — Specialty Retail / Live Oak Tap · 7–9 days · Mild 🌶️
Crop Organic × Absolut Peppar fusion. Bright tomato + warm pepper.

**Ingredients (per 750ml bottle):**
- 750ml Tito's
- 4 lbs heirloom tomatoes (Cherokee Purple + Brandywine ideal)
- 2 tbsp whole black peppercorns
- 1 tsp pink peppercorns (optional, floral)
- 1 tsp sea salt
- 1 small bay leaf

**Stage 1 — Tomato water:** Gravity-drip technique, yield ~1.5 cups.

**Stage 2 — Pepper prep:** Toast 2 tbsp black peppercorns in dry skillet 30–45 sec. Lightly crack (quarter-pea size).

**Stage 3 — First infusion (peppercorns only, 36 hrs):** Vodka + cracked black + pink + bay → 36 hrs room temp → taste at 24 and 36 hrs → strain out peppercorns/bay.

**Stage 4 — Tomato infusion (5 days):** Add tomato water + sea salt to pepper-infused vodka. Room temp 5 days. Taste daily.

**Stage 5 — Filter + bottle.**

**Flavor notes:** Bright tomato aroma + warm black pepper. Layered savory-pepper finish. Dirty martinis, Bloody Marys, savory cocktails.

---

#### Black Pepper Vodka (Refined) — Specialty Retail · 3–4 days FASTEST · Mild-Med 🌶️🌶️
Clean, bright, peppery. No tomato, no chili heat — just sophisticated black pepper warmth.

**Ingredients (per 750ml):**
- 750ml Tito's
- 3 tbsp whole black peppercorns (Tellicherry preferred — larger, more aromatic)
- 1 tsp pink peppercorns (floral)
- ½ tsp white peppercorns (heat without aromatic distraction)
- ½ tsp dried green peppercorns (vegetal complexity)
- 1 small bay leaf
- ½ tsp coriander seeds (optional — citrus-pepper bridge)
- ¼ tsp whole allspice (optional — warm undertone)

**Stage 1 — Toast (critical):**
1. Black peppercorns: dry skillet medium heat 30–45 sec, shake continuously, until fragrant. DO NOT BURN — turns acrid.
2. White peppercorns separately: 15–20 sec (burn faster)
3. If using coriander + allspice: lightly toast 15 sec
4. DO NOT toast pink or green (too delicate)

**Stage 2 — Crack:** Light crack black + white peppercorns (quarter-pea). Leave pink/green whole.

**Stage 3 — Single infusion (36–48 hrs):** All in 1L glass jar. Room temp 36 hrs. Taste 24 and 36 hrs. Assertive but not bitter. **CRITICAL: Do not exceed 48 hrs.**

**Stage 4 — Strain immediately:** Fine-mesh → cheesecloth funnel → coffee filter (1–2 hr slow drip).

**Stage 5 — Rest + bottle:** Clean 750ml bottle. **Rest in fridge ≥24 hrs before drinking** — flavor integrates and softens significantly.

**Flavor notes:** Freshly cracked pepper aroma, slightly floral from pink peppercorns, bay depth. Clean slightly-sweet entry → warm peppery midpalate → lingering peppercorn warmth. Less aggressive than Absolut Peppar (no chili), more food-friendly. **Cocktails:** Pepper Martini, Salt & Pepper Martini, Espresso Martini variation, Pepper Ginger Mule, Bloody Mary upgrade, neat over ice.

**Year-round option:** No garden seasonality → fills tomato off-season → keeps cash flow steady through winter.

---

#### Spicy Pepper Vodka (Peppar-Style) — Specialty Retail · 3–4 days · Medium 🌶️🌶️
Bold, savory, modeled on **Absolut Peppar**. Fresh jalapeños + dried chiles + toasted pepper + paprika + oregano.

**Ingredients (per 750ml):**
- 750ml Tito's
- 4 fresh jalapeños, stemmed and halved lengthwise (seeds in for full Peppar; half-seeded for medium)
- 2 dried red chiles (chile de árbol or dried cayenne), broken in half
- 1 tbsp whole black peppercorns (Tellicherry), toasted
- 1 tsp Hungarian sweet paprika
- ½ tsp dried oregano
- 1 small bay leaf
- ½ tsp sea salt

**Stage 1 — Toast peppercorns:** Dry skillet 30–45 sec, lightly crack.

**Stage 2 — Prep peppers:** GLOVES. Halve jalapeños lengthwise. Medium heat: scrape half seeds/ribs. Full Peppar: leave seeds in. Break dried chiles in half (no need to seed).

**Stage 3 — Single infusion (24–36 hrs):** All in 1L jar. Room temp. Taste at 24, again at 30. Heat builds **fast** with fresh jalapeños. **CRITICAL: Do not exceed 48 hrs.**

**Stage 4 — Strain + filter + rest + bottle:** Same as Black Pepper Vodka.

---

## 10. 22-Cocktail Bar Program

A full bar program built around the four vodka SKUs. Standard ratios assume 2–3 oz vodka pour. Fresh-squeezed citrus + good ice (large cubes for stirred, crushed for mules).

### Garden Tomato Vodka — clean, bright, vine-ripened
1. **Clean Tomato Martini** — 2.5 oz vodka + ½ oz dry vermouth + 2 dashes lemon juice; stir 30s; chilled coupe; cherry tomato or lemon twist
2. **Garden Mary (premium Bloody)** — 2 oz vodka + 4 oz house Bloody Mary Mix + ½ oz fresh lime; build over ice in pint; celery + lemon + lime + bacon
3. **Tomato Gimlet** — 2 oz vodka + ¾ oz lime + ½ oz simple syrup; shake hard 12s; double-strain coupe; cucumber wheel + basil leaf
4. **Modern Red Snapper** — 2 oz vodka + 1 oz Tomato Water + ½ tsp horseradish + pinch sea salt; stir over rocks; lemon twist + cracked black pepper

### Black Pepper & Tomato Vodka — fusion
5. **Dirty Pepper Martini** — 2.5 oz vodka + ¼ oz dry vermouth + ½ oz olive brine; stir 30s; chilled coupe; 3 olives + fresh cracked pepper
6. **Black Pepper Bloody Mary** — 2 oz vodka + 4 oz Bloody Mix + dash extra horseradish; pint; bacon + celery + pepperoncini + cracked pepper rim
7. **Savory Tomato Sour** — 2 oz vodka + 1 oz lemon juice + ½ oz simple + 2 dashes Worcestershire; shake 12s; double-strain coupe; cracked-pepper half-rim
8. **Bloody Caesar** — 2 oz vodka + 4 oz Clamato (or Bloody Mix + clam juice) + ½ oz lemon + dashes Worcestershire + Tabasco; celery-salt rim; tall glass; celery + lemon + optional shrimp

### Black Pepper Vodka (Refined) — sophisticated peppercorn
9. **Pepper Martini** — 2.5 oz vodka + ½ oz dry vermouth; stir 30s; chilled coupe; lemon twist + 3 whole peppercorns floated
10. **Salt & Pepper Martini** — 2.5 oz vodka + ½ oz dry vermouth; half-salt rim (Maldon flaky); stir 30s; fine pepper grind across surface
11. **Pepper Espresso Martini** — 2 oz vodka + 1 oz cool espresso + ½ oz coffee liqueur + ¼ oz simple; shake hard 15s for foam; double-strain; 3 espresso beans + cracked pepper dust
12. **Pepper Ginger Mule** — 2 oz vodka + ½ oz lime + 4 oz ginger beer (Fever-Tree/Q); copper mug + crushed ice; lime + candied ginger + cracked pepper
13. **Pepper Bloody Mary (upgrade)** — 2 oz vodka + 4 oz Bloody Mix; refined builds gently vs. punching like Spicy version; pint; celery + pepperoncini + lemon + cracked pepper
14. **Neat Over Ice** — 2 oz vodka over 1 large clear cube; stir 5s; vodka opens up — pink peppercorn first → warm black pepper → gentle bay finish; rocks/Glencairn; lemon twist

### Spicy Pepper Vodka (Peppar-style) — chili-forward
15. **Peppar-Style Bloody Mary** — 2 oz vodka + 4 oz Bloody Mix + dash hot sauce + ½ oz lime; pint; bacon + celery + jalapeño slice + Tajín rim
16. **Spicy Dirty Martini** — 2.5 oz vodka + ¼ oz dry vermouth + ½ oz brine from jalapeño-stuffed olives; stir 30s; coupe; jalapeño-stuffed olive
17. **Mexican Martini** — 2 oz vodka + 1 oz Cointreau + ½ oz lime + splash olive brine; shake 12s; Tajín-rimmed coupe; jalapeño slice + olive
18. **Hot-Pepper Mule** — 2 oz vodka + ½ oz lime + 4 oz ginger beer; copper mug + crushed ice; lime + fresh jalapeño
19. **Michelada Upgrade** — 1 oz vodka + 12 oz Mexican lager (Modelo/Pacifico) + 1 oz lime + 2 dashes Worcestershire + dash hot sauce + pinch Tajín; Tajín-salt rim; build over ice; lime + jalapeño
20. **Aguachile Cocktail** — 1.5 oz vodka + 1 oz lime + ½ oz cucumber juice (or 4 muddled slices) + ¼ oz simple + pinch sea salt; shake 12s; double-strain; cucumber + jalapeño + cilantro

*Plus 2 additional cocktails in Garden Tomato + Black Pepper Vodka tiers per original program: total 22.*

---

## 11. Production Notes & Methodology

### Standard Process (pepper jellies)
- ¼" headspace
- Water bath process 10 min
- Decatur GA elevation (<1,000 ft) requires no time adjustment
- Always wear nitrile gloves seeding hot peppers
- Well-ventilated area for cayenne or large quantity jalapeño

### Standard Process (tomato/onion/combination jams)
- ¼" headspace
- Water bath process 15 min
- Set through long reduction (no pectin needed for onion jams)

### Bloody Mary Mix
- ¼" headspace
- Water bath process **40 min** (longer due to pint jars + lower acid)

### Tomato Water
- Refrigerate after extraction
- Drink/use within 5–7 days for best flavor (or freeze)

### Roasted Garlic Technique
- 400°F for 40 minutes wrapped in foil with olive oil
- Squeeze cloves out when cool
- Used in: Roasted Garlic Confit, Herbed Garlic & Shallot, Spicy Onion, Las Brasas Trinity, Cherokee Rose Sophisticate

### Caramelization
- 45–60 minutes minimum on low-medium heat for proper depth
- Vidalia onions need extra 60 minutes for full sweetness
- Rushing produces mediocre jam

### Freezing Strategy
- Roma's determinate nature dumps 150–300 lbs in July all at once
- Freeze whole or chopped tomatoes (no blanching needed for jam)
- Paces production across fall and winter
- Freezing actually breaks down cell walls and **speeds reduction cooking**
- Heirloom surplus can also be frozen and blended into any jam or Bloody Mary batch later

### Ripening Notes
- **Sweet peppers:** pick when fully colored for maximum sweetness
- **Purple Cayenne:** wait until deep purple/violet for best color
- **Poblanos:** pick slightly soft (riper = sweeter, better roasting)

---

## 12. 12 Tomato Production Techniques

Goal: push Roma yields from ~25 lbs/plant toward **40–50 lbs/plant** on the 6 Roma plants → 150 lbs → **240–300 lbs/season**.

| # | Technique | Key Points |
|---|---|---|
| 1 | **Consistent Deep Watering** | 1–2"/wk deep soaks vs shallow frequent. Drip irrigation. Irregular = blossom end rot + cracking. |
| 2 | **Calcium Supplementation** | Crush eggshells in planting hole OR gypsum at bloom. Prevents blossom end rot (can destroy 30%+ yield). |
| 3 | **Feeding Schedule** | 10-10-10 at planting → switch to 5-10-10 (or tomato-specific) at flowering → every 2–3 wks. Excess N = leaves not tomatoes. |
| 4 | **Heavy Mulching** | 2–3" straw mulch (EZ Straw). Retains moisture, regulates temp, prevents soil splash, suppresses weeds. |
| 5 | **Pruning Indeterminates (NOT Roma)** | Remove suckers from slicing/heirlooms. Lower leaves touching ground. **Do NOT prune determinate Roma** — every flower = potential fruit. |
| 6 | **Hand-Pollination** | Tomatoes self-pollinating but need vibration. Calm mornings: shake clusters or tap stakes. Electric toothbrush on flower stems works. |
| 7 | **Magnesium (Epsom Salt)** | 1 tbsp per plant at transplant. Repeat at first fruit set. Supports chlorophyll + fruit dev. |
| 8 | **First Flower Cluster Removal** | Young plants only. Pinch the very first flowers → stronger root/plant development before fruiting. Already practiced. |
| 9 | **Succession Planting** | Indeterminates only. Second wave of starts in mid-June for late summer/fall harvest. |
| 10 | **Companion Planting** | Basil (already implemented), marigolds, nasturtiums. Avoid near brassicas or fennel. |
| 11 | **Disease Prevention** | Good airflow between plants. Remove yellowing leaves promptly. Water at soil level, not foliage. Copper spray if early blight. |
| 12 | **Foliar Feeding** | Spray nutrients on leaves for fast uptake during critical growth stages. |

---

## 13. Pricing & Channel Strategy

### Pricing Tiers (5 tiers)

| Tier | Retail | Wholesale | Example SKUs |
|---|---|---|---|
| Entry | $8 | $4 | Original Tomato Jam, Garden Verde, Banana Tang, Sweet Heat, Sweet Vidalia |
| Standard | $10 | $5 | Hop & Heat, Burrito Smoke, Classic Bacon Onion, Tomato-Onion Confit, Pepper-Onion Marmalade |
| Restaurant | $12 | $6 | Cherokee Rose Jam, Live Oak Orchard, Las Brasas Jam, Cajun Fire, Smoked Poblano, Bourbon Caramelized Onion, Red Wine & Shallot, Herbed Garlic & Shallot, Spicy Onion, Live Oak Sundown, Bacon-Pepper |
| Premium | $14 | $7 | Purple Reign, Bourbon Burn, Roasted Garlic Confit, Las Brasas Trinity, Cherokee Rose Sophisticate |
| Vodka | $42–$45 | $24–$26 | Garden Tomato Vodka, Black Pepper & Tomato, Black Pepper Vodka, Spicy Pepper Vodka |
| Beverages | $14 (pint)–$18 (4 oz) | $7–$9 | Bloody Mary Mix, Tomato Water |

### Key Margin Insights

**Strongest wholesale margins (50%+):**
- Tomato Water (64%) — tiny ingredients, premium price
- Cherokee Rose Jam (57%) — heirloom premium, restaurant tier
- Las Brasas Trinity (53%) — premium SKU, large yield
- Cherokee Rose Sophisticate (52%)
- Las Brasas Jam (52%)
- Roasted Garlic Confit (51%)
- Tomato-Onion Confit (50%)

**Tight wholesale margins (<15%):**
- Garden Verde Jelly: 6% — pectin cost ($5) eats entry-tier $4 wholesale
- Banana Tang Jelly: 10% — same issue
- Sweet Heat Jelly: 10% — same issue
- Hop & Heat Jelly: 18% — IPA reduction adds cost
- Vodka infusions at Tier 1 wholesale: **negative** — $20 Tito's + $4 packaging > $24 wholesale. Wholesale only viable at Tier 2+ once 1.75L base + bulk supplies kick in.

**Garden inputs are cheap.** Across all SKUs: typical garden cost = $3–$6/batch. Packaging $10–$21. External ingredients $10–$40. Growing your own peppers and tomatoes saves real money — Roma at $0.35/lb vs. $2–$3 retail. Garden line is **~$0.35/lb cost basis vs. $2/lb wholesale value** = ~6× markup.

### Recommended Focus SKUs (10–15 SKU "core line")

Rather than producing all 33 SKUs:

- **High-margin core (retail tier 3+):** Cherokee Rose Jam, Las Brasas Jam, Live Oak Orchard, Cherokee Rose Sophisticate, Las Brasas Trinity, Roasted Garlic Confit, Tomato Water, Purple Reign Jelly
- **Volume gateways (farmers market):** Original Tomato Jam, Tomato-Onion Confit, Classic Bacon Onion, Sweet Vidalia & Honey
- **Bar/restaurant specialty:** Hop & Heat Jelly, Bourbon Burn Jelly, Bourbon Caramelized Onion, Bloody Mary Mix
- **Vodka (after Tier 2 scaling):** Black Pepper Vodka (year-round, fast-turn), Garden Tomato Vodka (peak garden flagship)

**Defer:** Garden Verde / Banana Tang / Sweet Heat (entry-tier jellies, thin wholesale margins) unless they sell direct at retail at farmers market — wholesale economics need price increase to $10 retail / $5 wholesale before worth restaurant placements.

---

## 14. Scaling Tiers (Personal → Commercial)

### Tier 1 — Personal / Pilot (Year 1) · 30–50 bottles/yr
- **Setup:** 1.75L Tito's, quart mason jars, standard kitchen equipment
- **Equipment cost:** ~$210 (infusion $120 + bottling $60 + spices $30)
- **Limiting factor:** Tomato availability + 24-hr drip space in fridge
- **Annual P&L:** ~$1,000 cost · $3,500–$5,500 revenue · $2,500–$4,500 profit · 70–80% retail margin

### Tier 2 — Small Batch Commercial (Year 2–3) · 200–400 bottles/yr
- **Setup:** Tito's by the case (12 × 1.75L, ~$400), half-gallon glass jars, dedicated infusion fridge, parallel coffee-filter funnels
- **Limiting factor:** Filter throughput + bottle/cork supplies
- **Annual P&L:** ~$3,500–$5,000 cost · $15,000–$24,000 revenue · $10,000–$18,000 profit · 75–82% retail margin

### Tier 3 — Full Commercial (Year 3+) · 1,000+ bottles/yr
- **Setup:** TTB DSP + GA manufacturing license, dedicated facility, distribution
- **Annual P&L:** ~$10,000–$18,000 variable cost · $50,000–$95,000 revenue · $35,000–$70,000 profit (before ~$3K–$5K licensing/insurance overhead) · 78–85% retail margin
- **Setup time:** 12–18 months for TTB DSP + GA manufacturing license

### Equipment Investment Order (priority sequence)
1. Tier 1 startup kit ($210)
2. Production-quality glass jars + coffee filters
3. Bottling station (funnel, capper, labels)
4. Dedicated infusion-only fridge (Tier 2 trigger)
5. Wholesale-supply 1.75L Tito's contract (Tier 2)
6. Licensed facility (Tier 3 only)

### Scaling Roadmap (Months 0 → 24+)
- **Months 0–6:** Tier 1, refine recipes, build tasting log
- **Months 6–12:** First Path 2 pitch (Live Oak Tap recipe licensing)
- **Months 12–18:** Tier 2 supply chain wiring, parallel batch infrastructure
- **Months 18–24:** Evaluate Tier 3 viability based on demand signals
- **Months 24+:** Tier 3 licensing pursuit OR sustained Tier 2

---

## 15. Legal & Cottage-Food Compliance

### Jams & Jellies — Georgia Cottage Food

- **pH must be ≤ 4.6** to sell legally
- Pepper jelly is on GA approved cottage-food list — **no license, no revenue cap**
- **Do NOT reduce vinegar or sugar** — they're the safety control, not just flavor
- Less-sweet versions require a *tested* low-sugar pectin recipe, not just cutting sugar

**Label must include:**
- Product name
- "Made in a Home Kitchen"
- Full ingredient list (descending by weight)
- Net weight
- Your name/address (or GDA registration number)

**Worth calling GA Dept. of Agriculture** to confirm whether added-pepper jelly needs a tested recipe on file.

### Alcohol (Vodka) — Georgia Path Analysis

**Path 1 — Personal Use / Gifting** (current phase)
- Fully legal at any scale
- No license needed
- Goal: refine recipes, build word-of-mouth, friends/family + potential restaurant partner taste tests

**Georgia legal nuance on gifting vs. selling:**
- Gifting infused spirits: fully legal at any scale
- Informal "selling" to friends (cash for a bottle): technically requires TTB DSP license in GA. Rarely enforced at small social scale, but it is illegal.
- Cleaner framings:
  - (a) Keep it gifts-only
  - (b) Treat any payment as ingredient cost-share, not tracked as revenue
  - (c) Skip to Path 2 — license recipes to Live Oak Tap so they pour finished product under *their* license; you collect royalty + credit

**Path 2 — Recipe Licensing** (next phase trigger)
- Restaurant (Live Oak Tap most likely) infuses on-premise under their existing alcohol license
- You get credit + per-bottle royalty
- No TTB licensing investment from your side
- Required: tasting log + recipe pages + ingredient kit pricing + royalty model

**Path 3 — Full Commercial** (defer indefinitely until clear demand signal)
- TTB DSP + GA manufacturing license
- ~12–18 months, $5K+ overhead investment
- Path 3 only viable once Tier 2 is obvious next move

### Preferred Sources

- **Transplants:** Bonnie Plants, Burpee, Pike Nurseries (local)
- **Specialty tomato starts:** 3 Porch Farm
- **Citrus:** Four Winds Growers (grafted 2–3 year old trees fruit fastest)
- **Local farmers markets:** Decatur, Freedom, Peachtree Road
- **Onions/garlic/shallots:** DeKalb Farmers Market (year-round)
- **Vidalias:** in season (spring/early summer) directly from Vidalia GA growers
- **Peruvian ingredients (ají amarillo, ají panca):** Buford Highway Farmers Market (Atlanta)
- **Tito's:** Tower Liquor Store (Buford Highway) — best local pricing

---

## 16. Web Platform Architecture

### Stack

| Layer | Technology |
|---|---|
| Frontend | Single static HTML file (`index.html`) with embedded CSS + JS |
| State persistence | API-first with localStorage fallback |
| Backend API | PHP 8.3 (no framework, plain PDO) |
| Database | MySQL 8 (SiteGround shared) |
| Hosting | SiteGround shared (`lukebenton.com` account) |
| Deployment | GitHub Actions → rsync over SSH on every push to `main` |

### Frontend Behavior

The `index.html` planner contains:
- 7 navigation tabs (Overview, Beds, Hydro, Timing, Varieties, Spring History, plus product tabs)
- **112 stable-ID checkboxes** with `data-check="t-N"` attributes
- Bag toggles with `data-bag="bag-N"` attributes
- All state flows through 2 functions: `loadState()` / `saveState()`

State persistence logic (post-platform-build):
1. On page load, `restoreState()` tries `GET /api/state.php`
2. If 200 OK → use server state, also push any localStorage-only changes (offline reconciliation)
3. If fails → fall back to localStorage-only mode (works on file:// or static hosts)
4. On every checkbox toggle: write to in-memory cache + localStorage (always) + fire-and-forget POST to API (if available)

Net effect: works identically on SiteGround (shared state across devices via MySQL) and any static host (localStorage only).

### Backend API

**`api/state.php`** — single endpoint, two operations:

| Method | Body | Response |
|---|---|---|
| `GET` | (none) | `{"t-1": true, "t-2": false, "bag-3": true, ...}` |
| `POST` | `{"key": "t-1", "value": true}` (single) | `{"ok": true, "count": 1}` |
| `POST` | `{"t-1": true, "t-2": false, ...}` (bulk) | `{"ok": true, "count": N}` |

- Content-Type strictly `application/json`
- No CSRF token yet (acceptable because JSON Content-Type can't be sent via cross-origin form submission)
- No auth yet (rely on Protected URLs at SiteGround for privacy)

**`api/_db.php`** — Internal PDO connection helper. Denied via `.htaccess`. Reads `../config.php` for credentials. Returns 503 if not installed.

### Database Schema

```sql
CREATE TABLE IF NOT EXISTS app_state (
  state_key   VARCHAR(64)  NOT NULL PRIMARY KEY,
  state_value JSON         NOT NULL,
  updated_at  TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP
                                    ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

Generic key/value store. Designed to grow — future tables (notes, harvest_log, photos) will sit alongside.

### Bootstrap Installer

**`bootstrap.php`** — one-time browser-based installer.

Flow:
1. User visits `https://garden.lukebenton.com/bootstrap.php`
2. Form prompts for DB host / name / user / password
3. PHP attempts connection, runs `db/schema.sql`
4. On success: writes `config.php` with `0600` permissions, shows success page
5. **User must manually delete `bootstrap.php` from server after install**
6. If hit again with `config.php` already existing: refuses setup, shows "delete me" message

**Security model:** Unauthenticated installer. Mitigated by:
- Refuses to run if `config.php` exists
- Should be deleted from server immediately after install
- Should be deleted from repo too once setup is permanent (or accept it re-deploys harmlessly because of the existence check)

### Deployment Pipeline

**GitHub Actions workflow** (`.github/workflows/deploy-siteground.yml` — replaced the old GitHub Pages workflow):

- Trigger: `push` to `main`
- Steps:
  1. Checkout code
  2. Install rsync
  3. Write SSH private key from secret
  4. rsync over SSH to SiteGround `public_html`
- Required secrets:
  - `SITEGROUND_HOST` = `gvam1301.siteground.biz`
  - `SITEGROUND_PORT` = `18765`
  - `SITEGROUND_USER` = `u2060-ndz1sldvhgts`
  - `SITEGROUND_PATH` = `/home/customer/www/garden.lukebenton.com/public_html/`
  - `SITEGROUND_SSH_KEY` = private key (matching the `garden` public key in SiteGround's SSH Keys Manager)

**Why GitHub Actions instead of SiteGround Git tool:** SiteGround's "Devs → Git" tool doesn't support pulling from external GitHub repos in the current Site Tools version — only "create new repository" or installation-linked repos. GitHub Actions → rsync is the working alternative.

### Security Layer (`.htaccess` at web root)

```apache
# Deny direct access to config, schema, and dev artifacts.
<Files "config.php">       Require all denied </Files>
<Files "publish.sh">       Require all denied </Files>
<Files ".gitignore">       Require all denied </Files>

<FilesMatch "\.(sql|md|sh)$">
  Require all denied
</FilesMatch>

Options -Indexes
ServerSignature Off

<FilesMatch "\.(html|css|js)$">
  Header set Cache-Control "no-cache, must-revalidate"
</FilesMatch>
```

`api/.htaccess`:
```apache
<Files "_db.php">
  Require all denied
</Files>
```

### Privacy (recommended, not enforced yet)

**SiteGround → Security → Protected URLs** → HTTP basic auth on `garden.lukebenton.com/`. Keeps the planner private without needing in-app login. This is the recommended privacy layer — no application code changes needed.

---

## 17. Repo File Map

```
garden-planner-2026/
├── index.html                         # Main interactive planner (7,800+ lines)
├── lukes_complete_garden_plan.html    # Identical copy preserved under original name
├── README.md                          # Project overview, current plantings, key dates
├── publish.sh                         # Legacy SiteGround init script (manual SSH-based)
├── reference/                         # Season layout PNGs, dot maps, propagation trays, direct-sow checklists
│
├── api/                               # ── Backend ──
│   ├── state.php                      # GET/POST endpoint (load all / save one|bulk)
│   ├── _db.php                        # PDO connection helper (denied via .htaccess)
│   └── .htaccess                      # Denies direct access to _db.php
│
├── db/
│   └── schema.sql                     # app_state table definition
│
├── bootstrap.php                      # One-time browser-based installer
│
├── .htaccess                          # Root-level: denies config.php, *.sql, *.md, *.sh
├── .gitignore                         # Excludes config.php (generated by bootstrap)
│
├── WEB_DEPLOY.md                      # GitHub Actions → SiteGround setup walkthrough
│
└── .github/
    └── workflows/
        └── deploy-siteground.yml      # GitHub Actions deployment (replaces old pages.yml)
```

### What's served on production

After GitHub Actions rsyncs:
- `https://garden.lukebenton.com/` → `index.html`
- `https://garden.lukebenton.com/api/state.php` → API
- `https://garden.lukebenton.com/bootstrap.php` → installer (delete after use)
- `https://garden.lukebenton.com/reference/*` → reference images
- All `*.md`, `*.sql`, `*.sh`, `config.php` → 403 Forbidden

---

## 18. Current Deployment State & Outstanding Steps

### Done ✅
- Code architecture committed and merged to `main`
- GitHub Pages workflow removed
- SiteGround account: subdomain `garden.lukebenton.com` created
- PHP 8.3.31 selected for the subdomain
- MySQL database `dbjnxwauotrgiv` created with user `uyp86ufa3xguf`
- SSH key generated and imported into SiteGround as `garden` (ed25519)
- SSH credentials documented (`gvam1301.siteground.biz` port `18765` user `u2060-ndz1sldvhgts`)

### Discovered blocker
- **SiteGround's "Devs → Git" tool does not show external-GitHub pull option** in the user's Site Tools version. Pivoted to GitHub Actions → rsync over SSH.

### Outstanding setup steps (operator side)

1. **Rotate the DB password** (current password was pasted in chat — replace before going live):
   Site Tools → MySQL → Users → user `uyp86ufa3xguf` → Change Password → Generate
2. **Confirm SSL is installed + HTTPS Enforce on** for `garden.lukebenton.com`:
   Site Tools → Security → SSL Manager → install Let's Encrypt if not active
3. **Replace the SSH key** if needed (regenerate with format compatible with GitHub Actions rsync):
   The current `garden` key was generated server-side via OpenSSL+Python. If the Actions deploy fails with "Permission denied (publickey)," generate a fresh `ssh-keygen -t ed25519` keypair locally and replace.
4. **Add 5 GitHub secrets** (Repo → Settings → Secrets and variables → Actions → New repository secret):
   - `SITEGROUND_HOST` = `gvam1301.siteground.biz`
   - `SITEGROUND_PORT` = `18765`
   - `SITEGROUND_USER` = `u2060-ndz1sldvhgts`
   - `SITEGROUND_PATH` = `/home/customer/www/garden.lukebenton.com/public_html/`
   - `SITEGROUND_SSH_KEY` = full private key including `-----BEGIN/END OPENSSH PRIVATE KEY-----` lines
5. **Trigger first deploy:** push any small commit to `main` OR Actions tab → "Deploy to SiteGround" → Run workflow → main
6. **Run bootstrap installer:** browser to `https://garden.lukebenton.com/bootstrap.php` → fill form → install
7. **Delete `bootstrap.php`** from server: Site Tools → File Manager → garden.lukebenton.com → public_html → bootstrap.php → Delete
8. **(Recommended) Lock URL:** Site Tools → Security → Protected URLs → basic auth on `garden.lukebenton.com/`
9. **(Optional) Remove `bootstrap.php` from repo** so it doesn't redeploy on next push (after confirming setup works)

### Status when handed off

The platform code is **production-ready in the repo**. The remaining work is operator-side (rotate password, add secrets, trigger first deploy, run installer, delete installer). No further code changes needed to get to a working stateful site.

### Future feature work (post-deploy)

Things the current schema can support without major rework:
- **Notes per plant / per bed:** add `notes` table keyed by zone/plant ID
- **Harvest log:** add `harvest_log(id, crop, lbs, harvested_at)` table
- **Photo uploads:** add `photos` table, handle file uploads via PHP move_uploaded_file
- **Per-batch production log:** add `batches(id, sku, batch_date, yield_jars, notes)`
- **Tasting log for vodka:** add `tasting_notes(id, batch_id, taster, note, score, tasted_at)` — flagged in Tier 1 checklist as "the IP you'll license in Path 2"
- **Multi-user / family access:** add `users` table + session auth (currently single-user via Protected URLs)
- **CSRF token:** add token to `config.php`, verify on every POST

### Migration path if SiteGround becomes constraining

The architecture is portable: static HTML + PHP + MySQL is supported on every shared host, on cheap VPS ($5/mo DigitalOcean droplet), or containerized (PHP-FPM + MariaDB in Docker). The `index.html` localStorage fallback means the planner keeps working in degraded mode even mid-migration.

---

## End of Dossier

**Last updated:** 2026-05-30
**Repo HEAD:** `main` branch
**Production target:** `https://garden.lukebenton.com/`
**Hand-off intent:** Aggregate handed back to Luke for re-feeding into Claude Code / Code Studio App as durable project context.
