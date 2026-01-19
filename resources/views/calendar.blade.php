@extends('layout') 

@section('content')
{{-- HERO SECTION --}}
<section class="relative h-[55vh] flex items-center justify-center overflow-hidden">
    {{-- Background Image dengan Overlay --}}
    <div class="absolute inset-0 z-0">
        @if(isset($blogs[0]))
            <img src="{{ $blogs[2]->thumbnail }}" class="grayscale w-full h-full object-cover" alt="Blogs HMJ Teknologi Informasi PNB">
        @endif
        <div class="absolute inset-0 bg-gradient-to-tr from-blue-900/80 via-blue-800/60 to-transparent z-10"></div>
    </div>

    {{-- Hero Content --}}
    <div class="relative text-center px-6 lg:px-28 z-20 mt-12">
        <span class="px-4 py-1 bg-blue-600 text-white text-xs md:text-md font-semibold rounded-xl uppercase tracking-wider">
            Kalender Kegiatan
        </span>
        <h1 class="text-4xl lg:text-6xl font-bold text-white my-2 leading-tight max-w-4xl">
            HMJ Teknologi Informasi
        </h1> 
        <p class="text-white text-sm md:text-base lg:text-lg">Kalender kegiatan HMJ Teknologi Informasi Politeknik Negeri Bali.</p>
    </div>
</section>
 
<section id="calendar" class="relative pt-12 pb-6 lg:pt-16 lg:pb-10 px-4 md:px-8 lg:px-20 overflow-x-hidden"> 

 
    <div class="relative z-10 max-w-7xl mx-auto"> 
        <div class="bg-white rounded-3xl shadow-xl p-4 md:p-6 border border-gray-100">
            <div id="calendar"></div>
        </div>
    </div>
</section> 

@endsection  

<style> 
    :root {
        --fc-border-color: #e5e7eb;
        --fc-button-text-color: #fff;
        --fc-button-bg-color: #2563eb;
        --fc-button-border-color: #2563eb;
        --fc-button-hover-bg-color: #1d4ed8;
        --fc-button-hover-border-color: #1d4ed8;
        --fc-button-active-bg-color: #1e40af;
        --fc-button-active-border-color: #1e40af;
        --fc-event-bg-color: #3b82f6;
        --fc-event-border-color: #3b82f6;
        --fc-today-bg-color: rgba(37, 99, 235, 0.05);
    }

    .fc {
        font-family: 'Poppins', sans-serif;
    }

    .fc-button-group {
        display: flex;
        gap: 0.5rem;
    }

    .fc-button-group > .fc-button {
        margin: 0 !important;
        border-radius: 0.5rem !important;
    }

    .fc-toolbar-title {
        font-size: 1.5rem !important;
        font-weight: 700;
        color: #1f2937;
    }

    .fc-col-header-cell-cushion {
        padding-top: 1rem;
        padding-bottom: 1rem;
        font-weight: 600;
        color: #4b5563;
        text-transform: uppercase;
        font-size: 0.875rem;
        letter-spacing: 0.05em;
    }

    .fc-daygrid-day-number {
        font-weight: 500;
        color: #374151;
        padding: 0.5rem 0.75rem !important; 
    }

    .fc-event {
        cursor: pointer;
        border: none !important;
        padding: 2px 4px;
        font-size: 0.85rem;
        border-radius: 4px;
        transition: all 0.2s;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }

    .fc-event:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        filter: brightness(0.95);
    }

    /* Force Blue Buttons */
    .fc .fc-button-primary {
        background-color: #2563eb !important;
        border-color: #2563eb !important;
        color: #ffffff !important;
    }

    .fc .fc-button-primary:hover {
        background-color: #1d4ed8 !important;
        border-color: #1d4ed8 !important;
    }

    .fc .fc-button-primary:not(:disabled).fc-button-active, 
    .fc .fc-button-primary:not(:disabled):active {
        background-color: #1e40af !important;
        border-color: #1e40af !important;
    }

    /* Fix Today Highlight Color */
    .fc .fc-day-today {
        background-color: rgba(37, 99, 235, 0.05) !important;
    }
    .fc .fc-day-today .fc-daygrid-day-number {
        color: #2563eb !important;
        font-weight: 700 !important;
    }

    .fc .fc-button {
        border-radius: 0.5rem !important;
        font-weight: 500 !important;
        padding: 0.5rem 1rem !important;
        text-transform: capitalize;
        transition: all 0.2s !important;
    }

    .fc .fc-button:focus {
        box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.5) !important;
    }

    /* Modal Styling */
    .fc-popover {
        border-radius: 1rem !important;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
        border: 1px solid #f3f4f6 !important;
    }
    
    .fc-popover-header {
        background: #f9fafb !important;
        border-bottom: 1px solid #e5e7eb !important;
        border-top-left-radius: 1rem !important;
        border-top-right-radius: 1rem !important;
        padding: 0.75rem 1rem !important;
    }
</style> 

@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var events = @json($events);

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'id',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,dayGridWeek'
                },
                buttonText: {
                    today: 'Hari Ini',
                    month: 'Bulan',
                    week: 'Minggu', 
                },
                themeSystem: 'standard',
                events: events,
                height: 'auto',
                eventClick: function(info) { 
                },
                eventContent: function(arg) {
                    return {
                        html: `
                            <div class="fc-content overflow-hidden text-ellipsis whitespace-nowrap">
                                <span class="font-semibold">${arg.event.title}</span>
                            </div>
                        `
                    };
                }
            });

            calendar.render();
        });
    </script> 
@endpush