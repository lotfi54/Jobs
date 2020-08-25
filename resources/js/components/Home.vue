<template>
    <div>

        <h1>Home</h1>
<router-view></router-view>
<!-- <Navbar/> -->

    </div>
</template>

<script>
import Navbar from './Navbar.vue'
    export default {
     components:{
         Navbar
     }
     
    }
</script>
