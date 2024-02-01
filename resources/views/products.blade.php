<x-layout>
    <x-header></x-header>
    <div class="flex flex-col items-center justify-around">
        <div class="p-20 mt-10">
            <h1 class="text-3xl text-center">Our <span class="font-bold text-pink-950">Products</span></h1>
            <div class="w-20 h-px bg-black mx-auto mt-2"></div>
            <p class="w-[800px] leading-6 tracking-wide mt-10 text-center">Our products are similar to private equity
                than bank
                financing, with terms appropriate for gazelles, including risk-sharing,
                performance-based features. Given our higher risk profile, we also expect higher returns.</p>
        </div>
        <div
            class="flex flex-col xl:flex-row items-center xl:items-stretch justify-around w-full space-y-6 lg:space-x-4 ">
            <div class="bg-gray-950 px-20 py-10 w-[800px] rounded-xl shadow-2xl xl:self-end">
                <h1 class="text-white text-2xl text-center">Income Participation Loan (IPL)</h1>
                <p class="text-white text-sm mt-10 text-start leading-8">Repayment schedule tailored to the projected
                    cash flows of the company, and flexible overall term (but
                    typically 5 years)

                    <br>
                    <br>
                    Lower collateral requirements than banks

                    <br>
                    <br>
                    Fixed interest rate comparable to the prevailing market rate

                    <br>
                    <br>
                    As a premium for risk, participation in a percentage of the company’s income for the term of the
                    loan

                    USD denomination</p>
            </div>
            <div class="px-20 py-6 w-[800px] rounded-xl shadow-2xl ">
                <h1 class="text-gray-950 text-2xl text-center">Equity participation</h1>
                <p class="text-gray-950 text-sm mt-10 text-start leading-8">
                    Minority equity stake in the company (typically up to 35%).
                    <br>
                    <br>
                    Pre-agreed share buy-back terms with price typically based on a formula tied to the revenue
                    performance of the company or other growth metric.
                    <br>
                    <br>
                    Patient capital with a pre-agreed buy back that typically takes place in stages over years 3-5 (with
                    full exit in year 5).
                    <br>
                    <br>
                    Unlike traditional private equity, we do not force the sale of your company to a 3rd party.
                </p>
            </div>
        </div>

        <div class="h-screen w-full p-20">

            <h1 class=" text-3xl text-center mt-10">Why <span class="text-pink-950 font-bold">Gazelle Finance?</span>
            </h1>

            <p class="text-gray-950 text-sm mt-10 text-center leading-7 w-full items-center justify-center">
                Our financing and partnership - oriented approach enables entrepreneurs to take their businesses through
                <br>
                the next stage of revenue growth and achieve their full potential.</p>


            <div class="flex flex-col space-y-4  mr-auto  w-52  mt-10  cursor-pointer">
                <h1 class="my-10">Is <span class="text-pink-950 font-semibold">Gazelle Finance</span>  a good fit for my company?</h1>
                <div class="p-5 border border-gray-950 text-center flex justify-between ">
                    Revenue
                    <img src="{{asset('icons/longRightArrow.svg')}}" alt="" width="15">
                </div>
                <div class="p-5 border border-gray-950 text-center flex justify-between">
                    Track Record
                    <img src="{{asset('icons/longRightArrow.svg')}}" alt="" width="15">
                </div>
                <div class="p-5 border border-gray-950 text-center flex justify-between">
                    Business Plan
                    <img src="{{asset('icons/longRightArrow.svg')}}" alt="" width="15">
                </div>
                <div class="p-5 border border-gray-950 text-center flex justify-between">
                    Team
                    <img src="{{asset('icons/longRightArrow.svg')}}" alt="" width="15">
                </div>
                <div class="p-5 border border-gray-950 text-center flex justify-between">
                    Standards
                    <img src="{{asset('icons/longRightArrow.svg')}}" alt="" width="15">
                </div>
            </div>
        </div>
    </div>

</x-layout>