<x-app-layout>
  <div x-data="{ carModal: false, showAll: false, selectedCar: {}, }" class="flex flex-col items-center bg-white">
    <div class="flex overflow-hidden flex-col w-full bg-white max-w-[1440px] max-md:p-5">
      @include('layouts.user-nav')

      <!-- Hero Section -->
      <section
        class="overflow-hidden w-full text-5xl font-bold text-center text-black min-h-0 rounded-[40px] max-md:max-w-full max-md:text-4xl">
        <h1>CONTACT US</h1>
      </section>

      <!-- Contact Form and Image Section -->
      <section
        class="flex flex-wrap gap-6 justify-center items-start px-20 py-16 w-full text-base font-semibold text-white max-md:px-5 max-md:max-w-full">
        <!-- Contact Form -->
        <form
          class="flex overflow-hidden flex-col grow shrink py-10 pr-6 pl-7 bg-indigo-600 rounded-3xl min-w-40 w-[250px] max-md:px-5">
          <h2 class="self-center text-3xl text-center text-ellipsis">
            Contact customer support
          </h2>

          <div class="grid grid-cols-4 mt-10 gap-4 w-full leading-none">

            <div class="mt-5 w-full">
              <input type="text" placeholder="First Name"
                class="flex-1 shrink gap-2 self-stretch px-4 py-2.5 w-full bg-indigo-600 rounded-xl basis-0 placeholder-white border border-white/20" />
            </div>

            <div class="mt-5 w-full">
              <input type="text" placeholder="Last Name"
                class="flex-1 shrink gap-2 self-stretch px-4 py-2.5 w-full bg-indigo-600 rounded-xl basis-0 placeholder-white border border-white/20" />
            </div>

            <div class="mt-5 w-full whitespace-nowrap bg-indigo-600 rounded-xl">
              <input type="email" placeholder="Email"
                class="flex-1 shrink gap-2 self-stretch px-4 py-2.5 w-full bg-indigo-600 rounded-xl basis-0 placeholder-white border border-white/20" />
            </div>

            <div class="mt-5 w-full whitespace-nowrap bg-indigo-600 rounded-xl">
              <input type="tel" placeholder="Phone Number"
                class="flex-1 shrink gap-2 self-stretch px-4 py-2.5 w-full bg-indigo-600 rounded-xl basis-0 placeholder-white border border-white/20" />
            </div>
          </div>

          <div class="mt-5 flex justify-center">
            <div class="w-full max-w-lg bg-indigo-600 rounded-xl p-4">
              <textarea
                class="w-full bg-indigo-600 rounded-xl border border-white/20 text-white placeholder-white px-4 py-2.5 h-24 resize-none outline-none"
                placeholder="Reason for contacting"></textarea>
            </div>
          </div>

          <div class="flex justify-center mt-10">
            <button type="submit" class="px-7 py-3 text-white bg-amber-500 rounded-xl min-h-10 max-md:px-5 w-auto">
              Contact Now
            </button>

        </form>

        <!-- Contact Image -->

      </section>

      <!-- Contact Information Section -->
      <section
        class="flex flex-wrap gap-10 justify-between items-center px-20 py-16 w-full text-xl leading-tight text-black max-md:px-5 max-md:max-w-full">
        <!-- Address -->
        <address class="flex gap-3 items-center self-stretch my-auto min-w-60 not-italic">
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/2af2dda35d3d1ad0295a958b3ac6d22118dafdf6d1c0081676a76f7f79610211?placeholderIfAbsent=true"
            alt="Address Icon" class="object-contain shrink-0 self-stretch my-auto w-16 aspect-square rounded-[50px]" />
          <div class="flex flex-col justify-center self-stretch my-auto min-w-60">
            <p>Address</p>
            <p class="mt-3 font-semibold">Davao City</p>
          </div>
        </address>

        <!-- Email -->
        <address class="flex gap-3 self-stretch my-auto min-w-60 not-italic">
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/0e3356c9ae72aafb83dccf10171b0e5f99f4bfe0a301c00424f692de80ab813b?placeholderIfAbsent=true"
            alt="Email Icon" class="object-contain shrink-0 my-auto w-16 aspect-square rounded-[50px]" />
          <div class="flex flex-col justify-center">
            <p>Email</p>
            <p class="mt-3 font-semibold">urbandriveph1@gmail.com</p>
          </div>
        </address>

        <!-- Phone -->
        <address class="flex gap-3 items-center self-stretch my-auto not-italic">
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/db3c41b503c868d6512b9ba5f5a4b52575d064ca6ecacdc92e2c86d3ac362169?placeholderIfAbsent=true"
            alt="Phone Icon" class="object-contain shrink-0 self-stretch my-auto w-16 aspect-square rounded-[50px]" />
          <div class="flex flex-col justify-center self-stretch my-auto">
            <p>Phone</p>
            <p class="mt-3 font-semibold">+639514028718</p>
          </div>
        </address>

        <!-- Opening Hours -->
        <div class="flex gap-3 items-center self-stretch my-auto min-w-60">
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/7dc9e4cc4713623e8fa71e4ab706a7815c2146b58fd626055e3fc4cba9173e33?placeholderIfAbsent=true"
            alt="Clock Icon" class="object-contain shrink-0 self-stretch my-auto w-16 aspect-square rounded-[50px]" />
          <div class="flex flex-col justify-center self-stretch my-auto">
            <p>Opening hours</p>
            <p class="mt-3 font-semibold">Sun-Mon: 10am - 10pm</p>
          </div>
        </div>
      </section>

      <!-- Blog Section -->
      <section class="flex flex-col items-center py-16 w-full max-md:max-w-full">
        <div class="max-w-full text-5xl font-bold text-black w-[1296px] max-md:text-4xl">
          <h2 class="w-full text-ellipsis max-md:max-w-full max-md:text-4xl">
            Latest blog posts & news
          </h2>
        </div>

        <div class="flex flex-wrap gap-6 items-start mt-10 max-w-full w-[1296px]">
          <!-- Blog Card 1 -->
          <article class="flex-1 shrink basis-0 min-w-60">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/7665a6a554579dbc0e4ee3e221359c8bb4a2f32026ec13080a3938cb5fa475b2?placeholderIfAbsent=true"
              alt="How to choose the right car" class="object-contain w-full rounded-3xl aspect-[1.73]" />
            <div class="mt-5 w-full">
              <h3 class="text-xl font-semibold text-black capitalize text-ellipsis">
                How to choose the right car
              </h3>
              <p class="mt-5 text-base text-black">News / 12April 2024</p>
            </div>
          </article>

          <!-- Blog Card 2 -->
          <article class="flex-1 shrink basis-0 min-w-60">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/96a7250d7522fc214233f4a475f964f4b7b3d20f73b201547e01cb8aced90f05?placeholderIfAbsent=true"
              alt="Which plan is right for me?" class="object-contain w-full rounded-3xl aspect-[1.73]" />
            <div class="mt-5 w-full">
              <h3 class="text-xl font-semibold text-black text-ellipsis">
                Which plan is right for me?
              </h3>
              <p class="mt-5 text-base text-black">News / 12April 2024</p>
            </div>
          </article>

          <!-- Blog Card 3 -->
          <article class="flex-1 shrink basis-0 min-w-60">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/18d378e94a5e48e7b0ed1c33277793629fcde87b01745efb52f3298f136503a5?placeholderIfAbsent=true"
              alt="Enjoy Speed, Choice & Total Control" class="object-contain w-full rounded-3xl aspect-[1.73]" />
            <div class="mt-5 w-full">
              <h3 class="text-xl font-semibold text-black text-ellipsis">
                Enjoy Speed, Choice & Total Control
              </h3>
              <p class="mt-5 text-base text-black">News / 12April 2024</p>
            </div>
          </article>
        </div>
      </section>

      <!-- Logos Section -->
      <section class="flex flex-col justify-center px-20 py-16 w-full max-md:px-5 max-md:max-w-full">
        <div
          class="flex flex-wrap gap-10 justify-between items-center px-10 py-16 w-full bg-neutral-50 rounded-[40px] max-md:px-5 max-md:max-w-full">
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/1b5f26b4877e3e6951055cd1ae89bc6ae62c929a189e2ac511fcb27fc16da03b?placeholderIfAbsent=true"
            alt="Partner Logo 1" class="object-contain shrink-0 self-stretch my-auto aspect-[1.52] w-[82px]" />
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/06ec8c01103f020e021b757cafedd0c5363da1f9a0411029302fc9b35938230e?placeholderIfAbsent=true"
            alt="Partner Logo 2" class="object-contain shrink-0 self-stretch my-auto aspect-[2.61] w-[115px]" />
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/885d20521477a17c34d060f08a55f3286ffcd4a8a2aed0084fd9f1599f1ec3d3?placeholderIfAbsent=true"
            alt="Partner Logo 3" class="object-contain shrink-0 self-stretch my-auto aspect-[1.02] w-[55px]" />
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/f4655a6ef10f418d45acb38861cb3f963cfca33df988bbcf627814b9c03120f2?placeholderIfAbsent=true"
            alt="Partner Logo 4" class="object-contain shrink-0 self-stretch my-auto aspect-[2.48] w-[109px]" />
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/72fc6d19dce62e2615382cf3d074621ea6c28465c0a7a1ffbd190b4c62b77532?placeholderIfAbsent=true"
            alt="Partner Logo 5" class="object-contain shrink-0 self-stretch my-auto aspect-[1.02] w-[55px]" />
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/a69e3fb51fca04dcffa07dec2ed5b3f9b48bcbbec84832fdf4c8efdbd027daa4?placeholderIfAbsent=true"
            alt="Partner Logo 6" class="object-contain shrink-0 self-stretch my-auto aspect-[2.95] w-[124px]" />
        </div>
      </section>

      <!-- Footer Section -->
      <footer
        class="flex flex-col justify-center items-center self-center px-20 py-16 w-full text-black bg-white min-h-[404px] max-md:px-5 max-md:max-w-full">
        <div class="flex flex-col items-center w-full max-w-[1296px] max-md:max-w-full">
          <!-- Top Footer Section -->
          <div
            class="flex flex-wrap gap-10 justify-between items-center w-full text-base leading-loose max-md:max-w-full">


            <!-- Address -->
            <address class="flex gap-3 items-center self-stretch my-auto w-[180px] not-italic">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/161e2b3081dbd6774591160b1bac581e10cc3153fd546939e792e85330bb7473?placeholderIfAbsent=true"
                alt="Address Icon"
                class="object-contain shrink-0 self-stretch my-auto w-10 aspect-square rounded-[50px]" />
              <div class="flex flex-col justify-center self-stretch my-auto w-52">
                <p>Address</p>
                <p class="mt-3 font-semibold">Davao City</p>
              </div>
            </address>

            <!-- Email -->
            <address class="flex gap-3 self-stretch my-auto w-[180px] not-italic">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/3542db54cbd5f673e7048ee06d938f4594ff56c6227a35ed7708344296a72c2f?placeholderIfAbsent=true"
                alt="Email Icon" class="object-contain shrink-0 my-auto w-10 aspect-square rounded-[50px]" />
              <div class="flex flex-col justify-center">
                <p>Email</p>
                <p class="mt-3 font-semibold">jelandrolq@gmail.com</p>
              </div>
            </address>

            <!-- Phone -->
            <address class="flex gap-3 items-center self-stretch my-auto w-[180px] not-italic">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/672e78e26802b7434f8e2fd43b8e0af68dd968da0ede2784876587fcc1ac9142?placeholderIfAbsent=true"
                alt="Phone Icon"
                class="object-contain shrink-0 self-stretch my-auto w-10 aspect-square rounded-[50px]" />
              <div class="flex flex-col justify-center self-stretch my-auto">
                <p>Phone</p>
                <p class="mt-3 font-semibold">+639514028718</p>
              </div>
            </address>
          </div>

          <!-- Bottom Footer Section -->
          <div class="flex flex-wrap gap-10 justify-between items-start mt-16 w-full max-md:mt-10">
            <!-- About Text -->
            <div class="flex flex-col justify-between self-stretch text-xl font-semibold leading-7 min-w-60 w-[280px]">
              <p>

                Welcome to Car Rental, your trusted partner for hassle-free vehicle rentals.
                Whether you need a car for business, travel, or everyday use, we offer a wide range of
                well-maintained vehicles at affordable rates. Our goal is to provide comfort, safety, and
                convenience to every customer. Book with us today and experience a smooth ride!
              </p>
              <div class="flex gap-5 self-start mt-8 min-h-6">
                <!-- Social icons would go here -->
              </div>
            </div>

            <!-- Useful Links -->
            <nav class="w-[180px]">
              <h3 class="text-xl font-semibold text-ellipsis">Useful links</h3>
              <ul class="mt-6 w-full text-base leading-loose">
                <li class="text-ellipsis"><a href="#">About us</a></li>
                <li class="mt-4 text-ellipsis"><a href="#">Contact us</a></li>
                <li class="mt-4 text-ellipsis"><a href="#">Gallery</a></li>
                <li class="mt-4 text-ellipsis"><a href="#">Blog</a></li>
                <li class="mt-4 text-ellipsis"><a href="#">F.A.Q</a></li>
              </ul>
            </nav>

            <!-- Vehicles -->
            <nav class="whitespace-nowrap w-[180px]">
              <h3 class="text-xl font-semibold text-ellipsis">Vehicles</h3>
              <ul class="mt-6 w-full text-base leading-loose">
                <li><a href="#">Sedan</a></li>
                <li class="mt-4"><a href="#">Cabriolet</a></li>
                <li class="mt-4"><a href="#">Pickup</a></li>
                <li class="mt-4 text-ellipsis"><a href="#">Minivan</a></li>
                <li class="mt-4"><a href="#">SUV</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </footer>
    </div>
    </body>

    </html>

</x-app-layout>