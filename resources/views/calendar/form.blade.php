<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Set Event</h5>
      <h6 class="card-subtitle mb-2 text-muted"></h6>
        {{ Form::open(['url' => url('/save-event'),'id' => 'add-event-form']) }}
            <div class="form-group">
                {!! Form::label('eventName','Event Name') !!}
                {!! Form::text('event_name','',['class' => 'form-control', 'id' => 'eventName']) !!}
            </div>

                     
                <div class="form-group">
                    {!! Form::label('fromDate','Start Date') !!}
                    {!! Form::date('from_date','',['class' => 'form-control', 'id' => 'fromDate']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('toDate','End Date') !!}
                    {!! Form::date('to_date','',['class' => 'form-control', 'id' => 'toDate']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('fromTime','Time From') !!}
                    {!! Form::time('from_time','',['class' => 'form-control', 'id' => 'fromTime']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('toTime','Time To') !!}
                    {!! Form::time('to_time','',['class' => 'form-control', 'id' => 'toTime']) !!}
                </div>
          
                <div class="col-md-12">
                    <div class="btn-group btn-group-sm btn-group-toggle mb-2" data-toggle="buttons" role="group" >
                        <label class="btn btn-secondary">
                            <input type="checkbox" name="dow[]" value="1" id="mon" autocomplete="off" > Mon
                        </label>
                        <label class="btn btn-secondary">
                            <input type="checkbox" name="dow[]" value="2" id="tue" autocomplete="off" > Tue
                        </label>
                        <label class="btn btn-secondary">
                            <input type="checkbox" name="dow[]" value="3" id="wed" autocomplete="off" > Wed
                        </label>
                        <label class="btn btn-secondary">
                            <input type="checkbox" name="dow[]" value="4" id="thu" autocomplete="off" > Thu
                        </label>
                        <label class="btn btn-secondary">
                            <input type="checkbox" name="dow[]" value="5" id="fri" autocomplete="off" > Fri
                        </label>
                    </div>
                    <div class="btn-group btn-group-sm btn-group-toggle mb-4" data-toggle="buttons" role="group" >
                       
                        <label class="btn btn-secondary">
                            <input type="checkbox" name="dow[]" value="6" id="sat" autocomplete="off" > Sat
                        </label>
                        <label class="btn btn-secondary">
                            <input type="checkbox" name="dow[]" value="0" id="sun" autocomplete="off" > Sun
                        </label>
                    </div>
                </div>
            <div class="col-md-12">
                <button type='submit' class="card-link btn btn-primary">Save</a>
                <button type='reset' class="card-link btn btn-light">Clear Form</a>
            </div>
            {{ Form::close() }}
        </div>
  </div>
