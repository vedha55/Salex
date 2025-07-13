// Enhanced features for Salex platform

// Advanced form handling with real-time validation
class FormValidator {
    constructor(form) {
        this.form = form;
        this.errors = {};
        this.init();
    }

    init() {
        this.form.addEventListener('submit', this.handleSubmit.bind(this));
        this.form.addEventListener('input', this.handleInput.bind(this));
    }

    handleSubmit(e) {
        e.preventDefault();
        this.validateForm();
        
        if (Object.keys(this.errors).length === 0) {
            this.submitForm();
        } else {
            this.displayErrors();
        }
    }

    handleInput(e) {
        const field = e.target;
        this.validateField(field);
        this.updateFieldDisplay(field);
    }

    validateField(field) {
        const value = field.value.trim();
        const name = field.name || field.id;
        
        // Clear previous error
        delete this.errors[name];
        
        // Required field validation
        if (field.hasAttribute('required') && !value) {
            this.errors[name] = 'This field is required';
            return;
        }
        
        // Email validation
        if (field.type === 'email' && value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                this.errors[name] = 'Please enter a valid email address';
                return;
            }
        }
        
        // Phone validation
        if (field.type === 'tel' && value) {
            const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
            if (!phoneRegex.test(value.replace(/\s/g, ''))) {
                this.errors[name] = 'Please enter a valid phone number';
                return;
            }
        }
        
        // Password validation
        if (field.type === 'password' && value) {
            if (value.length < 8) {
                this.errors[name] = 'Password must be at least 8 characters long';
                return;
            }
        }
    }

    validateForm() {
        const fields = this.form.querySelectorAll('input, textarea, select');
        fields.forEach(field => this.validateField(field));
    }

    updateFieldDisplay(field) {
        const name = field.name || field.id;
        const errorElement = this.form.querySelector(`[data-error="${name}"]`);
        
        if (this.errors[name]) {
            field.classList.add('error');
            if (errorElement) {
                errorElement.textContent = this.errors[name];
                errorElement.style.display = 'block';
            }
        } else {
            field.classList.remove('error');
            if (errorElement) {
                errorElement.style.display = 'none';
            }
        }
    }

    displayErrors() {
        Object.keys(this.errors).forEach(name => {
            const field = this.form.querySelector(`[name="${name}"], #${name}`);
            if (field) {
                this.updateFieldDisplay(field);
            }
        });
    }

    async submitForm() {
        const formData = new FormData(this.form);
        const submitButton = this.form.querySelector('[type="submit"]');
        const originalText = submitButton.textContent;
        
        // Show loading state
        submitButton.disabled = true;
        submitButton.textContent = 'Submitting...';
        
        try {
            const response = await fetch(this.form.action || '/api/contact', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
                }
            });
            
            const result = await response.json();
            
            if (result.success) {
                this.showSuccess(result.message);
                this.form.reset();
            } else {
                this.showError(result.message || 'Something went wrong');
            }
        } catch (error) {
            this.showError('Network error. Please try again.');
        } finally {
            submitButton.disabled = false;
            submitButton.textContent = originalText;
        }
    }

    showSuccess(message) {
        this.showNotification(message, 'success');
    }

    showError(message) {
        this.showNotification(message, 'error');
    }

    showNotification(message, type) {
        // Use the existing notification system
        if (typeof showNotification === 'function') {
            showNotification(message, type);
        }
    }
}

// Advanced scroll animations
class ScrollAnimations {
    constructor() {
        this.elements = document.querySelectorAll('[data-animate]');
        this.init();
    }

    init() {
        this.observer = new IntersectionObserver(
            this.handleIntersection.bind(this),
            {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            }
        );

        this.elements.forEach(el => this.observer.observe(el));
    }

    handleIntersection(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const animation = element.dataset.animate;
                const delay = element.dataset.delay || 0;
                
                setTimeout(() => {
                    element.classList.add('animate', `animate-${animation}`);
                }, delay);
                
                this.observer.unobserve(element);
            }
        });
    }
}

