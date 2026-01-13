# Phase Boundaries

## Phase 1 — Simple organisational tools
Goal: A usable daily web UI that works without AI.

Includes:
- Calendar
- To-do lists
- Personal note keeping (“breadcrumbs”)

Explicitly excludes:
- Embeddings, vector search, AI summaries/tags
- Proactive suggestions
- Dedicated search engine (Elastic/OpenSearch)
- Autonomous actions

## Phase 2 — Light AI integration
Goal: AI as an on-request tool interface.

Includes:
- Chat UI (initially simple)
- Read-only access to organisational data **on request**
- Optional “prompting” features (e.g., suggestions only when I ask for them)

Excludes (still):
- Unprompted interruptions
- Autonomous changes

## Phase 3 — Active memory and proactive support
Goal: The system helps compensate for memory/organisation gaps proactively, respectfully.

Includes:
- At most **one** deliberate “attention grab” per day
- Otherwise: contextual resurfacing/reminders
- Explainable, snoozable, disable-able suggestions
- Clear “why am I seeing this?”

## Phase 4+ — Modular add-ons
Goal: Add tools without destabilising the core.

Includes (examples):
- Transcription pipelines
- Auto-tagging and auto-linking
- Hybrid search (keyword + semantic)
- External integrations (files, email, devices) as add-ons

Rule:
- If it’s experimental or dependency-heavy, it lives in a worker/add-on, not the core.
