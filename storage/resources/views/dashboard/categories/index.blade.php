@extends('dashboard.layout')
@section('content')
<div class="page-content">

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-comments"></i>عرض الأقسام </div>

                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> اسم القسم  </th>
                                    <th> العمليات  </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $category->name }} </td>
                                    <td> <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#delete{{ $category->id }}"
                                        title="delete"><i
                                            class="fa fa-trash"></i> حذف</button>
                                    </td>

                                </tr>
                                <div class="modal fade" id="delete{{ $category->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                    id="exampleModalLabel">
                                                    حذف القسم
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('categories.destroy',$category->id)}}" method="post">
                                                    {{-- {{method_field('Delete')}} --}}
                                                    @method('delete')
                                                    @csrf
                                                    هل أنت متاكد من عملية الحذف ؟
                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                            value="{{ $category->id }}">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">اغلاق</button>
                                                        <button type="submit"
                                                                class="btn btn-danger">حذف</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>

    </div>
@endsection
