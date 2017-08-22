const state = {
    typeLogements: []
}

const mutations = {
    SET_TYPE_LOGEMEMENT_LIST (state, typeLogementList) {
        state.typeLogements = typeLogementList
    },
    ADD_TYPE_LOGEMENT (state, typeLogementObj) {
        state.typeLogements.push(typeLogementObj)
    }
}

const actions = {

    setTypeLogementList: ({commit}, typeLogementList) => {
        return axios.get('/type-logement').then((response) => {
            if(response.status === 200) {
                commit('SET_TYPE_LOGEMEMENT_LIST', response.data)
                return response.data
            }
        })
    },
    addTypeLogementObject: ({commit}, typeLogementObj) => {
        return axios.post('/type-logement', typeLogementObj).then((response) => {
            console.log(response.data.data)
            commit('ADD_TYPE_LOGEMENT', response.data.data)
        })
    }
}

export default {
    state, mutations, actions
}