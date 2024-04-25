@if (session('success'))
    <div id="successMessage" class="absolute bottom-2 right-2 m-4 z-20 hidden">
        <div class="flex items-center p-3.5 rounded text-success bg-success-light dark:bg-success-dark-light">
            <span class="ltr:pr-2 rtl:pl-2"><strong class="ltr:mr-1 rtl:ml-1">Success!</strong>{{ session('success') }}</span>
        </div>
    </div>
@endif


<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Show success message with animation
        const successMessage = document.getElementById('successMessage');
        successMessage.classList.remove('hidden');
        gsap.from(successMessage, { duration: 0.5, opacity: 0, y: -20 });

        // Hide success message after 3 seconds
        setTimeout(function () {
            gsap.to(successMessage, { duration: 0.5, opacity: 0, y: -20, onComplete: function () {
                successMessage.remove();
            }});
        }, 4000); // Duration to display the message
    });
</script>
