<template>
    <div>
        <div class="page-title">
            <h3>{{'main' | localize}}</h3>
        </div>
        <div class="name">
            {{"Welcome"| localize}} &ensp; 
           <a class="dropdown-trigger black-text asd" href="#" data-target="dropdown" ref="dropdown">{{name}}</a>
        </div>
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
        dropdown: null
    }),
    methods: {
        async logout() {}
    },
    computed: {
        name() {
        return this.$store.getters.info.name
        }
    }
}
</script>


<style>
.name{
    display: flex;
    text-align: center;
}
</style>