{{-- <div>

    <script>

        document.addEventListener('livewire:initialized' , function(){
            let component = @this;

            // component.logHello();

            component.logHello('hello youtube').then(function(res) {
                console.log(res);
            });

            // console.log(component.title);

            // component.title = "twitter";  //similar to wire:modal

            // component.set('title' , 'live update') ; //wire:modal.live

            // component.set('title' , 'live update' , false) ; //wire:modal.live to disable it
        })

    </script>

</div> --}}





{{-- New code --}}

<div>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
    <div wire:ignore id='calendar'></div>

    <script>
        document.addEventListener('livewire:initialized', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                timeZone: 'UTC',
                editable: true,
                selectable: true,
                events: @json($events),
                select: function(data) {
                    var event_name = prompt('Event Name:');
                    if (!event_name) {
                        return;
                    }
                    @this.newEvent(event_name, data.start.toISOString(), data.end.toISOString())
                        .then(
                            function(id) {
                                calendar.addEvent({
                                    id: id,
                                    title: event_name,
                                    start: data.startStr,
                                    end: data.endStr,
                                });
                                calendar.unselect();
                            });
                },
                eventDrop: function(data) {
                    console.log(data.event.id)
                    @this.updateEvent(
                        data.event.id,
                        data.event.name,
                        data.event.start.toISOString(),
                        data.event.end.toISOString()).then(function() {
                        alert('moved event');
                    })
                },
            });
            calendar.render();
        });
    </script>
</div>