// Performance monitoring
class PerformanceMonitor {
    constructor() {
        this.metrics = {};
        this.init();
    }

    init() {
        if ('performance' in window) {
            this.measurePageLoad();
            this.measureUserInteractions();
        }
    }

    measurePageLoad() {
        window.addEventListener('load', () => {
            setTimeout(() => {
                const perfData = performance.getEntriesByType('navigation')[0];
                this.metrics.pageLoad = {
                    domContentLoaded: perfData.domContentLoadedEventEnd - perfData.domContentLoadedEventStart,
                    loadComplete: perfData.loadEventEnd - perfData.loadEventStart,
                    totalTime: perfData.loadEventEnd - perfData.fetchStart
                };
                
                this.reportMetrics();
            }, 0);
        });
    }

    measureUserInteractions() {
        let interactionCount = 0;
        
        ['click', 'scroll', 'keydown'].forEach(event => {
            document.addEventListener(event, () => {
                interactionCount++;
            }, { passive: true });
        });
        
        // Report interaction count every 30 seconds
        setInterval(() => {
            this.metrics.interactions = interactionCount;
            interactionCount = 0;
        }, 30000);
    }

    reportMetrics() {
        // In a real application, you would send these metrics to your analytics service
        console.log('Performance Metrics:', this.metrics);
    }
}

// Advanced image lazy loading with progressive enhancement
class LazyImageLoader {
    constructor() {
        this.images = document.querySelectorAll('img[data-src]');
        this.init();
    }

    init() {
        if ('IntersectionObserver' in window) {
            this.observer = new IntersectionObserver(
                this.handleIntersection.bind(this),
                { rootMargin: '50px' }
            );
            
            this.images.forEach(img => this.observer.observe(img));
        } else {
            // Fallback for older browsers
            this.images.forEach(img => this.loadImage(img));
        }
    }

    handleIntersection(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                this.loadImage(entry.target);
                this.observer.unobserve(entry.target);
            }
        });
    }

    loadImage(img) {
        const src = img.dataset.src;
        if (!src) return;
        
        // Create a new image to preload
        const imageLoader = new Image();
        
        imageLoader.onload = () => {
            img.src = src;
            img.classList.remove('lazy');
            img.classList.add('loaded');
        };
        
        imageLoader.onerror = () => {
            img.classList.add('error');
        };
        
        imageLoader.src = src;
    }
}

// Advanced search functionality
class SearchHandler {
    constructor(searchInput, searchResults) {
        this.searchInput = searchInput;
        this.searchResults = searchResults;
        this.debounceTimer = null;
        this.cache = new Map();
        this.init();
    }

    init() {
        if (!this.searchInput) return;
        
        this.searchInput.addEventListener('input', this.handleInput.bind(this));
        this.searchInput.addEventListener('focus', this.handleFocus.bind(this));
        document.addEventListener('click', this.handleClickOutside.bind(this));
    }

    handleInput(e) {
        const query = e.target.value.trim();
        
        clearTimeout(this.debounceTimer);
        this.debounceTimer = setTimeout(() => {
            if (query.length >= 2) {
                this.performSearch(query);
            } else {
                this.hideResults();
            }
        }, 300);
    }

    handleFocus() {
        const query = this.searchInput.value.trim();
        if (query.length >= 2) {
            this.showResults();
        }
    }

    handleClickOutside(e) {
        if (!this.searchInput.contains(e.target) && !this.searchResults?.contains(e.target)) {
            this.hideResults();
        }
    }

    async performSearch(query) {
        // Check cache first
        if (this.cache.has(query)) {
            this.displayResults(this.cache.get(query));
            return;
        }

        try {
            const response = await fetch(`/api/search?q=${encodeURIComponent(query)}`);
            const results = await response.json();
            
            // Cache results
            this.cache.set(query, results);
            this.displayResults(results);
        } catch (error) {
            console.error('Search error:', error);
        }
    }

