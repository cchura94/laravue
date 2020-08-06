<template>
  <div>
    <h1>Actividades</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Nueva Actividad</h2>
          <div class="row">
            <div class="col-md-12">
              <input type="text" class="form-control" v-model="titulo" />
              <button class="btn btn-primary" @click="nuevaActividad()">Agregar actividad</button>
            </div>
          </div>

          <div class="row">
            <div class="col-md-5 bg-success m-2" v-for="(act, index) in actividades" :key="act">
              <h3>{{ act.titulo }}</h3>
              <button class="btn btn-danger" @click="eliminarActividad(index)">x</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h2>Actividades en Proceso</h2>
        </div>
        <div class="col-md-4">
          <h2>Actividades Terminadas</h2>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      actividades: [
        { titulo: "aprender vue.js" },
        { titulo: "aprender Laravel" },
        { titulo: "aprender Node.js" }
      ],
      titulo: ""
    };
  },
  methods: {
    nuevaActividad() {
      this.actividades.push({ titulo: this.titulo });
    },
    eliminarActividad(i) {
      this.actividades.splice(i, 1);
    }
  }
};
</script>

<style>
</style>