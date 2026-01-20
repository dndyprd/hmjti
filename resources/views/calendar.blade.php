@extends('layout') 

@section('content')
{{-- HERO SECTION --}}
<section class="relative h-[55vh] flex items-center justify-center overflow-hidden">
    {{-- Background Image dengan Overlay --}} 
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('img/home.webp') }}" class="grayscale w-full h-full object-cover" alt="HMJ TI PNB">
        <div class="absolute inset-0 bg-gradient-to-tr from-blue-900/80 via-blue-800/60 to-transparent z-10"></div>
    </div>

    {{-- Hero Content --}}
    <div class="relative text-center px-6 lg:px-28 z-20 mt-12">
        <span class="px-4 py-1 bg-blue-600 text-white text-xs md:text-md font-semibold rounded-xl uppercase tracking-wider">
            Kalender Digital
        </span>
        <h1 class="text-4xl lg:text-6xl font-bold text-white my-2 leading-tight max-w-4xl">
            HMJ Teknologi Informasi
        </h1>
        <p class="text-white text-sm md:text-base lg:text-lg">Jadwal Kegiatan HMJ Teknologi Informasi Politeknik Negeri Bali.</p>
    </div>
</section>
 
<section id="calendar" class="relative pt-12 pb-6 lg:pt-16 lg:pb-10 px-4 md:px-16 lg:px-28 overflow-x-hidden"> 
    <div class="relative z-10 max-w-7xl mx-auto"> 
        <div class="bg-white rounded-3xl shadow-xl p-4 md:p-6 border border-gray-100">
            <div id="calendar"></div>
        </div>
    </div>
</section> 



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

    .fc-event-start {
        background-color: #2563eb !important;
        border-color: #2563eb !important;
        color: #ffffff !important;
    }

    /* Force Blue Buttons */

    .fc .fc-button-primary,
    .fc .fc-button {
        background-color: #2563eb !important;
        border-color: #2563eb !important;
        color: #ffffff !important;
    }

    .fc .fc-button-primary:hover,
    .fc .fc-button:hover {
        background-color: #1d4ed8 !important;
        border-color: #1d4ed8 !important;
        color: #ffffff !important;
    }

    .fc .fc-button-primary:not(:disabled).fc-button-active, 
    .fc .fc-button-primary:not(:disabled):active,
    .fc .fc-button:not(:disabled).fc-button-active,
    .fc .fc-button:not(:disabled):active {
        background-color: #1e40af !important;
        border-color: #1e40af !important;
        color: #ffffff !important;
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

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        .fc-header-toolbar {
            flex-direction: column;
            gap: 1rem;
        }

        .fc-toolbar-title {
            font-size: 1.25rem !important;
        }

        .fc .fc-button {
            font-size: 0.75rem !important;
            padding: 0.4rem 0.8rem !important;
        }
    }

    .fc-list {
        min-height: 400px;
    }

    .fc-list-event:hover td {
        background-color: #2563eb !important;
        transition: background-color 0.2s ease;
    }

    .fc-list-event:hover .fc-list-event-title,
    .fc-list-event:hover .fc-list-event-time {
        color: #ffffff !important; 
        font-weight: 500;
    }
    
    .fc-list-day-cushion {
        background-color: #f9fafb !important;
    }

    .fc-list-event-dot {
        border-color: #2563eb !important;
    }
</style> 

{{-- Custom Tooltip Element --}}
<div id="calendar-tooltip" class="hidden absolute z-50 bg-white border border-gray-200 shadow-xl rounded-xl p-4 min-w-[250px] max-w-xs transition-opacity duration-200 pointer-events-none">
    <div class="flex flex-col gap-1">
        <h4 id="tooltip-title" class="font-bold text-gray-900 border-b pb-2 mb-1 border-gray-100"></h4>
        <div class="flex items-start gap-2 text-sm text-gray-600">
            <i class="fa-regular fa-calendar mt-0.5 text-blue-500 w-4 text-center"></i>
            <span id="tooltip-date"></span>
        </div>
        <div class="flex items-start gap-2 text-sm text-gray-600">
            <i class="fa-regular fa-clock mt-0.5 text-blue-500 w-4 text-center"></i>
            <span id="tooltip-time"></span>
        </div>
    </div>
    {{-- Arrow --}}
    <div class="absolute w-3 h-3 bg-white border-r border-b border-gray-200 transform rotate-45 -bottom-1.5 left-1/2 -translate-x-1/2"></div>
