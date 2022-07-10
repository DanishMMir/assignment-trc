<template>
    <div class="col-lg-12">
        <div class="hpanel">
            <div class="panel-heading">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                    <a class="closebox"><i class="fa fa-times"></i></a>
                </div>
                Edit Snippet Data
            </div>
            <div class="panel-body">
                <form method="get" class="form-horizontal">
                    <input type="hidden" :value="snippetProp.id" name="id">
                    <div class="form-group"><label class="col-lg-2 control-label">Title</label>

                        <div class="col-lg-10"><input type="text" name="name" id="title" :value="snippetProp.title" class="form-control"></div>
                    </div>

                    <div class="form-group"><label class="col-lg-2 control-label">Description</label>

                        <div class="col-lg-10"><textarea class="form-control" id="description" :value="snippetProp.description" name="description"></textarea></div>
                    </div>

                    <div class="form-group"><label class="col-lg-2 control-label">Snippet</label>
                        <div class="col-lg-10">
                            <div class="summernote" id="summernote">
                            </div>
                            <input type="hidden" id="snippet" name="snippet">
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
$(function () {
    // Initialize summernote plugin
    $('.summernote').summernote();
});
export default {
    props: {
        snippetProp: {
            required: true,
            default: null
        }
    },
    setup: () => ({
        snippet_data:{
            id: null,
            title: "",
            description:"",
            snippet:"",
        }
    }),
    mounted () {
        $('.summernote').html(this.snippetProp.snippet)
    },
    methods: {
        async store(){
            this.snippet_data.id = this.snippetProp.id
            this.snippet_data.snippet = $('.summernote').code()
            this.snippet_data.title = $('#title').val()
            this.snippet_data.description = $('#description').val()

            await this.axios.post('/api/snippet/'+this.snippet_data.id ,this.snippet_data).then(response=>{
                window.location.replace('/admin')
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>

