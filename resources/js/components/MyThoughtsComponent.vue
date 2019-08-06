<template>
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form-component @new="addThought"></form-component>

            <thought-component 
                v-for="(thought, index) in thoughts" 
                :key="thought.id"
                :thought="thought"
                @delete="deleteThought(index)"
                @update="updateThought(index, ...arguments)">                
            </thought-component>

        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                thoughts: [{
                    'id': 1,
                    'description': 'abc',
                    'created_at': '03/08/2019'
                }]
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            addThought(thought) {
                this.thoughts.push(thought);
            },
            updateThought(index, thought) {
                this.thoughts[index] = thought;
            },
            deleteThought(index) {
                this.thoughts.splice(index, 1);
            }
        }
    }
</script>
