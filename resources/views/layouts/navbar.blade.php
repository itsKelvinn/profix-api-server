<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center h-16 justify-between">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="#" class="text-xl font-bold text-blue-600">Profix</a>
            </div>

            <!-- Navbar Links (Desktop) -->
            <div class="hidden md:flex space-x-4 ml-10">
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                        Log out
                    </button>
                </form>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="menu-button" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center">
                    ☰ Menu
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu (Hidden by Default) -->
    <div id="mobile-menu" class="md:hidden hidden px-2 pt-2 pb-3 space-y-2 bg-white shadow-md">
        <form action="{{ route('auth.logout') }}" method="POST">
            @csrf
            <button type="submit" class="w-full text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                Log out
            </button>
        </form>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let menuButton = document.getElementById("menu-button");
        let mobileMenu = document.getElementById("mobile-menu");

        if (menuButton && mobileMenu) { 
            menuButton.addEventListener("click", function () {
                mobileMenu.classList.toggle("hidden");
            });
        }
    });
</script>
