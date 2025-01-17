<x-layout-login>
    <div class="flex flex-col items-center justify-center h-screen w-full">
        <img src="{{ asset('assets/bg-login.jpg') }}" class="bg-cover rounded-top absolute w-full h-screen -z-40"
            alt="" />

        <div class="flex flex-col bg-white md:bg-transparent shadow-xl border md:w-96 w-80 h-auto pb-5 rounded-xl z-50">
            <div class="flex mt-4 items-center justify-center">
                <h1 class="text-3xl font-bold text-custom-blue">Login</h1>
            </div>
            <div class="flex flex-col px-4 mt-6">
                <form action="" class="gap-y-4 flex flex-col">
                    <!-- Input Email -->
                    <div class="flex flex-col w-full gap-y-2">
                        <label for="email">Email<span class="text-red-500 font-bold text-sm ">*</span></label>
                        <input type="email" class="rounded-xl ring-0 border-slate-300" placeholder="Masukan email"
                            required>
                    </div>

                    <!-- Input Password -->
                    <div class="flex flex-col w-full gap-y-2 relative">
                        <label for="password">Password<span class="text-red-500 font-bold text-sm">*</span></label>
                        <div class="relative">
                            <input type="password" id="password"
                                class="rounded-xl ring-0 border-slate-300 w-full pr-10" placeholder="Masukan password"
                                required>
                            <!-- Icon Mata -->
                            <span onclick="togglePassword()"
                                class="absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer">
                                <x-bx-show id="showIcon" class="w-6 h-6 text-slate-400" />
                                <x-bx-hide id="hideIcon" class="w-6 h-6 text-slate-400" />
                            </span>
                        </div>
                    </div>

                    <!-- Tombol Login -->
                    <button
                        class="bg-custom-blue mt-4 hover:bg-custom-green text-white font-bold w-full h-12 rounded-xl">Login</button>
                </form>
            </div>
        </div>
    </div>
</x-layout-login>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const showIcon = document.getElementById('showIcon');
        const hideIcon = document.getElementById('hideIcon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            showIcon.classList.add('hidden');
            hideIcon.classList.remove('hidden');
        } else {
            passwordInput.type = 'password';
            showIcon.classList.remove('hidden');
            hideIcon.classList.add('hidden');
        }
    }
</script>
