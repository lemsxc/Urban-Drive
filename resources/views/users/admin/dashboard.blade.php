<x-app-layout>
    <div class="flex overflow-hidden flex-col bg-[#D0CAEA]">
        @include('layouts.top-nav')
        <div class="z-10 -mt-4 w-full max-w-[1400px] max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col">
                <div class="flex flex-col w-1/5 max-md:ml-0 max-md:w-full">
                    @include('layouts.admin-nav')
                </div>
                <div class="mt-8 w-full">
                    <div class="flex flex-col ml-5 w-4/5 max-md:ml-0 max-md:w-full">
                        <div class="flex flex-col mt-8 w-full max-md:mt-10 max-md:max-w-full">
                            <div class="flex flex-wrap gap-5 justify-between items-center max-md:max-w-full">
                                <div class="flex flex-col self-stretch max-md:max-w-full">
                                    <div class="max-md:max-w-full">
                                        <div class="flex gap-5 max-md:flex-col">
                                            <div class="flex flex-col w-[77%] max-md:ml-0 max-md:w-full">
                                                <div class="flex flex-col grow items-start max-md:mt-10">
                                                    <div class="flex flex-col self-stretch">
                                                        <div
                                                            class="flex gap-1.5 items-center text-3xl text-neutral-950">
                                                            <div class="self-stretch my-auto font-semibold">
                                                                Good Noon,
                                                            </div>
                                                            <div class="self-stretch my-auto">Anwar Basahi</div>
                                                        </div>
                                                        <div class="mt-1.5 text-base text-black">
                                                            Welcome back to your dashboard!
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mt-12 text-sm tracking-wide leading-loose text-neutral-950 max-md:mt-10">
                                                        Revenue
                                                    </div>
                                                    <div
                                                        class="mt-2 text-xl font-semibold tracking-wide leading-snug text-neutral-950">
                                                        BDT 57,852.000
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col ml-5 w-[23%] max-md:ml-0 max-md:w-full">
                                                <a href="#view-report"
                                                    class="px-3.5 py-1.5 mt-32 w-full text-xs font-medium tracking-wide leading-loose text-indigo-600 bg-white rounded-md bg-blend-normal rotate-[4.4301615145478943e-16rad] max-md:mt-10">
                                                    View Report
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="self-start mt-2.5 ml-4 text-xs font-bold tracking-wide leading-none text-green-500 max-md:ml-2.5">
                                        <span class="font-semibold text-green-500">2.1%</span>
                                        <span class="text-black">vs last week</span>
                                    </div>
                                    <div class="self-start mt-6 text-sm tracking-wide leading-loose text-neutral-950">
                                        Sales from 1-12 Dec, 2020
                                    </div>
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/e9956363216e8dec80f18a3a9a01f37ee83392fd8d369d7784ede3abdb87c41b?placeholderIfAbsent=true&apiKey=9171519205d6418989323d6f5fe10db6"
                                        class="object-contain mt-5 w-full aspect-[1000] max-md:max-w-full"
                                        alt="Sales chart from 1-12 Dec, 2020" />
                                    <div class="flex flex-wrap gap-9 mt-2.5 mr-2.5">
                                        <div class="flex flex-1 gap-1.5 self-start mt-5">
                                            <div class="flex shrink-0 w-2 bg-indigo-600 h-[90px]"></div>
                                            <div class="flex shrink-0 self-end mt-10 w-2 bg-slate-300 h-[50px]"></div>
                                        </div>
                                        <div class="flex flex-1 gap-1.5 self-start mt-5">
                                            <div class="flex shrink-0 self-start mt-5 w-2 bg-indigo-600 h-[70px]"></div>
                                            <div class="flex shrink-0 w-2 bg-slate-300 h-[90px]"></div>
                                        </div>
                                        <div class="flex flex-1 gap-1.5 self-end mt-8">
                                            <div class="flex shrink-0 w-2 h-20 bg-indigo-600"></div>
                                            <div class="flex shrink-0 self-end mt-10 w-2 h-10 bg-slate-300"></div>
                                        </div>
                                        <div class="flex flex-1 gap-1.5 self-end mt-8">
                                            <div class="flex shrink-0 self-start mt-5 w-2 bg-indigo-600 h-[60px]"></div>
                                            <div class="flex shrink-0 w-2 h-20 bg-slate-300"></div>
                                        </div>
                                        <div class="flex flex-1 gap-1.5 self-start mt-2.5">
                                            <div class="flex shrink-0 w-2 bg-indigo-600 h-[100px]"></div>
                                            <div class="flex shrink-0 self-end mt-8 w-2 bg-slate-300 h-[70px]"></div>
                                        </div>
                                        <div class="flex flex-1 gap-1.5">
                                            <div class="flex shrink-0 w-2 bg-indigo-600 h-[110px]"></div>
                                            <div
                                                class="flex shrink-0 self-end mt-16 w-2 bg-slate-300 h-[50px] max-md:mt-10">
                                            </div>
                                        </div>
                                        <div class="flex flex-1 gap-1.5 self-start mt-5">
                                            <div class="flex shrink-0 w-2 bg-indigo-600 h-[90px]"></div>
                                            <div <div class="flex shrink-0 self-end mt-10 w-2 bg-slate-300 h-[50px]">
                                            </div>
                                        </div>
                                        <div class="flex flex-1 gap-1.5 self-start mt-5">
                                            <div class="flex shrink-0 self-start mt-5 w-2 bg-indigo-600 h-[70px]"></div>
                                            <div class="flex shrink-0 w-2 bg-slate-300 h-[90px]"></div>
                                        </div>
                                        <div class="flex flex-1 gap-1.5 self-end mt-8">
                                            <div class="flex shrink-0 w-2 h-20 bg-indigo-600"></div>
                                            <div class="flex shrink-0 self-end mt-10 w-2 h-10 bg-slate-300"></div>
                                        </div>
                                        <div class="flex flex-1 gap-1.5 self-end mt-8">
                                            <div class="flex shrink-0 self-start mt-5 w-2 bg-indigo-600 h-[60px]"></div>
                                            <div class="flex shrink-0 w-2 h-20 bg-slate-300"></div>
                                        </div>
                                        <div class="flex flex-1 gap-1.5 self-start mt-2.5">
                                            <div class="flex shrink-0 w-2 bg-indigo-600 h-[100px]"></div>
                                            <div class="flex shrink-0 self-end mt-8 w-2 bg-slate-300 h-[70px]"></div>
                                        </div>
                                        <div class="flex flex-1 gap-1.5">
                                            <div class="flex shrink-0 w-2 bg-indigo-600 h-[110px]"></div>
                                            <div
                                                class="flex shrink-0 self-end mt-16 w-2 bg-slate-300 h-[50px] max-md:mt-10">
                                            </div>
                                        </div>
                                    </div>
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/edb2e9602b571bc942e16c8655828fc0e53e93c2547568ceeab89c69b19aea21?placeholderIfAbsent=true&apiKey=9171519205d6418989323d6f5fe10db6"
                                        class="object-contain w-full aspect-[1000] max-md:max-w-full"
                                        alt="Sales chart timeline" />
                                    <div
                                        class="flex gap-5 justify-between mt-2.5 mr-4 ml-3.5 text-xs tracking-wide leading-none text-center text-black whitespace-nowrap max-md:mr-2.5">
                                        <div>01</div>
                                        <div>02</div>
                                        <div>03</div>
                                        <div>04</div>
                                        <div>05</div>
                                        <div>06</div>
                                        <div>07</div>
                                        <div>08</div>
                                        <div>09</div>
                                        <div>10</div>
                                        <div>11</div>
                                        <div>12</div>
                                    </div>
                                </div>
                                <div class="flex flex-col self-stretch my-auto tracking-wide text-neutral-950">
                                    <div class="self-start text-base font-medium leading-none">
                                        Booking Time
                                    </div>
                                    <div class="mt-2 text-sm leading-loose">From 1-12 Dec, 2023</div>
                                </div>
                                <div
                                    class="flex flex-col self-stretch my-auto text-xs font-medium tracking-wide leading-loose text-indigo-600">
                                    <a href="#view-report"
                                        class="self-end px-3.5 py-1.5 bg-white rounded-md bg-blend-normal rotate-[4.4301615145478943e-16rad]">
                                        View Report
                                    </a>
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/6000528c9341d3a6642ea7b9960d0b1bbe65c122f43d416794c294a4e85fd3eb?placeholderIfAbsent=true&apiKey=9171519205d6418989323d6f5fe10db6"
                                        class="object-contain mt-6 max-w-full rounded-none aspect-[1.28] w-[140px]"
                                        alt="Booking time chart" />
                                </div>
                            </div>
                            <div
                                class="flex flex-wrap gap-5 justify-between w-full text-xs tracking-wide leading-none text-neutral-950 max-md:mr-2.5 max-md:max-w-full">
                                <div class="flex gap-5 self-end mt-6">
                                    <div class="flex gap-2">
                                        <div class="flex shrink-0 my-auto bg-indigo-600 rounded-full h-[9px] w-[9px]"
                                            aria-hidden="true"></div>
                                        <div>Last 12 days</div>
                                    </div>
                                    <div class="flex gap-2">
                                        <div class="flex shrink-0 my-auto rounded-full bg-slate-300 h-[9px] w-[9px]"
                                            aria-hidden="true"></div>
                                        <div>Last Week</div>
                                    </div>
                                </div>
                                <div class="flex gap-10 whitespace-nowrap">
                                    <div class="flex flex-col">
                                        <div class="flex gap-2 font-medium">
                                            <div class="flex shrink-0 my-auto bg-indigo-600 rounded-full h-[9px] w-[9px]"
                                                aria-hidden="true"></div>
                                            <div>Afternoon</div>
                                        </div>
                                        <div class="self-start mt-2.5 ml-4 max-md:ml-2.5">40%</div>
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="flex gap-2 font-medium">
                                            <div class="flex shrink-0 my-auto bg-violet-900 rounded-full h-[9px] w-[9px]"
                                                aria-hidden="true"></div>
                                            <div>Evening</div>
                                        </div>
                                        <div class="self-center mt-2.5">32%</div>
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="flex gap-2 font-medium">
                                            <div class="flex shrink-0 my-auto rounded-full bg-slate-300 h-[9px] w-[9px]"
                                                aria-hidden="true"></div>
                                            <div>Morning</div>
                                        </div>
                                        <div class="self-center mt-2.5">28%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-16 max-md:mt-10 max-md:max-w-full">
                                <div class="flex gap-5 max-md:flex-col">
                                    <div class="flex flex-col w-[65%] max-md:ml-0 max-md:w-full">
                                        <img loading="lazy"
                                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/0d7809692a98386c9b05eccd730d38620f16da8f0cf953e49b0adea45ee83e9f?placeholderIfAbsent=true&apiKey=9171519205d6418989323d6f5fe10db6"
                                            class="object-contain grow w-full rounded-none aspect-[2.13] max-md:mt-10 max-md:max-w-full"
                                            alt="Detailed analytics chart" />
                                    </div>
                                    <div class="flex flex-col ml-5 w-[35%] max-md:ml-0 max-md:w-full">
                                        <img loading="lazy"
                                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/859f353f99656b727e9c251a9775fdbcbb365c5c670a621585beebcabc7df8d6?placeholderIfAbsent=true&apiKey=9171519205d6418989323d6f5fe10db6"
                                            class="object-contain grow w-full rounded-none aspect-[1.12] max-md:mt-10"
                                            alt="Summary statistics" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>