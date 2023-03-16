<template>
    <table class="bg-white">
        <caption>{{nombre}}</caption>
        <tr>
            <th v-for="campo in campos">
                <button class="cursor-pointer rounded text-lg bg-gray-500 text-white hover:bg-sky-700 hover:text-amber-900" v-on:click="ordena(campo)">{{campo}}</button>
            </th>
        </tr>
        <tr v-for="fila in filas">
            <td v-for="valor in fila">{{valor}}</td>
            <td><button @click="editar(fila.id)">Editar</button></td>
            <td><button @click="borrar(fila.id)">Borrar</button></td>
        </tr>
    </table>
</template>

<script>
import axios from "axios";
export default {
    name: "tabla",
    props: ["filas_serializado", "campos_serializado", "nombre"],
    data(){
        return{
            filas: [],
            campos: [],
        }
    },
    mounted(){
        this.campos = JSON.parse(this.campos_serializado);
        this.filas = JSON.parse(this.filas_serializado);
    },
    methods: {
        ordena: function (campo){
            this.filas=this.filas.sort((a, b)=>{
                if (a[campo]>b[campo]){
                    return 1;
                }else{
                    return -1;
                }
            })
        },
        editar: function (id){
            window.location.href+="/"+id+"/edit";
        },
        borrar: function (id){

            axios.delete(window.location.href+"/"+id)
                .then((response) =>{
                    this.filas=response.data.alumnos;
                })
                .catch((error) =>{
                    alert("Error en la solicutud"+error);
                })
        }
    }
}
</script>

<style scoped>

</style>
