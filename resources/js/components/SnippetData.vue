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
                                                <form method="get" @submit.prevent="store" class="form-horizontal">
                                                    <div class="form-group"><label class="col-lg-2 control-label">Title</label>

                                                        <div class="col-lg-10"><input type="text" name="name" v-model="snippet_data.title" class="form-control"></div>
                                                    </div>

                                                    <div class="form-group"><label class="col-lg-2 control-label">Description</label>

                                                        <div class="col-lg-10"><textarea class="form-control" v-model="snippet_data.description" name="description"></textarea></div>
                                                    </div>

                                                    <div class="form-group"><label class="col-lg-2 control-label">Snippet</label>
                                                        <div class="col-lg-10">
                                                            <div class="summernote" id="summernote">
                                                            </div>
                                                            <input type="hidden" id="snippet" name="snippet">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" @click="store">Save changes</button>
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
        snippet_data:{
            title:"",
            description:"",
            snippet:"",
        }
    }),
    methods: {
        async store(){
            this.snippet_data.snippet = $('.summernote').code();
            await this.axios.post('/api/snippet',this.snippet_data).then(response=>{
                window.location.reload()
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>
