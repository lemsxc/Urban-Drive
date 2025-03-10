<nav
    class="flex flex-col grow pt-10 pr-6 pb-96 pl-8 w-full bg-white min-h-[944px] max-md:px-5 max-md:pb-24 max-md:mt-10">

    <div class="flex flex-col w-full space-y-2 whitespace-nowrap max-w-[210px]">
        <div class="text-xs font-medium text-black uppercase">Management</div>

        <a href="{{ route('dashboard') }}" id="dashboardLinks"
            class="nav-link flex gap-2.5 items-center px-5 mt-2.5 w-full rounded-lg min-h-[40px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                <path
                    d="M219.31,108.68l-80-80a16,16,0,0,0-22.62,0l-80,80A15.87,15.87,0,0,0,32,120v96a8,8,0,0,0,8,8h64a8,8,0,0,0,8-8V160h32v56a8,8,0,0,0,8,8h64a8,8,0,0,0,8-8V120A15.87,15.87,0,0,0,219.31,108.68ZM208,208H160V152a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8v56H48V120l80-80,80,80Z">
                </path>
            </svg>
            <span class="self-stretch my-auto">Dashboard</span>
        </a>

        <a href="{{ route('rentals') }}" id="rentalLinks"
            class="nav-link flex gap-2.5 items-center px-5 w-full rounded-lg min-h-[40px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                <path
                    d="M235.92,199A8,8,0,0,1,225,195.92L155.32,72H136v8a8,8,0,0,1-16,0V72H100.68L31,195.92A8,8,0,0,1,17,188.08L82.32,72H24a8,8,0,0,1,0-16H232a8,8,0,0,1,0,16H173.68L239,188.08A8,8,0,0,1,235.92,199ZM128,112a8,8,0,0,0-8,8v16a8,8,0,0,0,16,0V120A8,8,0,0,0,128,112Zm0,56a8,8,0,0,0-8,8v16a8,8,0,0,0,16,0V176A8,8,0,0,0,128,168Z">
                </path>
            </svg>
            <span class="self-stretch my-auto">Car Rentals</span>
        </a>

        <a href="{{ route('carlist') }}" id="vehicleLinks"
            class="nav-link flex gap-2.5 items-center px-5 w-full whitespace-nowrap rounded-lg min-h-[40px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                <path
                    d="M240,104H229.2L201.42,41.5A16,16,0,0,0,186.8,32H69.2a16,16,0,0,0-14.62,9.5L26.8,104H16a8,8,0,0,0,0,16h8v80a16,16,0,0,0,16,16H64a16,16,0,0,0,16-16V184h96v16a16,16,0,0,0,16,16h24a16,16,0,0,0,16-16V120h8a8,8,0,0,0,0-16ZM69.2,48H186.8l24.89,56H44.31ZM64,200H40V184H64Zm128,0V184h24v16Zm24-32H40V120H216ZM56,144a8,8,0,0,1,8-8H80a8,8,0,0,1,0,16H64A8,8,0,0,1,56,144Zm112,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H176A8,8,0,0,1,168,144Z">
                </path>
            </svg>
            <span class="self-stretch my-auto">Vehicles</span>
        </a>

        <a href="{{ route('driverlist') }}" id="driversLinks"
            class="nav-link flex gap-2.5 items-center px-5 w-full whitespace-nowrap rounded-lg min-h-[40px] text-neutral-950">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                <path
                    d="M152,80a8,8,0,0,1,8-8h88a8,8,0,0,1,0,16H160A8,8,0,0,1,152,80Zm96,40H160a8,8,0,0,0,0,16h88a8,8,0,0,0,0-16Zm0,48H184a8,8,0,0,0,0,16h64a8,8,0,0,0,0-16Zm-96.25,22a8,8,0,0,1-5.76,9.74,7.55,7.55,0,0,1-2,.26,8,8,0,0,1-7.75-6c-6.16-23.94-30.34-42-56.25-42s-50.09,18.05-56.25,42a8,8,0,0,1-15.5-4c5.59-21.71,21.84-39.29,42.46-48a48,48,0,1,1,58.58,0C129.91,150.71,146.16,168.29,151.75,190ZM80,136a32,32,0,1,0-32-32A32,32,0,0,0,80,136Z">
                </path>
            </svg>
            <span class="self-stretch my-auto">Drivers</span>
        </a>

        <a href="{{ route('settings') }}" id="settingsLinks"
            class="nav-link flex gap-2.5 items-center px-5 w-full whitespace-nowrap rounded-lg min-h-[40px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                <path
                    d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Zm109.94-52.79a8,8,0,0,0-3.89-5.4l-29.83-17-.12-33.62a8,8,0,0,0-2.83-6.08,111.91,111.91,0,0,0-36.72-20.67,8,8,0,0,0-6.46.59L128,41.85,97.88,25a8,8,0,0,0-6.47-.6A112.1,112.1,0,0,0,54.73,45.15a8,8,0,0,0-2.83,6.07l-.15,33.65-29.83,17a8,8,0,0,0-3.89,5.4,106.47,106.47,0,0,0,0,41.56,8,8,0,0,0,3.89,5.4l29.83,17,.12,33.62a8,8,0,0,0,2.83,6.08,111.91,111.91,0,0,0,36.72,20.67,8,8,0,0,0,6.46-.59L128,214.15,158.12,231a7.91,7.91,0,0,0,3.9,1,8.09,8.09,0,0,0,2.57-.42,112.1,112.1,0,0,0,36.68-20.73,8,8,0,0,0,2.83-6.07l.15-33.65,29.83-17a8,8,0,0,0,3.89-5.4A106.47,106.47,0,0,0,237.94,107.21Zm-15,34.91-28.57,16.25a8,8,0,0,0-3,3c-.58,1-1.19,2.06-1.81,3.06a7.94,7.94,0,0,0-1.22,4.21l-.15,32.25a95.89,95.89,0,0,1-25.37,14.3L134,199.13a8,8,0,0,0-3.91-1h-.19c-1.21,0-2.43,0-3.64,0a8.08,8.08,0,0,0-4.1,1l-28.84,16.1A96,96,0,0,1,67.88,201l-.11-32.2a8,8,0,0,0-1.22-4.22c-.62-1-1.23-2-1.8-3.06a8.09,8.09,0,0,0-3-3.06l-28.6-16.29a90.49,90.49,0,0,1,0-28.26L61.67,97.63a8,8,0,0,0,3-3c.58-1,1.19-2.06,1.81-3.06a7.94,7.94,0,0,0,1.22-4.21l.15-32.25a95.89,95.89,0,0,1,25.37-14.3L122,56.87a8,8,0,0,0,4.1,1c1.21,0,2.43,0,3.64,0a8.08,8.08,0,0,0,4.1-1l28.84-16.1A96,96,0,0,1,188.12,55l.11,32.2a8,8,0,0,0,1.22,4.22c.62,1,1.23,2,1.8,3.06a8.09,8.09,0,0,0,3,3.06l28.6,16.29A90.49,90.49,0,0,1,222.9,142.12Z">
                </path>
            </svg>
            <span class="self-stretch my-auto">Settings</span>
        </a>

        <a href="{{ route('historylogs') }}" id="logsLinks"
            class="nav-link flex gap-2.5 items-center px-5 w-full whitespace-nowrap rounded-lg min-h-[40px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                <path
                    d="M168,128a8,8,0,0,1-8,8H96a8,8,0,0,1,0-16h64A8,8,0,0,1,168,128Zm-8,24H96a8,8,0,0,0,0,16h64a8,8,0,0,0,0-16ZM216,40V200a32,32,0,0,1-32,32H72a32,32,0,0,1-32-32V40a8,8,0,0,1,8-8H72V24a8,8,0,0,1,16,0v8h32V24a8,8,0,0,1,16,0v8h32V24a8,8,0,0,1,16,0v8h24A8,8,0,0,1,216,40Zm-16,8H184v8a8,8,0,0,1-16,0V48H136v8a8,8,0,0,1-16,0V48H88v8a8,8,0,0,1-16,0V48H56V200a16,16,0,0,0,16,16H184a16,16,0,0,0,16-16Z">
                </path>
            </svg>
            <span class="self-stretch my-auto">Logs</span>
        </a>
    </div>
</nav>

<style>
    /* Active State Styles */
    .nav-link.active {
        background-color: #4f46e5;
        /* Indigo-600 */
        color: white;
        /* Text color to white */
        font-weight: bold;
    }

    /* Change the color of the SVG inside an active nav-link */
    .nav-link.active svg {
        fill: white;
        /* Change the SVG color to white when active */
    }

    /* Default SVG fill color */
    .nav-link svg {
        fill: #000000;
        /* Default color (black) */
    }

    .nav-link {
        transition: background-color 0.3s ease, color 0.3s ease, font-weight 0.3s ease;
    }

    .nav-link svg {
        transition: fill 0.3s ease;
        /* Smooth transition for SVG fill color */
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Check if there's an active link in localStorage
        const activeLinkId = localStorage.getItem('activeLinkId');

        if (activeLinkId) {
            const activeLink = document.getElementById(activeLinkId);
            if (activeLink) {
                activeLink.classList.add('active');
            }
        }

        // Add click event listeners to all nav links
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function () {
                // Remove active class from all links
                document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));

                // Add active class to the clicked link
                this.classList.add('active');

                // Store the clicked link's ID in localStorage
                localStorage.setItem('activeLinkId', this.id);
            });
        });
    });
</script>