<?php
$title = 'GazExpress - Livraison de Gaz de Cuisine';
$includeMap = false;

ob_start();
?>

<header class="header">
    <nav class="navbar">
        <div class="nav-brand">
            <i class="fas fa-fire"></i>
            <span>GazExpress</span>
        </div>
        <div class="nav-links">
            <a href="#home">Accueil</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
            <a href="/login" class="btn-login">Connexion</a>
            <a href="/register" class="btn-register">Inscription</a>
        </div>
    </nav>
</header>

<section id="home" class="hero">
    <div class="hero-content">
        <h1>Livraison de Gaz de Cuisine à Domicile</h1>
        <p>Commandez votre gaz de cuisine en ligne et faites-vous livrer rapidement par les stations les plus proches.</p>
        <div class="hero-buttons">
            <a href="/register?type=customer" class="btn btn-primary">
                <i class="fas fa-user"></i> Client
            </a>
            <a href="/register?type=station" class="btn btn-secondary">
                <i class="fas fa-gas-pump"></i> Station de Service
            </a>
        </div>
    </div>
    <div class="hero-image">
        <i class="fas fa-truck"></i>
    </div>
</section>

<section id="services" class="services">
    <div class="container">
        <h2>Nos Services</h2>
        <div class="services-grid">
            <div class="service-card">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Géolocalisation</h3>
                <p>Trouvez automatiquement les stations les plus proches de votre position</p>
            </div>
            <div class="service-card">
                <i class="fas fa-clock"></i>
                <h3>Livraison Rapide</h3>
                <p>Livraison en moins de 30 minutes selon votre localisation</p>
            </div>
            <div class="service-card">
                <i class="fas fa-mobile-alt"></i>
                <h3>Paiement Mobile</h3>
                <p>Payez facilement avec Orange Money ou MTN Money</p>
            </div>
            <div class="service-card">
                <i class="fas fa-shield-alt"></i>
                <h3>Sécurisé</h3>
                <p>Toutes les stations sont vérifiées et approuvées par notre équipe</p>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-brand">
                <i class="fas fa-fire"></i>
                <span>GazExpress</span>
            </div>
            <div class="footer-links">
                <a href="#about">À propos</a>
                <a href="#privacy">Confidentialité</a>
                <a href="#terms">Conditions</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 GazExpress. Tous droits réservés.</p>
        </div>
    </div>
</footer>

<?php
$content = ob_get_clean();
include '../app/Views/layouts/app.php';
?>