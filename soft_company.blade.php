@extends('master_layout')

@section('title')
    <title>{{ $seo_setting->seo_title }}</title>
    <meta name="title" content="{{ $seo_setting->seo_title }}">
    <meta name="description" content="{!! strip_tags(clean($seo_setting->seo_description)) !!}">
@endsection

@section('new-layout')
    @php
        $currentLang = session()->get('front_lang');
        $heroContent = getContent('soft_company_hero_section.content', true);
        $aboutContent = getContent('soft_company_about_section.content', true);
        $serviceContent = getContent('soft_company_service_section.content', true);
        $portfolioContent = getContent('soft_company_portfolio_section.content', true);
        $teamContent = getContent('soft_company_team_section.content', true);
        $testimonialContent = getContent('soft_company_testimonial_section.content', true);
        $ctaContent = getContent('soft_company_cta_section.content', true);
    @endphp

    <!-- Hero Section -->
    <section class="modern-hero-section" id="hero">
        <div class="hero-background">
            <div class="floating-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
                <div class="shape shape-4"></div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <div class="hero-content" data-aos="fade-up" data-aos-duration="800">
                        <div class="hero-badge">
                            <span class="badge-icon">
                                <i class="ri-code-s-slash-line"></i>
                            </span>
                            <span class="badge-text">{{ __('translate.Software Solutions') }}</span>
                        </div>
                        <h1 class="hero-title">
                            {{ getTranslatedValue($heroContent, 'heading', $currentLang) }}
                            <span class="gradient-text">{{ __('translate.Innovation') }}</span>
                        </h1>
                        <p class="hero-description">
                            {{ getTranslatedValue($heroContent, 'description', $currentLang) }}
                        </p>
                        <div class="hero-buttons">
                            <a href="{{ route('contact-us') }}" class="btn-primary modern-btn">
                                <span class="btn-text">{{ __('translate.Get Started') }}</span>
                                <span class="btn-icon">
                                    <i class="ri-arrow-right-line"></i>
                                </span>
                            </a>
                            <a href="{{ route('portfolio') }}" class="btn-secondary modern-btn">
                                <span class="btn-text">{{ __('translate.View Portfolio') }}</span>
                                <span class="btn-icon">
                                    <i class="ri-play-circle-line"></i>
                                </span>
                            </a>
                        </div>
                        <div class="hero-stats">
                            <div class="stat-item">
                                <div class="stat-number">500+</div>
                                <div class="stat-label">{{ __('translate.Projects') }}</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">50+</div>
                                <div class="stat-label">{{ __('translate.Clients') }}</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">5+</div>
                                <div class="stat-label">{{ __('translate.Years') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-visual" data-aos="fade-left" data-aos-duration="1000">
                        <div class="code-window">
                            <div class="window-header">
                                <div class="window-controls">
                                    <span class="control close"></span>
                                    <span class="control minimize"></span>
                                    <span class="control maximize"></span>
                                </div>
                                <div class="window-title">main.js</div>
                            </div>
                            <div class="code-content">
                                <div class="code-line">
                                    <span class="line-number">1</span>
                                    <span class="code-text">
                                        <span class="keyword">const</span> 
                                        <span class="variable">innovation</span> = 
                                        <span class="string">'our passion'</span>;
                                    </span>
                                </div>
                                <div class="code-line">
                                    <span class="line-number">2</span>
                                    <span class="code-text">
                                        <span class="keyword">function</span> 
                                        <span class="function">buildFuture</span>() {
                                    </span>
                                </div>
                                <div class="code-line">
                                    <span class="line-number">3</span>
                                    <span class="code-text">
                                        &nbsp;&nbsp;<span class="keyword">return</span> 
                                        <span class="string">'amazing software'</span>;
                                    </span>
                                </div>
                                <div class="code-line">
                                    <span class="line-number">4</span>
                                    <span class="code-text">}</span>
                                </div>
                            </div>
                        </div>
                        <div class="floating-elements">
                            <div class="element element-1">
                                <i class="ri-reactjs-line"></i>
                            </div>
                            <div class="element element-2">
                                <i class="ri-vuejs-line"></i>
                            </div>
                            <div class="element element-3">
                                <i class="ri-nodejs-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="scroll-text">{{ __('translate.Scroll Down') }}</div>
            <div class="scroll-arrow">
                <i class="ri-arrow-down-line"></i>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="modern-about-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                    <div class="about-visual">
                        <div class="about-image-wrapper">
                            <img src="{{ asset(getImage($aboutContent, 'image')) }}" alt="About Us" class="about-image">
                            <div class="about-overlay">
                                <div class="play-button">
                                    <i class="ri-play-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="experience-badge">
                            <div class="badge-content">
                                <div class="badge-number">5+</div>
                                <div class="badge-text">{{ __('translate.Years Experience') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                    <div class="about-content">
                        <div class="section-badge">
                            <span class="badge-icon">
                                <i class="ri-information-line"></i>
                            </span>
                            <span class="badge-text">{{ __('translate.About Us') }}</span>
                        </div>
                        <h2 class="section-title">
                            {{ getTranslatedValue($aboutContent, 'heading', $currentLang) }}
                        </h2>
                        <p class="section-description">
                            {{ getTranslatedValue($aboutContent, 'description', $currentLang) }}
                        </p>
                        <div class="feature-list">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="ri-check-line"></i>
                                </div>
                                <div class="feature-text">{{ __('translate.Expert Development Team') }}</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="ri-check-line"></i>
                                </div>
                                <div class="feature-text">{{ __('translate.Cutting-edge Technologies') }}</div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="ri-check-line"></i>
                                </div>
                                <div class="feature-text">{{ __('translate.24/7 Support') }}</div>
                            </div>
                        </div>
                        <a href="{{ route('about-us') }}" class="btn-primary modern-btn">
                            <span class="btn-text">{{ __('translate.Learn More') }}</span>
                            <span class="btn-icon">
                                <i class="ri-arrow-right-line"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="modern-services-section" id="services">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up" data-aos-duration="600">
                <div class="section-badge">
                    <span class="badge-icon">
                        <i class="ri-service-line"></i>
                    </span>
                    <span class="badge-text">{{ __('translate.Our Services') }}</span>
                </div>
                <h2 class="section-title">
                    {{ getTranslatedValue($serviceContent, 'heading', $currentLang) }}
                </h2>
                <p class="section-description">
                    {{ getTranslatedValue($serviceContent, 'description', $currentLang) }}
                </p>
            </div>
            <div class="row">
                @foreach($services as $index => $service)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="{{ 600 + ($index * 100) }}">
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="{{ asset($service->thumb_image) }}" alt="{{ $service->translate?->title }}">
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">{{ $service->translate?->title }}</h4>
                            <p class="service-description">{{ $service->translate?->short_description }}</p>
                            <a href="{{ route('service', $service->slug) }}" class="service-link">
                                <span class="link-text">{{ __('translate.Learn More') }}</span>
                                <span class="link-icon">
                                    <i class="ri-arrow-right-line"></i>
                                </span>
                            </a>
                        </div>
                        <div class="service-hover-effect"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="modern-portfolio-section" id="portfolio">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up" data-aos-duration="600">
                <div class="section-badge">
                    <span class="badge-icon">
                        <i class="ri-folder-line"></i>
                    </span>
                    <span class="badge-text">{{ __('translate.Our Portfolio') }}</span>
                </div>
                <h2 class="section-title">
                    {{ getTranslatedValue($portfolioContent, 'heading', $currentLang) }}
                </h2>
            </div>
            <div class="portfolio-filter" data-aos="fade-up" data-aos-duration="700">
                <button class="filter-btn active" data-filter="all">{{ __('translate.All') }}</button>
                <button class="filter-btn" data-filter="web">{{ __('translate.Web Development') }}</button>
                <button class="filter-btn" data-filter="mobile">{{ __('translate.Mobile Apps') }}</button>
                <button class="filter-btn" data-filter="design">{{ __('translate.UI/UX Design') }}</button>
            </div>
            <div class="portfolio-grid">
                @foreach($portfolios as $index => $portfolio)
                <div class="portfolio-item" data-category="web" data-aos="fade-up" data-aos-duration="{{ 800 + ($index * 100) }}">
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <img src="{{ asset($portfolio->image) }}" alt="{{ $portfolio->translate?->title }}">
                            <div class="portfolio-overlay">
                                <div class="portfolio-actions">
                                    <a href="{{ asset($portfolio->image) }}" class="portfolio-action" data-lightbox="portfolio">
                                        <i class="ri-eye-line"></i>
                                    </a>
                                    <a href="{{ route('portfolio-detail', $portfolio->slug) }}" class="portfolio-action">
                                        <i class="ri-external-link-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <h4 class="portfolio-title">{{ $portfolio->translate?->title }}</h4>
                            <p class="portfolio-category">{{ $portfolio->category->translate?->name }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="modern-team-section" id="team">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up" data-aos-duration="600">
                <div class="section-badge">
                    <span class="badge-icon">
                        <i class="ri-team-line"></i>
                    </span>
                    <span class="badge-text">{{ __('translate.Our Team') }}</span>
                </div>
                <h2 class="section-title">
                    {{ getTranslatedValue($teamContent, 'heading', $currentLang) }}
                </h2>
            </div>
            <div class="row">
                @foreach($teams as $index => $team)
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="{{ 600 + ($index * 100) }}">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="{{ asset($team->image) }}" alt="{{ $team->translate->name }}">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="{{ $team->facebook }}" class="social-link">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                    <a href="{{ $team->linkedin }}" class="social-link">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                    <a href="{{ $team->twitter }}" class="social-link">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">{{ $team->translate->name }}</h4>
                            <p class="team-position">{{ $team->translate->designation }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="modern-testimonials-section" id="testimonials">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up" data-aos-duration="600">
                <div class="section-badge">
                    <span class="badge-icon">
                        <i class="ri-chat-quote-line"></i>
                    </span>
                    <span class="badge-text">{{ __('translate.Testimonials') }}</span>
                </div>
                <h2 class="section-title">
                    {{ getTranslatedValue($testimonialContent, 'heading', $currentLang) }}
                </h2>
            </div>
            <div class="testimonials-slider" data-aos="fade-up" data-aos-duration="800">
                @foreach($testimonials as $testimonial)
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="ri-double-quotes-l"></i>
                        </div>
                        <p class="testimonial-text">{{ $testimonial->translate?->comment }}</p>
                        <div class="testimonial-rating">
                            @for($i = 0; $i < $testimonial->rating; $i++)
                            <i class="ri-star-fill"></i>
                            @endfor
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="{{ asset($general_setting->default_avatar) }}" alt="{{ $testimonial->translate?->name }}">
                        </div>
                        <div class="author-info">
                            <h5 class="author-name">{{ $testimonial->translate?->name }}</h5>
                            <p class="author-position">{{ $testimonial->translate?->designation }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="modern-cta-section" id="cta">
        <div class="cta-background">
            <div class="cta-shapes">
                <div class="cta-shape cta-shape-1"></div>
                <div class="cta-shape cta-shape-2"></div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8" data-aos="fade-right" data-aos-duration="800">
                    <div class="cta-content">
                        <h2 class="cta-title">
                            {{ getTranslatedValue($ctaContent, 'heading', $currentLang) }}
                        </h2>
                        <p class="cta-description">
                            {{ getTranslatedValue($ctaContent, 'description', $currentLang) }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-left" data-aos-duration="800">
                    <div class="cta-action">
                        <a href="{{ route('contact-us') }}" class="btn-primary modern-btn large">
                            <span class="btn-text">{{ getTranslatedValue($ctaContent, 'button_text', $currentLang) }}</span>
                            <span class="btn-icon">
                                <i class="ri-arrow-right-line"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('style_section')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/modern-software-company.css') }}">
@endpush

@push('js_section')
<script src="{{ asset('frontend/assets/js/modern-software-company.js') }}"></script>
@endpush