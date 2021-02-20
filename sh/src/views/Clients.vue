<template>
    <div id="app-client">
        <div class="row">
            <div class="col-sm-6">
                <NotesList 
                  @app-addNote="addNote"
                  @app-changeNote="changeNote"
                  :notes="notes"
                  :activeNote="index" />
            </div>
            <div class="col-sm-6">
                <Note
                  @app-saveNote="saveNote"
                  @app-removeNote="removeNote"
                  :note="notes[index]" />
            </div>
        </div>
    </div>
</template>

<script>
import NotesList from "../components/ClientsList.vue";
import Note from "../components/ClientsCreate.vue";
import firebase from "firebase/app";
import "firebase/database";


const database = firebase.database();
const notesRef = database.ref("notes");

export default {
  name: "app-client",
  metaInfo(){
    return{
      title: this.$title("menu_Clients")
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
        content: "",
        phone: "",
        emails: "",
        top: "",
        sum: "",
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
        content: note.content,
        phone: note.phone,
        emails: note.emails,
        top: note.top,
        sum: node.sum,
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
          content: note.child("content").val(),
          phone: note.child('phone').val(),
          emails: note.child("emails").val(),
          top: note.child('top').val(),
          sum: note.child('sum').val(),
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
      updatedNote.phone = snapshot.val().phone;
      updatedNote.emails = snapshot.val().emails;
      updatedNote.top = snapshot.val().top;
      updatedNote.sum = snapshot.val().sum;
      console.log("note was updated: ", updatedNote);
    });
    /* eslint-enable no-console */
  }
};
</script>

<style>
#app-client {
  text-align: center;
  max-width: 700px;
}
</style>