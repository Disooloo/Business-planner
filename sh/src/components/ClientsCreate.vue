<template>
    <div class="client row">
        <div>
            <h4>{{"Client"| localize}}</h4>
                <div class="form-grou">
                    <input class="form-contro tet" type="text" v-model="note.nameS" placeholder="ФИО"/>
                    <input class="form-contro tet" type="text" v-model="note.phone" placeholder="Телефон"/>
                    <input class="form-contro tet" type="text" v-model="note.emails" placeholder="Email"/>
                    <input class="form-contro tet" type="text" v-model="note.top" placeholder="Рейтинг"/>
                    <input class="form-contro tet" type="text" v-model="note.sum" placeholder="Сумма"/>
                    <textarea class="form-control tet" v-model="note.textO" placeholder="Описание"></textarea>

                </div>
            <button class="btn btn-danger" @click="removebtnClients()">{{"Remove"| localize}}</button>
            <button class="btn btn-success" @click="savebtnClients()">{{"Save"| localize}}</button>
        </div>
    </div>
</template>

<script>
export default {
    name: "Clients",
    props: ["client"],
    methods: {
        savebtnClients() {
            this.$emit("app-savebtnClients");
    },
        removebtnClients(){
            this.$$emit("app-removebtnClients");
        }
    },
}
</script>

<style>
.else{
    text-align: center;
}
.tet::placeholder{
    color:black;
}
</style>