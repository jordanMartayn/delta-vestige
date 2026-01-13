<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Delta-Vestige') }}</title>
    <style>
      :root {
        --ink: #0f1117;
        --muted: #505766;
        --paper: #f6f2ea;
        --sun: #f1b05a;
        --moss: #3f6c5a;
        --mist: #d7d1c6;
        --accent: #c1573c;
        --shadow: rgba(15, 17, 23, 0.14);
      }
      * { box-sizing: border-box; }
      body {
        margin: 0;
        color: var(--ink);
        font-family: "Palatino Linotype", "Book Antiqua", Palatino, "Times New Roman", serif;
        background:
          radial-gradient(900px 500px at 10% 10%, rgba(193, 87, 60, 0.18), transparent 60%),
          radial-gradient(700px 400px at 85% 15%, rgba(63, 108, 90, 0.18), transparent 60%),
          linear-gradient(180deg, #f8f3ea 0%, #efe8dd 100%);
        min-height: 100vh;
      }
      .frame {
        max-width: 980px;
        margin: 0 auto;
        padding: 40px 20px 60px;
      }
      header {
        display: flex;
        flex-wrap: wrap;
        gap: 16px 24px;
        align-items: center;
        justify-content: space-between;
      }
      .brand {
        display: flex;
        align-items: center;
        gap: 14px;
      }
      .seal {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        border: 2px solid var(--ink);
        position: relative;
        box-shadow: 0 8px 18px var(--shadow);
        background: radial-gradient(circle at 30% 30%, #fff6e8, #ecd2b8 65%);
      }
      .seal::after {
        content: "";
        position: absolute;
        inset: 9px;
        border-radius: 50%;
        border: 2px dashed var(--accent);
        opacity: 0.65;
      }
      .brand h1 {
        margin: 0;
        font-size: 28px;
        letter-spacing: 0.5px;
      }
      .tagline {
        color: var(--muted);
        font-size: 14px;
      }
      .badge {
        border: 1px solid var(--ink);
        padding: 6px 12px;
        border-radius: 999px;
        font-size: 12px;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        background: #fff8ee;
      }
      .hero {
        margin-top: 36px;
        padding: 28px 30px;
        border-radius: 18px;
        background: rgba(255, 250, 242, 0.9);
        box-shadow: 0 22px 50px var(--shadow);
        border: 1px solid rgba(15, 17, 23, 0.12);
        position: relative;
        overflow: hidden;
        animation: fadeUp 0.6s ease-out;
      }
      .hero::before {
        content: "";
        position: absolute;
        inset: -60% -10% auto auto;
        width: 380px;
        height: 380px;
        background: radial-gradient(circle, rgba(63, 108, 90, 0.18), transparent 70%);
        transform: rotate(8deg);
      }
      .hero h2 {
        margin: 0 0 10px;
        font-size: 32px;
        font-weight: 600;
      }
      .hero p {
        margin: 0 0 18px;
        color: var(--muted);
        font-size: 16px;
        line-height: 1.6;
        max-width: 640px;
      }
      .pill-row {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 6px;
      }
      .pill {
        border-radius: 999px;
        padding: 8px 14px;
        border: 1px solid rgba(15, 17, 23, 0.2);
        background: rgba(255, 255, 255, 0.7);
        font-size: 13px;
      }
      .grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
        gap: 18px;
        margin-top: 28px;
      }
      .card {
        background: rgba(255, 255, 255, 0.85);
        border-radius: 16px;
        padding: 18px 18px 20px;
        border: 1px solid rgba(15, 17, 23, 0.12);
        box-shadow: 0 10px 24px var(--shadow);
        animation: fadeUp 0.6s ease-out;
      }
      .card h3 {
        margin: 0 0 8px;
        font-size: 18px;
      }
      .card p {
        margin: 0;
        color: var(--muted);
        font-size: 14px;
        line-height: 1.5;
      }
      .card strong {
        color: var(--ink);
      }
      footer {
        margin-top: 28px;
        font-size: 13px;
        color: var(--muted);
      }
      .divider {
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(15, 17, 23, 0.2), transparent);
        margin: 22px 0 16px;
      }
      .link {
        color: var(--ink);
        text-decoration: none;
        border-bottom: 1px solid rgba(15, 17, 23, 0.35);
      }
      @keyframes fadeUp {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
      }
      @media (max-width: 640px) {
        .hero h2 { font-size: 26px; }
        .brand h1 { font-size: 22px; }
        .badge { font-size: 11px; }
      }
    </style>
  </head>
  <body>
    <div class="frame">
      <header>
        <div class="brand">
          <div class="seal" aria-hidden="true"></div>
          <div>
            <h1>{{ config('app.name', 'Delta-Vestige') }}</h1>
            <div class="tagline">A calm memory-and-organization hub.</div>
          </div>
        </div>
        <div class="badge">Phase 1 - Core only</div>
      </header>

      <section class="hero">
        <h2>Welcome home.</h2>
        <p>
          This is the quiet starting line. The core stays boring and stable while the
          tools grow in small, deliberate steps.
        </p>
        <div class="pill-row">
          <div class="pill">Calendar</div>
          <div class="pill">To-do lists</div>
          <div class="pill">Breadcrumb notes</div>
          <div class="pill">No AI yet</div>
        </div>
      </section>

      <div class="grid">
        <div class="card">
          <h3>Today</h3>
          <p><strong>Status:</strong> Laravel is up. Sail is running. Database is online.</p>
        </div>
        <div class="card">
          <h3>Next slice</h3>
          <p>Define the Phase 1 data model and the first three CRUD screens.</p>
        </div>
        <div class="card">
          <h3>North Star</h3>
          <p>Reliable external memory, calm UI, explainable nudges later.</p>
        </div>
      </div>

      <div class="divider"></div>
      <footer>
        Documentation lives in <span class="link">documentation/</span> and sets the constraints for everything.
      </footer>
    </div>
  </body>
</html>
