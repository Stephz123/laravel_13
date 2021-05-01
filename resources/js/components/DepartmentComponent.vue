<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Department Component</div>

                    <div class="card-body">
                        <p v-for="dept in departments">
                            {{dept.name}}
                        </p>
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
                departments: []
            }
        },
        props: [
            'data'
        ],
        mounted() {
            console.log('departments Component mounted.')
            this.departments = this.data
            console.log(this.departments)
        }
    }
</script>
