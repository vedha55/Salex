<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Salex - All Your Business Tools in One Platform. CRM, Sales, Support, Marketing, Finance & More unified and simpler.">
    <meta name="keywords" content="CRM, Sales, Business Management, Marketing, Finance, Support">
    <meta name="author" content="Salex">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Salex - Unified Business Platform">
    <meta property="og:description" content="All Your Business Tools in One Platform. Zero Chaos.">
    <meta property="og:image" content="{{ asset('images/hero-img.jpg') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Salex - Unified Business Platform">
    <meta name="twitter:description" content="All Your Business Tools in One Platform. Zero Chaos.">
    <meta name="twitter:image" content="{{ asset('images/hero-img.jpg') }}">
    
    <title>Salex - Unified Business Platform | CRM, Sales, Marketing & More</title>
    
    <!-- Preload critical resources -->
    <link rel="preload" href="{{ asset('css/style.css') }}" as="style">
    <link rel="preload" href="{{ asset('js/script.js') }}" as="script">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" as="style">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Schema.org structured data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "SoftwareApplication",
        "name": "Salex",
        "description": "Unified business platform with CRM, Sales, Support, Marketing, Finance and more",
        "url": "{{ url('/') }}",
        "applicationCategory": "BusinessApplication",
        "operatingSystem": "Web",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "INR"
        }
    }
    </script>
</head>

