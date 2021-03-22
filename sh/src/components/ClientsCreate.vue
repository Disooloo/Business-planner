<template>
   <div class="note">
        <div v-if="note">
            <h4>{{"listClients"| localize}}</h4>
            <div class="form-group">
                    <!-- <input class="form-control tet" type="text" v-model="note.title" placeholder="ФИО" /> -->
                    <!-- <input class="form-contro tet" type="text" v-model="note.phone" placeholder="Телефон"/> -->
                    <!-- <input class="form-contro tet" type="email" v-model="note.emails" placeholder="Email"/> -->
                    <!-- <input class="form-contro tet active" type="text" v-model="note.top" placeholder="Рейтинг"/> -->
                    <!-- <input class="form-contro tet" type="text" v-model="note.sum" placeholder="Сумма"/> -->
                    <!-- <textarea class="form-control tet" v-model="note.content" placeholder="Описание" /> -->
            </div>
            <div class="form-group">
            </div>
            <!-- <button class="btn btn-danger" @click="removeNote()">{{"Remove"| localize}}</button>
            <button class="btn btn-success" @click="saveNote()">{{"Save"| localize}}</button> -->
        </div>
        <div v-else>
            <h5>{{"addNote"| localize}}</h5>
        </div>
        

        
 <v-row justify="center">
    <v-col
      cols="12"
      sm="8"
    >
      <v-card>
        <v-card-title class="cyan darken-1">
          <span class="headline white--text">                    <input class="form-control tet" type="text" v-model="note.title" placeholder="ФИО" />
</span>

          <v-spacer></v-spacer>

          <v-btn
            dark
            icon
          >
            <v-icon>mdi-chevron-left</v-icon>
          </v-btn>

          <v-btn
            dark
            icon
          >
            <v-icon>mdi-pencil</v-icon>
          </v-btn>

          <v-btn
            dark
            icon
          >
            <v-icon>mdi-dots-vertical</v-icon>
          </v-btn>
        </v-card-title>

        <v-list>
          <v-list-item>
            <v-list-item-action>
              <v-icon>phone</v-icon>
            </v-list-item-action>

            <v-list-item-content>
              <v-list-item-title>                    
                <input class="form-contro tet" type="text" v-model="note.phone" placeholder="Телефон"/>
              </v-list-item-title>
            </v-list-item-content>
            <v-list-item-action>
              <v-icon>mdi-message-text</v-icon>
            </v-list-item-action>
          </v-list-item>

          <v-divider inset></v-divider>

          <v-list-item>
            <v-list-item-action>
              <v-icon>mdi-phone</v-icon>
            </v-list-item-action>

            <v-list-item-content>
              <v-list-item-title>
                <input class="form-contro tet active" type="text" v-model="note.top" placeholder="Рейтинг"/>
              </v-list-item-title>
            </v-list-item-content>

            <v-list-item-action>
              <v-icon>message</v-icon>
            </v-list-item-action>
          </v-list-item>

          <v-divider inset></v-divider>

          <v-list-item>
            <v-list-item-action>
              <v-icon>email</v-icon>
            </v-list-item-action>

            <v-list-item-content>
              <v-list-item-title>
                <input class="form-contro tet" type="email" v-model="note.emails" placeholder="Email"/>
              </v-list-item-title>
            </v-list-item-content>
          </v-list-item>

          <v-divider inset></v-divider>

          <v-list-item>
            <v-list-item-action>
              <v-icon>event</v-icon>
            </v-list-item-action>

            <v-list-item-content>
              <v-list-item-title>
                <input class="form-control tet" v-model="note.content" placeholder="Дата рождения" />
              </v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list>

        <v-img
          src="https://picsum.photos/700?image=996"
          height="200px"
        ></v-img>
      </v-card>
    </v-col>
  </v-row>

 <button class="btn btn-danger" @click="removeNote()">{{"Remove"| localize}}</button>
            <button class="btn btn-success" @click="saveNote()">{{"Save"| localize}}</button>

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

