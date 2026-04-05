<nav class="navbar">
    <div class="nav-container">
        <div class="logo">My Laravel Site</div>

        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
            <a href="/services">Services</a>
            <a href="/showcases">Showcases</a>
            <a href="/blog">Blog</a>
        </div>
    </div>
</nav>

<style>
    .navbar {
        background: rgba(17, 24, 39, 0.95);
        padding: 18px 0;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .nav-container {
        width: 90%;
        max-width: 1100px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .logo {
        color: #ffffff;
        font-size: 1.3rem;
        font-weight: bold;
        letter-spacing: 0.5px;
    }

    .nav-links {
        display: flex;
        gap: 22px;
        flex-wrap: wrap;
    }

    .nav-links a {
        color: #f9fafb;
        text-decoration: none;
        font-size: 1rem;
        font-weight: 500;
        padding: 8px 14px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .nav-links a:hover {
        background: #fbbf24;
        color: #111827;
    }
</style>