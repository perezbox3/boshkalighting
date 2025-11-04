<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Boshka Lighting — Coming Soon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="description" content="Modern lighting. Clean design. The Boshka Lighting website is being refreshed." />
    <link rel="canonical" href="https://boshkalighting.com/" />

    <link rel="icon" href="/images/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96x96.png" />
    <link rel="icon" type="image/svg+xml" href="/images/favicon.svg" />
    <link rel="manifest" href="/site.webmanifest" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <style>
        :root {
            --ink: #1c1c1c;
            --muted: #6b706c;
            --line: #e6e6e6;
            --bluegrey: #4a5c6a;   /* new CTA color */

            --wash-a: #f8f6f4;
            --wash-b: #f0f2f0;
            --wash-c: #f6f8f6;

            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 18px;
        }

        /* General & Layout */
        * { box-sizing: border-box; }
        html, body { height: 100%; }
        body {
            margin: 0;
            font-family: 'Roboto Mono', monospace, ui-monospace, SFMono-Regular;
            font-size: 16px;
            line-height: 1.6;
            color: var(--ink);
            background: #fdfcfb;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }

        .wash {
            position: fixed;
            inset: -18vmax;
            z-index: -1;
            filter: blur(60px) saturate(115%);
            background:
                radial-gradient(42vmax 38vmax at 12% 0%, var(--wash-a), transparent 55%),
                radial-gradient(50vmax 42vmax at 100% 10%, var(--wash-b), transparent 60%),
                radial-gradient(52vmax 40vmax at 50% 120%, var(--wash-c), transparent 60%);
            animation: drift 24s ease-in-out infinite alternate;
        }
        @keyframes drift {
            0% { transform: translate3d(0,0,0) scale(1); }
            100% { transform: translate3d(-2vmax, 1.5vmax, 0) scale(1.02); }
        }

        /* Header */
        header.site {
            padding: 3rem 2rem 1.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 600;
            letter-spacing: 0.12em;
            font-family: 'Playfair Display', serif;
            font-size: 1.25rem;
        }

        /* Hero Section */
        .hero {
            max-width: 900px;
            margin: 8vh auto 7vh;
            padding: 0 2rem;
            text-align: center;
        }
        .kicker {
            font-size: 0.9rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--muted);
            font-family: 'Roboto Mono', monospace;
        }
        h1 {
            margin: 0.5rem 0 1.25rem;
            font-size: clamp(40px, 8vw, 96px);
            line-height: 1.05;
            letter-spacing: -0.02em;
            font-weight: 400;
            font-family: 'Playfair Display', serif;
        }
        .sub {
            margin: 0 auto 2.5rem;
            max-width: 680px;
            color: var(--muted);
            font-size: clamp(16px, 2.2vw, 20px);
            line-height: 1.75;
        }
        .sub strong {
            color: var(--ink);
            font-weight: 600;
        }

        /* CTA Button - updated to blue-grey */
        .cta {
            --ring: rgba(74, 92, 106, 0.25);
            display: inline-flex;
            gap: 10px;
            align-items: center;
            padding: 1rem 2rem;
            border: 1px solid var(--bluegrey);
            border-radius: 999px;
            background-color: var(--bluegrey);
            color: #fff;
            font-weight: 600;
            font-family: 'Roboto Mono', monospace;
            text-decoration: none;
            box-shadow: 0 0 0 6px var(--ring), 0 12px 24px rgba(74, 92, 106, 0.25);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 0 8px var(--ring), 0 16px 28px rgba(74, 92, 106, 0.3);
        }
        .cta:active { transform: translateY(0); }
        .cta-icon {
            font-size: 1.25rem;
            line-height: 1;
            margin-right: -4px;
        }

        /* Subscribe Bar (unchanged) */
        .subscribe {
            position: sticky;
            bottom: 0;
            width: 100%;
            background: rgba(253, 252, 251, 0.9);
            backdrop-filter: blur(10px) saturate(120%);
            border-top: 1px solid var(--line);
        }
        .sub-inner {
            max-width: 1000px;
            margin: 0 auto;
            padding: 1.5rem 2rem;
            display: grid;
            grid-template-columns: auto 1fr auto;
            gap: 16px;
            align-items: center;
        }
        .sub-title {
            font-weight: 600;
            letter-spacing: 0.05em;
        }
        .sub-form {
            display: flex;
            gap: 12px;
            width: 100%;
        }
        input[type="email"] {
            flex: 1;
            padding: 0.8rem 1rem;
            border: 1px solid var(--line);
            border-radius: var(--radius-md);
            font: inherit;
            outline: none;
            background: #fff;
            transition: border-color 0.15s ease, box-shadow 0.15s ease;
        }
        input[type="email"]:focus {
            border-color: var(--bluegrey);
            box-shadow: 0 0 0 4px rgba(74, 92, 106, 0.1);
        }
        button.signup {
            padding: 0.8rem 1.25rem;
            border-radius: var(--radius-md);
            border: 1px solid var(--bluegrey);
            background: var(--bluegrey);
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 6px 14px rgba(74, 92, 106, 0.18);
            transition: transform 0.15s ease, box-shadow 0.15s ease, opacity 0.15s ease;
        }
        button.signup:hover {
            transform: translateY(-1px);
            box-shadow: 0 10px 20px rgba(74, 92, 106, 0.22);
        }
        .note {
            color: var(--muted);
            font-size: 0.9rem;
        }

        /* Modal / Dialog */
        dialog.sheet {
            width: min(760px, 92vw);
            border: 1px solid var(--line);
            border-radius: var(--radius-lg);
            padding: 0;
            background: #fff;
            box-shadow: 0 40px 90px rgba(3, 7, 18, 0.28);
        }
        dialog.sheet::backdrop {
            background: rgba(8, 15, 23, 0.45);
            backdrop-filter: saturate(130%) blur(6px);
        }
        .sheet header {
            padding: 1.25rem 1.5rem;
            border-bottom: 1px solid var(--line);
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.15rem;
        }
        .sheet main {
            padding: 1.5rem;
        }
        .rows {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }
        @media (max-width: 720px) {
            .rows { grid-template-columns: 1fr; }
        }
        .card {
            border: 1px solid var(--line);
            border-radius: var(--radius-lg);
            padding: 1.5rem;
            background: linear-gradient(180deg, #fff, #fefefe);
        }
        .card h3 {
            margin: 0 0 10px;
            font-size: 1.2rem;
            font-family: 'Playfair Display', serif;
        }
        .card p {
            margin: 0.5rem 0;
        }
        .x {
            appearance: none;
            border: 1px solid var(--line);
            background: #f6f9fb;
            padding: 10px 14px;
            border-radius: var(--radius-md);
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.15s ease, box-shadow 0.15s ease, border-color 0.15s ease;
        }
        .x:hover {
            transform: translateY(-1px);
            border-color: #d9e7f1;
            box-shadow: 0 8px 16px rgba(2, 32, 71, 0.06);
        }

        /* A11y & Utils */
        .visually-hidden {
            position: absolute !important;
            height: 1px;
            width: 1px;
            overflow: hidden;
            clip: rect(1px, 1px, 1px, 1px);
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <div class="wash" aria-hidden="true"></div>

    <header class="site">BOSHKA LIGHTING</header>

    <section class="hero" role="main" aria-labelledby="heading">
        <div class="kicker">Website Refresh</div>
        <h1 id="heading">
            Lighting the way to a new<br/>
            experience.
        </h1>
        <p class="sub">
            We’re working hard to bring you a new website. Our passion for <strong>modern lighting</strong> and <strong>clean design</strong> is at the heart of everything we do.
        </p>
        <p class="sub">
            For product availability, quotes, or service, please reach out to our team below.
        </p>

        <a class="cta" href="#" id="openSheet" role="button">
            <span class="cta-icon">💡</span> Contact Our Team
        </a>
    </section>

    <dialog class="sheet" id="sheet" aria-labelledby="sheetTitle">
        <header>
            <strong id="sheetTitle">How to reach us</strong>
            <button class="x" id="closeSheet" aria-label="Close dialog">Close</button>
        </header>
        <main>
            <div class="rows">
                <div class="card">
                    <h3>Contact Information</h3>
                    <p><a href="mailto:boshkalighting@gmail.com">boshkalighting@gmail.com</a></p>
                    <p><a href="tel:+8177577092">817 757 7092</a></p>
                    <p style="margin-top:1rem">
                        3825 Quanah Hill Rd Unit 11<br/>
                        Weatherford, TX 76087
                    </p>
                    <p style="margin-top:1rem">
                        <a href="https://www.google.com/maps/search/?api=1&query=3825%20Quanah%20Hill%20Rd%20Unit%2011%2C%20Weatherford%2C%20TX%2076087" target="_blank" rel="noopener">Open in Maps</a>
                    </p>
                </div>
                <div class="card">
                    <h3>Business Hours</h3>
                    <table style="width:100%; border-collapse:collapse">
                        <tbody>
                            <tr><td>Mon–Thu</td><td style="text-align:right">9:00 AM – 5:00 PM</td></tr>
			    <tr><td>Friday</td><td style="text-align:right">9:00 AM – 2:00 PM</td></tr>
			    <tr><td>After 2pm Fri</td><td style="text-align:right">By appointment</td></tr>
                            <tr><td>Saturday</td><td style="text-align:right">By appointment</td></tr>
                            <tr><td>Sunday</td><td style="text-align:right">Closed</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </dialog>

    <script>
        // Sheet behavior
        const sheet = document.getElementById('sheet');
        const open = document.getElementById('openSheet');
        const closeBtn = document.getElementById('closeSheet');
        open.addEventListener('click', (e) => { e.preventDefault(); sheet.showModal(); });
        closeBtn.addEventListener('click', () => sheet.close());
        sheet.addEventListener('click', (e) => { if (e.target === sheet) sheet.close(); });
        document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && sheet.open) sheet.close(); });

        // Subscribe (client only)
        document.getElementById('subscribeForm').addEventListener('submit', (e) => {
            e.preventDefault();
            const email = document.getElementById('email');
            const valid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value);
            if (!valid) { email.focus(); email.setAttribute('aria-invalid', 'true'); return; }
            alert('Thanks! We’ll let you know when we launch.');
            e.target.reset();
        });
    </script>
</body>
</html>

