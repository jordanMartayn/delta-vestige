# Cognitive Layer — Council / Deliberation

## Role
The Council layer explores **multiple perspectives** before selecting an answer.

It simulates internal dialogue:
- different framings
- different assumptions
- different solution paths

This mirrors a human debating internally before responding.

## Responsibilities
- Generate diverse candidate thoughts
- Evaluate relevance to the user’s intent
- Select or blend the most appropriate response

## Important clarifications
- The goal is **not consensus**
- The goal is **signal emergence**
- The user normally sees **one coherent answer**, not the debate

## Costs
- Higher compute
- Higher latency
- Higher complexity

## Design principle
Council is **rare** and **earned**.
It should be invoked only when stakes or ambiguity justify it.
