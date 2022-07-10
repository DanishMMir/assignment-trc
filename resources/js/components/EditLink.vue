<template>
    <div class="col-lg-12">
        <div class="hpanel">
            <div class="panel-heading">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                    <a class="closebox"><i class="fa fa-times"></i></a>
                </div>
                Edit Link Data
            </div>
            <div class="panel-body">
                <form method="get" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Title</label>

                        <div class="col-sm-10"><input type="text" id="title" :value="linkProp.title" class="form-control"></div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Link</label>

                        <div class="col-sm-10"><input type="text" id="link" :value="linkProp.link" class="form-control"></div>
                    </div>

                    <div class="form-group">

                        <div class="col-sm-10">
                            <label class="checkbox-inline"> <input type="checkbox" id="new_tab" :checked="linkProp.new_tab" class="i-checks"> Open in a new tab </label>
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
        linkProp: {
            required: true,
            default: null
        }
    },
    setup: (props) => ({
        link_data:{
            id: null,
            title:"",
            link:"",
            new_tab:false,
        }
    }),
    mounted () {
        $('.summernote').html(this.snippetProp.snippet)
    },
    methods: {
        async store(){
            this.link_data.id = this.linkProp.id
            this.link_data.title = $('#title').val()
            this.link_data.link = $('#link').val()

            if($("#new_tab").is(':checked')){
                this.link_data.new_tab = true;
            } else {
                this.link_data.new_tab = false;
            }
            if (!/^https?:\/\//i.test( this.link_data.link)) {
                this.link_data.link = 'https://' + this.link_data.link;
            }
            await this.axios.post('/api/link/'+this.link_data.id ,this.link_data).then(response=>{
                window.location.replace('/admin')
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>

