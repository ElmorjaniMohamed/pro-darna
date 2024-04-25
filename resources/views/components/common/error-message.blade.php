@if (session('error'))
    <div id="errorMessage" class="absolute top-0 right-0 m-4 z-20 hidden">
        <div class="flex items-center p-3.5 rounded text-danger bg-danger-light dark:bg-danger-dark-light">
            <span class="ltr:pr-2 rtl:pl-2"><strong class="ltr:mr-1 rtl:ml-1">Error!</strong>{{ session('error') }}</span>
        </div>
    </div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const errorMessage = document.getElementById('errorMessage');
        errorMessage.classList.remove('hidden');
        gsap.from(errorMessage, { duration: 0.5, opacity: 0, y: -20 });

        setTimeout(function () {
            gsap.to(errorMessage, { duration: 0.5, opacity: 0, y: -20, onComplete: function () {
                errorMessage.remove();
            }});
        }, 5000); 
    });
</script>