</div>

@endsection

@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var tooltipEl = document.getElementById('calendar-tooltip');
            var tooltipTitle = document.getElementById('tooltip-title');
            var tooltipDate = document.getElementById('tooltip-date');
            var tooltipTime = document.getElementById('tooltip-time');
            var events = @json($events);

            const formatDate = (date) => {
                return new Date(date).toLocaleDateString('id-ID', {
                    weekday: 'long', 
                    day: 'numeric', 
                    month: 'long', 
                    year: 'numeric'
                });
            };
            
            const formatTime = (date) => {
                return new Date(date).toLocaleTimeString('id-ID', {
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: false
                }).replace('.', ':') + ' WITA';
            };

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'id',
                firstDay: 1,
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,listWeek'
                },
                buttonText: {
                    today: 'Hari Ini',
                    month: 'Bulan',
                    list: 'Minggu', 
                },
                themeSystem: 'standard',
                events: events,
                height: 'auto',
                noEventsContent: 'Tidak ada event pada minggu ini',
                eventDidMount: function(info) {
                    if (!info.event.backgroundColor || info.event.backgroundColor === '#ffffff' || info.event.backgroundColor === 'transparent') {
                        info.el.style.backgroundColor = '#3b82f6';
                        info.el.style.borderColor = '#3b82f6';
                        info.el.style.color = '#ffffff';
                    }
                },
                eventClick: function(info) {
                },
                eventMouseEnter: function(info) {
                    const event = info.event;
                    const el = info.el;

                    // Populate Data
                    tooltipTitle.innerText = event.title;
                    
                    // Date Logic
                    let dateString = formatDate(event.start);
                    if (event.end) {
                        const startDate = new Date(event.start);
                        const endDate = new Date(event.end);
                        if (startDate.toDateString() !== endDate.toDateString()) {
                            if (startDate.getMonth() === endDate.getMonth() && startDate.getFullYear() === endDate.getFullYear()) {
                                const startDay = startDate.toLocaleDateString('id-ID', { weekday: 'long', day: 'numeric' });
                                const endPart = endDate.toLocaleDateString('id-ID', { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' });
                                dateString = `${startDay} - ${endPart}`;
                            } else {
                                dateString = formatDate(event.start) + ' - ' + formatDate(event.end);
                            }
                        }
                    }
                    tooltipDate.innerText = dateString;

                    // Time Logic
                    let timeString = formatTime(event.start); 
                    if (event.end) {
                         timeString += ' - ' + formatTime(event.end);
                    }
                    tooltipTime.innerText = timeString;

                    // Show Tooltip
                    tooltipEl.classList.remove('hidden');
                    tooltipEl.style.position = 'absolute';
                    tooltipEl.style.transform = 'none';
                    tooltipEl.style.width = 'auto';
                    tooltipEl.style.maxWidth = '300px'; 
                    tooltipEl.style.zIndex = '50';

                    const rect = el.getBoundingClientRect();
                    const tooltipRect = tooltipEl.getBoundingClientRect(); 
                    
                    let top = rect.top + window.scrollY - tooltipRect.height - 10;
                    let left = rect.left + window.scrollX + (rect.width / 2) - (tooltipRect.width / 2);

                    if (left < 10) left = 10;
                    if (left + tooltipRect.width > window.innerWidth - 10) left = window.innerWidth - tooltipRect.width - 10;
                    
                    tooltipEl.style.top = `${top}px`;
                    tooltipEl.style.left = `${left}px`;
                },
                eventMouseLeave: function(info) { 
                    tooltipEl.classList.add('hidden');
                },
                eventContent: function(arg) {
                    return {
                        html: `
                            <div class="fc-content overflow-hidden text-ellipsis whitespace-nowrap px-1">
                                <span class="font-semibold text-xs md:text-sm">${arg.event.title}</span>
                            </div>
                        `
                    };
                }
            });

            calendar.render();
        });
    </script> 
@endpush