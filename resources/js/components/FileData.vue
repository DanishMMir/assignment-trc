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

                                                        <div class="col-sm-10"><input type="text" v-model="file_data.title" class="form-control"></div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">File</label>

                                                        <div class="input-group col-sm-10">
                                                            <input type="file" id="file" class="form-control"/>
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
                                <table id="files" class="table table-bordered table-striped" width="100%">
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
</template>

<script>
export default {
    setup: () => ({
        file_data:{
            title:"",
            file_name:"",
        }
    }),
    methods: {
        async store(){
            let formData = new FormData();
            let imageFile = document.querySelector('#file');
            formData.append("title", this.file_data.title);
            formData.append("image", imageFile.files[0]);
            console.log('>> formData >> ', formData);
            console.log('>> image >> ', imageFile.files[0]);
            await this.axios.post('/api/file',formData,{
                headers: {'Content-Type': 'multipart/form-data'}
            }).then(response=>{
                window.location.reload()
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>
