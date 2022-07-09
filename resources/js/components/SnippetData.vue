<template>
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
                                <table id="html_snippet" class="table table-bordered table-striped" width="100%">
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
</template>

<script>
export default {
    setup: () => ({
    })
}
</script>
