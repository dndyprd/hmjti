<x-filament-panels::page>
    <style>
        /* Today Highlight - Blue */
        .fc .fc-day-today {
            background-color: rgba(59, 130, 246, 0.1) !important;
        }
        
        /* Font sizes for Month View */
        .fc-event-title, .fc-event-time {
            font-size: 0.75rem !important; 
            font-weight: 500; 
        }

        .fc .fc-toolbar-title {
            font-size: 1.25rem !important;
            font-weight: 600;
        }
        
        /* List View Styles (Weekly) */
        .fc-list-day-cushion {
            background-color: #f3f4f6 !important; 
        }
        .dark .fc-list-day-cushion {
            background-color: #1f2937 !important; 
        }
        .fc-list-event-title {
            font-size: 0.85rem !important;
        }
 
        .fc-list-event:hover td {
            background-color: #2563eb !important;
            transition: background-color 0.2s ease; 
        }

        .fc-list-event:hover .fc-list-event-title,
        .fc-list-event:hover .fc-list-event-time,
        .fc-list-event:hover .fc-event-title,
        .fc-list-event:hover .fc-event-time {
            color: #ffffff !important; 
            text-decoration: none !important;
        }

        .fc-list-event:hover .fc-list-event-dot {
            border-color: #ffffff !important;
        }

        .fc .fc-button-primary {
            text-transform: capitalize;
            background-color: #f9fafb !important;  
            border-color: #d1d5db !important;  
            color: #374151 !important; 
            font-weight: 500;
        }

        .fc .fc-button-primary:hover {
            background-color: #e5e7eb !important;
            border-color: #d1d5db !important;
            color: #1f2937 !important;
        }

        .fc .fc-button-active {
            background-color: #3b82f6 !important;  
            border-color: #2563eb !important;
            color: white !important;
        }

        /* Dark Mode Fixes */
        .dark .fc .fc-col-header-cell {
            background-color: #191d26ff !important;
        }
        .dark .fc .fc-button-primary {
            background-color: #1f2937 !important;
            border-color: #374151 !important;
            color: #f3f4f6 !important;
        }
        .dark .fc .fc-button-primary:hover {
            background-color: #374151 !important; 
        }
        .dark .fc .fc-button-active {
            background-color: #3b82f6 !important; 
            border-color: #3b82f6 !important;
            color: white !important;
        }
        .dark .fc .fc-toolbar-title, .dark .fc .fc-col-header-cell-cushion {
            color: #f3f4f6 !important;
        }

        /* Responsiveness & Full Height */
        @media (max-width: 640px) {
            .fc .fc-toolbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 0.25rem;
                margin-bottom: 1rem !important;
            }
            .fc .fc-toolbar-title {
                font-size: 0.8rem !important;
            }
            .fc-event-title {
                font-size: 0.6rem !important;
            }
            .fc .fc-button {
                padding: 0.2rem 0.4rem !important;
                font-size: 0.65rem !important;
                min-width: unset !important;
            } 
            .fc-scroller {
                height: auto !important;
                overflow: visible !important;
            }
        }
    </style>
    @livewire(\App\Filament\Widgets\CalendarWidget::class)
</x-filament-panels::page>
