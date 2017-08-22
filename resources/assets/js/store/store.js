import Vue from 'vue'
import Vuex from 'vuex'

import communeStore from '../components/commune/communeStore'
import typeLogementStore from '../components/typeLogement/typelogementStore'

Vue.use(Vuex)
const debug = process.env.NODE_ENV !== 'production'

export default new Vuex.Store({
    modules: {communeStore, typeLogementStore},
    strict : debug
})