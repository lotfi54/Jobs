<template>






<div class="container-card">
   <div class="row align-items-center">
    <div class="col-12 col-md-4 col-lg-3" v-for="job in jobs" :key="job.id">
  
  <router-link :to="{ path: '/job/' + job.slug }">

  <div class="card card-job mt-5" style="width: 23rem;">
    <!-- <img class="card-img-top" :src="storage/job.company.cover_photo" alt="Card image cap"> -->
   <div class="img-company" v-if="image" >
     
<img class="card-img-top" :src="'uploads/coverphoto/'+job.company.cover_photo">

   </div>
    
  <div class="img-company" v-else >
<img class="card-img-top" :src="job.company.cover_photo">

   </div>
       
    <div class="card-body">
       <p class="company">{{job.company.cname}}</p>
       <h5 class="card-title">{{ job.title }}</h5>
       <p class="company-body">{{job.type}}</p>
       <p class="company-body">{{job.company.address}}</p>
       <p class="company-body">{{job.human_created_at}}</p>
  
  
   
    </div>
    </div>
    </router-link>
  </div>
    </div>
</div>


















</template>

<script>

import {formatRelative } from 'date-fns'
import "../../sass/style.scss"
    export default {
       data () {

           return {
               jobs: {},
               image:true, 
            
           }

       },
      created() {
            axios.get('api/jobs')
            .then(response => this.jobs = response.data)
            .catch(error => console.log(error));
      }, 

      
  methods: {
  format(date){
    return formatRelative(new Date(date), new Date());
  },
}
     
     
    }
</script>
