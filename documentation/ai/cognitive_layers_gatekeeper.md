# Delta‑Vestige — Gatekeeper & “Body Language” Effort Calibration

## Purpose
Delta‑Vestige should decide **how much effort to apply** to a request the way humans do:
- simple questions → simple answers
- ambiguous / reflective / high-stakes questions → deeper thought

This avoids two failure modes:
- **underthinking everything** (shallow, unhelpful)
- **overthinking everything** (slow, noisy, exhausting)

## Default behavior
- **Implicit by default:** no “mode selection” UI.
- The system decides effort quietly.
- Effort level is expressed through **output “body language”** rather than a loud announcement.

## The Gatekeeper (Effort Selector)
A lightweight meta-layer that chooses the response posture before any heavy processing.

### Inputs the gatekeeper considers
**Textual tone & wording**
- short / clipped phrasing → low effort
- exploratory / tentative phrasing → medium effort
- reflective / layered phrasing → higher effort

**Language markers**
- “quickly”, “just”, “tl;dr” → suppress escalation
- “help me think”, “I’m not sure”, “compare”, “weigh” → allow reflection
- hypotheticals / metaphors → allow association

**Context**
- Where the request happens (web UI note vs calendar edit vs chat)
- Recent interaction pattern (rapid-fire tasks vs deliberate discussion)

These signals don’t need to be perfect—just directionally useful.

## Response postures (internal, not “modes”)
Instead of explicit modes, Delta‑Vestige selects a **posture**:

- **Neutral:** direct answer, minimal extras
- **Careful:** add a reflection pass (quality/fit check)
- **Exploratory:** allow associative recall (memory linking)
- **Deliberative:** enable council/multi-perspective reasoning (rare)

Most interactions should stay at **Neutral** or **Careful**.

## Output “body language” (how effort is shown)
Delta‑Vestige should communicate posture subtly, like human body language.

### Web UI signals
- subtle colour shift or small tag (e.g., `reflective`, `exploratory`)
- collapsible “notes / alternatives” section
- more cautious language when uncertainty is higher

### Headless / terminal signals
- tone shifts (more/less tentative)
- pacing (slightly longer response when effort escalates)
- fewer absolutes when uncertainty is detected

The user should **feel** the effort change without needing a settings panel.

## Triggering escalation
### Default: implicit
The gatekeeper uses tone, wording, and context to choose posture.

### Optional explicit overrides (bias, not force)
The user may nudge posture with phrases like:
- “quick answer”
- “think this through”
- “explore alternatives”

Overrides bias the gatekeeper rather than hard-switching behavior.

## Safety & sanity constraints
- The gatekeeper must be **conservative**.
- Deep reflection, association chaining, and council should be **earned**, not default.
- Proactive behavior (Phase 3+) must remain:
  - explainable (“why am I seeing this?”)
  - dismissible / snoozable / disable-able
  - low-frequency for attention grabs (max one deliberate “hey” per day)

## Design invariant
This is **not a phase feature**—it’s an architectural rule that shapes all phases:
- Phase 1: mostly dormant (but designed for)
- Phase 2: used in chat for effort calibration
- Phase 3+: critical for controlling proactive memory/suggestions
