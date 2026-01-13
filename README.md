# Delta-Vestige - Project Intent / North Star
The system that changes what was forgotten into something retrievable.

## What this is
A self-hosted “personal hub” that reduces cognitive load by being a reliable home for:
- **organisation** (calendar, to-dos, notes)
- **context** (what I was doing, why, and what’s next)
- **memory support** (surfacing relevant things at the right time)
- **local AI integrations** (later), without turning the system into a fragile science project

It should feel like a calm, dependable tool — not a productivity cult, not a nagging assistant, and not a complex platform I’m constantly rebuilding.

## Why it exists
I want a system that helps compensate for:
- inconsistent recall / “where was I up to?” moments
- drifting priorities and fragmented notes
- the friction of switching between scattered tools
- the gap between what I *intend* to do and what I actually remember to do

The goal is *less* mental bookkeeping and *more* follow-through, with minimal ongoing maintenance.

## Core principles
- **Boring core, clever edges:** the central system stays stable; experimental features live in add-ons/workers.
- **Data first:** store canonical data cleanly, so it stays valuable even if UIs change.
- **Explainable suggestions:** if the system surfaces something, it must be able to show *why*.
- **User remains in control:** suggestions are opt-in; nothing “acts” without confirmation.
- **Local-first, portable:** it runs on my home server, and can be moved to beefier hardware without redesign.
- **Incremental growth:** ship Phase 1 quickly, then expand in phases without rewrites.

## What success feels like
- I trust it to hold the “threads” I drop during the day.
- I can quickly answer: **“What was I doing? What matters today? What’s next?”**
- It surfaces genuinely useful reminders without becoming noisy.
- I spend time using it, not maintaining it.

## What this is not
- Not a general social network / multi-user SaaS product.
- Not a maximalist “everything app” on day one.
- Not a fully autonomous agent.
- Not dependent on external cloud services to function (unless explicitly chosen per integration).

## Local setup (fresh install)
Prereqs:
- Docker engine running (Linux: `sudo systemctl enable --now docker`).

Steps:
1. Copy `.env.example` to `.env` and set any machine-specific values.
2. Start the stack: `./vendor/bin/sail up -d`
3. Generate app key (first run only): `./vendor/bin/sail artisan key:generate`
4. Run migrations: `./vendor/bin/sail artisan migrate`
5. Visit `http://localhost:80`

Helpful commands:
- Check status: `./vendor/bin/sail ps`
- Stop containers: `./vendor/bin/sail down`
