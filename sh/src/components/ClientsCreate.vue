<template>
   <div class="note">
        <div v-if="note">
            <h4>{{"listClients"| localize}}</h4>
            <div class="form-group">
                    <input class="form-control tet" type="text" v-model="note.title" placeholder="ФИО" />
                    <input class="form-contro tet" type="text" v-model="note.phone" placeholder="Телефон"/>
                    <input class="form-contro tet" type="email" v-model="note.emails" placeholder="Email"/>
                    <input class="form-contro tet active" type="text" v-model="note.top" placeholder="Рейтинг"/>
                    <input class="form-contro tet" type="text" v-model="note.sum" placeholder="Сумма"/>
                    <textarea class="form-control tet" v-model="note.content" placeholder="Описание" />
            </div>
            <div class="form-group">
            </div>
            <button class="btn btn-danger" @click="removeNote()">{{"Remove"| localize}}</button>
            <button class="btn btn-success" @click="saveNote()">{{"Save"| localize}}</button>
        </div>
        <div v-else>
            <h5>{{"addNote"| localize}}</h5>
        </div>
        
    </div> 
</template>

<script>
let active = document.getElementsByClassName("active");

export default {
  name: "Note",
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

