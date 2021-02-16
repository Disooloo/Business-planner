<template>
  <div class="col s12 m6 l8">
    <div class="card blue-grey bill-card">
      <div class="card-content white-text">
        <div class="card-header">
          <span class="card-title">{{'Recordings'|localize}}</span>
        </div>

        <todo-input @addTodo="addTodo" /> <br>
        <todo-list>
          <todo-item @updateTodo="updateTodo" @deleteTodo="deleteTodo" @checkItems="checkItems" v-for="item in items" :key="item.id" :item="item"></todo-item>
        </todo-list>
        
        <!-- <table>
          <thead>
            <tr>
              <th>{{'Currency'|localize}}</th>
              <th>{{'CurrencyType'|localize}}</th>
              <th>{{'Date'|localize}}</th>
            </tr>
          </thead>

          <tbody>
            <tr v-for="cur in currencies" :key="cur">
              <td>{{cur}}</td>
              <td>{{rates[cur].toFixed(5)}}</td>
              <td>{{date | date('date')}}</td>
            </tr>
          </tbody>
        </table> -->
      </div>
    </div>
  </div>
</template>

<script>
import TodoList from './TodoList'
import TodoItem from './TodoItem'
import TodoInput from './TodoInput'

export default {
  data(){
    return{
      items:[],
    }
  },
  computed:{
    itemsLength(){
      return this.items.length;
    },
    getId(){
      if (this.itemsLength){
        return this.items[this.itemsLength -1 ].id + 1; 
      }
      return 1;
    }
  },
  methods:{
    addTodo(todo){
      console.log(todo);
      this.items.push({
        id: this.getId,
        todo,
        complited: false
      });
    },
    checkItems(Id){
      this.items = this.items.map( item => {
        if(item.id === Id){
          return {...item, complited: !item.complited} 
        }
        return item;
      })
    },
    deleteTodo(Id){
      this.items = this.items.filter(item => item.id !== Id);
    },
    updateTodo(todo){
      this.item = this.item.map( item => {
        if(items.id == todo.id){
          return {...todo}
        }
      return item;
      })
    }
  },
  components:{
    TodoList, TodoItem, TodoInput
   
  }
}
</script>

