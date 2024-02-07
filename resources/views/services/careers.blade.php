<x-layout>
    <x-header>
    </x-header>
    <div class="p-6 lg:p-20">
        <h1 class="text-4xl text-pink-950 font-bold">Careers</h1>
        <div class="w-20 h-0.5 bg-black mt-4"></div>

        <div class="p-10 mt-10 bg-gray-900">
            <p class="text-white font-bold text-2xl text-center">No open vacancies right now</p>
        </div>

        <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center w-full space-x-5 mt-20">
            <div class="lg:w-1/3">
                <h1 class="uppercase tracking-wide text-3xl mt-10 text-center lg:text-start lg:mt-0">contact us</h1>
                <p class="mt-10 text-center lg:text-start">If you are interested in working with us, please send us your   <span class="font-bold">CV</span> </p>
            </div>
            <form action="" class="lg:w-1/2">
                <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4 mt-10">
                    <div class="flex flex-col w-full lg:w-1/2">
                        <label for="name" class="text-sm text-pink-950 font-bold mb-1">Name <span class="text-red-700">*</span></label>
                        <input type="text" name="name" id="name" class="border border-gray-300 p-3 rounded-md"
                               placeholder="Enter your name">
                    </div>
                    <div class="flex flex-col w-full lg:w-1/2">
                        <label for="email" class="text-sm text-pink-950 font-bold mb-1">Email <span class="text-red-700">*</span></label>
                        <input type="email" name="email" id="email" class="border border-gray-300 p-3 rounded-md"
                               placeholder="Enter your email">
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4 mt-10">
                    <div class="flex flex-col w-full lg:w-1/2">
                        <label for="position" class="text-sm text-pink-950 font-bold mb-1">Position <span class="text-red-700">*</span></label>
                        <input type="text" name="position" id="position" class="border border-gray-300 p-3 rounded-md"
                               placeholder="Enter your position">
                    </div>
                    <div class="flex flex-col w-full lg:w-1/2">
                        <label for="file" class="text-sm text-pink-950 font-bold mb-1">Upload CV <span class="text-red-700">*</span></label>
                        <input type="file" name="file" id="file" class="border border-gray-300 p-3 rounded-md">
                    </div>

                </div>

                <button
                    class="group flex items-center space-x-2 rounded-full px-5 py-2 border border-pink-950 text-pink-950 hover:bg-pink-950 hover:text-white mt-10">
                    <span>Send</span>
                </button>

            </form>
        </div>

    </div>

    <x-footer></x-footer>
</x-layout>
