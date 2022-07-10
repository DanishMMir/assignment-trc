<template>
    <div class="col-lg-12">
        <div class="hpanel">
            <div class="panel-heading">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                    <a class="closebox"><i class="fa fa-times"></i></a>
                </div>
                Edit File Data
            </div>
            <div class="panel-body">
                <form method="get" class="form-horizontal">
                    <input type="hidden" :value="fileProp.id" name="id">
                    <div class="form-group"><label class="col-sm-2 control-label">Title</label>

                        <div class="col-sm-10"><input type="text" id="title" :value="fileProp.title" class="form-control"></div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">File</label>

                        <div class="input-group col-sm-10">
                            <input type="file" id="file" class="form-control"/>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-primary" @click="store" type="button">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        fileProp: {
            required: true,
            default: null
        }
    },
    setup: () => ({
        file_data:{
            id: null,
            title:"",
            file_name:"",
        }
    }),
    methods: {
        async store(){
            this.file_data.id = this.fileProp.id
            this.file_data.title = $('#title').val()

            let formData = new FormData();
            let imageFile = document.querySelector('#file');
            formData.append("title", this.file_data.title);
            formData.append("image", imageFile.files[0]);
            await this.axios.post('/api/file/'+this.file_data.id ,formData,{
                headers: {'Content-Type': 'multipart/form-data'}
            }).then(response=>{
                window.location.replace('/admin')
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>

