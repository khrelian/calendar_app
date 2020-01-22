<script>
    document.addEventListener('DOMContentLoaded', function() {

        $('#error-toast').toast('dispose');

        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list'  ],
          header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
            events: {
                url: '{{ url('/events-json') }}',
                failure: function() {
                    alert('wata');
                // document.getElementById('script-warning').style.display = 'block'
                }
            },
            loading: function(bool) {

            }
        });
        calendar.render();

        $('#add-event-form').ajaxForm({
            beforeSubmit: function(a,b){
                $('#error-msg').html('');
                $(b).find('button:submit').html('<i class="fas fa-spinner fa-pulse"></i>');
            },complete:function(xhr,status,form,c){
                if(status == 'error'){
                    var res = xhr.responseJSON; 
                    $.each(res.errors,function(k,v){
                        $('#error-msg').append('<li class="text-white">'+v[0]+'</li>');
                    })
                    $('#error-toast').toast('show');
                }else{
                    calendar.refetchEvents();
                    $(form).find('button:reset').trigger('click');
                    $('.btn.btn-secondary.active').removeClass('active');
                    $('#success-toast').toast('show');
                }
                $(form).find('button:submit').html('Save');
            },
            dataType: 'json'
        })

    })
</script>