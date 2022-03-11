@extends('dashboard.layout')
@section('content')
<div class="page-content">



<div class="tab-pane active" id="tab_0">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>اضافة قسم جديد</div>
                
            </div>
            <div class="portlet-body form">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- BEGIN FORM-->
                <form action="{{ route('categories.store') }}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">اسم القسم</label>
                            <div class="col-md-4">
                                <input type="text" name="name" class="form-control input-circle" placeholder="">
                                {{-- <span class="help-block"> A block of help text. </span> --}}
                            </div>
                        </div>

                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-circle green">حفظ</button>
                                {{-- <button type="button" class="btn btn-circle grey-salsa btn-outline">Cancel</button> --}}
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>

    </div>
</div>
@endsection
