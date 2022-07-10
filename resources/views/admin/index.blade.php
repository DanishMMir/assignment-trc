@extends('layouts.app')
@section('title',' Dashboard')
@section('content')
    <div id="app">
        <snippet-data></snippet-data>
        <link-data></link-data>
        <file-data></file-data>
    </div>
@endsection
@push('scripts')
    <script>
        $(function () {
            // Initialize summernote plugin
            $('.summernote').summernote();
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
                            return '<button class="btn btn-primary btn-xs center-block" onclick="location.href=\'/snippet/'+data+'/edit\';" title="Edit the record" type="button"><i class="fa fa-pencil"></i></button>';
                        }
                    },
                    {data: "id", render : function(data, type, row) {
                            return '<button class="btn btn-danger btn-xs center-block" onclick="location.href=\'/api/snippet/'+data+'\';" title="Delete the record" type="button"><i class="fa fa-trash"></i></button>';
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
                    { data: "id", render : function(data, type, row) {
                            return '<button class="btn btn-primary btn-xs center-block" onclick="location.href=\'/link/'+data+'/edit\';" title="Edit the record" type="button"><i class="fa fa-pencil"></i></button>';
                        }
                    },
                    {data: "id", render : function(data, type, row) {
                            return '<button class="btn btn-danger btn-xs center-block" onclick="location.href=\'/api/link/'+data+'\';" title="Delete the record" type="button"><i class="fa fa-trash"></i></button>';
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
                            return '<button class="btn btn-primary btn-xs center-block" onclick="location.href=\'/file/'+data+'/edit\';" title="Edit the record" type="button"><i class="fa fa-pencil"></i></button>';
                        }
                    },
                    {data: "id", render : function(data, type, row) {
                            return '<button class="btn btn-danger btn-xs center-block" onclick="location.href=\'/api/file/'+data+'\';" title="Delete the record" type="button"><i class="fa fa-trash"></i></button>';
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
