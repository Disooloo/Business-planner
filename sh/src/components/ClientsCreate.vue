<template>
    <div class="client row">
        <div>
            <h4>{{"Client"| localize}}</h4>
                <div class="form-grou">
                    <input class="form-contro tet" type="text"  placeholder="ФИО"/>
                    <input class="form-contro tet" type="text"  placeholder="Телефон"/>
                    <input class="form-contro tet" type="text"  placeholder="Email"/>
                    <input class="form-contro tet" type="text"  placeholder="Сумма"/>
                    <textarea class="form-control tet"  placeholder="Описание"></textarea>

                </div>
            <button class="btn btn-danger">{{"Remove"| localize}}</button>
            <button class="btn btn-success">{{"Save"| localize}}</button>
        </div>
    </div>
</template>

<script>
export default {
    
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