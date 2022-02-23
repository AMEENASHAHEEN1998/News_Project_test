@extends('dashboard.layout')
@section('content')
<div class="page-content">



<div class="tab-pane active" id="tab_0">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>اضافة خبر جديد</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                    <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                    <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                </div>
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
                <form action="{{ route('blogs.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">عنوان الخبر</label>
                            <div class="col-md-4">
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control input-circle" placeholder="">
                                {{-- <span class="help-block"> A block of help text. </span> --}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"> اختر القسم</label>
                            <div class="col-md-4">
                                <select name="category_id" id="" class="form-control" value={{ old('category_id') }}>

                                    <option value="">اختر القسم</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if (old('category_id') ==  $category->id ) selected @endif> {{ $category->name }}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"> وصف مختصر</label>
                            <div class="col-md-4">
                                <input type="text" name="short_description" value="{{ old('short_description') }}" class="form-control input-circle" placeholder="">
                                {{-- <span class="help-block"> A block of help text. </span> --}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"> المحتوى</label>
                            <div class="col-md-4">
                                <textarea rows="4" name="long_description" class="form-control">{{ old('long_description') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">  صورة الخبر</label>
                            <div class="col-md-4">
                                <input type="file" name="image" class="form-control input-circle" placeholder="">
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