<body>
    <!-- Loading Screen -->
    <div class="loading-overlay">
        <div class="loading-spinner"></div>
    </div>

    <!-- Enhanced Header -->
    <section id="header">
        <header class="site-header">
            <div class="header-container">
                <a href="/" class="logo" aria-label="Salex Home">
                    <img src="{{ asset('images/logo1.png') }}" alt="SALEX Logo" width="50" height="50">
                </a>

                <nav class="main-navigation" role="navigation" aria-label="Main Navigation">
                    <a href="#home" class="nav-link active">Home</a>
                    <a href="#features" class="nav-link">Features</a>
                    <a href="#pricing" class="nav-link">Pricing</a>
                    <a href="#testimonials" class="nav-link">Reviews</a>
                    <a href="#footer" class="nav-link">Contact</a>
                </nav>

                <div class="header-actions">
                    <a href="/login" class="nav-link login-link">Login</a>
                    <a href="/trial" class="button-primary">Start Free Trial</a>
                </div>

                <button class="mobile-menu-toggle" aria-label="Toggle navigation menu" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </header>
    </section>

    <main>
        <!-- Enhanced Hero Section -->
        <section id="home" class="hero-section scroll-animate" data-aos="fade-up">
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title">
                        All Your Business <span class="text-primary">One Platform.</span> Tools. Zero Chaos.
                    </h1>
                    <p class="hero-subtitle">
                        CRM, Sales, Support, Marketing, Finance & More — All unified and simpler. 
                        Transform your workflow in minutes with our intuitive platform designed for rapid deployment and seamless scaling.
                    </p>
                    <div class="hero-buttons">
                        <a href="#pricing" class="btn-primary" aria-label="Start free trial">
                            <i class="fas fa-rocket" style="margin-right: 8px;"></i>
                            Start Free Trial
                        </a>
                        <a href="#footer" class="btn-secondary" aria-label="Request a demo">
                            <i class="fas fa-play" style="margin-right: 8px;"></i>
                            Request a Demo
                        </a>
                    </div>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number" data-target="10000">0</span>
                            <span class="stat-label">Active Users</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-target="500">0</span>
                            <span class="stat-label">Companies</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-target="99">0</span>
                            <span class="stat-label">% Uptime</span>
                        </div>
                    </div>
                </div>
                <div class="hero-image-wrapper">
                    <img src="{{ asset('images/hero-img.jpg') }}" 
                         alt="Unified business platform dashboard showing CRM, sales, and analytics" 
                         class="hero-image"
                         loading="eager"
                         width="600" 
                         height="400">
                </div>
            </div>
        </section>

        <!-- Enhanced How It Works Section -->
        <section id="how-it-works" class="how-it-works-section scroll-animate" data-aos="fade-up">
            <div class="container">
                <h2 class="section-title">Start Fast. Scale Effortlessly.</h2>
                <p class="section-subtitle">
                    Transform your workflow in minutes with our intuitive platform designed for rapid deployment and seamless scaling.
                </p>
                <div class="steps-container">
                    <div class="steps-timeline"></div>
                    
                    <div class="step-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="step-icon-container">
                            <div class="step-number-bg step-1-bg"><span>1</span></div>
                            <div class="step-icon-bg step-1-icon-bg">
                                <i class="fas fa-rocket" style="color: #2563eb;"></i>
                            </div>
                        </div>
                        <div class="step-content-box step-1-box">
                            <div class="step-content-icon step-1-icon-bg">
                                <i class="fas fa-cog" style="color: #2563eb;"></i>
                            </div>
                            <h3 class="step-title">Create Your Workspace</h3>
                            <p class="step-description">
                                Set up your personalized workspace in under 2 minutes. Choose templates or start from scratch with our intuitive setup wizard.
                            </p>
                        </div>
                    </div>

                    <div class="step-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="step-icon-container">
                            <div class="step-number-bg step-2-bg"><span>2</span></div>
                            <div class="step-icon-bg step-2-icon-bg">
                                <i class="fas fa-users" style="color: #9333ea;"></i>
                            </div>
                        </div>
                        <div class="step-content-box step-2-box">
                            <div class="step-content-icon step-2-icon-bg">
                                <i class="fas fa-puzzle-piece" style="color: #9333ea;"></i>
                            </div>
                            <h3 class="step-title">Add Modules & Team</h3>
                            <p class="step-description">
                                Integrate powerful modules and invite team members. Customize permissions and workflows instantly with drag-and-drop simplicity.
                            </p>
                        </div>
                    </div>

                    <div class="step-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="step-icon-container">
                            <div class="step-number-bg step-3-bg"><span>3</span></div>
                            <div class="step-icon-bg step-3-icon-bg">
                                <i class="fas fa-magic" style="color: #16a34a;"></i>
                            </div>
                        </div>
                        <div class="step-content-box step-3-box">
                            <div class="step-content-icon step-3-icon-bg">
                                <i class="fas fa-robot" style="color: #16a34a;"></i>
                            </div>
                            <h3 class="step-title">Automate & Track Everything</h3>
                            <p class="step-description">
                                Set up smart automations and real-time tracking. Let AI handle repetitive tasks while you focus on growth.
                            </p>
                        </div>
                    </div>

                    <div class="step-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="step-icon-container">
                            <div class="step-number-bg step-4-bg"><span>4</span></div>
                            <div class="step-icon-bg step-4-icon-bg">
                                <i class="fas fa-chart-line" style="color: #ea580c;"></i>
                            </div>
                        </div>
                        <div class="step-content-box step-4-box">
                            <div class="step-content-icon step-4-icon-bg">
                                <i class="fas fa-lightbulb" style="color: #ea580c;"></i>
                            </div>
                            <h3 class="step-title">Get Insights Instantly</h3>
                            <p class="step-description">
                                Access powerful analytics and insights. Make data-driven decisions with beautiful, real-time dashboards and AI recommendations.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="how-it-works-cta">
                    <a href="#" class="btn-demo" aria-label="Watch product demo">
                        <i class="fas fa-play" style="margin-right: 8px;"></i>
                        <span>Watch Product Demo</span>
                    </a>
                    <p class="demo-caption">See how teams like yours are scaling faster • 3 min demo</p>
                </div>
            </div>
        </section>

        <!-- Enhanced Features Section -->
        <section id="features" class="features-section scroll-animate" data-aos="fade-up">
            <div class="container">
                <h2 class="section-title">Powerful Tools. Unified for Growth.</h2>
                <p class="section-subtitle">
                    Everything your business needs in one platform. No more switching between multiple tools or losing track of important data.
                </p>
                <div class="features-grid">
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-icon-bg icon-crm">
                            <i class="fas fa-users" style="color: white; font-size: 24px;"></i>
                        </div>
                        <h3 class="feature-title">Advanced CRM</h3>
                        <p class="feature-description">
                            Manage leads, customers, and relationships effortlessly with AI-powered insights and automated workflows.
                        </p>
                    </div>
                    
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-icon-bg icon-support">
                            <i class="fas fa-headset" style="color: white; font-size: 24px;"></i>
                        </div>
                        <h3 class="feature-title">24/7 Support</h3>
                        <p class="feature-description">
                            Deliver exceptional customer service with integrated ticketing, live chat, and knowledge base management.
                        </p>
                    </div>
                    
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-icon-bg icon-marketing">
                            <i class="fas fa-bullhorn" style="color: white; font-size: 24px;"></i>
                        </div>
                        <h3 class="feature-title">Smart Marketing</h3>
                        <p class="feature-description">
                            Create campaigns that convert with automated email sequences, social media management, and analytics.
                        </p>
                    </div>
                    
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="feature-icon-bg icon-hr">
                            <i class="fas fa-user-tie" style="color: white; font-size: 24px;"></i>
                        </div>
                        <h3 class="feature-title">HR Management</h3>
                        <p class="feature-description">
                            Streamline human resources with employee management, payroll integration, and performance tracking.
                        </p>
                    </div>
                    
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="500">
                        <div class="feature-icon-bg icon-finance">
                            <i class="fas fa-chart-pie" style="color: white; font-size: 24px;"></i>
                        </div>
                        <h3 class="feature-title">Financial Control</h3>
                        <p class="feature-description">
                            Track finances with precision using automated invoicing, expense management, and financial reporting.
                        </p>
                    </div>
                    
                    <div class="feature-card" data-aos="fade-up" data-aos-delay="600">
                        <div class="feature-icon-bg icon-analytics">
                            <i class="fas fa-chart-line" style="color: white; font-size: 24px;"></i>
                        </div>
                        <h3 class="feature-title">AI Analytics</h3>
                        <p class="feature-description">
                            Data-driven insights at your fingertips with predictive analytics, custom dashboards, and automated reports.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Enhanced Why Us Section -->
        <section id="why-us" class="why-us-section scroll-animate">
            <div class="container">
                <h2 class="section-title">Why <span class="text-primary">Salex</span> Works Better</h2>
                <div class="why-us-grid">
                    <div class="why-us-item" data-aos="fade-right">
                        <div class="why-us-text">
                            <h3 class="why-us-title">Unified Dashboard</h3>
                            <p class="why-us-description">
                                See everything in one place. No more switching between multiple tools or losing track of important data. 
                                Our unified dashboard gives you a 360-degree view of your business.
                            </p>
                            <ul class="why-us-list">
                                <li>
                                    <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                    <span>Real-time data synchronization across all modules</span>
                                </li>
                                <li>
                                    <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                    <span>Customizable widgets and layouts</span>
                                </li>
                                <li>
                                    <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                    <span>Mobile-responsive design for on-the-go access</span>
                                </li>
                            </ul>
                        </div>
                        <div class="why-us-image">
                            <img src="{{ asset('images/img1.png') }}" 
                                 alt="Unified dashboard showing real-time business metrics" 
                                 loading="lazy"
                                 width="584" 
                                 height="400">
                        </div>
                    </div>
                    
                    <div class="why-us-item reverse" data-aos="fade-left">
                        <div class="why-us-text">
                            <h3 class="why-us-title">AI-Powered Insights</h3>
                            <p class="why-us-description">
                                Let AI help you make better decisions with automated suggestions, predictive analytics, 
                                and intelligent recommendations that grow your business faster.
                            </p>
                            <ul class="why-us-list">
                                <li>
                                    <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                    <span>Predictive sales forecasting with 95% accuracy</span>
                                </li>
                                <li>
                                    <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                    <span>Automated report generation and insights</span>
                                </li>
                                <li>
                                    <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                    <span>Smart recommendations for optimization</span>
                                </li>
                            </ul>
                        </div>
                        <div class="why-us-image">
                            <img src="{{ asset('images/img2.png') }}" 
                                 alt="AI-powered analytics dashboard with predictive insights" 
                                 loading="lazy"
                                 width="584" 
                                 height="400">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Enhanced Business Types Section -->
        <section id="business-types" class="business-types-section scroll-animate">
            <div class="container">
                <h2 class="section-title">Tailored for Every Type of Business</h2>
                <p class="section-subtitle">
                    From emerging startups to enterprise giants, our solution adapts to your unique business needs 
                    and drives measurable results across industries.
                </p>
                <div class="business-types-grid">
                    <div class="business-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="business-icon-bg icon-startups">
                            <i class="fas fa-rocket" style="color: white; font-size: 24px;"></i>
                        </div>
                        <h3 class="business-title">Startups</h3>
                        <ul class="business-features">
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>Rapid MVP Development</span>
                            </li>
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>Cost-Effective Scaling</span>
                            </li>
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>Agile Workflows</span>
                            </li>
                        </ul>
                        <div class="business-metric-box metric-startups">
                            <div class="metric-header">
                                <p>Time to Market</p>
                                <strong class="metric-value value-startups">-60%</strong>
                            </div>
                            <p class="metric-description">Launch faster with streamlined processes and automated workflows</p>
                        </div>
                    </div>

                    <div class="business-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="business-icon-bg icon-agencies">
                            <i class="fas fa-building" style="color: white; font-size: 24px;"></i>
                        </div>
                        <h3 class="business-title">Agencies</h3>
                        <ul class="business-features">
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>Multi-Client Management</span>
                            </li>
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>White-Label Solutions</span>
                            </li>
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>Team Collaboration</span>
                            </li>
                        </ul>
                        <div class="business-metric-box metric-agencies">
                            <div class="metric-header">
                                <p>Client Capacity</p>
                                <strong class="metric-value value-agencies">+300%</strong>
                            </div>
                            <p class="metric-description">Handle more clients efficiently with automated project management</p>
                        </div>
                    </div>

                    <div class="business-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="business-icon-bg icon-ecommerce">
                            <i class="fas fa-shopping-cart" style="color: white; font-size: 24px;"></i>
                        </div>
                        <h3 class="business-title">eCommerce</h3>
                        <ul class="business-features">
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>Inventory Automation</span>
                            </li>
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>Customer Analytics</span>
                            </li>
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>Sales Optimization</span>
                            </li>
                        </ul>
                        <div class="business-metric-box metric-ecommerce">
                            <div class="metric-header">
                                <p>Revenue Growth</p>
                                <strong class="metric-value value-ecommerce">+150%</strong>
                            </div>
                            <p class="metric-description">Boost sales with intelligent recommendations and automated marketing</p>
                        </div>
                    </div>

                    <div class="business-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="business-icon-bg icon-enterprises">
                            <i class="fas fa-industry" style="color: white; font-size: 24px;"></i>
                        </div>
                        <h3 class="business-title">Enterprises</h3>
                        <ul class="business-features">
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>Enterprise Security</span>
                            </li>
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>Advanced Analytics</span>
                            </li>
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>Custom Integrations</span>
                            </li>
                        </ul>
                        <div class="business-metric-box metric-enterprises">
                            <div class="metric-header">
                                <p>Efficiency Gain</p>
                                <strong class="metric-value value-enterprises">+85%</strong>
                            </div>
                            <p class="metric-description">Streamline operations with enterprise-grade automation and insights</p>
                        </div>
                    </div>
                </div>
                
                <div class="business-types-cta">
                    <p>Ready to see how our solution fits your business?</p>
                    <a href="#footer" class="btn-demo-2" aria-label="Get custom demo">
                        <span>Get Your Custom Demo</span>
                        <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Enhanced Testimonials Section -->
        <section id="testimonials" class="testimonials-section scroll-animate">
            <div class="container">
                <h2 class="section-title">What Our Customers Say</h2>
                <p class="section-subtitle">
                    Join thousands of satisfied customers who have transformed their business with Salex.
                </p>
                <div class="testimonials-grid">
                    <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="testimonial-author">
                            <img src="{{ asset('images/test2.png') }}" 
                                 alt="Sarah Chen, CEO of TechStart" 
                                 class="author-avatar"
                                 loading="lazy"
                                 width="48" 
                                 height="48">
                            <div class="author-info">
                                <h4 class="author-name">Sarah Chen</h4>
                                <p class="author-title">CEO, TechStart</p>
                                <div class="rating">
                                    <i class="fas fa-star" style="color: #fbbf24;"></i>
                                    <i class="fas fa-star" style="color: #fbbf24;"></i>
                                    <i class="fas fa-star" style="color: #fbbf24;"></i>
                                    <i class="fas fa-star" style="color: #fbbf24;"></i>
                                    <i class="fas fa-star" style="color: #fbbf24;"></i>
                                </div>
                            </div>
                        </div>
                        <blockquote class="testimonial-quote">
                            "Switched from Salesforce and saved 60% on costs while getting better functionality. 
                            The unified approach is a game-changer for our growing startup."
                        </blockquote>
                    </div>
                    
                    <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="testimonial-author">
                            <img src="{{ asset('images/test1.png') }}" 
                                 alt="Mike Johnson, Sales Director at GrowthCorp" 
                                 class="author-avatar"
                                 loading="lazy"
                                 width="48" 
                                 height="48">
                            <div class="author-info">
                                <h4 class="author-name">Mike Johnson</h4>
                                <p class="author-title">Sales Director, GrowthCorp</p>
                                <div class="rating">
                                    <i class="fas fa-star" style="color: #fbbf24;"></i>
                                    <i class="fas fa-star" style="color: #fbbf24;"></i>
                                    <i class="fas fa-star" style="color: #fbbf24;"></i>
                                    <i class="fas fa-star" style="color: #fbbf24;"></i>
                                    <i class="fas fa-star" style="color: #fbbf24;"></i>
                                </div>
                            </div>
                        </div>
                        <blockquote class="testimonial-quote">
                            "Finally, a platform that doesn't require a PhD to use. Our team was productive from day one, 
                            and the AI insights have boosted our sales by 40%."
                        </blockquote>
                    </div>
                    
                    <div class="testimonial-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="testimonial-author">
                            <img src="{{ asset('images/test3.png') }}" 
                                 alt="Lisa Rodriguez, Operations Manager at ScaleUp" 
                                 class="author-avatar"
                                 loading="lazy"
                                 width="48" 
                                 height="48">
                            <div class="author-info">
                                <h4 class="author-name">Lisa Rodriguez</h4>
                                <p class="author-title">Operations Manager, ScaleUp</p>
                                <div class="rating">
                                    <i class="fas fa-star" style="color: #fbbf24;"></i>
                                    <i class="fas fa-star" style="color: #fbbf24;"></i>
                                    <i class="fas fa-star" style="color: #fbbf24;"></i>
                                    <i class="fas fa-star" style="color: #fbbf24;"></i>
                                    <i class="fas fa-star" style="color: #fbbf24;"></i>
                                </div>
                            </div>
                        </div>
                        <blockquote class="testimonial-quote">
                            "The integration between modules is seamless. No more data silos or manual exports between systems. 
                            It's like having a digital operations manager."
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>

        <!-- Enhanced Pricing Section -->
        <section id="pricing" class="pricing-section scroll-animate">
            <div class="container">
                <h2 class="section-title">Simple, Transparent Pricing</h2>
                <p class="section-subtitle">
                    Choose the plan that fits your business. No hidden fees, no surprises. Cancel anytime.
                </p>
                <div class="pricing-grid">
                    <div class="pricing-card" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="pricing-tier">Starter</h3>
                        <p class="pricing-price">₹0<span class="price-period">/mo</span></p>
                        <ul class="pricing-features">
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>Basic CRM & Sales Tools</span>
                            </li>
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>Up to 5 Users</span>
                            </li>
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>Email Support</span>
                            </li>
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>1GB Storage</span>
                            </li>
                        </ul>
                        <a href="#" class="btn-pricing btn-dark" aria-label="Choose starter plan">Get Started Free</a>
                    </div>
                    
                    <div class="pricing-card popular" data-aos="fade-up" data-aos-delay="200">
                        <div class="popular-tag">Most Popular</div>
                        <h3 class="pricing-tier">Professional</h3>
                        <p class="pricing-price">₹499<span class="price-period">/mo</span></p>
                        <ul class="pricing-features">
                            <li>
                                <i class="fas fa-check" style="color: white; margin-right: 8px;"></i>
                                <span>All Modules Included</span>
                            </li>
                            <li>
                                <i class="fas fa-check" style="color: white; margin-right: 8px;"></i>
                                <span>Unlimited Users</span>
                            </li>
                            <li>
                                <i class="fas fa-check" style="color: white; margin-right: 8px;"></i>
                                <span>Priority Support</span>
                            </li>
                            <li>
                                <i class="fas fa-check" style="color: white; margin-right: 8px;"></i>
                                <span>100GB Storage</span>
                            </li>
                            <li>
                                <i class="fas fa-check" style="color: white; margin-right: 8px;"></i>
                                <span>AI Analytics</span>
                            </li>
                        </ul>
                        <a href="#" class="btn-pricing btn-white" aria-label="Choose professional plan">Start 14-Day Trial</a>
                    </div>
                    
                    <div class="pricing-card" data-aos="fade-up" data-aos-delay="300">
                        <h3 class="pricing-tier">Enterprise</h3>
                        <p class="pricing-price">Custom</p>
                        <ul class="pricing-features">
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>Custom Features</span>
                            </li>
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>Dedicated Account Manager</span>
                            </li>
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>24/7 Phone Support</span>
                            </li>
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>Unlimited Storage</span>
                            </li>
                            <li>
                                <i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i>
                                <span>Custom Integrations</span>
                            </li>
                        </ul>
                        <a href="#footer" class="btn-pricing btn-dark" aria-label="Contact sales for enterprise plan">Contact Sales</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Enhanced Footer -->
    <footer id="footer" class="footer-section">
        <div class="container">
            <div class="cta-box">
                <div class="cta-content">
                    <h2 class="cta-title">Ready to Transform Your Business?</h2>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 30px;">
                        Join thousands of companies already using Salex to streamline their operations.
                    </p>
                    <form class="cta-form" aria-label="Newsletter subscription">
                        <input type="text" 
                               placeholder="First name" 
                               required 
                               aria-label="First name">
                        <input type="email" 
                               placeholder="Email address" 
                               required 
                               aria-label="Email address">
                        <button type="submit" class="btn-subscribe">Get Started Free</button>
                    </form>
                </div>
            </div>
            
            <div class="footer-main">
                <div class="footer-about">
                    <img src="{{ asset('images/logo1.png') }}" 
                         alt="SALEX Logo" 
                         class="footer-logo"
                         width="120" 
                         height="40">
                    <p>
                        Salex gives you the tools and insights you need to create a truly unified business platform. 
                        Streamline operations, boost productivity, and scale with confidence.
                    </p>
                    <div class="social-links">
                        <a href="#" aria-label="Follow us on Twitter">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                        <a href="#" aria-label="Follow us on Facebook">
                            <i class="fab fa-facebook fa-lg"></i>
                        </a>
                        <a href="#" aria-label="Follow us on Instagram">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                        <a href="#" aria-label="Follow us on LinkedIn">
                            <i class="fab fa-linkedin fa-lg"></i>
                        </a>
                        <a href="#" aria-label="Follow us on GitHub">
                            <i class="fab fa-github fa-lg"></i>
                        </a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h4>Product</h4>
                    <ul>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#">Integrations</a></li>
                        <li><a href="#">API</a></li>
                        <li><a href="#">Security</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Webinars</a></li>
                        <li><a href="#">Community</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 Salex. All rights reserved. | 
                   <a href="#" style="color: #9ca3af;">Privacy Policy</a> | 
                   <a href="#" style="color: #9ca3af;">Terms of Service</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js" defer></script>
    <script>
        // Initialize AOS when script loads
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    easing: 'ease-in-out',
                    once: true,
                    offset: 100
                });
            }
        });
    </script>
</body>

</html>