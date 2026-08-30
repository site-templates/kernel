# Kernel — design system

## Atmosphere

A person's site as their own index. Not a landing page with a blog bolted
on: a contents page, set on one stock of warm grey paper, where every piece
of writing and every project is a row of type, a hairline, and a date.

The whole site lives in a single 38rem column, left-aligned, with nothing
centred and nothing boxed. Separation is done with air and hairlines. There
are exactly two filled surfaces in the design and both are earned.

Restraint is the point, not a budget. If a section can be made from type and
a rule, it is made from type and a rule.

## Colors

| Role | Token | Value | Where |
|---|---|---|---|
| Paper | `--color-canvas` | `#f7f6f3` | the page, everywhere |
| Recessed plane | `--color-surface` | `#edebe5` | the dated note, code blocks. Nowhere else |
| Ink | `--color-ink` | `#16150f` | headings, body, entry titles |
| Muted ink | `--color-muted` | `#6b6760` | dates, descriptions, footer, inactive nav |
| Hairline | `--color-line` | `#dfdcd3` | every divider and every leader at rest |
| Green | `--color-accent` | `#176b47` | see below |
| Type on green | `--color-accent-ink` | `#f4f7f4` | reserved; the green is never a fill |
| Code | `--font-mono` | system stack | code and inline code only |

The canvas leans grey rather than cream — this is a printed index, not a
keepsake. The green is dark enough to carry body text, which is exactly why
it never needs a fill behind it.

**The accent appears at most three times on a page**, and at least one of
those is at rest — a page whose only colour is a hover state has no colour
on a phone. At rest: the current navigation link's underline, the disc on
the homepage's availability line, the disc on the Now page, and the rule
beside a pull-quote. On hover: the leader draw and a link's underline.

It is never a button background, never a badge, never a heading, never a
fill of any kind.

## Typography

- `--font-display` — **Spectral** 400/500/600 + 400 italic. Every heading,
  every post title, every word of a post body. A low-contrast reading serif,
  deliberately not a high-contrast display face.
- `--font-sans` — **Schibsted Grotesk** 400/500. Body, navigation, dates,
  descriptions, labels, the footer.
- `--font-mono` — the system monospace stack. Code and inline code only,
  because the samples in this template are column-aligned data that has to
  align. Never as a label, a badge, or a costume for "technical" — two code
  blocks do not justify a webfont either.

The pairing has one rule: the grotesque is for finding things, the serif is
for reading them. A post page is the only place a heading and its text share
a family, and that is the reason the serif exists.

Scale (all fluid, no breakpoints needed):

| Class | Size | Use |
|---|---|---|
| `.display-hero` | `clamp(2.25rem, 4.8vw, 3.375rem)` / 1.08 / -0.02em | the homepage statement |
| `.display-page` | `clamp(1.75rem, 3vw, 2.25rem)` / 1.14 | an inner page title, a post title |
| `.display-section` | `1.375rem` / 1.25 | a section heading |
| body | `1rem` / `1.7` | everything else; `text-sm` only from `sm:` up |

Measures: prose `68ch`, the homepage paragraph `62ch`, a lede `58ch`, the
statement `24ch`. Body text is never below `text-base` on a phone.

## Spacing & radius

One column: `max-w-[38rem]`, `px-6` rising to `px-8`. Section rhythm is
`py-14` on a phone and `py-16` from `sm:` up; the homepage opening gets more.
Always more space above a heading than below it.

Radius is nearly absent. `rounded-sm` on the one recessed panel and on code
blocks, `rounded-full` on the avatar and the Now marker. Nothing else is
rounded, because nothing else is a box.

## Components

**The leader row** is the signature and the only list shape in the design.
Title, a hairline that flex-grows to fill, a date. At rest the leader is
`--color-line`; on hover a `--color-accent` rule is drawn across it from the
left over 420ms, and the date steps from muted to ink. The colour change is
instant and the drawing is what animates — that is what makes it feel crisp
rather than laggy.

Below 40rem the inline leader is dropped — a leader with two centimetres to
lead is noise — and the row's own bottom hairline takes the same draw across
its full width instead. Exactly one wipe at every size, never two.

**The ruled link** is the same gesture at the scale of a word: a muted
underline that switches to accent and drops further from the baseline on
hover. Used in navigation, link groups and inside prose.

**The dated note** is the only filled surface: recessed `--color-surface`, a
small accent disc, a stamp and a sentence.

**Description lists** carry term and detail pairs, hairline-separated, term
in ink at `font-medium`, detail in muted. Never a table, never a card.

There are no cards in this template. There are no shadows. There are no
icons. If something needs a box to be understood, it needs rewriting.

## Voice

First person. Specific and past tense — what was tried, what broke, what was
kept. Short sentences. Titles in sentence case, never Title Case. A full
stop on a standalone descriptive line; none on items in a list. No
exclamation marks, no marketing register, no emoji.

Copy is design here: a generic sentence in this layout has nowhere to hide.

## Anti-patterns

- A card grid. Anywhere, for anything.
- The accent as a fill — a button, a badge, a banner.
- A raw hex, `bg-zinc-*`, `text-white` or `text-black` in a section. Every
  colour is a token.
- An eyebrow or kicker above a heading; section numbers; emoji as icons.
- A second column. The single column is the design.
- A hover state with no `focus-visible` twin, or a page whose only colour
  is a hover state.
- A link whose rest underline is too faint to read as a link.
- A reveal that can leave content stuck at `opacity: 0` under reduced
  motion.

## Tokens

```css
@theme {
    --color-canvas: #f7f6f3;
    --color-surface: #edebe5;
    --color-ink: #16150f;
    --color-muted: #6b6760;
    --color-line: #dfdcd3;
    --color-accent: #176b47;
    --color-accent-ink: #f4f7f4;

    --font-display: "Spectral", ui-serif, Georgia, "Times New Roman", serif;
    --font-sans: "Schibsted Grotesk", ui-sans-serif, system-ui, -apple-system, sans-serif;
    --font-mono: ui-monospace, "SF Mono", SFMono-Regular, Menlo, Consolas, monospace;

    --ease-draw: cubic-bezier(0.16, 1, 0.3, 1);
}
```
