<template>
  <div>
    <label for>Nombre:</label>
    <input type="text" v-model="nombre" />
    <label for>Precio:</label>
    <input type="text" v-model="precio" />
    <br />
    <button v-on:click="adicionarProducto()">Agregar producto</button>

    <p>{{productos}}</p>
    <h1>Lista de Productos</h1>
    <table class="table">
      <tr>
        <td>NOMBRE</td>
        <td>PRECIO</td>
        <td>ACCIONES</td>
      </tr>
      <tr v-for="(prod, index) in productos" :key="index">
        <td>{{ prod.nombre }}</td>
        <td>{{ prod.precio }}</td>
        <td>
          <button v-on:click="addCarrito(prod)">vender</button>
        </td>
      </tr>
    </table>
    <div class="row">
      <div class="col-md-3" v-for="(c, index) in carrito" :key="index">
        <h1>{{ c.nombre }}</h1>
        <h5>precio: {{ c.precio }}</h5>
      </div>
      <h3>Total a cobrar: {{total}}</h3>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      titulo: "Carrito de Compras",
      productos: [],
      carrito: [],
      nombre: "",
      precio: 0,
      total: 0
    };
  },
  created() {
    console.log("Created cargado...");
    console.log(this.productos);
  },
  mounted() {
    console.log("Mounted cargado...");
  },

  methods: {
    adicionarProducto() {
      var obj = {
        nombre: this.nombre,
        precio: this.precio
      };
      this.productos.push(obj);
    },

    addCarrito(prod) {
      this.carrito.push(prod);
      this.total = parseInt(this.total) + parseInt(prod.precio);
    }
  }
};
</script>

<style>
</style>