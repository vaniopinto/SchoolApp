<script setup>
    defineProps(['courses']);
</script>

<template>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th></th>
                </tr>
            </thead>
            
            <tbody>
                <tr v-for="course in courses" :key="courses.id">
                    <td>{{ course.name}}</td>
                    <td><button>Ver</button><button>Editar</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<style>
    table {
        display: inline-table;
        margin-inline: auto;
        width: 50%;
        margin-top: 100px;
    }

    tr, td, th {
        padding: 10px;
        border: 2px solid white;
    }
</style>