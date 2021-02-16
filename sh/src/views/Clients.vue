<template>
      <div>
    <div class="page-title">
      <h3>{{'Clients'|localize}}</h3>
    </div>
    <section>
      <Loader v-if="loading"/>
      <div class="row" v-else>
        <CategoryCreate @created="addNewCategory"/>

        <CategoryEdit
          v-if="categories.length"
          :categories="categories"
          :key="categories.length + updateCount"
          @updated="updateCategories"
        />
        <p v-else class="center">{{'NoClients'|localize}}</p>
      </div>
    </section>
  </div>
</template>

