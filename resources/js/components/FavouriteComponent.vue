<template>
    <div>
        
            <button v-if="show" @click.prevent="unsave()" class="btn btn-primary mt-3" style="width: 100%;">Annuler</button>

    <button v-else @click.prevent="save()"   class="btn btn-dark mt-3" style="width: 100%;">Sauvegarder</button>
        
    </div>
</template>

<script>
    export default {
        props:['jobid','favorited'],

    
        data(){
            return {
                'show':true
            }
        },

        mounted() {
           this.show = this.jobFavorited ? true:false;
        },

computed:{
    jobFavorited() {
        return this.favorited
    }
},




     methods:{
            save(){
                axios.post('/save/'+this.jobid).then(response=>this.show=true).catch(error=>alert('error'))

            },
            unsave(){

                axios.post('/unsave/'+this.jobid).then(response=>this.show=false).catch(error=>alert('error'))


            }
        }

}
   
</script>
