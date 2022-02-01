<!--                                                                                                                                                                                                        
╔═════════════════════╗
║ Version 0.9  "Rein" ║
╚═════════════════════╝

Copyright 2021. Colton Rein

Passionate enthusiasm in the pursuit of anything; eagerness
in favour of a cause; ardent and active interest.

e. coltonrein@gmail.com
t. (785) 398-1258
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZPHG8NLYMS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZPHG8NLYMS');
</script>

<!-- End of Google Analystics Code -->

<!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('yua9a2dp6bd4');
</script>
<!-- End of Async Drift Code -->

  <link rel="stylesheet" href="style_main.css">
  <script src="https://kit.fontawesome.com/fe1c9921f5.js" crossorigin="anonymous"></script>
  <title>Colton Rein | Frontend Web Developer</title>
</head>

<body>
  <!--Header Navigation Bar-->
  <header class="header sticky">
    <nav class="navbar">
      <div class="logo_area">
        <a href="#" class="nav-logo">Colton Rein</a>
      </div>
      <ul class="nav-menu">
        <li class="nav-item">
          <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="#about" class="nav-link">About</a>
        </li>
        <li class="nav-item">
          <a href="#portfolio1" class="nav-link">Portfolio</a>
        </li>
        <li class="nav-item">
          <a href="#contact" class="nav-link">Contact</a>
        </li>
      </ul>
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
  </header>
  <!--Hero Section-->
  <section class="hero-section">
    <div class="hero-content">
      <h1 class="heading-main">Hello, I'm Colton Rein</h1>
      <div class="hero-info">
        <p class="text-main">A Frontend Web Developer focused on building websites
          and web applications with clean UI/UX designs.
        </p>
      </div>
      <div class="hero-button">
        <a href="#portfolio1" class="btn btn--bg">Projects</a>
      </div>
    </div>
    <div class="arrow">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </section>
  <!--About Section-->
  <section id="about">
    <div class="grid-container">
      <div class="grid-item1">
        <h2>About Me</h2>
        <span class="break"></span>
        <p>Here you can find more information about me, what I like to do, and
          the current tech skills I'm using.
        </p>
      </div>
      <div class="grid-item2">
        <h3>Get to know me</h3>
        <p>I'm a <strong>Frontend Web Developer</strong> building successful
          front end applications. My commitment to each project is to deliver on
          time, create a fully responsive product, and give quality customer 
          service to each client. Check out some of my work in the
          <strong>Projects</strong> section.
        </p>
        <p class="about-2">
          I also like sharing developer related content that I have learned in
          communities like <strong>Discord</strong> and <strong>Dev.to</strong>.
          Connect with me on my
          <a rel="noreferrer" href="https://www.linkedin.com/in/colton-rein-96ab50224/" target="_blank" class="Linkedin"><strong>LinkedIn</strong></a>
          where I post content related to Web Development and
          Programming.
        </p>
        <p>
          I'm open to <strong>Job</strong> opportunities where I can
          contribute, learn and grow. If my skills and experience can create value
          for your projects then lets <strong>Connect</strong>.
        </p>
        <a href="#contact" class="btn--about">Contact</a>
      </div>
      <div class="grid-item3">
        <h3>Technologies</h3>
        <div class="skills-1">
          <div class="skills_skill">HTML</div>
          <div class="skills_skill">CSS</div>
          <div class="skills_skill">GIT</div>
          <div class="skills_skill">MJML</div>
          <div class="skills_skill">Figma</div>
          <div class="skills_skill">Photoshop</div>
          <div class="skills_skill">Responsive Design</div>
        </div>
        <h3>In Progress...</h3>
        <div class="skills-2">
          <div class="skills_skill">Javascript</div>
          <div class="skills_skill">SASS</div>
          <div class="skills_skill">SEO</div>
        </div>
        <h3>See more on...</h3>
        <div class="skills-2">
          <a href="https://github.com/ColtonRein" target="_blank" class="btn--about">Github</a>
        </div>
      </div>
    </div>
  </section>
  <!--Portfolio Sections-->
  <section id="portfolio1">
    <div class="grid-container-portfolio1">
      <div class="grid-portfolio1">
        <h2>Projects</h2>
        <p>Here you will find my recent projects, the technologies used in
          each and a brief summary of the final product.
        </p>
        <span class="break"></span>
      </div>
      <div class="grid-portfolio1-image"><a href="http://coltonrein.com/oncloud.html" target="_blank"></a></div>
      <div class="grid-portfolio1-about">
        <h3>Promotional Email</h3>
        <p>A simple promotional email for one of my favorite shoe brands <strong>OnCloud</strong>. This template was build using <strong>MJML</strong> and tested with <strong>Litmus</strong>. This email is fully responsive and adjusted for Outlook clients.</p>
        <div class="skills-2 skills-portfolio1">
          <div class="skills_skill">HTML</div>
          <div class="skills_skill">CSS</div>
          <div class="skills_skill">MJML</div>
          <div class="skills_skill">Figma</div>
          <div class="skills_skill">Photoshop</div>
          <div class="skills_skill">Litmus</div>
        </div>
        <a href="http://coltonrein.com/oncloud.html" target="_blank" class="btn--portfolio">View Live</a>
        <a href="https://github.com/ColtonRein" target="_blank" class="btn--portfolio">Source Code</a>
      </div>
    </div>
  </section>
  <section id="portfolio2">
    <div class="grid-container-portfolio2">
      <div class="grid-portfolio2-image"><a href="http://coltonrein.com/allbird.html" target="_blank"></a></div>
      <div class="grid-portfolio2-about">
        <h3>Transactional Email</h3>
        <p>A stylish receipt email with order and contact information. This email also includes a promotional section with links to social media. Tested with <strong>Litmus</strong> and built using <strong>Foundations for Emails</strong> </p>
        <div class="skills-2 skills-portfolio2">
          <div class="skills_skill">GULP</div>
          <div class="skills_skill">SASS</div>
          <div class="skills_skill">HTML</div>
          <div class="skills_skill">Foundations</div>
          <div class="skills_skill">Litmus</div>
          <div class="skills_skill">Handlebars</div>
          <div class="skills_skill">JSON</div>
        </div>
        <a href="http://coltonrein.com/allbird.html" class="btn--portfolio">View Live</a>
        <a href="https://github.com/ColtonRein" target="_blank" class="btn--portfolio">Github</a>
      </div>
    </div>
  </section>
  <section id="portfolio3">
    <div class="grid-container-portfolio3">
      <div class="grid-portfolio3-image">
        <h3>Image</h3>
      </div>
      <div class="grid-portfolio3-about">
        <h3>Project 3</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum,
          facilis harum. Dolore id aspernatur atque aperiam quam dignissimos
          repellendus, eveniet, cum nobis expedita nisi perferendis veniam
          doloremque et harum doloribus.</p>
        <div class="skills-2 skills-portfolio3">
          <div class="skills_skill">Javascript</div>
          <div class="skills_skill">SASS</div>
          <div class="skills_skill">SEO</div>
        </div>
        <a href="#" class="btn--portfolio">Learn More</a>
        <a href="https://github.com/ColtonRein" target="_blank" class="btn--portfolio">Github</a>
      </div>
    </div>
  </section>
  <section id="portfolio2">
    <div class="grid-container-portfolio2">
      <div class="grid-portfolio2-image">
        <h3>Image</h3>
      </div>
      <div class="grid-portfolio2-about">
        <h3>Project 4</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum,
          facilis harum. Dolore id aspernatur atque aperiam quam dignissimos
          repellendus, eveniet, cum nobis expedita nisi perferendis veniam
          doloremque et harum doloribus.</p>
        <div class="skills-2 skills-portfolio2">
          <div class="skills_skill">Javascript</div>
          <div class="skills_skill">SASS</div>
          <div class="skills_skill">SEO</div>
        </div>
        <a href="#" class="btn--portfolio">Learn More</a>
        <a href="https://github.com/ColtonRein" target="_blank" class="btn--portfolio">Github</a>
      </div>
    </div>
  </section>
  <!-- Contact Section -->
  <section id="contact">
    <div class="container-contact">
      <h1>Contact Me!</h1>
      <p>Fill out the form below to get in touch with me. I will try to get 
        back to you within 24 hours. If I do not reply within that time please 
        feel free to use the form again.</p>

      <form id="contact-form" action="contact.php" method="post">
        <div class="form-group">
          <label for="firstname">First name *</label>
          <input 
            type="text" 
            name="firstname" 
            id="firstname" 
            required 
            class="form-element"
            placeholder="John" />
        </div>
        <div class="form-group">
          <label for="lastname">Last name *</label>
          <input 
          type="text" 
          name="lastname" 
          id="lastname" 
          required 
          class="form-element" 
          placeholder="Doe" />
        </div>
        <div class="form-group">
          <label for="email">Email address *</label>
          <input 
          type="email" 
          name="email" 
          id="email" 
          required 
          class="form-element" 
          placeholder="john.doe@example.com" />
        </div>
        <div class="form-group">
          <label for="company">Company</label>
          <input 
          type="text" 
          name="company" 
          id="company" 
          class="form-element" 
          placeholder="ex. Digital Agency" />
        </div>
        <div class="form-group full">
          <label for="message">What are you looking for? *</label>
          <textarea 
          name="message" 
          id="message" 
          class="form-element" 
          placeholder="I want a website please..." 
          required></textarea>
        </div>
        <div class="submit-group">
          <input 
          type="submit" 
          id="submit" 
          name="submit" 
          value="SEND MESSAGE" />
        </div>
      </form>
    </div>
  </section>
  <!-- Footer Section -->
  <footer id="footer">
    <h2>Socials</h2>
    <div class="social">
      <a href="https://www.linkedin.com/in/colton-rein-96ab50224/" target="_blank"><i class="fab fa-linkedin"></i></a>
      <a href="https://github.com/ColtonRein" target="_blank"><i class="fab fa-github"></i></a>
      <a href="https://dev.to/coltonrein" target="_blank"><i class="fab fa-dev"></i></a>
    </div>
    <div class="footer-info">
      <h3>Colton Rein</h3>
      <p>A Frontend Web Developer focused on building websites
        and web applications with clean UI/UX designs.</p>
    </div>
    <span class="break-footer"></span>
    <div class="footer-lower">
      &copy; Copyright 2021. Made by
      <a rel="noreferrer" href="#">Colton Rein</a>
    </div>
  </footer>
</body>

<script src="/main.js"></script>

</html>