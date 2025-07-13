<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <title>Salex</title>

</head>

<body>
    <section class="header-container">
        <section id="header">
            <header class="site-header">
                <div class="header-container">
                    <a href="/" class="logo">
                        <img src="{{ asset('images/logo1.png') }}" alt="SALEX Logo">
                    </a>

                    <nav class="main-navigation">
                        <a href="#home" class="nav-link active">Home</a>
                        <a href="#features" class="nav-link">Features</a>
                        <a href="#pricing" class="nav-link">Pricing</a>
                        <a href="#support" class="nav-link">Support</a>
                        <a href="#about" class="nav-link">About</a>
                    </nav>
                    <div class="header-actions">
                        <a href="/login" class="nav-link login-link">Login</a>
                        <a href="/trial" class="button-primary">Start Free Trial</a>
                    </div>
                    <button class="mobile-menu-toggle" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </header>
        </section>
    </section>

   <section class="salex">

    <section id="hero" class="hero-section scroll-animate" data-aos="fade-up">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">All Your Business <span class="text-primary">One Platform.</span> Tools. Zero
                    Chaos.</h1>
                <p class="hero-subtitle">CRM, Sales, Support, Marketing, Finance & More — All unified and simpler.</p>
                <div class="hero-buttons">
                    <a href="#pricing" class="btn-primary">Start Free Trial</a>
                    <a href="#contact" class=" btn-secondary">Request a Demo</a>
                </div>
            </div>
            <div class="hero-image-wrapper">
                <img src="{{ asset('images/hero-img.jpg') }}" alt="Unified business platform dashboard"
                    class="hero-image">
            </div>
        </div>
    </section>
    <section id="how-it-works" class="how-it-works-section" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title">Start Fast. Scale Effortlessly.</h2>
            <p class="section-subtitle">Transform your workflow in minutes with our intuitive platform designed for
                rapid deployment and seamless scaling.</p>
            <div class="steps-container">
                <div class="steps-timeline"></div>
                <div class="step-card">
                    
                    <div class="step-icon-container">
                        <div class="step-number-bg step-1-bg"><span>1</span></div>
                        <div class="step-icon-bg step-1-icon-bg"><img
                                src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/9_30.svg"
                                alt=""></div>
                    </div>
                    <div class="step-content-box step-1-box">
                        <div class="step-content-icon step-1-icon-bg"><img
                                src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/9_38.svg"
                                alt=""></div>
                        <h3 class="step-title">Create Your Workspace</h3>
                        <p class="step-description">Set up your personalized workspace in under 2 minutes. Choose
                            templates or start from scratch.</p>
                    </div>
                </div>
                <div class="step-card">
                    
                    <div class="step-icon-container">
                        <div class="step-number-bg step-2-bg"><span>2</span></div>
                        <div class="step-icon-bg step-2-icon-bg"><img
                                src="	https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/9_52.svg"
                                alt=""></div>
                    </div>
                    <div class="step-content-box step-2-box">
                        <div class="step-content-icon step-2-icon-bg"><img
                                src="	https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/9_60.svg"
                                alt=""></div>
                        <h3 class="step-title">Add Modules & Team</h3>
                        <p class="step-description">Integrate powerful modules and invite team members. Customize
                            permissions and workflows instantly.</p>
                    </div>
                </div>
                <div class="step-card">
                    
                    <div class="step-icon-container">
                        <div class="step-number-bg step-3-bg"><span>3</span></div>
                        <div class="step-icon-bg step-3-icon-bg"><img
                                src="	https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/9_74.svg"
                                alt=""></div>
                    </div>
                    <div class="step-content-box step-3-box">
                        <div class="step-content-icon step-3-icon-bg"><img
                                src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/9_82.svg"
                                alt=""></div>
                        <h3 class="step-title">Automate & Track Everything</h3>
                        <p class="step-description">Set up smart automations and real-time tracking. Let the platform
                            handle repetitive tasks for you.</p>
                    </div>
                </div>
                <div class="step-card">
                    
                    <div class="step-icon-container">
                        <div class="step-number-bg step-4-bg"><span>4</span></div>
                        <div class="step-icon-bg step-4-icon-bg"><img
                                src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/9_97.svg"
                                alt=""></div>
                    </div>
                    <div class="step-content-box step-4-box">
                        <div class="step-content-icon step-4-icon-bg"><img
                                src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/9_105.svg"
                                alt=""></div>
                        <h3 class="step-title">Get Insights Instantly</h3>
                        <p class="step-description">Access powerful analytics and insights. Make data-driven decisions
                            with beautiful, real-time dashboards.</p>
                    </div>
                </div>
            </div>
            <div class="how-it-works-cta">
                <a href="#" class="btn-demo">
                    <img src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/9_117.svg"
                        alt="Play icon">
                    <span>Watch Product Demo</span>
                </a>
                <p class="demo-caption">See how teams like yours are scaling faster • 3 min demo</p>
            </div>
        </div>
    </section>
    <section id="features" class="features-section" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title">Powerful Tools. Unified for Growth.</h2>
            <p class="section-subtitle">Everything your business needs in one platform</p>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon-bg icon-crm"><img
                            src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_170.svg"
                            alt="CRM icon"></div>
                    <h3 class="feature-title">CRM</h3>
                    <p class="feature-description">Manage leads and customers effortlessly</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-bg icon-support"><img
                            src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_179.svg"
                            alt="Support icon"></div>
                    <h3 class="feature-title">Support</h3>
                    <p class="feature-description">Deliver exceptional customer service</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-bg icon-marketing"><img
                            src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_189.svg"
                            alt="Marketing icon"></div>
                    <h3 class="feature-title">Marketing</h3>
                    <p class="feature-description">Create campaigns that convert</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-bg icon-hr"><img
                            src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_199.svg"
                            alt="HR icon"></div>
                    <h3 class="feature-title">HR</h3>
                    <p class="feature-description">Streamline human resources</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-bg icon-finance"><img
                            src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_209.svg"
                            alt="Finance icon"></div>
                    <h3 class="feature-title">Finance</h3>
                    <p class="feature-description">Track finances with precision</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon-bg icon-analytics"><img
                            src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_219.svg"
                            alt="Analytics icon"></div>
                    <h3 class="feature-title">Analytics</h3>
                    <p class="feature-description">Data-driven insights at your fingertips</p>
                </div>
            </div>
        </div>
    </section>
    <section id="why-us" class="why-us-section">
        <div class="container">
            <h2 class="section-title">Why <span class="text-primary">Salex</span> Works Better</h2>
            <div class="why-us-grid">
                <div class="why-us-item">
                    <div class="why-us-text">
                        <h3 class="why-us-title">Unified Dashboard</h3>
                        <p class="why-us-description">See everything in one place. No more switching between multiple
                            tools or losing track of important data.</p>
                        <ul class="why-us-list">
                            <li><img src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_525.svg"
                                    alt="check icon"><span>Real-time data synchronization</span></li>
                            <li><img src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_530.svg"
                                    alt="check icon"><span>Customizable widgets</span></li>
                            <li><img src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_535.svg"
                                    alt="check icon"><span>Mobile-responsive design</span></li>
                        </ul>
                    </div>
                    <div class="why-us-image">
                        <img src="{{ asset('images/img1.png') }}" alt="">
                    </div>
                </div>
                <div class="why-us-item reverse">
                    <div class="why-us-text">
                        <h3 class="why-us-title">AI-Powered Insights</h3>
                        <p class="why-us-description">Let AI help you make better decisions with automated suggestions
                            and predictive analytics.</p>
                        <ul class="why-us-list">
                            <li><img src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_525.svg"
                                    alt="check icon"><span>Predictive sales forecasting</span></li>
                            <li><img src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_525.svg"
                                    alt="check icon"><span>Automated report generation</span></li>
                            <li><img src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_557.svg"
                                    alt="check icon"><span>Smart recommendations</span></li>
                        </ul>
                    </div>
                    <div class="why-us-image">
                        <img src="{{ asset('images/img2.png') }}" alt="AI-Powered Insights illustration">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="business-types" class="business-types-section">
        <div class="container">
            <h2 class="section-title">Tailored for Every Type of Business</h2>
            <p class="section-subtitle">From emerging startups to enterprise giants, our solution adapts to your unique
                business needs and drives measurable results across industries.</p>
            <div class="business-types-grid">
                <div class="business-card">
                    <div class="business-icon-bg icon-startups"><img
                            src="/page/412fea0f-54a8-4679-857a-5481e5b11e1e/images/3_826.svg" alt="Startups icon"></div>
                    <h3 class="business-title">Startups</h3>
                    <ul class="business-features">
                        <li><img src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/3_832.svg"
                                alt="check icon"><span>Rapid MVP Development</span></li>
                        <li><img src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/3_837.svg"
                                alt="check icon"><span>Cost-Effective Scaling</span></li>
                        <li><img src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/3_842.svg"
                                alt="check icon"><span>Agile Workflows</span></li>
                    </ul>
                    <div class="business-metric-box metric-startups">
                        <div class="metric-header">
                            <p>Time to Market</p>
                            <strong class="metric-value value-startups">-60%</strong>
                        </div>
                        <p class="metric-description">Launch faster with streamlined processes and automated workflows
                        </p>
                    </div>
                </div>
                <div class="business-card">
                    <div class="business-icon-bg icon-agencies"><img
                            src="/page/412fea0f-54a8-4679-857a-5481e5b11e1e/images/3_857.svg" alt="Agencies icon"></div>
                    <h3 class="business-title">Agencies</h3>
                    <ul class="business-features">
                        <li><img src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/3_863.svg"
                                alt="check icon"><span>Multi-Client Management</span></li>
                        <li><img src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/3_868.svg"
                                alt="check icon"><span>White-Label Solutions</span></li>
                        <li><img src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/3_873.svg"
                                alt="check icon"><span>Team Collaboration</span></li>
                    </ul>
                    <div class="business-metric-box metric-agencies">
                        <div class="metric-header">
                            <p>Client Capacity</p>
                            <strong class="metric-value value-agencies">+300%</strong>
                        </div>
                        <p class="metric-description">Handle more clients efficiently with automated project management
                        </p>
                    </div>
                </div>
                <div class="business-card">
                    <div class="business-icon-bg icon-ecommerce"><img
                            src="/page/412fea0f-54a8-4679-857a-5481e5b11e1e/images/3_888.svg" alt="eCommerce icon">
                    </div>
                    <h3 class="business-title">eCommerce</h3>
                    <ul class="business-features">
                        <li><img src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/3_894.svg"
                                alt="check icon"><span>Inventory Automation</span></li>
                        <li><img src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/3_899.svg"
                                alt="check icon"><span>Customer Analytics</span></li>
                        <li><img src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/3_904.svg"
                                alt="check icon"><span>Sales Optimization</span></li>
                    </ul>
                    <div class="business-metric-box metric-ecommerce">
                        <div class="metric-header">
                            <p>Revenue Growth</p>
                            <strong class="metric-value value-ecommerce">+150%</strong>
                        </div>
                        <p class="metric-description">Boost sales with intelligent recommendations and automated
                            marketing</p>
                    </div>
                </div>
                <div class="business-card">
                    <div class="business-icon-bg icon-enterprises"><img
                            src="/page/412fea0f-54a8-4679-857a-5481e5b11e1e/images/3_919.svg" alt="Enterprises icon">
                    </div>
                    <h3 class="business-title">Enterprises</h3>
                    <ul class="business-features">
                        <li><img src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/3_925.svg"
                                alt="check icon"><span>Enterprise Security</span></li>
                        <li><img src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/3_930.svg"
                                alt="check icon"><span>Advanced Analytics</span></li>
                        <li><img src="https://instant.pxcode.io/api/pages/412fea0f-54a8-4679-857a-5481e5b11e1e/images/3_935.svg"
                                alt="check icon"><span>Custom Integrations</span></li>
                    </ul>
                    <div class="business-metric-box metric-enterprises">
                        <div class="metric-header">
                            <p>Efficiency Gain</p>
                            <strong class="metric-value value-enterprises">+85%</strong>
                        </div>
                        <p class="metric-description">Streamline operations with enterprise-grade automation and
                            insights</p>
                    </div>
                </div>
            </div>
            <div class="business-types-cta">
                <p>Ready to see how our solution fits your business?</p>
                <a href="#contact" class="btn-demo-2">
                    <span>Get Your Custom Demo</span>
                    <img src="/page/412fea0f-54a8-4679-857a-5481e5b11e1e/images/3_951.svg" alt="arrow icon">
                </a>
            </div>
        </div>
    </section>
    <section id="testimonials" class="testimonials-section">
        <div class="container">
            <h2 class="section-title">Our Testimonials</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-author">
                        <img src="{{ asset('images/test2.png') }}" alt="Sarah Chen" class="author-avatar">
                        <div class="author-info">
                            <h4 class="author-name">Sarah Chen</h4>
                            <p class="author-title">CEO, TechStart</p>
                        </div>
                    </div>
                    <blockquote class="testimonial-quote">"Switched from Salesforce and saved 60% on costs while getting
                        better functionality. The unified approach is a game-changer."</blockquote>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-author">
                        <img src="{{ asset('images/test1.png') }}" alt="Mike Johnson" class="author-avatar">
                        <div class="author-info">
                            <h4 class="author-name">Mike Johnson</h4>
                            <p class="author-title">Sales Director, GrowthCorp</p>
                        </div>
                    </div>
                    <blockquote class="testimonial-quote">"Finally, a platform that doesn't require a PhD to use. Our
                        team was productive from day one."</blockquote>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-author">
                        <img src="{{ asset('images/test3.png') }}" alt="Lisa Rodriguez" class="author-avatar">
                        <div class="author-info">
                            <h4 class="author-name">Lisa Rodriguez</h4>
                            <p class="author-title">Operations Manager, ScaleUp</p>
                        </div>
                    </div>
                    <blockquote class="testimonial-quote">"The integration between modules is seamless. No more data
                        silos or manual exports between systems."</blockquote>
                </div>
            </div>
        </div>
    </section>
    <section id="pricing" class="pricing-section">
        <div class="container">
            <h2 class="section-title">Simple, Transparent Pricing</h2>
            <div class="pricing-grid">
                <div class="pricing-card">
                    <h3 class="pricing-tier">Free</h3>
                    <p class="pricing-price">₹0<span class="price-period">/mo</span></p>
                    <ul class="pricing-features">
                        <li><img src="/page/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_449.svg"
                                alt="check icon"><span>Limited Modules</span></li>
                        <li><img src="/page/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_454.svg"
                                alt="check icon"><span>5 Users</span></li>
                        <li><img src="/page/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_459.svg"
                                alt="check icon"><span>Basic Support</span></li>
                    </ul>
                    <a href="#" class="btn-pricing btn-dark">Choose Plan</a>
                </div>
                <div class="pricing-card popular">
                    <div class="popular-tag">Popular</div>
                    <h3 class="pricing-tier">Growth</h3>
                    <p class="pricing-price">₹499<span class="price-period">/mo</span></p>
                    <ul class="pricing-features">
                        <li><img src="/page/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_475.svg"
                                alt="check icon"><span>All Modules</span></li>
                        <li><img src="/page/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_480.svg"
                                alt="check icon"><span>Unlimited Users</span></li>
                        <li><img src="/page/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_485.svg"
                                alt="check icon"><span>Priority Support</span></li>
                    </ul>
                    <a href="#" class="btn-pricing btn-white">Choose Plan</a>
                </div>
                <div class="pricing-card">
                    <h3 class="pricing-tier">Enterprise</h3>
                    <p class="pricing-price">Custom</p>
                    <ul class="pricing-features">
                        <li><img src="/page/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_498.svg"
                                alt="check icon"><span>Custom Features</span></li>
                        <li><img src="/page/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_503.svg"
                                alt="check icon"><span>Dedicated Support</span></li>
                        <li><img src="/page/412fea0f-54a8-4679-857a-5481e5b11e1e/images/1_508.svg"
                                alt="check icon"><span>White-Glove Service</span></li>
                    </ul>
                    <a href="#" class="btn-pricing btn-dark">Contact Sales</a>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="footer-section">
        <div class="container">
            <div class="cta-box">
                <div class="cta-content">
                    <h2 class="cta-title">Subscribe to our newsletter</h2>
                    <form class="cta-form">
                        <input type="text" placeholder="First name">
                        <input type="email" placeholder="Email address">
                        <button type="submit" class="btn-subscribe">Subscribe Now</button>
                    </form>
                </div>
            </div>
            <div class="footer-main">
                <div class="footer-about">
                    <img src="{{ asset('images/logo1.png') }}" alt="SALEX Logo" class="footer-logo">
                    <p>Clarity gives you the blocks and components you need to create a truly professional website.</p>
                    
                    <div class="social-links">
                        <a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter fa-2xl"></i></a>
                        <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook fa-2xl"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram fa-2xl"></i></a>
                        <a href="#" aria-label="Github"><i class="fa-brands fa-github fa-2xl"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Works</a></li>
                        <li><a href="#">Career</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Help</h4>
                    <ul>
                        <li><a href="#">Customer Support</a></li>
                        <li><a href="#">Delivery Details</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Free eBooks</a></li>
                        <li><a href="#">Development Tutorial</a></li>
                        <li><a href="#">How to - Blog</a></li>
                        <li><a href="#">Youtube Playlist</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© Copyright 2022, All Rights Reserved by Salex.live</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggleButton = document.querySelector(".mobile-menu-toggle");
            const navMenu = document.querySelector(".main-navigation");

            toggleButton.addEventListener("click", function () {
                toggleButton.classList.toggle("active");
                navMenu.classList.toggle("active");
            });
        });



    </script>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>AOS.init();</script>


   </section>


</body>

</html>