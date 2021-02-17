<template>
      <div>
    <div class="page-title">
      <h3>{{'Client'|localize}}</h3>
    </div>
    <section>
      <Loader v-if="loading"/>
      <div class="row" v-else>
      
     
      <ClientsList/>
      
      <clientCreate/>
      
      </div>
    </section>
  </div>
</template>

<script>
import clientCreate from '../components/ClientsCreate'
import ClientsList from '../components/ClientsList'
export default {
  name:"Clients",
  metaInfo(){
    return{
      title: this.$title('Client')
    }
  },
  components:{
    clientCreate, 
    ClientsList
  }
  
}
</script>