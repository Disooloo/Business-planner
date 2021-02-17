<template>
   <div class="note">
        <div v-if="note">
            <h4>{{"info_worker"| localize}}</h4>
            <div class="form-group">
                <input class="form-control tet" type="text" v-model="note.title" placeholder="Имя"/>
            </div>
            <div class="form-group">
                <textarea class="form-control tet" v-model="note.content" placeholder="Описание"></textarea>
            </div>
            <button class="btn btn-danger" @click="removeNote()">{{"Remove"| localize}}</button>
            <button class="btn btn-success" @click="saveNote()">{{"Save"| localize}}</button>
        
        </div>
        <div v-else>
            <h5>{{"createWorker" | localize}}</h5>
        </div>
         
    </div> 
</template>
 
<script>
export default {
  name: "Note",
  data:{
    power: "test",
  },
  props: ["note"],
  methods: {
    saveNote() {
      this.$emit("app-saveNote");
    },
    removeNote() {
      this.$emit("app-removeNote");
    }
  }
};
</script>
 
<style>
.note {
  margin: 20px;
}

.tet::placeholder{
  color:black;
  

}

</style>