    displayResults(results) {
        if (!this.searchResults) return;
        
        this.searchResults.innerHTML = '';
        
        if (results.length === 0) {
            this.searchResults.innerHTML = '<div class="no-results">No results found</div>';
        } else {
            results.forEach(result => {
                const resultElement = this.createResultElement(result);
                this.searchResults.appendChild(resultElement);
            });
        }
        
        this.showResults();
    }

    createResultElement(result) {
        const div = document.createElement('div');
        div.className = 'search-result-item';
        div.innerHTML = `
            <h4>${result.title}</h4>
            <p>${result.description}</p>
            <a href="${result.url}">Learn more</a>
        `;
        return div;
    }

    showResults() {
        if (this.searchResults) {
            this.searchResults.style.display = 'block';
        }
    }

    hideResults() {
        if (this.searchResults) {
            this.searchResults.style.display = 'none';
        }
    }
}

// Cookie consent manager
class CookieConsent {
    constructor() {
        this.cookieName = 'salex_cookie_consent';
        this.init();
    }

    init() {
        if (!this.hasConsent()) {
            this.showConsentBanner();
        }
    }

    hasConsent() {
        return localStorage.getItem(this.cookieName) === 'true';
    }

    showConsentBanner() {
        const banner = document.createElement('div');
        banner.className = 'cookie-consent-banner';
        banner.innerHTML = `
            <div class="cookie-consent-content">
                <p>We use cookies to enhance your experience and analyze our traffic. By continuing to use our site, you consent to our use of cookies.</p>
                <div class="cookie-consent-actions">
                    <button class="btn-accept">Accept All</button>
                    <button class="btn-decline">Decline</button>
                    <a href="/privacy-policy">Learn More</a>
                </div>
            </div>
        `;
        
        banner.style.cssText = `
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.9);
            color: white;
            padding: 20px;
            z-index: 10000;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        `;
        
        document.body.appendChild(banner);
        
        // Animate in
        setTimeout(() => {
            banner.style.transform = 'translateY(0)';
        }, 100);
        
        // Add event listeners
        banner.querySelector('.btn-accept').addEventListener('click', () => {
            this.acceptCookies();
            this.hideBanner(banner);
        });
        
        banner.querySelector('.btn-decline').addEventListener('click', () => {
            this.declineCookies();
            this.hideBanner(banner);
        });
    }

    acceptCookies() {
        localStorage.setItem(this.cookieName, 'true');
        // Initialize analytics or other tracking here
    }

    declineCookies() {
        localStorage.setItem(this.cookieName, 'false');
        // Disable analytics or other tracking here
    }

    hideBanner(banner) {
        banner.style.transform = 'translateY(100%)';
        setTimeout(() => {
            banner.remove();
        }, 300);
    }
}

// Initialize all enhanced features
document.addEventListener('DOMContentLoaded', function() {
    // Initialize form validators
    document.querySelectorAll('form').forEach(form => {
        new FormValidator(form);
    });
    
    // Initialize scroll animations
    new ScrollAnimations();
    
    // Initialize performance monitoring
    new PerformanceMonitor();
    
    // Initialize lazy image loading
    new LazyImageLoader();
    
    // Initialize search (if search elements exist)
    const searchInput = document.querySelector('#search-input');
    const searchResults = document.querySelector('#search-results');
    if (searchInput) {
        new SearchHandler(searchInput, searchResults);
    }
    
    // Initialize cookie consent
    new CookieConsent();
    
    console.log('🚀 Enhanced features initialized successfully!');
});

// Export classes for potential external use
window.SalexEnhanced = {
    FormValidator,
    ScrollAnimations,
    PerformanceMonitor,
    LazyImageLoader,
    SearchHandler,
    CookieConsent
};