<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th>Nom</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="commune in communeStore.communes">
                <td>{{ commune.name }}</td>
                <td></td>
            </tr>

            </tbody>
        </table>
    </div>
</template>

<script>
    import {mapState} from 'vuex'

    export default {

        created () {
            this.$store.dispatch('setCommuneList')
        },
        computed: {
            ...mapState({
               communeStore: state => state.communeStore
            })
        }

    }
</script>