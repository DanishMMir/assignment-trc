@extends('layouts.app')
@section('title',' Dashboard')
@section('content')
    <div id="admin">
        <admin></admin>
    </div>
    <div>


    <snippet-data>

    </snippet-data>
    <div class="content animate-panel">
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hpanel">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                <a class="closebox"><i class="fa fa-times"></i></a>
                            </div>
                            HTML Snippet Data
                        </div>
                        <div class="panel-body">
                            <div class="text-right m-b-md">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#snippet-modal">
                                    Add New
                                </button>
                                <div class="modal fade" id="snippet-modal" tabindex="-1" role="dialog"  aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="color-line"></div>
                                            <div class="modal-header">
                                                <h4 class="modal-title">Snippet Data</h4>
                                                <small class="font-bold">Add / Edit HTML snippet data</small>
                                            </div>
                                            <div class="modal-body">
                                                <form method="get" class="form-horizontal">
                                                    <div class="form-group"><label class="col-lg-2 control-label">Name</label>

                                                        <div class="col-lg-10"><input type="text" class="form-control"></div>
                                                    </div>

                                                    <div class="form-group"><label class="col-lg-2 control-label">Description</label>

                                                        <div class="col-lg-10"><textarea class="form-control"></textarea></div>
                                                    </div>

                                                    <div class="form-group"><label class="col-lg-2 control-label">Snippet</label>
                                                        <div class="col-lg-10">
                                                            <div class="summernote">
                                                                <h3>Hello Jonathan! </h3>
                                                                <p>dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the dustrys</strong> standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                                                    <br/><br/>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                                                                    recently with.</p><p>Mark Smith
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table cellpadding="1" cellspacing="1" id="html_snippet" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Snippet</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content animate-panel">
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hpanel">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                <a class="closebox"><i class="fa fa-times"></i></a>
                            </div>
                            Link Data
                        </div>
                        <div class="panel-body">
                            <div class="text-right m-b-md">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#link-modal">
                                    Add New
                                </button>
                                <div class="modal fade" id="link-modal" tabindex="-1" role="dialog"  aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="color-line"></div>
                                            <div class="modal-header">
                                                <h4 class="modal-title">Link Data</h4>
                                                <small class="font-bold">Add / Edit Hyperlink data</small>
                                            </div>
                                            <div class="modal-body">
                                                <form method="get" class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-sm-1 control-label">Title</label>

                                                        <div class="col-sm-3"><input type="text" class="form-control"></div>


                                                        <label class="col-sm-1 control-label">Link</label>

                                                        <div class="col-sm-3"><input type="text" class="form-control"></div>

                                                        <div class="col-sm-3">
                                                            <label class="checkbox-inline"> <input type="checkbox" class="i-checks"> Open in a new tab </label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table cellpadding="1" cellspacing="1" id="links" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Link</th>
                                        <th>New Tab</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content animate-panel">
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hpanel">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                <a class="closebox"><i class="fa fa-times"></i></a>
                            </div>
                            PDF Data
                        </div>
                        <div class="panel-body">
                            <div class="text-right m-b-md">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#file-modal">
                                    Add New
                                </button>
                                <div class="modal fade" id="file-modal" tabindex="-1" role="dialog"  aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="color-line"></div>
                                            <div class="modal-header">
                                                <h4 class="modal-title">File Data</h4>
                                                <small class="font-bold">Upload a file</small>
                                            </div>
                                            <div class="modal-body">
                                                <form method="get" class="form-horizontal">
                                                    <div class="form-group"><label class="col-sm-2 control-label">Title</label>

                                                        <div class="col-sm-3"><input type="text" class="form-control"></div>

                                                        <label class="col-sm-2 control-label">File</label>

                                                        <div class="input-group col-sm-3">
                                                            <input type="text" class="form-control"/>
                                                            <span class="input-group-btn">
                                                                <button type="button" class="btn btn-primary">Go!</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table cellpadding="1" cellspacing="1" id="files" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>File</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(function () {

            // Initialize summernote plugin
            $('.summernote').summernote();

            var sHTML = $('.summernote').code();

            console.log(sHTML);

            $('.summernote1').summernote({
                toolbar: [
                    ['headline', ['style']],
                    ['style', ['bold', 'italic', 'underline', 'superscript', 'subscript', 'strikethrough', 'clear']],
                    ['textsize', ['fontsize']],
                    ['alignment', ['ul', 'ol', 'paragraph', 'lineheight']],
                ]
            });

            $('.summernote2').summernote({
                airMode: true,
            });

        });

        $(document).ready(function() {
            $('#html_snippet').dataTable( {
                "processing": true,
                "ajax": "{{ route('snippet.index') }}",
                columns : [
                    { data: 'title' },
                    { data: 'description' },
                    { data: 'snippet' },
                    { data: "id", render : function(data, type, row) {
                            return '<button class="btn btn-primary btn-xs center-block" onclick="location.href=\'/admin/property/show/'+data+'\';" title="Edit the record" type="button"><i class="fa fa-pencil"></i></button>';
                        }
                    },
                    {data: "id", render : function(data, type, row) {
                            return '<button class="btn btn-danger btn-xs center-block" onclick="location.href=\'/admin/property/delete/'+data+'\';" title="Delete the record" type="button"><i class="fa fa-trash"></i></button>';
                        }
                    },
                ],
                dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                buttons: [
                    {extend: 'copy',className: 'btn-sm'},
                    {extend: 'csv',title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'print',className: 'btn-sm'}
                ]
            } );
        } );

        $(document).ready(function() {
            $('#links').dataTable( {
                "processing": true,
                "ajax": "{{ route('link.index') }}",
                columns : [
                    { data: 'title' },
                    { data: 'link' },
                    { data: 'new_tab' },
                    { data: "id", render : function(data, type, row) {
                            return '<button class="btn btn-primary btn-xs center-block" onclick="location.href=\'/admin/property/show/'+data+'\';" title="Edit the record" type="button"><i class="fa fa-pencil"></i></button>';
                        }
                    },
                    {data: "id", render : function(data, type, row) {
                            return '<button class="btn btn-danger btn-xs center-block" onclick="location.href=\'/admin/property/delete/'+data+'\';" title="Delete the record" type="button"><i class="fa fa-trash"></i></button>';
                        }
                    },
                ],
                dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                buttons: [
                    {extend: 'copy',className: 'btn-sm'},
                    {extend: 'csv',title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'print',className: 'btn-sm'}
                ]
            } );
        } );

        $(document).ready(function() {
            $('#files').dataTable( {
                "processing": true,
                "ajax": "{{ route('file.index') }}",
                columns : [
                    { data: 'title' },
                    { data: 'file' },
                    { data: "id", render : function(data, type, row) {
                            return '<button class="btn btn-primary btn-xs center-block" onclick="location.href=\'/admin/property/show/'+data+'\';" title="Edit the record" type="button"><i class="fa fa-pencil"></i></button>';
                        }
                    },
                    {data: "id", render : function(data, type, row) {
                            return '<button class="btn btn-danger btn-xs center-block" onclick="location.href=\'/admin/property/delete/'+data+'\';" title="Delete the record" type="button"><i class="fa fa-trash"></i></button>';
                        }
                    },
                ],
                dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                buttons: [
                    {extend: 'copy',className: 'btn-sm'},
                    {extend: 'csv',title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'print',className: 'btn-sm'}
                ]
            } );
        } );

    </script>
@endpush
{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                <x-jet-welcome />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}
