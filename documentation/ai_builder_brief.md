# AI Builder Brief (Collaboration Contract)

## You are helping build
A self-hosted personal organisation hub that will later integrate local AI.
The core is intentionally boring and stable. AI capabilities are layered on later via workers/jobs.

## Current phase focus
- **Phase 1 (now):** calendar + to-do lists + personal notes/breadcrumbs
- **No AI features in Phase 1**, other than designing a future-friendly structure.

## How to help (preferred working style)
- Keep changes **incremental** and **phase-appropriate**.
- If something adds complexity, propose it as an **optional next step**, not a default.
- Ask **one** key clarifying question at a time when needed.
- Prefer **simple, robust defaults** over cleverness.
- Avoid jargon unless it’s necessary, and define it quickly when used.

## Guardrails (don’ts)
- Don’t introduce heavy infra early (Elastic/OpenSearch/Kubernetes/etc.).
- Don’t rewrite the spine in a different language “because it’s cool”.
- Don’t design a full autonomous agent; suggestions must be **explainable and dismissible**.
- Don’t assume cloud services; default to local-first and portable.

## What “good AI integration” means here
- Chat is a **tool interface**, not the system’s authority.
- AI can read organisational data with permission and produce:
  - summaries, tags, links, suggestions, search assistance
- Any proactive behavior must be:
  - **low frequency** attention grabs (at most one deliberate “hey” per day)
  - otherwise **contextual**, non-intrusive resurfacing
  - always with “why am I seeing this?” and snooze/disable controls

## Output preferences
- Produce docs/plans before large builds.
- When code is needed, prefer:
  - small slices
  - runnable, Docker-friendly steps
  - minimal dependencies
- If you’re about to dump a full stack or boilerplate, stop and propose a smaller next move.

## Definition of “done” per phase
- Phase 1 done = I can reliably use it daily for calendar/todos/notes.
- Phase 2 done = I can chat with it and pull my data on request.
- Phase 3 done = it surfaces relevant reminders without becoming annoying.
