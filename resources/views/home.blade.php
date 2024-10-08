<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link rel="icon" type="icon" href="assets/images/favicon.png" />
  <title>Blue Star - Tailwind Landing Page</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.css">
  <link rel="stylesheet" href="assets/css/custom.css">

  @vite(['resources/css/app.css', 'resources/css/cliente.css','resources/js/app.js'])

  @livewireStyles

</head>

<body>
  <header class="bg-gray-dark sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center py-4">
      <!-- Left section: Logo -->
      <div class="flex items-center">
        <img src="assets/images/blue-logo.png" alt="Logo" class="h-14 w-auto mr-4">
      </div>

      <!-- Hamburger menu (for mobile) -->
      <div class="flex md:hidden">
        <button id="hamburger" class="text-white focus:outline-none">
          <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>

      <!-- Center section: Menu -->
      <nav class="hidden md:flex md:flex-grow justify-center">
        <ul class="flex justify-center space-x-4 text-white">
          <li><a href="#home" class="hover:text-secondary font-bold">Home</a></li>
          <li><a href="#aboutus" class="hover:text-secondary font-bold">About us</a></li>
          <li><a href="#results" class="hover:text-secondary font-bold">Results</a></li>
          <li><a href="#reviews" class="hover:text-secondary font-bold">Reviews</a></li>
          <li><a href="#portfolio" class="hover:text-secondary font-bold">Portfolio</a></li>
          <li><a href="#team" class="hover:text-secondary font-bold">Team</a></li>
          <li><a href="#contact" class="hover:text-secondary font-bold">Contact</a></li>
          <li><a href="/login" class="hover:text-secondary font-bold text-green-300">Login</a></li>
          <li><a href="/register" class="hover:text-secondary font-bold text-green-500">Register</a></li>
        </ul>
      </nav>

      <!-- Right section: Buttons (for desktop) -->
      <div class="hidden lg:flex items-center space-x-4">
        <a href={{-- "https://github.com/spacemadev/Free-blue-star-tailwind-landing-page-template" --}} class="bg-secondary hover:bg-primary text-white font-semibold px-4 py-2 rounded inline-block">Github</a>
        <a href={{-- "https://spacema-dev.com/blue-star-free-tailwind-landing-page-template" --}} class="bg-primary hover:bg-secondary text-white font-semibold px-4 py-2 rounded inline-block">Download</a>
      </div>
    </div>
  </header>
  <!-- Mobile menu -->
  <nav id="mobile-menu-placeholder" class="mobile-menu hidden flex flex-col items-center space-y-8 md:hidden">
    <ul>
      <li><a href="#home" class="hover:text-secondary font-bold">Home</a></li>
      <li><a href="#aboutus" class="hover:text-secondary font-bold">About us</a></li>
      <li><a href="#results" class="hover:text-secondary font-bold">Results</a></li>
      <li><a href="#reviews" class="hover:text-secondary font-bold">Reviews</a></li>
      <li><a href="#portfolio" class="hover:text-secondary font-bold">Portfolio</a></li>
      <li><a href="#team" class="hover:text-secondary font-bold">Team</a></li>
      <li><a href="#contact" class="hover:text-secondary font-bold">Contact</a></li>
    </ul>
    <div class="flex flex-col mt-6 space-y-2 items-center">
      <a href={{-- "https://github.com/spacemadev/Free-blue-star-tailwind-landing-page-template" --}} class="bg-secondary hover:bg-primary text-white font-semibold px-4 py-2 rounded inline-block flex items-center justify-center min-w-[110px]">Github</a>
      <a href={{-- "https://spacema-dev.com/blue-star-free-tailwind-landing-page-template" --}} class="bg-primary hover:bg-secondary text-white font-semibold px-4 py-2 rounded inline-block flex items-center justify-center min-w-[110px]">Download</a>
    </div>
  </nav>

  <section id="home" class="bg-white py-16">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
      <!-- Left column: Description and buttons -->
      <div class="md:w-1/2 text-center md:text-left mb-8 md:mb-0">
        <h2 class="text-5xl font-bold mb-4">Blue Star <span class="text-primary">Landing</span> Page</h2>
        <p class="my-7">Tailwind CSS is an open source CSS framework. The main feature of this library is that, unlike
          other CSS frameworks like Bootstrap, it does not provide a series of predefined classes for elements such as
          buttons or tables.</p>
        <div class="space-x-2">
          <a href={{-- "https://github.com/spacemadev/Free-blue-star-tailwind-landing-page-template" --}} class="bg-secondary hover:bg-primary text-white font-semibold px-4 py-2 rounded inline-block">Github</a>
          <a href={{-- "https://spacema-dev.com/blue-star-free-tailwind-landing-page-template" --}} class="bg-primary hover:bg-secondary text-white font-semibold px-4 py-2 rounded inline-block">Download</a>
        </div>
      </div>

      <!-- Right column: Responsive image -->
      <div class="md:w-1/2">
        <img src="/assets/images/1.png" alt="Image" class="w-full md:mx-auto md:max-w-md" />
      </div>
    </div>
  </section>

  <section id="aboutus" class="py-16 bg-gray-dark">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
      <!-- Left column: Image -->
      <div class="md:w-1/2 mb-8 md:mb-0">
        <img src="/assets//images/2.png" alt="Image" class="w-full md:mx-auto md:max-w-md" />
      </div>

      <!-- Right column: Title, description list, and button -->
      <div class="md:w-1/2">
        <h2 class="text-5xl font-bold mb-4 text-white">How We <span class="text-primary">Work</span></h2>
        <p class="my-5 text-white">At Blue Star Landing Page, we pride ourselves on our meticulous approach to every project. Our process is designed to ensure that we understand your unique needs and deliver exceptional results every time.</p>
        <ol class="mb-10 list-outside">
          <li class="flex items-center mb-4">
            <strong class="bg-primary text-white rounded-full w-8 h-8 text-lg font-semibold flex items-center justify-center mr-3">1</strong>
            <span class="text-white">We begin with a detailed analysis of your needs and objectives.</span>
          </li>
          <li class="flex items-center mb-4">
            <strong class="bg-primary text-white rounded-full w-8 h-8 text-lg font-semibold flex items-center justify-center mr-3">2</strong>
            <span class="text-white">Our team collaborates closely with you to develop a tailored strategy.</span>
          </li>
          <li class="flex items-center mb-4">
            <strong class="bg-primary text-white rounded-full w-8 h-8 text-lg font-semibold flex items-center justify-center mr-3">3</strong>
            <span class="text-white">We execute the plan with precision, keeping you informed at every step.</span>
          </li>
        </ol>
        <button class="bg-secondary hover:bg-primary text-white font-semibold px-4 py-2 rounded">Get Started</button>
      </div>

    </div>
  </section>

  <section id="results" class="bg-gray-lighter py-16 success-metrics">
    <div class="container mx-auto">
      <!-- First row: Title and subtitle -->
      <div class="text-center mb-12">
        <h2 class="text-5xl font-bold mb-4">Success Metrics</h2>
        <p class="text-lg text-primary font-semibold">Measuring our achievements and milestones</p>
      </div>

      <!-- Second row: Four columns with success metrics -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div
          class="success-metric bg-white p-6 rounded-lg shadow-lg text-center group hover:bg-primary hover:text-white transition-all duration-300">
          <h3 class="text-2xl font-bold text-primary counter" data-target-value="20">0</h3>
          <p class="text-lg">Happy Clients</p>
        </div>
        <div
          class="success-metric bg-white p-6 rounded-lg shadow-lg text-center group hover:bg-primary hover:text-white transition-all duration-300">
          <h3 class="text-2xl font-bold text-primary counter" data-target-value="45">0</h3>
          <p class="text-lg">Team members</p>
        </div>
        <div
          class="success-metric bg-white p-6 rounded-lg shadow-lg text-center group hover:bg-primary hover:text-white transition-all duration-300">
          <h3 class="text-2xl font-bold text-primary counter" data-target-value="500">0</h3>
          <p class="text-lg">Projects Completed</p>
        </div>
        <div
          class="success-metric bg-white p-6 rounded-lg shadow-lg text-center group hover:bg-primary hover:text-white transition-all duration-300">
          <h3 class="text-2xl font-bold text-primary ">24/7</h3>
          <p class="text-lg">Support Available</p>
        </div>
      </div>
    </div>
  </section>

  <section id="reviews" class="bg-white py-16 px-4">
    <div class="container mx-auto max-w-screen-xl px-4 testimonials">
      <div class="text-center mb-12 lg:mb-20">
        <h2 class="text-5xl font-bold mb-4 text-white">What Our Clients Say</h2>
        <p class="text-lg text-primary font-semibold">Discover the experiences of our satisfied clients</p>
      </div>

      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide flex flex-col space-y-4">
            <img class="w-20 h-20 rounded-full mx-auto object-cover" src="/assets/images/testimonials-1.jpg" alt="User Image">
            <h3 class="text-lg font-medium text-gray-700 text-primary">John Doe</h3>
            <h6 class="text-base text-gray-500 max-w-[800px] text-white">
              "The service provided by Github exceeded my expectations. I was impressed by their professionalism and
              attention to detail. I highly recommend their services."
            </h6>
          </div>

          <div class="swiper-slide flex flex-col space-y-4">
            <img class="w-20 h-20 rounded-full mx-auto object-cover" src="/assets/images/testimonials-2.jpg" alt="User Image">
            <h3 class="text-lg font-medium text-gray-700 text-primary">John Doe</h3>
            <h6 class="text-base text-gray-500 max-w-[800px] text-white">
              "Working with Blue star team was an absolute pleasure. They were responsive, reliable, and delivered exceptional results. I look forward to collaborating with them again in the future."
            </h6>
          </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  </section>

  <section id="portfolio" class="portfolio-section py-16 px-4">
    <div class="container mx-auto">
      <div class="text-center mb-12">
        <h2 class="text-5xl font-bold mb-4">Recent case studies</h2>
        <p class="text-lg text-primary font-semibold">Explore our recent projects and success stories</p>
      </div>
    <div class="flex flex-col md:flex-row items-center mb-8">
      <button class="filter-button bg-primary hover:bg-secondary px-4 py-2 mr-2 mb-2 text-white rounded">All</button>
      <button class="filter-button  bg-primary hover:bg-secondary px-4 py-2 mr-2 mb-2 text-white rounded">Web Design</button>
      <button class="filter-button  bg-primary hover:bg-secondary px-4 py-2 mr-2 mb-2 text-white rounded">App Development</button>
      <button class="filter-button  bg-primary hover:bg-secondary px-4 py-2 mr-2 mb-2 text-white rounded">Branding</button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
      <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
        <a href="/project-1">
          <img class="w-full h-60 object-cover" src="/assets/images/portfolio-1.png" alt="Project 1">
          <div
            class="absolute top-0 left-0 right-0 bottom-0 bg-gradient-to-r from-primary to-secondary opacity-0 transition duration-300 ease-in-out group-hover:opacity-70">
          </div>
          <div class="p-4 flex flex-col items-center justify-between relative z-10">
            <h3 class="text-lg font-medium text-txt group-hover:text-gray-dark">Awesome Project 1</h3>
            <span class="text-sm font-bold text-secondary group-hover:text-primary">App development</span>
          </div>
        </a>
      </div>
      <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
        <a href="/project-2">
          <img class="w-full h-60 object-cover" src="/assets/images/portfolio-2.jpg" alt="Project 1">
          <div
            class="absolute top-0 left-0 right-0 bottom-0 bg-gradient-to-r from-primary to-secondary opacity-0 transition duration-300 ease-in-out group-hover:opacity-70">
          </div>
          <div class="p-4 flex flex-col items-center justify-between relative z-10">
            <h3 class="text-lg font-medium text-txt group-hover:text-gray-dark">Awesome Project 1</h3>
            <span class="text-sm font-bold text-secondary group-hover:text-primary">Branding</span>
          </div>
        </a>
      </div>
      <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
        <a href="/project-3">
          <img class="w-full h-60 object-cover" src="/assets/images/portfolio-3.jpg" alt="Project 1">
          <div
            class="absolute top-0 left-0 right-0 bottom-0 bg-gradient-to-r from-primary to-secondary opacity-0 transition duration-300 ease-in-out group-hover:opacity-70">
          </div>
          <div class="p-4 flex flex-col items-center justify-between relative z-10">
            <h3 class="text-lg font-medium text-txt group-hover:text-gray-dark">Awesome Project 1</h3>
            <span class="text-sm font-bold text-secondary group-hover:text-primary">Web Design, Branding</span>
          </div>
        </a>
      </div>
      <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
        <a href="/project-4">
          <img class="w-full h-60 object-cover" src="/assets/images/portfolio-4.jpg" alt="Project 1">
          <div
            class="absolute top-0 left-0 right-0 bottom-0 bg-gradient-to-r from-primary to-secondary opacity-0 transition duration-300 ease-in-out group-hover:opacity-70">
          </div>
          <div class="p-4 flex flex-col items-center justify-between relative z-10">
            <h3 class="text-lg font-medium text-txt group-hover:text-gray-dark">Awesome Project 1</h3>
            <span class="text-sm font-bold text-secondary group-hover:text-primary">Web Design, Branding</span>
          </div>
        </a>
      </div>
      <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
        <a href="/project-5">
          <img class="w-full h-60 object-cover" src="/assets/images/portfolio-5.jpg" alt="Project 1">
          <div
            class="absolute top-0 left-0 right-0 bottom-0 bg-gradient-to-r from-primary to-secondary opacity-0 transition duration-300 ease-in-out group-hover:opacity-70">
          </div>
          <div class="p-4 flex flex-col items-center justify-between relative z-10">
            <h3 class="text-lg font-medium text-txt group-hover:text-gray-dark">Awesome Project 1</h3>
            <span class="text-sm font-bold text-secondary group-hover:text-primary">Web Design, Branding</span>
          </div>
        </a>
      </div>
      <div class="group portfolio-item relative hover:shadow-lg shadow-md rounded-lg overflow-hidden">
        <a href="/project-6">
          <img class="w-full h-60 object-cover" src="/assets/images/portfolio-6.jpg" alt="Project 1">
          <div
            class="absolute top-0 left-0 right-0 bottom-0 bg-gradient-to-r from-primary to-secondary opacity-0 transition duration-300 ease-in-out group-hover:opacity-70">
          </div>
          <div class="p-4 flex flex-col items-center justify-between relative z-10">
            <h3 class="text-lg font-medium text-txt group-hover:text-gray-dark">Awesome Project 1</h3>
            <span class="text-sm font-bold text-secondary group-hover:text-primary">Web Design, Branding</span>
          </div>
        </a>
      </div>
    </div>
    </div>
    </section>

  <section id="team" class="bg-gray-dark py-16 px-4">
    <div class="container mx-auto">
      <div class="text-center mb-12 lg:mb-20">
        <h2 class="text-5xl font-bold mb-4 text-white">Meet Our Team</h2>
        <p class="text-lg text-primary font-semibold">Get to know the talented individuals behind our success</p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <img src="/assets/images/team-1.png" alt="Team Member 1" class="w-full h-auto">
            <div class="p-4 text-center">
                <h3 class="text-lg font-semibold text-primary">John Doe</h3>
                <p class="text-gray-dark">CEO</p>
            </div>
        </div>
        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <img src="/assets/images/team-2.png" alt="Team Member 2" class="w-full h-auto">
            <div class="p-4 text-center">
                <h3 class="text-lg font-semibold text-primary">Jane Smith</h3>
                <p class="text-gray-dark">CTO</p>
            </div>
        </div>
        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <img src="/assets/images/team-3.png" alt="Team Member 3" class="w-full h-auto">
            <div class="p-4 text-center">
                <h3 class="text-lg font-semibold text-primary">David Johnson</h3>
                <p class="text-gray-dark">Marketing Director</p>
            </div>
        </div>
        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <img src="/assets/images/team-4.png" alt="Team Member 4" class="w-full h-auto">
            <div class="p-4 text-center">
                <h3 class="text-lg font-semibold text-primary">Emily Brown</h3>
                <p class="text-gray-dark">Lead Developer</p>
            </div>
        </div>
    </div>
  </section>


  <section id="contact" class="bg-cover bg-no-repeat bg-center relative py-16 px-2">
    <div
      class="grid md:grid-cols-2 gap-16 items-center relative overflow-hidden p-10 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-3xl max-w-6xl mx-auto bg-white text-[#333] my-6 before:absolute before:right-0 before:w-[300px] before:bg-blue-400 before:h-full max-md:before:hidden">
      <div>
        <h2 class="text-5xl font-bold text-primary">Get In Touch</h2>
        <p class="text-gray-dark mt-5">Have a specific inquiry or looking to explore new opportunities? Our
          experienced team is ready to engage with you.</p>
        <form>
          <div class="space-y-4 mt-8">
            <input type="text" placeholder="Full Name"
              class="px-2 py-3 bg-white w-full text-sm border-b  outline-none" />
            <input type="number" placeholder="Phone No."
              class="px-2 py-3 bg-white text-gray-dark w-full text-sm border-b  outline-none" />
            <input type="email" placeholder="Email"
              class="px-2 py-3 bg-white text-gray-dark w-full text-sm border-b  outline-none" />
            <textarea placeholder="Write Message"
              class="px-2 pt-3 bg-white text-gray-dark w-full text-sm border-b  outline-none"></textarea>
          </div>
          <button type="button"
            class="mt-8 flex items-center justify-center text-sm w-full rounded px-4 py-2.5 font-semibold bg-primary text-white hover:bg-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff' class="mr-2"
              viewBox="0 0 548.244 548.244">
              <path fill-rule="evenodd"
                d="M392.19 156.054 211.268 281.667 22.032 218.58C8.823 214.168-.076 201.775 0 187.852c.077-13.923 9.078-26.24 22.338-30.498L506.15 1.549c11.5-3.697 24.123-.663 32.666 7.88 8.542 8.543 11.577 21.165 7.879 32.666L390.89 525.906c-4.258 13.26-16.575 22.261-30.498 22.338-13.923.076-26.316-8.823-30.728-22.032l-63.393-190.153z"
                clip-rule="evenodd" data-original="#000000" />
            </svg>
            Send Message
          </button>
        </form>
        <ul class="mt-4 flex justify-center lg:space-x-6 max-lg:flex-col max-lg:items-center max-lg:space-y-2 ">
          <li class="flex items-center hover:text-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='currentColor'
              viewBox="0 0 479.058 479.058">
              <path
                d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                data-original="#006BFD" />
            </svg>
            <a href="javascript:void(0)" class="text-current text-sm ml-3">
              <strong>youremail@example.com</strong>
            </a>
          </li>
          <li class="flex items-center text-current hover:text-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='currentColor'
              viewBox="0 0 482.6 482.6">
              <path
                d="M98.339 320.8c47.6 56.9 104.9 101.7 170.3 133.4 24.9 11.8 58.2 25.8 95.3 28.2 2.3.1 4.5.2 6.8.2 24.9 0 44.9-8.6 61.2-26.3.1-.1.3-.3.4-.5 5.8-7 12.4-13.3 19.3-20 4.7-4.5 9.5-9.2 14.1-14 21.3-22.2 21.3-50.4-.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2-12.8 0-25.1 5.6-35.6 16.1l-35.8 35.8c-3.3-1.9-6.7-3.6-9.9-5.2-4-2-7.7-3.9-11-6-32.6-20.7-62.2-47.7-90.5-82.4-14.3-18.1-23.9-33.3-30.6-48.8 9.4-8.5 18.2-17.4 26.7-26.1 3-3.1 6.1-6.2 9.2-9.3 10.8-10.8 16.6-23.3 16.6-36s-5.7-25.2-16.6-36l-29.8-29.8c-3.5-3.5-6.8-6.9-10.2-10.4-6.6-6.8-13.5-13.8-20.3-20.1-10.3-10.1-22.4-15.4-35.2-15.4-12.7 0-24.9 5.3-35.6 15.5l-37.4 37.4c-13.6 13.6-21.3 30.1-22.9 49.2-1.9 23.9 2.5 49.3 13.9 80 17.5 47.5 43.9 91.6 83.1 138.7zm-72.6-216.6c1.2-13.3 6.3-24.4 15.9-34l37.2-37.2c5.8-5.6 12.2-8.5 18.4-8.5 6.1 0 12.3 2.9 18 8.7 6.7 6.2 13 12.7 19.8 19.6 3.4 3.5 6.9 7 10.4 10.6l29.8 29.8c6.2 6.2 9.4 12.5 9.4 18.7s-3.2 12.5-9.4 18.7c-3.1 3.1-6.2 6.3-9.3 9.4-9.3 9.4-18 18.3-27.6 26.8l-.5.5c-8.3 8.3-7 16.2-5 22.2.1.3.2.5.3.8 7.7 18.5 18.4 36.1 35.1 57.1 30 37 61.6 65.7 96.4 87.8 4.3 2.8 8.9 5 13.2 7.2 4 2 7.7 3.9 11 6 .4.2.7.4 1.1.6 3.3 1.7 6.5 2.5 9.7 2.5 8 0 13.2-5.1 14.9-6.8l37.4-37.4c5.8-5.8 12.1-8.9 18.3-8.9 7.6 0 13.8 4.7 17.7 8.9l60.3 60.2c12 12 11.9 25-.3 37.7-4.2 4.5-8.6 8.8-13.3 13.3-7 6.8-14.3 13.8-20.9 21.7-11.5 12.4-25.2 18.2-42.9 18.2-1.7 0-3.5-.1-5.2-.2-32.8-2.1-63.3-14.9-86.2-25.8-62.2-30.1-116.8-72.8-162.1-127-37.3-44.9-62.4-86.7-79-131.5-10.3-27.5-14.2-49.6-12.6-69.7z"
                data-original="#006BFD"></path>
            </svg>
            <a href="javascript:void(0)" class="text-current text-sm ml-3">
              <strong>+123 456 789</strong>
            </a>
          </li>
        </ul>
      </div>
      <div class="z-10 relative h-full max-md:min-h-[350px]">
        <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
          class="left-0 top-0 h-full w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" frameborder="0"
          allowfullscreen></iframe>
      </div>
    </div>
  </section>

  <footer class="bg-gray-dark text-white py-16">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- First column: About Us -->
        <div class="text-center md:text-left">
            <h3 class="text-lg font-bold mb-4">About Us</h3>
            <ul class="space-y-2">
                <li><a href="/politicas-de-privacidad" class="hover:text-secondary font-bold">Politica de privacidad</a></li>
                <li><a href="/terminos-y-condiciones" class="hover:text-secondary font-bold">Terminos y condiciones</a></li>
                <li><a href="#" class="hover:text-secondary font-bold">Our Mission</a></li>
            </ul>
        </div>

        <!-- Second column: Services -->
        <div class="text-center md:text-left">
            <h3 class="text-lg font-bold mb-4">Services</h3>
            <ul class="space-y-2">
                <li><a href="#" class="hover:text-secondary font-bold">Web Design</a></li>
                <li><a href="#" class="hover:text-secondary font-bold">Graphic Design</a></li>
                <li><a href="#" class="hover:text-secondary font-bold">Digital Marketing</a></li>
            </ul>
        </div>

        <!-- Third column: Contact Us -->
        <div class="text-center md:text-left">
            <h3 class="text-lg font-bold mb-4">Contact Us</h3>
            <ul class="space-y-2">
                <li><a href="#" class="hover:text-secondary font-bold">Contact Information</a></li>
                <li><a href="#" class="hover:text-secondary font-bold">Send a Message</a></li>
                <li><a href="#" class="hover:text-secondary font-bold">Request a Quote</a></li>
            </ul>
        </div>

        <!-- Fourth column: Logo -->
        <div class="flex flex-col items-center md:items-start">
            <!-- Logo -->
            <img src="assets/images/blue-logo.png" alt="Logo" class="h-14 w-auto mb-4">
            <p>Developed by <a href="/" class="text-primary hover:text-secondary font-bold">AFT-Company</a>
        </div>
    </div>
</footer>

{{--   <script src="node_modules/swiper/swiper-bundle.js"></script>
  <script src="assets/js/script.js"></script> --}}
</body>

</html>
