<footer class="p-4 md:p-8 lg:p-10 font-sans">
    <div class="mx-auto max-w-screen-xl text-center">
        <a href="#" class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
            <img src="{{asset('promote/./img/logo.png')}}" class="h-20" alt="Smalldog Milk Tea" />
            Smalldog Milk Tea
        </a>
        <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white">
            <li>
                <a href="{{ route('promote.index') }}" class="mr-4 hover:underline md:mr-6">หน้าหลัก</a>
            </li>
            <li>
                <a href="{{ route('promote.menu') }}" class="mr-4 hover:underline md:mr-6">เมนู</a>
            </li>
            <li>
                <a href="{{ route('promote.contact') }}" class="mr-4 hover:underline md:mr-6">ติดต่อ</a>
            </li>

        </ul>
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="index.html"
                class="hover:underline">Smalldog Milk Tea</a>. All Rights Reserved.</span>
    </div>
</footer>

<script src="https://cdn.tailwindcss.com"></script>
<script src="{{ asset('promote/cart.js')}}"></script>
<script src="{{ asset('promote/tail.js')}}"></script>
<script src="{{asset('promote/js/products copy.js')}}"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
