<script setup>
defineProps(['students']);
</script>

<template>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Número</th>
                    <th>Data de inscrição</th>
                    <th></th>
                </tr>
            </thead>
            
            <tbody>
                <tr v-for="student in students" :key="student.id">
                    <td>{{ student.first_name + " " + student.last_name }}</td>
                    <td>{{ student.email }}</td>
                    <td>{{ student.number }}</td>
                    <td>{{ student.created_at }}</td>
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