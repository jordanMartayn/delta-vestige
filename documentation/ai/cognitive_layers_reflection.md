# Cognitive Layer — Reflection

## Role
The Reflection layer evaluates the output of Generation.

It asks:
- Was this actually helpful?
- Did it answer the *right* question?
- Is the tone appropriate for the user and context?
- Are there obvious gaps or risks?

This mirrors a human pausing after speaking and thinking:
> “Did I explain that well?”

## Responsibilities
- Assess clarity, relevance, and intent alignment
- Detect uncertainty or ambiguity
- Optionally annotate confidence or caveats

## Output
Reflection may:
- approve the original response unchanged
- suggest a small revision
- add metadata (confidence, uncertainty markers)

Reflection **should not** endlessly rewrite.
Its purpose is quality control, not perfection.

## Design principle
Reflection is cheap and valuable — but should remain bounded.
