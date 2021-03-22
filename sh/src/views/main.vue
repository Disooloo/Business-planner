<template>
    <div>
        <div class="page-title">
            <h3> {{"Welcome"| localize}} &ensp; </h3>
        </div>

        <div class="name">
           
        </div>
        
 <v-card
    class="mx-auto"
    max-width="344"
  >
    <v-img
      src="https://raw.githubusercontent.com/Andrei0903/Business-planner/main/sh/img/logo.png"
      height="200px"
    ></v-img>

    <v-card-title>
        <a class="dropdown-trigger black-text asd" href="#" data-target="dropdown" ref="dropdown">{{name}}</a>
    </v-card-title>

    <v-card-subtitle>
      1,000 miles of wonder
    </v-card-subtitle>

    <v-card-actions>
      <v-btn
        color="orange lighten-2"
        text
      >
        Explore
      </v-btn>

      <v-spacer></v-spacer>

      <v-btn
        icon
        @click="show = !show"
      >
        <v-icon>{{ show ? 'mdi-chevron-up' : 'mdi-chevron-down' }}</v-icon>
      </v-btn>
    </v-card-actions>

    <v-expand-transition>
      <div v-show="show">
        <v-divider></v-divider>

        <v-card-text>
          I'm a thing. But, like most politicians, he promised more than he could deliver. You won't have time for sleeping, soldier, not with all the bed making you'll be doing. Then we'll go with that data file! Hey, you add a one and two zeros to that or we walk! You're going to do his laundry? I've got to find a way to escape.
        </v-card-text>
      </div>
    </v-expand-transition>
  </v-card>
  

    </div>

</template>


<script>
import localeFilter from '@/filters/localize.filter'


export default {
    metaInfo() {
      return {
        title: this.$title('main')
      }
    },  
    data: () => ({
        date: new Date(),
        interval: null,
        dropdown: null,
        show: false,
    }),
    methods: {
        async logout() {}
    },
    computed: {
        name() {
        return this.$store.getters.info.name
        }
    },
    component:{
    },
}
</script>


<style>
.name{
    display: flex;
    text-align: center;
}
</style>