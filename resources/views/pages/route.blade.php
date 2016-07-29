@extends('layouts.layout')
@section('content')

        <div class="row">
            <h1 style="text-align: center">اختر النظام الذي تريده</h1>
        </div>

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">

                <a href="/table8" class="btn btn-block btn-lg red">برنامج سهل لحمة على العشاء</a>
                <a  href="/table9" class="btn btn-block btn-lg blue">برنامج سهل لحمة على الغداء</a>
                <a  href="/table6" class="btn btn-block btn-lg green">برنامج صعب لحمة على العشاء</a>
                <a  href="/table7" class="btn btn-block btn-lg yellow">برنامج صعب لحمة على الغداء</a>
                <a href="/table4" class="btn btn-block btn-lg purple">برنامج متوسط لحمة على الغداء</a>
                <a href="/table5" class="btn btn-block btn-lg dark">برنامج متوسط لحمة على العشاء</a>
            <a class="btn btn-block btn-lg grey-mint">Grey</a>

        </div>
    </div>
@endsection