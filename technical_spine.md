# Technical Spine & Architecture

## Current decisions (locked for now)
- **Core app:** Laravel (web UI + API)
- **Primary database:** PostgreSQL
- **Vector storage/search (future-ready):** pgvector (in Postgres)
- **Async integration model:** job-based (queue + workers)
- **Deployment:** Docker / docker-compose (portable between machines)

## Why this spine
### Laravel as the core
- Fast to build a usable web app (auth, CRUD, admin, jobs, validation)
- Strong conventions → fewer “framework decisions”
- Keeps the core boring and reliable

### PostgreSQL (with pgvector later)
- Relational truth (dates, relationships, permissions) stays first-class
- Vector search later without introducing a separate vector DB
- Reduces future migrations when semantic memory becomes central

### Job-based integrations
- The core emits jobs/events like “transcribe”, “embed”, “summarise”, “link related items”
- Workers perform heavy/experimental tasks
- Prevents AI dependencies from infecting the stable core

## High-level components
### 1) Core App (Laravel)
Responsibilities:
- Web UI for Phase 1: calendar, to-dos, notes/breadcrumbs
- API endpoints for data access
- Auth + permissions (even if single-user initially)
- Canonical data model and validation
- Creating jobs for background work
- Storing results (summaries, tags, embeddings) produced by workers

### 2) Database (PostgreSQL + pgvector later)
Responsibilities:
- Source of truth for all core entities
- Relationships and indexing
- Storage for embeddings when AI arrives

### 3) Queue (Redis or equivalent)
Responsibilities:
- Reliable async work dispatch
- Rate limiting / retries / backoff patterns (later)

### 4) Workers (initially none, later Python for AI)
Responsibilities (Phase 2+):
- LLM chat interface (as a tool, not the brain)
- Embeddings generation + semantic search support
- Transcription, classification, summarisation
- Suggested links / “memory surfacing” candidates

## Integration boundary rules
- **Core owns the data model.**
- **Workers are replaceable.** They write results back through the core API (preferred).
- **No direct worker writes to DB** in early phases (can be revisited later for performance).
- **Everything async is observable** (job status, logs, outcomes).

## Non-goals (for now)
- No microservice sprawl.
- No dedicated search engine (OpenSearch/Elastic) on day one.
- No “active agent” making changes autonomously.
- No AI inside the core runtime dependencies.

## Phase boundaries (short version)
- **Phase 1:** pure organisation (calendar, to-dos, notes)
- **Phase 2:** light AI (chat + access to data on request)
- **Phase 3+:** proactive memory/suggestions (carefully, with controls)
