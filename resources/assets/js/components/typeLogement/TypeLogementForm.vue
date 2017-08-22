<template>
    <div>
        <a class="card-header-icon button is-primary is-outlined m-t-5 m-r-5" @click="handleShowModal">
            <span class="icon">
                <i class="fa fa-plus"></i>
            </span>
        </a>

        <div class="modal" v-bind:class="showModal ? 'is-active' : ''">
            <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Enregistrer un type de logement</p>
                    <button class="delete" aria-label="close" @click.prevent="showModal = false"></button>
                </header>
                <section class="modal-card-body">
                    <form>
                        <div class="field">
                            <input type="text" class="input" v-model="name"
                                   v-bind:class="this.error.name ? 'is-danger' : ''"
                                   placeholder="Entrer le type de logement">
                            <p class="help is-danger" v-if="this.error.name">{{ this.error.name[0] }}</p>
                        </div>
                    </form>
                </section>
                <footer class="modal-card-foot">
                    <button class="button is-success" v-bind:class="this.loading ? 'is-loading' : ''"
                            @click.prevent="handleSubmit">
                        Enregistrer
                    </button>
                </footer>
            </div>
        </div>
    </div>
</template>

<script>
    import {mapState} from 'vuex'

    export default {
        data() {
            return {
                showModal: false,
                loading: false,
                name: '',
                error: {}
            }
        },
        computed: {
            ...mapState({
                typeLogementStore: state => state.typeLogementStore
            })
        },
        methods: {
            handleShowModal() {
                this.showModal = true
            },
            handleSubmit () {
                this.loading = true
                this.$store.dispatch('addTypeLogementObject', {name: this.name}).then((response) => {
                    this.loading = false
                    this.name = '';
                    this.showModal = false
                }).catch((err) => {
                    if(err.response.status == 422) {
                        this.error = err.response.data.errors
                        this.loading = false
                    }
                    if(err.response.status == 500) {
                        console.log(err.response.data)
                        // window.location = "http://google.com";
                    }
                })

            }
        }
    }
</script>
