<template>
    <div class="listClient">
        <h4>{{"myClients"|localize}}</h4>
        <ul class="Client-group">
            <li class="Client-group-item"
                v-for="(note, index) in notes"
                :key="note.index"
                :class="{ 'active': index === activeNote}"
                @click="changeNote(index)"
                >
                <div>{{ note.title }}</div>
            </li>
        </ul>
        <button @click="addNote()" class="btn btn-info">{{'add'|localize}}</button>
    </div>  
</template>
 
<script>
export default {
  name: "Noteclient",
  props: ["notes", "activeNote"],
  methods: {
    changeNote(index) {
      this.$emit("app-changeNote", index);
    },
    addNote() {
      this.$emit("app-addNote");
    }
  }
};
</script>



<style>
.Client {
  margin: 40px;
}
</style>