<script setup>
import Layout from '@/layouts/Dashboard.vue';
</script>

<template>
    <Layout>
        <template #header>
             <!-- BEGIN PAGE HEADER -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">Página</div>
                            <h1 class="page-title">Cadastro de alunos</h1>
                        </div>
                    </div>
                </div>
            </div>
        </template>

        <template #body>
            <main id="content" class="page-body">
                <div class="container-xl">
                    Cadastro de alunos
                </div>
            </main>
        </template>
    </Layout>
</template>