<template>

<div id="cr">
    <div class="page-title">
      <h3>Создать</h3>
    </div>
    <div class="card">
        <div class="title">Создать новую запись</div>
        <div class="link">
        <router-link to="/record" tag="h5"> Новая запись </router-link>
        </div>  
    </div>
      <div class="card">
        <div class="title">Создать или редактировать категорию</div>
        <div class="link">
        <router-link to="/categories" tag="h5"> Категории </router-link>
        </div>  
    </div>
</div>

</template>


<script>
export default {
    metaInfo(){
        return{
            title: this.$title("Menu_Create")
        }
    }
}

</script>
<style lang="sass">
.card
    width: 350px;
    height: 250px;
    display: block;
    
    .title
        display: flex;
        text-align: center;
        align-items: center;
        justify-content: center;
        padding-top: 40px;
        font-size: 20px;

    .link
        align-items: center;
        padding: 90px;
        cursor: pointer;
        text-align: center;

        
        &:hover
            color: blue;
</style>

