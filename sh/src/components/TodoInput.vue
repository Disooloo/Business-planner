<template>
  <div id="todo-input">
      <input id="input_todo" v-model="todo" placeholder="Добавить запись" @keydown.enter="addTodo" />
  </div>
</template>

<script>
export default {
    data(){
        return{
            todo: "",
        }
    },
    methods:{
        addTodo(){
            this.$emit('addTodo', this.todo)
        }
    },
    components:{

    }
}
</script>

<style>
#input_todo{
    color: #fff;
}
</style>