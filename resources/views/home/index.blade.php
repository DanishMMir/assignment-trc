@extends('layouts.guest')
@section('title',' Home')
@section('content')
    <div class="content animate-panel">
        <div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="hpanel">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                <a class="closebox"><i class="fa fa-times"></i></a>
                            </div>
                            HTML Snippet Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="html_snippet" class="table table-bordered table-striped" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Snippet</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="hpanel">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                <a class="closebox"><i class="fa fa-times"></i></a>
                            </div>
                            Link Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="links" class="table table-bordered table-striped" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Link</th>
                                        <th>New Tab</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="hpanel">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                <a class="closebox"><i class="fa fa-times"></i></a>
                            </div>
                            PDF Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="files" class="table table-bordered table-striped" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>File</th>
                                        <th>Action</th>
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
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#html_snippet').dataTable( {
                "processing": true,
                "ajax": "{{ route('snippet.index') }}",
                columns : [
                    { data: 'title' },
                    { data: 'description' },
                    { data: 'snippet' },
                ],
                dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                buttons: [
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
                    { data: "link", render : function(data, type, row) {
                            let target = '';
                            if (row.new_tab){
                                target = 'target="_blank"';
                            }
                            return '<a href="'+data+'" '+target+'>'+data+'</a>'
                        }
                    },
                    { data: "new_tab", render : function(data, type, row) {
                            return data ? "Yes" : "No";
                        }
                    },
                ],
                dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                buttons: [
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
                    { data: 'file_name' },
                    { data: "id", render : function(data, type, row) {
                            return '<button class="btn btn-primary btn-xs center-block" data-toggle="modal" onclick="location.href=\'/api/file/download/'+data+'\';" type="button"><i class="fa fa-download"></i></button>';
                        }
                    },
                ],
                dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                buttons: [
                    {extend: 'csv',title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'print',className: 'btn-sm'}
                ]
            } );
        } );

    </script>
@endpush
