# Cognitive Layer — Generation

## Role
The Generation layer produces the **initial candidate response** or action suggestion.

This layer is intentionally:
- fast
- minimally reflective
- focused on adequacy, not perfection

It corresponds to human *first-pass answering* — the thing you say before you stop to think about whether it was well phrased.

## Responsibilities
- Interpret the request at face value
- Produce a coherent, useful response
- Avoid unnecessary elaboration unless prompted or escalated by the Gatekeeper

## Constraints
- No deep self-critique
- No alternative exploration
- No associative wandering

## Design principle
Most interactions should terminate here.
If this layer is good enough, **stop**.
