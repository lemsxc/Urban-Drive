<x-app-layout>
  <div class="flex flex-col items-center bg-white">
    <div class="flex overflow-hidden flex-col w-full bg-white max-w-[1440px] max-md:p-5">
      @include('layouts.user-nav')
    </div>

    <header
      class="gap-5 h-60 text-5xl font-bold text-black rounded-[40px] max-sm:text-4xl flex items-center justify-center">
      <h1>ABOUT US</h1>
    </header>

    <section class="flex flex-col gap-10 px-20 py-16">
      <h2 class="text-5xl font-bold text-black max-w-[50%] max-md:max-w-full max-sm:text-4xl">
        Where every drive feels extraordinary
      </h2>
      <div class="grid gap-6 grid-cols-[1fr_1fr] max-md:grid-cols-[1fr]">
        <div>
          <article class="mb-6">
            <h3 class="mb-5 text-3xl font-semibold text-black">Variety of Premium Brands</h3>
            <p class="text-base leading-6 text-black">
              Choose from a curated selection of the world’s most prestigious automotive brands, offering exceptional
              performance and design.
            </p>
          </article>
          <article class="mb-6">
            <h3 class="mb-5 text-3xl font-semibold text-black">Maximum Freedom</h3>
            <p class="text-base leading-6 text-black">
              Experience unparalleled freedom on the road. Whether exploring new cities or embarking on a scenic drive,
              our vehicles offer the flexibility you need.
            </p>
          </article>
        </div>
        <div>
          <article class="mb-6">
            <h3 class="mb-5 text-3xl font-semibold text-black">24/7 Dedicated Support</h3>
            <p class="text-base leading-6 text-black">
              Our support team is available 24/7 to assist with any questions or concerns, ensuring a seamless
              experience.
            </p>
          </article>
          <article class="mb-6">
            <h3 class="mb-5 text-3xl font-semibold text-black">Flexibility On The Go</h3>
            <p class="text-base leading-6 text-black">
              Our flexible rental options make it easy to change your vehicle or extend your rental period, ensuring the
              perfect ride for any adventure.
            </p>
          </article>
        </div>
      </div>
    </section>

    <section class="flex justify-between px-32 py-16 bg-white max-md:flex-wrap max-md:gap-5 max-md:px-5 max-md:py-10">
      <article class="text-left">
        <h2 class="text-7xl font-bold text-indigo-600 max-sm:text-6xl">20k+</h2>
        <p class="text-xl font-bold text-black">Happy customers</p>
      </article>
      <article class="text-left">
        <h2 class="text-7xl font-bold text-indigo-600 max-sm:text-6xl">540+</h2>
        <p class="text-xl font-bold text-black">Cars available</p>
      </article>
      <article class="text-left">
        <h2 class="text-7xl font-bold text-indigo-600 max-sm:text-6xl">25+</h2>
        <p class="text-xl font-bold text-black">Years of experience</p>
      </article>
    </section>

    <section class="flex gap-20 justify-end items-center px-20 py-16 max-md:flex-col max-md:px-5 max-md:py-10">
      <article class="max-w-[643px] max-md:max-w-full">
        <h2 class="mb-10 text-5xl font-bold text-black max-sm:text-4xl">
          Unlock unforgettable memories on the road
        </h2>
        <p class="mb-10 text-base text-black text-opacity-60">
          Discover the freedom of traveling with top-quality vehicles at your fingertips. Whether you're planning a
          weekend getaway or an extended road trip, we have the perfect car for you.
        </p>
      </article>
      <img src="https://placehold.co/550x549/5937E0/5937E0" alt="Car rental information"
        class="object-cover rounded-3xl h-[549px] w-[550px]" />
    </section>

    <section class="flex flex-col gap-10 items-center px-20 py-16 max-md:px-5 max-md:py-10">
      <h2 class="text-5xl font-bold text-center text-black max-sm:text-4xl">REVIEWS FROM OUR CUSTOMERS</h2>
      <div class="grid gap-6 grid-cols-[repeat(3,1fr)] max-md:grid-cols-[1fr]">
        <article class="relative p-10 rounded-3xl bg-stone-50">
          <p class="mt-16 mb-10 text-xl font-medium text-black">
            "Renting a car with this company made my trip so much easier. The process was smooth, and the vehicle was
            top-notch!"
          </p>
          <figure class="flex gap-4 items-center p-10 -mx-10 my-0 bg-indigo-600 rounded-br-3xl rounded-bl-3xl">
            <img src="https://placehold.co/84x84/5937E0/5937E0" alt="Author" class="h-[84px] rounded-[42px] w-[84px]" />
            <figcaption class="text-white">
              <p class="text-base opacity-60">Adventure Travels</p>
              <p class="text-xl font-semibold">Emanuel Boyle</p>
            </figcaption>
          </figure>
        </article>

        <article class="relative p-10 rounded-3xl bg-stone-50">
          <p class="mt-16 mb-10 text-xl font-medium text-black">
            "The flexibility of the rental options was amazing. I could pick up and drop off the car at preferred
            locations."
          </p>
          <figure class="flex gap-4 items-center p-10 -mx-10 my-0 bg-indigo-600 rounded-br-3xl rounded-bl-3xl">
            <img src="https://placehold.co/84x84/5937E0/5937E0" alt="Author" class="h-[84px] rounded-[42px] w-[84px]" />
            <figcaption class="text-white">
              <p class="text-base opacity-60">Glover - Orn</p>
              <p class="text-xl font-semibold">River Graves</p>
            </figcaption>
          </figure>
        </article>

        <article class="relative p-10 rounded-3xl bg-stone-50">
          <p class="mt-16 mb-10 text-xl font-medium text-black">
            "I had a fantastic experience. The customer service was exceptional, and the car was well-maintained."
          </p>
          <figure class="flex gap-4 items-center p-10 -mx-10 my-0 bg-indigo-600 rounded-br-3xl rounded-bl-3xl">
            <img src="https://placehold.co/84x84/5937E0/5937E0" alt="Author" class="h-[84px] rounded-[42px] w-[84px]" />
            <figcaption class="text-white">
              <p class="text-base opacity-60">Haag LLC</p>
              <p class="text-xl font-semibold">Ryder Malone</p>
            </figcaption>
          </figure>
        </article>
      </div>
    </section>

    <footer class="flex flex-col items-center px-20 pt-16 pb-10 bg-white max-md:px-5">
      <div class="flex flex-col items-center w-full text-black max-w-[1296px] max-md:max-w-full">
        <section
          class="flex flex-wrap gap-10 justify-between items-center w-full text-base leading-loose max-md:max-w-full">
          <div class="flex gap-3 items-center self-stretch my-auto font-bold w-[180px]">
            <img src="https://placehold.co/180x180/5937E0/5937E0" class="object-contain w-12"
              alt="Urban Drive PH Logo" />
            <span>Urban Drive PH</span>
          </div>

          <address class="flex gap-3 items-center self-stretch my-auto w-[180px]">
            <img src="https://placehold.co/40x40/5937E0/5937E0" class="w-10 rounded-full" alt="Address Icon" />
            <div>
              <span>Address</span>
              <strong class="mt-3 font-semibold">Davao City</strong>
            </div>
          </address>

          <address class="flex gap-3 items-center self-stretch my-auto w-[180px]">
            <img src="https://placehold.co/40x40/5937E0/5937E0" class="w-10 rounded-full" alt="Email Icon" />
            <div>
              <span>Email</span>
              <a href="mailto:urbandriveph1@gmail.com" class="mt-3 font-semibold">urbandriveph1@gmail.com</a>
            </div>
          </address>

          <address class="flex gap-3 items-center self-stretch my-auto w-[180px]">
            <img src="https://placehold.co/40x40/5937E0/5937E0" class="w-10 rounded-full" alt="Phone Icon" />
            <div>
              <span>Phone</span>
              <a href="tel:+639514028718" class="mt-3 font-semibold">+639 514-028718</a>
            </div>
          </address>
        </section>
      </div>
    </footer>
  </div>
</x-app-layout>