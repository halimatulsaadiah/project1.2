@extends('navi_template.head')

@section('content')

<div class="col-sm-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-md-3">
                <h4 class="font-weight-bold" style="font-size:20px;">Cipta cadangan aktiviti</h4>
                <p class="text-muted">Cadangan aktiviti yang akan di jalankan bersama SIG. Aktiviti ini akan direkodkan. Ruangan ini perlu diisi kesemuanya.</p>
            </div>
            <div class="col-md-9">
                <form class="form-horizontal" action="{{ action('SuggestController@update',$suggest->id) }}" method="POST">

                  {{ csrf_field() }}
                  {{ method_field('PUT')}}
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Nama Aktiviti:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="activity_name" placeholder="Aktiviti" value="{{ $suggest->activity_name }}">
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Tarikh Mula:</label>
                        <div class="col-sm-8"><input value="{{ $suggest->activity_date_start }}" type="text" id="tarikh-mula" class="form-control datepicker" name="activity_date_start" placeholder="Tarik Mula Aktiviti" format="dd/mm/yy"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Tarikh Akhir:</label>
                        <div class="col-sm-8"><input value="{{ $suggest->activity_date_end }}" type="text" id="tarikh-akhir" class="form-control datepicker" name="activity_date_end" placeholder="Tarikh Akhir Aktiviti" format="dd/mm/yy"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Masa Mula:</label>
                        <div class="col-sm-8"><input value="{{ $suggest->activity_time_start }}" type="text" class="form-control timepicker" name="activity_time_start" placeholder="Masa Mula Aktiviti" format="dd/mm/yy"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Masa Akhir:</label>
                        <div class="col-sm-8"><input value="{{ $suggest->activity_time_end }}" type="text" class="form-control timepicker" name="activity_time_end" placeholder="Masa Akhir Aktiviti" format="dd/mm/yy"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Ringkasan Aktiviti:</label>
                        <div class="col-sm-8">
                            <textarea rows="6" type="text" class="form-control" name="activity_summary" placeholder="Ringkasan Aktiviti...">{{ $suggest->activity_summary }}</textarea>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label"></label>
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-primary">Hantar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
