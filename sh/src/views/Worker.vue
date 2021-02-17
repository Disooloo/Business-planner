<template>
    <div id="wor">
       <div class="page-title">
          <h3>{{'Worker' | localize}}</h3>
        </div>
        <div style="color: blue;">
        </div>
        <div class="row">
            <div>
                <NotesList 
                  @app-addNote="addNote"
                  @app-changeNote="changeNote"
                  :notes="notes"
                  :activeNote="index" />
            </div>
            <div>
                <Note
                  @app-saveNote="saveNote"
                  @app-removeNote="removeNote"
                  :note="notes[index]" />
            </div>
        </div>
    </div>
</template>
 
<script>
import NotesList from "@/components/NotesListWorker.vue";
import Note from "@/components/NoteWorker.vue";
import firebase from "firebase/app";
import "firebase/database";
 

 
const database = firebase.database();
const notesRef = database.ref("users");
  
export default {
  name: "worker",
  metaInfo() {
    return {
      title: this.$title('Worker')
    }
  },
  components: {
    NotesList,
    Note
  },
  data: () => ({
    notes: [],
    index: 0
  }),
  methods: {
    addNote() {
      this.notes.push({ 
        title: "",
        content: ""
      });
      this.index = this.notes.length - 1;
    },
    changeNote(index) {
      this.index = index;
    },
    saveNote() {
      const note = this.notes[this.index];
      if (note.id) {
        this.updateNote(note);
      } else {
        this.createNote(note);
      }
    },
    updateNote(note) {
      notesRef.child(note.id).update({
        title: note.title,
        content: note.content
      });
    },
    createNote(note) {
      note.id = notesRef.push(note).key;
    },
    removeNote() {
      const id = this.notes[this.index].id;
      notesRef.child(id).remove();
    }
    
  },
  created() {
    notesRef.once("value", notes => {
      notes.forEach(note => {
        this.notes.push({
          id: note.ref.key,
          title: note.child("title").val(),
          content: note.child("content").val()
        });
      });
    });
 
    /* eslint-disable no-console */
    // value = snapshot.val() | id = snapshot.key
    notesRef.on("child_added", snapshot => {
      console.log("note was added: ", { ...snapshot.val(), id: snapshot.key });
    });
 
    notesRef.on("child_removed", snapshot => {
      const deletedNote = this.notes.find(note => note.id === snapshot.key);
      console.log("note was removed: ", deletedNote);
 
      const index = this.notes.indexOf(deletedNote);
      this.notes.splice(index, 1);
      this.index = this.index === 0 ? 0 : index - 1;
    });
 
    notesRef.on("child_changed", snapshot => {
      const updatedNote = this.notes.find(note => note.id === snapshot.key);
      updatedNote.title = snapshot.val().title;
      updatedNote.content = snapshot.val().content;
      console.log("note was updated: ", updatedNote);
    });
    /* eslint-enable no-console */
  }
};
</script>
 
<style>
#wor {
  text-align: center;
  max-width: 700px;
}
</style>