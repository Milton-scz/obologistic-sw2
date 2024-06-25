<footer class="p-2 md:p-4 rounded-lg shadow bg-gray-600 text-white">
    <div class="sm:flex sm:items-center sm:justify-between">
        <div class="col-md-6 col-lg-3 ml-8">
            <h5 class="text-white mb-4">Contacto</h5>
            <p><i class="fa fa-map-marker-alt me-3"></i>Santa Cruz, Bolivia</p>
            <p>
                <div class="contact-info">
                    <a href="https://wa.me/59176644887" target="_blank" class="text-white hover:text-gray-300">
                        <i class="fab fa-whatsapp"></i>+591 76644887
                    </a>
                </div>
            </p>
            <p><i class="fa fa-envelope me-3"></i>info@tecnosoft.com</p>
        </div>
        <div>
            <ul class="flex flex-col sm:flex-row sm:space-x-4">
                <li><a href="#" @click="open = true" class="hover:underline text-white">Términos y Condiciones</a></li>
                <li><a href="/politica-de-privacidad" class="hover:underline text-white">Política de Privacidad</a></li>
                <li><a href="/contacto" class="hover:underline text-white">Contacto</a></li>
            </ul>
        </div>
    </div>
    <hr class="my-4 border-orange-700 lg:my-6" />
    <span class="block text-sm sm:text-center text-white">&copy; 2024 <a href="https://obologistic.com" target="_blank" class="hover:underline">Obologistic™</a>. All Rights Reserved.</span>

    <!-- Modal -->
    <div x-data="{ open: false }">
        <div x-show="open" class="fixed inset-0 z-50 overflow-auto bg-smoke-800 flex">
            <div @click.away="open = false" class="relative p-8 bg-white w-full max-w-md m-auto flex-col flex rounded-lg">
                <span class="absolute top-0 right-0 p-4">
                    <button @click="open = false" class="text-gray-600 hover:text-gray-800">&times;</button>
                </span>
                <h2 class="text-2xl font-bold mb-4">Términos y Condiciones</h2>
                <p class="mb-4">Aquí van los términos y condiciones...</p>
                <button @click="open = false" class="bg-orange-600 text-white px-4 py-2 rounded hover:bg-orange-700">Cerrar</button>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.3/dist/cdn.min.js" defer></script>
