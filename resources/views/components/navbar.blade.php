 {{-- For Desktop Responsive --}}
 <nav class="border shadow-lg border-slate-200 sticky top-0 bg-white z-50 flex-row p-4 hidden md:flex items-center justify-between h-24 w-full"
     aria-label="navbar-desktop">
     <a href="/">
         <div class="flex items-center justify-center">
             <img src="../assets/logo.png" class="w-12 h-12" width="100" height="100" alt="">
             <h1 class="text-2xl font-bold text-custom-blue">RS DR EUIS</h1>
         </div>
     </a>
     <div class="flex flex-row items-center justify-center gap-x-12">
         <div class="flex">
             <a href="/"
                 class="text-center items-center flex hover:text-custom-blue font-semibold flex-col">Home</a>
         </div>
         <div class="flex">
             <a href="/jadwal-dokter"
                 class="text-center items-center flex hover:text-custom-blue font-semibold flex-col">Jadwal
                 Dokter</a>
         </div>
         {{-- <div class="flex">
             <a href="/buat-janji"
                 class="text-center items-center flex hover:text-custom-blue font-semibold flex-col">Buat
                 Janji</a>
         </div> --}}
         <div class="flex">
             <a href="/promo"
                 class="text-center items-center flex hover:text-custom-blue font-semibold flex-col">Promo</a>
         </div>
         <div class="flex">
             <a href="/berita"
                 class="text-center items-center flex hover:text-custom-blue font-semibold flex-col">Berita</a>
         </div>
     </div>
 </nav>


 {{-- For Mobile Responsive --}}
 <nav class=" md:hidden w-full flex flex-col items-center md:static justify-between h-24 relative"
     aria-label="footer-mobile">
     <div class="flex absolute top-0 flex-row items-center justify-between w-full bg-custom-blue h-20">
         <a href="/">
             <div class="flex items-center justify-center p-4">
                 <img src="../assets/logo.png" class="w-12 h-12" width="100" height="100" alt="Logo" />

                 <h1 class="text-2xl font-bold text-white">RS DR EUIS</h1>
             </div>
         </a>
     </div>
 </nav>
