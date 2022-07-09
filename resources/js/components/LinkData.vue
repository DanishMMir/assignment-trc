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
                                <table id="links" class="table table-bordered table-striped" width="100%">
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
</template>

<script>
export default {
    setup: () => ({
    })
}
</script>
