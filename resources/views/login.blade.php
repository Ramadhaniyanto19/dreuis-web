<x-layout-dashboard>
    <div class="flex flex-col items-center justify-center h-screen w-full">
        <img src="{{ asset('assets/bg-login.jpg') }}" class="bg-cover rounded-top absolute w-full h-screen -z-40"
            alt="" />

        <div class="flex flex-col bg-transparent shadow-xl border w-96 h-auto pb-5 rounded-xl z-50">
            <div class="flex mt-4 items-center justify-center">
                <h1 class="text-3xl font-bold text-custom-blue">Login</h1>
            </div>
            <div class="flex flex-col px-4 mt-6">
                <form action="" class="gap-y-4 flex flex-col">
                    <div class="flex flex-col w-full gap-y-2">
                        <label for="email">Email<span class="text-red-500 font-bold text-sm">*</span></label>
                        <input type="email" class="rounded-xl ring-0 border-slate-300" placeholder="Masukan email"
                            required>
                    </div>
                    <div class="flex flex-col w-full gap-y-2">
                        <label for="password">Password<span class="text-red-500 font-bold text-sm">*</span></label>
                        <input type="password" class="rounded-xl ring-0 border-slate-300" placeholder="Masukan password"
                            required>
                    </div>
                    <button
                        class="bg-custom-blue mt-4 hover:bg-custom-green text-white font-bold w-full h-12 rounded-xl">Login</button>
                </form>
            </div>
        </div>
    </div>
</x-layout-dashboard>
