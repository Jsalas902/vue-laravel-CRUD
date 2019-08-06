<template>
    <div class="card mt-4">
        <div class="card-header">Publicado en {{thought.created_at}}</div>

        <div class="card-body">
            <input v-if="editMode" type="text" class="form-control" v-model="thought.description">
            <P v-else>{{thought.description}}</P>
        </div>
        <div class="card-footer">

            <button v-if="editMode" class="btn btn-success" v-on:click="onClickUpdate()">
                Guardar cambios
            </button>
            <button v-else class="btn btn-light" v-on:click="onClickEdit()">
                Editar
            </button>

            <button class="btn btn-danger" v-on:click="onClickDelete()">
                Eliminar
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['thought'],
        data() {
            return {
                editMode: false
             }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            onClickEdit() {
                this.editMode= true;
            },
            onClickUpdate() {
                this.editMode = false;
                this.$emit('update', thought);
            },
            onClickDelete() {
                this.$emit('delete');
            }
        }
    }
</script>
