<x-layout.auth>

    <div x-data="auth">
        <div
            class="relative flex min-h-screen items-center justify-center bg-[#B39359] px-6 py-10 dark:bg-[#060818] sm:px-16">
          
            <x-common.success-message />
            <x-common.error-message />
            <div
                class="relative w-full max-w-[870px] rounded-md bg-[#0B2C3D]">
                <div
                    class="relative flex flex-col justify-center rounded-md bg-[#0B2C3D] backdrop-blur-lg dark:bg-black/50 px-6 lg:min-h-[758px] py-20">
                    
                    <div class="mx-auto w-full max-w-[440px]">
                        <div class="mb-1 text-center flex justify-center items-center flex-col">
                            <img class="w-40 h-40 mb-10" src="/assets/images/resend.svg" alt="resend_email">
                            <h1 class="mb-3 text-2xl font-bold text-slate-50 !leading-snug dark:text-white">Verify Account</h1>
                            <p class="text-slate-300">Your account is not verified. Please verify your account first</p>
                        </div>
                        <div class="space-y-5">
                            <a href="{{ route('resend.email') }}"
                                class="btn btn-gradient !mt-6 w-full border-0 uppercase shadow-primary">Resend
                                verification email</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // main section
        document.addEventListener('alpine:init', () => {
            Alpine.data('auth', () => ({
                languages: [{
                        id: 1,
                        key: 'Chinese',
                        value: 'zh',
                    },
                    {
                        id: 2,
                        key: 'Danish',
                        value: 'da',
                    },
                    {
                        id: 3,
                        key: 'English',
                        value: 'en',
                    },
                    {
                        id: 4,
                        key: 'French',
                        value: 'fr',
                    },
                    {
                        id: 5,
                        key: 'German',
                        value: 'de',
                    },
                    {
                        id: 6,
                        key: 'Greek',
                        value: 'el',
                    },
                    {
                        id: 7,
                        key: 'Hungarian',
                        value: 'hu',
                    },
                    {
                        id: 8,
                        key: 'Italian',
                        value: 'it',
                    },
                    {
                        id: 9,
                        key: 'Japanese',
                        value: 'ja',
                    },
                    {
                        id: 10,
                        key: 'Polish',
                        value: 'pl',
                    },
                    {
                        id: 11,
                        key: 'Portuguese',
                        value: 'pt',
                    },
                    {
                        id: 12,
                        key: 'Russian',
                        value: 'ru',
                    },
                    {
                        id: 13,
                        key: 'Spanish',
                        value: 'es',
                    },
                    {
                        id: 14,
                        key: 'Swedish',
                        value: 'sv',
                    },
                    {
                        id: 15,
                        key: 'Turkish',
                        value: 'tr',
                    },
                    {
                        id: 16,
                        key: 'Arabic',
                        value: 'ae',
                    },
                ],
            }));
        });
    </script>

</x-layout.auth>
