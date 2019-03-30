@extends('landing._templates.index')

@section('content')
<div class="hero-wrapper" id="top">
        <div class="hero">
            <div class="container">
                <div class="text text-center text-lg-left">
                    <a href="https://getstisla.com/blog/open-source" class="headline">
                        <div class="badge badge-danger">New</div>
                        Stisla is now 100% open source &nbsp; <i class="fas fa-chevron-right"></i>
                    </a>
                    <h1>Free Bootstrap Admin Template</h1>
                    <p class="lead">
                        Stisla will help you to speed up your project, design your own dashboard UI and the users will love it.
                    </p>
                    <div class="cta">
                        <a class="btn btn-lg btn-warning btn-icon icon-right" href="https://getstisla.com/getting-started">Get Started <i class="fas fa-chevron-right"></i></a> &nbsp;
                        <div class="mt-3 text-job">
                            MIT License &nbsp;&nbsp;&bull;&nbsp;&nbsp; Version: 2.2.0
                        </div>
                    </div>
                </div>
                <div class="image d-none d-lg-block">
                    <img src="landing/ill.svg" alt="img">
                </div>
            </div>
        </div>
    </div>


    <div class="callout container">
        <div class="row">
            <div class="col-md-6 col-12 mb-4 mb-lg-0">
                <div class="text-job text-muted text-14">not a reason to  Stisla</div>
                <div class="h1 mb-0 font-weight-bold"><span class="font-weight-500">just a </span>statistic</div>
            </div>
            <div class="col-4 col-md-2 text-center">
                <div class="h2 font-weight-bold">7000+</div>
                <div class="text-uppercase font-weight-bold ls-2 text-primary">Downloads</div>
            </div>
            <div class="col-4 col-md-2 text-center">
                <div class="h2 font-weight-bold">125+</div>
                <div class="text-uppercase font-weight-bold ls-2 text-primary">Countries</div>
            </div>
            <div class="col-4 col-md-2 text-center">
                <div class="h2 font-weight-bold">6500+</div>
                <div class="text-uppercase font-weight-bold ls-2 text-primary">Sessions</div>
            </div>
        </div>
    </div>
    <section id="features">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-lg-10 offset-lg-1">
                    <h2>Stisla is <span class="text-primary">designed for you</span> and your clients</h2>
                    <p class="lead">Integrated with 30+ third-party libraries and has many components, you will easily to create a dashboard layout.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="features">
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h5>Responsive Design</h5>
                            <p>Dont worry about the gadget you have. Stisla is very suitable for every platform.</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fab fa-html5"></i>
                            </div>
                            <h5>HTML5 &amp; CSS3</h5>
                            <p>Written with HTML5 and CSS3 and supported by most modern browsers.</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-fire"></i>
                            </div>
                            <h5>JavaScript APIs</h5>
                            <p>We provide some javascript APIs to interact with some components more easily.</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <h5>Verified By W3C?</h5>
                            <p>All HTML pages are free of errors, because they have been verified by W3C.</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-columns"></i>
                            </div>
                            <h5>Bootstrap 4</h5>
                            <p>Based on Bootstrap 4, one of the popular flexbox frameworks.</p>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <h5>And Others</h5>
                            <p>We don't want to talk much about this template, try it yourself and don't say anything.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="design" class="section-design">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block">
                    <img src="https://getstisla.com/landing/undraw_processing_qj6a.svg" alt="user flow" class="img-fluid">
                </div>
                <div class="col-lg-7 pl-lg-5 col-md-12">
                    <div class="badge badge-primary mb-3">30+ third-party libraries</div>
                    <h2>Save your time for other <span class="text-primary">important things</span>, not <span class="text-primary">dashboard</span> design</h2>
                    <p class="lead">Your idea has other things that need to be prioritized, dont waste your time only on the dashboard design. Stisla will speed up your project to design a clean dashboard interface.</p>
                    <div class="mt-4">
                        <a href="" class="link-icon">
                            Getting Started with Stisla <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="dashboard" class="section-skew">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-lg-10 offset-lg-1">
                    <h2>JavaScript <span class="text-primary">APIs</span></h2>
                    <p class="lead">Some components have JavaScript APIs to interact with. The example below is to create a Bootstrap Modal quickly without HTML Markup.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="pre-block">
                        <pre class="language-js" data-name="modal.js"><code>$("#my-button").fireModal({
  body: '&lt;p>Your content goes here.&lt;/p>',
  created: function(modal) {
      console.log('Modal has been created');
  },
  buttons: [
    {
      text: 'Action',
      class: 'btn btn-primary btn-shadow',
      handler: function(modal) {
        // do something
        alert('Clicked');
      }
    }
  ]
});</code></pre>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="browser-container">
                      <div class="browser-row">
                        <div class="browser-column browser-left">
                          <span class="browser-dot" style="background:#fc544b;"></span>
                          <span class="browser-dot" style="background:#ffa426;"></span>
                          <span class="browser-dot" style="background:#63ed7a;"></span>
                        </div>
                        <div class="browser-column browser-middle">
                          <input type="text" readonly="" value="about:blank">
                        </div>
                        <div class="browser-column browser-right">
                          <div class="float-right">
                            <span class="browser-bar"></span>
                            <span class="browser-bar"></span>
                            <span class="browser-bar"></span>
                          </div>
                        </div>
                      </div>

                      <div class="browser-content d-flex align-items-center justify-content-center flex-column">
                        <p class="mb-2">Click the button below to run the JavaScript code on the left side.</p>
                        <a href="#" class="btn btn-primary" id="my-button">Click Me</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-12 col-lg-8 offset-lg-2 text-center">
                    <p><span class="text-success font-weight-bold">Good news</span>. Besides Bootstrap Modal, we have other interfaces to interact with components, such as Card, Chat Box, and so on.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="components" class="section-design section-design-right">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 pr-lg-5 pr-0">
                    <div class="badge badge-primary mb-3">Clean Components</div>
                    <h2>Focus on your <span class="text-primary">goal</span>, let <span class="text-primary">Stisla</span> help you to <span class="text-primary">design</span> the dashboard</h2>
                    <p class="lead">Designing a dashboard can be a nightmare if its not based on a concept, your time will run out just to think about what components will be created. Stisla has many components, so you just need to adjust it. Save your time, go to bed early.</p>
                    <div class="mt-4">
                        <a href="" class="link-icon">
                            Explore Components <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="abs-images">
                        <img src="https://getstisla.com/landing/components/countries.png" alt="user flow" class="img-fluid rounded dark-shadow">
                        <img src="https://getstisla.com/landing/components/ticket.png" alt="user flow" class="img-fluid rounded dark-shadow">
                        <img src="https://getstisla.com/landing/components/user.png" alt="user flow" class="img-fluid rounded dark-shadow">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="try" class="section-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2>Want to try it first?</h2>
                    <p class="lead">We are happy if you want to see a demo of this template first, find what you are looking for, we really want to save your development time.</p>
                    <div class="mt-4">
                        <a href="https://demo.getstisla.com" class="btn">Go to the Demo Page</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="support-us" class="support-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-none d-lg-block pr-lg-5 pr-sm-0">
                    <div class="d-flex align-items-center h-100 justify-content-center abs-images-2">
                        <img src="https://getstisla.com/landing/stisla-preview-mid.png" alt="image" class="img-fluid rounded dark-shadow">
                        <img src="https://getstisla.com/landing/pricing.png" alt="image" class="img-fluid rounded dark-shadow">
                        <img src="https://getstisla.com/landing/stats.png" alt="image" class="img-fluid rounded dark-shadow">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <h2>Stisla is free for anyone <span class="text-primary">Yes, including you!</span></h2>
                    <p class="lead">Stisla is no longer a simple version and a pro version. Now, everything is the same.</p>
                    <ul class="list-icons">
                        <li>
                            <span class="card-icon bg-primary text-white">
                                <i class="fas fa-box-open"></i>
                            </span>
                            <span>The many components and full features, speed up your project.</span>
                        </li>
                        <li>
                            <span class="card-icon bg-primary text-white">
                                <i class="fas fa-fire"></i>
                            </span>
                            <span>Get all the Stisla components and 30+ integrated modules.</span>
                        </li>
                        <li>
                            <span class="card-icon bg-primary text-white">
                                <i class="fas fa-stopwatch"></i>
                            </span>
                            <span>Spend time on something valuable for your idea, not design.</span>
                        </li>
                        <li>
                            <span class="card-icon bg-primary text-white">
                                <i class="fas fa-heart"></i>
                            </span>
                            <span>You support and save us to continue to keep this project alive.</span>
                        </li>
                        <li>
                            <span class="card-icon bg-primary text-white">
                                <i class="fas fa-rocket"></i>
                            </span>
                            <span>Allowed to create a multi-tenant SaaS application.</span>
                        </li>
                        <li>
                            <span class="card-icon bg-primary text-white">
                                <i class="fas fa-clock"></i>
                            </span>
                            <span>Get lifetime updates dan support Stisla.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="download-section" class="bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h2>Start Your Awesome Project</h2>
                    <p class="lead">Start your amazing project with Stisla, dont start designing from scratch.</p>
                </div>
                <div class="col-md-5 text-right">
                    <a href="https://getstisla.com/download" class="btn btn-primary btn-lg">Download Stisla Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="before-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card long-shadow">
                        <div class="card-body d-flex p-45">
                            <div class="card-icon bg-primary text-white">
                                <i class="far fa-file"></i>
                            </div>
                            <div>
                                <h5>Explore The Docs</h5>
                                <p class="lh-sm">Find out how to  Stisla, find out how to make Cards, Navbar, Tables, Maps and so on. Find out everything in the documentation.</p>
                                <div class="mt-4 text-right">
                                    <a href="https://getstisla.com/docs" class="link-icon">Documentation <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card long-shadow">
                        <div class="card-body p-45 d-flex">
                            <div class="card-icon bg-primary text-white">
                                <i class="far fa-life-ring"></i>
                            </div>
                            <div>
                                <h5>Support</h5>
                                <p class="lh-sm">Lifetime support tisla. Get support for Stisla bugs or request features through the Stisla community on the GitHub issue.</p>
                                <div class="mt-4 text-right">
                                    <a href="https://getstisla.com/support" class="link-icon">Support <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
