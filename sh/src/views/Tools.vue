<template>

<div>
     <div class="page-title">
      <h3>{{'Tools'|localize}}</h3>
    </div>
  
     <v-card
    class="mx-auto"
    max-width="344"
  >
    <v-img
      src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.hU7cyQ3QzDKUAJDUSM7V7gHaE8%26pid%3DApi&f=1"
      height="200px"
    ></v-img>

   

    <v-card-actions>
      <v-btn
        color="orange lighten-2"
        :loading="loading"
        :disabled="loading"
        @click="loader = 'loading'"
        to="/calendar"
        text
        
      >
       Календарь
       
      </v-btn>

      

    </v-card-actions>

  
  </v-card>
    
</div>

</template>

<script>
export default {
    name: 'Tools',
     metaInfo() {
    return {
      title: this.$title('Tools')
        }   
    }
}
</script>