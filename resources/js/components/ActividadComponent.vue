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
            <div class="col-md-5" v-for="(act, index) in actividades" :key="act">
              <div class="bg-success m-2" v-if="act.estado == 0">
                <h3>{{ act.titulo }}</h3>
                <button class="btn btn-danger" @click="eliminarActividad(index)">x</button>
                <button class="btn btn-warning" @click="cambiarActividad(act)">add</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h2>Actividades en Proceso</h2>
          <div class="row">
            <div class="col-md-5" v-for="(act, index) in actividades" :key="act">
              <div class="bg-success m-2" v-if="act.estado == 1">
                <h3>{{ act.titulo }}</h3>
                <button class="btn btn-danger" @click="eliminarActividad(index)">x</button>
                <button class="btn btn-info" @click="cambiarActividad(act)">terminar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h2>Actividades Terminadas</h2>
          <div class="row">
            <div class="col-md-5" v-for="(act, index) in actividades" :key="act">
              <div class="bg-success m-2" v-if="act.estado == 2">
                <h3>{{ act.titulo }}</h3>
                <button class="btn btn-danger" @click="eliminarActividad(index)">x</button>
                <button class="btn btn-info" @click="cambiarActividad(act)">terminar</button>
              </div>
            </div>
          </div>
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
        {
          titulo: "aprender vue.js",
          estado: 0
        },
        {
          titulo: "aprender Laravel",
          estado: 0
        },
        {
          titulo: "aprender Node.js",
          estado: 0
        }
      ],
      titulo: ""
    };
  },
  methods: {
    nuevaActividad() {
      this.actividades.push({
        titulo: this.titulo,
        estado: 0
      });
    },
    eliminarActividad(i) {
      this.actividades.splice(i, 1);
    },
    cambiarActividad(obj) {
      if (obj.estado == 0) {
        obj.estado = 1;
      } else {
        obj.estado = 2;
      }
    }
  }
};
</script>

<style></style>
