<li>
    <label for="{{ $label }}Checkbox"
        class="flex cursor-pointer items-center gap-2 p-3 text-sm font-medium text-slate-700 [&:has(input:checked)]:text-black [&:has(input:disabled)]:cursor-not-allowed [&:has(input:disabled)]:opacity-75">
        <div class="relative flex items-center">
            <input id="{{ $label }}Checkbox" type="checkbox"
                class="before:content[''] peer relative size-4 cursor-pointer appearance-none overflow-hidden rounded border border-slate-300 bg-slate-100 before:absolute before:inset-0 checked:border-blue-700 checked:before:bg-blue-700 focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-slate-800 checked:focus:outline-blue-700 active:outline-offset-0 disabled:cursor-not-allowed "
                value="{{ $label }}" />
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor"
                fill="none" stroke-width="4"
                class="pointer-events-none invisible absolute left-1/2 top-1/2 size-3 -translate-x-1/2 -translate-y-1/2 text-slate-100 peer-checked:visible">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
        </div>
        <span>{{ $label }}</span>
    </label>
</li>
