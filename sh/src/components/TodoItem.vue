<template>
  <div id=" todo-item">
        <i class="material-icons ic" @click="editMode = !editmode">edit</i>
        <i class="material-icons ic" @click="deleteTodo">delete</i> 
      
        <label class="inputTodo wwd">
          <input name="type" type="checkbox"  v-model="type" >
          <div v-if="editMode"><input @keydown.enter="updateTodo" v-model="todo.todo" class="wrid" /></div>
          <span v-else :class="{through: item.complited}" @click="check"> {{item.todo}} </span>
        </label>
  </div>
</template>

<script>
export default {
  props:['item'],
    data(){
        return{
          todo: this.item,
            editMode: false,
        }
    },
    components:{
        
    },
    methods:{
      check(){
        this.$emit('checkItems', this.item.id);
      },
      deleteTodo(){
        this.$emit('deleteTodo', this.item.id);
      },
      updateTodo(){
        if (this.todo.todo !== ''){
          this.$$emit('updateTodo', this.item.todo);
          this.editMode = false;
        }
      }
    }
}
</script>

<style>

.ic{
  font-size: 25px;
  margin-right: 60px;
  cursor: pointer;
}

.inputTodo, .wrid{
  color:#fff;
}


.through{
  text-decoration: line-through;
}


</style>