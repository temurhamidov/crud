<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD</title>
        <style>
            body {
  font-family: "Poppins", sans-serif;
  background-color: rebeccapurple;
}

header {
  color: #fff;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 999;
}
header .container {
  padding: 2rem 0;
  display: grid;
  grid-template-columns: auto 1fr 1fr 1fr auto;
  justify-content: space-between;
  align-items: center;
}
header .container h2 {
  grid-column: 2/3;
  margin-left: 1rem;
  font-size: 2rem;
  font-weight: 900;
  line-height: 1.5;
  letter-spacing: 1px;
  text-transform: uppercase;
  color: inherit;
}
header .container h2 span {
  font-weight: 400;
  color: violet;
}
header .container .hamburger {
  grid-column: 4/-1;
  margin-right: 1rem;
  justify-self: self-end;
}
header .container .desktop-nav {
  grid-column: 4/-1;
  justify-self: self-end;
  margin-right: 1rem;
  display: none;
  gap: 1rem;
  grid-template-columns: repeat(4, auto);
}
header .container .desktop-nav a {
  padding: 0.5rem;
}
@media screen and (min-width: 50rem) {
  header .container .desktop-nav {
    display: grid;
  }
}
header.is-scrolling {
  background-color: #222;
}
header.is-scrolling .container {
  padding-top: 1rem;
  padding-bottom: 1rem;
}

main {
  padding-top: 10rem;
}
main h2 {
  font-size: clamp(1rem, 5vw, 3rem);
  font-weight: 700;
  line-height: 1.2;
  margin-bottom: 2rem;
  padding: 0.5rem;
  text-align: center;
  color: #f4a460;
  position: relative;
  z-index: 10;
}
main .hero {
  display: grid;
  grid-template: "hero";
  place-items: center;
  place-content: center;
  overflow: hidden;
  max-height: clamp(450px, 50vh, 600px);
  text-align: center;
  position: relative;
}
main .hero h2 {
  color: white;
}
main .hero > * {
  grid-area: hero;
}
main .hero img {
  max-width: 100%;
  height: auto;
  aspect-ratio: 16/9;
  -o-object-fit: cover;
     object-fit: cover;
}
main .hero__overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.4);
  transition: background 0.5s ease;
}

.btn {
  display: flex;
  height: 3rem;
  padding: 0;
  background: #009578;
  border: none;
  outline: none;
  border-radius: 0.5rem;
  overflow: hidden;
  font-size: 1rem;
  font-weight: 500;
  cursor: pointer;
  margin: 4rem auto;
}
.btn:hover {
  background: violet;
}
.btn:active {
  background: #006e58;
}
.btn__text, .btn__icon {
  display: inline-flex;
  align-items: center;
  padding: 0 1.5rem;
  color: #fff;
  height: 100%;
}
.btn__icon {
  font-size: 1.5em;
  background: rgba(0, 0, 0, 0.08);
}

.container {
  max-width: 80rem;
  margin: 0 auto;
  padding: 0 3rem;
}

.hamburger {
  position: relative;
  display: block;
  width: 4rem;
  cursor: pointer;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background: none;
  border: none;
}
.hamburger:is(:hover, :focus) .bar, .hamburger:is(:hover, :focus):before, .hamburger:is(:hover, :focus):after {
  background-color: violet;
}
.hamburger .bar, .hamburger:before, .hamburger:after {
  display: block;
  content: "";
  width: 100%;
  height: 5px;
  background-color: #fff;
  margin: 6px 0px;
}
.hamburger.is-active:before {
  transform: rotate(-45deg) translate(-8px, 7px);
}
.hamburger.is-active:after {
  transform: rotate(45deg) translate(-8px, -7px);
}
.hamburger.is-active .bar {
  opacity: 0;
}

.mobile-nav {
  display: flex;
  flex-direction: column;
  gap: 2rem;
  position: fixed;
  z-index: 98;
  top: 0;
  left: 100%;
  width: 100%;
  min-height: 100vh;
  background-color: #222;
  padding-top: 12rem;
}
.mobile-nav.is-active {
  left: 0;
}
.mobile-nav a {
  width: 100%;
  max-width: 15rem;
  margin: 0 auto;
  text-align: center;
  padding: 1rem;
}

.desktop-nav a,
.mobile-nav a {
  color: violet;
  font-size: 1.5rem;
  font-weight: 500;
  text-decoration: none;
}
.desktop-nav :is(:not(:focus, :hover)),
.mobile-nav :is(:not(:focus, :hover)) {
  color: white;
}

@media screen and (min-width: 50rem) {
  .mobile-nav {
    display: none;
  }

  .hamburger {
    display: none;
  }
}
@media (prefers-reduced-motion: no-preference) {
  .desktop-nav:focus,
.mobile-nav:focus,
.hamburger:focus {
    transition: outline-offset 0.25s ease;
  }
  .desktop-nav:where(button, input):where(:not(:active)):focus-visible,
.mobile-nav:where(button, input):where(:not(:active)):focus-visible,
.hamburger:where(button, input):where(:not(:active)):focus-visible {
    outline-offset: 5px;
  }
  .desktop-nav:where(a):where(:not(:active)):focus-visible,
.mobile-nav:where(a):where(:not(:active)):focus-visible,
.hamburger:where(a):where(:not(:active)):focus-visible {
    outline-offset: 5px;
  }

  .hamburger .bar, .hamburger:before, .hamburger:after {
    transition: all 0.4s;
  }

  .mobile-nav {
    transition: all 0.4s;
  }
}
.desktop-nav a:hover{
    background: red;
    transform: scale(1, 1);
    
}
        </style>
        
    </head>
    <body>
    <header>
  <div class="container">
    <h2>Code<span>Mountain</span></h2>
    <nav class="desktop-nav">
      <a href="https://github.com/temurhamidov">GithuB</a>
      <a href="#">Services</a>
      <a href="#">Blog</a>
      <a href="#">Contact</a>
    </nav>
    <button class="hamburger">
      <div class="bar"></div>
    </button>
  </div>
</header>
<nav class="mobile-nav">
  <a href="https://github.com/temurhamidov">GithuB</a>
  <a href="#">Services</a>
  <a href="#">Blog</a>
  <a href="#">Contact</a>
</nav>
<main>
  <section class="container">
    <div class="hero">
      <h2>Struggling to be productive?</h2>
      <img src='https://images.unsplash.com/photo-1551818567-d49550a81408?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1200&q=80' width="1200" height="1800" alt='woman with book over her eyes sleeping outside'>
      <div class="hero__overlay"></div>
    </div>
    <button type="button" class="btn">
      <span class="btn__text"><a href="http://laraxon.loc/games/create">CRUD </a></span>
      <span class="btn__icon oi" data-glyph="cloud-download"></span>
    </button>
  </section>
</main>
    <script>
        const toggleBtn = document.querySelector('.hamburger')
const mobileNav = document.querySelector('.mobile-nav')

toggleBtn.addEventListener('click', () => {
  toggleBtn.classList.toggle('is-active')
  mobileNav.classList.toggle('is-active')
})
    </script>
    </body>
</html>
