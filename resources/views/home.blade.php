<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <title>Nidavellir</title>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    </head>

    <body class="bg-black">
        <div class="scrolled-wait-list fixed max-[500px]:right-4 max-[500px]:left-4 bottom-4 right-20 sm:right-24 sm:bottom-6 z-20 rounded-full bg-[rgba(247,247,247,0.2)] border-[rgba(255,255,255,0.3)] border-white backdrop-blur-xl" style="display: none;" >
            <input type="email" name="email" id="email"
                class="block w-full rounded-md border-0 py-4 pl-6 pr-36 bg-transparent text-white placeholder:text-white focus:outline-none focus:ring-0"
                placeholder="Enter your email...">
            <button
                class="flex space-x-1.5 items-center rounded-full bg-white pl-3.5 pr-1.5 py-1.5 text-base font-semibold text-gray-900 hover:bg-gray-200 absolute right-2 top-2 bottom-2">
                <span>Join wait list</span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                    stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>
        <button class="scroll-to-top fixed z-20 p-[0.95rem] max-[500px]:!hidden max-[500px]:!opacity-0 right-4 bottom-4 sm:right-6 sm:bottom-6 rounded-full bg-white shadow-lg cursor-pointer" style="display: none;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
            </svg>              
        </button>

        <nav class="relative z-10" id="why">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="relative flex h-16 justify-between">
                    <div class="flex flex-1 items-stretch justify-start">
                        <div class="flex shrink-0 items-center uppercase text-white font-medium">
                            <img src="{{ Vite::asset('resources/images/logo.png') }}" class="size-6 mr-2">
                            <span>Nidavellir</span>
                        </div>
                        <div class="hidden sm:mx-auto sm:flex sm:items-center sm:space-x-2">
                            <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                            <a href="#why"
                                class="inline-flex items-center py-2 px-3 text-sm font-medium text-white border border-[#292929] hover:bg-[#292929] rounded-full">Why?</a>
                            <a href="#innovation"
                                class="inline-flex items-center py-2 px-3 text-sm font-medium text-white border border-[#292929] hover:bg-[#292929] rounded-full">Innovation</a>
                            <a href="#algorithm"
                                class="inline-flex items-center py-2 px-3 text-sm font-medium text-white border border-[#292929] hover:bg-[#292929] rounded-full">Algorithm</a>
                            <a href="#faq"
                                class="inline-flex items-center py-2 px-3 text-sm font-medium text-white border border-[#292929] hover:bg-[#292929] rounded-full">FAQ</a>
                        </div>
                    </div>

                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                        <button type="button"
                            class="flex space-x-1.5 items-center rounded-full bg-white pl-3.5 pr-1.5 py-1.5 text-base font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-200">
                            <span>Get started</span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <div class="relative overflow-hidden">
            <video class="absolute left-0 right-0 2xl:w-full top-32 min-[2200px]:top-0 min-[2800px]:-top-32 opacity-50 max-w-[none]" playsinline autoplay muted loop
                src="{{ Vite::asset('resources/videos/background.mp4') }}"></video>
            <div class="absolute bottom-0 left-0 right-0 h-96 bg-gradient-to-b from-transparent to-black"></div>
            <div class="relative w-full mx-auto max-w-7xl px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-16 py-16 lg:pt-24 lg:pb-64">
                <div class="flex flex-col justify-center">
                    <div class="py-6 {{-- px-4 border border-[#292929] --}} relative">
                        <h1 class="text-white text-5xl sm:text-6xl font-medium">
                            Win Every Crypto Trade. On Autopilot.
                        </h1>

                        {{--
                        <div class="absolute top-0 left-0 size-1.5 bg-white"></div>
                        <div class="absolute top-0 right-0 size-1.5 bg-white"></div>
                        <div class="absolute bottom-0 right-0 size-1.5 bg-white"></div>
                        <div class="absolute bottom-0 left-0 size-1.5 bg-white"></div>
                        --}}
                    </div>

                    <p class="mt-6 font-medium text-lg sm:text-[1.25rem] text-white opacity-90">
                        Powered by an innovative DCA-Laddered algorithm—trade with unmatched precision and minimize risk,
                        all on
                        autopilot. No setup, no guesswork, just 24/7 automated success.
                    </p>

                    <div class="grid grid-cols-3 gap-4 mt-16 mx-auto max-w-xl">
                        <div class="text-center flex items-center flex-col space-y-2">
                            <img src="{{ Vite::asset('resources/images/register-icon.svg') }}" class="size-14 sm:size-16 object-contain">
                            <p class="text-white font-medium text-sm sm:text-base opacity-90">Register on Nidavellir.</p>
                        </div>
                        <div class="text-center flex items-center flex-col space-y-2">
                            <img src="{{ Vite::asset('resources/images/api-key-icon.svg') }}" class="size-14 sm:size-16 object-contain">
                            <p class="text-white font-medium text-sm sm:text-base opacity-90">Connect your API keys.</p>
                        </div>
                        <div class="text-center flex items-center flex-col space-y-2">
                            <img src="{{ Vite::asset('resources/images/full-auto-trading-icon.svg') }}" class="size-14 sm:size-16 object-contain">
                            <p class="text-white font-medium text-sm sm:text-base opacity-90">Leave it in full auto-trading.
                            </p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div
                            class="relative mt-4 rounded-full bg-[rgba(247,247,247,0.2)] border-[rgba(255,255,255,0.3)] border-white backdrop-blur-xl">
                            <input type="email" name="email" id="email"
                                class="block w-full rounded-md border-0 py-4 pl-6 pr-36 bg-transparent text-white placeholder:text-white focus:outline-none focus:ring-0"
                                placeholder="Enter your email...">
                            <button
                                class="flex space-x-1.5 items-center rounded-full bg-white pl-3.5 pr-1.5 py-1.5 text-base font-semibold text-gray-900 hover:bg-gray-200 absolute right-2 top-2 bottom-2">
                                <span>Join wait list</span>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                    stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="hidden lg:flex flex-col">
                    <img src="{{ Vite::asset('resources/images/chart-1.png') }}"
                        class="backdrop-blur-lg w-8/12 rounded-[1.5rem] border border-[rgba(97,126,194,0.3)]">
                    <img src="{{ Vite::asset('resources/images/chart-2.png') }}"
                        class="backdrop-blur-lg w-8/12 ml-auto rounded-[1.5rem] -mt-16 border border-[rgba(97,126,194,0.3)]">
                </div>
            </div>
        </div>

        <div class="relative bg-black">
            <picture>
                <source srcset="{{ Vite::asset('resources/images/section-2-background-mobile.svg') }}" media="(max-width: 1022px)">
                <img src="{{ Vite::asset('resources/images/section-2-background.svg') }}"
                    class="absolute left-0 top-0 right-0 bottom-0 object-cover object-top h-full w-full"
                    alt="Background Image">
            </picture>

            <div class="absolute bottom-0 left-0 right-0 h-96 bg-gradient-to-b from-transparent to-black"></div>

            <div class="relative w-full mx-auto max-w-7xl px-6 lg:px-8 pt-44 pb-16 overflow-hidden">
                <img src="{{ Vite::asset('resources/images/diamond.svg') }}" class="w-14 h-14 mx-auto" id="innovation">
                <h2 class="text-white font-medium text-center text-5xl mt-10">
                    Innovative Features
                </h2>

                <div class="mt-10 grid grid-cols-1 mx-auto max-w-2xl lg:max-w-full lg:grid-cols-6 gap-6">
                    <div class="fancy-box lg:col-span-4 flex flex-col items-center lg:flex-row lg:items-start gap-4">
                        <div class="lg:w-2/3 p-8">
                            <h3 class="text-white text-2xl font-medium">Guarantee of All Limit-Buy Orders Created</h3>
                            <p class="text-white opacity-75 text-lg font-medium mt-1">
                                Ensure your strategy is fully executed. The system triggers a market order only when all
                                corresponding limit-buy orders are successfully created.
                                <span class="text-white opacity-100">
                                    No more half-filled positions or canceled orders leaving you stuck in a bad trade.
                                </span>
                            </p>
                        </div>
                        <img src="{{ Vite::asset('resources/images/illustration-1.svg') }}"
                            class="w-full max-w-sm lg:w-2/5 -mt-12 lg:mt-0 lg:-ml-12 lg:pb-4">
                    </div>
                    <div class="fancy-box p-8 lg:col-span-2">
                        <h3 class="text-white text-2xl font-medium">Market Rebound Strategy</h3>
                        <p class="text-white opacity-75 text-lg font-medium mt-1">
                            The system is designed to take advantage of market rebounds, placing calculated limit-buy orders
                            at lower prices to reduce your average entry price.
                            <span class="text-white opacity-100">
                                No more panic selling at the worst moment—our strategy ensures you're ready for the rebound.
                            </span>
                        </p>
                    </div>
                    <div class="fancy-box p-8 lg:col-span-3 flex flex-col items-center lg:flex-row lg:items-start gap-8">
                        <div class="lg:w-1/2">
                            <h3 class="text-white text-2xl font-medium">Tokens with Best Oscillation Potential</h3>
                            <p class="text-white opacity-75 text-lg font-medium mt-1">
                                Trade the tokens with the most potential for profit. The system identifies and selects
                                tokens with the highest daily price swings based on historical performance. No more stagnant
                                tokens or missed opportunities from slow movers.
                            </p>
                        </div>
                        <img src="{{ Vite::asset('resources/images/illustration-2.svg') }}" class="w-full max-w-sm -mb-12 mt-6 lg:mg-0 lg:mb-0 lg:w-1/2">
                    </div>
                    <div class="fancy-box p-8 lg:col-span-3 flex flex-col items-center lg:flex-row lg:items-start gap-8">
                        <div class="lg:w-1/2">
                            <h3 class="text-white text-2xl font-medium">No Weekend Trades</h3>
                            <p class="text-white opacity-75 text-lg font-medium mt-1">
                                The system pauses from Friday 4 PM UTC to Sunday 4 PM UTC, protecting you from the typically
                                lower-volume, unpredictable weekend markets. No more worrying about weekend market whipsaws
                                damaging your positions.
                            </p>
                        </div>
                        <img src="{{ Vite::asset('resources/images/illustration-3.svg') }}" class="w-full max-w-sm -mt-6 lg:mt-0 lg:w-1/2">
                    </div>
                </div>
            </div>
        </div>

        <div class="relative" id="algorithm">
            <div class="relative w-full mx-auto max-w-7xl px-6 lg:px-8 pt-8 pb-16 overflow-hidden">
                <img src="{{ Vite::asset('resources/images/small-icon-1.svg') }}" class="w-12 h-12 mx-auto">
                <h2 class="text-white font-medium text-center text-5xl lg:text-6xl mt-10">
                    <span class="block opacity-50">Our Innovation:</span>
                    The Nidavellir Algorithm
                </h2>
            </div>
        </div>

        <div class="relative mt-16">
            <img src="{{ Vite::asset('resources/images/section-3-background-top.svg') }}"
                class="absolute left-0 -top-[6rem] lg:-top-[14rem] right-0 h-32 lg:h-64 w-full -z-10">
            <img src="{{ Vite::asset('resources/images/section-3-background-bottom.svg') }}"
                class="absolute left-0 top-8 right-0 object-top w-full">
            <div class="relative w-full mx-auto max-w-7xl px-6 lg:px-8 pb-16 lg:pb-44 overflow-hidden">
                <img src="{{ Vite::asset('resources/images/small-icon-2.svg') }}" class="w-16 h-16 mx-auto">

                <p class="text-center text-white mt-10 font-medium max-w-2xl text-lg mx-auto opacity-90">
                    At the core of our platform is the Nidavellir algorithm—a groundbreaking DCALaddered strategy that goes
                    beyond traditional trading automation. It's designed to maximize profits and reduce risk by leveraging a
                    combination of market-adaptive logic and smart order placement. Here's what makes it truly unique: Mark
                </p>

                <img src="{{ Vite::asset('resources/images/nidavellir-image.svg') }}" class="mx-auto mt-24 object-contain w-96">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mt-20">
                    <div class="flex gap-2 items-start">
                        <img src="{{ Vite::asset('resources/images/cube-01.svg') }}" class="w-8">
                        <div>
                            <h3 class="text-white text-2xl">Guarantee of All Limit-Buy Orders Created</h3>
                            <p class="text-[#9FA3AC] text-lg mt-2">
                                The Nidavellir algorithm prepares for market fluctuations by placing layered limit-buy
                                orders at varying price levels, lowering your weighted average entry price. This ensures
                                you're positioned for profit even with small market recoveries.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-2 items-start">
                        <img src="{{ Vite::asset('resources/images/line-chart-up-02.svg') }}" class="w-8">
                        <div>
                            <h3 class="text-white text-2xl">Market Rebound Strategy</h3>
                            <p class="text-[#9FA3AC] text-lg mt-2">
                                The system is designed to take advantage of market rebounds, placing calculated limit-buy
                                orders at lower prices to reduce your average entry price. No more panic selling at the
                                worst moment—our strategy ensures you're ready for the rebound.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-2 items-start">
                        <img src="{{ Vite::asset('resources/images/layers-three-01.svg') }}" class="w-8">
                        <div>
                            <h3 class="text-white text-2xl">DCA-Laddered Entries</h3>
                            <p class="text-[#9FA3AC] text-lg mt-2">
                                Rather than placing a single order, the algorithm opens multiple trades at increasing
                                quantities, reducing your average entry price and boosting your potential for gains during
                                market dips.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-2 items-start">
                        <img src="{{ Vite::asset('resources/images/grid-dots-outer.svg') }}" class="w-8">
                        <div>
                            <h3 class="text-white text-2xl">Automated Risk Management</h3>
                            <p class="text-[#9FA3AC] text-lg mt-2">
                                Built-in safeguards like the PnL-based halt mechanism stop new trades when unrealized losses
                                hit a set threshold, protecting you from overexposure and preserving your capital.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="relative bg-black">
            <img src="{{ Vite::asset('resources/images/background-blue-4.svg') }}" class="absolute left-0 right-0 bottom-0 object-cover object-top w-full">

            <div class="relative w-full mx-auto max-w-7xl px-6 lg:px-8 pt-16 pb-32 overflow-hidden">
                <img src="{{ Vite::asset('resources/images/icon-5.svg') }}" class="w-14 h-14 mx-auto">
                <p class="text-white font-medium text-center text-xl mt-10 max-w-3xl mx-auto opacity-90">
                    With the Nidavellir algorithm, you're not just reacting to market movements— you're leveraging a
                    strategy that adapts to them, ensuring consistent, profitable trades no matter the conditions.
                </p>

                <button type="button"
                    class="mx-auto mt-8 flex space-x-1.5 items-center rounded-full bg-white pl-4 pr-2.5 py-2.5 text-base font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-200">
                    <span>Get started today!</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="relative w-full mx-auto max-w-7xl px-6 lg:px-8 py-16 overflow-hidden">
            <img src="{{ Vite::asset('resources/images/icon-6.svg') }}" class="w-14 h-14 mx-auto">
            <h2 class="text-white font-medium text-center text-5xl mt-10">
                Key Features
            </h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-16">
                <div class="flex flex-col justify-center order-1 lg:order-1">
                    <img src="{{ Vite::asset('resources/images/key-features-icon-1.svg') }}" class="w-8">
                    <h2 class="text-white text-3xl font-medium mt-6">Zero Best Performing Tokens</h2>
                    <p class="text-white text-lg font-medium mt-3">Trade only the best. Our system selects the
                        top-performing
                        tokens based on market cap, volume, RSI,
                        and EMA, ensuring you're always in the best position to profit. No more trading on hype and watching
                        your assets sink.</p>
                </div>
                <div class="flex flex-col justify-center items-center order-2 lg:order-2">
                    <img src="{{ Vite::asset('resources/images/key-features-1.png') }}" class="w-full max-w-lg">
                </div>
                <div class="flex flex-col justify-center items-center order-4 lg:order-3">
                    <img src="{{ Vite::asset('resources/images/key-features-2.png') }}" class="w-full max-w-lg max-lg:-mt-8">
                </div>
                <div class="flex flex-col justify-center order-3 lg:order-4 max-lg:mt-10">
                    <img src="{{ Vite::asset('resources/images/key-features-icon-2.svg') }}" class="w-8">
                    <h2 class="text-white text-3xl font-medium mt-6">Trade Overview Dashboard</h2>
                    <p class="text-white text-lg font-medium mt-3">
                        Always stay one step ahead with a real-time dashboard showing your active and past trades, PnL,
                        profit targets, and limit-buy conditions. No more losing track of your positions or guessing where
                        your trades stand.
                    </p>
                </div>
                <div class="flex flex-col justify-center order-5 lg:order-5 max-lg:-mt-4">
                    <img src="{{ Vite::asset('resources/images/key-features-icon-3.svg') }}" class="w-8">
                    <h2 class="text-white text-3xl font-medium mt-6">Zero Configuration</h2>
                    <p class="text-white text-lg font-medium mt-3">
                        Start trading instantly with zero setup. Just connect your API keys, and the platform handles
                        everything automatically—placing trades, managing risk, and securing profits while you relax. No
                        more missed opportunities because you didn't configure a trade in time.
                    </p>
                </div>
                <div class="flex flex-col justify-center items-center order-6 lg:order-6">
                    <img src="{{ Vite::asset('resources/images/key-features-3.png') }}" class="w-full max-w-lg max-lg:mt-4">
                </div>
                <div class="flex flex-col justify-center items-center order-8 lg:order-7">
                    <img src="{{ Vite::asset('resources/images/key-features-4.png') }}" class="w-full max-w-lg">
                </div>
                <div class="flex flex-col justify-center order-7 lg:order-8">
                    <img src="{{ Vite::asset('resources/images/key-features-icon-4.svg') }}" class="w-8">
                    <h2 class="text-white text-3xl font-medium mt-6">PnL-Based Safety Mechanism</h2>
                    <p class="text-white text-lg font-medium mt-3">
                        Protect your capital with our PnL-based safety feature.
                        If your unrealized PnL drops below a threshold, the system halts new trades until the negative PnL
                        improves. No more overexposure during market downturns that could deepen your losses.
                    </p>
                </div>
                <div class="flex flex-col justify-center order-9 lg:order-9">
                    <img src="{{ Vite::asset('resources/images/key-features-icon-5.svg') }}" class="w-8">
                    <h2 class="text-white text-3xl font-medium mt-6">Daily PnL Notifications</h2>
                    <p class="text-white text-lg font-medium mt-3">
                        Stay informed and in control with daily PnL notifications. Get detailed reports on your portfolio's
                        performance delivered at midnight (UTC), so you know exactly where you stand. No more waking up to
                        unpleasant surprises after a volatile night.
                    </p>
                </div>
                <div class="flex flex-col justify-center items-center order-10 lg:order-10">
                    <img src="{{ Vite::asset('resources/images/key-features-5.png') }}" class="w-full max-w-lg pt-8 lg:pt-16">
                </div>
                <div class="flex flex-col justify-center items-center order-12 lg:order-11">
                    <img src="{{ Vite::asset('resources/images/key-features-6.png') }}" class="w-full max-w-lg">
                </div>
                <div class="flex flex-col justify-center order-11 lg:order-12 max-lg:mt-4">
                    <img src="{{ Vite::asset('resources/images/key-features-icon-6.svg') }}" class="w-8">
                    <h2 class="text-white text-3xl font-medium mt-6">Trade Amount De-leverage</h2>
                    <p class="text-white text-lg font-medium mt-3">
                        Avoid costly trade cancellations. Before executing, the
                        platform checks your trade amount and automatically adjusts leverage to keep you within safe limits.
                        No more trades failing because your leverage was too high for your balance.
                    </p>
                </div>
            </div>
        </div>


        <div class="relative w-full mx-auto max-w-7xl px-6 lg:px-8 py-16 overflow-hidden" id="faq">
            <h2 class="text-white font-medium text-center text-5xl">
                Your Questions
            </h2>

            <div class="space-y-6 max-w-3xl mx-auto mt-10">
                <x-faq-question question="How secure is my data and API keys?" answer="We take security seriously. All your personal data and API keys are fully encrypted, ensuring that even in the unlikely event of a breach, your sensitive information remains protected."/>
                <x-faq-question question="Can I customize the trading strategy or settings?" answer="TBD..."/>
            </div>
        </div>

        <div class="relative mt-16">

            <picture>
                <source srcset="{{ Vite::asset('resources/images/footer-background-mobile.svg') }}" media="(max-width: 1200px)">

                <img src="{{ Vite::asset('resources/images/footer-background.svg') }}" class="absolute left-0 right-0 bottom-0 w-full -z-10">
            </picture>
            <div class="relative w-full mx-auto max-w-7xl px-6 lg:px-8 pb-16 overflow-hidden">
                <img src="{{ Vite::asset('resources/images/icon-6.svg') }}" class="w-14 h-14 mx-auto">
                <h2 class="text-white font-medium text-center text-5xl mt-10 mx-auto">
                    Get started today!
                </h2>

                <button type="button"
                    class="mx-auto mt-8 flex space-x-1.5 items-center rounded-full bg-white pl-4 pr-2.5 py-2.5 text-base font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-200">
                    <span>Get started today!</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </button>


                <footer class="mt-32">
                    <div class="hidden sm:flex sm:items-center sm:justify-center sm:space-x-2">
                        <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                        <a href="#why"
                            class="inline-flex items-center py-2 px-3 text-sm font-medium text-white border border-[#3F6FDC] hover:bg-[#3F6FDC] rounded-full">Why?</a>
                        <a href="#innovation"
                            class="inline-flex items-center py-2 px-3 text-sm font-medium text-white border border-[#3F6FDC] hover:bg-[#3F6FDC] rounded-full">Innovation</a>
                        <a href="#algorithm"
                            class="inline-flex items-center py-2 px-3 text-sm font-medium text-white border border-[#3F6FDC] hover:bg-[#3F6FDC] rounded-full">Algorithm</a>
                        <a href="#faq"
                            class="inline-flex items-center py-2 px-3 text-sm font-medium text-white border border-[#3F6FDC] hover:bg-[#3F6FDC] rounded-full">FAQ</a>
                    </div>

                    <div
                        class="text-center sm:text-left flex flex-col sm:flex-row justify-between items-center mt-8 lg:mt-32 gap-2 pb-16 sm:pb-0">
                        <p class="text-white opacity-50">
                            ©2024 Nidavellir.
                        </p>

                        <ul class="flex gap-4 items-center justify-center">
                            <li><a class="text-white opacity-50 hover:opacity-80" href="#">Terms of Use</a></li>
                            <li><a class="text-white opacity-50 hover:opacity-80" href="#">Privacy Policy</a></li>
                            <li><a class="text-white opacity-50 hover:opacity-80" href="#">Cookies</a></li>
                        </ul>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
