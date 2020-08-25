<template>





<div>
  
 <div class="jumbotron jumbotron bg-cover mt-5" >
   <img class="banner-company" :src="'/uploads/coverphoto/'+job.image">

 </div>
 
   <p class="company">{{job.title}}</p>
   <p class="company">{{job.cname}}</p>
   <p class="company">{{job.address}}</p>
   <p class="company">{{job.human_created_at}}</p>
   <p class="company">{{job.desc}}</p>
  
</div>



</template>

<script>

import {formatRelative } from 'date-fns'
import "../../sass/style.scss"
    export default {
        
       data () {

           return {
               job: {}
                        
           }

       },
      created() {
            axios.get(`/api/jobs/${this.$route.params.slug}`)
            .then (response=>{
                console.log(response.data); 
                this.job = response.data; 
            }).catch(err=> console.log(err)); 
      }, 

      
  methods: {
  format(date){
    return formatRelative(new Date(date), new Date());
  },
}
     
     
    }
</script>
