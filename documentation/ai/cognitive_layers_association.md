# Cognitive Layer — Association (Memory Triggering Memory)

## Role
The Association layer enables **associative recall**.

Instead of answering only the explicit prompt, it asks:
- What else is meaningfully related?
- What previous context resonates with this?
- What might the user have forgotten that matters here?

This corresponds to human “oh, that reminds me…” cognition.

## Responsibilities
- Retrieve semantically related memories or data
- Surface connections across time, topics, or projects
- Support context enrichment, not derailment

## Mechanism (conceptual)
- Vector similarity (pgvector later)
- Recency + relevance weighting
- Bounded spreading activation (no infinite chains)

## Constraints
- Association must be **controlled**
- It should enrich, not overwhelm
- Results should be explainable (“this is related because…”)

## Design principle
Association is powerful — use sparingly.
