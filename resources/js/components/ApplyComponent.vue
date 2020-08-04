<template>
    <div>
        <form @submit="formSubmit">
             <button v-if="show" type="submit" class="apply-btn" style="width: 50%;">Apply</button>
        
         <div v-else class="alert alert-success">
            Votre candidature à été envoyer
        </div>
         </form>
    </div>
</template>

<script>
    export default {
        props:['jobid'],
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                'show':true
            }
        },
        methods:{
            formSubmit(e){
                e.preventDefault();
                axios.post('/application/'+ this.jobid,{

                }).then((response)=>{
                    this.show=false

                }).catch((error)=>{
                    alert('error')
                });
            }
        }
    }
   
</script>
