<nav class="flex items-center justify-between px-4 py-3 bg-gray-800">
    <div class="flex items-center ">
        <a href="#" class="text-xl font-bold text-white">
            My Website
        </a>
        <button class="block px-3 py-1 ml-4 text-teal-200 rounded lg:hidden focus:outline-none focus:text-white" id="nav-toggle">
            <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </button>
    </div>
    <div class="hidden w-full mt-2 lg:flex lg:items-center lg:w-auto lg:mt-0" id="nav-content">
        <div class="text-sm lg:flex-grow">
            <a href="/" class="block mt-4 mr-4 text-teal-200 lg:inline-block lg:mt-0 hover:text-white">
                Home
            </a>
            <a href="/blog" class="block mt-4 mr-4 text-teal-200 lg:inline-block lg:mt-0 hover:text-white">
                Blog
            </a>
            <a href="/about" class="block mt-4 mr-4 text-teal-200 lg:inline-block lg:mt-0 hover:text-white">
                About
            </a>
        </div>
        <div>
            <a href="#"
                class="inline-block px-4 py-2 mt-4 text-sm leading-none text-white border border-white rounded hover:border-transparent hover:text-teal-500 hover:bg-white lg:mt-0">
                Download
            </a>
        </div>
    </div>
</nav>

<script>
    document.getElementById('nav-toggle').onclick = function() {
        document.getElementById('nav-content').classList.toggle('hidden');
    }
</script>
