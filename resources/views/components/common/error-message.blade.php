@if ($errors->any())
<div x-data="{ open: true }" x-show="open" class="flex items-center p-3.5 rounded text-danger bg-danger-light dark:bg-danger-dark-light">
    <span class="ltr:pr-2 rtl:pl-2"><strong class="ltr:mr-1 rtl:ml-1">Danger!</strong>{{ $errors->first() }}</span>
    <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80" @click="open = false">
        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
            stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
    </button>
</div>
@endif