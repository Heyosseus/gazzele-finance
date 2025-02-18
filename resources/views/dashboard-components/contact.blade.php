<div id="contact_us" class="flex flex-col  lg:flex-row justify-around bg-white px-4 lg:px-20 py-5 mb-20 mt-6 lg:mt-16">
    <div class="px-8 lg:px-5 ">
        <h1 class="uppercase tracking-wide text-center lg:text-start">{{__('dashboard.connect')}}</h1>
        <div class="w-16 m-auto lg:m-1 lg:w-1/6 h-[1px] bg-pink-950 "></div>
        <h1 class="text-4xl font-bold text-pink-950 tracking-wide mt-10">{{__('dashboard.turning_dreams')}}</h1>

        <form action="{{route('contact.store')}}" method="post">
            @csrf
            <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4 mt-10">
                <div class="flex flex-col w-full lg:w-1/2">
                    <label for="name" class="text-sm text-pink-950 font-bold mb-1">{{__('dashboard.name')}}</label>
                    <input type="text" name="name" id="name" class="border border-gray-300 p-3 rounded-md"
                           placeholder="{{__('dashboard.enter_name')}}">
                </div>
                <div class="flex flex-col w-full lg:w-1/2">
                    <label for="email" class="text-sm text-pink-950 font-bold mb-1">{{__('dashboard.email')}}</label>
                    <input type="email" name="email" id="email" class="border border-gray-300 p-3 rounded-md"
                           placeholder="{{__('dashboard.enter_email')}}">
                </div>
            </div>
            <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4 mt-10">
                <div class="flex flex-col w-full lg:w-1/2">
                    <label for="company" class="text-sm text-pink-950 font-bold mb-1">{{__('dashboard.company')}}</label>
                    <input type="text" name="company" id="company" class="border border-gray-300 p-3 rounded-md"
                           placeholder="{{__('dashboard.enter_company')}}">
                </div>
                <div class="flex flex-col w-full lg:w-1/2">
                    <label for="text" class="text-sm text-pink-950 font-bold mb-1">{{__('dashboard.subject')}}</label>
                    <input type="text" name="text" id="text" class="border border-gray-300 p-3 rounded-md"
                           placeholder="{{__('dashboard.enter_subject')}}">
                </div>

            </div>

            <button
                type="submit"
                class="group flex items-center space-x-2 rounded-full px-5 py-2 border border-pink-950 text-pink-950 hover:bg-pink-950 hover:text-white mt-10">
                <span>{{__('dashboard.send')}}</span>
            </button>

        </form>

    </div>

    <div class="px-6 relative ">
        <h1 class="uppercase tracking-wide mt-10 text-center lg:text-start lg:mt-0">{{__('dashboard.contact')}}</h1>
        <div class="w-16 m-auto lg:m-1 lg:w-1/3 h-[1px] bg-pink-950 "></div>
        <div class="mt-10 sm:flex sm:flex-row items-center sm:justify-around lg:flex-col lg:items-start ">
            <h1 class="text-4xl">{{__('dashboard.our')}} <span class="font-bold text-pink-950 ">{{__('dashboard.email')}}</span></h1>
            <div class="mt-6 ">
                <span>{{__('dashboard.for_georgia')}}:</span>
                <div>
                    <a href="mailto:admin@gazellefinance.com" class="font-bold text-pink-950 text-lg">admin@gazellefinance.com </a>
                </div>
                <div class="mt-6">
                    <span>{{__('dashboard.for_armenia')}}:</span>
                    <div><a href="mailto:armenia@gazellefinance.com" class="font-bold text-pink-950 text-lg">armenia@gazellefinance.com </a></div>
                </div>

                <div class="flex space-x-4 mt-10">
                    <a href="https://www.facebook.com/GazelleFinance/">
                        <img src="{{asset('icons/facebookIcon.svg')}}"
                             alt="" width="40" class="rounded-full">
                    </a>

                    <a href="https://twitter.com/GazelleFinance">
                        <img src="{{asset('icons/twitterIcon.svg')}}" alt=""
                             width="40" class="rounded-full"></a>

                    <a href="https://www.linkedin.com/company/gazelle-finance">
                        <img src="{{asset('icons/linkedinIcon.svg')}}" alt="" width="40" class="rounded-full">
                    </a>
                </div>

            </div>
            <img src="{{ asset('assets/contact.png') }}" alt="photo"  class="hidden xl:block absolute z-0 right-[-75px] 2xl:right-[-150px] bottom-10 rotate-[-20deg]" >

        </div>
    </div>
</div>
