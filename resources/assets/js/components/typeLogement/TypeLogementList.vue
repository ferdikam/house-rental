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
            <tr v-for="typeLogement in typeLogementStore.typeLogements">
                <td>{{ typeLogement.name }}</td>
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
            this.$store.dispatch('setTypeLogementList')
        },
        computed: {
            ...mapState({
                typeLogementStore: state => state.typeLogementStore
            })
        }

    }
</script>
