@props(['question', 'answer'])


<div class="collapsible collapsed">
    <h3>{{ $question }}</h3>
    <p style="display: none;">{{ $answer }}</p>

    <div class="open-close-icon">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </div>
</div>